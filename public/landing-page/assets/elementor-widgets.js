'use strict';

jQuery(window).on('elementor/frontend/init', function () {
    elementorFrontend.hooks.addAction('frontend/element_ready/agencium_blog_listing.default', function () {
        if ( jQuery('body').hasClass('elementor-editor-active') ) {
            setTimeout(elements_slider_init, 300);
            setTimeout(fix_responsive_iframe, 600);
            if (jQuery(window.wp.mediaelement).length > 0) {
                jQuery(window.wp.mediaelement.initialize);
            }
        }
    });
    elementorFrontend.hooks.addAction('frontend/element_ready/agencium_portfolio_listing.default', function () {
        if ( jQuery('body').hasClass('elementor-editor-active') ) {
            setTimeout(elements_slider_init, 500);
            setTimeout(isotope_init, 2500);
        }
    });
    elementorFrontend.hooks.addAction('frontend/element_ready/agencium_portfolio_slider.default', function () {
        if ( jQuery('body').hasClass('elementor-editor-active') ) {
            setTimeout(elements_slider_init, 500);
        }
    });
    elementorFrontend.hooks.addAction('frontend/element_ready/agencium_projects_listing.default', function () {
        if ( jQuery('body').hasClass('elementor-editor-active') ) {
            setTimeout(isotope_init, 2500);
        }
    });
    elementorFrontend.hooks.addAction('frontend/element_ready/agencium_services_listing.default', function () {
        if ( jQuery('body').hasClass('elementor-editor-active') ) {
            setTimeout(elements_slider_init, 500);
            setTimeout(isotope_init, 2500);

            jQuery('.service-grid-listing .service-item').on('mouseover', function(){
                if ( jQuery(window).width() > 1200 ) {
                    jQuery('.service-item-hidden', this).slideDown(300).addClass('active');
                }
            }).on('mouseleave', function() {
                jQuery('.service-item-hidden', this).slideUp(300).removeClass('active');
            });
        }
    });
    elementorFrontend.hooks.addAction('frontend/element_ready/agencium_testimonial_carousel.default', function () {
        if ( jQuery('body').hasClass('elementor-editor-active') ) {
            setTimeout(elements_slider_init, 500);
        }
    });
    elementorFrontend.hooks.addAction('frontend/element_ready/agencium_steps.default', function () {
        if ( jQuery('body').hasClass('elementor-editor-active') ) {
            setTimeout(elements_slider_init, 500);
        }
    });
    elementorFrontend.hooks.addAction('frontend/element_ready/image-carousel.default', function ($scope) {
        if ( jQuery(window).width() >= 1021 ) {
            const $wrapper = $scope.find('.elementor-image-carousel');
            const cursor = jQuery('.custom-cursor-drag', $scope);

            function showCustomCursor(event) {
                cursor.css('left', event.clientX-29).css('top', event.clientY-29);
            }
            $wrapper.mousemove( showCustomCursor );

            $wrapper.mouseleave(function(e) {
                if( !jQuery('body').hasClass('elementor-editor-active') ) {
                    jQuery('.elementor-widget', $scope).css({cursor: 'auto'});
                    cursor.removeClass('active');
                    setTimeout(function() {
                        if( !cursor.hasClass('active') ) {
                            cursor.hide();
                        }
                    }, 300);
                }
            });

            $wrapper.mouseenter(function(e) {
                if( !jQuery('body').hasClass('elementor-editor-active') ) {
                    jQuery('.elementor-image-carousel', $scope).css({cursor: 'none'});
                    cursor.show();
                    setTimeout(function() {
                        cursor.addClass('active');
                    }, 10);
                }
            });
        }
    });
    elementorFrontend.hooks.addAction('frontend/element_ready/agencium_content_slider.default', function () {
        if ( jQuery('body').hasClass('elementor-editor-active') ) {
            setTimeout(elements_slider_init, 500);
        }
    });
    elementorFrontend.hooks.addAction('frontend/element_ready/section.default', function () {
        if ( jQuery('body').hasClass('elementor-editor-active') ) {
            background_image_parallax(jQuery('[data-parallax="scroll"]'), 0.7);
        }
    });

});