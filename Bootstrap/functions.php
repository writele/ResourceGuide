 <?php

function wpe_theme_styles() {
    
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'main_font', get_template_directory_uri() . 'http://fonts.googleapis.com/css?family=Montserrat:400,700' );
        wp_enqueue_style( 'font_awesome', get_template_directory_uri() . 'font-awesome-4.1.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'secondary_font', get_template_directory_uri() . 'http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'wpe_theme_styles' );

function wpe_theme_js() {
    wp_enqueue_script('bootstrap', get_template_directory_uri() . 'js/bootstrap.min.js', '', '', true);
    wp_enqueue_script('ajaxjs', get_template_directory_uri() . 'http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js', '', '', true);
    wp_enqueue_script('classie', get_template_directory_uri() . 'js/classie.js', '', '', true);
    wp_enqueue_script('AnimatedHeader', get_template_directory_uri() . 'js/cbpAnimatedHeader.js', '', '', true);
    wp_enqueue_script('BootstrapValidation', get_template_directory_uri() . 'js/jqBootstrapValidation.js', '', '', true);
        wp_enqueue_script('ContactMe', get_template_directory_uri() . 'js/contact_me.js', '', '', true);
        wp_enqueue_script('Freelancer', get_template_directory_uri() . 'freelancer.js', '', '', true);   
}

add_action( 'wp_enqueue_scripts', 'wpe_theme_js');

?>
    
    