<?php
if ( !defined('ABSPATH')) exit;
/**
 * Theme's Functions and Definitions
 * @file           functions.php
 * @package        terral 
**/

add_post_type_support('page', 'excerpt');
add_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');

//=================================================================== OPTIONS PAGE// 
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' => 'Seleccionar Temporada',
        'menu_title' => 'Temporada vigente',
        'menu_slug' => 'seleccion ar-temporada',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

//=================================================================== IMAGES//   
function wpse_setup_theme() {
    add_theme_support( 'post-thumbnails' );
    if ( function_exists( 'add_theme_support') ) {
        set_post_thumbnail_size( 200, 200, true ); 
    }
    if ( function_exists( 'add_image_size' ) ) { 
        add_image_size( 'thumb-image', 70, 70, array('center', 'center'));
        add_image_size( 'home', 270, 230, true);
        add_image_size( 'int', 344, 214, true);
        add_image_size( 'int-valle', 350, 170, array('center', 'center'));
        add_image_size( 'rest', 705, 250, array('center', 'center'));
        add_image_size( 'hab', 370, 250, array('center', 'center'));
        add_image_size( 'hab-detalle', 360, 220, array('center', 'center'));
        add_image_size( 'gal-image', 2000, 750, array('center', 'center'));
        add_image_size( 'wide', 1064, 250, array('center', 'center'));
        add_image_size( 'header-img', 2000, 768, array('center', 'center'));
    }
} 
add_action( 'after_setup_theme', 'wpse_setup_theme' );

//=================================================================== REMOVE IN WOOCOMMERCE//
add_filter( 'woocommerce_product_tabs', 'wcs_woo_remove_reviews_tab', 98 );
function wcs_woo_remove_reviews_tab($tabs) {
    unset($tabs['reviews']);
    return $tabs;
}
remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb', 20, 0);

//=================================================================== REMOVE FIELDS WOOCOMMERCE//
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
function custom_override_checkout_fields( $fields ) {
    unset($fields['order']['order_comments']);
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_state']);
    return $fields;
}

//=================================================================== IS CHILD// 
function is_child($pageID) { 
    global $post; 
    if( is_page() && ($post->post_parent==$pageID) ) {
        return true;
    } else { 
        return false; 
    }
}

//=================================================================== CUT OFF// 
function short_title($after = '', $length) {
    $mytitle = explode(' ', get_the_title(), $length);
    if (count($mytitle)>=$length) {
        array_pop($mytitle);
        $mytitle = implode(" ",$mytitle). $after;
    } else {
        $mytitle = implode(" ",$mytitle);
    }
    return $mytitle;
}

function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
    } else {
        $excerpt = implode(" ",$excerpt);
    } 
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt;
}

function content($limit) {
    $content = explode(' ', get_the_content(), $limit);
    if (count($content)>=$limit) {
        array_pop($content);
        $content = implode(" ",$content).'...';
    } else {
        $content = implode(" ",$content);
    } 
    $content = preg_replace('/\[.+\]/','', $content);
    $content = apply_filters('the_content', $content); 
    $content = str_replace(']]>', ']]&gt;', $content);
    return $content;
}

//=================================================================== CUSTOM ADMIN LOGO// 
function custom_login_logo() {
    echo '<style type="text/css">
        body.login {background-image:url('.get_bloginfo('template_directory').'/imag/main/main_nocturnos.png) !important; background-size:100% auto !important;}
        h1 a { background-image:url('.get_bloginfo('template_directory').'/imag/logo/logo_terral_admin.png) !important; background-size:320px 67px !important; width:320px !important; height:67px !important;}
        .login #backtoblog a, .login #nav a {color:#ffffff;}
    </style>';
}

add_action('login_head', 'custom_login_logo');

//=================================================================== REMOVE ADMIN MENUS// 
function remove_menus () {
global $menu;
    $restricted = array(__('Links'),__('Comments'));
    end ($menu);
    while (prev($menu)){
        $value = explode(' ',$menu[key($menu)][0]);
        if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
    }
}
add_action('admin_menu', 'remove_menus');

//=================================================================== CUSTOM FUNCTIONS//
/**
 * Get active section from Request URI
 * @return string post_name of the active section
 */
function section_from_url(){
	global $wpdb;
	$url = $_SERVER['REQUEST_URI'];
	$first_level_pages = $wpdb->get_results("SELECT ID, post_name, post_title FROM $wpdb->posts WHERE post_type = 'page' AND post_parent = 0 AND post_status = 'publish'");
	foreach ( $first_level_pages as $section ) {
		if ( stristr($url, '/'.$section->post_name.'/') ) $out = $section;
	}
	$out->post_title = apply_filters('the_title', $out->post_title);
	return $out;
}

/**
 * Get post/page/attachment ID by post_name (sanitized title)
 * @param string $name The post_name of the object
 * @return integer Object ID in $wpdb->posts
 */
function get_id_by_postname($name){
global $wpdb;
    return $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '$name' AND post_status = 'publish'");
}

/**
 * Get permalink by the post_name of the post/page
 * @param string post_name of the object
 * @return string Object permalink
 */
function get_permalink_by_postname($name){
global $wpdb;
	return get_permalink($wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE (post_name = '$name' AND post_status = 'publish') AND (post_type = 'page' OR post_type = 'post')"));
}

function get_attachment_id_from_src ($link) {
    global $wpdb;
        $link = preg_replace('/-\d+x\d+(?=\.(jpg|jpeg|png|gif)$)/i', '', $link);
        return $wpdb->get_var("SELECT ID FROM {$wpdb->posts} WHERE guid='$link'");
}

//=================================================================== PARENT PAGES//
function home_pages($args){
global $wpdb;
    // Defaults
    $defaults = array( 'id' => $hpage->ID, 'class' => 'hpage', 'excerpt' => true, 'content' => false, 'childs' => false, 'exclude' => true );
    $r = wp_parse_args( $args, $defaults );
    extract( $r, EXTR_SKIP );

    if($exclude != 'false') $home_pages = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE (post_type = 'page' AND post_parent = ".$id.") AND (post_status = 'publish' AND menu_order >= 0) ORDER BY menu_order ASC");
    else $home_pages = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE (post_type = 'page' AND post_parent = ".$id.") AND post_status = 'publish' ORDER BY menu_order ASC");
    if(!empty($home_pages)){
        $i = 0; $home_pages_size = count($home_pages) - 1;
        foreach($home_pages as $hpages){
            if ( $i === 0 ) $pos = ''; elseif ( $i === $home_pages_size ) $pos = 'bloque'; else $pos = 'bloque';
            if($hpages->menu_order >= 0){
                $value = get_post_meta($hpages->ID, '_seleccione_estilo_de_titulo', true);
                echo '<div class="block col-xs-4">';
                    echo get_the_post_thumbnail($hpages->ID, 'home', array('class' => 'img-responsive'));
                        if($value=='Una línea'){echo '<div class="title block-1">';}
                        if($value=='Dos líneas'){echo '<div class="title block-2">';}
                        if($value=='Tres líneas'){echo '<div class="title block-3">';}
                        echo '<h2><a href="'.get_permalink($hpages->ID).'">'.get_the_title($hpages->ID).'</a></h2>';
                    echo '</div>';
                echo '</div>';
            $i++; }
        }
    }
}

//=================================================================== PARENT PAGES//
function child_pages($args){
global $wpdb;
    // Defaults
    $defaults = array( 'id' => $cpage->ID, 'class' => 'cpage', 'excerpt' => true, 'content' => false, 'childs' => false, 'exclude' => true );
    $r = wp_parse_args( $args, $defaults );
    extract( $r, EXTR_SKIP );

    if($exclude != 'false') $child_pages = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE (post_type = 'page' AND post_parent = ".$id.") AND (post_status = 'publish' AND menu_order >= 0) ORDER BY menu_order ASC");
    else $child_pages = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE (post_type = 'page' AND post_parent = ".$id.") AND post_status = 'publish' ORDER BY menu_order ASC");
    if(!empty($child_pages)){
        $i = 0; $child_pages_size = count($child_pages) - 1;
        foreach($child_pages as $cpages){
            if ( $i === 0 ) $pos = ''; elseif ( $i === $child_pages_size ) $pos = 'bloque'; else $pos = 'bloque';
            if($cpages->menu_order >= 0){
                $text= apply_filters('the_content', get_post($cpages->ID)->post_content);
                if($i==0){echo '<div id="intro" class="clearfix block">';}
                if($i==1){echo '<div id="noche" class="clearfix block">';}
                if($i==2){echo '<div id="valle" class="clearfix block">';}
                if($i==1) {
                    echo get_the_post_thumbnail($cpages->ID, 'full', array('class' => 'back-images'));
                } elseif($i==2) {
                    echo get_the_post_thumbnail($cpages->ID, 'full', array('class' => 'back-images'));
                }
                    echo '<div class="container">';
                        if($i==0){echo '<div class="no-float">';}
                            echo '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-float">';
                                if($i==0){
                                    echo '<div class="clearfix">';
                                        echo '<img src="'.get_bloginfo('stylesheet_directory').'/imag/auxi/shape.png" class="no-float" />';
                                    echo '</div>';
                                }
                                echo '<h3>'.$cpages->post_title.'</h3>';
                                echo $text;
                            echo '</div>';
                            echo '<div class="cont-col col-lg-12 col-md-12 col-sm-12 col-xs-12">';
                                $info = get_post_meta($cpages->ID, '_agregar_info', true);
                                if($info){
                                    foreach($info as $inf) {
                                        setup_postdata($inf);
                                        if($i==0) {echo '<div class="col col-lg-3 col-md-3 col-sm-3 col-xs-6">';}
                                        if($i==1) {echo '<div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4">';}
                                        if($i==2) {echo '<div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4">';}
                                            echo '<div class="box-shadow relative">';
                                                echo '<div class="relative">';
                                                    $titulo = get_post_meta($inf, '_ingresar_titulo_alt', true);
                                                    $excerpt= apply_filters('the_excerpt', get_post_field('post_excerpt', $inf));
                                                    if($i==0) {echo '<a href="'.get_the_permalink($inf).'">'.get_the_post_thumbnail($inf, 'home', array('class' => 'img-responsive')).'</a>';}
                                                    if($i==1) {echo '<a href="'.get_the_permalink($inf).'">'.get_the_post_thumbnail($inf, 'int', array('class' => 'img-responsive')).'</a>';}
                                                    if($i==2) {echo '<a href="'.get_the_permalink($inf).'">'.get_the_post_thumbnail($inf, 'int-valle', array('class' => 'img-responsive').'</a>');}
                                                echo '</div>';
                                                echo '<div class="bottom">';
                                                    echo '<h4><a href="'.get_the_permalink($inf).'">'.$titulo.'</a></h4>';
                                                    echo '<div class="absolute-box">';
                                                        if($i==0) {echo '<p>'.excerpt(15).'</p>';}
                                                        if($i==1) {echo '<p>'.excerpt(30).'</p>';}
                                                        if($i==2) {echo '<p>'.excerpt(30).'</p>';}
                                                        echo '<div class="cont-buttons clearfix">';
                                                            echo '<a href="'.get_the_permalink($inf).'" class="button info">Más Info</a>';
                                                        echo '</div>';
                                                    echo '</div>'; 
                                                    echo '<div class="white-shadow"></div>';
                                                echo '</div>';
                                            echo '</div>';
                                        echo '</div>';
                                    }
                                }
                            echo '</div>';
                        if($i==0){echo '</div>';}
                    echo '</div>';
                    if($i==2) {
                        echo '<div class="cont-button clearfix">';
                            echo '<a href="'.get_bloginfo('wpurl').'/tours-y-actividades/" class="button button-home conoce upper">Ver todos los tours</a>';
                        echo '</div>';
                    }
                echo '</div>';
            $i++; }
        }
    }
}

//=================================================================== POST TYPE AND TAXONOMY // 
add_action( 'init', 'create_post_type_tours' );
function create_post_type_tours() {
    register_post_type( 'tours',
        array(
            'labels' => array(
                'name' => __('Tours y Spa'),
                'singular_name' => __('Tour / Spa'),
                'add_new' => __('Agregar tour / programa'),
                'add_new_item' => __('Agregar nuevo tour / programa'),
                'edit_item' => __('Editar tour / programa'),
                'new_item' => __('Nuevo tour / programa'),
                'all_items' => __('Todos los tours / programas'),
                'view_item' => __('Ver tours / programas'),
                'search_items' => __('Buscar tours / programas')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'tours', 'hierarchical' => true),
            'hierarchical' => true,
            'show_ui' => true,
            'query_var' => true,
            'update_count_callback' => '_update_post_term_count',
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields')
        )
    );
    flush_rewrite_rules();
}

add_action('init', 'create_taxonomy_tours', 0);
function create_taxonomy_tours() {
    $labels = array(
        'name'                => __( 'Tipos de Tours o Programa', 'taxonomy general name' ),
        'singular_name'       => __( 'Tipo de Tour / Programa', 'taxonomy singular name' ),
        'search_items'        => __( 'Buscar en Tours / Programas' ),
        'all_items'           => __( 'Todos los Tours / Programas' ),
        'edit_item'           => __( 'Editar Tours / Programas' ), 
        'update_item'         => __( 'Actualizar Tours / Programas' ),
        'add_new_item'        => __( 'Agregar Tours / Programas' ),
        'menu_name'           => __( 'Tipos de Tours / Programas' )
    );  
    $args = array(
        'hierarchical'        => true,
        'labels'              => $labels,
        'show_ui'             => true,
        'show_admin_column'   => true,
        'query_var'           => true,
    );
    register_taxonomy('tipos-de-tours', array('tours'), $args);
}

//=================================================================== POST TYPE AND TAXONOMY // 
add_action( 'init', 'create_post_type_carta' );
function create_post_type_carta() {
    register_post_type( 'carta',
        array(
            'labels' => array(
                'name' => __('Cartas'),
                'singular_name' => __('Carta'),
                'add_new' => __('Agregar ítem'),
                'add_new_item' => __('Agregar nuevo ítem'),
                'edit_item' => __('Editar ítem'),
                'new_item' => __('Nuevo ítem'),
                'all_items' => __('Todos los ítems'),
                'view_item' => __('Ver ítems de las cartas'),
                'search_items' => __('Buscar en ítems de cartas')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'cartas', 'hierarchical' => true),
            'hierarchical' => true,
            'show_ui' => true,
            'query_var' => true,
            'update_count_callback' => '_update_post_term_count',
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields')
        )
    );
    flush_rewrite_rules();
}

add_action('init', 'create_taxonomy_carta', 0);
function create_taxonomy_carta() {
    $labels = array(
        'name'                => __( 'Tipos de Carta', 'taxonomy general name' ),
        'singular_name'       => __( 'Tipo de Carta', 'taxonomy singular name' ),
        'search_items'        => __( 'Buscar en Cartas' ),
        'all_items'           => __( 'Todas las Cartas' ),
        'edit_item'           => __( 'Editar Cartas' ), 
        'update_item'         => __( 'Actualizar Cartas' ),
        'add_new_item'        => __( 'Agregar Cartas' ),
        'menu_name'           => __( 'Tipos de Cartas' )
    );  
    $args = array(
        'hierarchical'        => true,
        'labels'              => $labels,
        'show_ui'             => true,
        'show_admin_column'   => true,
        'query_var'           => true,
    );
    register_taxonomy('tipos-de-cartas', array('carta'), $args);
}

//=================================================================== IMAGES FUNCTIONS//
function get_gallery_images(){
    global $wpdb;
    $gallery_pict = $wpdb->get_results("SELECT ID, post_title, post_content, post_excerpt FROM $wpdb->posts WHERE post_type = 'attachment' AND post_mime_type LIKE 'image%' AND post_excerpt LIKE 'galeria%' AND post_parent = '".get_the_ID()."' ORDER BY menu_order");
    if ($gallery_pict) {
        echo '<ul class="bxslider">';
        foreach ($gallery_pict as $gal) {
            echo '<li>';
                echo wp_get_attachment_image($gal->ID, 'gal-image',array('class' => 'img-responsive'));
            echo '</li>';
        } $i++;
        echo '</ul>';
        echo '<div id="bx-pager">';
        $i = 0;
        foreach ($gallery_pict as $gal) {
            echo '<a data-slide-index="'.$i.'" href="">'.wp_get_attachment_image($gal->ID, 'thumb-image',array('class' => 'img-responsive')).'</a>';
        $i++; } 
        echo '</div>';
    }
}

//=================================================================== WORDPRESS WIDGETS// 
function terral_widgets_init() {
	register_sidebar(array(
        'name' => __('Sidebar General', 'terral'),
        'description' => __('Sidebar general sitio web', 'terral'),
        'id' => 'sidebar-general',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
        'before_widget' => '',
        'after_widget' => ''
    ));
}
add_action('widgets_init', 'terral_widgets_init');

//=================================================================== GET CUSTOM TAXONOMY TERMS //
function get_custom_terms($taxonomies, $args){
    $args = array('orderby'=>'asc','hide_empty'=>true,'parent' => 0);
    $custom_terms = get_terms(array($taxonomies), $args);
    foreach($custom_terms as $term){
        echo '<div class="filter" data-filter=".'.$term->slug.'">'.$term->name.'</div>';
    }
}

//=================================================================== CONNECTIONS//
function my_connection_types() {
    p2p_register_connection_type( array(
        'name' => 'tours_to_page',
        'from' => 'tours',
        'to' => 'page',
        'cardinality' => 'many-to-many',
        'prevent_duplicates' => true,
        'reciprocal' => true
    ) );
    p2p_register_connection_type( array(
        'name' => 'testimonial_to_tours',
        'from' => 'testimonial',
        'to' => 'tours',
        'cardinality' => 'many-to-many',
        'prevent_duplicates' => true,
        'reciprocal' => true
    ) );
    p2p_register_connection_type( array(
        'name' => 'page_to_page',
        'from' => 'page',
        'to' => 'page',
        'cardinality' => 'many-to-many',
        'prevent_duplicates' => true,
        'reciprocal' => true
    ) );
    p2p_register_connection_type( array(
        'name' => 'gallery_to_page',
        'from' => 'gallery',
        'to' => 'page',
        'cardinality' => 'many-to-many',
        'prevent_duplicates' => true,
        'reciprocal' => true
    ) );
    p2p_register_connection_type( array(
        'name' => 'product_to_room',
        'from' => 'product',
        'to' => 'room',
        'cardinality' => 'many-to-many',
        'prevent_duplicates' => true,
        'reciprocal' => true
    ) );
}
add_action( 'p2p_init', 'my_connection_types' );

//
?>