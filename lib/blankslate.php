<?php
add_action( 'after_setup_theme', 'gridded_setup' );
function gridded_setup()
{
load_theme_textdomain( 'gridded', get_template_directory() . '/languages' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'gridded' ) )
);
register_nav_menus(
array( 'socl-menu' => __( 'Social Menu', 'gridded' ) )
);
}
add_action( 'wp_enqueue_scripts', 'gridded_load_scripts' );
function gridded_load_scripts()
{
wp_enqueue_script( 'jquery' );
}
add_action( 'comment_form_before', 'gridded_enqueue_comment_reply_script' );
function gridded_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'gridded_title' );
function gridded_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'gridded_filter_wp_title' );
function gridded_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'gridded_widgets_init' );
function gridded_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'gridded' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
function gridded_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter( 'get_comments_number', 'gridded_comments_number' );
function gridded_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}

function excerpt($num) {
$limit = $num+1;
$excerpt = explode(' ', get_the_excerpt(), $limit);
array_pop($excerpt);
$excerpt = implode(" ",$excerpt)."... <p class='readmore'><a href='" .get_permalink($post->ID) ." '>Read more</a></p>";
echo $excerpt;
}


function removeRecentComments() {  
global $wp_widget_factory;  
remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );  
}  
add_action( 'widgets_init', 'removeRecentComments' );
add_image_size( 'homepage-thumb', 400, 400, true );
add_filter('show_admin_bar', '__return_false');



// Register Custom Post Type
function instagram_post_type() {

  $labels = array(
    'name'                => _x( 'Instagrams', 'Post Type General Name', 'text_domain' ),
    'singular_name'       => _x( 'Instagram', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'           => __( 'Instagram', 'text_domain' ),
    'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
    'all_items'           => __( 'All Items', 'text_domain' ),
    'view_item'           => __( 'View Item', 'text_domain' ),
    'add_new_item'        => __( 'Add New Item', 'text_domain' ),
    'add_new'             => __( 'Add New', 'text_domain' ),
    'edit_item'           => __( 'Edit Item', 'text_domain' ),
    'update_item'         => __( 'Update Item', 'text_domain' ),
    'search_items'        => __( 'Search Item', 'text_domain' ),
    'not_found'           => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
  );
  $args = array(
    'label'               => __( 'instagram', 'text_domain' ),
    'description'         => __( 'Post Type Description', 'text_domain' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'thumbnail', ),
    'taxonomies'          => array( 'category', 'post_tag' ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );
  register_post_type( 'instagram', $args );

}

// Hook into the 'init' action
add_action( 'init', 'instagram_post_type', 0 );