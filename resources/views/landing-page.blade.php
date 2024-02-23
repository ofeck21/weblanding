@extends('landing-page.template')

@section('title', env('APP_NAME'))

@section('description', env('APP_DESCRIPTION'))

@section('keywords', env('APP_KEYWORDS'))

@section('content')

{{-- Top Section - Slider --}}
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

                                                @include('landing-page.content.slider.column-layout', [
                                                    'title' => 'Web <em>Instan</em>',
                                                    'sub_title' => 'Dalam Hitungan <em>Jam</em>',
                                                    'description' =>
                                                        'Wujud website impian anda. Dapat website profesional dengan desain sesuai kebutuhan anda dalam hitungan Jam.',
                                                    'is_blank' => true,
                                                    'action_url' => '#',
                                                    'action_text' => 'Dapatkan Sekarang',
                                                ])

                                                @include('landing-page.content.slider.row-layout', [
                                                    'subTitle' => 'Dalam Hitungan <em>Jam</em>',
                                                ])

                                            </div>
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
                                                                    <button role="button"
                                                                        class="owl-dot active"><span></span></button>
                                                                    <button role="button"
                                                                        class="owl-dot"><span></span></button>
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

{{-- Template Recomended Section Title --}}
<section class="elementor-section elementor-top-section elementor-element elementor-element-9c172f7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9c172f7" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b62bd70 animated agencium_clip_right" id="b62bd70" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;agencium_clip_right&quot;}">
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
                            <div class="archive-listing" data-ajax="{&quot;post_type&quot;:&quot;agencium_portfolio&quot;,&quot;post_status&quot;:&quot;publish&quot;,&quot;ignore_sticky_posts&quot;:true,&quot;suppress_filters&quot;:true,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;desc&quot;,&quot;link_base&quot;:&quot;https:\/\/bikinweb.mrofik.com&quot;,&quot;posts_per_page&quot;:-1,&quot;paged&quot;:1}" a-widget="{&quot;item_class&quot;:&quot;portfolio-item-wrapper slider-item with-title-icon&quot;,&quot;columns_number&quot;:3,&quot;listing_type&quot;:&quot;slider&quot;,&quot;show_title&quot;:&quot;yes&quot;,&quot;show_date&quot;:&quot;&quot;,&quot;show_details&quot;:&quot;&quot;,&quot;show_categories&quot;:&quot;&quot;,&quot;show_read_more&quot;:&quot;&quot;,&quot;read_more_text&quot;:&quot;Read more&quot;}">
                                <div class="custom-cursor-drag" style="display: none;"></div>
                                <div class="archive-listing-wrapper portfolio-listing-wrapper owl-carousel owl-theme custom-cursor-enable owl-loaded owl-drag" data-slider-options="{&quot;items&quot;:3,&quot;nav&quot;:true,&quot;navText&quot;:[&quot;&quot;,&quot;&quot;],&quot;dots&quot;:false,&quot;autoplayHoverPause&quot;:true,&quot;autoplay&quot;:true,&quot;autoplaySpeed&quot;:300,&quot;autoplayTimeout&quot;:5000,&quot;loop&quot;:true,&quot;dragEndSpeed&quot;:500,&quot;navSpeed&quot;:500,&quot;dotsSpeed&quot;:500,&quot;rtl&quot;:false}" style="cursor: auto;">

                                    <div class="owl-stage-outer">
                                        <div class="owl-stage" style="transform: translate3d(-9973px, 0px, 0px); transition: all 0.3s ease 0s; width: 14507px;">

                                            <div class="owl-item cloned" style="width: 453.333px;">
                                                <div
                                                    class="portfolio-item-wrapper slider-item with-title-icon post-1341 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
                                                    <div class="portfolio-item">
                                                        <div class="portfolio-item-media">
                                                            <a href="https://bikinweb.mrofik.com/portfolio/honda-website-design/"
                                                                class="portfolio-item-media-link">
                                                                <div class="post-media">
                                                                    <picture>
                                                                        <source media="(max-width: 480px)"
                                                                            sizes="(max-width: 480px) 480px"
                                                                            srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-5-480x480.jpg 480w">
                                                                        <source media="(max-width: 660px)"
                                                                            sizes="(max-width: 660px) 660px"
                                                                            srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-5-480x480.jpg 660w">
                                                                        <source media="(max-width: 840px)"
                                                                            sizes="(max-width: 840px) 840px"
                                                                            srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-5-480x480.jpg 840w">
                                                                        <source media="(max-width: 1020px)"
                                                                            sizes="(max-width: 1020px) 1020px"
                                                                            srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-5-300x300.jpg 1020w">
                                                                        <source media="(max-width: 1200px)"
                                                                            sizes="(max-width: 1200px) 1200px"
                                                                            srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-5-480x480.jpg 1200w">
                                                                        <img decoding="async" alt="product-5"
                                                                            title="product-5"
                                                                            src="{{ asset('landing-page/assets/product-5-300x300.jpg') }}"
                                                                            class="attachment-medium size-medium wp-post-image">
                                                                    </picture>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="portfolio-item-content">
                                                            <h6 class="post-title">
                                                                <a
                                                                    href="#demo-url">
                                                                    <span class="portfolio-post-name-wrapper"><span
                                                                            class="portfolio-post-name"
                                                                            data-name="Honda Website design">Honda
                                                                            Website
                                                                            design</span></span>
                                                                </a>
                                                            </h6>
                                                        </div>
                                                        <div class="portfolio-item-footer row">
                                                            <div class="col">
                                                                <a href="#link-demo" style="cursor: pointer;">Demo</a>
                                                            </div>
                                                            <div class="col text-end">
                                                                <a href="#cal-to-action" style="cursor: pointer;"><i class="fa fa-call"></i>Order</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="owl-nav"><button type="button" role="presentation"
                                            class="owl-prev"></button><button type="button" role="presentation"
                                            class="owl-next"></button>
                                    </div>
                                    <div class="owl-dots disabled"></div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-bbc8194 elementor-section-boxed elementor-section-height-default elementor-section-height-default animated agencium_clip_left"
        data-id="bbc8194" data-element_type="section"
        data-settings="{&quot;animation&quot;:&quot;agencium_clip_left&quot;}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-260e009"
                data-id="260e009" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-c070caf elementor-widget elementor-widget-agencium_heading"
                        data-id="c070caf" data-element_type="widget" data-widget_type="agencium_heading.default">
                        <div class="elementor-widget-container">
                            <div class="agencium-subtitle">
                                <div class="agencium-subtitle-text">
                                    <h5><em>/template</em></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-f8c2609 animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default animated agencium_clip_down"
        data-id="f8c2609" data-element_type="section"
        data-settings="{&quot;animation&quot;:&quot;agencium_clip_down&quot;}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a506377"
                data-id="a506377" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-6b169ca elementor-widget elementor-widget-agencium_portfolio_listing"
                        data-id="6b169ca" data-element_type="widget"
                        data-widget_type="agencium_portfolio_listing.default">
                        <div class="elementor-widget-container">

                            <div class="agencium-portfolios-listing-widget">


                                <div class="archive-listing"
                                    data-ajax="{&quot;post_type&quot;:&quot;agencium_portfolio&quot;,&quot;post_status&quot;:&quot;publish&quot;,&quot;ignore_sticky_posts&quot;:true,&quot;suppress_filters&quot;:true,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;desc&quot;,&quot;link_base&quot;:&quot;https:\/\/bikinweb.mrofik.com&quot;,&quot;posts_per_page&quot;:16,&quot;columns_number&quot;:4,&quot;paged&quot;:1}"
                                    data-widget="{&quot;item_class&quot;:&quot;portfolio-item-wrapper with-media-overlay with-title-icon&quot;,&quot;columns_number&quot;:4,&quot;listing_type&quot;:&quot;grid&quot;,&quot;show_title&quot;:&quot;yes&quot;,&quot;show_details&quot;:&quot;no&quot;,&quot;show_categories&quot;:&quot;yes&quot;,&quot;show_read_more&quot;:&quot;no&quot;,&quot;read_more_text&quot;:&quot;Read more&quot;,&quot;show_pagination&quot;:&quot;no&quot;}">
                                    <div
                                        class="archive-listing-wrapper portfolio-listing-wrapper portfolio-grid-listing columns-4">

                                        <div
                                            class="portfolio-item-wrapper with-media-overlay with-title-icon post-1361 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
                                            <div class="portfolio-item">
                                                <div class="portfolio-item-media"><a
                                                        href="https://bikinweb.mrofik.com/portfolio/coors-banquet-brand-design/"
                                                        class="portfolio-item-media-link">
                                                        <div class="post-media">
                                                            <picture>
                                                                <source media="(max-width: 480px)"
                                                                    sizes="(max-width: 480px) 480px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-12-480x480.jpg 480w">
                                                                <source media="(max-width: 660px)"
                                                                    sizes="(max-width: 660px) 660px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-12-480x480.jpg 660w">
                                                                <source media="(max-width: 840px)"
                                                                    sizes="(max-width: 840px) 840px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-12-480x480.jpg 840w">
                                                                <source media="(max-width: 1020px)"
                                                                    sizes="(max-width: 1020px) 1020px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-12-480x480.jpg 1020w">
                                                                <source media="(max-width: 1200px)"
                                                                    sizes="(max-width: 1200px) 1200px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-12-480x480.jpg 1200w">
                                                                <img decoding="async" alt="product-12"
                                                                    title="product-12"
                                                                    src="{{ asset('landing-page/assets/product-12-480x480.jpg') }}"
                                                                    class="attachment-agencium_small size-agencium_small wp-post-image">
                                                            </picture>
                                                        </div>
                                                    </a></div>
                                                <div class="portfolio-item-content">
                                                    <div class="post-categories"><a class="post-category-item"
                                                            href="https://bikinweb.mrofik.com/portfolio-categories/branding/">Branding</a>
                                                    </div>
                                                    <h6 class="post-title"><a
                                                            href="https://bikinweb.mrofik.com/portfolio/coors-banquet-brand-design/"><span
                                                                class="portfolio-post-name-wrapper"><span
                                                                    class="portfolio-post-name"
                                                                    data-name="Coors Banquet Brand design">Coors
                                                                    Banquet Brand
                                                                    design</span></span></a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="portfolio-item-wrapper with-media-overlay with-title-icon post-1358 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
                                            <div class="portfolio-item">
                                                <div class="portfolio-item-media"><a
                                                        href="https://bikinweb.mrofik.com/portfolio/hot-pizza-website-design/"
                                                        class="portfolio-item-media-link">
                                                        <div class="post-media">
                                                            <picture>
                                                                <source media="(max-width: 480px)"
                                                                    sizes="(max-width: 480px) 480px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-17-480x480.jpg 480w">
                                                                <source media="(max-width: 660px)"
                                                                    sizes="(max-width: 660px) 660px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-17-480x480.jpg 660w">
                                                                <source media="(max-width: 840px)"
                                                                    sizes="(max-width: 840px) 840px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-17-480x480.jpg 840w">
                                                                <source media="(max-width: 1020px)"
                                                                    sizes="(max-width: 1020px) 1020px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-17-480x480.jpg 1020w">
                                                                <source media="(max-width: 1200px)"
                                                                    sizes="(max-width: 1200px) 1200px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-17-480x480.jpg 1200w">
                                                                <img decoding="async" alt="product-17"
                                                                    title="product-17"
                                                                    src="{{ asset('landing-page/assets/product-17-480x480.jpg') }}"
                                                                    class="attachment-agencium_small size-agencium_small wp-post-image">
                                                            </picture>
                                                        </div>
                                                    </a></div>
                                                <div class="portfolio-item-content">
                                                    <div class="post-categories"><a class="post-category-item"
                                                            href="https://bikinweb.mrofik.com/portfolio-categories/design/">Design</a>
                                                    </div>
                                                    <h6 class="post-title"><a
                                                            href="https://bikinweb.mrofik.com/portfolio/hot-pizza-website-design/"><span
                                                                class="portfolio-post-name-wrapper"><span
                                                                    class="portfolio-post-name"
                                                                    data-name="Hot Pizza Website design">Hot
                                                                    Pizza Website
                                                                    design</span></span></a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="portfolio-item-wrapper with-media-overlay with-title-icon post-1356 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
                                            <div class="portfolio-item">
                                                <div class="portfolio-item-media"><a
                                                        href="https://bikinweb.mrofik.com/portfolio/light-inside-brand-design/"
                                                        class="portfolio-item-media-link">
                                                        <div class="post-media">
                                                            <picture>
                                                                <source media="(max-width: 480px)"
                                                                    sizes="(max-width: 480px) 480px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-11-480x480.jpg 480w">
                                                                <source media="(max-width: 660px)"
                                                                    sizes="(max-width: 660px) 660px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-11-480x480.jpg 660w">
                                                                <source media="(max-width: 840px)"
                                                                    sizes="(max-width: 840px) 840px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-11-480x480.jpg 840w">
                                                                <source media="(max-width: 1020px)"
                                                                    sizes="(max-width: 1020px) 1020px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-11-480x480.jpg 1020w">
                                                                <source media="(max-width: 1200px)"
                                                                    sizes="(max-width: 1200px) 1200px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-11-480x480.jpg 1200w">
                                                                <img decoding="async" alt="product-11"
                                                                    title="product-11"
                                                                    src="{{ asset('landing-page/assets/product-11-480x480.jpg') }}"
                                                                    class="attachment-agencium_small size-agencium_small wp-post-image">
                                                            </picture>
                                                        </div>
                                                    </a></div>
                                                <div class="portfolio-item-content">
                                                    <div class="post-categories"><a class="post-category-item"
                                                            href="https://bikinweb.mrofik.com/portfolio-categories/branding/">Branding</a>
                                                    </div>
                                                    <h6 class="post-title"><a
                                                            href="https://bikinweb.mrofik.com/portfolio/light-inside-brand-design/"><span
                                                                class="portfolio-post-name-wrapper"><span
                                                                    class="portfolio-post-name"
                                                                    data-name="Light inside Brand design">Light
                                                                    inside Brand
                                                                    design</span></span></a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="portfolio-item-wrapper with-media-overlay with-title-icon post-1354 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
                                            <div class="portfolio-item">
                                                <div class="portfolio-item-media"><a
                                                        href="https://bikinweb.mrofik.com/portfolio/vilet-range-website-design/"
                                                        class="portfolio-item-media-link">
                                                        <div class="post-media">
                                                            <picture>
                                                                <source media="(max-width: 480px)"
                                                                    sizes="(max-width: 480px) 480px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-10-480x480.jpg 480w">
                                                                <source media="(max-width: 660px)"
                                                                    sizes="(max-width: 660px) 660px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-10-480x480.jpg 660w">
                                                                <source media="(max-width: 840px)"
                                                                    sizes="(max-width: 840px) 840px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-10-480x480.jpg 840w">
                                                                <source media="(max-width: 1020px)"
                                                                    sizes="(max-width: 1020px) 1020px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-10-480x480.jpg 1020w">
                                                                <source media="(max-width: 1200px)"
                                                                    sizes="(max-width: 1200px) 1200px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-10-480x480.jpg 1200w">
                                                                <img decoding="async" alt="product-10"
                                                                    title="product-10"
                                                                    src="{{ asset('landing-page/assets/product-10-480x480.jpg') }}"
                                                                    class="attachment-agencium_small size-agencium_small wp-post-image">
                                                            </picture>
                                                        </div>
                                                    </a></div>
                                                <div class="portfolio-item-content">
                                                    <div class="post-categories"><a class="post-category-item"
                                                            href="https://bikinweb.mrofik.com/portfolio-categories/design/">Design</a>
                                                    </div>
                                                    <h6 class="post-title"><a
                                                            href="https://bikinweb.mrofik.com/portfolio/vilet-range-website-design/"><span
                                                                class="portfolio-post-name-wrapper"><span
                                                                    class="portfolio-post-name"
                                                                    data-name="Vilet Range Website design">Vilet
                                                                    Range Website
                                                                    design</span></span></a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="portfolio-item-wrapper with-media-overlay with-title-icon post-1352 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
                                            <div class="portfolio-item">
                                                <div class="portfolio-item-media"><a
                                                        href="https://bikinweb.mrofik.com/portfolio/cafe-fugas-brand-design/"
                                                        class="portfolio-item-media-link">
                                                        <div class="post-media">
                                                            <picture>
                                                                <source media="(max-width: 480px)"
                                                                    sizes="(max-width: 480px) 480px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-9-480x480.jpg 480w">
                                                                <source media="(max-width: 660px)"
                                                                    sizes="(max-width: 660px) 660px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-9-480x480.jpg 660w">
                                                                <source media="(max-width: 840px)"
                                                                    sizes="(max-width: 840px) 840px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-9-480x480.jpg 840w">
                                                                <source media="(max-width: 1020px)"
                                                                    sizes="(max-width: 1020px) 1020px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-9-480x480.jpg 1020w">
                                                                <source media="(max-width: 1200px)"
                                                                    sizes="(max-width: 1200px) 1200px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-9-480x480.jpg 1200w">
                                                                <img decoding="async" alt="product-9"
                                                                    title="product-9"
                                                                    src="{{ asset('landing-page/assets/product-9-480x480.jpg') }}"
                                                                    class="attachment-agencium_small size-agencium_small wp-post-image">
                                                            </picture>
                                                        </div>
                                                    </a></div>
                                                <div class="portfolio-item-content">
                                                    <div class="post-categories"><a class="post-category-item"
                                                            href="https://bikinweb.mrofik.com/portfolio-categories/branding/">Branding</a>
                                                    </div>
                                                    <h6 class="post-title"><a
                                                            href="https://bikinweb.mrofik.com/portfolio/cafe-fugas-brand-design/"><span
                                                                class="portfolio-post-name-wrapper"><span
                                                                    class="portfolio-post-name"
                                                                    data-name="Cafe Fugas Brand design">Cafe
                                                                    Fugas Brand
                                                                    design</span></span></a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="portfolio-item-wrapper with-media-overlay with-title-icon post-1350 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
                                            <div class="portfolio-item">
                                                <div class="portfolio-item-media"><a
                                                        href="https://bikinweb.mrofik.com/portfolio/nosotros-website-design/"
                                                        class="portfolio-item-media-link">
                                                        <div class="post-media">
                                                            <picture>
                                                                <source media="(max-width: 480px)"
                                                                    sizes="(max-width: 480px) 480px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-8-480x480.jpg 480w">
                                                                <source media="(max-width: 660px)"
                                                                    sizes="(max-width: 660px) 660px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-8-480x480.jpg 660w">
                                                                <source media="(max-width: 840px)"
                                                                    sizes="(max-width: 840px) 840px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-8-480x480.jpg 840w">
                                                                <source media="(max-width: 1020px)"
                                                                    sizes="(max-width: 1020px) 1020px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-8-480x480.jpg 1020w">
                                                                <source media="(max-width: 1200px)"
                                                                    sizes="(max-width: 1200px) 1200px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-8-480x480.jpg 1200w">
                                                                <img decoding="async" alt="product-8"
                                                                    title="product-8"
                                                                    src="{{ asset('landing-page/assets/product-8-480x480.jpg') }}"
                                                                    class="attachment-agencium_small size-agencium_small wp-post-image">
                                                            </picture>
                                                        </div>
                                                    </a></div>
                                                <div class="portfolio-item-content">
                                                    <div class="post-categories"><a class="post-category-item"
                                                            href="https://bikinweb.mrofik.com/portfolio-categories/design/">Design</a>
                                                    </div>
                                                    <h6 class="post-title"><a
                                                            href="https://bikinweb.mrofik.com/portfolio/nosotros-website-design/"><span
                                                                class="portfolio-post-name-wrapper"><span
                                                                    class="portfolio-post-name"
                                                                    data-name="Nosotros Website design">Nosotros
                                                                    Website design</span></span></a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="portfolio-item-wrapper with-media-overlay with-title-icon post-1348 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
                                            <div class="portfolio-item">
                                                <div class="portfolio-item-media"><a
                                                        href="https://bikinweb.mrofik.com/portfolio/slidecall-website-design/"
                                                        class="portfolio-item-media-link">
                                                        <div class="post-media">
                                                            <picture>
                                                                <source media="(max-width: 480px)"
                                                                    sizes="(max-width: 480px) 480px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-7-480x480.jpg 480w">
                                                                <source media="(max-width: 660px)"
                                                                    sizes="(max-width: 660px) 660px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-7-480x480.jpg 660w">
                                                                <source media="(max-width: 840px)"
                                                                    sizes="(max-width: 840px) 840px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-7-480x480.jpg 840w">
                                                                <source media="(max-width: 1020px)"
                                                                    sizes="(max-width: 1020px) 1020px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-7-480x480.jpg 1020w">
                                                                <source media="(max-width: 1200px)"
                                                                    sizes="(max-width: 1200px) 1200px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-7-480x480.jpg 1200w">
                                                                <img decoding="async" alt="product-7"
                                                                    title="product-7"
                                                                    src="{{ asset('landing-page/assets/product-7-480x480.jpg') }}"
                                                                    class="attachment-agencium_small size-agencium_small wp-post-image">
                                                            </picture>
                                                        </div>
                                                    </a></div>
                                                <div class="portfolio-item-content">
                                                    <div class="post-categories"><a class="post-category-item"
                                                            href="https://bikinweb.mrofik.com/portfolio-categories/design/">Design</a>
                                                    </div>
                                                    <h6 class="post-title"><a
                                                            href="https://bikinweb.mrofik.com/portfolio/slidecall-website-design/"><span
                                                                class="portfolio-post-name-wrapper"><span
                                                                    class="portfolio-post-name"
                                                                    data-name="SlideCall Website design">SlideCall
                                                                    Website design</span></span></a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="portfolio-item-wrapper with-media-overlay with-title-icon post-1345 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
                                            <div class="portfolio-item">
                                                <div class="portfolio-item-media"><a
                                                        href="https://bikinweb.mrofik.com/portfolio/white-cube-brand-design/"
                                                        class="portfolio-item-media-link">
                                                        <div class="post-media">
                                                            <picture>
                                                                <source media="(max-width: 480px)"
                                                                    sizes="(max-width: 480px) 480px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-16-480x480.jpg 480w">
                                                                <source media="(max-width: 660px)"
                                                                    sizes="(max-width: 660px) 660px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-16-480x480.jpg 660w">
                                                                <source media="(max-width: 840px)"
                                                                    sizes="(max-width: 840px) 840px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-16-480x480.jpg 840w">
                                                                <source media="(max-width: 1020px)"
                                                                    sizes="(max-width: 1020px) 1020px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-16-480x480.jpg 1020w">
                                                                <source media="(max-width: 1200px)"
                                                                    sizes="(max-width: 1200px) 1200px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-16-480x480.jpg 1200w">
                                                                <img decoding="async" alt="product-16"
                                                                    title="product-16"
                                                                    src="{{ asset('landing-page/assets/product-16-480x480.jpg') }}"
                                                                    class="attachment-agencium_small size-agencium_small wp-post-image">
                                                            </picture>
                                                        </div>
                                                    </a></div>
                                                <div class="portfolio-item-content">
                                                    <div class="post-categories"><a class="post-category-item"
                                                            href="https://bikinweb.mrofik.com/portfolio-categories/branding/">Branding</a>
                                                    </div>
                                                    <h6 class="post-title"><a
                                                            href="https://bikinweb.mrofik.com/portfolio/white-cube-brand-design/"><span
                                                                class="portfolio-post-name-wrapper"><span
                                                                    class="portfolio-post-name"
                                                                    data-name="White Cube Brand design">White
                                                                    Cube Brand
                                                                    design</span></span></a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="portfolio-item-wrapper with-media-overlay with-title-icon post-1343 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
                                            <div class="portfolio-item">
                                                <div class="portfolio-item-media"><a
                                                        href="https://bikinweb.mrofik.com/portfolio/marketum-website-design-3/"
                                                        class="portfolio-item-media-link">
                                                        <div class="post-media">
                                                            <picture>
                                                                <source media="(max-width: 480px)"
                                                                    sizes="(max-width: 480px) 480px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-6-480x480.jpg 480w">
                                                                <source media="(max-width: 660px)"
                                                                    sizes="(max-width: 660px) 660px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-6-480x480.jpg 660w">
                                                                <source media="(max-width: 840px)"
                                                                    sizes="(max-width: 840px) 840px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-6-480x480.jpg 840w">
                                                                <source media="(max-width: 1020px)"
                                                                    sizes="(max-width: 1020px) 1020px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-6-480x480.jpg 1020w">
                                                                <source media="(max-width: 1200px)"
                                                                    sizes="(max-width: 1200px) 1200px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-6-480x480.jpg 1200w">
                                                                <img decoding="async" alt="product-6"
                                                                    title="product-6"
                                                                    src="{{ asset('landing-page/assets/product-6-480x480.jpg') }}"
                                                                    class="attachment-agencium_small size-agencium_small wp-post-image">
                                                            </picture>
                                                        </div>
                                                    </a></div>
                                                <div class="portfolio-item-content">
                                                    <div class="post-categories"><a class="post-category-item"
                                                            href="https://bikinweb.mrofik.com/portfolio-categories/design/">Design</a>
                                                    </div>
                                                    <h6 class="post-title"><a
                                                            href="https://bikinweb.mrofik.com/portfolio/marketum-website-design-3/"><span
                                                                class="portfolio-post-name-wrapper"><span
                                                                    class="portfolio-post-name"
                                                                    data-name="Marketum Website design">Marketum
                                                                    Website design</span></span></a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="portfolio-item-wrapper with-media-overlay with-title-icon post-1341 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
                                            <div class="portfolio-item">
                                                <div class="portfolio-item-media"><a
                                                        href="https://bikinweb.mrofik.com/portfolio/honda-website-design/"
                                                        class="portfolio-item-media-link">
                                                        <div class="post-media">
                                                            <picture>
                                                                <source media="(max-width: 480px)"
                                                                    sizes="(max-width: 480px) 480px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-5-480x480.jpg 480w">
                                                                <source media="(max-width: 660px)"
                                                                    sizes="(max-width: 660px) 660px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-5-480x480.jpg 660w">
                                                                <source media="(max-width: 840px)"
                                                                    sizes="(max-width: 840px) 840px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-5-480x480.jpg 840w">
                                                                <source media="(max-width: 1020px)"
                                                                    sizes="(max-width: 1020px) 1020px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-5-480x480.jpg 1020w">
                                                                <source media="(max-width: 1200px)"
                                                                    sizes="(max-width: 1200px) 1200px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-5-480x480.jpg 1200w">
                                                                <img decoding="async" alt="product-5"
                                                                    title="product-5"
                                                                    src="{{ asset('landing-page/assets/product-5-480x480.jpg') }}"
                                                                    class="attachment-agencium_small size-agencium_small wp-post-image">
                                                            </picture>
                                                        </div>
                                                    </a></div>
                                                <div class="portfolio-item-content">
                                                    <div class="post-categories"><a class="post-category-item"
                                                            href="https://bikinweb.mrofik.com/portfolio-categories/design/">Design</a>
                                                    </div>
                                                    <h6 class="post-title"><a
                                                            href="https://bikinweb.mrofik.com/portfolio/honda-website-design/"><span
                                                                class="portfolio-post-name-wrapper"><span
                                                                    class="portfolio-post-name"
                                                                    data-name="Honda Website design">Honda
                                                                    Website design</span></span></a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="portfolio-item-wrapper with-media-overlay with-title-icon post-1339 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
                                            <div class="portfolio-item">
                                                <div class="portfolio-item-media"><a
                                                        href="https://bikinweb.mrofik.com/portfolio/sideoracle-website-design/"
                                                        class="portfolio-item-media-link">
                                                        <div class="post-media">
                                                            <picture>
                                                                <source media="(max-width: 480px)"
                                                                    sizes="(max-width: 480px) 480px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-4-480x480.jpg 480w">
                                                                <source media="(max-width: 660px)"
                                                                    sizes="(max-width: 660px) 660px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-4-480x480.jpg 660w">
                                                                <source media="(max-width: 840px)"
                                                                    sizes="(max-width: 840px) 840px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-4-480x480.jpg 840w">
                                                                <source media="(max-width: 1020px)"
                                                                    sizes="(max-width: 1020px) 1020px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-4-480x480.jpg 1020w">
                                                                <source media="(max-width: 1200px)"
                                                                    sizes="(max-width: 1200px) 1200px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-4-480x480.jpg 1200w">
                                                                <img decoding="async" alt="product-4"
                                                                    title="product-4"
                                                                    src="{{ asset('landing-page/assets/product-4-480x480.jpg') }}"
                                                                    class="attachment-agencium_small size-agencium_small wp-post-image">
                                                            </picture>
                                                        </div>
                                                    </a></div>
                                                <div class="portfolio-item-content">
                                                    <div class="post-categories"><a class="post-category-item"
                                                            href="https://bikinweb.mrofik.com/portfolio-categories/design/">Design</a>
                                                    </div>
                                                    <h6 class="post-title"><a
                                                            href="https://bikinweb.mrofik.com/portfolio/sideoracle-website-design/"><span
                                                                class="portfolio-post-name-wrapper"><span
                                                                    class="portfolio-post-name"
                                                                    data-name="Sideoracle Website design">Sideoracle
                                                                    Website design</span></span></a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="portfolio-item-wrapper with-media-overlay with-title-icon post-1336 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
                                            <div class="portfolio-item">
                                                <div class="portfolio-item-media"><a
                                                        href="https://bikinweb.mrofik.com/portfolio/light-line-brand-design/"
                                                        class="portfolio-item-media-link">
                                                        <div class="post-media">
                                                            <picture>
                                                                <source media="(max-width: 480px)"
                                                                    sizes="(max-width: 480px) 480px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-15-480x480.jpg 480w">
                                                                <source media="(max-width: 660px)"
                                                                    sizes="(max-width: 660px) 660px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-15-480x480.jpg 660w">
                                                                <source media="(max-width: 840px)"
                                                                    sizes="(max-width: 840px) 840px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-15-480x480.jpg 840w">
                                                                <source media="(max-width: 1020px)"
                                                                    sizes="(max-width: 1020px) 1020px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-15-480x480.jpg 1020w">
                                                                <source media="(max-width: 1200px)"
                                                                    sizes="(max-width: 1200px) 1200px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-15-480x480.jpg 1200w">
                                                                <img decoding="async" alt="product-15"
                                                                    title="product-15"
                                                                    src="{{ asset('landing-page/assets/product-15-480x480.jpg') }}"
                                                                    class="attachment-agencium_small size-agencium_small wp-post-image">
                                                            </picture>
                                                        </div>
                                                    </a></div>
                                                <div class="portfolio-item-content">
                                                    <div class="post-categories"><a class="post-category-item"
                                                            href="https://bikinweb.mrofik.com/portfolio-categories/branding/">Branding</a>
                                                    </div>
                                                    <h6 class="post-title"><a
                                                            href="https://bikinweb.mrofik.com/portfolio/light-line-brand-design/"><span
                                                                class="portfolio-post-name-wrapper"><span
                                                                    class="portfolio-post-name"
                                                                    data-name="Light Line Brand design">Light
                                                                    Line Brand
                                                                    design</span></span></a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="portfolio-item-wrapper with-media-overlay with-title-icon post-1332 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
                                            <div class="portfolio-item">
                                                <div class="portfolio-item-media"><a
                                                        href="https://bikinweb.mrofik.com/portfolio/foremost-brand-design/"
                                                        class="portfolio-item-media-link">
                                                        <div class="post-media">
                                                            <picture>
                                                                <source media="(max-width: 480px)"
                                                                    sizes="(max-width: 480px) 480px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-14-480x480.jpg 480w">
                                                                <source media="(max-width: 660px)"
                                                                    sizes="(max-width: 660px) 660px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-14-480x480.jpg 660w">
                                                                <source media="(max-width: 840px)"
                                                                    sizes="(max-width: 840px) 840px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-14-480x480.jpg 840w">
                                                                <source media="(max-width: 1020px)"
                                                                    sizes="(max-width: 1020px) 1020px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-14-480x480.jpg 1020w">
                                                                <source media="(max-width: 1200px)"
                                                                    sizes="(max-width: 1200px) 1200px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-14-480x480.jpg 1200w">
                                                                <img decoding="async" alt="product-14"
                                                                    title="product-14"
                                                                    src="{{ asset('landing-page/assets/product-14-480x480.jpg') }}"
                                                                    class="attachment-agencium_small size-agencium_small wp-post-image">
                                                            </picture>
                                                        </div>
                                                    </a></div>
                                                <div class="portfolio-item-content">
                                                    <div class="post-categories"><a class="post-category-item"
                                                            href="https://bikinweb.mrofik.com/portfolio-categories/branding/">Branding</a>
                                                    </div>
                                                    <h6 class="post-title"><a
                                                            href="https://bikinweb.mrofik.com/portfolio/foremost-brand-design/"><span
                                                                class="portfolio-post-name-wrapper"><span
                                                                    class="portfolio-post-name"
                                                                    data-name="Foremost Brand design">Foremost
                                                                    Brand design</span></span></a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="portfolio-item-wrapper with-media-overlay with-title-icon post-1330 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
                                            <div class="portfolio-item">
                                                <div class="portfolio-item-media"><a
                                                        href="https://bikinweb.mrofik.com/portfolio/marketum-website-design-2/"
                                                        class="portfolio-item-media-link">
                                                        <div class="post-media">
                                                            <picture>
                                                                <source media="(max-width: 480px)"
                                                                    sizes="(max-width: 480px) 480px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-13-480x480.jpg 480w">
                                                                <source media="(max-width: 660px)"
                                                                    sizes="(max-width: 660px) 660px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-13-480x480.jpg 660w">
                                                                <source media="(max-width: 840px)"
                                                                    sizes="(max-width: 840px) 840px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-13-480x480.jpg 840w">
                                                                <source media="(max-width: 1020px)"
                                                                    sizes="(max-width: 1020px) 1020px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-13-480x480.jpg 1020w">
                                                                <source media="(max-width: 1200px)"
                                                                    sizes="(max-width: 1200px) 1200px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-13-480x480.jpg 1200w">
                                                                <img decoding="async" alt="product-13"
                                                                    title="product-13"
                                                                    src="{{ asset('landing-page/assets/product-13-480x480.jpg') }}"
                                                                    class="attachment-agencium_small size-agencium_small wp-post-image">
                                                            </picture>
                                                        </div>
                                                    </a></div>
                                                <div class="portfolio-item-content">
                                                    <div class="post-categories"><a class="post-category-item"
                                                            href="https://bikinweb.mrofik.com/portfolio-categories/design/">Design</a>
                                                    </div>
                                                    <h6 class="post-title"><a
                                                            href="https://bikinweb.mrofik.com/portfolio/marketum-website-design-2/"><span
                                                                class="portfolio-post-name-wrapper"><span
                                                                    class="portfolio-post-name"
                                                                    data-name="Marketum Website design">Marketum
                                                                    Website design</span></span></a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="portfolio-item-wrapper with-media-overlay with-title-icon post-1327 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
                                            <div class="portfolio-item">
                                                <div class="portfolio-item-media"><a
                                                        href="https://bikinweb.mrofik.com/portfolio/organic-juice-packaging/"
                                                        class="portfolio-item-media-link">
                                                        <div class="post-media">
                                                            <picture>
                                                                <source media="(max-width: 480px)"
                                                                    sizes="(max-width: 480px) 480px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-2-480x480.jpg 480w">
                                                                <source media="(max-width: 660px)"
                                                                    sizes="(max-width: 660px) 660px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-2-480x480.jpg 660w">
                                                                <source media="(max-width: 840px)"
                                                                    sizes="(max-width: 840px) 840px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-2-480x480.jpg 840w">
                                                                <source media="(max-width: 1020px)"
                                                                    sizes="(max-width: 1020px) 1020px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-2-480x480.jpg 1020w">
                                                                <source media="(max-width: 1200px)"
                                                                    sizes="(max-width: 1200px) 1200px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-2-480x480.jpg 1200w">
                                                                <img decoding="async" alt="product-2"
                                                                    title="product-2"
                                                                    src="{{ asset('landing-page/assets/product-2-480x480.jpg') }}"
                                                                    class="attachment-agencium_small size-agencium_small wp-post-image">
                                                            </picture>
                                                        </div>
                                                    </a></div>
                                                <div class="portfolio-item-content">
                                                    <div class="post-categories"><a class="post-category-item"
                                                            href="https://bikinweb.mrofik.com/portfolio-categories/branding/">Branding</a>
                                                    </div>
                                                    <h6 class="post-title"><a
                                                            href="https://bikinweb.mrofik.com/portfolio/organic-juice-packaging/"><span
                                                                class="portfolio-post-name-wrapper"><span
                                                                    class="portfolio-post-name"
                                                                    data-name="Orange Juice Packaging">Orange
                                                                    Juice
                                                                    Packaging</span></span></a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="portfolio-item-wrapper with-media-overlay with-title-icon post-1104 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
                                            <div class="portfolio-item">
                                                <div class="portfolio-item-media"><a
                                                        href="https://bikinweb.mrofik.com/portfolio/marketum-website-design/"
                                                        class="portfolio-item-media-link">
                                                        <div class="post-media">
                                                            <picture>
                                                                <source media="(max-width: 480px)"
                                                                    sizes="(max-width: 480px) 480px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-1-480x480.jpg 480w">
                                                                <source media="(max-width: 660px)"
                                                                    sizes="(max-width: 660px) 660px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-1-480x480.jpg 660w">
                                                                <source media="(max-width: 840px)"
                                                                    sizes="(max-width: 840px) 840px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-1-480x480.jpg 840w">
                                                                <source media="(max-width: 1020px)"
                                                                    sizes="(max-width: 1020px) 1020px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-1-480x480.jpg 1020w">
                                                                <source media="(max-width: 1200px)"
                                                                    sizes="(max-width: 1200px) 1200px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-1-480x480.jpg 1200w">
                                                                <img decoding="async" alt="product-1"
                                                                    title="product-1"
                                                                    src="{{ asset('landing-page/assets/product-1-480x480.jpg') }}"
                                                                    class="attachment-agencium_small size-agencium_small wp-post-image">
                                                            </picture>
                                                        </div>
                                                    </a></div>
                                                <div class="portfolio-item-content">
                                                    <div class="post-categories"><a class="post-category-item"
                                                            href="https://bikinweb.mrofik.com/portfolio-categories/branding/">Branding</a>
                                                    </div>
                                                    <h6 class="post-title"><a
                                                            href="https://bikinweb.mrofik.com/portfolio/marketum-website-design/"><span
                                                                class="portfolio-post-name-wrapper"><span
                                                                    class="portfolio-post-name"
                                                                    data-name="Foremost Brand design">Foremost
                                                                    Brand design</span></span></a>
                                                    </h6>
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
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-88044b5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="88044b5" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-de546a5 animated agencium_clip_left"
                data-id="de546a5" data-element_type="column"
                data-settings="{&quot;animation&quot;:&quot;agencium_clip_left&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-86cca1a elementor-widget elementor-widget-agencium_heading animated agenciumHeadingBorder"
                        data-id="86cca1a" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;agenciumHeadingBorder&quot;}"
                        data-widget_type="agencium_heading.default">
                        <div class="elementor-widget-container">
                            <div class="agencium-subtitle">
                                <div class="agencium-subtitle-text">
                                    <h5>/layanan</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-af35fa1 elementor-section-content-bottom elementor-section-boxed elementor-section-height-default elementor-section-height-default animated fadeIn"
        data-id="af35fa1" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;}">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-759a47f animated fadeIn"
                data-id="759a47f" data-element_type="column"
                data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-30bb01d elementor-widget elementor-widget-heading"
                        data-id="30bb01d" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">Most
                                <em>exprerienced</em> services
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-548d682 elementor-hidden-mobile_extra elementor-hidden-mobile animated fadeIn"
                data-id="548d682" data-element_type="column"
                data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-c4b1154 elementor-widget elementor-widget-agencium_button"
                        data-id="c4b1154" data-element_type="widget" data-widget_type="agencium_button.default">
                        <div class="elementor-widget-container">

                            <div class="button-widget">
                                <div class="button-container">
                                    <a class="agencium-alter-button"
                                        href="https://demo.artureanec.com/themes/agencium/services-from-experienced-agency/"
                                        target="_blank">
                                        See all services<svg viewBox="0 0 13 20">
                                            <polyline points="0.5 19.5 3 19.5 12.5 10 3 0.5">
                                            </polyline>
                                        </svg> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-df43469 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="df43469" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ee998fe animated fadeIn"
                data-id="ee998fe" data-element_type="column"
                data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-a7b315f elementor-widget elementor-widget-agencium_services_listing"
                        data-id="a7b315f" data-element_type="widget"
                        data-widget_type="agencium_services_listing.default">
                        <div class="elementor-widget-container">

                            <div class="agencium-service-listing-widget">

                                <div class="archive-listing"
                                    data-ajax="{&quot;post_type&quot;:&quot;agencium_service&quot;,&quot;post_status&quot;:&quot;publish&quot;,&quot;ignore_sticky_posts&quot;:true,&quot;suppress_filters&quot;:true,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;asc&quot;,&quot;link_base&quot;:&quot;https:\/\/bikinweb.mrofik.com&quot;,&quot;posts_per_page&quot;:4,&quot;columns_number&quot;:1,&quot;paged&quot;:1}"
                                    data-widget="{&quot;excerpt_length&quot;:104,&quot;show_media&quot;:false,&quot;show_icon&quot;:false,&quot;show_index&quot;:true,&quot;show_name&quot;:true,&quot;show_excerpt&quot;:false,&quot;show_pagination&quot;:&quot;&quot;,&quot;show_read_more&quot;:false,&quot;read_more_text&quot;:&quot;Read more&quot;,&quot;item_class&quot;:&quot;service-item-wrapper&quot;,&quot;columns_number&quot;:1,&quot;listing_type&quot;:&quot;list&quot;}">
                                    <div class="archive-listing-wrapper service-listing-wrapper service-list-listing">

                                        <div
                                            class="service-item-wrapper post-2059 agencium_service type-agencium_service status-publish has-post-thumbnail hentry agencium_services_category-development">
                                            <div class="service-item">

                                                <div class="service-item-content">
                                                    <div class="service-post-title"><a
                                                            href="https://bikinweb.mrofik.com/services/development/"><span
                                                                class="service-post-index">.01
                                                                /</span><span class="service-post-name-wrapper"><span
                                                                    class="service-post-name"
                                                                    data-name="Development">Development</span></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="service-item-wrapper post-2280 agencium_service type-agencium_service status-publish has-post-thumbnail hentry agencium_services_category-marketing">
                                            <div class="service-item">

                                                <div class="service-item-content">
                                                    <div class="service-post-title"><a
                                                            href="https://bikinweb.mrofik.com/services/marketing-strategy/"><span
                                                                class="service-post-index">.02
                                                                /</span><span class="service-post-name-wrapper"><span
                                                                    class="service-post-name"
                                                                    data-name="Marketing strategy">Marketing
                                                                    strategy</span></span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="service-item-wrapper post-2282 agencium_service type-agencium_service status-publish has-post-thumbnail hentry agencium_services_category-design">
                                            <div class="service-item">

                                                <div class="service-item-content">
                                                    <div class="service-post-title"><a
                                                            href="https://bikinweb.mrofik.com/services/ui-design/"><span
                                                                class="service-post-index">.03
                                                                /</span><span class="service-post-name-wrapper"><span
                                                                    class="service-post-name" data-name="UI Design">UI
                                                                    Design</span></span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="service-item-wrapper post-2720 agencium_service type-agencium_service status-publish has-post-thumbnail hentry agencium_services_category-development">
                                            <div class="service-item">

                                                <div class="service-item-content">
                                                    <div class="service-post-title"><a
                                                            href="https://bikinweb.mrofik.com/services/data-analitics/"><span
                                                                class="service-post-index">.04
                                                                /</span><span class="service-post-name-wrapper"><span
                                                                    class="service-post-name"
                                                                    data-name="Data &amp; Analitics">Data
                                                                    &amp;
                                                                    Analitics</span></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-da165f4 elementor-hidden-desktop elementor-hidden-laptop elementor-hidden-tablet_extra elementor-hidden-tablet elementor-widget elementor-widget-agencium_button"
                        data-id="da165f4" data-element_type="widget" data-widget_type="agencium_button.default">
                        <div class="elementor-widget-container">

                            <div class="button-widget">
                                <div class="button-container">
                                    <a class="agencium-alter-button" href="https://bikinweb.mrofik.com/#"
                                        target="_blank">
                                        Lihat semua layanan<svg viewBox="0 0 13 20">
                                            <polyline points="0.5 19.5 3 19.5 12.5 10 3 0.5">
                                            </polyline>
                                        </svg> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-b631e05 elementor-section-boxed elementor-section-height-default elementor-section-height-default animated bounceIn"
        data-id="b631e05" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;bounceIn&quot;}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-4dfde81"
                data-id="4dfde81" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-1b0181c elementor-widget elementor-widget-counter"
                        data-id="1b0181c" data-element_type="widget" data-widget_type="counter.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-counter">
                                <div class="elementor-counter-number-wrapper">
                                    <span class="elementor-counter-number-prefix"></span>
                                    <span class="elementor-counter-number" data-duration="2000" data-to-value="5"
                                        data-from-value="0" data-delimiter=",">5</span>
                                    <span class="elementor-counter-number-suffix">k+</span>
                                </div>
                                <div class="elementor-counter-title">Awesome clients</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-80c079a"
                data-id="80c079a" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-ce7adea elementor-widget elementor-widget-counter"
                        data-id="ce7adea" data-element_type="widget" data-widget_type="counter.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-counter">
                                <div class="elementor-counter-number-wrapper">
                                    <span class="elementor-counter-number-prefix"></span>
                                    <span class="elementor-counter-number" data-duration="2000" data-to-value="2"
                                        data-from-value="0" data-delimiter=",">2</span>
                                    <span class="elementor-counter-number-suffix">b+</span>
                                </div>
                                <div class="elementor-counter-title">Earings a year</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-ae2511c"
                data-id="ae2511c" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-5bfb3c7 elementor-widget elementor-widget-counter"
                        data-id="5bfb3c7" data-element_type="widget" data-widget_type="counter.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-counter">
                                <div class="elementor-counter-number-wrapper">
                                    <span class="elementor-counter-number-prefix"></span>
                                    <span class="elementor-counter-number" data-duration="2000" data-to-value="500"
                                        data-from-value="100" data-delimiter=",">500</span>
                                    <span class="elementor-counter-number-suffix">+</span>
                                </div>
                                <div class="elementor-counter-title">Created projects</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-959aa9e elementor-hidden-tablet_extra elementor-hidden-tablet elementor-hidden-mobile_extra elementor-hidden-mobile"
                data-id="959aa9e" data-element_type="column">
                <div class="elementor-widget-wrap">
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-65a1c1a elementor-section-boxed elementor-section-height-default elementor-section-height-default animated agencium_clip_right"
        data-id="65a1c1a" data-element_type="section"
        data-settings="{&quot;animation&quot;:&quot;agencium_clip_right&quot;}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cab4bea"
                data-id="cab4bea" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-9531e87 elementor-widget elementor-widget-agencium_heading animated agenciumHeadingBorder"
                        data-id="9531e87" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;agenciumHeadingBorder&quot;}"
                        data-widget_type="agencium_heading.default">
                        <div class="elementor-widget-container">
                            <div class="agencium-subtitle">
                                <div class="agencium-subtitle-text">
                                    <h5>/portfolio</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-9d376c5 elementor-widget elementor-widget-heading"
                        data-id="9d376c5" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">Projects
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-db9bc7c elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
        data-id="db9bc7c" data-element_type="section"
        data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;}"
        style="width: 1440px; left: -50px;">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d934078"
                data-id="d934078" data-element_type="column"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-7437140 elementor-widget elementor-widget-agencium_portfolio_listing"
                        data-id="7437140" data-element_type="widget"
                        data-widget_type="agencium_portfolio_listing.default">
                        <div class="elementor-widget-container">

                            <div class="agencium-portfolios-listing-widget">


                                <div class="archive-listing"
                                    data-ajax="{&quot;post_type&quot;:&quot;agencium_portfolio&quot;,&quot;post_status&quot;:&quot;publish&quot;,&quot;ignore_sticky_posts&quot;:true,&quot;suppress_filters&quot;:true,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;desc&quot;,&quot;link_base&quot;:&quot;https:\/\/bikinweb.mrofik.com&quot;,&quot;posts_per_page&quot;:4,&quot;columns_number&quot;:2,&quot;paged&quot;:1}"
                                    data-widget="{&quot;item_class&quot;:&quot;portfolio-item-wrapper with-media-overlay with-title-icon with-media-icon&quot;,&quot;columns_number&quot;:2,&quot;listing_type&quot;:&quot;metro&quot;,&quot;show_title&quot;:&quot;yes&quot;,&quot;show_details&quot;:&quot;no&quot;,&quot;show_categories&quot;:&quot;yes&quot;,&quot;show_read_more&quot;:&quot;no&quot;,&quot;read_more_text&quot;:&quot;Read more&quot;,&quot;show_pagination&quot;:&quot;no&quot;}">
                                    <div
                                        class="archive-listing-wrapper portfolio-listing-wrapper portfolio-metro-listing columns-2">

                                        <div
                                            class="portfolio-item-wrapper with-media-overlay with-title-icon with-media-icon post-1361 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
                                            <div class="portfolio-item">
                                                <div class="portfolio-item-media"><a
                                                        href="https://bikinweb.mrofik.com/portfolio/coors-banquet-brand-design/"
                                                        class="portfolio-item-media-link">
                                                        <div class="post-media">
                                                            <picture>
                                                                <source media="(max-width: 480px)"
                                                                    sizes="(max-width: 480px) 480px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-12-480x480.jpg 480w">
                                                                <source media="(max-width: 660px)"
                                                                    sizes="(max-width: 660px) 660px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-12-480x480.jpg 660w">
                                                                <source media="(max-width: 840px)"
                                                                    sizes="(max-width: 840px) 840px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-12-480x480.jpg 840w">
                                                                <source media="(max-width: 1020px)"
                                                                    sizes="(max-width: 1020px) 1020px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-12-300x300.jpg 1020w">
                                                                <source media="(max-width: 1200px)"
                                                                    sizes="(max-width: 1200px) 1200px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-12-300x300.jpg 1200w">
                                                                <img decoding="async" alt="product-12"
                                                                    title="product-12"
                                                                    src="{{ asset('landing-page/assets/product-12.jpg') }}"
                                                                    class="attachment-large size-large wp-post-image">
                                                            </picture>
                                                        </div>
                                                    </a></div>
                                                <div class="portfolio-item-content">
                                                    <div class="post-categories"><a class="post-category-item"
                                                            href="https://bikinweb.mrofik.com/portfolio-categories/branding/">Branding</a>
                                                    </div>
                                                    <h5 class="post-title"><a
                                                            href="https://bikinweb.mrofik.com/portfolio/coors-banquet-brand-design/"><span
                                                                class="portfolio-post-name-wrapper"><span
                                                                    class="portfolio-post-name"
                                                                    data-name="Coors Banquet Brand design">Coors
                                                                    Banquet Brand
                                                                    design</span></span></a></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="portfolio-item-wrapper with-media-overlay with-title-icon with-media-icon post-1358 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
                                            <div class="portfolio-item">
                                                <div class="portfolio-item-media"><a
                                                        href="https://bikinweb.mrofik.com/portfolio/hot-pizza-website-design/"
                                                        class="portfolio-item-media-link">
                                                        <div class="post-media">
                                                            <picture>
                                                                <source media="(max-width: 480px)"
                                                                    sizes="(max-width: 480px) 480px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-17-480x480.jpg 480w">
                                                                <source media="(max-width: 660px)"
                                                                    sizes="(max-width: 660px) 660px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-17-480x480.jpg 660w">
                                                                <source media="(max-width: 840px)"
                                                                    sizes="(max-width: 840px) 840px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-17-480x480.jpg 840w">
                                                                <source media="(max-width: 1020px)"
                                                                    sizes="(max-width: 1020px) 1020px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-17-300x300.jpg 1020w">
                                                                <source media="(max-width: 1200px)"
                                                                    sizes="(max-width: 1200px) 1200px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/07/product-17-300x300.jpg 1200w">
                                                                <img decoding="async" alt="product-17"
                                                                    title="product-17"
                                                                    src="{{ asset('landing-page/assets/product-17.jpg') }}"
                                                                    class="attachment-large size-large wp-post-image">
                                                            </picture>
                                                        </div>
                                                    </a></div>
                                                <div class="portfolio-item-content">
                                                    <div class="post-categories"><a class="post-category-item"
                                                            href="https://bikinweb.mrofik.com/portfolio-categories/design/">Design</a>
                                                    </div>
                                                    <h5 class="post-title"><a
                                                            href="https://bikinweb.mrofik.com/portfolio/hot-pizza-website-design/"><span
                                                                class="portfolio-post-name-wrapper"><span
                                                                    class="portfolio-post-name"
                                                                    data-name="Hot Pizza Website design">Hot
                                                                    Pizza Website
                                                                    design</span></span></a></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="portfolio-item-wrapper with-media-overlay with-title-icon with-media-icon post-1356 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
                                            <div class="portfolio-item">
                                                <div class="portfolio-item-media"><a
                                                        href="https://bikinweb.mrofik.com/portfolio/light-inside-brand-design/"
                                                        class="portfolio-item-media-link">
                                                        <div class="post-media">
                                                            <picture>
                                                                <source media="(max-width: 480px)"
                                                                    sizes="(max-width: 480px) 480px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-11-480x480.jpg 480w">
                                                                <source media="(max-width: 660px)"
                                                                    sizes="(max-width: 660px) 660px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-11-480x480.jpg 660w">
                                                                <source media="(max-width: 840px)"
                                                                    sizes="(max-width: 840px) 840px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-11-480x480.jpg 840w">
                                                                <source media="(max-width: 1020px)"
                                                                    sizes="(max-width: 1020px) 1020px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-11-300x300.jpg 1020w">
                                                                <source media="(max-width: 1200px)"
                                                                    sizes="(max-width: 1200px) 1200px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-11-300x300.jpg 1200w">
                                                                <img decoding="async" alt="product-11"
                                                                    title="product-11"
                                                                    src="{{ asset('landing-page/assets/product-11.jpg') }}"
                                                                    class="attachment-large size-large wp-post-image">
                                                            </picture>
                                                        </div>
                                                    </a></div>
                                                <div class="portfolio-item-content">
                                                    <div class="post-categories"><a class="post-category-item"
                                                            href="https://bikinweb.mrofik.com/portfolio-categories/branding/">Branding</a>
                                                    </div>
                                                    <h5 class="post-title"><a
                                                            href="https://bikinweb.mrofik.com/portfolio/light-inside-brand-design/"><span
                                                                class="portfolio-post-name-wrapper"><span
                                                                    class="portfolio-post-name"
                                                                    data-name="Light inside Brand design">Light
                                                                    inside Brand
                                                                    design</span></span></a></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="portfolio-item-wrapper with-media-overlay with-title-icon with-media-icon post-1354 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
                                            <div class="portfolio-item">
                                                <div class="portfolio-item-media"><a
                                                        href="https://bikinweb.mrofik.com/portfolio/vilet-range-website-design/"
                                                        class="portfolio-item-media-link">
                                                        <div class="post-media">
                                                            <picture>
                                                                <source media="(max-width: 480px)"
                                                                    sizes="(max-width: 480px) 480px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-10-480x480.jpg 480w">
                                                                <source media="(max-width: 660px)"
                                                                    sizes="(max-width: 660px) 660px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-10-480x480.jpg 660w">
                                                                <source media="(max-width: 840px)"
                                                                    sizes="(max-width: 840px) 840px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-10-480x480.jpg 840w">
                                                                <source media="(max-width: 1020px)"
                                                                    sizes="(max-width: 1020px) 1020px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-10-300x300.jpg 1020w">
                                                                <source media="(max-width: 1200px)"
                                                                    sizes="(max-width: 1200px) 1200px"
                                                                    srcset="https://bikinweb.mrofik.com/wp-content/uploads/2023/06/product-10-300x300.jpg 1200w">
                                                                <img decoding="async" alt="product-10"
                                                                    title="product-10"
                                                                    src="{{ asset('landing-page/assets/product-10.jpg') }}"
                                                                    class="attachment-large size-large wp-post-image">
                                                            </picture>
                                                        </div>
                                                    </a></div>
                                                <div class="portfolio-item-content">
                                                    <div class="post-categories"><a class="post-category-item"
                                                            href="https://bikinweb.mrofik.com/portfolio-categories/design/">Design</a>
                                                    </div>
                                                    <h5 class="post-title"><a
                                                            href="https://bikinweb.mrofik.com/portfolio/vilet-range-website-design/"><span
                                                                class="portfolio-post-name-wrapper"><span
                                                                    class="portfolio-post-name"
                                                                    data-name="Vilet Range Website design">Vilet
                                                                    Range Website
                                                                    design</span></span></a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-d6071d2 elementor-widget elementor-widget-agencium_button"
                        data-id="d6071d2" data-element_type="widget" data-widget_type="agencium_button.default">
                        <div class="elementor-widget-container">

                            <div class="button-widget">
                                <div class="button-container">
                                    <a class="agencium-alter-button" href="https://bikinweb.mrofik.com/#"
                                        target="_blank">
                                        Lihat semua projects<svg viewBox="0 0 13 20">
                                            <polyline points="0.5 19.5 3 19.5 12.5 10 3 0.5">
                                            </polyline>
                                        </svg> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-c29ceb5 animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
        data-id="c29ceb5" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-88fffd8"
                data-id="88fffd8" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-c59cf91 elementor-invisible elementor-widget elementor-widget-agencium_heading"
                        data-id="c59cf91" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;agenciumHeadingBorder&quot;}"
                        data-widget_type="agencium_heading.default">
                        <div class="elementor-widget-container">
                            <div class="agencium-subtitle">
                                <div class="agencium-subtitle-text">
                                    <h5>/tim kami</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-e90b714 elementor-section-content-bottom elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="e90b714" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3dd9202"
                                data-id="3dd9202" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-7e10715 elementor-widget elementor-widget-heading"
                                        data-id="7e10715" data-element_type="widget"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">
                                                Meet our <em>creative staff</em></h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-bafb29f elementor-widget elementor-widget-agencium_button"
                                        data-id="bafb29f" data-element_type="widget"
                                        data-widget_type="agencium_button.default">
                                        <div class="elementor-widget-container">

                                            <div class="button-widget">
                                                <div class="button-container">
                                                    <a class="agencium-alter-button"
                                                        href="https://demo.artureanec.com/themes/agencium/were-a-result-driven-team/"
                                                        target="_blank">
                                                        Lihat semua tim<svg viewBox="0 0 13 20">
                                                            <polyline points="0.5 19.5 3 19.5 12.5 10 3 0.5">
                                                            </polyline>
                                                        </svg> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2e2f33d"
                                data-id="2e2f33d" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-68c7f7f elementor-widget elementor-widget-counter"
                                        data-id="68c7f7f" data-element_type="widget"
                                        data-widget_type="counter.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-counter">
                                                <div class="elementor-counter-number-wrapper">
                                                    <span class="elementor-counter-number-prefix"></span>
                                                    <span class="elementor-counter-number" data-duration="2000"
                                                        data-to-value="100" data-from-value="10">10</span>
                                                    <span class="elementor-counter-number-suffix">+</span>
                                                </div>
                                                <div class="elementor-counter-title">Team
                                                    profesional</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-aeade7d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="aeade7d" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-wide">
                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-710f256"
                                data-id="710f256" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-3f9643c elementor-widget elementor-widget-agencium_person"
                                        data-id="3f9643c" data-element_type="widget"
                                        data-widget_type="agencium_person.default">
                                        <div class="elementor-widget-container">

                                            <div class="agencium-person-widget with-media-overlay">
                                                <div class="person-wrapper">

                                                    <div class="person-image-container">
                                                        <div class="person-image-wrapper">
                                                            <img loading="lazy" decoding="async" width="456"
                                                                height="600"
                                                                src="{{ asset('landing-page/assets/team-1.jpg') }}"
                                                                class="attachment-full size-full wp-image-1943"
                                                                alt="">
                                                            <div class="person-socials">
                                                                <div class="person-socials-item">
                                                                    <a href="https://www.facebook.com/" target="_blank"
                                                                        class="fab fa-facebook-f"></a>
                                                                </div>
                                                                <div class="person-socials-item">
                                                                    <a href="https://twitter.com/" target="_blank"
                                                                        class="fab fa-twitter"></a>
                                                                </div>
                                                                <div class="person-socials-item">
                                                                    <a href="https://linkedin.com/" target="_blank"
                                                                        class="fab fa-linkedin-in"></a>
                                                                </div>
                                                                <div class="person-socials-item">
                                                                    <a href="https://www.youtube.com/" target="_blank"
                                                                        class="fab fa-youtube"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="person-description-container">
                                                        <div class="person-position">CEO</div>
                                                        <div class="person-name">Adam Miller</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4d4a8a0"
                                data-id="4d4a8a0" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-7ffcaa1 elementor-widget elementor-widget-agencium_person"
                                        data-id="7ffcaa1" data-element_type="widget"
                                        data-widget_type="agencium_person.default">
                                        <div class="elementor-widget-container">

                                            <div class="agencium-person-widget with-media-overlay">
                                                <div class="person-wrapper">

                                                    <div class="person-image-container">
                                                        <div class="person-image-wrapper">
                                                            <img loading="lazy" decoding="async" width="456"
                                                                height="600"
                                                                src="{{ asset('landing-page/assets/team-2.jpg') }}"
                                                                class="attachment-full size-full wp-image-1982"
                                                                alt="">
                                                            <div class="person-socials">
                                                                <div class="person-socials-item">
                                                                    <a href="https://www.facebook.com/" target="_blank"
                                                                        class="fab fa-facebook-f"></a>
                                                                </div>
                                                                <div class="person-socials-item">
                                                                    <a href="https://twitter.com/" target="_blank"
                                                                        class="fab fa-twitter"></a>
                                                                </div>
                                                                <div class="person-socials-item">
                                                                    <a href="https://linkedin.com/" target="_blank"
                                                                        class="fab fa-linkedin-in"></a>
                                                                </div>
                                                                <div class="person-socials-item">
                                                                    <a href="https://www.youtube.com/" target="_blank"
                                                                        class="fab fa-youtube"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="person-description-container">
                                                        <div class="person-position">Programmer
                                                        </div>
                                                        <div class="person-name">Dan Washington
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-ba762b1"
                                data-id="ba762b1" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-f509966 elementor-widget elementor-widget-agencium_person"
                                        data-id="f509966" data-element_type="widget"
                                        data-widget_type="agencium_person.default">
                                        <div class="elementor-widget-container">

                                            <div class="agencium-person-widget with-media-overlay">
                                                <div class="person-wrapper">

                                                    <div class="person-image-container">
                                                        <div class="person-image-wrapper">
                                                            <img loading="lazy" decoding="async" width="457"
                                                                height="600"
                                                                src="{{ asset('landing-page/assets/team-3.jpg') }}"
                                                                class="attachment-full size-full wp-image-1983"
                                                                alt="">
                                                            <div class="person-socials">
                                                                <div class="person-socials-item">
                                                                    <a href="https://www.facebook.com/" target="_blank"
                                                                        class="fab fa-facebook-f"></a>
                                                                </div>
                                                                <div class="person-socials-item">
                                                                    <a href="https://twitter.com/" target="_blank"
                                                                        class="fab fa-twitter"></a>
                                                                </div>
                                                                <div class="person-socials-item">
                                                                    <a href="https://linkedin.com/" target="_blank"
                                                                        class="fab fa-linkedin-in"></a>
                                                                </div>
                                                                <div class="person-socials-item">
                                                                    <a href="https://www.youtube.com/" target="_blank"
                                                                        class="fab fa-youtube"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="person-description-container">
                                                        <div class="person-position">UI/UX desiger
                                                        </div>
                                                        <div class="person-name">Sam Peterson
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-f586337"
                                data-id="f586337" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-066bb99 elementor-widget elementor-widget-agencium_person"
                                        data-id="066bb99" data-element_type="widget"
                                        data-widget_type="agencium_person.default">
                                        <div class="elementor-widget-container">

                                            <div class="agencium-person-widget with-media-overlay">
                                                <div class="person-wrapper">

                                                    <div class="person-image-container">
                                                        <div class="person-image-wrapper">
                                                            <img loading="lazy" decoding="async" width="456"
                                                                height="600"
                                                                src="{{ asset('landing-page/assets/team-4.jpg') }}"
                                                                class="attachment-full size-full wp-image-1984"
                                                                alt="">
                                                            <div class="person-socials">
                                                                <div class="person-socials-item">
                                                                    <a href="https://www.facebook.com/" target="_blank"
                                                                        class="fab fa-facebook-f"></a>
                                                                </div>
                                                                <div class="person-socials-item">
                                                                    <a href="https://twitter.com/" target="_blank"
                                                                        class="fab fa-twitter"></a>
                                                                </div>
                                                                <div class="person-socials-item">
                                                                    <a href="https://linkedin.com/" target="_blank"
                                                                        class="fab fa-linkedin-in"></a>
                                                                </div>
                                                                <div class="person-socials-item">
                                                                    <a href="https://www.youtube.com/" target="_blank"
                                                                        class="fab fa-youtube"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="person-description-container">
                                                        <div class="person-position">HR specialist
                                                        </div>
                                                        <div class="person-name">Andrew Dowson
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
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-bcff130 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
        data-id="bcff130" data-element_type="section"
        data-settings="{&quot;animation&quot;:&quot;agencium_clip_left&quot;}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1b39ae8"
                data-id="1b39ae8" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-06c0394 elementor-invisible elementor-widget elementor-widget-agencium_heading"
                        data-id="06c0394" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;agenciumHeadingBorder&quot;}"
                        data-widget_type="agencium_heading.default">
                        <div class="elementor-widget-container">
                            <div class="agencium-subtitle">
                                <div class="agencium-subtitle-text">
                                    <h5>/testimoni</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-a6b14d6 elementor-section-content-middle elementor-section-stretched elementor-reverse-laptop elementor-reverse-tablet_extra elementor-reverse-tablet elementor-reverse-mobile_extra elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
        data-id="a6b14d6" data-element_type="section"
        data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;animation&quot;:&quot;fadeIn&quot;}"
        style="width: 1440px; left: -50px;">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-757a0aa"
                data-id="757a0aa" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-e4e51a6 show-corner-icon-yes elementor-widget elementor-widget-agencium_testimonial_carousel"
                        data-id="e4e51a6" data-element_type="widget"
                        data-widget_type="agencium_testimonial_carousel.default">
                        <div class="elementor-widget-container">

                            <div class="agencium-testimonial-carousel-widget">
                                <div class="testimonial-carousel-wrapper">

                                    <div class="testimonials-slider-container">
                                        <div class="testimonials-slider owl-carousel owl-theme owl-loaded owl-drag"
                                            data-slider-options="{&quot;items&quot;:1,&quot;nav&quot;:false,&quot;dots&quot;:true,&quot;autoplayHoverPause&quot;:true,&quot;autoplay&quot;:false,&quot;autoplaySpeed&quot;:300,&quot;autoplayTimeout&quot;:5000,&quot;loop&quot;:true,&quot;dragEndSpeed&quot;:500,&quot;navSpeed&quot;:500,&quot;dotsSpeed&quot;:500,&quot;rtl&quot;:false}">
                                            <div class="owl-stage-outer">
                                                <div class="owl-stage"
                                                    style="transform: translate3d(-1010px, 0px, 0px); transition: all 0s ease 0s; width: 3538px;">
                                                    <div class="owl-item cloned" style="width: 505.398px;">
                                                        <div class="testimonial-item slider-item">
                                                            <div class="testimonial">
                                                                <p>Reedfish bonefish trahira
                                                                    bristlenose catfish, longnose
                                                                    lancetfish morid. Wahoo mora
                                                                    deep sea smelt cat shark
                                                                    atlantic. Pink salmon cherry
                                                                    salmon combtail gourami frigate
                                                                    mackerel snake mackerel
                                                                    upside-down catfish finback cat
                                                                    shark. Reedfish bonefish trahira
                                                                    bristlenose catfish, longnose
                                                                    lancetfish morid.</p>
                                                            </div>
                                                            <div class="author-container">
                                                                <div class="author-info">
                                                                    <div class="author">Sam
                                                                        Daniels / CEO Electric LLC
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="owl-item cloned" style="width: 505.398px;">
                                                        <div class="testimonial-item slider-item">
                                                            <div class="testimonial">
                                                                <p>Reedfish bonefish trahira
                                                                    bristlenose catfish, longnose
                                                                    lancetfish morid. Wahoo mora
                                                                    deep sea smelt cat shark
                                                                    atlantic. Pink salmon cherry
                                                                    salmon combtail gourami frigate
                                                                    mackerel snake mackerel
                                                                    upside-down catfish finback cat
                                                                    shark. Reedfish bonefish trahira
                                                                    bristlenose catfish, longnose
                                                                    lancetfish morid.</p>
                                                            </div>
                                                            <div class="author-container">
                                                                <div class="author-info">
                                                                    <div class="author">Sam
                                                                        Daniels / CEO Electric LLC
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="owl-item active" style="width: 505.398px;">
                                                        <div class="testimonial-item slider-item">
                                                            <div class="testimonial">
                                                                <p>Reedfish bonefish trahira
                                                                    bristlenose catfish, longnose
                                                                    lancetfish morid. Wahoo mora
                                                                    deep sea smelt cat shark
                                                                    atlantic. Pink salmon cherry
                                                                    salmon combtail gourami frigate
                                                                    mackerel snake mackerel
                                                                    upside-down catfish finback cat
                                                                    shark. Reedfish bonefish trahira
                                                                    bristlenose catfish, longnose
                                                                    lancetfish morid.</p>
                                                            </div>
                                                            <div class="author-container">
                                                                <div class="author-info">
                                                                    <div class="author">Sam
                                                                        Daniels / CEO Electric LLC
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="owl-item" style="width: 505.398px;">
                                                        <div class="testimonial-item slider-item">
                                                            <div class="testimonial">
                                                                <p>Reedfish bonefish trahira
                                                                    bristlenose catfish, longnose
                                                                    lancetfish morid. Wahoo mora
                                                                    deep sea smelt cat shark
                                                                    atlantic. Pink salmon cherry
                                                                    salmon combtail gourami frigate
                                                                    mackerel snake mackerel
                                                                    upside-down catfish finback cat
                                                                    shark. Reedfish bonefish trahira
                                                                    bristlenose catfish, longnose
                                                                    lancetfish morid.</p>
                                                            </div>
                                                            <div class="author-container">
                                                                <div class="author-info">
                                                                    <div class="author">Sam
                                                                        Daniels / CEO Electric LLC
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="owl-item" style="width: 505.398px;">
                                                        <div class="testimonial-item slider-item">
                                                            <div class="testimonial">
                                                                <p>Reedfish bonefish trahira
                                                                    bristlenose catfish, longnose
                                                                    lancetfish morid. Wahoo mora
                                                                    deep sea smelt cat shark
                                                                    atlantic. Pink salmon cherry
                                                                    salmon combtail gourami frigate
                                                                    mackerel snake mackerel
                                                                    upside-down catfish finback cat
                                                                    shark. Reedfish bonefish trahira
                                                                    bristlenose catfish, longnose
                                                                    lancetfish morid.</p>
                                                            </div>
                                                            <div class="author-container">
                                                                <div class="author-info">
                                                                    <div class="author">Sam
                                                                        Daniels / CEO Electric LLC
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="owl-item cloned" style="width: 505.398px;">
                                                        <div class="testimonial-item slider-item">
                                                            <div class="testimonial">
                                                                <p>Reedfish bonefish trahira
                                                                    bristlenose catfish, longnose
                                                                    lancetfish morid. Wahoo mora
                                                                    deep sea smelt cat shark
                                                                    atlantic. Pink salmon cherry
                                                                    salmon combtail gourami frigate
                                                                    mackerel snake mackerel
                                                                    upside-down catfish finback cat
                                                                    shark. Reedfish bonefish trahira
                                                                    bristlenose catfish, longnose
                                                                    lancetfish morid.</p>
                                                            </div>
                                                            <div class="author-container">
                                                                <div class="author-info">
                                                                    <div class="author">Sam
                                                                        Daniels / CEO Electric LLC
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="owl-item cloned" style="width: 505.398px;">
                                                        <div class="testimonial-item slider-item">
                                                            <div class="testimonial">
                                                                <p>Reedfish bonefish trahira
                                                                    bristlenose catfish, longnose
                                                                    lancetfish morid. Wahoo mora
                                                                    deep sea smelt cat shark
                                                                    atlantic. Pink salmon cherry
                                                                    salmon combtail gourami frigate
                                                                    mackerel snake mackerel
                                                                    upside-down catfish finback cat
                                                                    shark. Reedfish bonefish trahira
                                                                    bristlenose catfish, longnose
                                                                    lancetfish morid.</p>
                                                            </div>
                                                            <div class="author-container">
                                                                <div class="author-info">
                                                                    <div class="author">Sam
                                                                        Daniels / CEO Electric LLC
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-nav disabled"><button type="button" role="presentation"
                                                    class="owl-prev"><span
                                                        aria-label="Previous">‹</span></button><button type="button"
                                                    role="presentation" class="owl-next"><span
                                                        aria-label="Next">›</span></button></div>
                                            <div class="owl-dots"><button role="button"
                                                    class="owl-dot active"><span></span></button><button role="button"
                                                    class="owl-dot"><span></span></button><button role="button"
                                                    class="owl-dot"><span></span></button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6f68a1f"
                data-id="6f68a1f" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-ac30344 elementor-widget elementor-widget-heading"
                        data-id="ac30344" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">The Best
                                customers says <em>about Us</em></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
