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
                                            <h1 class="content-slider-item-heading agencium-content-wrapper-1">{!! $title ?? "" !!}</h1>
                                            <h2 class="content-slider-item-additional-heading agencium-content-wrapper-2">{!! $sub_title ?? "" !!}</h2>
                                            <div class="content-slider-item-content agencium-content-wrapper-3">
                                                <div class="content-slider-item-text">
                                                    <p>{!! $description !!}</p>
                                                </div>
                                                <div class="content-slider-item-buttons">
                                                    <a class="agencium-alter-button" href="{{ $action_url ?? '#' }}" @if(isset($is_blank) && $is_blank === true) target="_blank" @endif>{{ $action_text ?? "Detail" }}<svg viewBox="0 0 13 20"><polyline points="0.5 19.5 3 19.5 12.5 10 3 0.5"></polyline></svg></a>
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