<?php 

// Main Panel
new \Kirki\Panel(
	'foodhut_panel_id',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'FoodHut Options', 'kirki' ),
		'description' => esc_html__( 'My Panel Description.', 'kirki' ),
	]
);

// Header 
function header_info_kirki(){
    // Header Section
    new \Kirki\Section(
        'header_left_menu',
        [
            'title'       => esc_html__( 'Header Left Menu', 'kirki' ),
            'description' => esc_html__( 'This is header left menu widget', 'kirki' ),
            'panel'       => 'foodhut_panel_id',
            'priority'    => 160,
        ]
    );
}
header_info_kirki();


// Header 
function header_logo_kirki(){
    // Header Section
    new \Kirki\Section(
        'header_logo',
        [
            'title'       => esc_html__( 'Header Main Logo', 'kirki' ),
            'description' => esc_html__( 'Upload Your Logo', 'kirki' ),
            'panel'       => 'foodhut_panel_id',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'header_logo',
            'label'       => esc_html__( 'Header Logo', 'kirki' ),
            'description' => esc_html__( 'Upload Your Logo Here', 'kirki' ),
            'section'     => 'header_logo',
            'default'     => get_template_directory_uri().'/assets/imgs/logo.svg',
        ]
    );
}
header_logo_kirki();



// Footer 
function footer_info_kirki(){
    // Footer Section
    new \Kirki\Section(
        'footer_info',
        [
            'title'       => esc_html__( 'Footer Info', 'kirki' ),
            'description' => esc_html__( 'My Section Description.', 'kirki' ),
            'panel'       => 'foodhut_panel_id',
            'priority'    => 160,
        ]
    );
    
    new \Kirki\Field\Text(
        [
            'settings' => 'email_address',
            'label'    => esc_html__( 'Enter Your Email', 'kirki' ),
            'section'  => 'footer_info',
            'default'  => esc_html__( 'info@website.com', 'kirki' ),
            'priority' => 10,
        ]
    );
    
    new \Kirki\Field\Text(
        [
            'settings' => 'phone_number',
            'label'    => esc_html__( 'Enter Your Phone Number', 'kirki' ),
            'section'  => 'footer_info',
            'default'  => esc_html__( '(123) 456-7890', 'kirki' ),
            'priority' => 10,
        ]
    );
    
    new \Kirki\Field\Text(
        [
            'settings' => 'address',
            'label'    => esc_html__( 'Enter Your Phone Address', 'kirki' ),
            'section'  => 'footer_info',
            'default'  => esc_html__( '12345 Fake ST NoWhere AB Country', 'kirki' ),
            'priority' => 10,
        ]
    );
    
    new \Kirki\Field\Text(
        [
            'settings' => 'copywright_text',
            'label'    => esc_html__( 'Enter Your Copywright Text', 'kirki' ),
            'section'  => 'footer_info',
            'default'  => esc_html__( '&copy; Copyright 2024 Made with <i class="ti-heart text-danger"></i> By <a href="#">DevCRUD</a>', 'kirki' ),
            'priority' => 10,
        ]
    );
}
footer_info_kirki();
