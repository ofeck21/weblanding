@for ($i = 1 ; $i <= 4; $i++)
<div class="owl-item cloned" style="width: 453.333px;">
    <div class="portfolio-item-wrapper slider-item with-title-icon post-1341 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-design">
        <div class="portfolio-item">
            <div class="portfolio-item-media">
                <a href="#demo-url"
                    class="portfolio-item-media-link">
                    <div class="post-media">
                        <picture>
                            <source media="(max-width: 480px)"
                                sizes="(max-width: 480px) 480px"
                                srcset="{{asset('templates/theme'.$i.'.png')}} 480w">
                            <source media="(max-width: 660px)"
                                sizes="(max-width: 660px) 660px"
                                srcset="{{asset('templates/theme'.$i.'.png')}} 660w">
                            <source media="(max-width: 840px)"
                                sizes="(max-width: 840px) 840px"
                                srcset="{{asset('templates/theme'.$i.'.png')}} 840w">
                            <source media="(max-width: 1020px)"
                                sizes="(max-width: 1020px) 1020px"
                                srcset="{{asset('templates/theme'.$i.'.png')}} 1020w">
                            <source media="(max-width: 1200px)"
                                sizes="(max-width: 1200px) 1200px"
                                srcset="{{asset('templates/theme'.$i.'.png')}} 1200w">
                            <img decoding="async" alt="product-5"
                                title="product-5"
                                src="{{asset('templates/theme'.$i.'.png')}}"
                                class="attachment-medium size-medium wp-post-image">
                        </picture>
                    </div>
                </a>
            </div>
            <div class="portfolio-item-content">
                <h6 class="post-title">
                    <a href="#demo-url">
                        <span class="portfolio-post-name-wrapper">
                            <span class="portfolio-post-name" data-name="Portofolio - {{ $i }}">Portofolio - {{ $i }}</span>
                        </span>
                    </a>
                </h6>
            </div>
            <div class="portfolio-item-footer row">
                <div class="col">
                    <a href="#link-demo" target="_blank" style="cursor: pointer;">Demo</a>
                </div>
                <div class="col text-end">
                    <a href="#cal-to-action" target="_blank" style="cursor: pointer;"><i class="fa fa-call"></i>Order</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endfor
