try {
  let params = new URLSearchParams(document.location.search);
  let currentPage = 1;
  let loading = false;
  let canFetch = true;
  let shouldFetchNext = false;
  let hasMorePages = true;
  let maat = params.get("filter_maat") ? params.get("filter_maat") : undefined;
  let kleur = params.get("filter_kleur")
    ? params.get("filter_kleur")
    : undefined;
  let lang = params.get("lang") ? params.get("lang") : undefined;
  let s = params.get("s") ? params.get("s") : undefined;
  let fullUrl = window.location.href;

  const productContainer = document.querySelector("#products-container");
  const loadingElement = document.querySelector("#loading");

  const fetchProducts = async (page, maat, kleur, s, fullUrl) => {
    if (loading || !hasMorePages) return;
    if (!canFetch || loading) return;

    loading = true;
    canFetch = false;
    shouldFetchNext = false;

    loadingElement.style.display = "block";

    let url = `/wp-json/myproducts/v1/list?page=${page}&full_url=${fullUrl}`;

    if (maat !== undefined) {
      url += `&filter_maat=${maat}`;
    }

    if (kleur !== undefined) {
      url += `&filter_kleur=${kleur}`;
    }

    if (s !== undefined) {
      url += `&s=${s}`;
    }

    if (lang !== undefined) {
      url += `&lang=${lang}`;
    }

    const response = await fetch(url);
    if (!response.ok) {
      throw new Error("Network response was not ok");
    }
    const products = await response.json();

    if (products.length !== 0) {
      products.forEach((product) => {
        let productElement = `                    
                    <div class="col-6 col-lg-4 pb-half ">
                        <a class="flipsection" href="${product.permalink}">
                            <div class="relative hhover">
                                    <div class="kader-product-img">
                                        <img src="${
                                          product.thumbnail_url
                                        }" class="product-img" data-id="${
          product.id
        }">
                                        <div class="overlay">
                                            <img src="${
                                              product.gallery_images
                                                ? product.gallery_images
                                                : product.thumbnail_url
                                            }" class="product-img" data-id="${
          product.id
        }">
                                        </div>
                                    </div>
                                    <div class="pt-prod"></div>
                            </div>
                            <p class="fcc italic catt">
                                ${product.categories
                                  .map((category) => category)
                                  .join(", ")}
                            </p>
                            <h5 class="fwbold fca uppercase">
                                ${product.title}
                            </h5>
                            <div class="btn-flip">
                                <div class="message2">
                                    <span class="price">
                                        <p class="fbody large regular fca">${
                                          product.price_html
                                        }</p>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                  `;
        productContainer.insertAdjacentHTML("beforeend", productElement);
      });
    }

    if (products.length === 0) {
      hasMorePages = false;
    }

    loadingElement.style.display = "none";
    loading = false;

    setTimeout(() => {
      canFetch = true;
      if (shouldFetchNext) {
        currentPage++;
        fetchProducts(currentPage, maat, kleur, s, fullUrl);
      }
    }, 1000);
  };

  window.addEventListener("scroll", () => {
    if (
      window.innerHeight + window.scrollY >=
      productContainer.offsetHeight - 200
    ) {
      if (hasMorePages && !loading && canFetch) {
        currentPage++;
        fetchProducts(currentPage, maat, kleur, s, fullUrl);
      } else if (!hasMorePages) {
        loadingElement.style.display = "none";
      } else {
        loadingElement.style.display = "block";
        shouldFetchNext = true;
      }
    }
  });
} catch (error) {
  console.error("An error occurred:", error);
}
