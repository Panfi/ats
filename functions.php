<?php


/*__________________Stylesheets___________________________*/

function theme_styles(){
    
    wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');
    
}

add_action('wp_enqueue_scripts', 'theme_styles');


/*__________________Javascripts___________________________*/ 

function theme_js(){
    
    global $wp_scripts;

    wp_register_script('html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js', '', '', false );
    wp_register_script('respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false );
    

    $wp_scripts->add_data('html5_shiv', 'conditional', 'lt IE 9');
    $wp_scripts->add_data('respond_js', 'conditional', 'lt IE 9');

    wp_enqueue_script('menu_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', '','', true);
     

}   

add_action('wp_enqueue_scripts', 'theme_js');
add_filter('show_admin_bar', '__return_false');

add_theme_support('menus');
add_theme_support('post-thumbnails');

/*__________________custom logo___________________________*/

// add_theme_support( 'custom-logo', array(
//     'height'      => 65,
//     'width'       => 250,
//     'flex-width' => true,
// ) );

/*__________________menu___________________________*/

register_nav_menus( array(
    'primary' => esc_html__( 'Primary', 'ats-lab' ),
) );

 /*__________________widgets___________________________*/

function create_widget($name, $id, $description){
    
        register_sidebar(array(
            'name'  =>  __($name),
            'id'    => $id,
            'description' => __($description),
            'before_widget' => '<div class="widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'  => '</h2>'
        ));
}

create_widget('Hexagon footer', 'hexagon-block', 'Hexagon goes here');
create_widget('Hexagon footer2', 'hexagon-block2', 'Hexagon2 goes here');
create_widget('Testing Methods', 'testing-block', 'Testing content goes here');
create_widget('Specialised Testing', 'testing2-block', 'Specialised Testing content goes here');
create_widget('Accreditations', 'accredt-block', 'Accredtitations content goes here');
create_widget('About Us', 'about-block', 'About content goes here');
create_widget('Training', 'training-block', 'Training content goes here');
create_widget('Research', 'research-block', 'Research content goes here');
create_widget('Contact', 'contact-block', 'Contact content goes here');
create_widget('Contact details', 'contact-details', 'Contact details content goes here');
create_widget('Enquiry', 'enquiry-block', 'Enquiry content goes here');
create_widget('Testing Methods 2', 'test-method-block', 'Testing Methods content goes here');

