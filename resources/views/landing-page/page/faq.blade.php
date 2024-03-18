@extends('landing-page.template')

@section('title', 'Pertanyaan Umum - '.config('app.name'))

@section('content')
    <div class="page-title-container-wrapper">
        <div class="page-title-container">
            <div class="page-title-bg"></div>
            <div class="page-title-row">
                <div class="page-title-wrapper">
                    <div class="page-title-box">
                        <h1 class="page-title">Pertanyaan <em>Yang Sering</em><br> Ditanyakan</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div data-elementor-type="wp-page" data-elementor-id="42" class="elementor elementor-42">
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-9134e92 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="9134e92" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-row">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f6ced3b"
                        data-id="f6ced3b" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            @foreach ($faqs as $key => $faq)
                                @if($key < 4)
                                <div class="elementor-element elementor-element-{{$faq->id}} elementor-widget elementor-widget-text-editor" data-id="{{$faq->id }}" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <h5>{{$key+1}}. {!! $faq->question !!}</h5>
                                        <p>{!! $faq->answer !!}</p>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                            <div class="elementor-element elementor-element-8ab127e elementor-widget elementor-widget-toggle"
                                data-id="8ab127e" data-element_type="widget" data-widget_type="toggle.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-toggle">
                                        @foreach ($faqs as $key => $faq)
                                            @if($key > 4)
                                            <div class="elementor-toggle-item">
                                                <div id="elementor-tab-title-{{$faq->id}}" class="elementor-tab-title"
                                                    data-tab="{{$faq->id}}" role="button"
                                                    aria-controls="elementor-tab-content-{{$faq->id}}" aria-expanded="false">
                                                    <span class="elementor-toggle-icon elementor-toggle-icon-right"
                                                        aria-hidden="true">
                                                        <span class="elementor-toggle-icon-closed"><i
                                                                class="fontello icon-plus"></i></span>
                                                        <span class="elementor-toggle-icon-opened"><i
                                                                class="elementor-toggle-icon-opened fontello icon-minus"></i></span>
                                                    </span>
                                                    <a class="elementor-toggle-title" tabindex="0">{!! $faq->question !!}</a>
                                                </div>

                                                <div id="elementor-tab-content-{{$faq->id}}"
                                                    class="elementor-tab-content elementor-clearfix" data-tab="{{$faq->id}}"
                                                    role="region" aria-labelledby="elementor-tab-title-{{$faq->id}}">
                                                    <p>{!! $faq->answer !!}</p>
                                                </div>
                                            </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endSection
