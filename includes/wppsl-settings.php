<?php
/**
 * Created by PhpStorm.
 * User: emmanuel
 * Date: 31/01/2019
 * Time: 8:33 PM
 */



//creat menulink in settings
/*they have to atleaste be able to manage options*/
function wppsl_options_menu_link(){
    add_options_page(
        'Wordpress Social Connect Options',
        'Wordpress Social Connect',
        'manage_options',
        'wppsl-options',
          'wppsl_options_content'

    );
}

//create option page content

function wppsl_options_content(){

    //init options global

    global $wppsl_options;

    ob_start(); ?>
   <div class="wrap">
       <h2><?php _e('Wordpress Social Connect Settings', 'wppsl_domain');?></h2>
       <p><?php _e('Settings for the Wordpress Social Connect Plugin', 'wppsl_domain');?></p>
       <form method="post" action="options.php">
            <?php settings_fields('wppsl_settings_group'); ?>
           <table class="form-table">
              <thead>
               <tbody>
                 <tr>
                   <th scope="row">
                       <label for="wppsl_settings[enable]"><?php _e('Enable', 'wppsl_domain');?></label>
                   </th>
                   <td><input type="checkbox" name="wppsl_settings[enable]" id="wppsl_settings[enable]" value="1" <?php checked('1',$wppsl_options['enable'])?>></td>
                 </tr>
                 <tr>
                     <th scope="row">
                         <label for="wppsl_settings[facebook_url]"><?php _e('Facebook Url', 'wppsl_domain');?></label>
                     </th>
                     <td><input type="text" name="wppsl_settings[facebook_url]" id="wppsl_settings[facebook_url]" value="<?php echo $wppsl_options['facebook_url']?>" class="regular-text">
                        <p class="description"><?php _e('Enter your facebook profile URL', 'wppsl_domain')?></p>
                     </td>
                 </tr>
                 <tr>
                     <th scope="row">
                         <label for="wppsl_settings[twitter_url]"><?php _e('Twitter Url', 'wppsl_domain');?></label>
                     </th>
                     <td><input type="text" name="wppsl_settings[twitter_url]" id="wppsl_settings[twitter_url]" value="<?php echo $wppsl_options['twitter_url']?>" class="regular-text">
                         <p class="description"><?php _e('Enter your twitter profile URL', 'wppsl_domain')?></p>
                     </td>
                 </tr>
                 <tr>
                     <th scope="row">
                         <label for="wppsl_settings[instagram_url]"><?php _e('Instagram Url', 'wppsl_domain');?></label>
                     </th>
                     <td><input type="text" name="wppsl_settings[instagram_url]" id="wppsl_settings[instagram_url]" value="<?php echo $wppsl_options['instagram_url']?>" class="regular-text">
                         <p class="description"><?php _e('Enter your instagram profile URL', 'wppsl_domain')?></p>
                     </td>
                 </tr>
                 <tr>
                     <th scope="row">
                         <label for="wppsl_settings[linkedin_url]"><?php _e('LinkedIn Url', 'wppsl_domain');?></label>
                     </th>
                     <td><input type="text" name="wppsl_settings[linkedin_url]" id="wppsl_settings[linkedin_url]" value="<?php echo $wppsl_options['linkedin_url']?>" class="regular-text">
                         <p class="description"><?php _e('Enter your linkedin profile URL', 'wppsl_domain')?></p>
                     </td>
                 </tr>
                 <tr>
                     <th scope="row">
                         <label for="wppsl_settings[link_color]"><?php _e('Link Color', 'wppsl_domain');?></label>
                     </th>
                     <td><input type="text" name="wppsl_settings[link_color]" id="wppsl_settings[link_color]" value="<?php echo $wppsl_options['link_color']?>" class="regular-text">
                         <p class="description"><?php _e('Enter your color or a HEX', 'wppsl_domain')?></p>
                     </td>
                 </tr>

                 <tr>
                     <th scope="row">
                         <label for="wppsl_settings[show_in_feed]"><?php _e('Show In Post Feed', 'wppsl_domain');?></label>
                     </th>
                     <td><input type="checkbox" name="wppsl_settings[show_in_feed]" id="wppsl_settings[show_in_feed]" value="1" <?php checked('1',$wppsl_options['show_in_feed'])?>></td>
                 </tr>
             </tbody>
           </table>
           <p class="submit">
               <input type="submit" class="button button-primary" name="submit" value="<?php _e('Save Changes','wppsl_domain')?>">
           </p>
       </form>
   </div>


<?php
    echo ob_get_clean();

}


add_action('admin_menu','wppsl_options_menu_link' );

//register the options

function wppsl_register_settings(){
    register_setting('wppsl_settings_group','wppsl_settings');
}

add_action('admin_init','wppsl_register_settings');