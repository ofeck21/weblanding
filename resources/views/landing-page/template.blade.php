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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link rel="stylesheet" id="sbi_styles-css" href="{{ asset('landing-page/assets/sbi-styles.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="wp-block-library-css" href="{{ asset('landing-page/assets/style.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('landing-page/css/classic-theme-style-inline.css') }}">
    <link rel="stylesheet" href="{{ asset('landing-page/css/global-style-inline.css') }}">
    <link rel="stylesheet" id="woocommerce-layout-css" href="{{ asset('landing-page/assets/woocommerce-layout.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="woocommerce-smallscreen-css" href="{{ asset('landing-page/assets/woocommerce-smallscreen.css') }}" type="text/css" media="only screen and (max-width: 768px)">
    <link rel="stylesheet" id="woocommerce-general-css" href="{{ asset('landing-page/assets/woocommerce.css') }}" type="text/css" media="all">
    <style id="woocommerce-inline-inline-css" type="text/css">
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel="stylesheet" id="agencium-theme-css" href="{{ asset('landing-page/assets/theme.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('landing-page/css/agencium-inline.css') }}">
    <link rel="stylesheet" id="agencium-woocommerce-css" href="{{ asset('landing-page/assets/woocommerce(1).css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="agencium-style-css" href="{{ asset('landing-page/assets/style.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="agencium-fonts-css" href="{{ asset('landing-page/assets/css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-icons-css" href="{{ asset('landing-page/assets/elementor-icons.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-frontend-css" href="{{ asset('landing-page/assets/custom-frontend.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="swiper-css" href="{{ asset('landing-page/assets/swiper.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-8-css" href="{{ asset('landing-page/assets/post-8.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="font-awesome-5-all-css" href="{{ asset('landing-page/assets/all.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="font-awesome-4-shim-css" href="{{ asset('landing-page/assets/v4-shims.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-6027-css" href="{{ asset('landing-page/assets/post-6027.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="google-fonts-1-css" href="{{ asset('landing-page/assets/css(1)') }}" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-icons-shared-0-css" href="{{ asset('landing-page/assets/fontawesome.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-icons-fa-brands-css" href="{{ asset('landing-page/assets/brands.min.css') }}" type="text/css" media="all">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <script type="text/javascript" src="{{ asset('landing-page/assets/jquery.min.js') }}" id="jquery-core-js"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/jquery-migrate.min.js') }}" id="jquery-migrate-js"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/jquery.blockUI.min.js') }}" id="jquery-blockui-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/add-to-cart.min.js') }}" id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/js.cookie.min.js') }}" id="js-cookie-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/woocommerce.min.js') }}" id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/v4-shims.min.js') }}" id="font-awesome-4-shim-js"></script>

    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <link rel="icon" href="https://bikinweb.mrofik.com/wp-content/uploads/2023/09/cropped-favicon-85x85.png" sizes="32x32">
    <link rel="icon" href="https://bikinweb.mrofik.com/wp-content/uploads/2023/09/cropped-favicon-300x300.png" sizes="192x192">
    <link rel="apple-touch-icon" href="https://bikinweb.mrofik.com/wp-content/uploads/2023/09/cropped-favicon-300x300.png">
    <meta name="msapplication-TileImage" content="https://bikinweb.mrofik.com/wp-content/uploads/2023/09/cropped-favicon-300x300.png">
    <link rel="stylesheet" href="{{ asset('landing-page/css/wpforms-css-vars-root.css') }}">
    @stack('css')
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
    @include('landing-page.partial.mobile-menu')

    <!-- Compact Menu Block -->
    <!-- Top Bar -->
    <div class="body-container">

        <div class="body-line body-line-l1"></div>
        <div class="body-line body-line-l2"></div>
        <div class="body-line body-line-r1"></div>
        <div class="body-line body-line-r2"></div>

        <!-- Side Panel -->
        @include('landing-page.partial.side-panel')

        <!-- Mobile Header -->
        @include('landing-page.partial.mobile-header')

        <div class="page-header-area header-area-style-1">
            <!-- Header -->
            @include('landing-page.partial.header')
        </div>

        <div class="content-wrapper content-wrapper-remove-top-margin content-wrapper-sidebar-position-none elementor-content">

            <!-- Content Container -->
            <div class="content">
                <div class="content-inner">
                    <div data-elementor-type="wp-page" data-elementor-id="6027" class="elementor elementor-6027">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>


        <!-- Footer -->
        @include('landing-page.partial.footer')
    </div>
    <div class="footer-scroll-top"></div>
    <!-- Instagram Feed JS -->
    <script src="{{ asset('landing-page/assets/jquery.min.js') }}"></script>
    <script type="text/javascript">
        var sbiajaxurl = "https://bikinweb.mrofik.com/wp-admin/admin-ajax.php";
    </script>
    <script type="text/javascript">
        (function() {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script>
    <link rel="stylesheet" id="wc-blocks-style-css" href="{{ asset('landing-page/assets/wc-blocks.css') }}"
        type="text/css" media="all">
    <link rel="stylesheet" id="mediaelement-css"
        href="{{ asset('landing-page/assets/mediaelementplayer-legacy.min.css') }}" type="text/css"
        media="all">
    <link rel="stylesheet" id="wp-mediaelement-css"
        href="{{ asset('landing-page/assets/wp-mediaelement.min.css') }}" type="text/css" media="all">
    <style id="core-block-supports-inline-css" type="text/css">
        .wp-container-core-social-links-layout-1.wp-container-core-social-links-layout-1 {
            flex-wrap: nowrap;
        }
    </style>
    <link rel="stylesheet" id="e-animations-css" href="{{ asset('landing-page/assets/animations.min.css') }}"
        type="text/css" media="all">
    <script type="text/javascript" src="{{ asset('landing-page/assets/sourcebuster.min.js') }}" id="sourcebuster-js-js">
    </script>
    <script type="text/javascript" id="wc-order-attribution-js-extra">
        /* <![CDATA[ */
        var wc_order_attribution = {
            "params": {
                "lifetime": 1.0e-5,
                "session": 30,
                "ajaxurl": "https:\/\/bikinweb.mrofik.com\/wp-admin\/admin-ajax.php",
                "prefix": "wc_order_attribution_",
                "allowTracking": "yes"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/order-attribution.min.js') }}"
        id="wc-order-attribution-js"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/wp-polyfill-inert.min.js') }}"
        id="wp-polyfill-inert-js"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/regenerator-runtime.min.js') }}"
        id="regenerator-runtime-js"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/wp-polyfill.min.js') }}" id="wp-polyfill-js">
    </script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/react.min.js') }}" id="react-js"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/hooks.min.js') }}" id="wp-hooks-js"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/deprecated.min.js') }}" id="wp-deprecated-js">
    </script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/dom.min.js') }}" id="wp-dom-js"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/react-dom.min.js') }}" id="react-dom-js"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/escape-html.min.js') }}" id="wp-escape-html-js">
    </script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/element.min.js') }}" id="wp-element-js"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/is-shallow-equal.min.js') }}"
        id="wp-is-shallow-equal-js"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/i18n.min.js') }}" id="wp-i18n-js"></script>
    <script type="text/javascript" id="wp-i18n-js-after">
        /* <![CDATA[ */
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/keycodes.min.js') }}" id="wp-keycodes-js"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/priority-queue.min.js') }}"
        id="wp-priority-queue-js"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/compose.min.js') }}" id="wp-compose-js"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/private-apis.min.js') }}" id="wp-private-apis-js">
    </script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/redux-routine.min.js') }}" id="wp-redux-routine-js">
    </script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/data.min.js') }}" id="wp-data-js"></script>
    <script type="text/javascript" id="wp-data-js-after">
        /* <![CDATA[ */
        (function() {
            var userId = 0;
            var storageKey = "WP_DATA_USER_" + userId;
            wp.data
                .use(wp.data.plugins.persistence, {
                    storageKey: storageKey
                });
        })();
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/lodash.min.js') }}" id="lodash-js"></script>
    <script type="text/javascript" id="lodash-js-after">
        /* <![CDATA[ */
        window.lodash = _.noConflict();
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/wc-blocks-registry.js') }}"
        id="wc-blocks-registry-js"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/url.min.js') }}" id="wp-url-js"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/api-fetch.min.js') }}" id="wp-api-fetch-js">
    </script>
    <script type="text/javascript" id="wp-api-fetch-js-after">
        /* <![CDATA[ */
        wp.apiFetch.use(wp.apiFetch.createRootURLMiddleware("https://bikinweb.mrofik.com/wp-json/"));
        wp.apiFetch.nonceMiddleware = wp.apiFetch.createNonceMiddleware("ae288f397d");
        wp.apiFetch.use(wp.apiFetch.nonceMiddleware);
        wp.apiFetch.use(wp.apiFetch.mediaUploadMiddleware);
        wp.apiFetch.nonceEndpoint = "https://bikinweb.mrofik.com/wp-admin/admin-ajax.php?action=rest-nonce";
        /* ]]> */
    </script>

    <script type="text/javascript" src="{{ asset('landing-page/assets/wc-settings.js') }}" id="wc-settings-js"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/data-controls.min.js') }}" id="wp-data-controls-js">
    </script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/html-entities.min.js') }}" id="wp-html-entities-js">
    </script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/notices.min.js') }}" id="wp-notices-js"></script>
    <script type="text/javascript" id="wc-blocks-middleware-js-before">
        /* <![CDATA[ */
        var wcBlocksMiddlewareConfig = {
            storeApiNonce: '6eee608ead',
            wcStoreApiNonceTimestamp: '1708380561'
        };

        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/wc-blocks-middleware.js') }}"
        id="wc-blocks-middleware-js"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/wc-blocks-data.js') }}"
        id="wc-blocks-data-store-js"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/dom-ready.min.js') }}" id="wp-dom-ready-js">
    </script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/a11y.min.js') }}" id="wp-a11y-js"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/primitives.min.js') }}" id="wp-primitives-js">
    </script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/warning.min.js') }}" id="wp-warning-js"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/blocks-components.js') }}"
        id="wc-blocks-components-js"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/blocks-checkout.js') }}" id="wc-blocks-checkout-js">
    </script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/order-attribution-blocks.min.js') }}"
        id="wc-order-attribution-blocks-js"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/jquery.cookie.min.js') }}" id="jquery-cookie-js"
        data-wp-strategy="defer"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/jquery.marquee.min.js') }}" id="jquery-marquee-js">
    </script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/owl.carousel.min.js') }}" id="owl-carousel-js">
    </script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/isotope.pkgd.min.js') }}" id="isotope-js"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/flowmap-effect.min.js') }}" id="flowmap-effect-js">
    </script>
    <script type="text/javascript" id="agencium-theme-js-extra">
        /* <![CDATA[ */
        var ajax_params = {
            "ajax_url": "https:\/\/bikinweb.mrofik.com\/wp-admin\/admin-ajax.php",
            "ajax_nonce": "4f6487942d"
        };
        var theme = [];
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/theme.js') }}" id="agencium-theme-js"></script>
    <script type="text/javascript" id="agencium-theme-js-after">
        /* <![CDATA[ */




        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/slick.min.js') }}" id="slick-slider-js"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/woo.js') }}" id="agencium-woocommerce-scripts-js">
    </script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/imagesloaded.min.js') }}" id="imagesloaded-js">
    </script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/elementor-widgets.js') }}"
        id="elementor_widgets-js"></script>
    <script type="text/javascript" id="mediaelement-core-js-before">
        /* <![CDATA[ */
        var mejsL10n = {
            "language": "en",
            "strings": {
                "mejs.download-file": "Download File",
                "mejs.install-flash": "You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/",
                "mejs.fullscreen": "Fullscreen",
                "mejs.play": "Play",
                "mejs.pause": "Pause",
                "mejs.time-slider": "Time Slider",
                "mejs.time-help-text": "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.",
                "mejs.live-broadcast": "Live Broadcast",
                "mejs.volume-help-text": "Use Up\/Down Arrow keys to increase or decrease volume.",
                "mejs.unmute": "Unmute",
                "mejs.mute": "Mute",
                "mejs.volume-slider": "Volume Slider",
                "mejs.video-player": "Video Player",
                "mejs.audio-player": "Audio Player",
                "mejs.captions-subtitles": "Captions\/Subtitles",
                "mejs.captions-chapters": "Chapters",
                "mejs.none": "None",
                "mejs.afrikaans": "Afrikaans",
                "mejs.albanian": "Albanian",
                "mejs.arabic": "Arabic",
                "mejs.belarusian": "Belarusian",
                "mejs.bulgarian": "Bulgarian",
                "mejs.catalan": "Catalan",
                "mejs.chinese": "Chinese",
                "mejs.chinese-simplified": "Chinese (Simplified)",
                "mejs.chinese-traditional": "Chinese (Traditional)",
                "mejs.croatian": "Croatian",
                "mejs.czech": "Czech",
                "mejs.danish": "Danish",
                "mejs.dutch": "Dutch",
                "mejs.english": "English",
                "mejs.estonian": "Estonian",
                "mejs.filipino": "Filipino",
                "mejs.finnish": "Finnish",
                "mejs.french": "French",
                "mejs.galician": "Galician",
                "mejs.german": "German",
                "mejs.greek": "Greek",
                "mejs.haitian-creole": "Haitian Creole",
                "mejs.hebrew": "Hebrew",
                "mejs.hindi": "Hindi",
                "mejs.hungarian": "Hungarian",
                "mejs.icelandic": "Icelandic",
                "mejs.indonesian": "Indonesian",
                "mejs.irish": "Irish",
                "mejs.italian": "Italian",
                "mejs.japanese": "Japanese",
                "mejs.korean": "Korean",
                "mejs.latvian": "Latvian",
                "mejs.lithuanian": "Lithuanian",
                "mejs.macedonian": "Macedonian",
                "mejs.malay": "Malay",
                "mejs.maltese": "Maltese",
                "mejs.norwegian": "Norwegian",
                "mejs.persian": "Persian",
                "mejs.polish": "Polish",
                "mejs.portuguese": "Portuguese",
                "mejs.romanian": "Romanian",
                "mejs.russian": "Russian",
                "mejs.serbian": "Serbian",
                "mejs.slovak": "Slovak",
                "mejs.slovenian": "Slovenian",
                "mejs.spanish": "Spanish",
                "mejs.swahili": "Swahili",
                "mejs.swedish": "Swedish",
                "mejs.tagalog": "Tagalog",
                "mejs.thai": "Thai",
                "mejs.turkish": "Turkish",
                "mejs.ukrainian": "Ukrainian",
                "mejs.vietnamese": "Vietnamese",
                "mejs.welsh": "Welsh",
                "mejs.yiddish": "Yiddish"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/mediaelement-and-player.min.js') }}"
        id="mediaelement-core-js"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/mediaelement-migrate.min.js') }}"
        id="mediaelement-migrate-js"></script>
    <script type="text/javascript" id="mediaelement-js-extra">
        /* <![CDATA[ */
        var _wpmejsSettings = {
            "pluginPath": "\/wp-includes\/js\/mediaelement\/",
            "classPrefix": "mejs-",
            "stretching": "responsive",
            "audioShortcodeLibrary": "mediaelement",
            "videoShortcodeLibrary": "mediaelement"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/wp-mediaelement.min.js') }}"
        id="wp-mediaelement-js"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/jquery-numerator.min.js') }}"
        id="jquery-numerator-js"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/webpack.runtime.min.js') }}"
        id="elementor-webpack-runtime-js"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/frontend-modules.min.js') }}"
        id="elementor-frontend-modules-js"></script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/waypoints.min.js') }}" id="elementor-waypoints-js">
    </script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/core.min.js') }}" id="jquery-ui-core-js"></script>
    <script type="text/javascript" id="elementor-frontend-js-before">
        /* <![CDATA[ */
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close",
                "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
                "a11yCarouselPrevSlideMessage": "Previous slide",
                "a11yCarouselNextSlideMessage": "Next slide",
                "a11yCarouselFirstSlideMessage": "This is the first slide",
                "a11yCarouselLastSlideMessage": "This is the last slide",
                "a11yCarouselPaginationBulletMessage": "Go to slide"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 480,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 660,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 840,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1020,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1200,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                }
            },
            "version": "3.19.2",
            "is_static": false,
            "experimentalFeatures": {
                "e_optimized_assets_loading": true,
                "additional_custom_breakpoints": true,
                "e_image_loading_optimization": true
            },
            "urls": {
                "assets": "https:\/\/bikinweb.mrofik.com\/wp-content\/plugins\/elementor\/assets\/"
            },
            "swiperClass": "swiper-container",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_mobile_extra", "viewport_tablet",
                    "viewport_tablet_extra", "viewport_laptop"
                ],
                "viewport_mobile": 480,
                "viewport_mobile_extra": 660,
                "viewport_tablet": 840,
                "viewport_tablet_extra": 1020,
                "viewport_laptop": 1200,
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 6027,
                "title": "Beranda%20-%20WebInstan",
                "excerpt": "",
                "featuredImage": false
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/frontend.min.js') }}" id="elementor-frontend-js">
    </script><span id="elementor-device-mode" class="elementor-screen-only"></span>
    <script type="text/javascript" src="{{ asset('landing-page/assets/underscore.min.js') }}" id="underscore-js"></script>
    <script type="text/javascript" id="wp-util-js-extra">
        /* <![CDATA[ */
        var _wpUtilSettings = {
            "ajax": {
                "url": "\/wp-admin\/admin-ajax.php"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/wp-util.min.js') }}" id="wp-util-js"></script>
    <script type="text/javascript" id="wpforms-elementor-js-extra">
        /* <![CDATA[ */
        var wpformsElementorVars = {
            "captcha_provider": "recaptcha",
            "recaptcha_type": "v2"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('landing-page/assets/frontend(1).min.js') }}" id="wpforms-elementor-js"></script>
    @stack('js')

    <p id="a11y-speak-intro-text" class="a11y-speak-intro-text"
        style="position: absolute;margin: -1px;padding: 0;height: 1px;width: 1px;overflow: hidden;clip: rect(1px, 1px, 1px, 1px);-webkit-clip-path: inset(50%);clip-path: inset(50%);border: 0;word-wrap: normal !important;"
        hidden="hidden">Notifications</p>
    <div id="a11y-speak-assertive" class="a11y-speak-region"
        style="position: absolute;margin: -1px;padding: 0;height: 1px;width: 1px;overflow: hidden;clip: rect(1px, 1px, 1px, 1px);-webkit-clip-path: inset(50%);clip-path: inset(50%);border: 0;word-wrap: normal !important;"
        aria-live="assertive" aria-relevant="additions text" aria-atomic="true"></div>
    <div id="a11y-speak-polite" class="a11y-speak-region"
        style="position: absolute;margin: -1px;padding: 0;height: 1px;width: 1px;overflow: hidden;clip: rect(1px, 1px, 1px, 1px);-webkit-clip-path: inset(50%);clip-path: inset(50%);border: 0;word-wrap: normal !important;"
        aria-live="polite" aria-relevant="additions text" aria-atomic="true"></div>
</body>

</html>
