<?php
function my_scripts_before()
{
    global $wp;
    $page_slug = add_query_arg(array(), $wp->request);

    wp_enqueue_style('main-style', HUNTGEM_ASSETS . '/css/main.css', array(), '1.0', 'all');

    // wp_enqueue_script('scrollHorizontally', HUNTGEM_ASSETS . '/js/fullpage.scrollHorizontally.min.js', array('jquery'), null, true);
    // wp_enqueue_script('extensions', HUNTGEM_ASSETS . '/js/jquery.fullpage.extensions.min.js', array('jquery'), null, true);

    // wp_enqueue_script('fullpage', HUNTGEM_ASSETS . '/js/fullpage.js', array('jquery'), null, true);
    wp_enqueue_script('main', HUNTGEM_ASSETS . '/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'my_scripts_before');
add_filter('use_block_editor_for_post', '__return_false', 10);
