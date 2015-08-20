//recording CSS and JS files

function custom_theme_register(){   

 // javascript files 

 wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js',array( 'jquery' ), '1', true );
 // css files    

wp_register_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1','all' );

wp_register_style( 'stylesheet', get_stylesheet_uri(), array(), '1', 'all' );

} 

add_action('wp_enqueue_scripts', 'custom_theme_register');
//include css files

//includem in tema fisierele css inregistrate anterior

function custom_theme_stylesheets(){  

 wp_enqueue_style( 'bootstrap' );    

wp_enqueue_style( 'stylesheet' ); } 

add_action('wp_enqueue_scripts', 'custom_theme_stylesheets');
//include js files

function custom_theme_js(){   

wp_enqueue_script( 'bootstrap-js' ); }

add_action('wp_enqueue_scripts', 'custom_theme_js');
