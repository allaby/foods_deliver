<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.themexriver.com/organio/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Mar 2022 09:23:41 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home 3 | Organio</title>
    <meta name="description" content="Organio - Organic Food Store HTML Templae ">
    <meta name="keywords" content="	farm, food, fresh, fruit, nutrition, organic, organic farm, organic food store, organic shop, organic store, organic theme, store, vegetable, woocommerce">
    <meta name="author" content="Themexriver">
    <link rel="shortcut icon" href="assets/img/logo/ficon.png" type="image/x-icon">
    <!-- Mobile Specific Meta -->

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/fontawesome-all.css">
    <link rel="stylesheet" href="/assets/css/flaticon.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/video.min.css">
    <link rel="stylesheet" href="/assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="/assets/css/rs6.css">
    <link rel="stylesheet" href="/assets/css/slick.css">
    <link rel="stylesheet" href="/assets/css/slick-theme.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body class="organio-wrapper">
    <div id="preloader"></div>
    <div class="up">
        <a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
    </div>
    <!-- Start of header section ============================================= -->
    <header id="organio-header" class="organio-header-section header-style-three">
        <div class="or-header-top">
            <div class="container">
                <div class="or-header-top-content d-flex justify-content-between align-items-center">
                    <div class="or-header-top-slug">
                        Welcome to our organico HTML Template! <?= $_SESSION['firstname'] ?>
                    </div>
                    <div class="or-header-top-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-dribbble"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                    </div>

                    <div class="or-header-top-login-btn position-relative">
                        <a href="<?= $_SESSION['is_logged'] ? '' : base_url('login')  ?>"><?= $_SESSION['is_logged'] ? 'My Account' : 'Login' ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="or-header-main-menu">
            <div class="container">
                <div class="or-header-main-menu-content d-flex justify-content-between align-items-center">
                    <div class="site-logo">
                        <a href="#"><img src="/assets/img/logo/logo3.png" alt=""></a>
                    </div>
                    <div class="or-header-main-navigation-btn d-flex">
                        <nav class="main-navigation-area clearfix ul-li">
                            <ul class="menu-navigation">

                                <li><a target="_blank" href="about.html">Commander</a></li>

                                <li><a target="_blank" href="about.html">Commant ça marche ?</a></li>
                                <li class="dropdown">
                                    <a target="_blank" href="%21.html#">No recettes</a>
                                    <ul class="dropdown-menu clearfix">
                                        <li><a target="_blank" href="project.html">Menu du jour</a></li>
                                        <li><a target="_blank" href="404.html">Toues les recettes</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <div class="or-header-right-btn">
                            <?php if ($_SESSION['is_logged']) : ?>
                                <button title="My Account"><i class="fal fa-user"></i></button>
                            <?php endif; ?>
                            <button class="or-canvas-cart-trigger"><i class="fal fa-shopping-cart"></i></button>
                            <button class="search-box-outer"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
                <div class="mobile_menu position-relative">
                    <div class="mobile_menu_button open_mobile_menu">
                        <i class="fal fa-bars"></i>
                    </div>
                    <div class="mobile_menu_wrap">
                        <div class="mobile_menu_overlay open_mobile_menu"></div>
                        <div class="mobile_menu_content">
                            <div class="mobile_menu_close open_mobile_menu">
                                <i class="fal fa-times"></i>
                            </div>
                            <div class="m-brand-logo">
                                <a href="%21.html#"><img src="/assets/img/logo/logo1.png" alt=""></a>
                            </div>
                            <div class="mobile-search-wrapper position-relative">
                                <form action="#">
                                    <input type="text" placeholder="Search Here...">
                                    <button><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                            <nav class="mobile-main-navigation  clearfix ul-li">
                                <ul id="m-main-nav" class="navbar-nav text-capitalize clearfix">
                                    <li><a href="about.html">Commander</a></li>
                                    <li><a href="about.html">Comment ça marche ?</a></li>
                                    <li><a href="shop.html">Menu du jour</a></li>
                                    <li><a href="shop-single.html">Nos recettes</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- /Mobile-Menu -->
                </div>
            </div>
        </div>
    </header>
    <div class="search-popup">
        <button class="close-search style-two"><span class="fal fa-times"></span></button>
        <button class="close-search"><span class="fa fa-arrow-up"></span></button>
        <form method="post" action="https://html.themexriver.com/organio/blog.html">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
    <div class="or-ofcanvas-cart-wrapper">
        <div class="or-ofcanvas-cart-content">
            <div class="title-area d-flex justify-content-between align-items-center">
                <div class="cart-title">
                    <span>Cart</span>
                </div>
                <div class="cart-close">
                    <button class="or-canvas-cart-trigger"><i class="fal fa-times"></i></button>
                </div>
            </div>
            <div class="or-ofcart-product-wrapper">
                <div class="or-ofcart-product-item d-flex align-items-center position-relative">
                    <div class="pro-remove position-absolute"><i class="fal fa-times"></i></div>
                    <div class="or-ofcart-product-img">
                        <img src="/assets/img/product/pro1.jpg" alt="">
                    </div>
                    <div class="or-ofcart-product-text headline">
                        <h3><a href="#">Organic Juice</a></h3>
                        <span>1 x $4.00</span>
                    </div>
                </div>
                <div class="or-ofcart-product-item d-flex align-items-center position-relative">
                    <div class="pro-remove position-absolute"><i class="fal fa-times"></i></div>
                    <div class="or-ofcart-product-img">
                        <img src="/assets/img/product/pro2.jpg" alt="">
                    </div>
                    <div class="or-ofcart-product-text headline">
                        <h3><a href="#">Fresh Orange</a></h3>
                        <span>1 x $4.00</span>
                    </div>
                </div>
                <div class="or-ofcart-product-item d-flex align-items-center position-relative">
                    <div class="pro-remove position-absolute"><i class="fal fa-times"></i></div>
                    <div class="or-ofcart-product-img">
                        <img src="/assets/img/product/pro3.jpg" alt="">
                    </div>
                    <div class="or-ofcart-product-text headline">
                        <h3><a href="#">Organic Onion</a></h3>
                        <span>1 x $4.00</span>
                    </div>
                </div>
            </div>
            <div class="or-ofcart-total text-center">
                <span>Subtotal: $4.00</span>
                <div class="total-btn">
                    <a href="cart.html">View Cart</a>
                    <a href="checkout.html">Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Start of header section
	============================================= -->