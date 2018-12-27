<?php
//include 'inc/addPostType.php';
//include 'inc/widgets.php';


add_filter('nav_menu_link_attributes', 'add_class_a', 100, 1);
if (!function_exists('base_theme_enqueue_styles')) {
    /**
     * Enqueue scripts
     *
     * @param string $handle Script name
     * @param string $src Script url
     * @param array $deps (optional) Array of script names on which this script depends
     * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
     * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
     */
    function base_theme_enqueue_styles()
    {
        /*
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', get_stylesheet_directory_uri().'/vendor/jquery/jquery-2.2.4.js', array(), false, true);
        wp_enqueue_script('boostrap-js', get_stylesheet_directory_uri().'/vendor/bootstrap-3.3.7-dist/js/bootstrap.min.js', array('jquery'), false, true);
        */
        wp_enqueue_script('mainJs', get_stylesheet_directory_uri().'/js/main.js', array('boostrap-js'), false, true);
        //wp_enqueue_style('boostrap-css', get_stylesheet_directory_uri() . '/vendor/bootstrap-3.3.7-dist/css/bootstrap.min.css');
        wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.min.css');
    }
    add_action('wp_enqueue_scripts', 'base_theme_enqueue_styles');
}

function wp_base_theme_theme_setup(){
    /*
     * Signale à WordPress que votre theme possède des traductions
     */
    load_theme_textdomain( 'wp-theme-base-translate', get_template_directory() . '/languages' );
    /*
     * Ajout du champs "Image à la Une" dans les articles
     */
    add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'wp_base_theme_theme_setup' );
add_theme_support( 'post-thumbnails' );

add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'Caroussel',
        array(
            'labels' => array(
                'name' => __( 'Caroussels' ),
                'singular_name' => __( 'Caroussel' )
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
        )
    );

    register_post_type( 'Atouts',
        array(
            'labels' => array(
                'name' => __( 'Atouts' ),
                'singular_name' => __( 'Atout' )
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
        )
    );
}


register_nav_menus(array(
    'main-menu' => __('Menu primaire', 'menu-primaire')
));

add_theme_support( 'post-thumbnails' );

function base_theme_enqueue_styles()
{

    //wp_enqueue_script('mainJs', get_stylesheet_directory_uri().'/js/main.js', array('boostrap-js'), false, true);

    wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/css/jbootstrap.min.js', array( 'jquery' ), null, true );

    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
    //wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.min.css');
}

add_action('wp_enqueue_scripts', 'base_theme_enqueue_styles');

function wp_base_theme_widgets_init() {

    register_sidebar( array(
        'name'          => __( 'widget_footer', 'wp-theme-base-translate' ),
        'id'            => 'footer1',
        'description'   => __( 'Ajout d\'un bloc texte ou autre sur le site', 'wp-theme-base-translate' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'widget_cv', 'wp-theme-base-translate' ),
        'id'            => 'cv1',
        'description'   => __( 'Ajout d\'un bloc texte ou autre sur le site', 'wp-theme-base-translate' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'widget_maps', 'wp-theme-base-translate' ),
        'id'            => 'maps',
        'description'   => __( 'Ajout d\'une map sur la page', 'wp-theme-base-translate' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'widget_social', 'wp-theme-base-translate' ),
        'id'            => 'social',
        'description'   => __( 'Ajout des liens vers les réseaux sociaux', 'wp-theme-base-translate' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'wp_base_theme_widgets_init' );



/*
    FONCTIONS RELATIVES AU MENU
 ****/


/*
 * Signale à WordPress que le thème possède des menus
 */
register_nav_menus(
    array(
        'main-menu' => 'Description du menu',
        'footer-menu' => 'Description du menu footer',
    )
);

// Version bootstrap
function add_additional_class_on_li($classes, $item, $args)
{
    $classes[] = 'nav-item';
    return $classes;
}

add_filter('nav_menu_css_class', 'add_additional_class_on_li', 0, 3);

function add_class_a($atts)
{
    $atts['class'] = "nav-link";
    return $atts;
}

add_filter('nav_menu_link_attributes', 'add_class_a', 100, 1);


/*
 * Relatif au formulaire
 */


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if(isset($_POST['contact'])){

        switch ($_POST['contact']) {
            case "validation":
                $_SESSION["formSubmit"] = "Données reçues avec succès !";
                $log = fopen( __DIR__."/logs/log.txt", "a");
                $txt = date("Y-m-d H:i:s"). " \n Nom : " . $_POST['name'] . " \n Email : ". $_POST['email'] . " \n Telephone : ". $_POST['phone']. "\n \n";
                fwrite($log, $txt);
                fclose($log);
                wp_redirect(get_permalink(5));
                exit;
                break;
            case "envoyer":
                $_SESSION["formSubmit"] = "Données reçues avec succès !";
                $log = fopen( __DIR__."/logs/contact.txt", "a");
                $txt = date("Y-m-d H:i:s"). " \n Nom : " . $_POST['name'] . " \n Email : ". $_POST['email'] . " \n Objet : ". $_POST['title']. " \n Message : ". $_POST['message']. "\n \n";
                fwrite($log, $txt);
                fclose($log);
                wp_redirect(get_permalink(14));
                exit;
                break;
        }
    }
}


/*
 * ACF
 */

function acf_json_save_point( $path ) {
    $path = get_stylesheet_directory() . '/acf-json';
    return $path;
}
add_filter('acf/settings/save_json', 'acf-json');



add_action( 'after_setup_theme', 'pdw_theme_setup' );

function pdw_theme_setup(){
    load_theme_textdomain( 'wp-theme-base-translate', get_template_directory() . '/languages' );
}


/*
 * Fil d'Ariane
 */

function GkAriane() {

    if (is_page() && !is_front_page() || is_single() || is_category()) {

        echo'<section id="pagetitle-container">
                    <div class="uk-container">
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <!-- Breadcrumb begin -->
            <ul class="uk-breadcrumb uk-margin-top uk-float-right">';
            echo '<li><a href="'.get_option('home').'"> Home </a></li>';

            if (is_page())
            {
                $myAncestors = get_post_ancestors($post);
                if ($myAncestors)
                {
                    $myAncestors = array_reverse($myAncestors);
                    foreach ($myAncestors as $crumb)
                    {
                        echo '<li><a href="'.get_permalink($crumb).'">'.get_the_title($crumb).'</a></li> ';
                    }
                }
            }
            if (is_category())
            {
                echo '<li>'.ucfirst(strtolower(single_term_title('', false))).'<li>';
            }

            if (is_single())
            {
                $category = get_the_category();
                echo '<li><a href="'.get_category_link($category[0]->cat_ID).'">'.ucfirst(strtolower($category[0]->cat_name)).'</a></li>';
            }

            if (is_page() || is_single())
            {
              //  the_category(' ');
                echo '<li>'.the_title('', '', false).'</li>';
            }
            echo '</ul>';

    }
    echo '</div></div></div></section>';

}