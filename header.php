<!DOCTYPE html>
<html <?php language_attributes()?>>

<head>
    <meta charset="<?php echo bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farzaa</title>
    <link rel="shortcut icon" href="<?php the_field('favicon', 'option'); ?>" type="image/x-icon">

    <!-- <link rel="stylesheet" href="assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/all.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/sharp-regular.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/sharp-solid.min.css">
    <link rel="stylesheet" href="assets/vendor/modal-video/modal-video.min.css">
    <link rel="stylesheet" href="assets/vendor/mean-menu/meanmenu.min.css">
    <link rel="stylesheet" href="assets/vendor/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendor/slick/slick.css">
    <link rel="stylesheet" href="assets/vendor/nice-select/nice-select.css"> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"></script>

    <!-- MAIN CSS -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->

    <?php wp_head(); ?>
</head>

<body class="fz-1-body" <?php body_class(); ?>>
    <!-- PRE LOADER STARTS HERE -->
    <!-- <div id="pre-loader">
        <div id="loader"></div>
    </div> -->
    <!-- PRE LOADER ENDS HERE -->

    <!-- fz-offcanvas-main-nav-wrapper start -->
    <div class="fz-offcanvas-main-nav-wrapper">
        <button class="fz-button-close"><i class="fa-thin fa-xmark"></i></button>
        <div class="fz-offcanvas-main-nav-wrapper-sections">
            <div class="fz-offcanvas-main-nav-section">
                <div class="mobile-menu-updated"></div>
            </div>
            <div class="fz-offcanvas-main-sideinfo-section">

                <div class="fz-offcanvas-main-sideinfo">
                    <div class="fz-offcanvas-main-search mb-45 d-block d-sm-none">
                        <form action="#">
                            <input type="search" name="search" placeholder="Search Product" id="search-input">
                            <button type="submit"><i class="fa-light fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                    <div class="fz-offcanvas-main-actions mb-15">
                        <a href="cart.html"><span class="fz-off-actions-icon"><i class="fa-thin fa-bag-shopping"></i>
                            </span> <span class="fz-off-actions-text"><span>View Cart</span><span>View Cart</span></span></a>
                        <a href="#"><i class="fa-thin fa-heart"></i> <span class="fz-off-actions-text"><span>View Wishlist</span><span>View Wishlist</span></span></a>
                    </div>

                    <div class="fz-offcanvas-main-contacts">
                        <h4 class="fz-offcanvas-main-contacts-title mb-30">Get In Touch</h4>

                        <ul class="fz-offcanvas-main-contacts-list">
                            <li>
                                <i class="fa-thin fa-location-dot"></i>
                                <span class="fz-offcanvas-main-contact-text">989 Bel Meadow Drive Los Angeles, CA 90017</span>
                            </li>
                            <li>
                                <i class="fa-thin fa-phone-flip"></i>
                                <span class="fz-offcanvas-main-contact-text">
                                    <a href="tel:(+1)909-407-2988">(+1) 909-407-2988</a> <br>
                                    <a href="tel:(+1)470-142-2412">(+1) 470-142-2412</a>
                                </span>
                            </li>

                            <li>
                                <i class="fa-thin fa-clock"></i>
                                <span class="fz-offcanvas-main-contact-text">Store Hours:<br><span class="fz-opentime">Mon - Sat : 8am - 5pm</span></span>
                            </li>

                        </ul>
                    </div>

                    <div class="fz-offcanvas-main-socials mt-45">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i><i class="fa-brands fa-youtube"></i></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- fz-offcanvas-main-nav-wrapper end-->


    <!-- CART MODAL START -->
    <div class="overlay"></div>
    <div class="cart-area cart-area-modal" id="cart-area-modal">
        <div class="cart__header">
            <h3 class="cart__title">Shopping cart</h3>
            <button class="cart-area-modal-close-btn"><i class="fa-regular fa-xmark"></i></button>
        </div>
        <div class="cart__body">
            <table>

                <thead>
                    <tr>
                        <th>Product</th>
                        <th>price</th>
                        <th>quantity</th>
                        <th>total</th>
                        <th>remove</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <div class="cart-product">
                                <div class="cart-product__img">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/fz-3-pro-1.png" alt="Product Image">
                                </div>
                                <div class="cart-product__txt">
                                    <h6><a href="shop-details.html">Contemporary 4 Panel White Primed Door (40mm)</a></h6>
                                </div>
                            </div>
                        </td>
                        <td>$55.00</td>
                        <td>
                            <div class="cart-product__quantity">
                                <div class="cart-product__quantity-btns">
                                    <button class="cart-product__minus"><i class="fa-light fa-minus"></i></button>
                                    <button class="cart-product__plus"><i class="fa-light fa-plus"></i></button>
                                </div>
                                <input type="number" name="product-quantity-input" class="cart-product-quantity-input" min="0" value="1" readonly="">
                            </div>
                        </td>
                        <td>$55.00</td>
                        <td>
                            <button class="item-remove-btn">
                                <i class="fa-light fa-xmark"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="cart-product">
                                <div class="cart-product__img">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/fz-3-pro-2.png" alt="Product Image">
                                </div>
                                <div class="cart-product__txt">
                                    <h6><a href="shop-details.html">Contemporary 4 Panel White Primed Door (40mm)</a></h6>
                                </div>
                            </div>
                        </td>
                        <td>$55.00</td>

                        <td>
                            <div class="cart-product__quantity">
                                <div class="cart-product__quantity-btns">
                                    <button class="cart-product__minus"><i class="fa-light fa-minus"></i></button>
                                    <button class="cart-product__plus"><i class="fa-light fa-plus"></i></button>
                                </div>
                                <input type="number" name="product-quantity-input" class="cart-product-quantity-input" min="0" value="1" readonly="">
                            </div>
                        </td>
                        <td>$55.00</td>
                        <td>
                            <button class="item-remove-btn">
                                <i class="fa-light fa-xmark"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="cart-left-actions d-flex justify-content-end">
                <a href="cart.html" class="fz-1-banner-btn update-cart-btn">View Full cart</a>
            </div>
        </div>
    </div>
    <!-- CART MODAL END -->


    <!-- WISHLIST MODAL START -->
    <div class="cart-area cart-area-modal fz-wishlist-modal">
        <div class="cart__header">
            <h3 class="cart__title">Your Wishlist</h3>
            <button class="cart-area-modal-close-btn"><i class="fa-regular fa-xmark"></i></button>
        </div>

        <div class="cart__body">
            <table>

                <thead>
                    <tr>
                        <th>Product</th>
                        <th>price</th>
                        <th>action</th>
                        <th>total</th>
                        <th>remove</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <div class="cart-product">
                                <div class="cart-product__img">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/fz-3-pro-1.png" alt="Product Image">
                                </div>
                                <div class="cart-product__txt">
                                    <h6><a href="shop-details.html">Contemporary 4 Panel White Primed Door (40mm)</a></h6>
                                </div>
                            </div>
                        </td>
                        <td>$55.00</td>
                        <td>
                            <div class="fz-wishlist-action">
                                <button class="fz-add-to-cart-btn fz-1-banner-btn fz-wishlist-action-btn">Add to cart</button>
                            </div>
                        </td>
                        <td>$55.00</td>
                        <td>
                            <button class="item-remove-btn">
                                <i class="fa-light fa-xmark"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="cart-product">
                                <div class="cart-product__img">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/fz-3-pro-2.png" alt="Product Image">
                                </div>
                                <div class="cart-product__txt">
                                    <h6><a href="shop-details.html">Contemporary 4 Panel White Primed Door (40mm)</a></h6>
                                </div>
                            </div>
                        </td>
                        <td>$55.00</td>

                        <td>
                            <div class="fz-wishlist-action">
                                <button class="fz-add-to-cart-btn fz-1-banner-btn fz-wishlist-action-btn">Add to cart</button>
                            </div>
                        </td>
                        <td>$55.00</td>
                        <td>
                            <button class="item-remove-btn">
                                <i class="fa-light fa-xmark"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="cart-left-actions d-flex justify-content-end">
                <a href="cart.html" class="fz-1-banner-btn update-cart-btn">Go to cart</a>
            </div>
        </div>
    </div>
    <!-- WISHLIST MODAL END -->


    <!-- HEADER SECTION STARTS HERE -->
    <header class="fz-header-section fz-1-header-section">
        <div class="top-header">
            <div class="container">
                <div class="row gy-3 align-items-center">
                    <div class="col-lg-4 d-lg-block d-none">
                        <span class="mail-address">
                            <a href="mailto:info@webmail.com">
                                <i class="fa-regular fa-envelope-open"></i>
                                info@webmail.com
                            </a>
                        </span>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <h6>SALE: 400+ products up to 70% off. Shop Now</h6>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="top-header-right-actions">
                            <div class="top-header-socials">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>

                            <select name="currency" id="top-header-currency-dropdown">
                                <option value="USD">USD</option>
                                <option value="Taka">Taka</option>
                                <option value="Euro">Euro</option>
                                <option value="Rupee">Rupee</option>
                            </select>

                            <select name="language" id="top-header-language-dropdown">
                                <option value="English">English</option>
                                <option value="Bangla">Bangla</option>
                                <option value="French">French</option>
                                <option value="Hindi">Hindi</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bottom-header to-be-fixed">
            <div class="container">
                <div class="row g-0 align-items-center">
                    <div class="col-5 header-nav-container d-lg-block d-none">
                        <nav class="fz-header-nav">
                            <ul class="align-items-center">
                                <li class="fz-dropdown fz-nav-item">
                                    <a role="button" class="fz-nav-link"><span>home</span> <i class="fa-regular fa-plus"></i></a>

                                    <ul class="fz-submenu">
                                        <li><a href="index.html" class="fz-nav-link fz-submenu-nav-link">Door Shop</a></li>
                                        <li><a href="index-2.html" class="fz-nav-link fz-submenu-nav-link">Jewelry Shop</a></li>
                                        <li><a href="index-3.html" class="fz-nav-link fz-submenu-nav-link">Cake Shop</a></li>
                                    </ul>
                                </li>
                                <li class="fz-dropdown fz-nav-item">
                                    <a role="button" class="fz-nav-link"><span>shop</span> <i class="fa-regular fa-plus"></i></a>

                                    <ul class="fz-submenu">
                                        <li><a href="shop.html" class="fz-nav-link fz-submenu-nav-link">Shop</a></li>
                                        <li><a href="shop-details.html" class="fz-nav-link fz-submenu-nav-link">shop details</a></li>
                                    </ul>
                                </li>
                                <li class="fz-dropdown fz-nav-item">
                                    <a role="button" class="fz-nav-link"><span>pages</span> <i class="fa-regular fa-plus"></i></a>

                                    <ul class="fz-submenu">
                                        <li><a href="about.html" class="fz-nav-link fz-submenu-nav-link">about</a></li>
                                        <li><a href="faq.html" class="fz-nav-link fz-submenu-nav-link">FAQ</a></li>
                                        <li><a href="cart.html" class="fz-nav-link fz-submenu-nav-link">cart</a></li>
                                        <li><a href="account.html" class="fz-nav-link fz-submenu-nav-link">account</a></li>
                                        <li><a href="checkout.html" class="fz-nav-link fz-submenu-nav-link">Checkout</a></li>
                                    </ul>
                                </li>
                                <li class="fz-dropdown fz-nav-item">
                                    <a role="button" class="fz-nav-link">blog <i class="fa-regular fa-plus"></i></a>

                                    <ul class="fz-submenu">
                                        <li><a href="blog.html" class="fz-nav-link fz-submenu-nav-link">Blog</a></li>
                                        <li><a href="blog-details.html" class="fz-nav-link fz-submenu-nav-link">Blog-details</a></li>
                                    </ul>
                                </li>
                                <li class="fz-nav-item"><a href="contact.html" class="fz-nav-link">contact</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="col-lg-2 col-md-6 col-9">
                        <div class="fz-logo-container text-lg-center text-start">
                            <a href="index.php">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/logo-3.png" alt="logo" class="fz-logo">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-6 col-3">
                        <div class="fz-header-right-content">
                            <form action="#" class="bottom-header-search-form d-none d-sm-flex">
                                <input type="text" name="search" id="bottom-header-search-input" placeholder="Search keyword">
                                <button type="submit"><i class="fa-regular fa-magnifying-glass"></i></button>
                            </form>

                            <ul class="fz-header-right-actions d-flex align-items-center justify-content-end">
                                <li>
                                    <button class="fz-header-wishlist-btn d-none d-lg-block">
                                        <i class="fa-light fa-heart"></i>
                                    </button>
                                </li>
                                <li>
                                    <button class="fz-header-cart-btn d-none d-lg-block">
                                        <i class="fa-light fa-shopping-bag"></i>
                                        <span class="count">0</span>
                                    </button>
                                </li>
                                <li class="d-block d-lg-none"><a role="button" class="fz-hamburger"><i class="fa-light fa-bars-sort"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER SECTION ENDS HERE -->