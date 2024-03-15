@foreach ($latest_templates as $template)
<div class="portfolio-item-wrapper with-media-overlay with-title-icon post-1361 agencium_portfolio type-agencium_portfolio status-publish has-post-thumbnail hentry agencium_portfolio_category-branding">
    <div class="portfolio-item">
        <div class="portfolio-item-media">
            <a href="{{$template->demo_url}}" class="portfolio-item-media-link">
                <div class="post-media">
                    <picture>
                        <source media="(max-width: 480px)" sizes="(max-width: 480px) 480px" srcset="{{asset('templates/'.$template->thumbnail)}} 480w">
                        <source media="(max-width: 660px)" sizes="(max-width: 660px) 660px" srcset="{{asset('templates/'.$template->thumbnail)}} 660w">
                        <source media="(max-width: 840px)" sizes="(max-width: 840px) 840px" srcset="{{asset('templates/'.$template->thumbnail)}} 840w">
                        <source media="(max-width: 1020px)" sizes="(max-width: 1020px) 1020px" srcset="{{asset('templates/'.$template->thumbnail)}} 1020w">
                        <source media="(max-width: 1200px)" sizes="(max-width: 1200px) 1200px" srcset="{{asset('templates/'.$template->thumbnail)}} 1200w">
                        <img decoding="async" alt="product-12" title="product-12" src="{{asset('templates/'.$template->thumbnail)}}" class="attachment-agencium_small size-agencium_small wp-post-image">
                    </picture>
                </div>
            </a></div>
        <div class="portfolio-item-content">
            <div class="post-categories"><a class="post-category-item" href="?category={{$template->category_id}}">{{$template->category->name ?? '-'}}</a>
            </div>
            <h6 class="post-title">
                <a href="{{$template->demo_url}}">
                    <span class="portfolio-post-name-wrapper">
                        <span class="portfolio-post-name" data-name="{{$template->name}}">{{$template->name}}</span>
                    </span>
                </a>
            </h6>
        </div>
        <div class="portfolio-item-footer row">
            <div class="col">
                <a href="{{$template->demo_url}}" target="_blank" style="cursor: pointer;">Demo</a>
            </div>
            <div class="col text-end">
                <a href="#cal-to-action" target="_blank" style="cursor: pointer;"><i class="fa fa-call"></i>Order</a>
            </div>
        </div>
    </div>
</div>
@endforeach
