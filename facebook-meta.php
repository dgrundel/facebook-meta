<?php /*
    Plugin Name: Facebook Meta
    Plugin URI: http://webpresencepartners.com
    Description: Adds Facebook Metadata
    Version: 1.0
    Author: Daniel Grundel, Web Presence Partners
    Author URI: http://www.webpresencepartners.com
*/

    class FacebookMeta {
        public function __construct() {
            add_action('wp_head', array(&$this, 'meta_tags'));
        }

        public function meta_tags() {
            if(is_singular()) {
                global $post;
                ?>
                <meta property="og:url" content="<?php echo esc_attr(get_permalink($post->ID)); ?>"/>
                <meta property="og:title" content="<?php echo esc_attr(get_the_title($post->ID)); ?>"/>
                <meta property="og:description" content="<?php echo esc_attr(apply_filters('get_the_excerpt', strip_tags($post->post_excerpt))); ?>"/>
                <meta property="og:image" content="<?php echo esc_attr(wp_get_attachment_url(get_post_thumbnail_id($post->ID))); ?>"/>
                <?php
            }
        }
    }
    new FacebookMeta();