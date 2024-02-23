/*
 * Created by Artureanec
*/

"use strict";

function agencium_reactivate_sortable() {
    jQuery('.agencium_text_table_rows').sortable(
        {
            handle: '.agencium_text_table_row_move',
        }
    );
}

function agencium_rwmb_and_customizer_condition() {
    jQuery("[data-dependency-id]").each(function (index) {
        var agencium_target = jQuery(this).attr('data-dependency-id');
        var agencium_needed_val = jQuery(this).attr('data-dependency-val');
        var agencium_needed_val_array = new Array();
        var agencium_array_just_ok = false;

        if(agencium_needed_val.indexOf(',') + 1) {
            // Work with array value
            agencium_needed_val = agencium_needed_val.replace(/\s+/g,'');
            agencium_needed_val_array = agencium_needed_val.split(",");

            var agencium_this = jQuery(this);

            agencium_needed_val_array.forEach(function(item, i, agencium_arr) {
                if (agencium_this.hasClass('agencium_dependency_customizer')) {
                    if (agencium_array_just_ok !== true) {
                        if (jQuery('#customize-control-' + agencium_target).find('select').val() == item) {
                            agencium_array_just_ok = true;
                        }
                    }
                }
                else {
                    if (agencium_array_just_ok !== true) {
                        if (jQuery('#' + agencium_target).val() == item) {
                            agencium_array_just_ok = true;
                        }
                    }
                }
            });

            if (jQuery(this).hasClass('agencium_dependency_customizer')) {
                var agencium_target_status = jQuery('#customize-control-' + agencium_target).find('select').val();
                var agencium_dependency_elem_cont = jQuery(this).parents('.customize-control');
            } else {
                var agencium_target_status = jQuery('#' + agencium_target).val();
                var agencium_dependency_elem_cont = jQuery(this).parents('.rwmb-field');
            }

            if (agencium_array_just_ok == true) {
                agencium_dependency_elem_cont.show('fast');
            } else {
                agencium_dependency_elem_cont.hide('fast');
            }
        } else {
            // Just one value
            if (jQuery(this).hasClass('agencium_dependency_customizer')) {
                var agencium_target_status = jQuery('#customize-control-' + agencium_target).find('select').val();
                var agencium_dependency_elem_cont = jQuery(this).parents('.customize-control');
            } else {
                var agencium_target_status = jQuery('#' + agencium_target).val();
                var agencium_dependency_elem_cont = jQuery(this).parents('.rwmb-field');
            }

            if (agencium_needed_val == agencium_target_status) {
                agencium_dependency_elem_cont.show('fast');
            } else {
                agencium_dependency_elem_cont.hide('fast');
            }
        }
    });
}

function agencium_hide_unnecessary_options() {
    // console.log(jQuery('.agencium_this_template_file').length);
    if (jQuery('.agencium_this_template_file').length < 1) {
        var agencium_this_template_file = 'agencium_temp_333';
    }
    if (jQuery('.agencium_this_template_file').length > 0) {
        agencium_this_template_file = jQuery('.agencium_this_template_file').val();
    }
    jQuery("[data-show-on-template-file]").each(function (index) {
        var agencium_unnecessary_target = jQuery(this).attr('data-show-on-template-file');
        if (agencium_unnecessary_target.indexOf(',') > -1) {
            var agencium_unnecessary_target_array = agencium_unnecessary_target.split(',');
            var agencium_rwmb_del_status = 'not find';
            jQuery.each(agencium_unnecessary_target_array, function (i, val) {
                if (agencium_this_template_file == val.trim()) {
                    agencium_rwmb_del_status = 'find';
                }
            });
            if (agencium_rwmb_del_status == 'not find') {
                jQuery(this).parents('.rwmb-field').remove();
            }
        } else {
            if (agencium_this_template_file !== agencium_unnecessary_target) {
                jQuery(this).parents('.rwmb-field').remove();
            }
        }
    });

    jQuery("[data-hide-on-template-file]").each(function (index) {
        var agencium_unnecessary_target = jQuery(this).attr('data-hide-on-template-file');
        if (agencium_unnecessary_target.indexOf(',') > -1) {
            var agencium_unnecessary_target_array = agencium_unnecessary_target.split(',');
            var agencium_rwmb_del_status = 'not find';
            jQuery.each(agencium_unnecessary_target_array, function (i, val) {
                if (agencium_this_template_file == val.trim()) {
                    agencium_rwmb_del_status = 'find';
                }
            });
            if (agencium_rwmb_del_status == 'find') {
                jQuery(this).parents('.rwmb-field').remove();
            }
        } else {
            if (agencium_this_template_file == agencium_unnecessary_target) {
                jQuery(this).parents('.rwmb-field').remove();
            }
        }
    });
}

function agencium_onchange_post_formats2(val) {
    // await whenEditorIsReady();
    jQuery('#video-post-format-settings, #audio-past-format-settings, #quote-post-format-settings, #link-post-format-settings, #gallery-post-format-settings').hide('fast');
    if (val == 'standard' || val == 'undefined') {
        jQuery('#video-post-format-settings, #audio-past-format-settings, #quote-post-format-settings, #link-post-format-settings, #gallery-post-format-settings').hide('fast');
    }
    if (val == 'gallery') {
        jQuery('#gallery-post-format-settings').show('fast');
    }
    if (val == 'link') {
        jQuery('#link-post-format-settings').show('fast');
    }
    if (val == 'quote') {
        jQuery('#quote-post-format-settings').show('fast');
    }
    if (val == 'video') {
        jQuery('#video-post-format-settings').show('fast');
    }
    if (val == 'audio') {
        jQuery('#audio-past-format-settings').show('fast');
    }
}

window.onload = function() {
    if ( wp.data.dispatch('core/edit-post') ) {
        agencium_onchange_post_formats2(wp.data.select('core/editor').getEditedPostAttribute('format'));
    }
};

jQuery(document).on('change', '#post-format-selector-0', function(){
    agencium_onchange_post_formats2(jQuery(this).val());
});

function agencium_onchange_post_formats() {
    var agencium_post_format = jQuery('#post-formats-select input:checked').val();

    jQuery('#video-post-format-settings, #audio-past-format-settings, #quote-post-format-settings, #link-post-format-settings, #gallery-post-format-settings').hide('fast');
    if (agencium_post_format == 'standard' || agencium_post_format == 'undefined') {
        jQuery('#video-post-format-settings, #audio-past-format-settings, #quote-post-format-settings, #link-post-format-settings, #gallery-post-format-settings').hide('fast');
    }
    if (agencium_post_format == 'gallery') {
        jQuery('#gallery-post-format-settings').show('fast');
    }
    if (agencium_post_format == 'video') {
        jQuery('#video-post-format-settings').show('fast');
    }
    if (agencium_post_format == 'audio') {
        jQuery('#audio-past-format-settings').show('fast');
    }
    if (agencium_post_format == 'quote') {
        jQuery('#quote-post-format-settings').show('fast');
    }
    if (agencium_post_format == 'link') {
        jQuery('#link-post-format-settings').show('fast');
    }
    if (jQuery('#post-formats-select').length < 1) {
        // Body Class
        if (jQuery('body').hasClass('post-type-gallery')) {
            jQuery('#gallery-post-format-settings').show('fast');
            setTimeout("jQuery('#gallery-post-format-settings').show('fast')",100);
        } else if (jQuery('body').hasClass('post-type-video')) {
            jQuery('#video-post-format-settings').show('fast');
            setTimeout("jQuery('#video-post-format-settings').show('fast')",100);
        } else if (jQuery('body').hasClass('post-type-audio')) {
            jQuery('#audio-past-format-settings').show('fast');
            setTimeout("jQuery('#audio-post-format-settings').show('fast')",100);
        } else if (jQuery('body').hasClass('post-type-quote')) {
            jQuery('#quote-post-format-settings').show('fast');
            setTimeout("jQuery('#quote-post-format-settings').show('fast')",100);
        } else if (jQuery('body').hasClass('post-type-link')) {
            jQuery('#link-post-format-settings').show('fast');
            setTimeout("jQuery('#link-post-format-settings').show('fast')",100);
        } else {
            jQuery('#video-post-format-settings, #audio-past-format-settings, #quote-post-format-settings, #link-post-format-settings, #gallery-post-format-settings').hide('fast');
        }
    }
}

jQuery(document).ready(function () {
    if (jQuery('#centered_content_hide').length) {
        console.log('i found it');
        console.log(jQuery('#centered_content_hide').val());
        if (jQuery('#centered_content_hide').val() == 'yes') {
            console.log('this is yes');
            jQuery('body').addClass('agencium_hide_content');
        } else {
            console.log('this is no');
            jQuery('body').removeClass('agencium_hide_content');
        }
    }
    jQuery('#centered_content_hide').on('change', function(){
        if (jQuery(this).val() == 'yes') {
            jQuery('body').addClass('agencium_hide_content');
        } else {
            jQuery('body').removeClass('agencium_hide_content');
        }
    });
    if (jQuery('#page_template').length > 0 && jQuery('#page_template').val() !== 'default') {
        jQuery('body').addClass(jQuery('#page_template').val().split('.')[0]);
    }

    jQuery("[data-dependency-id]").parents('.rwmb-field').hide();

    agencium_onchange_post_formats();
    agencium_rwmb_and_customizer_condition();
    agencium_hide_unnecessary_options();

    jQuery('.rwmb-select, .customize-control-select select').change(function () {
        agencium_rwmb_and_customizer_condition();
    });

    jQuery('#post-formats-select input').on("click", function () {
        agencium_onchange_post_formats();
    });

    jQuery('.agencium_reset_all_settings').on("click", function () {
        if (confirm("Are you sure? All settings will be reset to default state.")) {
            jQuery.post(ajaxurl, {
                action: 'agencium_reset_all_settings'
            }, function (response) {
                alert(response);
            });
        }
    });

    jQuery(document).on("click", '.agencium_text_table_add_row', function () {
        var agencium_text_table_data_storage_name = jQuery(this).parents('.widget-content').find('.agencium_text_table_data_storage_name').val();
        var agencium_text_table_name_text = jQuery(this).parents('.widget-content').find('.agencium_text_table_name_text').val();
        var agencium_text_table_value_text = jQuery(this).parents('.widget-content').find('.agencium_text_table_value_text').val();

        jQuery(this).parents('.widget-content').find('.agencium_text_table_rows').append('<div class="agencium_text_table_row agencium_dn"><div class="agencium_50_dib"><label>' + agencium_text_table_name_text + ':</label><input class="widefat" type="text" name="' + agencium_text_table_data_storage_name + '[][name]" value=""></div><div class="agencium_50_dib"><label>' + agencium_text_table_value_text + ':</label><textarea class="widefat" type="text" name="' + agencium_text_table_data_storage_name + '[][value]"></textarea></div><div class="agencium_text_table_row_remove"><i class="fa fa-trash"></i></div><div class="agencium_text_table_row_move"><i class="fa fa-arrows"></i></div></div>');
        jQuery('.agencium_dn').slideDown("fast").removeClass('agencium_dn');
    });

    jQuery(document).on("click", '.agencium_text_table_row_remove', function () {
        jQuery(this).parents('.agencium_text_table_row').slideUp("normal", function () {
            jQuery(this).remove();
        });
    });

    jQuery(document).on("click", '.widget-control-save', function () {
        setTimeout(function () {
            agencium_reactivate_sortable()
        }, 1000);
        setTimeout(function () {
            agencium_reactivate_sortable()
        }, 2000);
        setTimeout(function () {
            agencium_reactivate_sortable()
        }, 3000);
    });

    agencium_reactivate_sortable();

    function media_upload() {
        var _custom_media = true,
            _orig_send_attachment = wp.media.editor.send.attachment;
        jQuery('body').on('click', '.js_custom_upload_media', function () {
            var button_id   = jQuery(this).attr('id'),
                preview_url = '';
            wp.media.editor.send.attachment = function (props, attachment) {
                if ( typeof attachment !== 'undefined' ) {
                    if (_custom_media) {
                        if (typeof attachment.sizes.medium !== 'undefined') {
                            preview_url = attachment.sizes.medium.url;
                        } else {
                            preview_url = attachment.sizes.full.url;
                        }
                        jQuery('.' + button_id + '_img').attr('src', preview_url).removeClass('hidden');
                        jQuery('.' + button_id + '_url').val(attachment.url).change();
                        jQuery('.' + button_id + '_id').val(attachment.id).change();
                    } else {
                        return _orig_send_attachment.apply(jQuery('#' + button_id), [props, attachment]);
                    }
                    jQuery('#' + button_id).removeClass('empty').addClass('hidden');
                    jQuery('.media-widget-buttons', jQuery(this).parents('.media-widget-control')).find('.js_custom_remove_media').removeClass('hidden');
                }
            };
            if ( typeof wp !== 'undefined' && wp.media && wp.media.editor ) {
                wp.media.editor.open(jQuery('#' + button_id));
            }

            return false;
        });
    }
    media_upload();

    function media_remove() {
        jQuery('body').on('click', '.js_custom_remove_media', function() {
            jQuery('.media_image', jQuery(this).parents('.media-widget-control')).find('input.widefat').val('').change();
            jQuery('.media_image', jQuery(this).parents('.media-widget-control')).find('input.widefat2').val('').change();
            jQuery('.media_image', jQuery(this).parents('.media-widget-control')).find('img').attr('src', '').addClass('hidden');
            jQuery('.media_image', jQuery(this).parents('.media-widget-control')).find('.js_custom_upload_media').addClass('empty').removeClass('hidden');
            jQuery(this).addClass('hidden');
        });
    }
    media_remove();
});

jQuery('.agencium_color_picker .rwmb-color').each(function(){
    var color = jQuery(this).attr('placeholder');

    if (jQuery(this).val() === '') {
        jQuery(this).val(color);
    }
});







function iconSearch(i) {
    var t = i.parent().next().find('.iconpicker-items'),
        c = i.val().toLowerCase();

    if ( c.length > 0 ) {
        t.children().each( function() {
            if ( jQuery(this).filter("[title*=".concat(c)).length > 0 || c.length < 1 ) {
                jQuery(this).show();
            } else {
                jQuery(this).hide();
            }
        })
    } else {
        t.children().show();
    }
}

jQuery('.rwmb-benefits-wrapper, .rwmb-iconpicker-wrapper').on('click', '.icp-auto', function(){
    jQuery(this).parent().next().addClass('iconpicker-visible').find('.iconpicker-search').focus().val('').keyup();
    jQuery(document).on('mouseup', function(i) {
        var t = jQuery('.iconpicker-popover');
        t.is(i.target) || 0 !== t.has(i.target).length || t.removeClass('iconpicker-visible');
    });
    jQuery('.iconpicker-items > i').on('click', function(){
        var i = jQuery(this).attr('class');
        (n = jQuery(this).parents('.iconpicker-popover').prev().find('.icp')).val(i);
        n.attr('value', i);
        var t = n.next('.input-group-addon'),
            c = '<i class="' . concat(i, '"></i>');
        t.empty();
        t.append(c);
        var n, r = jQuery(this).parent().parent().parent();
        (n = jQuery('.iconpicker-popover')).removeClass('iconpicker-visible');
        n.trigger('change');
    });
    jQuery('.iconpicker-search').on('keyup', function() {
        iconSearch(jQuery(this));
    });
});

function ownKeys(object, enumerableOnly) {
    var keys = Object.keys(object);
    if (Object.getOwnPropertySymbols) {
        keys.push.apply(keys, Object.getOwnPropertySymbols(object));
    }
    if (enumerableOnly)
        keys = keys.filter(function(sym) {
            return Object.getOwnPropertyDescriptor(object, sym).enumerable;
        });
    return keys;
}

function _objectSpread(target) {
    for (var i = 1; i < arguments.length; i++) {
        var source = arguments[i] != null ? arguments[i] : {};
        if (i % 2) {
            ownKeys(source, true).forEach(function(key) {
                _defineProperty(target, key, source[key]);
            });
        } else if (Object.getOwnPropertyDescriptors) {
            Object.defineProperties(target, Object.getOwnPropertyDescriptors(source));
        } else {
            ownKeys(source).forEach(function(key) {
                Object.defineProperty(
                    target,
                    key,
                    Object.getOwnPropertyDescriptor(source, key)
                );
            });
        }
    }
    return target;
}

function _defineProperty(obj, key, value) {
    if (key in obj) {
        Object.defineProperty(obj, key, {
            value: value,
            enumerable: true,
            configurable: true,
            writable: true
        });
    } else {
        obj[key] = value;
    }
    return obj;
}





// const el = wp.element.createElement;
// const SVG = wp.primitives.SVG;
// const Path = wp.primitives.Path;
// const PlayHqIcon = () => el(
//     SVG,
//     { width: 24, height: 24, viewBox: '0 0 24 24', version: '1.1' },
//     el(Path, {
//         fill: '#9057A3',
//         d: 'M23.3,5.4l-0.1,0.8C16.7,2.5,8.8,2.2,2,5.4v0c2.9-2.1,6.2-3.5,9.7-4.1c0.3-0.1,0.6-0.1,0.9-0.1 c3.6-0.5,7.3-0.1,10.8,1.1C23.4,3.3,23.4,4.3,23.3,5.4L23.3,5.4z'
//     }),
//     el(Path, {
//         fill: '#9057A3',
//         d: 'M2,5.4C2,5.4,2,5.4,2,5.4C2,5.5,2,5.4,2,5.4L2,5.4z'
//     }),
//     el(Path, {
//         fill: '#9057A3',
//         d: 'M12.6,1.1c-0.3,0-0.6,0.1-0.9,0.1C8.2,1.9,4.9,3.3,2,5.4C1.9,4.3,1.9,3.3,2,2.2C5.4,1,9,0.7,12.6,1.1z'
//     }),
//     el(Path, {
//         d: 'M11.9,3.2C8.5,3.2,5.1,4,2,5.4c0,0-0.1,0-0.1,0C1.5,5.7,1,5.9,0.6,6.2c0.4,3.1,1.4,6.1,3,8.8l1-8.2 c0,0,0-0.1,0.1-0.1s0.1-0.1,0.1-0.1h2c0.1,0,0.2,0.1,0.2,0.2l-0.5,3.7c0,0,0,0.1,0.1,0.1h2.6c0,0,0,0,0.1,0c0,0,0,0,0-0.1l0.5-3.7 c0,0,0-0.1,0.1-0.1c0,0,0.1-0.1,0.1-0.1h2c0,0,0.1,0,0.1,0.1c0,0,0,0.1,0,0.1l-1.2,9.6c0,0,0,0.1-0.1,0.1c0,0-0.1,0.1-0.1,0.1h-2 c0,0-0.1,0-0.1-0.1c0,0,0-0.1,0-0.1l0.5-3.8c0,0,0-0.1-0.1-0.1H6.3c0,0-0.1,0-0.1,0.1l-0.6,5.1c1.8,2.2,3.9,4,6.3,5.4 c2.6-1.5,5-3.6,6.8-6l-1-1c-0.1,0-0.1,0.1-0.2,0.1c-0.6,0.3-1.3,0.5-2,0.5c-0.9,0-1.8-0.3-2.4-0.9c-0.6-0.6-0.9-1.5-0.9-2.3 c0-0.2,0-0.4,0-0.6l0.4-2.8c0.1-0.7,0.3-1.3,0.7-1.9c0.4-0.6,0.9-1,1.5-1.3c0.6-0.3,1.3-0.5,2-0.5c0.6,0,1.2,0.1,1.8,0.4 c0.5,0.2,0.9,0.6,1.2,1.1C20,8.4,20.1,9,20.1,9.6c0,0.2,0,0.4,0,0.6L19.7,13c0,0.4-0.1,0.7-0.3,1.1l0.7,0.7c0,0,0,0,0.1,0.1 c1.6-2.6,2.6-5.6,3-8.6C19.8,4.2,15.9,3.2,11.9,3.2L11.9,3.2z'
//     }),
//     el(Path, {
//         d: 'M15.3,8.9c-0.3,0.3-0.5,0.7-0.6,1.2l-0.4,3c0,0.1,0,0.2,0,0.3c0,0.4,0.1,0.7,0.3,1c0.3,0.2,0.6,0.4,0.9,0.4 c0.4,0,0.8-0.2,1.1-0.5c0.3-0.3,0.5-0.7,0.6-1.2l0.4-3c0-0.1,0-0.2,0-0.3c0-0.4-0.1-0.7-0.3-1c-0.3-0.2-0.6-0.4-1-0.4 C16,8.5,15.6,8.6,15.3,8.9L15.3,8.9z'
//     })
// );
//
// const PlayHqSocialLink = {
//     name: 'playhq',
//     attributes: { service: 'playhq' },
//     title: 'PlayHQ',
//     icon: PlayHqIcon,
// };
//
// wp.hooks.addFilter(
//     'blocks.registerBlockType',
//     'playhq-social-icon/social-link-block',
//     function( settings, name ) {
//         if ( 'core/social-link' === name ) {
//             if ( settings.variations.length ) {
//                 let variation = PlayHqSocialLink;
//                 if ( ! variation.isActive ) {
//                     variation.isActive = ( blockAttributes, variationAttributes ) => blockAttributes.service === variationAttributes.service;
//                 }
//                 settings.variations.push( variation );
//             }
//         }
//         return settings;
//     }
// );
//
// wp.domReady( function() {
//     wp.blocks.registerBlockVariation( 'core/social-link', PlayHqSocialLink );
// });