<?php

// require_once get_stylesheet_directory() . '/custom-shortcode/login.php';
require_once get_stylesheet_directory() . '/custom-shortcode/register/register.php';
require_once get_stylesheet_directory() . '/options/options.php';

add_action('wp_enqueue_scripts', 'child_theme_enqueue_style');


function child_theme_enqueue_style()
{
    wp_enqueue_style('hello-elementor-child-style', get_stylesheet_uri());
    wp_enqueue_script('date-format', get_stylesheet_directory_uri() . '/access/js/js-plugins/date.format.js');
    wp_enqueue_script('simple-date-dropdown', get_stylesheet_directory_uri() . '/access/js/jquery-plugins/dropdate.js', array('jquery'));
    wp_enqueue_script('validate-plugin', get_stylesheet_directory_uri() . '/access/js/jquery-plugins/jquery.validate.min.js', array('jquery'));
    wp_enqueue_script('child-theme-main-js', get_stylesheet_directory_uri() . '/access/js/main.js', array('jquery'));
    wp_localize_script(
        "child-theme-main-js",
        "backendVariables",
        array(
            "genderTypes" => array_keys(get_option('user_gender_types')),
            "japanPrefectures" => array_keys(get_option("japan_prefectures")),
            "adminUrl" => admin_url('admin-ajax.php')
        )
    );
}


function get_user_billing_info(int $id): array
{
    return [
        'billing_name' =>  valueOrNull(get_user_meta($id, 'billing_name', true)),
        'billing_furigana' => valueOrNull(get_user_meta($id, 'billing_furigana', true)),
        'billing_address_1' => valueOrNull(get_user_meta($id, 'billing_address_1', true)),
        'billing_address_2' => valueOrNull(get_user_meta($id, 'billing_address_2', true)),
        'billing_postcode' => valueOrNull(get_user_meta($id, 'billing_postcode', true)),
        'billing_district' => valueOrNull(get_user_meta($id, 'billing_district', true)),
        'billing_email' => valueOrNull(get_user_meta($id, 'billing_email', true)),
        'billing_phone' => valueOrNull(get_user_meta($id, 'billing_phone', true)),
        'gender' => valueOrNull(get_user_meta($id, 'gender', true)),
        'birth_date' => valueOrNull(get_user_meta($id, 'birth_date', true)),
    ];
}

function valueOrNull($value)
{
    if (is_bool($value)) {
        return $value;
    }

    return (bool) $value ? $value : null;
}

add_filter('woocommerce_checkout_fields', 'custom_override_checkout_fields', 10, 1);
function custom_override_checkout_fields($fields)
{
    $fields['billing']['billing_district']['options'] = get_option('japan_prefectures');
    return $fields;
}

add_action('wp_ajax_hasu_register', 'hasu_register');
add_action('wp_ajax_nopriv_hasu_register', 'hasu_register');
function hasu_register()
{
    $registerData = (isset($_POST['registerData'])) ? $_POST['registerData'] : '';

    if (!is_user_logged_in()) {

        // $user_id = wp_create_user([
        //     $registerData['user_register'],
        //     $registerData['user_password'],
        //     $registerData['billing_email'],
        // ]);
    }

    wp_send_json_success($registerData);
    die();
}
