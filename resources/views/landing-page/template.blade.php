<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>@yield('title', env('APP_NAME'))</title>

    <meta name="description" content="@yield('description', env('APP_DESCRIPTION'))">
    <meta name="keywords" content="@yield('keywords', env('APP_KEYWORDS'))">
    <link rel="dns-prefetch" href="https://fonts.googleapis.com/">

    <link rel="stylesheet" id="sbi_styles-css" href="{{ asset('landing-page/assets/sbi-styles.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="wp-block-library-css" href="{{ asset('landing-page/assets/style.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('landing-page/css/classic-theme-style-inline.css') }}">
    <link rel="stylesheet" href="{{ asset('landing-page/css/global-style-inline.css') }}">
    <link rel="stylesheet" id="woocommerce-layout-css" href="{{ asset('landing-page/assets/woocommerce-layout.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="woocommerce-smallscreen-css" href="{{ asset('landing-page/assets/woocommerce-smallscreen.css') }}" type="text/css" media="only screen and (max-width: 768px)">
    <link rel="stylesheet" id="woocommerce-general-css" href="{{ asset('landing-page/assets/woocommerce.css') }}" type="text/css" media="all">
    <style id="woocommerce-inline-inline-css" type="text/css">
    .woocommerce form .form-row .required { visibility: visible; }
    </style>
    <link rel="stylesheet" id="agencium-theme-css" href="{{ asset('landing-page/assets/theme.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('landing-page/css/agencium-inline.css') }}">
    <link rel="stylesheet" id="agencium-woocommerce-css" href="{{ asset('landing-page/assets/woocommerce(1).css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="agencium-style-css" href="{{ asset('landing-page/assets/style.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="agencium-fonts-css" href="{{ asset('landing-page/assets/css')}}" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-icons-css" href="{{ asset('landing-page/assets/elementor-icons.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-frontend-css" href="{{ asset('landing-page/assets/custom-frontend.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="swiper-css" href="{{ asset('landing-page/assets/swiper.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-8-css" href="{{ asset('landing-page/assets/post-8.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="font-awesome-5-all-css" href="{{ asset('landing-page/assets/all.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="font-awesome-4-shim-css" href="{{ asset('landing-page/assets/v4-shims.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-6027-css" href="{{ asset('landing-page/assets/post-6027.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="google-fonts-1-css" href="{{ asset('landing-page/assets/css(1)')}}" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-icons-shared-0-css" href="{{ asset('landing-page/assets/fontawesome.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-icons-fa-brands-css" href="{{ asset('landing-page/assets/brands.min.css') }}" type="text/css" media="all">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin=""><script type="text/javascript" src="{{ asset('landing-page/assets/jquery.min.js') }}" id="jquery-core-js"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/jquery-migrate.min.js') }}" id="jquery-migrate-js"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/jquery.blockUI.min.js') }}" id="jquery-blockui-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/add-to-cart.min.js') }}" id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/js.cookie.min.js') }}" id="js-cookie-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/woocommerce.min.js') }}" id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/v4-shims.min.js') }}" id="font-awesome-4-shim-js"></script>

    <noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
    <link rel="icon" href="https://bikinweb.mrofik.com/wp-content/uploads/2023/09/cropped-favicon-85x85.png" sizes="32x32">
    <link rel="icon" href="https://bikinweb.mrofik.com/wp-content/uploads/2023/09/cropped-favicon-300x300.png" sizes="192x192">
    <link rel="apple-touch-icon" href="https://bikinweb.mrofik.com/wp-content/uploads/2023/09/cropped-favicon-300x300.png">
    <meta name="msapplication-TileImage" content="https://bikinweb.mrofik.com/wp-content/uploads/2023/09/cropped-favicon-300x300.png">
    <link rel="stylesheet" href="{{ asset('landing-page/css/wpforms-css-vars-root.css') }}">

</head>

    <!-- Body -->
    <body class="home page-template-default page page-id-6027 theme-agencium woocommerce-js elementor-default elementor-kit-8 elementor-page elementor-page-6027 e--ua-blink e--ua-chrome e--ua-mac e--ua-webkit" data-elementor-device-mode="desktop">
        <div class="body-overlay"></div>

        <div class="flowmap-deformation-wrapper active" data-bg="{{ asset('landing-page/img/bg-1.jpg') }}" data-bg-width="1920" data-bg-height="1070">
            <canvas width="2880" height="2405" style="width: 1440px; height: 1202.5px;"></canvas>
        </div>
        <!-- Page Pre Loader -->
        <div class="page-loader-container" style="opacity: 0; display: none;">
            <div class="page-loader">
                <div class="page-loader-inner">
                    <img width="85" height="88" src="{{ asset('landing-page/assets/preloader.png') }}" alt="Page Loader Image" class="page-loader-logo">
                </div>
            </div>
        </div>

        <!-- Mobile Menu Panel -->
        <div class="mobile-header-menu-container">
            <div class="mobile-header-row">

            <!-- Icons Block -->
            <div class="header-icons-container">
                <div class="menu-close"><span class="menu-close-icon"></span></div>
            </div>
        </div>

        <!-- Menu Block -->
        <nav>
            <ul id="menu-custom-menu" class="main-menu">
                <li id="menu-item-6048" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-6027 current_page_item menu-item-6048">
                    <a href="https://bikinweb.mrofik.com/" aria-current="page">Home</a>
                </li>
                <li id="menu-item-6080" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6080">
                    <a href="https://bikinweb.mrofik.com/about/">Tentang Kami</a>
                </li>
                <li id="menu-item-6050" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6050">
                    <a href="https://bikinweb.mrofik.com/contacts/">Kontak</a>
                </li>
            </ul>
        </nav>
        <div class="header-mobile-button">
            <a class="agencium-button" target="_blank" href="https://wa.me/62822333444555&text=Halo">Get in Touch</a>
        </div>
    </div>
    <!-- Compact Menu Block -->

        <!-- Top Bar -->
        <div class="body-container">

            <div class="body-line body-line-l1"></div>
            <div class="body-line body-line-l2"></div>
            <div class="body-line body-line-r1"></div>
            <div class="body-line body-line-r2"></div>

            <!-- Side Panel -->
            <div class="slide-sidebar-wrapper slide-sidebar-position-left">
                <div class="slide-sidebar-close"></div>
                <div class="slide-sidebar">
                    <div class="slide-sidebar-content">
                        <div id="block-18" class="widget widget_block">
                            <div class="widget-wrapper">
                                <div class="wp-block-group is-layout-constrained wp-block-group-is-layout-constrained">
                                    <div class="wp-block-group__inner-container">
                                        <figure class="wp-block-image size-full is-resized">
                                            <img decoding="async" width="370" height="76" src="{{ asset('landing-page/assets/logo_light_x2.png') }}" alt="" class="wp-image-172" style="width:185px;height:38px">
                                        </figure>
                                        <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="block-19" class="widget widget_block">
                            <div class="widget-wrapper">
                                <div class="wp-block-group is-layout-constrained wp-block-group-is-layout-constrained">
                                    <div class="wp-block-group__inner-container">
                                        <p style="font-size:16px;font-style:normal;font-weight:500">Indonesia</p>

                                        <div style="height:8px" aria-hidden="true" class="wp-block-spacer"></div>
                                        <p style="font-style:normal;font-weight:500">PD. Wiyung Indah Utara VI, KX34, Wiyung, <br>Surabaya, Jawa Timur, ID</p>
                                        <div style="height:26px" aria-hidden="true" class="wp-block-spacer"></div>
                                        <div class="wp-block-title">
                                            <h6 class="wp-block-heading has-text-color" style="color:#959ea9;font-size:12px;text-transform:uppercase">Phone</h6>
                                        </div>

                                        <p style="font-style:normal;font-weight:600">
                                            <a href="wa.me/+6282233344455">+62 822 3334 4455</a>
                                        </p>
                                        <div style="height:26px" aria-hidden="true" class="wp-block-spacer"></div>
                                        <div class="wp-block-title">
                                            <h6 class="wp-block-heading has-text-color" style="color:#959ea9;font-size:12px;font-style:normal;font-weight:400;text-transform:uppercase">Email</h6>
                                        </div>
                                        <p style="font-style:normal;font-weight:600">
                                            <a href="mailto:contact@intivestudio.com">contact@intivestudio.com</a>
                                        </p>
                                        <div style="height:18px" aria-hidden="true" class="wp-block-spacer"></div>
                                        <p style="font-style:normal;font-weight:500">Follow us</p>
                                        <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>

                                        <ul class="wp-block-social-links has-small-icon-size is-style-logos-only is-nowrap is-layout-flex wp-container-core-social-links-layout-1 wp-block-social-links-is-layout-flex">
                                            <li class="wp-social-link wp-social-link-facebook  wp-block-social-link">
                                                <a rel=" noopener nofollow" target="_blank" href="https://facebook.com/" class="wp-block-social-link-anchor">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                                        <path d="M12 2C6.5 2 2 6.5 2 12c0 5 3.7 9.1 8.4 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.3v7C18.3 21.1 22 17 22 12c0-5.5-4.5-10-10-10z"></path>
                                                    </svg>
                                                    <span class="wp-block-social-link-label screen-reader-text">Facebook</span>
                                                </a>
                                            </li>
                                            <li class="wp-social-link wp-social-link-twitter  wp-block-social-link">
                                                <a rel=" noopener nofollow" target="_blank" href="https://twitter.com/" class="wp-block-social-link-anchor">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                                        <path d="M22.23,5.924c-0.736,0.326-1.527,0.547-2.357,0.646c0.847-0.508,1.498-1.312,1.804-2.27 c-0.793,0.47-1.671,0.812-2.606,0.996C18.324,4.498,17.257,4,16.077,4c-2.266,0-4.103,1.837-4.103,4.103 c0,0.322,0.036,0.635,0.106,0.935C8.67,8.867,5.647,7.234,3.623,4.751C3.27,5.357,3.067,6.062,3.067,6.814 c0,1.424,0.724,2.679,1.825,3.415c-0.673-0.021-1.305-0.206-1.859-0.513c0,0.017,0,0.034,0,0.052c0,1.988,1.414,3.647,3.292,4.023 c-0.344,0.094-0.707,0.144-1.081,0.144c-0.264,0-0.521-0.026-0.772-0.074c0.522,1.63,2.038,2.816,3.833,2.85 c-1.404,1.1-3.174,1.756-5.096,1.756c-0.331,0-0.658-0.019-0.979-0.057c1.816,1.164,3.973,1.843,6.29,1.843 c7.547,0,11.675-6.252,11.675-11.675c0-0.178-0.004-0.355-0.012-0.531C20.985,7.47,21.68,6.747,22.23,5.924z"></path>
                                                    </svg>
                                                    <span class="wp-block-social-link-label screen-reader-text">Twitter</span>
                                                </a>
                                            </li>
                                            <li class="wp-social-link wp-social-link-linkedin  wp-block-social-link">
                                                <a rel=" noopener nofollow" target="_blank" href="https://linkedin.com/" class="wp-block-social-link-anchor">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                                        <path d="M19.7,3H4.3C3.582,3,3,3.582,3,4.3v15.4C3,20.418,3.582,21,4.3,21h15.4c0.718,0,1.3-0.582,1.3-1.3V4.3 C21,3.582,20.418,3,19.7,3z M8.339,18.338H5.667v-8.59h2.672V18.338z M7.004,8.574c-0.857,0-1.549-0.694-1.549-1.548 c0-0.855,0.691-1.548,1.549-1.548c0.854,0,1.547,0.694,1.547,1.548C8.551,7.881,7.858,8.574,7.004,8.574z M18.339,18.338h-2.669 v-4.177c0-0.996-0.017-2.278-1.387-2.278c-1.389,0-1.601,1.086-1.601,2.206v4.249h-2.667v-8.59h2.559v1.174h0.037 c0.356-0.675,1.227-1.387,2.526-1.387c2.703,0,3.203,1.779,3.203,4.092V18.338z"></path>
                                                    </svg>
                                                    <span class="wp-block-social-link-label screen-reader-text">LinkedIn</span>
                                                </a>
                                            </li>
                                            <li class="wp-social-link wp-social-link-youtube  wp-block-social-link">
                                                <a rel=" noopener nofollow" target="_blank" href="https://youtube.com/" class="wp-block-social-link-anchor">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                                        <path d="M21.8,8.001c0,0-0.195-1.378-0.795-1.985c-0.76-0.797-1.613-0.801-2.004-0.847c-2.799-0.202-6.997-0.202-6.997-0.202 h-0.009c0,0-4.198,0-6.997,0.202C4.608,5.216,3.756,5.22,2.995,6.016C2.395,6.623,2.2,8.001,2.2,8.001S2,9.62,2,11.238v1.517 c0,1.618,0.2,3.237,0.2,3.237s0.195,1.378,0.795,1.985c0.761,0.797,1.76,0.771,2.205,0.855c1.6,0.153,6.8,0.201,6.8,0.201 s4.203-0.006,7.001-0.209c0.391-0.047,1.243-0.051,2.004-0.847c0.6-0.607,0.795-1.985,0.795-1.985s0.2-1.618,0.2-3.237v-1.517 C22,9.62,21.8,8.001,21.8,8.001z M9.935,14.594l-0.001-5.62l5.404,2.82L9.935,14.594z"></path>
                                                    </svg>
                                                    <span class="wp-block-social-link-label screen-reader-text">YouTube</span>
                                                </a>
                                            </li>
                                        </ul>

                                        <div style="height:1px" aria-hidden="true" class="wp-block-spacer"></div>

                                        <a href="#" class="agencium-alter-button">Request a quote <svg viewBox="0 0 13 20"><polyline points="0.5 19.5 3 19.5 12.5 10 3 0.5"></polyline></svg></a>
                                        <div style="height:26px" aria-hidden="true" class="wp-block-spacer"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Header -->
            <div class="mobile-header mobile-header-style-1 mobile-header-position-over sticky-header-on" style="height: 0px;">
                <div class="sticky-wrapper">
                    <div class="mobile-header-row">

                        <!-- Logo Block -->
                        <div class="logo-container">
                            <div class="logo retina-logo">
                                <a class="logo-link" href="/">
                                    <img width="161" height="33" src="{{ asset('landing-page/assets/logo_light_x2(1).png') }}" alt="WebInstan">
                                </a>
                            </div>
                        </div>

                        <!-- Icons Block -->
                        <div class="header-icons-container">
                            <div class="header-icon menu-trigger">
                                <span class="menu-trigger-icon">
                                    <span class="hamburger">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-header-area header-area-style-1">
                <!-- Header -->
                <header class="header header-style-1 header-position-over sticky-header-on" style="height: 110px;">
                    <div class="sticky-wrapper">
                        <div class="header-row">

                            <!-- Left Info Block -->
                            <div class="header-icons-container">
                                <div class="header-icon dropdown-trigger">
                                    <span class="dropdown-trigger-icon"></span>
                                </div>
                                <div class="logo-container">
                                    <div class="logo retina-logo">
                                        <a class="logo-link" href="/">
                                            <img loading="lazy" width="185" height="38" src="{{ asset('landing-page/assets/logo_light_x2(1).png') }}" alt="WebInstan">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Standard Menu Block -->
                            <div class="header-menu-container">
                                <nav>
                                    <ul id="menu-custom-menu-1" class="main-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-6027 current_page_item menu-item-6048">
                                            <a href="/" aria-current="page">Home</a>
                                        </li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6080">
                                            <a href="https://bikinweb.mrofik.com/about/">Tentang Kami</a>
                                        </li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6050">
                                            <a href="https://bikinweb.mrofik.com/contacts/">Kontak</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                            <!-- Right Info Block -->
                            <div class="header-icons-container">
                                <div class="header-icon header-button-container">
                                    <a class="header-button" target="_blank" href="https://wa.me/62822333444555">Get in Touch</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            </div>

        <div class="content-wrapper content-wrapper-remove-top-margin content-wrapper-sidebar-position-none elementor-content">

            <!-- Content Container -->
            <div class="content">
                <div class="content-inner">
                    <div data-elementor-type="wp-page" data-elementor-id="6027" class="elementor elementor-6027">

						<section class="elementor-section elementor-top-section elementor-element elementor-element-04fc850 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="04fc850" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}" style="width: 1440px; left: -50px;">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9f0ef64" data-id="9f0ef64" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-0d09a91 elementor-widget elementor-widget-agencium_content_slider" data-id="0d09a91" data-element_type="widget" data-widget_type="agencium_content_slider.default">
                                            <div class="elementor-widget-container">
                                                <div class="agencium-content-slider-widget">
                                                    <div class="content-slider-wrapper">
                                                        <div class="content-slider-container">
                                                            <div class="content-slider owl-carousel owl-theme owl-loaded owl-drag" data-slider-options="{&quot;items&quot;:1,&quot;nav&quot;:false,&quot;dots&quot;:true,&quot;dotsContainer&quot;:&quot;.slider-dots&quot;,&quot;autoplayHoverPause&quot;:true,&quot;autoplay&quot;:false,&quot;autoplaySpeed&quot;:5000,&quot;autoplayTimeout&quot;:5000,&quot;loop&quot;:true,&quot;dragEndSpeed&quot;:1200,&quot;navSpeed&quot;:1200,&quot;dotsSpeed&quot;:1200,&quot;rtl&quot;:false,&quot;pullDrag&quot;:false,&quot;freeDrag&quot;:false,&quot;callbacks&quot;:false}">
                                                                <div class="owl-stage-outer">
                                                                    <div class="owl-stage" style="transform: translate3d(-2880px, 0px, 0px); transition: all 1.2s ease 0s; width: 8640px;">

                                                                        <div class="owl-item cloned" style="width: 1440px;">
                                                                            <div class="content-item slider-item elementor-repeater-item-3dcbe90 content-position-flex-start content-view-row">
                                                                                <div class="elementor-section elementor-section-boxed">
                                                                                    <div class="elementor-container elementor-column-gap-extended">
                                                                                        <div class="elementor-row">
                                                                                            <div class="elementor-column elementor-col-100">
                                                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                                                    <div class="elementor-widget-wrap">
                                                                                                        <div class="elementor-element">
                                                                                                            <div class="slide-content">
                                                                                                                <div class="slide-content-column">
                                                                                                                    <h1 class="content-slider-item-heading agencium-content-wrapper-1">Web <em>Instan</em></h1>
                                                                                                                    <h2 class="content-slider-item-additional-heading agencium-content-wrapper-2">Dalam Hitungan <em>Jam</em></h2>
                                                                                                                    <div class="content-slider-item-content agencium-content-wrapper-3">
                                                                                                                        <div class="content-slider-item-text">
                                                                                                                            <p>Wujud website impian anda. Dapat website profesional dengan desain sesuai kebutuhan anda dalam hitungan Jam.</p>
                                                                                                                        </div>
                                                                                                                        <div class="content-slider-item-buttons">
                                                                                                                            <a class="agencium-alter-button" href="#" target="_blank">Dapatkan Sekarang<svg viewBox="0 0 13 20"><polyline points="0.5 19.5 3 19.5 12.5 10 3 0.5"></polyline></svg></a>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="owl-item cloned" style="width: 1440px;">
                                                                            <div class="content-item slider-item elementor-repeater-item-deda5ba content-position-flex-start content-view-column">
                                                                                <div class="elementor-section elementor-section-boxed">
                                                                                    <div class="elementor-container elementor-column-gap-extended">
                                                                                        <div class="elementor-row">
                                                                                            <div class="elementor-column elementor-col-100">
                                                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                                                    <div class="elementor-widget-wrap">
                                                                                                        <div class="elementor-element">
                                                                                                            <div class="slide-content">
                                                                                                                <div class="slide-content-column">
                                                                                                                    <h1 class="content-slider-item-heading agencium-content-wrapper-1">Real <em>solution</em> for   your <em>business</em>.</h1>
                                                                                                                    <div class="content-slider-item-content agencium-content-wrapper-2">
                                                                                                                        <div class="content-slider-item-text">
                                                                                                                            <p>Mummichog paradise fish! Triggerfish bango guppy opah sunfish bluntnose knifefish upside down catfish cobia spookfish convict.</p>
                                                                                                                        </div>
                                                                                                                        <div class="content-slider-item-buttons">
                                                                                                                            <a class="agencium-alter-button" href="https://demo.artureanec.com/themes/agencium/services-from-experienced-agency/" target="_blank">Explore more<svg viewBox="0 0 13 20"><polyline points="0.5 19.5 3 19.5 12.5 10 3 0.5"></polyline></svg></a>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="owl-nav disabled">
                                                                    <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button>
                                                                    <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                                                                </div>
                                                            </div>

                                                            <div class="elementor-section elementor-section-boxed">
                                                                <div class="elementor-container elementor-column-gap-default">
                                                                    <div class="elementor-row">
                                                                        <div class="elementor-column elementor-col-100">
                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                <div class="elementor-widget-wrap">
                                                                                    <div class="elementor-element">
                                                                                        <div class="slider-dots">
                                                                                            <button role="button" class="owl-dot active"><span></span></button>
                                                                                            <button role="button" class="owl-dot"><span></span></button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>


				    <section class="elementor-section elementor-top-section elementor-element elementor-element-9c172f7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9c172f7" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b62bd70 animated agencium_clip_right" data-id="b62bd70" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;agencium_clip_right&quot;}">
			                    <div class="elementor-widget-wrap elementor-element-populated">
						            <div class="elementor-element elementor-element-5558e04 elementor-widget elementor-widget-agencium_heading" data-id="5558e04" data-element_type="widget" data-widget_type="agencium_heading.default">
				                        <div class="elementor-widget-container">
			                                <div class="agencium-subtitle">
                                                <div class="agencium-subtitle-text">
                                                    <h5><em>/template pilihan</em></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
					    </div>
            		</section>
                    
				<section class="elementor-section elementor-top-section elementor-element elementor-element-2f75ca3 elementor-section-boxed elementor-section-height-default elementor-section-height-default animated agencium_clip_down" data-id="2f75ca3" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;agencium_clip_down&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d672595" data-id="d672595" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-2f2c1dd elementor-widget elementor-widget-agencium_portfolio_listing" data-id="2f2c1dd" data-element_type="widget" data-widget_type="agencium_portfolio_listing.default">
				<div class="elementor-widget-container">

        <div class="agencium-portfolios-listing-widget">


            <div class="archive-listing" data-ajax="{&quot;post_type&quot;:&quot;agencium_portfolio&quot;,&quot;post_status&quot;:&quot;publish&quot;,&quot;ignore_sticky_posts&quot;:true,&quot;suppress_filters&quot;:true,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;desc&quot;,&quot;link_base&quot;:&quot;https:\/\/bikinweb.mrofik.com&quot;,&quot;posts_per_page&quot;:-1,&quot;paged&quot;:1}" data-widget="{&quot;item_class&quot;:&quot;portfolio-item-wrapper slider-item with-title-icon&quot;,&quot;columns_number&quot;:3,&quot;listing_type&quot;:&quot;slider&quot;,&quot;show_title&quot;:&quot;yes&quot;,&quot;show_date&quot;:&quot;&quot;,&quot;show_details&quot;:&quot;&quot;,&quot;show_categories&quot;:&quot;&quot;,&quot;show_read_more&quot;:&quot;&quot;,&quot;read_more_text&quot;:&quot;Read more&quot;}">
                <div class="custom-cursor-drag" style="display: none;"></div>                <div class="archive-listing-wrapper portfolio-listing-wrapper owl-carousel owl-theme custom-cursor-enable owl-loaded owl-drag" data-slider-options="{&quot;items&quot;:3,&quot;nav&quot;:true,&quot;navText&quot;:[&quot;&quot;,&quot;&quot;],&quot;dots&quot;:false,&quot;autoplayHoverPause&quot;:true,&quot;autoplay&quot;:true,&quot;autoplaySpeed&quot;:300,&quot;autoplayTimeout&quot;:5000,&quot;loop&quot;:true,&quot;dragEndSpeed&quot;:500,&quot;navSpeed&quot;:500,&quot;dotsSpeed&quot;:500,&quot;rtl&quot;:false}" style="cursor: auto;">
















                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-9973px, 0px, 0px); transition: all 0.3s ease 0s; width: 14507px;"><div class="owl-item cloned" style="width: 453.333px;"><div class="portfolio-item-wrapper slider-item with-title-icon post-1343 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/marketum-website-design-3/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-6-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-6-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-6-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-6-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-6-480x480.jpg 1200w"><img decoding="async" alt="product-6" title="product-6" src="{{ asset('landing-page/assets/product-6-300x300.jpg') }}" class="attachment-medium size-medium wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/marketum-website-design-3/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Marketum Website design">Marketum Website design</span></span></a></h6></div>    </div>
</div></div><div class="owl-item cloned" style="width: 453.333px;"><div class="portfolio-item-wrapper slider-item with-title-icon post-1341 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/honda-website-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-5-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-5-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-5-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-5-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-5-480x480.jpg 1200w"><img decoding="async" alt="product-5" title="product-5" src="{{ asset('landing-page/assets/product-5-300x300.jpg') }}" class="attachment-medium size-medium wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/honda-website-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Honda Website design">Honda Website design</span></span></a></h6></div>    </div>
</div></div><div class="owl-item cloned" style="width: 453.333px;"><div class="portfolio-item-wrapper slider-item with-title-icon post-1339 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/sideoracle-website-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-4-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-4-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-4-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-4-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-4-480x480.jpg 1200w"><img decoding="async" alt="product-4" title="product-4" src="{{ asset('landing-page/assets/product-4-300x300.jpg') }}" class="attachment-medium size-medium wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/sideoracle-website-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Sideoracle Website design">Sideoracle Website design</span></span></a></h6></div>    </div>
</div></div><div class="owl-item cloned" style="width: 453.333px;"><div class="portfolio-item-wrapper slider-item with-title-icon post-1336 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/light-line-brand-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-15-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-15-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-15-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-15-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-15-480x480.jpg 1200w"><img decoding="async" alt="product-15" title="product-15" src="{{ asset('landing-page/assets/product-15-300x300.jpg') }}" class="attachment-medium size-medium wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/light-line-brand-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Light Line Brand design">Light Line Brand design</span></span></a></h6></div>    </div>
</div></div><div class="owl-item cloned" style="width: 453.333px;"><div class="portfolio-item-wrapper slider-item with-title-icon post-1332 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/foremost-brand-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-14-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-14-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-14-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-14-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-14-480x480.jpg 1200w"><img decoding="async" alt="product-14" title="product-14" src="{{ asset('landing-page/assets/product-14-300x300.jpg') }}" class="attachment-medium size-medium wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/foremost-brand-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Foremost Brand design">Foremost Brand design</span></span></a></h6></div>    </div>
</div></div><div class="owl-item cloned" style="width: 453.333px;"><div class="portfolio-item-wrapper slider-item with-title-icon post-1330 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/marketum-website-design-2/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-13-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-13-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-13-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-13-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-13-480x480.jpg 1200w"><img decoding="async" alt="product-13" title="product-13" src="{{ asset('landing-page/assets/product-13-300x300.jpg') }}" class="attachment-medium size-medium wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/marketum-website-design-2/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Marketum Website design">Marketum Website design</span></span></a></h6></div>    </div>
</div></div><div class="owl-item cloned" style="width: 453.333px;"><div class="portfolio-item-wrapper slider-item with-title-icon post-1327 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/organic-juice-packaging/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-2-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-2-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-2-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-2-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-2-480x480.jpg 1200w"><img decoding="async" alt="product-2" title="product-2" src="{{ asset('landing-page/assets/product-2-300x300.jpg') }}" class="attachment-medium size-medium wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/organic-juice-packaging/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Orange Juice Packaging">Orange Juice Packaging</span></span></a></h6></div>    </div>
</div></div><div class="owl-item cloned" style="width: 453.333px;"><div class="portfolio-item-wrapper slider-item with-title-icon post-1104 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/marketum-website-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-1-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-1-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-1-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-1-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-1-480x480.jpg 1200w"><img decoding="async" alt="product-1" title="product-1" src="{{ asset('landing-page/assets/product-1-300x300.jpg') }}" class="attachment-medium size-medium wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/marketum-website-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Foremost Brand design">Foremost Brand design</span></span></a></h6></div>    </div>
</div></div><div class="owl-item" style="width: 453.333px;"><div class="portfolio-item-wrapper slider-item with-title-icon post-1361 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/coors-banquet-brand-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-12-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-12-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-12-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-12-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-12-480x480.jpg 1200w"><img decoding="async" alt="product-12" title="product-12" src="{{ asset('landing-page/assets/product-12-300x300.jpg') }}" class="attachment-medium size-medium wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/coors-banquet-brand-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Coors Banquet Brand design">Coors Banquet Brand design</span></span></a></h6></div>    </div>
</div></div><div class="owl-item" style="width: 453.333px;"><div class="portfolio-item-wrapper slider-item with-title-icon post-1358 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/hot-pizza-website-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-17-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-17-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-17-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-17-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-17-480x480.jpg 1200w"><img decoding="async" alt="product-17" title="product-17" src="{{ asset('landing-page/assets/product-17-300x300.jpg') }}" class="attachment-medium size-medium wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/hot-pizza-website-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Hot Pizza Website design">Hot Pizza Website design</span></span></a></h6></div>    </div>
</div></div><div class="owl-item" style="width: 453.333px;"><div class="portfolio-item-wrapper slider-item with-title-icon post-1356 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/light-inside-brand-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-11-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-11-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-11-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-11-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-11-480x480.jpg 1200w"><img decoding="async" alt="product-11" title="product-11" src="{{ asset('landing-page/assets/product-11-300x300.jpg') }}" class="attachment-medium size-medium wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/light-inside-brand-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Light inside Brand design">Light inside Brand design</span></span></a></h6></div>    </div>
</div></div><div class="owl-item" style="width: 453.333px;"><div class="portfolio-item-wrapper slider-item with-title-icon post-1354 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/vilet-range-website-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-10-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-10-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-10-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-10-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-10-480x480.jpg 1200w"><img decoding="async" alt="product-10" title="product-10" src="{{ asset('landing-page/assets/product-10-300x300.jpg') }}" class="attachment-medium size-medium wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/vilet-range-website-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Vilet Range Website design">Vilet Range Website design</span></span></a></h6></div>    </div>
</div></div><div class="owl-item" style="width: 453.333px;"><div class="portfolio-item-wrapper slider-item with-title-icon post-1352 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/cafe-fugas-brand-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-9-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-9-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-9-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-9-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-9-480x480.jpg 1200w"><img decoding="async" alt="product-9" title="product-9" src="{{ asset('landing-page/assets/product-9-300x300.jpg') }}" class="attachment-medium size-medium wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/cafe-fugas-brand-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Cafe Fugas Brand design">Cafe Fugas Brand design</span></span></a></h6></div>    </div>
</div></div><div class="owl-item" style="width: 453.333px;"><div class="portfolio-item-wrapper slider-item with-title-icon post-1350 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/nosotros-website-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-8-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-8-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-8-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-8-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-8-480x480.jpg 1200w"><img decoding="async" alt="product-8" title="product-8" src="{{ asset('landing-page/assets/product-8-300x300.jpg') }}" class="attachment-medium size-medium wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/nosotros-website-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Nosotros Website design">Nosotros Website design</span></span></a></h6></div>    </div>
</div></div><div class="owl-item" style="width: 453.333px;"><div class="portfolio-item-wrapper slider-item with-title-icon post-1348 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/slidecall-website-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-7-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-7-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-7-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-7-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-7-480x480.jpg 1200w"><img decoding="async" alt="product-7" title="product-7" src="{{ asset('landing-page/assets/product-7-300x300.jpg') }}" class="attachment-medium size-medium wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/slidecall-website-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="SlideCall Website design">SlideCall Website design</span></span></a></h6></div>    </div>
</div></div><div class="owl-item" style="width: 453.333px;"><div class="portfolio-item-wrapper slider-item with-title-icon post-1345 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/white-cube-brand-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-16-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-16-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-16-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-16-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-16-480x480.jpg 1200w"><img decoding="async" alt="product-16" title="product-16" src="{{ asset('landing-page/assets/product-16-300x300.jpg') }}" class="attachment-medium size-medium wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/white-cube-brand-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="White Cube Brand design">White Cube Brand design</span></span></a></h6></div>    </div>
</div></div><div class="owl-item" style="width: 453.333px;"><div class="portfolio-item-wrapper slider-item with-title-icon post-1343 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/marketum-website-design-3/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-6-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-6-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-6-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-6-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-6-480x480.jpg 1200w"><img decoding="async" alt="product-6" title="product-6" src="{{ asset('landing-page/assets/product-6-300x300.jpg') }}" class="attachment-medium size-medium wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/marketum-website-design-3/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Marketum Website design">Marketum Website design</span></span></a></h6></div>    </div>
</div></div><div class="owl-item" style="width: 453.333px;"><div class="portfolio-item-wrapper slider-item with-title-icon post-1341 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/honda-website-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-5-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-5-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-5-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-5-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-5-480x480.jpg 1200w"><img decoding="async" alt="product-5" title="product-5" src="{{ asset('landing-page/assets/product-5-300x300.jpg') }}" class="attachment-medium size-medium wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/honda-website-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Honda Website design">Honda Website design</span></span></a></h6></div>    </div>
</div></div><div class="owl-item" style="width: 453.333px;"><div class="portfolio-item-wrapper slider-item with-title-icon post-1339 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/sideoracle-website-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-4-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-4-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-4-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-4-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-4-480x480.jpg 1200w"><img decoding="async" alt="product-4" title="product-4" src="{{ asset('landing-page/assets/product-4-300x300.jpg') }}" class="attachment-medium size-medium wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/sideoracle-website-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Sideoracle Website design">Sideoracle Website design</span></span></a></h6></div>    </div>
</div></div><div class="owl-item" style="width: 453.333px;"><div class="portfolio-item-wrapper slider-item with-title-icon post-1336 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/light-line-brand-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-15-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-15-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-15-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-15-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-15-480x480.jpg 1200w"><img decoding="async" alt="product-15" title="product-15" src="{{ asset('landing-page/assets/product-15-300x300.jpg') }}" class="attachment-medium size-medium wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/light-line-brand-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Light Line Brand design">Light Line Brand design</span></span></a></h6></div>    </div>
</div></div><div class="owl-item" style="width: 453.333px;"><div class="portfolio-item-wrapper slider-item with-title-icon post-1332 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/foremost-brand-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-14-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-14-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-14-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-14-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-14-480x480.jpg 1200w"><img decoding="async" alt="product-14" title="product-14" src="{{ asset('landing-page/assets/product-14-300x300.jpg') }}" class="attachment-medium size-medium wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/foremost-brand-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Foremost Brand design">Foremost Brand design</span></span></a></h6></div>    </div>
</div></div><div class="owl-item" style="width: 453.333px;"><div class="portfolio-item-wrapper slider-item with-title-icon post-1330 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/marketum-website-design-2/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-13-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-13-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-13-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-13-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-13-480x480.jpg 1200w"><img decoding="async" alt="product-13" title="product-13" src="{{ asset('landing-page/assets/product-13-300x300.jpg') }}" class="attachment-medium size-medium wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/marketum-website-design-2/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Marketum Website design">Marketum Website design</span></span></a></h6></div>    </div>
</div></div><div class="owl-item active" style="width: 453.333px;"><div class="portfolio-item-wrapper slider-item with-title-icon post-1327 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/organic-juice-packaging/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-2-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-2-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-2-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-2-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-2-480x480.jpg 1200w"><img decoding="async" alt="product-2" title="product-2" src="{{ asset('landing-page/assets/product-2-300x300.jpg') }}" class="attachment-medium size-medium wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/organic-juice-packaging/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Orange Juice Packaging">Orange Juice Packaging</span></span></a></h6></div>    </div>
</div></div><div class="owl-item active" style="width: 453.333px;"><div class="portfolio-item-wrapper slider-item with-title-icon post-1104 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/marketum-website-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-1-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-1-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-1-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-1-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-1-480x480.jpg 1200w"><img decoding="async" alt="product-1" title="product-1" src="{{ asset('landing-page/assets/product-1-300x300.jpg') }}" class="attachment-medium size-medium wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/marketum-website-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Foremost Brand design">Foremost Brand design</span></span></a></h6></div>    </div>
</div></div><div class="owl-item cloned active" style="width: 453.333px;"><div class="portfolio-item-wrapper slider-item with-title-icon post-1361 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/coors-banquet-brand-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-12-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-12-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-12-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-12-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-12-480x480.jpg 1200w"><img decoding="async" alt="product-12" title="product-12" src="{{ asset('landing-page/assets/product-12-300x300.jpg') }}" class="attachment-medium size-medium wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/coors-banquet-brand-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Coors Banquet Brand design">Coors Banquet Brand design</span></span></a></h6></div>    </div>
</div></div><div class="owl-item cloned" style="width: 453.333px;"><div class="portfolio-item-wrapper slider-item with-title-icon post-1358 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/hot-pizza-website-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-17-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-17-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-17-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-17-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-17-480x480.jpg 1200w"><img decoding="async" alt="product-17" title="product-17" src="{{ asset('landing-page/assets/product-17-300x300.jpg') }}" class="attachment-medium size-medium wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/hot-pizza-website-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Hot Pizza Website design">Hot Pizza Website design</span></span></a></h6></div>    </div>
</div></div><div class="owl-item cloned" style="width: 453.333px;"><div class="portfolio-item-wrapper slider-item with-title-icon post-1356 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/light-inside-brand-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-11-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-11-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-11-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-11-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-11-480x480.jpg 1200w"><img decoding="async" alt="product-11" title="product-11" src="{{ asset('landing-page/assets/product-11-300x300.jpg') }}" class="attachment-medium size-medium wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/light-inside-brand-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Light inside Brand design">Light inside Brand design</span></span></a></h6></div>    </div>
</div></div><div class="owl-item cloned" style="width: 453.333px;"><div class="portfolio-item-wrapper slider-item with-title-icon post-1354 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/vilet-range-website-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-10-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-10-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-10-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-10-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-10-480x480.jpg 1200w"><img decoding="async" alt="product-10" title="product-10" src="{{ asset('landing-page/assets/product-10-300x300.jpg') }}" class="attachment-medium size-medium wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/vilet-range-website-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Vilet Range Website design">Vilet Range Website design</span></span></a></h6></div>    </div>
</div></div><div class="owl-item cloned" style="width: 453.333px;"><div class="portfolio-item-wrapper slider-item with-title-icon post-1352 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/cafe-fugas-brand-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-9-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-9-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-9-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-9-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-9-480x480.jpg 1200w"><img decoding="async" alt="product-9" title="product-9" src="{{ asset('landing-page/assets/product-9-300x300.jpg') }}" class="attachment-medium size-medium wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/cafe-fugas-brand-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Cafe Fugas Brand design">Cafe Fugas Brand design</span></span></a></h6></div>    </div>
</div></div><div class="owl-item cloned" style="width: 453.333px;"><div class="portfolio-item-wrapper slider-item with-title-icon post-1350 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/nosotros-website-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-8-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-8-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-8-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-8-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-8-480x480.jpg 1200w"><img decoding="async" alt="product-8" title="product-8" src="{{ asset('landing-page/assets/product-8-300x300.jpg') }}" class="attachment-medium size-medium wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/nosotros-website-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Nosotros Website design">Nosotros Website design</span></span></a></h6></div>    </div>
</div></div><div class="owl-item cloned" style="width: 453.333px;"><div class="portfolio-item-wrapper slider-item with-title-icon post-1348 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/slidecall-website-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-7-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-7-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-7-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-7-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-7-480x480.jpg 1200w"><img decoding="async" alt="product-7" title="product-7" src="{{ asset('landing-page/assets/product-7-300x300.jpg') }}" class="attachment-medium size-medium wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/slidecall-website-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="SlideCall Website design">SlideCall Website design</span></span></a></h6></div>    </div>
</div></div><div class="owl-item cloned" style="width: 453.333px;"><div class="portfolio-item-wrapper slider-item with-title-icon post-1345 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/white-cube-brand-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-16-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-16-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-16-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-16-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-16-480x480.jpg 1200w"><img decoding="async" alt="product-16" title="product-16" src="{{ asset('landing-page/assets/product-16-300x300.jpg') }}" class="attachment-medium size-medium wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/white-cube-brand-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="White Cube Brand design">White Cube Brand design</span></span></a></h6></div>    </div>
</div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"></button><button type="button" role="presentation" class="owl-next"></button></div><div class="owl-dots disabled"></div></div>

                            </div>

        </div>
        		</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-bbc8194 elementor-section-boxed elementor-section-height-default elementor-section-height-default animated agencium_clip_left" data-id="bbc8194" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;agencium_clip_left&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-260e009" data-id="260e009" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-c070caf elementor-widget elementor-widget-agencium_heading" data-id="c070caf" data-element_type="widget" data-widget_type="agencium_heading.default">
				<div class="elementor-widget-container">
			<div class="agencium-subtitle"><div class="agencium-subtitle-text"><h5><em>/template</em></h5></div></div>		</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-f8c2609 animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default animated agencium_clip_down" data-id="f8c2609" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;agencium_clip_down&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a506377" data-id="a506377" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-6b169ca elementor-widget elementor-widget-agencium_portfolio_listing" data-id="6b169ca" data-element_type="widget" data-widget_type="agencium_portfolio_listing.default">
				<div class="elementor-widget-container">

        <div class="agencium-portfolios-listing-widget">


            <div class="archive-listing" data-ajax="{&quot;post_type&quot;:&quot;agencium_portfolio&quot;,&quot;post_status&quot;:&quot;publish&quot;,&quot;ignore_sticky_posts&quot;:true,&quot;suppress_filters&quot;:true,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;desc&quot;,&quot;link_base&quot;:&quot;https:\/\/bikinweb.mrofik.com&quot;,&quot;posts_per_page&quot;:16,&quot;columns_number&quot;:4,&quot;paged&quot;:1}" data-widget="{&quot;item_class&quot;:&quot;portfolio-item-wrapper with-media-overlay with-title-icon&quot;,&quot;columns_number&quot;:4,&quot;listing_type&quot;:&quot;grid&quot;,&quot;show_title&quot;:&quot;yes&quot;,&quot;show_details&quot;:&quot;no&quot;,&quot;show_categories&quot;:&quot;yes&quot;,&quot;show_read_more&quot;:&quot;no&quot;,&quot;read_more_text&quot;:&quot;Read more&quot;,&quot;show_pagination&quot;:&quot;no&quot;}">
                                <div class="archive-listing-wrapper portfolio-listing-wrapper portfolio-grid-listing columns-4">

<div class="portfolio-item-wrapper with-media-overlay with-title-icon post-1361 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/coors-banquet-brand-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-12-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-12-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-12-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-12-480x480.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-12-480x480.jpg 1200w"><img decoding="async" alt="product-12" title="product-12" src="{{ asset('landing-page/assets/product-12-480x480.jpg') }}" class="attachment-agencium_small size-agencium_small wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><div class="post-categories"><a class="post-category-item" href="https://bikinweb.mrofik.com/portfolio-categories/branding/">Branding</a></div><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/coors-banquet-brand-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Coors Banquet Brand design">Coors Banquet Brand design</span></span></a></h6></div>    </div>
</div>
<div class="portfolio-item-wrapper with-media-overlay with-title-icon post-1358 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/hot-pizza-website-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-17-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-17-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-17-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-17-480x480.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-17-480x480.jpg 1200w"><img decoding="async" alt="product-17" title="product-17" src="{{ asset('landing-page/assets/product-17-480x480.jpg') }}" class="attachment-agencium_small size-agencium_small wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><div class="post-categories"><a class="post-category-item" href="https://bikinweb.mrofik.com/portfolio-categories/design/">Design</a></div><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/hot-pizza-website-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Hot Pizza Website design">Hot Pizza Website design</span></span></a></h6></div>    </div>
</div>
<div class="portfolio-item-wrapper with-media-overlay with-title-icon post-1356 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/light-inside-brand-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-11-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-11-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-11-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-11-480x480.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-11-480x480.jpg 1200w"><img decoding="async" alt="product-11" title="product-11" src="{{ asset('landing-page/assets/product-11-480x480.jpg') }}" class="attachment-agencium_small size-agencium_small wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><div class="post-categories"><a class="post-category-item" href="https://bikinweb.mrofik.com/portfolio-categories/branding/">Branding</a></div><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/light-inside-brand-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Light inside Brand design">Light inside Brand design</span></span></a></h6></div>    </div>
</div>
<div class="portfolio-item-wrapper with-media-overlay with-title-icon post-1354 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/vilet-range-website-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-10-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-10-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-10-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-10-480x480.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-10-480x480.jpg 1200w"><img decoding="async" alt="product-10" title="product-10" src="{{ asset('landing-page/assets/product-10-480x480.jpg') }}" class="attachment-agencium_small size-agencium_small wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><div class="post-categories"><a class="post-category-item" href="https://bikinweb.mrofik.com/portfolio-categories/design/">Design</a></div><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/vilet-range-website-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Vilet Range Website design">Vilet Range Website design</span></span></a></h6></div>    </div>
</div>
<div class="portfolio-item-wrapper with-media-overlay with-title-icon post-1352 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/cafe-fugas-brand-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-9-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-9-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-9-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-9-480x480.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-9-480x480.jpg 1200w"><img decoding="async" alt="product-9" title="product-9" src="{{ asset('landing-page/assets/product-9-480x480.jpg') }}" class="attachment-agencium_small size-agencium_small wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><div class="post-categories"><a class="post-category-item" href="https://bikinweb.mrofik.com/portfolio-categories/branding/">Branding</a></div><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/cafe-fugas-brand-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Cafe Fugas Brand design">Cafe Fugas Brand design</span></span></a></h6></div>    </div>
</div>
<div class="portfolio-item-wrapper with-media-overlay with-title-icon post-1350 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/nosotros-website-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-8-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-8-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-8-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-8-480x480.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-8-480x480.jpg 1200w"><img decoding="async" alt="product-8" title="product-8" src="{{ asset('landing-page/assets/product-8-480x480.jpg') }}" class="attachment-agencium_small size-agencium_small wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><div class="post-categories"><a class="post-category-item" href="https://bikinweb.mrofik.com/portfolio-categories/design/">Design</a></div><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/nosotros-website-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Nosotros Website design">Nosotros Website design</span></span></a></h6></div>    </div>
</div>
<div class="portfolio-item-wrapper with-media-overlay with-title-icon post-1348 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/slidecall-website-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-7-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-7-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-7-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-7-480x480.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-7-480x480.jpg 1200w"><img decoding="async" alt="product-7" title="product-7" src="{{ asset('landing-page/assets/product-7-480x480.jpg') }}" class="attachment-agencium_small size-agencium_small wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><div class="post-categories"><a class="post-category-item" href="https://bikinweb.mrofik.com/portfolio-categories/design/">Design</a></div><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/slidecall-website-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="SlideCall Website design">SlideCall Website design</span></span></a></h6></div>    </div>
</div>
<div class="portfolio-item-wrapper with-media-overlay with-title-icon post-1345 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/white-cube-brand-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-16-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-16-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-16-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-16-480x480.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-16-480x480.jpg 1200w"><img decoding="async" alt="product-16" title="product-16" src="{{ asset('landing-page/assets/product-16-480x480.jpg') }}" class="attachment-agencium_small size-agencium_small wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><div class="post-categories"><a class="post-category-item" href="https://bikinweb.mrofik.com/portfolio-categories/branding/">Branding</a></div><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/white-cube-brand-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="White Cube Brand design">White Cube Brand design</span></span></a></h6></div>    </div>
</div>
<div class="portfolio-item-wrapper with-media-overlay with-title-icon post-1343 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/marketum-website-design-3/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-6-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-6-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-6-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-6-480x480.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-6-480x480.jpg 1200w"><img decoding="async" alt="product-6" title="product-6" src="{{ asset('landing-page/assets/product-6-480x480.jpg') }}" class="attachment-agencium_small size-agencium_small wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><div class="post-categories"><a class="post-category-item" href="https://bikinweb.mrofik.com/portfolio-categories/design/">Design</a></div><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/marketum-website-design-3/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Marketum Website design">Marketum Website design</span></span></a></h6></div>    </div>
</div>
<div class="portfolio-item-wrapper with-media-overlay with-title-icon post-1341 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/honda-website-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-5-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-5-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-5-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-5-480x480.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-5-480x480.jpg 1200w"><img decoding="async" alt="product-5" title="product-5" src="{{ asset('landing-page/assets/product-5-480x480.jpg') }}" class="attachment-agencium_small size-agencium_small wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><div class="post-categories"><a class="post-category-item" href="https://bikinweb.mrofik.com/portfolio-categories/design/">Design</a></div><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/honda-website-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Honda Website design">Honda Website design</span></span></a></h6></div>    </div>
</div>
<div class="portfolio-item-wrapper with-media-overlay with-title-icon post-1339 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/sideoracle-website-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-4-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-4-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-4-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-4-480x480.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-4-480x480.jpg 1200w"><img decoding="async" alt="product-4" title="product-4" src="{{ asset('landing-page/assets/product-4-480x480.jpg') }}" class="attachment-agencium_small size-agencium_small wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><div class="post-categories"><a class="post-category-item" href="https://bikinweb.mrofik.com/portfolio-categories/design/">Design</a></div><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/sideoracle-website-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Sideoracle Website design">Sideoracle Website design</span></span></a></h6></div>    </div>
</div>
<div class="portfolio-item-wrapper with-media-overlay with-title-icon post-1336 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/light-line-brand-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-15-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-15-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-15-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-15-480x480.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-15-480x480.jpg 1200w"><img decoding="async" alt="product-15" title="product-15" src="{{ asset('landing-page/assets/product-15-480x480.jpg') }}" class="attachment-agencium_small size-agencium_small wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><div class="post-categories"><a class="post-category-item" href="https://bikinweb.mrofik.com/portfolio-categories/branding/">Branding</a></div><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/light-line-brand-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Light Line Brand design">Light Line Brand design</span></span></a></h6></div>    </div>
</div>
<div class="portfolio-item-wrapper with-media-overlay with-title-icon post-1332 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/foremost-brand-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-14-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-14-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-14-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-14-480x480.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-14-480x480.jpg 1200w"><img decoding="async" alt="product-14" title="product-14" src="{{ asset('landing-page/assets/product-14-480x480.jpg') }}" class="attachment-agencium_small size-agencium_small wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><div class="post-categories"><a class="post-category-item" href="https://bikinweb.mrofik.com/portfolio-categories/branding/">Branding</a></div><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/foremost-brand-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Foremost Brand design">Foremost Brand design</span></span></a></h6></div>    </div>
</div>
<div class="portfolio-item-wrapper with-media-overlay with-title-icon post-1330 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/marketum-website-design-2/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-13-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-13-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-13-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-13-480x480.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-13-480x480.jpg 1200w"><img decoding="async" alt="product-13" title="product-13" src="{{ asset('landing-page/assets/product-13-480x480.jpg') }}" class="attachment-agencium_small size-agencium_small wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><div class="post-categories"><a class="post-category-item" href="https://bikinweb.mrofik.com/portfolio-categories/design/">Design</a></div><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/marketum-website-design-2/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Marketum Website design">Marketum Website design</span></span></a></h6></div>    </div>
</div>
<div class="portfolio-item-wrapper with-media-overlay with-title-icon post-1327 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/organic-juice-packaging/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-2-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-2-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-2-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-2-480x480.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-2-480x480.jpg 1200w"><img decoding="async" alt="product-2" title="product-2" src="{{ asset('landing-page/assets/product-2-480x480.jpg') }}" class="attachment-agencium_small size-agencium_small wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><div class="post-categories"><a class="post-category-item" href="https://bikinweb.mrofik.com/portfolio-categories/branding/">Branding</a></div><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/organic-juice-packaging/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Orange Juice Packaging">Orange Juice Packaging</span></span></a></h6></div>    </div>
</div>
<div class="portfolio-item-wrapper with-media-overlay with-title-icon post-1104 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/marketum-website-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-1-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-1-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-1-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-1-480x480.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-1-480x480.jpg 1200w"><img decoding="async" alt="product-1" title="product-1" src="{{ asset('landing-page/assets/product-1-480x480.jpg') }}" class="attachment-agencium_small size-agencium_small wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><div class="post-categories"><a class="post-category-item" href="https://bikinweb.mrofik.com/portfolio-categories/branding/">Branding</a></div><h6 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/marketum-website-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Foremost Brand design">Foremost Brand design</span></span></a></h6></div>    </div>
</div>                </div>

                            </div>

        </div>
        		</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-88044b5 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="88044b5" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-de546a5 animated agencium_clip_left" data-id="de546a5" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;agencium_clip_left&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-86cca1a elementor-widget elementor-widget-agencium_heading animated agenciumHeadingBorder" data-id="86cca1a" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;agenciumHeadingBorder&quot;}" data-widget_type="agencium_heading.default">
				<div class="elementor-widget-container">
			<div class="agencium-subtitle"><div class="agencium-subtitle-text"><h5>/layanan</h5></div></div>		</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-af35fa1 elementor-section-content-bottom elementor-section-boxed elementor-section-height-default elementor-section-height-default animated fadeIn" data-id="af35fa1" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-759a47f animated fadeIn" data-id="759a47f" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-30bb01d elementor-widget elementor-widget-heading" data-id="30bb01d" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Most <em>exprerienced</em> services</h2>		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-548d682 elementor-hidden-mobile_extra elementor-hidden-mobile animated fadeIn" data-id="548d682" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-c4b1154 elementor-widget elementor-widget-agencium_button" data-id="c4b1154" data-element_type="widget" data-widget_type="agencium_button.default">
				<div class="elementor-widget-container">

        <div class="button-widget">
            <div class="button-container">
                <a class="agencium-alter-button" href="https://demo.artureanec.com/themes/agencium/services-from-experienced-agency/" target="_blank">
                    See all services<svg viewBox="0 0 13 20"><polyline points="0.5 19.5 3 19.5 12.5 10 3 0.5"></polyline></svg>                </a>
            </div>
        </div>
        		</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-df43469 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="df43469" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ee998fe animated fadeIn" data-id="ee998fe" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-a7b315f elementor-widget elementor-widget-agencium_services_listing" data-id="a7b315f" data-element_type="widget" data-widget_type="agencium_services_listing.default">
				<div class="elementor-widget-container">

        <div class="agencium-service-listing-widget">

            <div class="archive-listing" data-ajax="{&quot;post_type&quot;:&quot;agencium_service&quot;,&quot;post_status&quot;:&quot;publish&quot;,&quot;ignore_sticky_posts&quot;:true,&quot;suppress_filters&quot;:true,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;asc&quot;,&quot;link_base&quot;:&quot;https:\/\/bikinweb.mrofik.com&quot;,&quot;posts_per_page&quot;:4,&quot;columns_number&quot;:1,&quot;paged&quot;:1}" data-widget="{&quot;excerpt_length&quot;:104,&quot;show_media&quot;:false,&quot;show_icon&quot;:false,&quot;show_index&quot;:true,&quot;show_name&quot;:true,&quot;show_excerpt&quot;:false,&quot;show_pagination&quot;:&quot;&quot;,&quot;show_read_more&quot;:false,&quot;read_more_text&quot;:&quot;Read more&quot;,&quot;item_class&quot;:&quot;service-item-wrapper&quot;,&quot;columns_number&quot;:1,&quot;listing_type&quot;:&quot;list&quot;}">
                <div class="archive-listing-wrapper service-listing-wrapper service-list-listing">

<div class="service-item-wrapper post-2059 agencium_service type-agencium_service status-publish has-post-thumbnail hentry agencium_services_category-development">
    <div class="service-item">

        <div class="service-item-content"><div class="service-post-title"><a href="https://bikinweb.mrofik.com/services/development/"><span class="service-post-index">.01 /</span><span class="service-post-name-wrapper"><span class="service-post-name" data-name="Development">Development</span></span></a></div></div>
    </div>
</div>
<div class="service-item-wrapper post-2280 agencium_service type-agencium_service status-publish has-post-thumbnail hentry agencium_services_category-marketing">
    <div class="service-item">

        <div class="service-item-content"><div class="service-post-title"><a href="https://bikinweb.mrofik.com/services/marketing-strategy/"><span class="service-post-index">.02 /</span><span class="service-post-name-wrapper"><span class="service-post-name" data-name="Marketing strategy">Marketing strategy</span></span></a></div></div>
    </div>
</div>
<div class="service-item-wrapper post-2282 agencium_service type-agencium_service status-publish has-post-thumbnail hentry agencium_services_category-design">
    <div class="service-item">

        <div class="service-item-content"><div class="service-post-title"><a href="https://bikinweb.mrofik.com/services/ui-design/"><span class="service-post-index">.03 /</span><span class="service-post-name-wrapper"><span class="service-post-name" data-name="UI Design">UI Design</span></span></a></div></div>
    </div>
</div>
<div class="service-item-wrapper post-2720 agencium_service type-agencium_service status-publish has-post-thumbnail hentry agencium_services_category-development">
    <div class="service-item">

        <div class="service-item-content"><div class="service-post-title"><a href="https://bikinweb.mrofik.com/services/data-analitics/"><span class="service-post-index">.04 /</span><span class="service-post-name-wrapper"><span class="service-post-name" data-name="Data &amp; Analitics">Data &amp; Analitics</span></span></a></div></div>
    </div>
</div>                </div>

                            </div>

        </div>
        		</div>
				</div>
				<div class="elementor-element elementor-element-da165f4 elementor-hidden-desktop elementor-hidden-laptop elementor-hidden-tablet_extra elementor-hidden-tablet elementor-widget elementor-widget-agencium_button" data-id="da165f4" data-element_type="widget" data-widget_type="agencium_button.default">
				<div class="elementor-widget-container">

        <div class="button-widget">
            <div class="button-container">
                <a class="agencium-alter-button" href="https://bikinweb.mrofik.com/#" target="_blank">
                    Lihat semua layanan<svg viewBox="0 0 13 20"><polyline points="0.5 19.5 3 19.5 12.5 10 3 0.5"></polyline></svg>                </a>
            </div>
        </div>
        		</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-b631e05 elementor-section-boxed elementor-section-height-default elementor-section-height-default animated bounceIn" data-id="b631e05" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;bounceIn&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-4dfde81" data-id="4dfde81" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-1b0181c elementor-widget elementor-widget-counter" data-id="1b0181c" data-element_type="widget" data-widget_type="counter.default">
				<div class="elementor-widget-container">
					<div class="elementor-counter">
			<div class="elementor-counter-number-wrapper">
				<span class="elementor-counter-number-prefix"></span>
				<span class="elementor-counter-number" data-duration="2000" data-to-value="5" data-from-value="0" data-delimiter=",">5</span>
				<span class="elementor-counter-number-suffix">k+</span>
			</div>
							<div class="elementor-counter-title">Awesome clients</div>
					</div>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-80c079a" data-id="80c079a" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-ce7adea elementor-widget elementor-widget-counter" data-id="ce7adea" data-element_type="widget" data-widget_type="counter.default">
				<div class="elementor-widget-container">
					<div class="elementor-counter">
			<div class="elementor-counter-number-wrapper">
				<span class="elementor-counter-number-prefix"></span>
				<span class="elementor-counter-number" data-duration="2000" data-to-value="2" data-from-value="0" data-delimiter=",">2</span>
				<span class="elementor-counter-number-suffix">b+</span>
			</div>
							<div class="elementor-counter-title">Earings a year</div>
					</div>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-ae2511c" data-id="ae2511c" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-5bfb3c7 elementor-widget elementor-widget-counter" data-id="5bfb3c7" data-element_type="widget" data-widget_type="counter.default">
				<div class="elementor-widget-container">
					<div class="elementor-counter">
			<div class="elementor-counter-number-wrapper">
				<span class="elementor-counter-number-prefix"></span>
				<span class="elementor-counter-number" data-duration="2000" data-to-value="500" data-from-value="100" data-delimiter=",">500</span>
				<span class="elementor-counter-number-suffix">+</span>
			</div>
							<div class="elementor-counter-title">Created projects</div>
					</div>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-959aa9e elementor-hidden-tablet_extra elementor-hidden-tablet elementor-hidden-mobile_extra elementor-hidden-mobile" data-id="959aa9e" data-element_type="column">
			<div class="elementor-widget-wrap">
							</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-65a1c1a elementor-section-boxed elementor-section-height-default elementor-section-height-default animated agencium_clip_right" data-id="65a1c1a" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;agencium_clip_right&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cab4bea" data-id="cab4bea" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-9531e87 elementor-widget elementor-widget-agencium_heading animated agenciumHeadingBorder" data-id="9531e87" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;agenciumHeadingBorder&quot;}" data-widget_type="agencium_heading.default">
				<div class="elementor-widget-container">
			<div class="agencium-subtitle"><div class="agencium-subtitle-text"><h5>/portfolio</h5></div></div>		</div>
				</div>
				<div class="elementor-element elementor-element-9d376c5 elementor-widget elementor-widget-heading" data-id="9d376c5" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Projects</h2>		</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-db9bc7c elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="db9bc7c" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;}" style="width: 1440px; left: -50px;">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d934078" data-id="d934078" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-7437140 elementor-widget elementor-widget-agencium_portfolio_listing" data-id="7437140" data-element_type="widget" data-widget_type="agencium_portfolio_listing.default">
				<div class="elementor-widget-container">

        <div class="agencium-portfolios-listing-widget">


            <div class="archive-listing" data-ajax="{&quot;post_type&quot;:&quot;agencium_portfolio&quot;,&quot;post_status&quot;:&quot;publish&quot;,&quot;ignore_sticky_posts&quot;:true,&quot;suppress_filters&quot;:true,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;desc&quot;,&quot;link_base&quot;:&quot;https:\/\/bikinweb.mrofik.com&quot;,&quot;posts_per_page&quot;:4,&quot;columns_number&quot;:2,&quot;paged&quot;:1}" data-widget="{&quot;item_class&quot;:&quot;portfolio-item-wrapper with-media-overlay with-title-icon with-media-icon&quot;,&quot;columns_number&quot;:2,&quot;listing_type&quot;:&quot;metro&quot;,&quot;show_title&quot;:&quot;yes&quot;,&quot;show_details&quot;:&quot;no&quot;,&quot;show_categories&quot;:&quot;yes&quot;,&quot;show_read_more&quot;:&quot;no&quot;,&quot;read_more_text&quot;:&quot;Read more&quot;,&quot;show_pagination&quot;:&quot;no&quot;}">
                                <div class="archive-listing-wrapper portfolio-listing-wrapper portfolio-metro-listing columns-2">

<div class="portfolio-item-wrapper with-media-overlay with-title-icon with-media-icon post-1361 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/coors-banquet-brand-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-12-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-12-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-12-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-12-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-12-300x300.jpg 1200w"><img decoding="async" alt="product-12" title="product-12" src="{{ asset('landing-page/assets/product-12.jpg') }}" class="attachment-large size-large wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><div class="post-categories"><a class="post-category-item" href="https://bikinweb.mrofik.com/portfolio-categories/branding/">Branding</a></div><h5 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/coors-banquet-brand-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Coors Banquet Brand design">Coors Banquet Brand design</span></span></a></h5></div>    </div>
</div>
<div class="portfolio-item-wrapper with-media-overlay with-title-icon with-media-icon post-1358 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/hot-pizza-website-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-17-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-17-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-17-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-17-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-17-300x300.jpg 1200w"><img decoding="async" alt="product-17" title="product-17" src="{{ asset('landing-page/assets/product-17.jpg') }}" class="attachment-large size-large wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><div class="post-categories"><a class="post-category-item" href="https://bikinweb.mrofik.com/portfolio-categories/design/">Design</a></div><h5 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/hot-pizza-website-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Hot Pizza Website design">Hot Pizza Website design</span></span></a></h5></div>    </div>
</div>
<div class="portfolio-item-wrapper with-media-overlay with-title-icon with-media-icon post-1356 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/light-inside-brand-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-11-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-11-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-11-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-11-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-11-300x300.jpg 1200w"><img decoding="async" alt="product-11" title="product-11" src="{{ asset('landing-page/assets/product-11.jpg') }}" class="attachment-large size-large wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><div class="post-categories"><a class="post-category-item" href="https://bikinweb.mrofik.com/portfolio-categories/branding/">Branding</a></div><h5 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/light-inside-brand-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Light inside Brand design">Light inside Brand design</span></span></a></h5></div>    </div>
</div>
<div class="portfolio-item-wrapper with-media-overlay with-title-icon with-media-icon post-1354 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
    <div class="portfolio-item">
            <div class="portfolio-item-media"><a href="https://bikinweb.mrofik.com/portfolio/vilet-range-website-design/" class="portfolio-item-media-link"><div class="post-media"><picture><source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-10-480x480.jpg 480w"><source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-10-480x480.jpg 660w"><source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-10-480x480.jpg 840w"><source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-10-300x300.jpg 1020w"><source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-10-300x300.jpg 1200w"><img decoding="async" alt="product-10" title="product-10" src="{{ asset('landing-page/assets/product-10.jpg') }}" class="attachment-large size-large wp-post-image"></picture></div></a></div><div class="portfolio-item-content"><div class="post-categories"><a class="post-category-item" href="https://bikinweb.mrofik.com/portfolio-categories/design/">Design</a></div><h5 class="post-title"><a href="https://bikinweb.mrofik.com/portfolio/vilet-range-website-design/"><span class="portfolio-post-name-wrapper"><span class="portfolio-post-name" data-name="Vilet Range Website design">Vilet Range Website design</span></span></a></h5></div>    </div>
</div>                </div>

                            </div>

        </div>
        		</div>
				</div>
				<div class="elementor-element elementor-element-d6071d2 elementor-widget elementor-widget-agencium_button" data-id="d6071d2" data-element_type="widget" data-widget_type="agencium_button.default">
				<div class="elementor-widget-container">

        <div class="button-widget">
            <div class="button-container">
                <a class="agencium-alter-button" href="https://bikinweb.mrofik.com/#" target="_blank">
                    Lihat semua projects<svg viewBox="0 0 13 20"><polyline points="0.5 19.5 3 19.5 12.5 10 3 0.5"></polyline></svg>                </a>
            </div>
        </div>
        		</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-c29ceb5 animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="c29ceb5" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-88fffd8" data-id="88fffd8" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-c59cf91 elementor-invisible elementor-widget elementor-widget-agencium_heading" data-id="c59cf91" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;agenciumHeadingBorder&quot;}" data-widget_type="agencium_heading.default">
				<div class="elementor-widget-container">
			<div class="agencium-subtitle"><div class="agencium-subtitle-text"><h5>/tim kami</h5></div></div>		</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-e90b714 elementor-section-content-bottom elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e90b714" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3dd9202" data-id="3dd9202" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-7e10715 elementor-widget elementor-widget-heading" data-id="7e10715" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Meet our <em>creative staff</em></h2>		</div>
				</div>
				<div class="elementor-element elementor-element-bafb29f elementor-widget elementor-widget-agencium_button" data-id="bafb29f" data-element_type="widget" data-widget_type="agencium_button.default">
				<div class="elementor-widget-container">

        <div class="button-widget">
            <div class="button-container">
                <a class="agencium-alter-button" href="https://demo.artureanec.com/themes/agencium/were-a-result-driven-team/" target="_blank">
                    Lihat semua tim<svg viewBox="0 0 13 20"><polyline points="0.5 19.5 3 19.5 12.5 10 3 0.5"></polyline></svg>                </a>
            </div>
        </div>
        		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2e2f33d" data-id="2e2f33d" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-68c7f7f elementor-widget elementor-widget-counter" data-id="68c7f7f" data-element_type="widget" data-widget_type="counter.default">
				<div class="elementor-widget-container">
					<div class="elementor-counter">
			<div class="elementor-counter-number-wrapper">
				<span class="elementor-counter-number-prefix"></span>
				<span class="elementor-counter-number" data-duration="2000" data-to-value="100" data-from-value="10">10</span>
				<span class="elementor-counter-number-suffix">+</span>
			</div>
							<div class="elementor-counter-title">Team profesional</div>
					</div>
				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-aeade7d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="aeade7d" data-element_type="section">
						<div class="elementor-container elementor-column-gap-wide">
					<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-710f256" data-id="710f256" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-3f9643c elementor-widget elementor-widget-agencium_person" data-id="3f9643c" data-element_type="widget" data-widget_type="agencium_person.default">
				<div class="elementor-widget-container">

        <div class="agencium-person-widget with-media-overlay">
            <div class="person-wrapper">

                <div class="person-image-container">
                    <div class="person-image-wrapper">
                        <img loading="lazy" decoding="async" width="456" height="600" src="{{ asset('landing-page/assets/team-1.jpg') }}" class="attachment-full size-full wp-image-1943" alt=""><div class="person-socials"><div class="person-socials-item"><a href="https://www.facebook.com/" target="_blank" class="fab fa-facebook-f"></a></div><div class="person-socials-item"><a href="https://twitter.com/" target="_blank" class="fab fa-twitter"></a></div><div class="person-socials-item"><a href="https://linkedin.com/" target="_blank" class="fab fa-linkedin-in"></a></div><div class="person-socials-item"><a href="https://www.youtube.com/" target="_blank" class="fab fa-youtube"></a></div></div>
                    </div>
                </div>

                <div class="person-description-container"><div class="person-position">CEO</div><div class="person-name">Adam Miller</div></div>
            </div>
        </div>
        		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4d4a8a0" data-id="4d4a8a0" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-7ffcaa1 elementor-widget elementor-widget-agencium_person" data-id="7ffcaa1" data-element_type="widget" data-widget_type="agencium_person.default">
				<div class="elementor-widget-container">

        <div class="agencium-person-widget with-media-overlay">
            <div class="person-wrapper">

                <div class="person-image-container">
                    <div class="person-image-wrapper">
                        <img loading="lazy" decoding="async" width="456" height="600" src="{{ asset('landing-page/assets/team-2.jpg') }}" class="attachment-full size-full wp-image-1982" alt=""><div class="person-socials"><div class="person-socials-item"><a href="https://www.facebook.com/" target="_blank" class="fab fa-facebook-f"></a></div><div class="person-socials-item"><a href="https://twitter.com/" target="_blank" class="fab fa-twitter"></a></div><div class="person-socials-item"><a href="https://linkedin.com/" target="_blank" class="fab fa-linkedin-in"></a></div><div class="person-socials-item"><a href="https://www.youtube.com/" target="_blank" class="fab fa-youtube"></a></div></div>
                    </div>
                </div>

                <div class="person-description-container"><div class="person-position">Programmer</div><div class="person-name">Dan Washington</div></div>
            </div>
        </div>
        		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-ba762b1" data-id="ba762b1" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-f509966 elementor-widget elementor-widget-agencium_person" data-id="f509966" data-element_type="widget" data-widget_type="agencium_person.default">
				<div class="elementor-widget-container">

        <div class="agencium-person-widget with-media-overlay">
            <div class="person-wrapper">

                <div class="person-image-container">
                    <div class="person-image-wrapper">
                        <img loading="lazy" decoding="async" width="457" height="600" src="{{ asset('landing-page/assets/team-3.jpg') }}" class="attachment-full size-full wp-image-1983" alt=""><div class="person-socials"><div class="person-socials-item"><a href="https://www.facebook.com/" target="_blank" class="fab fa-facebook-f"></a></div><div class="person-socials-item"><a href="https://twitter.com/" target="_blank" class="fab fa-twitter"></a></div><div class="person-socials-item"><a href="https://linkedin.com/" target="_blank" class="fab fa-linkedin-in"></a></div><div class="person-socials-item"><a href="https://www.youtube.com/" target="_blank" class="fab fa-youtube"></a></div></div>
                    </div>
                </div>

                <div class="person-description-container"><div class="person-position">UI/UX desiger</div><div class="person-name">Sam Peterson</div></div>
            </div>
        </div>
        		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-f586337" data-id="f586337" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-066bb99 elementor-widget elementor-widget-agencium_person" data-id="066bb99" data-element_type="widget" data-widget_type="agencium_person.default">
				<div class="elementor-widget-container">

        <div class="agencium-person-widget with-media-overlay">
            <div class="person-wrapper">

                <div class="person-image-container">
                    <div class="person-image-wrapper">
                        <img loading="lazy" decoding="async" width="456" height="600" src="{{ asset('landing-page/assets/team-4.jpg') }}" class="attachment-full size-full wp-image-1984" alt=""><div class="person-socials"><div class="person-socials-item"><a href="https://www.facebook.com/" target="_blank" class="fab fa-facebook-f"></a></div><div class="person-socials-item"><a href="https://twitter.com/" target="_blank" class="fab fa-twitter"></a></div><div class="person-socials-item"><a href="https://linkedin.com/" target="_blank" class="fab fa-linkedin-in"></a></div><div class="person-socials-item"><a href="https://www.youtube.com/" target="_blank" class="fab fa-youtube"></a></div></div>
                    </div>
                </div>

                <div class="person-description-container"><div class="person-position">HR specialist</div><div class="person-name">Andrew Dowson</div></div>
            </div>
        </div>
        		</div>
				</div>
					</div>
		</div>
					</div>
		</section>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-bcff130 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="bcff130" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;agencium_clip_left&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1b39ae8" data-id="1b39ae8" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-06c0394 elementor-invisible elementor-widget elementor-widget-agencium_heading" data-id="06c0394" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;agenciumHeadingBorder&quot;}" data-widget_type="agencium_heading.default">
				<div class="elementor-widget-container">
			<div class="agencium-subtitle"><div class="agencium-subtitle-text"><h5>/testimoni</h5></div></div>		</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-a6b14d6 elementor-section-content-middle elementor-section-stretched elementor-reverse-laptop elementor-reverse-tablet_extra elementor-reverse-tablet elementor-reverse-mobile_extra elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="a6b14d6" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;animation&quot;:&quot;fadeIn&quot;}" style="width: 1440px; left: -50px;">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-757a0aa" data-id="757a0aa" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-e4e51a6 show-corner-icon-yes elementor-widget elementor-widget-agencium_testimonial_carousel" data-id="e4e51a6" data-element_type="widget" data-widget_type="agencium_testimonial_carousel.default">
				<div class="elementor-widget-container">

        <div class="agencium-testimonial-carousel-widget">
            <div class="testimonial-carousel-wrapper">

                <div class="testimonials-slider-container">
                    <div class="testimonials-slider owl-carousel owl-theme owl-loaded owl-drag" data-slider-options="{&quot;items&quot;:1,&quot;nav&quot;:false,&quot;dots&quot;:true,&quot;autoplayHoverPause&quot;:true,&quot;autoplay&quot;:false,&quot;autoplaySpeed&quot;:300,&quot;autoplayTimeout&quot;:5000,&quot;loop&quot;:true,&quot;dragEndSpeed&quot;:500,&quot;navSpeed&quot;:500,&quot;dotsSpeed&quot;:500,&quot;rtl&quot;:false}">
                                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1010px, 0px, 0px); transition: all 0s ease 0s; width: 3538px;"><div class="owl-item cloned" style="width: 505.398px;"><div class="testimonial-item slider-item"><div class="testimonial"><p>Reedfish bonefish trahira bristlenose catfish, longnose lancetfish morid. Wahoo mora deep sea smelt cat shark atlantic. Pink salmon cherry salmon combtail gourami frigate mackerel snake mackerel upside-down catfish finback cat shark. Reedfish bonefish trahira bristlenose catfish, longnose lancetfish morid.</p></div><div class="author-container"><div class="author-info"><div class="author">Sam Daniels / CEO Electric LLC</div></div></div></div></div><div class="owl-item cloned" style="width: 505.398px;"><div class="testimonial-item slider-item"><div class="testimonial"><p>Reedfish bonefish trahira bristlenose catfish, longnose lancetfish morid. Wahoo mora deep sea smelt cat shark atlantic. Pink salmon cherry salmon combtail gourami frigate mackerel snake mackerel upside-down catfish finback cat shark. Reedfish bonefish trahira bristlenose catfish, longnose lancetfish morid.</p></div><div class="author-container"><div class="author-info"><div class="author">Sam Daniels / CEO Electric LLC</div></div></div></div></div><div class="owl-item active" style="width: 505.398px;"><div class="testimonial-item slider-item"><div class="testimonial"><p>Reedfish bonefish trahira bristlenose catfish, longnose lancetfish morid. Wahoo mora deep sea smelt cat shark atlantic. Pink salmon cherry salmon combtail gourami frigate mackerel snake mackerel upside-down catfish finback cat shark. Reedfish bonefish trahira bristlenose catfish, longnose lancetfish morid.</p></div><div class="author-container"><div class="author-info"><div class="author">Sam Daniels / CEO Electric LLC</div></div></div></div></div><div class="owl-item" style="width: 505.398px;"><div class="testimonial-item slider-item"><div class="testimonial"><p>Reedfish bonefish trahira bristlenose catfish, longnose lancetfish morid. Wahoo mora deep sea smelt cat shark atlantic. Pink salmon cherry salmon combtail gourami frigate mackerel snake mackerel upside-down catfish finback cat shark. Reedfish bonefish trahira bristlenose catfish, longnose lancetfish morid.</p></div><div class="author-container"><div class="author-info"><div class="author">Sam Daniels / CEO Electric LLC</div></div></div></div></div><div class="owl-item" style="width: 505.398px;"><div class="testimonial-item slider-item"><div class="testimonial"><p>Reedfish bonefish trahira bristlenose catfish, longnose lancetfish morid. Wahoo mora deep sea smelt cat shark atlantic. Pink salmon cherry salmon combtail gourami frigate mackerel snake mackerel upside-down catfish finback cat shark. Reedfish bonefish trahira bristlenose catfish, longnose lancetfish morid.</p></div><div class="author-container"><div class="author-info"><div class="author">Sam Daniels / CEO Electric LLC</div></div></div></div></div><div class="owl-item cloned" style="width: 505.398px;"><div class="testimonial-item slider-item"><div class="testimonial"><p>Reedfish bonefish trahira bristlenose catfish, longnose lancetfish morid. Wahoo mora deep sea smelt cat shark atlantic. Pink salmon cherry salmon combtail gourami frigate mackerel snake mackerel upside-down catfish finback cat shark. Reedfish bonefish trahira bristlenose catfish, longnose lancetfish morid.</p></div><div class="author-container"><div class="author-info"><div class="author">Sam Daniels / CEO Electric LLC</div></div></div></div></div><div class="owl-item cloned" style="width: 505.398px;"><div class="testimonial-item slider-item"><div class="testimonial"><p>Reedfish bonefish trahira bristlenose catfish, longnose lancetfish morid. Wahoo mora deep sea smelt cat shark atlantic. Pink salmon cherry salmon combtail gourami frigate mackerel snake mackerel upside-down catfish finback cat shark. Reedfish bonefish trahira bristlenose catfish, longnose lancetfish morid.</p></div><div class="author-container"><div class="author-info"><div class="author">Sam Daniels / CEO Electric LLC</div></div></div></div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
                </div>
            </div>
        </div>

        		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6f68a1f" data-id="6f68a1f" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-ac30344 elementor-widget elementor-widget-heading" data-id="ac30344" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">The Best customers says <em>about Us</em></h2>		</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				</div>
		            </div>

                                </div>

        <!-- Sidebar Container -->

    </div>


                    <!-- Footer -->
                    <footer class="footer-wrapper"><div class="footer footer-type-2 footer-widgets-disable footer-copyright-enable footer-logo-enable footer-menu-disable footer-socials-disable"><div class="footer-bg"></div>
    <div class="footer-section footer-section-cta">
        <div class="footer-row">
            <div class="footer-cta">

                <span class="footer-cta-title">Hubungi Kami</span><span class="footer-cta-button"><span class="footer-cta-button-text">WhatsApp</span><span class="footer-cta-button-bg"></span></span>
            </div>
        </div>
    </div>


    <div class="footer-section footer-section-top">
        <div class="footer-row">
            <div class="footer-columns-row">

                <div class="footer-column"><div class="footer-logo-container"><div class="logo-container-desktop"><div class="logo retina-logo"><a class="logo-link" href="https://bikinweb.mrofik.com/"><img loading="lazy" width="185" height="38" src="{{ asset('landing-page/assets/logo_light_x2-1.png') }}" alt="WebInstan"></a></div></div><div class="logo-container-mobile"><div class="logo retina-logo"><a class="logo-link" href="https://bikinweb.mrofik.com/"><img loading="lazy" width="161" height="33" src="{{ asset('landing-page/assets/logo_light_x2-1.png') }}" alt="WebInstan"></a></div></div></div></div><div class="footer-column"></div>
            </div>
        </div>
    </div>




        <div class="footer-section footer-section-bottom">
            <div class="footer-row">
                <div class="footer-columns-row">
                    <div class="footer-column"><div class="footer-copyrights-container">©<a href="https://bikinweb.mrofik.com/#">BikinWeb</a> 2024. All rights reserved.</div></div>                </div>
            </div>
        </div>
</div></footer>        </div>
        <div class="footer-scroll-top"></div><!-- Instagram Feed JS -->
<script src="{{asset('landing-page/assets/jquery.min.js')}}"></script>
<script type="text/javascript">
var sbiajaxurl = "https://bikinweb.mrofik.com/wp-admin/admin-ajax.php";
</script>
	<script type="text/javascript">
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
	</script>
	<link rel="stylesheet" id="wc-blocks-style-css" href="{{ asset('landing-page/assets/wc-blocks.css') }}" type="text/css" media="all">
<link rel="stylesheet" id="mediaelement-css" href="{{ asset('landing-page/assets/mediaelementplayer-legacy.min.css') }}" type="text/css" media="all">
<link rel="stylesheet" id="wp-mediaelement-css" href="{{ asset('landing-page/assets/wp-mediaelement.min.css') }}" type="text/css" media="all">
<style id="core-block-supports-inline-css" type="text/css">
.wp-container-core-social-links-layout-1.wp-container-core-social-links-layout-1{flex-wrap:nowrap;}
</style>
<link rel="stylesheet" id="e-animations-css" href="{{ asset('landing-page/assets/animations.min.css') }}" type="text/css" media="all">
<script type="text/javascript" src="{{ asset('landing-page/assets/sourcebuster.min.js') }}" id="sourcebuster-js-js"></script>
<script type="text/javascript" id="wc-order-attribution-js-extra">
/* <![CDATA[ */
var wc_order_attribution = {"params":{"lifetime":1.0e-5,"session":30,"ajaxurl":"https:\/\/bikinweb.mrofik.com\/wp-admin\/admin-ajax.php","prefix":"wc_order_attribution_","allowTracking":"yes"}};
/* ]]> */
</script>
<script type="text/javascript" src="{{ asset('landing-page/assets/order-attribution.min.js') }}" id="wc-order-attribution-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/wp-polyfill-inert.min.js') }}" id="wp-polyfill-inert-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/regenerator-runtime.min.js') }}" id="regenerator-runtime-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/wp-polyfill.min.js') }}" id="wp-polyfill-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/react.min.js') }}" id="react-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/hooks.min.js') }}" id="wp-hooks-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/deprecated.min.js') }}" id="wp-deprecated-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/dom.min.js') }}" id="wp-dom-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/react-dom.min.js') }}" id="react-dom-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/escape-html.min.js') }}" id="wp-escape-html-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/element.min.js') }}" id="wp-element-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/is-shallow-equal.min.js') }}" id="wp-is-shallow-equal-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/i18n.min.js') }}" id="wp-i18n-js"></script>
<script type="text/javascript" id="wp-i18n-js-after">
/* <![CDATA[ */
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
/* ]]> */
</script>
<script type="text/javascript" src="{{ asset('landing-page/assets/keycodes.min.js') }}" id="wp-keycodes-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/priority-queue.min.js') }}" id="wp-priority-queue-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/compose.min.js') }}" id="wp-compose-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/private-apis.min.js') }}" id="wp-private-apis-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/redux-routine.min.js') }}" id="wp-redux-routine-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/data.min.js') }}" id="wp-data-js"></script>
<script type="text/javascript" id="wp-data-js-after">
/* <![CDATA[ */
( function() {
	var userId = 0;
	var storageKey = "WP_DATA_USER_" + userId;
	wp.data
		.use( wp.data.plugins.persistence, { storageKey: storageKey } );
} )();
/* ]]> */
</script>
<script type="text/javascript" src="{{ asset('landing-page/assets/lodash.min.js') }}" id="lodash-js"></script>
<script type="text/javascript" id="lodash-js-after">
/* <![CDATA[ */
window.lodash = _.noConflict();
/* ]]> */
</script>
<script type="text/javascript" src="{{ asset('landing-page/assets/wc-blocks-registry.js') }}" id="wc-blocks-registry-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/url.min.js') }}" id="wp-url-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/api-fetch.min.js') }}" id="wp-api-fetch-js"></script>
<script type="text/javascript" id="wp-api-fetch-js-after">
/* <![CDATA[ */
wp.apiFetch.use( wp.apiFetch.createRootURLMiddleware( "https://bikinweb.mrofik.com/wp-json/" ) );
wp.apiFetch.nonceMiddleware = wp.apiFetch.createNonceMiddleware( "ae288f397d" );
wp.apiFetch.use( wp.apiFetch.nonceMiddleware );
wp.apiFetch.use( wp.apiFetch.mediaUploadMiddleware );
wp.apiFetch.nonceEndpoint = "https://bikinweb.mrofik.com/wp-admin/admin-ajax.php?action=rest-nonce";
/* ]]> */
</script>

<script type="text/javascript" src="{{ asset('landing-page/assets/wc-settings.js') }}" id="wc-settings-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/data-controls.min.js') }}" id="wp-data-controls-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/html-entities.min.js') }}" id="wp-html-entities-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/notices.min.js') }}" id="wp-notices-js"></script>
<script type="text/javascript" id="wc-blocks-middleware-js-before">
/* <![CDATA[ */
			var wcBlocksMiddlewareConfig = {
				storeApiNonce: '6eee608ead',
				wcStoreApiNonceTimestamp: '1708380561'
			};

/* ]]> */
</script>
<script type="text/javascript" src="{{ asset('landing-page/assets/wc-blocks-middleware.js') }}" id="wc-blocks-middleware-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/wc-blocks-data.js') }}" id="wc-blocks-data-store-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/dom-ready.min.js') }}" id="wp-dom-ready-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/a11y.min.js') }}" id="wp-a11y-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/primitives.min.js') }}" id="wp-primitives-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/warning.min.js') }}" id="wp-warning-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/blocks-components.js') }}" id="wc-blocks-components-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/blocks-checkout.js') }}" id="wc-blocks-checkout-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/order-attribution-blocks.min.js') }}" id="wc-order-attribution-blocks-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/jquery.cookie.min.js') }}" id="jquery-cookie-js" data-wp-strategy="defer"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/jquery.marquee.min.js') }}" id="jquery-marquee-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/owl.carousel.min.js') }}" id="owl-carousel-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/isotope.pkgd.min.js') }}" id="isotope-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/flowmap-effect.min.js') }}" id="flowmap-effect-js"></script>
<script type="text/javascript" id="agencium-theme-js-extra">
/* <![CDATA[ */
var ajax_params = {"ajax_url":"https:\/\/bikinweb.mrofik.com\/wp-admin\/admin-ajax.php","ajax_nonce":"4f6487942d"};
var theme = [];
/* ]]> */
</script>
<script type="text/javascript" src="{{ asset('landing-page/assets/theme.js') }}" id="agencium-theme-js"></script>
<script type="text/javascript" id="agencium-theme-js-after">
/* <![CDATA[ */




/* ]]> */
</script>
<script type="text/javascript" src="{{ asset('landing-page/assets/slick.min.js') }}" id="slick-slider-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/woo.js') }}" id="agencium-woocommerce-scripts-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/imagesloaded.min.js') }}" id="imagesloaded-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/elementor-widgets.js') }}" id="elementor_widgets-js"></script>
<script type="text/javascript" id="mediaelement-core-js-before">
/* <![CDATA[ */
var mejsL10n = {"language":"en","strings":{"mejs.download-file":"Download File","mejs.install-flash":"You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/","mejs.fullscreen":"Fullscreen","mejs.play":"Play","mejs.pause":"Pause","mejs.time-slider":"Time Slider","mejs.time-help-text":"Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.","mejs.live-broadcast":"Live Broadcast","mejs.volume-help-text":"Use Up\/Down Arrow keys to increase or decrease volume.","mejs.unmute":"Unmute","mejs.mute":"Mute","mejs.volume-slider":"Volume Slider","mejs.video-player":"Video Player","mejs.audio-player":"Audio Player","mejs.captions-subtitles":"Captions\/Subtitles","mejs.captions-chapters":"Chapters","mejs.none":"None","mejs.afrikaans":"Afrikaans","mejs.albanian":"Albanian","mejs.arabic":"Arabic","mejs.belarusian":"Belarusian","mejs.bulgarian":"Bulgarian","mejs.catalan":"Catalan","mejs.chinese":"Chinese","mejs.chinese-simplified":"Chinese (Simplified)","mejs.chinese-traditional":"Chinese (Traditional)","mejs.croatian":"Croatian","mejs.czech":"Czech","mejs.danish":"Danish","mejs.dutch":"Dutch","mejs.english":"English","mejs.estonian":"Estonian","mejs.filipino":"Filipino","mejs.finnish":"Finnish","mejs.french":"French","mejs.galician":"Galician","mejs.german":"German","mejs.greek":"Greek","mejs.haitian-creole":"Haitian Creole","mejs.hebrew":"Hebrew","mejs.hindi":"Hindi","mejs.hungarian":"Hungarian","mejs.icelandic":"Icelandic","mejs.indonesian":"Indonesian","mejs.irish":"Irish","mejs.italian":"Italian","mejs.japanese":"Japanese","mejs.korean":"Korean","mejs.latvian":"Latvian","mejs.lithuanian":"Lithuanian","mejs.macedonian":"Macedonian","mejs.malay":"Malay","mejs.maltese":"Maltese","mejs.norwegian":"Norwegian","mejs.persian":"Persian","mejs.polish":"Polish","mejs.portuguese":"Portuguese","mejs.romanian":"Romanian","mejs.russian":"Russian","mejs.serbian":"Serbian","mejs.slovak":"Slovak","mejs.slovenian":"Slovenian","mejs.spanish":"Spanish","mejs.swahili":"Swahili","mejs.swedish":"Swedish","mejs.tagalog":"Tagalog","mejs.thai":"Thai","mejs.turkish":"Turkish","mejs.ukrainian":"Ukrainian","mejs.vietnamese":"Vietnamese","mejs.welsh":"Welsh","mejs.yiddish":"Yiddish"}};
/* ]]> */
</script>
<script type="text/javascript" src="{{ asset('landing-page/assets/mediaelement-and-player.min.js') }}" id="mediaelement-core-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/mediaelement-migrate.min.js') }}" id="mediaelement-migrate-js"></script>
<script type="text/javascript" id="mediaelement-js-extra">
/* <![CDATA[ */
var _wpmejsSettings = {"pluginPath":"\/wp-includes\/js\/mediaelement\/","classPrefix":"mejs-","stretching":"responsive","audioShortcodeLibrary":"mediaelement","videoShortcodeLibrary":"mediaelement"};
/* ]]> */
</script>
<script type="text/javascript" src="{{ asset('landing-page/assets/wp-mediaelement.min.js') }}" id="wp-mediaelement-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/jquery-numerator.min.js') }}" id="jquery-numerator-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/webpack.runtime.min.js') }}" id="elementor-webpack-runtime-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/frontend-modules.min.js') }}" id="elementor-frontend-modules-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/waypoints.min.js') }}" id="elementor-waypoints-js"></script>
<script type="text/javascript" src="{{ asset('landing-page/assets/core.min.js') }}" id="jquery-ui-core-js"></script>
<script type="text/javascript" id="elementor-frontend-js-before">
/* <![CDATA[ */
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselWrapperAriaLabel":"Carousel | Horizontal scrolling: Arrow Left & Right","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":480,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":660,"default_value":880,"direction":"max","is_enabled":true},"tablet":{"label":"Tablet Portrait","value":840,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1020,"default_value":1200,"direction":"max","is_enabled":true},"laptop":{"label":"Laptop","value":1200,"default_value":1366,"direction":"max","is_enabled":true},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.19.2","is_static":false,"experimentalFeatures":{"e_optimized_assets_loading":true,"additional_custom_breakpoints":true,"e_image_loading_optimization":true},"urls":{"assets":"https:\/\/bikinweb.mrofik.com\/wp-content\/plugins\/elementor\/assets\/"},"swiperClass":"swiper-container","settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_mobile_extra","viewport_tablet","viewport_tablet_extra","viewport_laptop"],"viewport_mobile":480,"viewport_mobile_extra":660,"viewport_tablet":840,"viewport_tablet_extra":1020,"viewport_laptop":1200,"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":6027,"title":"Beranda%20-%20WebInstan","excerpt":"","featuredImage":false}};
/* ]]> */
</script>
<script type="text/javascript" src="{{ asset('landing-page/assets/frontend.min.js') }}" id="elementor-frontend-js"></script><span id="elementor-device-mode" class="elementor-screen-only"></span>
<script type="text/javascript" src="{{ asset('landing-page/assets/underscore.min.js') }}" id="underscore-js"></script>
<script type="text/javascript" id="wp-util-js-extra">
/* <![CDATA[ */
var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
/* ]]> */
</script>
<script type="text/javascript" src="{{ asset('landing-page/assets/wp-util.min.js') }}" id="wp-util-js"></script>
<script type="text/javascript" id="wpforms-elementor-js-extra">
/* <![CDATA[ */
var wpformsElementorVars = {"captcha_provider":"recaptcha","recaptcha_type":"v2"};
/* ]]> */
</script>
<script type="text/javascript" src="{{ asset('landing-page/assets/frontend(1).min.js') }}" id="wpforms-elementor-js"></script>


<p id="a11y-speak-intro-text" class="a11y-speak-intro-text" style="position: absolute;margin: -1px;padding: 0;height: 1px;width: 1px;overflow: hidden;clip: rect(1px, 1px, 1px, 1px);-webkit-clip-path: inset(50%);clip-path: inset(50%);border: 0;word-wrap: normal !important;" hidden="hidden">Notifications</p><div id="a11y-speak-assertive" class="a11y-speak-region" style="position: absolute;margin: -1px;padding: 0;height: 1px;width: 1px;overflow: hidden;clip: rect(1px, 1px, 1px, 1px);-webkit-clip-path: inset(50%);clip-path: inset(50%);border: 0;word-wrap: normal !important;" aria-live="assertive" aria-relevant="additions text" aria-atomic="true"></div><div id="a11y-speak-polite" class="a11y-speak-region" style="position: absolute;margin: -1px;padding: 0;height: 1px;width: 1px;overflow: hidden;clip: rect(1px, 1px, 1px, 1px);-webkit-clip-path: inset(50%);clip-path: inset(50%);border: 0;word-wrap: normal !important;" aria-live="polite" aria-relevant="additions text" aria-atomic="true"></div></body></html>
