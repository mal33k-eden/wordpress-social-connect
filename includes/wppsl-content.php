<?php

/**
 * Proper way to enqueue scripts and styles.
 */
function wppsl_add_footer($content) {

    global $wppsl_options;

   $footer_output  = '<hr>';
   $footer_output .= '<div class="footer_content">';
    if($wppsl_options['facebook_url'] || $wppsl_options['twitter_url'] || $wppsl_options['instagram_url'] || $wppsl_options['linkedin_url']){
        $footer_output .= 'Follow Me On ';
    }
    if($wppsl_options['facebook_url'] ){
        $footer_output .= '<span class="pd-l"><a style="color:'.$wppsl_options['link_color'].';" href="'.$wppsl_options['facebook_url'].'"><span class="dashicons dashicons-facebook"></span> Facebook</a></span>';
    }
    if( $wppsl_options['twitter_url'] ){
        $footer_output .= '<span class="pd-l"><a style="color:'.$wppsl_options['link_color'].';" href="'.$wppsl_options['twitter_url'].'"><span class="dashicons dashicons-twitter"></span> Twitter</a></span>';
    }
    if(  $wppsl_options['instagram_url']){
        $footer_output .= '<span class="pd-l"><a style="color:'.$wppsl_options['link_color'].';" href="'.$wppsl_options['instagram_url'].'"><span class="dashicons dashicons-format-image"></span> Instagram</a></span>';
    }
    if(  $wppsl_options['linkedin_url']){
        $footer_output .= '<span class="pd-l"><a style="color:'.$wppsl_options['link_color'].';" href="'.$wppsl_options['linkedin_url'].'"><span class="dashicons dashicons-businessman"></span> LinkedIn</a></span>';
    }


   $footer_output .= '</div>';

   if($wppsl_options['show_in_feed']){

       if(is_single() || is_home() && $wppsl_options['enable']){
           return $content . $footer_output;
       }

   }else{
       if(is_single()  && $wppsl_options['enable']){
           return $content . $footer_output;
       }
   }


    return $content;

}

add_filter('the_content','wppsl_add_footer');