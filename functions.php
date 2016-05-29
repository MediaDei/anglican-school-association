<?php

//allow Featured Images in Posts
add_theme_support( 'post-thumbnails' );

//Disable Emoji from WP Core
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );



function scripts_styles() {

    //Deregister Scripts/Styles from WP Core
    wp_deregister_style( 'open-sans' );
    wp_register_style( 'open-sans', false );

    //Register Scripts/Styles
    wp_register_style( 'global-style', get_template_directory_uri() . '/css/global.css');
    wp_register_style('font-awesome-style', get_template_directory_uri() . '/css/font-awesome.min.css');

    //Enqueue Scripts/Styles
    wp_enqueue_script('jquery'); // default jQuery
    wp_enqueue_style('global-style');
    wp_enqueue_style('font-awesome-style');
}
add_action( 'wp_enqueue_scripts', 'scripts_styles');
add_action( 'wp_enqueue_scripts', 'scripts_styles');



//mce code to add custom styles to editor is from https://wponcall.com/add-styles-menu-visual-editor-wordpress-4-0/
// Callback function to insert 'styleselect' into the $buttons array
function media_dei_mce_buttons_2( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}
// Register our callback to the appropriate filter
add_filter('mce_buttons_2', 'media_dei_mce_buttons_2');

// Callback function to filter the MCE settings
function media_dei_mce_before_init_insert_formats( $init_array ) {  
    // Define the style_formats array
    $style_formats = array(  
        // Each array child is a format with it's own settings
        array(  
            'title' => 'Larger Heading Subtext',  
            'block' => 'span',
            'classes' => 'subtext',  
            'wrapper' => true,
        ),
        array(  
            'title' => 'Dropcaps Paragraph: First Letter',  
            'block' => 'span',
            'classes' => 'first-letter',  
            'wrapper' => true,
        ),
        array(  
            'title' => 'Larger Header: Narrow',  
            'block' => 'h2',
            'classes' => 'narrow',  
            'wrapper' => true,
        ),  
    );  
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode( $style_formats );  
    
    return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'media_dei_mce_before_init_insert_formats' );


?>
