// Navbar
try {
  $(".navbar-toggler").click(function () {
    if ($(".navbar-toggler").hasClass("collapsed")) {
      $("#Hamburger").removeClass("d-none");
      $("#Close").addClass("d-none");
      $("#navv").removeClass("bgd");
    } else {
      $("#Hamburger").addClass("d-none");
      $("#Close").removeClass("d-none");
      $("#navv").addClass("bgd");
    }
  });
} catch (error) { }

try {
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 10) {
      $(".wrap img").addClass("hideicon");
    } else {
      $(".wrap img").removeClass("hideicon");
    }
  });
} catch (error) { }

// Navbar resize on scroll

try {
  $(document).ready(function () {
    $(window).on("scroll", function () {
      if (Math.round($(window).scrollTop()) > 50) {
        $("nav").addClass("scrolled");
        $("main").addClass("sticky-padding");
      } else {
        $("nav").removeClass("scrolled");
        $("main").removeClass("sticky-padding");
      }
    });
  });
} catch (error) { }

try {
  const actualBtn = document.getElementById("input_1_6");

  const fileChosen = document.getElementById("file-chosen");

  actualBtn.addEventListener("change", function () {
    fileChosen.textContent = this.files[0].name;
  });
} catch (error) { }
try {
  smoothScroll.init();
} catch (error) { }

// try {
//   var button = document.querySelector(".balk-icon");
//   var elementBalk = document.querySelector(".balk");
//   var elementNone = document.querySelector(".header-add");
//   var elementTop = document.querySelector(".header-top");
//   var elementCart = document.querySelector(".cart-add");
//   var elementMain = document.querySelector("main");

//   button.addEventListener("click", function () {
//     elementBalk.classList.toggle("balk-big");
//     elementNone.classList.toggle("none");
//     elementTop.classList.toggle("none-fixed");
//     elementCart.classList.toggle("none");
//     elementMain.classList.toggle("overlay-grey");
//   });
// } catch (error) {}

try {
  var swiper = new Swiper(".mySwiper-nieuwe-collectie", {
    loop: true,
    slidesPerView: 1.7,
    spaceBetween: 20,
    breakpoints: {
      700: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
    },
  });
} catch (error) { }

try {
  var swiper = new Swiper(".mySwiper-look", {
    loop: true,
    slidesPerView: 1.7,
    spaceBetween: 20,
    breakpoints: {
      700: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
    },
  });
} catch (error) { }

