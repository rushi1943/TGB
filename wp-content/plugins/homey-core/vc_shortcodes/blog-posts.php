<?php
/**
 * Created by PhpStorm.
 * User: waqasriaz
 * Date: 23/01/16
 * Time: 11:33 PM
 */
if( !function_exists('homey_blog_posts') ) {
    function homey_blog_posts($atts, $content = null)
    {
        extract(shortcode_atts(array(
            'category_id' => '',
            'posts_limit' => '',
            'offset' => '',
        ), $atts));

        ob_start();

        $wp_query_args = array(
            'ignore_sticky_posts' => 1,
            'post_type' => 'post'
        );
        if (!empty($category_id)) {
            $wp_query_args['cat'] = $category_id;
        }
        if (!empty($offset)) {
            $wp_query_args['offset'] = $offset;
        }
        $wp_query_args['post_status'] = 'publish';

        if (empty($posts_limit)) {
            $posts_limit = get_option('posts_per_page');
        }
        $wp_query_args['posts_per_page'] = $posts_limit;

        $the_query = New WP_Query($wp_query_args);
        ?>

        <div class="module-wrap blog-module">
            <div class="row">
                <?php if ($the_query->have_posts()): while ($the_query->have_posts()): $the_query->the_post(); ?>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <?php get_template_part('content-grid'); ?>
                    </div>
                <?php endwhile; endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>

        <?php
        $result = ob_get_contents();
        ob_end_clean();
        return $result;

    }

    add_shortcode('homey-blog-posts', 'homey_blog_posts');
}
?>