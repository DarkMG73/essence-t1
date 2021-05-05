<?php
/**
 * This widget provides the unique call to action in the footer of EssenceTheme's demo. There are up to three pictures surounding the CTA.
 */

// Register widget
add_action('widgets_init', 'ctUp_ads_widget');
function ctUp_ads_widget() {
    register_widget( 'ctUp_ads' );
}

// Enqueue additional admin scripts
add_action('admin_enqueue_scripts', 'ctup_wdscript');
function ctup_wdscript() {
    wp_enqueue_media();
    wp_enqueue_script('ads_script', get_template_directory_uri() . '/js/widget.js', false, '1.0.0', true);
}

// Widget
class ctUp_ads extends WP_Widget {

    function ctUp_ads() {
        $widget_ops = array('classname' => 'ctUp-ads');
        $this->WP_Widget('ctUp-ads-widget', 'EOTW', $widget_ops);
    }

    function widget($args, $instance) {
        echo $before_widget;

print '<pre>';
print_r($instance);
print '</pre>';
?>
    <h1><?php echo apply_filters('widget_title', $instance['text'] ); ?>TEST</h1>
    <img src="<?php echo esc_url($instance['image_uri']); ?>" />
    
    <h1><?php echo apply_filters('widget_title', $instance[1]['text'] ); ?></h1>
    <img src="<?php echo esc_url($instance[1]['image_uri']); ?>" />
    
    <h1><?php echo apply_filters('widget_title', $instance[2]['text'] ); ?></h1>
    <img src="<?php echo esc_url($instance[2]['image_uri']); ?>" />

<?php
        echo $after_widget;

    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;
//         print '<pre>';
// print_r($old_instance['text']);
// print '</pre>';



            $instance['text'] = strip_tags( $new_instance );
            $instance['image_uri'] = strip_tags( $new_instance['image_uri1'] );
            $instance['text2'] = strip_tags( $new_instance['text'] );
            $instance['image_uri2'] = strip_tags( $new_instance['image_uri'] );
            $instance['text3'] = strip_tags( $new_instance['text'] );
            $instance['image_uri3'] = strip_tags( $new_instance['image_uri'] );
print '<pre>';
print_r($instance);
print '</pre>';
        return $instance;
    }

    function form($instance) {

        $number_of_images = 3;
        for($x = 0; $x < $number_of_images; $x++) {
?>
        <p>
            <label 
                for="<?php echo $this->get_field_id('text'); ?>-<?php echo $x ?>"
            >
                Text
            </label>

            <br />

            <input  
                type="text" 
                name="<?php echo $this->get_field_name('text'); ?>-<?php echo $x ?>" 
                id="<?php echo $this->get_field_id('text'); ?>-<?php echo $x ?>" 
                value="<?php echo $instance['text1']; ?>" 
                class="widefat" 
            />
        </p>
        <p>
            <label 
                for="<?= $this->get_field_id( 'image_uri1' ); ?>-<?php echo $x ?>"
            >
                Image
            </label>

            <img 
                class="<?= $this->id ?>_img" 
                src="<?= (!empty($instance['image_uri1'])) ? $instance['image_uri1'] : ''; ?>" 
                style="margin:0;padding:0;max-width:100%;display:block"
            />

            <input 
                type="text" 
                class="widefat <?= $this->id ?>_url" 
                name="<?= $this->get_field_name( 'image_uri' ); ?>-<?php echo $x ?>" 
                value="<?= $instance['image_uri']; ?>" 
                style="margin-top:5px;" 
            />

            <input 
                type="button" id="<?= $this->id ?>-<?php echo $x ?>" 
                class="button button-primary js_custom_upload_media" value="Upload Image" 
                style="margin-top:5px;" 
            />
        </p>

            <script>
            function media_upload(button_selector) {
                var _custom_media = true,
                    _orig_send_attachment = wp.media.editor.send.attachment;

                 
 
                 
                 
                jQuery('body').on('click', button_selector, function () {
                var button_id = jQuery(this).attr('id');
                wp.media.editor.send.attachment = function (props, attachment) {
                    if (_custom_media) {
                        jQuery('.' + button_id + '_img').attr('src', attachment.url);
                        jQuery('.' + button_id + '_url').val(attachment.url);
                        } else {
                        return _orig_send_attachment.apply(jQuery('#' + button_id), [props, attachment]);
                        }
                    }

                    var window = wp.media({
                                title: 'Insert a media',
                                library: {type: 'image'},
                                multiple: false,
                                button: {text: 'Insert'}
                            });
                    window.on('select', function(){
                        var selection = window.state().get('selection');
                        console.log('thiiiiiiiissss->', selection)
                    });
                    wp.media.editor.open(jQuery('#' + button_id));
                    return false;
                    });
                }
                media_upload('.js_custom_upload_media');
            </script>

            
        <?php
        }
    }
}