<?php 
/**
 * The template for displaying the header
 * 
 * @package Day Six theme
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet"
    >
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <title><?php bloginfo( 'name' ); ?> <?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <!-- Header -->
    <header>
        <section class="header-top" id="navbarscrol">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-top-header">
                        <div class="social-header">
                            <?php do_action('wpml_add_language_selector'); ?>
                            <a class="righticon" href="https://www.instagram.com/andcowoman/" target="_blank">
                                <img src="/wp-content/themes/andcowoman-outlet/img/icons/instagram.svg">
                            </a>
                            <a class="righticon" href="https://www.facebook.com/AndCo-Woman-891634994344460/"
                                target="_blank">
                                <img src="/wp-content/themes/andcowoman-outlet/img/icons/facebook.svg">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bga">
            <nav id="nav" class=" navi">
                <div class="container">
                    <div class="row ">
                        <div class="col-12">
                            <div class="navbar">
                                <div class="row row-header relative bga">
                                    <div class="col-3 d-block d-lg-none hamburger">
                                        <div class="hamburger-open">
                                            <span onclick="openNav()"
                                                id="Hamburger"><?php echo file_get_contents( get_template_directory() . '/img/icons/Hamburger.svg' ) ?></span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-2 justify-content-lg-start d-flex justify-content-center">
                                        <a class="navbar-brand" href="<?php if(ICL_LANGUAGE_CODE=='nl'): ?>
                                                        /
                                                    <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
                                                        /?lang=en
                                                    <?php elseif(ICL_LANGUAGE_CODE=='de'): ?>
                                                        /?lang=de
                                                    <?php endif; ?>">
                                            <img id="navbar-id" class="w-[141.33px]"
                                                src="/wp-content/themes/andcowoman-outlet/img/and-co-woman-logo-blk-outlet.png"></a>
                                    </div>
                                    <div class="col-10 d-none d-lg-block">
                                        <div class="row">
                                            <div class="col-12 flex-header-cart">
                                                <div class="header-add p-right">
                                                  
                                                    <?php foreach (wp_get_menu_array("home") as $item) { ?>
                                                    <p class="home-header menu-item first-of-type:border-r-[1px] first-of-type:pr-3 first-of-type:mr-3 first-of-type:border-[#efefef]"><a
                                                            href="<?php echo $item["url"]; ?>"><?php echo $item["title"]; ?></a>
                                                    </p>
                                                    <?php } ?>
                                                </div>
                                                <div class="rightmenu">
                                                    <div class="search-blok balk">
                                                        <form role="search" method="get"
                                                            class="woocommerce-product-search balk-icon"
                                                            action="/shop/">
                                                            <label class="screen-reader-text"
                                                                for="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>"><?php esc_html_e( 'Search for:', 'woocommerce' ); ?></label>
                                                            <input type="search"
                                                                id="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>"
                                                                class="search-field"
                                                                placeholder="<?php if(ICL_LANGUAGE_CODE=='nl'): ?><?php echo (get_global_option('optie_productzoeken_nl', 'option'));  ?><?php elseif(ICL_LANGUAGE_CODE=='en'): ?><?php echo (get_global_option('optie_productzoeken_en', 'option'));  ?><?php elseif(ICL_LANGUAGE_CODE=='de'): ?><?php echo (get_global_option('optie_productzoeken_de', 'option'));  ?><?php endif; ?>"
                                                                value="<?php echo get_search_query(); ?>" name="s"
                                                                autocomplete="off" />
                                                            <button class="button-search button-search-add"
                                                                type="submit" value="Search" aria-label="Search"><img
                                                                    src="/wp-content/themes/andcowoman-outlet/img/icons/search.svg"></button>
                                                            <div class="button-one-search"><img
                                                                    src="/wp-content/themes/andcowoman-outlet/img/icons/search.svg">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="img-close">
                                                        <img src="/wp-content/themes/andcowoman-outlet/img/icons/x.svg">
                                                    </div>
                                                    <div class="cart-relative p-left-cart cart-add">
                                                        <a onclick="openNav1()" class="cursor-pointer">

                                                            <svg width="22px" height="24px" viewBox="0 0 22 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <g id="Meandco" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                                    <g id="Meandco---Home" transform="translate(-1333, -92)" stroke="#000000" stroke-width="2">
                                                                        <g id="shop-cart" transform="translate(1333, 92)">
                                                                            <path d="M3.31498048,6 L18.6850954,6 C19.607259,6 20.3802697,6.69692709 20.4754765,7.61416284 L21.9701611,22.0141628 C22.0727961,23.002963 21.3544173,23.8877461 20.3656171,23.9903811 C20.3038787,23.9967894 20.2418501,24 20.17978,24 L1.8202959,24 C0.826183352,24 0.0202959022,23.1941125 0.0202959022,22.2 C0.0202959022,22.1379299 0.023506485,22.0759013 0.0299147832,22.0141628 L1.52459936,7.61416284 C1.61980618,6.69692709 2.39281685,6 3.31498048,6 Z" id="Rectangle-8"></path>
                                                                            <path d="M15.2777778,0 L15.2777778,5.4 C15.2777778,7.71708397 13.3630709,9.6 11,9.6 C8.63744857,9.6 6.72222222,7.71452079 6.72222222,5.4 L6.72222222,0" id="Combined-Shape" transform="translate(11, 4.8) scale(1, -1) translate(-11, -4.8)"></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                         
                                                            <div class="absolute left-0 right-0 bottom-0 w-[22px] h-[18px] flex items-center justify-center"><span class="text-10 font-medium"><?php echo WC()->cart->get_cart_contents_count(); ?></span></div>
                                                            <!-- <p class="cart-absolute">&Co</p> -->
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 d-block text-right d-lg-none">
                                        <div class="cartmobile pt-1">
                                            <div class="cart-relative">
                                                <a onclick="openNav1()" class="cursor-pointer">
                                                            <svg width="22px" height="24px" viewBox="0 0 22 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <g id="Meandco" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                                    <g id="Meandco---Home" transform="translate(-1333, -92)" stroke="#000000" stroke-width="2">
                                                                        <g id="shop-cart" transform="translate(1333, 92)">
                                                                            <path d="M3.31498048,6 L18.6850954,6 C19.607259,6 20.3802697,6.69692709 20.4754765,7.61416284 L21.9701611,22.0141628 C22.0727961,23.002963 21.3544173,23.8877461 20.3656171,23.9903811 C20.3038787,23.9967894 20.2418501,24 20.17978,24 L1.8202959,24 C0.826183352,24 0.0202959022,23.1941125 0.0202959022,22.2 C0.0202959022,22.1379299 0.023506485,22.0759013 0.0299147832,22.0141628 L1.52459936,7.61416284 C1.61980618,6.69692709 2.39281685,6 3.31498048,6 Z" id="Rectangle-8"></path>
                                                                            <path d="M15.2777778,0 L15.2777778,5.4 C15.2777778,7.71708397 13.3630709,9.6 11,9.6 C8.63744857,9.6 6.72222222,7.71452079 6.72222222,5.4 L6.72222222,0" id="Combined-Shape" transform="translate(11, 4.8) scale(1, -1) translate(-11, -4.8)"></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                    <div class="absolute left-0 right-0 bottom-0 w-[22px] h-[18px] flex items-center justify-center"><span class="text-10 font-medium"><?php echo WC()->cart->get_cart_contents_count(); ?></span></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </section>
        <section class="d-block d-lg-none">
            <div id="mySidenav" class="sidenav">
                <div id="move-4" class="menu-header">
                    <div class="cart-relative">
                                                <a onclick="openNav1()" class="cursor-pointer">
                                                            <svg width="22px" height="24px" viewBox="0 0 22 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <g id="Meandco" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                                    <g id="Meandco---Home" transform="translate(-1333, -92)" stroke="#000000" stroke-width="2">
                                                                        <g id="shop-cart" transform="translate(1333, 92)">
                                                                            <path d="M3.31498048,6 L18.6850954,6 C19.607259,6 20.3802697,6.69692709 20.4754765,7.61416284 L21.9701611,22.0141628 C22.0727961,23.002963 21.3544173,23.8877461 20.3656171,23.9903811 C20.3038787,23.9967894 20.2418501,24 20.17978,24 L1.8202959,24 C0.826183352,24 0.0202959022,23.1941125 0.0202959022,22.2 C0.0202959022,22.1379299 0.023506485,22.0759013 0.0299147832,22.0141628 L1.52459936,7.61416284 C1.61980618,6.69692709 2.39281685,6 3.31498048,6 Z" id="Rectangle-8"></path>
                                                                            <path d="M15.2777778,0 L15.2777778,5.4 C15.2777778,7.71708397 13.3630709,9.6 11,9.6 C8.63744857,9.6 6.72222222,7.71452079 6.72222222,5.4 L6.72222222,0" id="Combined-Shape" transform="translate(11, 4.8) scale(1, -1) translate(-11, -4.8)"></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                    <div class="absolute left-0 right-0 bottom-0 w-[22px] h-[18px] flex items-center justify-center"><span class="text-10 font-medium"><?php echo WC()->cart->get_cart_contents_count(); ?></span></div>
                                                </a>
                    </div>
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                        <img src="/wp-content/themes/andcowoman-outlet/img/icons/x.svg" alt="">
                    </a>
                </div>
                <div id="move-2" class="nav-padding">
                    <div class="nav-hamburger pb-half">
                        <?php foreach (wp_get_menu_array("home") as $item) { ?>
                        <p class="home-header-hamburger"><a
                                href="<?php echo $item["url"]; ?>"><?php echo $item["title"]; ?></a></p>
                        <?php } ?>
                    </div>
                    <div class="search-blok">
                        <form role="search" method="get" class="woocommerce-product-search balk-icon" action="/shop/">
                            <label class="screen-reader-text"
                                for="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>"><?php esc_html_e( 'Search for:', 'woocommerce' ); ?></label>
                            <input type="search"
                                id="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>"
                                class="search-field"
                                placeholder="<?php if(ICL_LANGUAGE_CODE=='nl'): ?><?php echo (get_global_option('optie_productzoeken_nl', 'option'));  ?><?php elseif(ICL_LANGUAGE_CODE=='en'): ?><?php echo (get_global_option('optie_productzoeken_en', 'option'));  ?><?php elseif(ICL_LANGUAGE_CODE=='de'): ?><?php echo (get_global_option('optie_productzoeken_de', 'option'));  ?><?php endif; ?>"
                                value="<?php echo get_search_query(); ?>" name="s" autocomplete="off" />
                            <button class="button-search" type="submit" value="Search" aria-label="Search"><img
                                    src="/wp-content/themes/andcowoman-outlet/img/icons/search.svg"></button>
                        </form>
                    </div>
                </div>
                <div id="move-3" class="nav-bottom">
                    <div class="social-nav">
                        <div class="social-header">
                            <a class="margin-px-social" href="https://www.instagram.com/andcowoman/">
                                <img src="/wp-content/themes/andcowoman-outlet/img/icons/instagram.svg" target="_blank">
                            </a>
                            <a href="https://www.facebook.com/AndCo-Woman-891634994344460/" target="_blank">
                                <img src="/wp-content/themes/andcowoman-outlet/img/icons/facebook.svg">
                            </a>
                        </div>
                    </div>
                    <div class="logo-nav">
                        <a class="" href="
                    <?php if(ICL_LANGUAGE_CODE=='nl'): ?>
                         /
                     <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
                       /?lang=en
                      <?php elseif(ICL_LANGUAGE_CODE=='de'): ?>
                        /?lang=de
                      <?php endif; ?>">
                            <img id="nav-logo-img" src="/wp-content/themes/andcowoman-outlet/img/and-co-woman-logo-blk.png"></a>
                    </div>
                </div>
        </section>
        <!-- Right slider  -->
        <div id="mySidebar-r" class="sidebar-r">
            <div class="side-panel-header-r">
                <a href="javascript:void(0)" class="closebtn-r" onclick="closeNav1()">
                    <img src="/wp-content/themes/andcowoman-outlet/img/icons/x.svg" alt="">
                </a>
            </div>
            <div class="mini-cart-header" id="move-mini-cart">
                <?php include get_template_directory() . '/woocommerce/cart/mini-cart.php'; ?>
            </div>
        </div>
        <!-- Overlay -->
        <div onclick="closeNav1()" id="overlay-r"></div>
    </header>
    <div class="overlay-header"></div>