<?php

function customizeOptions($wp_customize) {

/*
In order to do 
*/

// Settings and sections arrays

$banner_section = array(

'title'    => __('Banner Customizing options', 'wsxdevstudio'),
'description' => '',
'priority' => 120


);

$socialNetIconsSection = array(

'title' => __('Social netoworks menu options', 'wsxdevstudio'),
'description' => '',
'priority' => 120

);

$Color_section = array(

'title'    => __('Color Customizing options', 'wsxdevstudio'),
'description' => '',
'priority' => 120


);

$Color_Widget_section = array(

'title'    => __('Widget Color Customizing options', 'wsxdevstudio'),
'description' => '',
'priority' => 120


);

$Color_setting = array(

"default" => "",
'capability'     => 'edit_theme_options',

);

$socialNetworksSetting = array(

"default" => "",
'capability'     => 'edit_theme_options',

);


$banner_setting = array(

"default" => "",
'capability'     => 'edit_theme_options',

);

$banner_amount_setting = array(

"default" => "",

);


// Starting the sections


$wp_customize->add_section('banner_WSX', $banner_section);
$wp_customize->add_section('Custom_Colors_WSX', $Color_section);
$wp_customize->add_section('Custom_Widget_Colors_WSX', $Color_Widget_section);
$wp_customize->add_section('SocialIcons_WSX', $socialNetIconsSection);


// Banner customizing creation

$bannerNumbers = 5; // Here you can increase the amount of Banner numbers
$customizeHelper = new WP_CustomizerHelper(); /* The helper class thats is called when  is necessary to create controls
If you have any doubt please check mainClass.php file on WP_CustomizerHelper class*/

for ($i=1;$i<=$bannerNumbers;$i++) {

         $controlArray[$i] = array( 
  
         'label'      => __('Image '.$i, 'wsxdevstudio'),
        'section'    => 'banner_WSX',
        'settings'   => 'banner_WSX_option_'.$i,
        'flex_width'  => true, 
        'flex_height' => false, 
        'width'       => 1920,
         'height'      => 680
         ); 
          


          $setting = array("name" => "banner_WSX_option_".$i, "params" => $banner_setting);

          $control = array("name" => $setting["name"], "params" => $controlArray[$i]);


          $customizeHelper->addImageControl($wp_customize, $setting, $control); 

          $setting = array("name" => "text_WSX_option_".$i, "params" => $banner_setting);
          $control = array("name" => $setting["name"], "params" => array(
          'label'   => 'Caption Banner '.$i.' text here',
          'section' => 'banner_WSX',
           'type'    => 'textarea',
           ));

          $customizeHelper->addTextControl($wp_customize, $setting, $control);

           $setting = array("name" => "title_WSX_option_".$i, "params" => $banner_setting);
          $control = array("name" => $setting["name"], "params" => array(
            'label'   => 'Title Banner '.$i.' text here',
              'section' => 'banner_WSX',
            'type'    => 'text',
            ));

          $customizeHelper->addTextControl($wp_customize, $setting, $control);


$customizeHelper->addTextControl($wp_customize, $setting, $control);

           $setting = array("name" => "link_WSX_option_".$i, "params" => $banner_setting);
          $control = array("name" => $setting["name"], "params" => array(
            'label'   => 'Link Banner '.$i.' url here',
              'section' => 'banner_WSX',
            'type'    => 'text',
            ));

          $customizeHelper->addTextControl($wp_customize, $setting, $control);

}

      // Please dont forget to also increase or decrease choices on control below while you change banners amount above

          $banner_select_control =  array(
        'settings' => 'banner_WSX_qtt',
        'label'   => 'Select the amount of slides to be used',
        'section' => 'banner_WSX',
        'type'    => 'select',
        'choices'    => array(
          '0' => 0,
            '1' => 1,
            '2' => 2,
            '3' => 3,
            '4' => 4,
            '5' => 5,
          )); 

           $setting = array("name" => 'banner_WSX_qtt', "params" => $banner_amount_setting);
           $control = array("name" => $setting["name"], "params" => $banner_select_control);
           $customizeHelper->addSimpleControl($wp_customize, $setting, $control); 


// Create Cutomizing controls for colors


        

             $setting = array("name" => "menu_anchor_color", "params" => $Color_setting );
             $colorControl = array(
                                    'label'      => __( 'Menu Anchor Color', 'wsxdevstudio' ),
                                    'section'    => 'Custom_Colors_WSX',
                                    'settings'   => $setting["name"],
                                  );
             $control = array("name" => $setting["name"], "params" => $colorControl);
                          

            $customizeHelper->addColorControl($wp_customize, $setting, $control);
// End of creation


             $setting = array("name" => "top_header_bg_color", "params" => $Color_setting );
             $colorControl = array(
                                    'label'      => __( 'Header Bg Color', 'wsxdevstudio' ),
                                    'section'    => 'Custom_Colors_WSX',
                                    'settings'   => $setting["name"],
                                    );
             $control = array("name" => $setting["name"], "params" => $colorControl);
                          

            $customizeHelper->addColorControl($wp_customize, $setting, $control);



// End of creation

 $setting = array("name" => "anchors_color", "params" => $Color_setting );
             $colorControl = array(
                                    'label'      => __( 'Anchors color', 'wsxdevstudio' ),
                                    'section'    => 'Custom_Colors_WSX',
                                    'settings'   => $setting["name"],
                                    );
             $control = array("name" => $setting["name"], "params" => $colorControl);
                          

            $customizeHelper->addColorControl($wp_customize, $setting, $control);

            

// End of creation


 $setting = array("name" => "anchors_hover_color", "params" => $Color_setting );
             $colorControl = array(
                                    'label'      => __( 'Anchors hover color', 'wsxdevstudio' ),
                                    'section'    => 'Custom_Colors_WSX',
                                    'settings'   => $setting["name"],
                                    );
             $control = array("name" => $setting["name"], "params" => $colorControl);
                          

            $customizeHelper->addColorControl($wp_customize, $setting, $control);

            

// End of creation

 $setting = array("name" => "anchor_breadcrumb_color", "params" => $Color_setting );
             $colorControl = array(
                                    'label'      => __( 'Breadcrumb link color', 'wsxdevstudio' ),
                                    'section'    => 'Custom_Colors_WSX',
                                    'settings'   => $setting["name"],
                                    );
             $control = array("name" => $setting["name"], "params" => $colorControl);
                          

            $customizeHelper->addColorControl($wp_customize, $setting, $control);

            

// End of creation

 $setting = array("name" => "foooter_bg_color", "params" => $Color_setting );
             $colorControl = array(
                                    'label'      => __( 'Footer content color', 'wsxdevstudio' ),
                                    'section'    => 'Custom_Colors_WSX',
                                    'settings'   => $setting["name"],
                                    );
             $control = array("name" => $setting["name"], "params" => $colorControl);
                          

            $customizeHelper->addColorControl($wp_customize, $setting, $control);

            

// End of creation

 $setting = array("name" => "anchor_breadcrumb_hover_color", "params" => $Color_setting );
             $colorControl = array(
                                    'label'      => __( 'Breadcrumb link hover color', 'wsxdevstudio' ),
                                    'section'    => 'Custom_Colors_WSX',
                                    'settings'   => $setting["name"],
                                    );
             $control = array("name" => $setting["name"], "params" => $colorControl);
                          

            $customizeHelper->addColorControl($wp_customize, $setting, $control);

            

// End of creation

$setting = array("name" => "breadcrumb_border_color", "params" => $Color_setting );
             $colorControl = array(
                                    'label'      => __( 'Breadcrumb Border Bottom Color', 'wsxdevstudio' ),
                                    'section'    => 'Custom_Colors_WSX',
                                    'settings'   => $setting["name"],
                                  );
             $control = array("name" => $setting["name"], "params" => $colorControl);
                          

            $customizeHelper->addColorControl($wp_customize, $setting, $control);

// End of creation



 $setting = array("name" => "wg_title_color", "params" => $Color_setting );
             $colorControl = array(
                                    'label'      => __( 'Widget Titlecolor', 'wsxdevstudio' ),
                                    'section'    => 'Custom_Widget_Colors_WSX',
                                    'settings'   => $setting["name"],
                                    );
             $control = array("name" => $setting["name"], "params" => $colorControl);
                          

            $customizeHelper->addColorControl($wp_customize, $setting, $control);

            

// End of creation

// Below url settings for social header top menu icons

// Facebook URL Setting

$customizeHelper->addTextControl($wp_customize, $setting, $control);

           $setting = array("name" => "facebook_url", "params" => $banner_setting);
          $control = array("name" => $setting["name"], "params" => array(
            'label'   => 'Url to Facebook page here',
              'section' => 'SocialIcons_WSX',
            'type'    => 'text',
            ));

          $customizeHelper->addTextControl($wp_customize, $setting, $control);

          // Google + URL Setting

$customizeHelper->addTextControl($wp_customize, $setting, $control);

           $setting = array("name" => "google+_url", "params" => $banner_setting);
          $control = array("name" => $setting["name"], "params" => array(
            'label'   => 'Url to Google+ page here',
              'section' => 'SocialIcons_WSX',
            'type'    => 'text',
            ));

          $customizeHelper->addTextControl($wp_customize, $setting, $control);

        // Linked in URL Setting

$customizeHelper->addTextControl($wp_customize, $setting, $control);

           $setting = array("name" => "linkedin_url", "params" => $banner_setting);
          $control = array("name" => $setting["name"], "params" => array(
            'label'   => 'Url to linkedin page here',
              'section' => 'SocialIcons_WSX',
            'type'    => 'text',
            ));

          $customizeHelper->addTextControl($wp_customize, $setting, $control);

            // Twitter URL Setting

$customizeHelper->addTextControl($wp_customize, $setting, $control);

           $setting = array("name" => "twitter_url", "params" => $banner_setting);
          $control = array("name" => $setting["name"], "params" => array(
            'label'   => 'Url to Twitter page here',
              'section' => 'SocialIcons_WSX',
            'type'    => 'text',
            ));

          $customizeHelper->addTextControl($wp_customize, $setting, $control);


}






?>