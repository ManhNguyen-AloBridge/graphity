<?php

function registerOrLogin()
{

    // $args = array(
    //     // 'post_type' => 'post',
    //     'post_status' => 'publish',
    //     'posts_per_page' => 8,
    //     // 'orderby' => 'menu_order',
    //     'tax_query' => array(
    //         'relation' => 'AND',
    //         array(
    //             'relation' => 'OR',
    //             array(
    //                 'taxonomy' => 'category',
    //                 'terms' => ['uncategorized'],
    //                 'field' => 'slug',
    //             ),
    //             array(
    //                 'taxonomy' => 'category',
    //                 'terms' => ['category_1'],
    //                 'field' => 'slug',
    //             ),
    //         ),
    //         array(
    //             'relation' => 'OR',
    //             array(
    //                 'taxonomy' => 'post_tag',
    //                 'terms' => ['tag_1'],
    //                 'field' => 'slug',
    //             ),
    //             array(
    //                 'taxonomy' => 'post_tag',
    //                 'terms' => ['tag_2'],
    //                 'field' => 'slug',
    //             )
    //         )
    //     )
    // );

    // $my_query = new WP_Query($args);
    // if ($my_query->have_posts()) {
    //     echo '<pre>';
    //     foreach ($my_query->posts as $post) {


    //         echo $post->post_title;
    //         echo '-';
    //     }
    //     echo '</pre>';
    // }




    $loggedIn = false;
    $userInfo = get_user_billing_info(0);
    if (is_user_logged_in()) {
        $loggedIn = true;
        $userInfo = get_user_billing_info(wp_get_current_user()->id);
    }
    $userInfo['loggedIn'] = $loggedIn;
    ob_start();
?>

    <div class="hasu-section hidden mobile-show link-to-login-section">
        <a href="#" class="hasu-button --bg-white --outline --thin --mobile-expand" type="button">過去に当サイトで購入された方はこちら</a>
    </div>
<?php
    get_template_part('custom-template/select-payment-type');
    get_template_part('custom-template/form-login', null, $userInfo);
    get_template_part('custom-template/register-user', null, $userInfo);
    get_template_part('custom-template/ship-another-address');
    get_template_part('custom-template/payment');
    get_template_part('custom-template/specify-delivery-date');
    get_template_part('custom-template/message');
    get_template_part('custom-template/register-button');

    return ob_get_clean();
};

add_shortcode('register_or_login', 'registerOrLogin');
