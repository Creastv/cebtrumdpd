<?php 
function crea_customize_register( $wp_customize ) {
    // Header
    $wp_customize->add_panel( 'header' , array(
        'title' => __( 'Header', 'crea' ),
        'priority' => 110,
	) );

	$wp_customize->add_section( 'header_pl' , array(
	'title' => __( 'Header PL', 'crea' ),
	'priority' => 105,
    'panel' => 'header',
	) );

    $wp_customize->add_section( 'header_en' , array(
	'title' => __( 'Header EN', 'crea' ),
	'priority' => 105,
    'panel' => 'header',
	) );
    // End Header
    // Header PL
	$wp_customize->add_setting( 'logo' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo', array(
		'label' => __( 'Upload Logo ', 'crea' ),
		'section' => 'header_pl',
		'settings' => 'logo',
	) ) );
    $wp_customize->add_setting( 'd_sm_header' );
    $wp_customize->add_control( 'd_sm_header', array(
        'label' => __( 'Display social media' , 'crea' ),
        'type' => 'checkbox',
        'section' => 'header_pl',
    ) );
    $wp_customize->add_setting( 'email_hd' );
    $wp_customize->add_control( 'email_hd', array(
        'label' => __( 'E-mail', 'crea' ),
        'type' => 'text',
        'section' => 'header_pl',
    ) );
    $wp_customize->add_setting( 'email_url_hd' );
    $wp_customize->add_control( 'email_url_hd', array(
        'label' => __( 'E-mail url', 'crea' ),
        'type' => 'text',
        'section' => 'header_pl',
    ) );
    $wp_customize->add_setting( 'phone_hd' );
    $wp_customize->add_control( 'phone_hd', array(
        'label' => __( 'Phone', 'crea' ),
        'type' => 'text',
        'section' => 'header_pl',
    ) );
    $wp_customize->add_setting( 'phone_url_hd' );
    $wp_customize->add_control( 'phone_url_hd', array(
        'label' => __( 'Phone url', 'crea' ),
        'type' => 'text',
        'section' => 'header_pl',
    ) );
    // End Header PL
    // Header EN
    $wp_customize->add_setting( 'logo_en' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_en', array(
		'label' => __( 'Upload Logo ', 'crea' ),
		'section' => 'header_en',
		'settings' => 'logo_en',
	) ) );
    $wp_customize->add_setting( 'd_sm_header_en' );
    $wp_customize->add_control( 'd_sm_header_en', array(
        'label' => __( 'Display social media' , 'crea' ),
        'type' => 'checkbox',
        'section' => 'header_en',
    ) );

    $wp_customize->add_setting( 'email_hd_en' );
    $wp_customize->add_control( 'email_hd_en', array(
        'label' => __( 'E-mail', 'crea' ),
        'type' => 'text',
        'section' => 'header_en',
    ) );
    $wp_customize->add_setting( 'email_url_hd_en' );
    $wp_customize->add_control( 'email_url_hd_en', array(
        'label' => __( 'E-mail url', 'crea' ),
        'type' => 'text',
        'section' => 'header_en',
    ) );
    $wp_customize->add_setting( 'phone_hd_en' );
    $wp_customize->add_control( 'phone_hd_en', array(
        'label' => __( 'Phone', 'crea' ),
        'type' => 'text',
        'section' => 'header_en',
    ) );
    $wp_customize->add_setting( 'phone_url_hd_en' );
    $wp_customize->add_control( 'phone_url_hd_en', array(
        'label' => __( 'Phone url', 'crea' ),
        'type' => 'text',
        'section' => 'header_en',
    ) );
    // End Header

    // Footer
     $wp_customize->add_panel( 'footer' , array(
        'title' => __( 'Footer', 'crea' ),
        'priority' => 110,
	) );

    $wp_customize->add_section( 'footer_en' , array(
        'title' => __( 'Footer EN', 'crea' ),
        'priority' => 110,
        'panel' => 'footer',
	) );
    $wp_customize->add_section( 'footer_pl' , array(
        'title' => __( 'Footer PL', 'crea' ),
        'priority' => 110,
        'panel' => 'footer',
	) );
    // End Footer

    // Footer PL
    $wp_customize->add_setting( 'logo-footer' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo-footer', array(
		'label' => __( 'Upload Logo ', 'crea' ),
		'section' => 'footer_pl',
		'settings' => 'logo-footer',
	) ) );

    $wp_customize->add_setting( 'desc' );
    $wp_customize->add_control( 'desc', array(
        'label' => __( 'Description', 'crea' ),
        'type' => 'textarea',
        'section' => 'footer_pl',
    ) );

    $wp_customize->add_setting( 'address' );
    $wp_customize->add_control( 'address', array(
        'label' => __( 'Address', 'crea' ),
        'type' => 'text',
        'section' => 'footer_pl',
    ) );
    $wp_customize->add_setting( 'address_url' );
    $wp_customize->add_control( 'address_url', array(
        'label' => __( 'Address URL', 'crea' ),
        'type' => 'text',
        'section' => 'footer_pl',
    ) );

    $wp_customize->add_setting( 'phone' );
    $wp_customize->add_control( 'phone', array(
        'label' => __( 'Phone No', 'crea' ),
        'type' => 'text',
        'section' => 'footer_pl',
    ) );
    $wp_customize->add_setting( 'phone_url' );
    $wp_customize->add_control( 'phone_url', array(
        'label' => __( 'Phone No URL', 'crea' ),
        'type' => 'text',
        'section' => 'footer_pl',
    ) );

    $wp_customize->add_setting( 'email' );
    $wp_customize->add_control( 'email', array(
        'label' => __( 'Address e-mail', 'crea' ),
        'type' => 'text',
        'section' => 'footer_pl',
    ) );
     $wp_customize->add_setting( 'email_url' );
    $wp_customize->add_control( 'email_url', array(
        'label' => __( 'Address e-mail URL', 'crea' ),
        'type' => 'text',
        'section' => 'footer_pl',
    ) );
    
	$wp_customize->add_setting( 'copyright-left' );
    $wp_customize->add_control( 'copyright-left', array(
        'label' => __( 'Copyrights (Left)', 'crea' ),
        'type' => 'text',
        'section' => 'footer_pl',
    ) );
  
    $wp_customize->add_setting( 'copyright-right' );
    $wp_customize->add_control( 'copyright-right', array(
        'label' => __( 'Copyrights (right)', 'crea' ),
        'type' => 'text',
        'section' => 'footer_pl',
    ) );
    // End Footer PL
    // Footer EN
    $wp_customize->add_setting( 'logo-footer_en' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo-footer_en', array(
		'label' => __( 'Upload Logo ', 'crea' ),
		'section' => 'footer_en',
		'settings' => 'logo-footer_en',
	) ) );

    $wp_customize->add_setting( 'desc_en' );
    $wp_customize->add_control( 'desc_en', array(
        'label' => __( 'Description', 'crea' ),
        'type' => 'textarea',
        'section' => 'footer_en',
    ) );

    $wp_customize->add_setting( 'address_en' );
    $wp_customize->add_control( 'address_en', array(
        'label' => __( 'Address', 'crea' ),
        'type' => 'text',
        'section' => 'footer_en',
    ) );
    $wp_customize->add_setting( 'address_url_en' );
    $wp_customize->add_control( 'address_url_en', array(
        'label' => __( 'Address URL', 'crea' ),
        'type' => 'text',
        'section' => 'footer_en',
    ) );

    $wp_customize->add_setting( 'phone_en' );
    $wp_customize->add_control( 'phone_en', array(
        'label' => __( 'Phone No', 'crea' ),
        'type' => 'text',
        'section' => 'footer_en',
    ) );
    $wp_customize->add_setting( 'phone_url_en' );
    $wp_customize->add_control( 'phone_url_en', array(
        'label' => __( 'Phone No URL', 'crea' ),
        'type' => 'text',
        'section' => 'footer_en',
    ) );

    $wp_customize->add_setting( 'email_en' );
    $wp_customize->add_control( 'email_en', array(
        'label' => __( 'Address e-mail', 'crea' ),
        'type' => 'text',
        'section' => 'footer_en',
    ) );
    $wp_customize->add_setting( 'email_url_en' );
    $wp_customize->add_control( 'email_url_en', array(
        'label' => __( 'Address e-mail URL', 'crea' ),
        'type' => 'text',
        'section' => 'footer_en',
    ) );
    
	$wp_customize->add_setting( 'copyright-left_en' );
    $wp_customize->add_control( 'copyright-left_en', array(
        'label' => __( 'Copyrights (Left)', 'crea' ),
        'type' => 'text',
        'section' => 'footer_en',
    ) );
  
    $wp_customize->add_setting( 'copyright-right_en' );
    $wp_customize->add_control( 'copyright-right_en', array(
        'label' => __( 'Copyrights (right)', 'crea' ),
        'type' => 'text',
        'section' => 'footer_en',
    ) );
    // End Footer EN

    // Social media
     $wp_customize->add_panel( 'social_media' , array(
        'title' => __( 'Social media', 'crea' ),
        'priority' => 110,
	) );

    $wp_customize->add_section( 'social_media_en' , array(
        'title' => __( 'Social media EN', 'crea' ),
        'priority' => 110,
        'panel' => 'social_media',
	) );
    $wp_customize->add_section( 'social_media_pl' , array(
        'title' => __( 'Social media PL', 'crea' ),
        'priority' => 110,
        'panel' => 'social_media',
	) );
    // END Social media

    // Social media PL
    $wp_customize->add_setting( 'd_social_media', array(
        'default' => 12,
    ) );
    $wp_customize->add_control( 'd_social_media', array(
        'label' => __( 'Display social media' , 'crea' ),
        'type' => 'checkbox',
        'section' => 'social_media_pl',
    ) );

    $wp_customize->add_setting( 'sm-desc' );
    $wp_customize->add_control( 'sm-desc', array(
        'label' => __( 'Social media title', 'crea' ),
        'type' => 'textarea',
        'section' => 'social_media_pl',
    ) );
    $wp_customize->add_setting( 'linkiedin' );
    $wp_customize->add_control( 'linkiedin', array(
        'label' => __( 'Linkiedin', 'crea' ),
        'type' => 'text',
        'section' => 'social_media_pl',
    ) );
    $wp_customize->add_setting( 'facebook' );
    $wp_customize->add_control( 'facebook', array(
        'label' => __( 'Facebook', 'crea' ),
        'type' => 'text',
        'section' => 'social_media_pl',
    ) );
    $wp_customize->add_setting( 'twitter' );
    $wp_customize->add_control( 'twitter', array(
        'label' => __( 'Twitter', 'crea' ),
        'type' => 'text',
        'section' => 'social_media_pl',
    ) );
    $wp_customize->add_setting( 'instagram' );
    $wp_customize->add_control( 'instagram', array(
        'label' => __( 'Instagram', 'crea' ),
        'type' => 'text',
        'section' => 'social_media_pl',
    ) );
    $wp_customize->add_setting( 'pinterest' );
    $wp_customize->add_control( 'pinterest', array(
        'label' => __( 'Pinterest', 'crea' ),
        'type' => 'text',
        'section' => 'social_media_pl',
    ) );
    $wp_customize->add_setting( 'youtube' );
    $wp_customize->add_control( 'youtube', array(
        'label' => __( 'YouTuBe', 'crea' ),
        'type' => 'text',
        'section' => 'social_media_pl',
    ) );
    // END Social media PL

    // Social media EN
    $wp_customize->add_setting( 'd_social_media_en');
    $wp_customize->add_control( 'd_social_media_en', array(
        'label' => __( 'Display social media' , 'crea' ),
        'type' => 'checkbox',
        'section' => 'social_media_en',
    ) );

    $wp_customize->add_setting( 'sm-desc_en' );
    $wp_customize->add_control( 'sm-desc_en', array(
        'label' => __( 'Social media title', 'crea' ),
        'type' => 'textarea',
        'section' => 'social_media_en',
    ) );
    $wp_customize->add_setting( 'linkiedin_en' );
    $wp_customize->add_control( 'linkiedin_en', array(
        'label' => __( 'Linkiedin', 'crea' ),
        'type' => 'text',
        'section' => 'social_media_en',
    ) );
    $wp_customize->add_setting( 'facebook_en' );
    $wp_customize->add_control( 'facebook_en', array(
        'label' => __( 'Facebook', 'crea' ),
        'type' => 'text',
        'section' => 'social_media_en',
    ) );
    $wp_customize->add_setting( 'twitter_en' );
    $wp_customize->add_control( 'twitter_en', array(
        'label' => __( 'Twitter', 'crea' ),
        'type' => 'text',
        'section' => 'social_media_en',
    ) );
    $wp_customize->add_setting( 'instagram_en' );
    $wp_customize->add_control( 'instagram_en', array(
        'label' => __( 'Instagram', 'crea' ),
        'type' => 'text',
        'section' => 'social_media_en',
    ) );
    $wp_customize->add_setting( 'pinterest_en' );
    $wp_customize->add_control( 'pinterest_en', array(
        'label' => __( 'Pinterest', 'crea' ),
        'type' => 'text',
        'section' => 'social_media_en',
    ) );
    $wp_customize->add_setting( 'youtube_en' );
    $wp_customize->add_control( 'youtube_en', array(
        'label' => __( 'YouTuBe', 'crea' ),
        'type' => 'text',
        'section' => 'social_media_en',
    ) );
    // END Social media EN


    // Map
    $wp_customize->add_section( 'map' , array(
	'title' => __( 'Google map', 'crea' ),
	'priority' => 115,
	) );

    // Display map
    $wp_customize->add_setting( 'd-map', array(
        'default' => 12,
    ) );
    $wp_customize->add_control( 'd-map', array(
        'label' => __( 'Display map' , 'crea' ),
        'type' => 'checkbox',
        'section' => 'map',
    ) );

    // Lat
	$wp_customize->add_setting( 'latitude', array(
        'default' => 54.3823818,
    ) );
    $wp_customize->add_control( 'latitude', array(
        'label' => __( 'Latitude', 'crea' ),
        'type' => 'number',
        'section' => 'map',
    ) );
    // Lon
    $wp_customize->add_setting( 'longitude', array(
        'default' => 18.6739476,
    ));
    $wp_customize->add_control( 'longitude', array(
        'label' => __( 'Longitude' , 'crea' ),
        'type' => 'number',
        'section' => 'map',
    ) );
    // Zoom
    $wp_customize->add_setting( 'zoom', array(
        'default' => 12,
    ) );
    $wp_customize->add_control( 'zoom', array(
        'label' => __( 'Zoom' , 'crea' ),
        'type' => 'number',
        'section' => 'map',
    ) );

    // Info address
	$wp_customize->add_setting( 'inf-address', array(
        'default' => 'Your Address',
    ) );
    $wp_customize->add_control( 'inf-address', array(
        'label' => __( 'inf-address', 'crea' ),
        'type' => 'textarea',
        'section' => 'map',
    ) );

     // Info address
	$wp_customize->add_setting( 'inf-address-en', array(
        'default' => 'Your Address',
    ) );
    $wp_customize->add_control( 'inf-address-en', array(
        'label' => __( 'inf-address EN', 'crea' ),
        'type' => 'textarea',
        'section' => 'map',
    ) );

    // Link map
	$wp_customize->add_setting( 'link-map', array(
        'default' => 'https://google.map.com/',
    ) );
    $wp_customize->add_control( 'link-map', array(
        'label' => __( 'Link to map', 'crea' ),
        'type' => 'text',
        'section' => 'map',
    ) );
    // End Map

     // Oferta
    $wp_customize->add_panel( 'offert' , array(
	'title' => __( 'Offert', 'crea' ),
	'priority' => 115,
	) );

    $wp_customize->add_section( 'offert_pl' , array(
	'title' => __( 'Offert PL', 'crea' ),
	'priority' => 105,
    'panel' => 'offert',
	) );

    $wp_customize->add_section( 'offert_en' , array(
	'title' => __( 'Offert EN', 'crea' ),
	'priority' => 105,
    'panel' => 'offert',
	) );
    // Oferta PL
    // Display Oferta
    $wp_customize->add_setting( 'd-offert-sec_pl', array(
        'default' => 12,
    ) );
    $wp_customize->add_control( 'd-offert-sec_pl', array(
        'label' => __( 'Display Offert section' , 'crea' ),
        'type' => 'checkbox',
        'section' => 'offert_pl',
    ) );

     // Title
	$wp_customize->add_setting( 'title_pl', array(
        'default' => 'Poznaj naszą ofertę',
    ) );
    $wp_customize->add_control( 'title_pl', array(
        'label' => __( 'Title', 'crea' ),
        'type' => 'text',
        'section' => 'offert_pl',
    ) );
    // Desc
    $wp_customize->add_setting( 'desc_pl', array(
        'default' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem enim cupiditate aspernatur, sapiente velit nemo optio illum commodi rem officiis magnam rerum accusantium? Cum aut dolore similique eum optio numquam!',
    ));

    $wp_customize->add_control( 'desc_pl', array(
        'label' => __( 'Description' , 'crea' ),
        'type' => 'textarea',
        'section' => 'offert_pl',
    ) );
    // END Oferta PL

    // Oferta EN
    // Display Oferta
    $wp_customize->add_setting( 'd-offert-sec_en', array(
        'default' => 12,
    ) );
    $wp_customize->add_control( 'd-offert-sec_en', array(
        'label' => __( 'Display Offert section' , 'crea' ),
        'type' => 'checkbox',
        'section' => 'offert_en',
    ) );

     // Title
	$wp_customize->add_setting( 'title_en', array(
        'default' => 'Poznaj naszą ofertę',
    ) );
    $wp_customize->add_control( 'title_en', array(
        'label' => __( 'Title', 'crea' ),
        'type' => 'text',
        'section' => 'offert_en',
    ) );
    // Desc
    $wp_customize->add_setting( 'desc_en', array(
        'default' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem enim cupiditate aspernatur, sapiente velit nemo optio illum commodi rem officiis magnam rerum accusantium? Cum aut dolore similique eum optio numquam!',
    ));

    $wp_customize->add_control( 'desc_en', array(
        'label' => __( 'Description' , 'crea' ),
        'type' => 'textarea',
        'section' => 'offert_en',
    ) );
    // END Oferta PL


}

add_action( 'customize_register', 'crea_customize_register' );