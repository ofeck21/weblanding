{{-- Template List Section Title --}}
<section class="elementor-section elementor-top-section elementor-element elementor-element-bbc8194 elementor-section-boxed elementor-section-height-default elementor-section-height-default animated agencium_clip_left" data-id="bbc8194" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;agencium_clip_left&quot;}">
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

{{-- Template List Filter Section --}}
<section class="elementor-section elementor-top-section elementor-element elementor-element-bbc8194 elementor-section-boxed elementor-section-height-default elementor-section-height-default animated agencium_clip_left" data-id="bbc8194" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;agencium_clip_left&quot;}">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-260e009"
            data-id="260e009" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-c070caf elementor-widget elementor-widget-agencium_heading"
                    data-id="c070caf" data-element_type="widget" data-widget_type="agencium_heading.default">
                    <div class="elementor-widget-container">
                        <div class="agencium-subtitle row">
                            <div class="agencium-subtitle-text col-md-10">
                                <a href="?category=all" class="btn bg-warning rounded">Semua</a>
                                @foreach ($categories as $category)
                                    <a href="?category={{$category->category_id}}" class="btn rounded">{{$category->category->name}}</a>
                                @endforeach
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control bg-dark text-white" placeholder="Cari...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Template List Section --}}
<section class="elementor-section elementor-top-section elementor-element elementor-element-f8c2609 animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default animated agencium_clip_down" data-id="f8c2609" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;agencium_clip_down&quot;}">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a506377" data-id="a506377" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-6b169ca elementor-widget elementor-widget-agencium_portfolio_listing" data-id="6b169ca" data-element_type="widget" data-widget_type="agencium_portfolio_listing.default">
                    <div class="elementor-widget-container">

                        <div class="agencium-portfolios-listing-widget">

                            <div class="archive-listing" data-ajax="{&quot;post_type&quot;:&quot;agencium_portfolio&quot;,&quot;post_status&quot;:&quot;publish&quot;,&quot;ignore_sticky_posts&quot;:true,&quot;suppress_filters&quot;:true,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;desc&quot;,&quot;link_base&quot;:&quot;https:\/\/bikinweb.mrofik.com&quot;,&quot;posts_per_page&quot;:16,&quot;columns_number&quot;:4,&quot;paged&quot;:1}" data-widget="{&quot;item_class&quot;:&quot;portfolio-item-wrapper with-media-overlay with-title-icon&quot;,&quot;columns_number&quot;:4,&quot;listing_type&quot;:&quot;grid&quot;,&quot;show_title&quot;:&quot;yes&quot;,&quot;show_details&quot;:&quot;no&quot;,&quot;show_categories&quot;:&quot;yes&quot;,&quot;show_read_more&quot;:&quot;no&quot;,&quot;read_more_text&quot;:&quot;Read more&quot;,&quot;show_pagination&quot;:&quot;no&quot;}">
                                <div class="archive-listing-wrapper portfolio-listing-wrapper portfolio-grid-listing columns-4">

                                    @include('landing-page.content.template.item-list')

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
