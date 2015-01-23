<?php Themewrangler::setup_page();get_header(); ?>

<?php 

  get_template_part('templates/page', 'header');

?>

<div class="row">
  <div class="desktop-12">
    <?php get_search_form(  ); ?>
    <div id="posts"></div>

    <script id="posts-list" type="text/template">
    {{count}} posts found.
    {{#posts}}
        <div class="item">
            {{#thumbnail}}
            <img src="{{thumbnail}}" alt="{{title}}">
            {{/thumbnail}}
            {{^thumbnail}}
            {{/thumbnail}}
            
            <h3>{{title}}</h3>
            {{{excerpt}}}
            <span><a href="{{url}}">read more</a></span>
        </div>
    {{/posts}}
</script>

    <?php 
      // $cats = get_categories();
      // $output = array('categories' => array());

      //   foreach ($cats as $cat) {

      //     $cat_output = array(
      //       'cat_id' => $cat->term_id,
      //       'cat_name' => $cat->name,
      //       'posts' => array(),
      //     );

      //   // should be able to use -1 to get all posts, rather than 9999
      //     $args = array('numberposts=' => -1, 'category' => $cat->cat_ID);
      //     $myposts = get_posts($args);

      //     foreach( $myposts as $post ) {

      //       if ($youtube_id = get_post_meta($post->ID, 'apls_video_youtube', TRUE)) {
      //       $url = "http://www.youtube.com/watch?v={$youtube_id}";

      //     } else {

      //       $url = get_post_meta($post->ID, 'apls_video_hosted', TRUE);

      //     }

      //     $cat_output['posts'][] = array(
      //       'name' => get_the_title($post->ID),
      //       'url' => $url,
      //     );
      //   }

      // $output['categories'][] = $cat_output;
      // }

      // //header("Content-type: application/json");
      // die(json_encode($output));
      ?>
  </div>
</div>

<?php get_footer(); ?>