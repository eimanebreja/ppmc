<?php
define("THEME_DIR", get_theme_file_uri());

add_action('wp_enqueue_scripts', 'twentythirteen_child_enqueue_styles');
function twentythirteen_child_enqueue_styles()
{
    $parenthandle = 'parent-style'; // This is 'twentythirteen-style' for the twentythirteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style($parenthandle,
        get_template_directory_uri() . '/style.css',
        array(), // If the parent theme code has a dependency, copy it to here.
        $theme->parent()->get('Version')
    );
    wp_enqueue_style('child-style',
        get_stylesheet_uri(),
        array($parenthandle),
        $theme->get('Version') // This only works if you have Version defined in the style header.
    );
}

/**
 * ENQUEUE CUSTOM STYLES
 */

function enqueue_styles()
{

    /** REGISTER css/screen.css **/
    wp_register_style('screen-style', THEME_DIR . '/assets/css/style.css', array(), '1', 'all');
    wp_enqueue_style('screen-style');

}
add_action('wp_enqueue_scripts', 'enqueue_styles');

/**
 * NEWS CUSTOM POST
 */

function news_custom_post_type()
{
    register_post_type('news',
        array(
            'rewrite' => array('slug' => 'new'),
            'labels' => array(
                'name' => 'News',
                'singular_name' => 'News',
                'add_new_item' => 'Add New News',
                'edit_item' => 'Edit News',
            ),
            'menu-icon' => 'dashicons-clipboard',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt', 'comments',
            ),
            'taxonomies' => array('post_tag'),
        )
    );
}
add_action('init', 'news_custom_post_type');

function gallery_custom_post_type()
{
    register_post_type('gallery',
        array(
            'rewrite' => array('slug' => 'galleries'),
            'labels' => array(
                'name' => 'Gallery',
                'singular_name' => 'Gallery',
                'add_new_item' => 'Add New Gallery',
                'edit_item' => 'Edit Gallery',
            ),
            'menu-icon' => 'dashicons-clipboard',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt', 'comments',
            ),
            'taxonomies' => array('post_tag'),
        )
    );
}
add_action('init', 'gallery_custom_post_type');

function events_custom_post_type()
{
    register_post_type('event',
        array(
            'rewrite' => array('slug' => 'event'),
            'labels' => array(
                'name' => 'Events',
                'singular_name' => 'Events',
                'add_new_item' => 'Add New Events',
                'edit_item' => 'Edit Events',
            ),
            'menu-icon' => 'dashicons-clipboard',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt', 'comments',
            ),
            'taxonomies' => array('post_tag'),
        )
    );
}
add_action('init', 'events_custom_post_type');

function procurement_custom_post_type()
{
    register_post_type('procurement',
        array(
            'rewrite' => array('slug' => 'procurement'),
            'labels' => array(
                'name' => 'Procurement',
                'singular_name' => 'Procurements',
                'add_new_item' => 'Add New Procurements',
                'edit_item' => 'Edit Procurements',
            ),
            'menu-icon' => 'dashicons-clipboard',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt', 'comments',
            ),
            'taxonomies' => array('post_tag'),
        )
    );
}
add_action('init', 'procurement_custom_post_type');

function project_custom_post_type()
{
    register_post_type('project',
        array(
            'rewrite' => array('slug' => 'project'),
            'labels' => array(
                'name' => 'Project',
                'singular_name' => 'Projects',
                'add_new_item' => 'Add New Project',
                'edit_item' => 'Edit Project',
            ),
            'menu-icon' => 'dashicons-clipboard',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt', 'comments',
            ),
            'taxonomies' => array('post_tag'),
        )
    );
}
add_action('init', 'project_custom_post_type');

function investment_opportunities_custom_post_type()
{
    register_post_type('investments',
        array(
            'rewrite' => array('slug' => 'investment'),
            'labels' => array(
                'name' => 'Investment Opportunites',
                'singular_name' => 'Investment Opportunites',
                'add_new_item' => 'Add New Investment Opportunites',
                'edit_item' => 'Edit Investment Opportunites',
            ),
            'menu-icon' => 'dashicons-clipboard',
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt', 'comments',
            ),

            'taxonomies' => array('post_tag'),
        )
    );
}
add_action('init', 'investment_opportunities_custom_post_type');

function career_custom_post_type()
{
    register_post_type('career',
        array(
            'rewrite' => array('slug' => 'career'),
            'labels' => array(
                'name' => 'Careers',
                'singular_name' => 'Careers',
                'add_new_item' => 'Add New Career',
                'edit_item' => 'Edit Career',
            ),
            'menu-icon' => 'dashicons-clipboard',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt', 'comments',
            ),
            'taxonomies' => array('post_tag'),
        )
    );
}
add_action('init', 'career_custom_post_type');

function booking_custom_post_type()
{
    register_post_type('booking',
        array(
            'rewrite' => array('slug' => 'booking'),
            'labels' => array(
                'name' => 'Events Booking',
                'singular_name' => 'Events Booking',
                'add_new_item' => 'Add New Events Booking',
                'edit_item' => 'Edit Events Booking',
            ),
            'menu-icon' => 'dashicons-clipboard',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt', 'comments',
            ),
            'taxonomies' => array('post_tag'),
        )
    );
}
add_action('init', 'booking_custom_post_type');

/**
 * Reseervation Exist Validation
 */

add_filter('acf/validate_value/name=reservation_date', 'validate_reservation_filter', 10, 4);

function validate_reservation_filter($valid, $value, $field, $input)
{
    if (!$valid || $value == '') {
        return $valid;
    }
    global $post;
    $args = array(
        'post_type' => 'booking',
        'post__not_in' => array($post->ID), // do not check this new post
        'meta_query' => array(
            array(
                'key' => 'reservation_date',
                'value' => $value,
            ),
        ),
    );
    $query = new WP_Query($args);
    if (count($query->posts)) {
        $valid = 'There is already a booking using this reservation date';
    }
    return $valid;
}

/**
 * Comment Form Placeholder Author, Email, URL
 */
function placeholder_author_email_url_form_fields($fields)
{
    $replace_author = __('Name*', 'yourdomain');
    $replace_email = __('Email*', 'yourdomain');
    $replace_url = __('Website*', 'yourdomain');
    $consent = empty($commenter['comment_author_email']) ? '' : ' checked="checked"';

    $fields['author'] = '<div class="row"><div class="row-item"><p class="comment-form-author">' . '<label for="author">' . __('Name', 'yourdomain') . '</label> ' . ($req ? '<span class="required">*</span>' : '') .
    '<input id="author" name="author" type="text" placeholder="' . $replace_author . '" value="' . esc_attr($commenter['comment_author']) . '" size="20"' . $aria_req . ' /></p>';

    $fields['email'] = '<p class="comment-form-email"><label for="email">' . __('Email', 'yourdomain') . '</label> ' .
    ($req ? '<span class="required">*</span>' : '') .
    '<input id="email" name="email" type="text" placeholder="' . $replace_email . '" value="' . esc_attr($commenter['comment_author_email']) .
        '" size="30"' . $aria_req . ' /></p></div>';

    $fields['url'] = '<div class="row-item"><p class="comment-form-url"><label for="url">' . __('Website', 'yourdomain') . '</label>' .
    '<input id="url" name="url" type="text" placeholder="' . $replace_url . '" value="' . esc_attr($commenter['comment_author_url']) .
        '" size="30" /></p>';

    $fields['cookies'] = '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' . '<label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comments.</label></p></div></div>';

    return $fields;
}
add_filter('comment_form_default_fields', 'placeholder_author_email_url_form_fields');

/**
 * Comment Form Placeholder Comment Field
 */
function placeholder_comment_form_field($fields)
{
    $replace_comment = __('Comments*', 'yourdomain');

    $fields['comment_field'] = '<p class="comment-form-comment"><label for="comment">' . _x('Comment', 'noun') .
        '</label><textarea id="comment" name="comment" cols="45" rows="8" placeholder="' . $replace_comment . '" aria-required="true"></textarea></p>';

    return $fields;
}
add_filter('comment_form_defaults', 'placeholder_comment_form_field');

/**
 * Move comment textarea on bottom
 */
function wpb_move_comment_field_to_bottom($fields)
{
    $comment_field = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment_field;
    return $fields;
}

add_filter('comment_form_fields', 'wpb_move_comment_field_to_bottom');

function weichie_load_more()
{
    $ajaxposts = new WP_Query([
        'post_type' => 'publications',
        'posts_per_page' => 6,
        'orderby' => 'date',
        'order' => 'DESC',
        'paged' => $_POST['paged'],
    ]);

    $response = '';
    $max_pages = $ajaxposts->max_num_pages;

    if ($ajaxposts->have_posts()) {
        ob_start();
        while ($ajaxposts->have_posts()): $ajaxposts->the_post();
            $response .= the_title();
        endwhile;
        $output = ob_get_contents();
        ob_end_clean();
    } else {
        $response = '';
    }

    $result = [
        'max' => $max_pages,
        'html' => $output,
    ];

    echo json_encode($result);
    exit;
}
add_action('wp_ajax_weichie_load_more', 'weichie_load_more');
add_action('wp_ajax_nopriv_weichie_load_more', 'weichie_load_more');