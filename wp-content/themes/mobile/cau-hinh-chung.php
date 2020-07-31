<?php
define('template_url', get_template_directory_uri());

define('config_id', 5835);

define('phone1', get_field('phone1', config_id));
define('phone2', get_field('phone2', config_id));
define('phone3', get_field('phone3', config_id));

define('address1', get_field('address1', config_id));
define('address2', get_field('address2', config_id));
define('address3', get_field('address3', config_id));

define('fax', get_field('fax', config_id));

define('email1', get_field('email1', config_id));
define('email2', get_field('email2', config_id));
define('email3', get_field('email3', config_id));

define('copyright', get_field('copyright', config_id));

define('facebook', get_field('facebook', config_id));
define('google_plus', get_field('google_plus', config_id));
define('twitter', get_field('twitter', config_id));
define('youtube', get_field('youtube', config_id));

define('logo1', get_field('logo1', config_id));
define('logo2', get_field('logo2', config_id));

define('company', get_field('company', config_id));

define('nganhang', get_field('thong-tin-ngan-hang', 5697));
define('danh_sach_tinh', get_field('dia-chi-thanh-toan', 5697));
define('danh_sach_van_phong', get_field('danh-sach-van-phong', 5697));

define('email_nhantin', get_field('email-nhantin', config_id));

define('num_of_description', get_field('num_of_description', 40));

define('category_width_thumb', get_field('width', 47));
define('category_height_thumb', get_field('height', 47));

define('show_author', get_field('show_author', 52));
define('show_date', get_field('show_date', 52));

define('ads_header_image', get_field('ads_header', 160));
define('ads_header_url', get_field('ads_header_url', 160));

function get_excerpt($post_id, $limit = num_of_description){
	return limit_words(get_the_excerpt($post_id), $limit) . '...';
}

function limit_words($string, $word_limit) {
	$words = explode(' ', $string);
	return implode(' ', array_slice($words, 0, $word_limit));

}

