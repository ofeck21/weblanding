@extends('landing-page.template')

@section('title', env('APP_NAME'))

@section('description', env('APP_DESCRIPTION'))

@section('keywords', env('APP_KEYWORDS'))

@section('content')

{{-- Top Section - Slider --}}
@include('landing-page.partial.section.slider')

{{-- Recomendation --}}
@include('landing-page.partial.section.recomendation')

{{-- Template List --}}
@include('landing-page.partial.section.template')

{{-- Layanan Section Title--}}
{{-- <section class="elementor-section elementor-top-section elementor-element elementor-element-88044b5 elementor-section-boxed elementor-section-height-default elementor-section-height-default mt-5" data-id="88044b5" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-de546a5 animated agencium_clip_left" data-id="de546a5" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;agencium_clip_left&quot;}">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-86cca1a elementor-widget elementor-widget-agencium_heading animated agenciumHeadingBorder" data-id="86cca1a" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;agenciumHeadingBorder&quot;}" data-widget_type="agencium_heading.default">
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
</section> --}}

{{-- Layanan Section Hero Title --}}
{{-- <section class="elementor-section elementor-top-section elementor-element elementor-element-af35fa1 elementor-section-content-bottom elementor-section-boxed elementor-section-height-default elementor-section-height-default animated fadeIn" data-id="af35fa1" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;}">
    <div class="elementor-container elementor-column-gap-no">
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-759a47f animated fadeIn" data-id="759a47f" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;}">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-30bb01d elementor-widget elementor-widget-heading" data-id="30bb01d" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Most
                            <em>exprerienced</em> services
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

{{-- <section class="elementor-section elementor-top-section elementor-element elementor-element-df43469 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="df43469" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ee998fe animated fadeIn" data-id="ee998fe" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;}">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-a7b315f elementor-widget elementor-widget-agencium_services_listing" data-id="a7b315f" data-element_type="widget" data-widget_type="agencium_services_listing.default">
                    <div class="elementor-widget-container">

                        <div class="agencium-service-listing-widget">

                            <div class="archive-listing" data-ajax="{&quot;post_type&quot;:&quot;agencium_service&quot;,&quot;post_status&quot;:&quot;publish&quot;,&quot;ignore_sticky_posts&quot;:true,&quot;suppress_filters&quot;:true,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;asc&quot;,&quot;link_base&quot;:&quot;https:\/\/bikinweb.mrofik.com&quot;,&quot;posts_per_page&quot;:4,&quot;columns_number&quot;:1,&quot;paged&quot;:1}" data-widget="{&quot;excerpt_length&quot;:104,&quot;show_media&quot;:false,&quot;show_icon&quot;:false,&quot;show_index&quot;:true,&quot;show_name&quot;:true,&quot;show_excerpt&quot;:false,&quot;show_pagination&quot;:&quot;&quot;,&quot;show_read_more&quot;:false,&quot;read_more_text&quot;:&quot;Read more&quot;,&quot;item_class&quot;:&quot;service-item-wrapper&quot;,&quot;columns_number&quot;:1,&quot;listing_type&quot;:&quot;list&quot;}">
                                <div class="archive-listing-wrapper service-listing-wrapper service-list-listing">

                                    @include('landing-page.content.layanan')

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section> --}}

{{-- <section class="elementor-section elementor-top-section elementor-element elementor-element-b631e05 elementor-section-boxed elementor-section-height-default elementor-section-height-default animated bounceIn" data-id="b631e05" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;bounceIn&quot;}">
    <div class="elementor-container elementor-column-gap-default">

        <div class="elementor-column elementor-col-30 elementor-top-column elementor-element elementor-element-4dfde81" data-id="4dfde81" data-element_type="column">
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

        <div class="elementor-column elementor-col-30 elementor-top-column elementor-element elementor-element-80c079a" data-id="80c079a" data-element_type="column">
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

        <div class="elementor-column elementor-col-30 elementor-top-column elementor-element elementor-element-ae2511c" data-id="ae2511c" data-element_type="column">
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

    </div>
</section> --}}

{{-- <section class="elementor-section elementor-top-section elementor-element elementor-element-c29ceb5 animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="c29ceb5" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;}">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-88fffd8" data-id="88fffd8" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-c59cf91 elementor-invisible elementor-widget elementor-widget-agencium_heading" data-id="c59cf91" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;agenciumHeadingBorder&quot;}" data-widget_type="agencium_heading.default">
                    <div class="elementor-widget-container">
                        <div class="agencium-subtitle">
                            <div class="agencium-subtitle-text">
                                <h5>/tim kami</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="elementor-section elementor-inner-section elementor-element elementor-element-e90b714 elementor-section-content-bottom elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e90b714" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">

                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3dd9202" data-id="3dd9202" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-7e10715 elementor-widget elementor-widget-heading" data-id="7e10715" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">
                                            Meet our <em>creative staff</em>
                                        </h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-bafb29f elementor-widget elementor-widget-agencium_button" data-id="bafb29f" data-element_type="widget" data-widget_type="agencium_button.default">
                                    <div class="elementor-widget-container">

                                        <div class="button-widget">
                                            <div class="button-container">
                                                <a class="agencium-alter-button" href="https://demo.artureanec.com/themes/agencium/were-a-result-driven-team/" target="_blank">
                                                    Lihat semua tim
                                                    <svg viewBox="0 0 13 20">
                                                        <polyline points="0.5 19.5 3 19.5 12.5 10 3 0.5">
                                                        </polyline>
                                                    </svg>
                                                </a>
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
                                            <div class="elementor-counter-title">
                                                Team profesional
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                {{-- Team Section --}}
                {{-- @include('landing-page.content.team') --}}
            {{-- </div>
        </div>
    </div>
</section> --}}

{{-- Testimonial Section Title --}}
{{-- <section class="elementor-section elementor-top-section elementor-element elementor-element-bcff130 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="bcff130" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;agencium_clip_left&quot;}">
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
</section> --}}

{{-- Testimoni Section --}}
{{-- @include('landing-page.content.testimoni') --}}
@endsection
