<?php  

	function get_post_by_category($catid, $num_of_post = 5){

		global $list_post;

		$args = array(

			'posts_per_page'   => $num_of_post,

			'offset'           => 0,

			'category'         => $catid,

			'orderby'          => 'date',

			'order'            => 'DESC',

			'post_type'        => 'post',

			'post_mime_type'   => '',

			'post__not_in'	   =>	$list_post,	

			'post_status'      => 'publish'

		);

		$posts_array = get_posts( $args );

		foreach ($posts_array as $key => $value) {

			array_push($list_post, $value->ID);

		}

		return $posts_array;

	}

	function ds_goicuoc($num_of_post = 5){

		global $list_post;

		$args = array(

			'posts_per_page'   => $num_of_post,

			'offset'           => 0,

			'orderby'          => 'date',

			'order'            => 'DESC',

			'post_type'        => 'goi_cuoc',

			'post_mime_type'   => '',

			'post__not_in'	   =>	$list_post,	

			'post_status'      => 'publish'

		);

		$posts_array = get_posts( $args );

		foreach ($posts_array as $key => $value) {

			array_push($list_post, $value->ID);

		}

		return $posts_array;

	}



	function get_last_post($num_of_post = 5){

		global $list_post;

		$args = array(

			'posts_per_page'   => $num_of_post,

			'offset'           => 0,

			'orderby'          => 'date',

			'order'            => 'DESC',

			'post_type'        => 'post',

			'post_mime_type'   => '',

			'post__not_in'	   =>	$list_post,	

			'post_status'      => 'publish'

		);

		$posts_array = get_posts( $args );

		foreach ($posts_array as $key => $value) {

			array_push($list_post, $value->ID);

		}

		return $posts_array;

	}



	function get_last_sp($num_of_post = 5){

		global $list_post;

		$args = array(

			'posts_per_page'   => $num_of_post,

			'offset'           => 0,

			'orderby'          => 'date',

			'order'            => 'DESC',

			'post_type'        => 'san_pham',

			'post_mime_type'   => '',

			'post__not_in'	   =>	$list_post,	

			'post_status'      => 'publish'

		);

		$posts_array = get_posts( $args );

		foreach ($posts_array as $key => $value) {

			array_push($list_post, $value->ID);

		}

		return $posts_array;

	}

	function get_last_tour($num_of_post = 5){

		global $list_post;

		$args = array(

			'posts_per_page'   => $num_of_post,

			'offset'           => 0,

			'orderby'          => 'date',

			'order'            => 'DESC',

			'post_type'        => 'tour',

			'post_mime_type'   => '',

			'post__not_in'	   =>	$list_post,	

			'post_status'      => 'publish'

		);

		$posts_array = get_posts( $args );

		foreach ($posts_array as $key => $value) {

			array_push($list_post, $value->ID);

		}

		return $posts_array;

	}

	function get_tour_noibat($catid, $num_of_post = 8){
		global $list_post;

		$args = array(

			'posts_per_page'   => $num_of_post,

			'offset'           => 0,

			'orderby'          => 'date',

			'order'            => 'DESC',

			'post_type'        => 'tour',

			'post_mime_type'   => '',

			'post__not_in'	   =>	$list_post,	
			'tax_query'=>array(array(
				'taxonomy'=>'danh_muc_tour',
				'field'=>'term_id',
				'post_type' => 'tour',
				'terms'=> $catid
			)) ,
			'meta_query' => array(
		       	array(
		           	'key' => 'noibat',
		           	'value' => '1',
		           	'compare' => '=',
		       	)
		   	),

			'post_status'      => 'publish'

		);

		$posts_array = get_posts( $args );

		foreach ($posts_array as $key => $value) {

			array_push($list_post, $value->ID);

		}

		return $posts_array;
	}

	function lich_khoi_hanh($num_of_post = 5){
		global $list_post;

		$args = array(

			'posts_per_page'   => $num_of_post,

			'offset'           => 0,

			'orderby'          => 'date',

			'order'            => 'DESC',

			'post_type'        => 'tour',

			'post_mime_type'   => '',

			'meta_query' => array(
		       	array(
		           	'key' => 'show-lichkhoihanh',
		           	'value' => '1',
		           	'compare' => '=',
		       	)
		   	),

			'post_status'      => 'publish'

		);

		$posts_array = get_posts( $args );

		return $posts_array;
	}


	function get_tour_by_diemden($catid, $num_of_post = 5){
		global $list_post;

		$args = array(

			'posts_per_page'   => $num_of_post,

			'offset'           => 0,

			'orderby'          => 'date',

			'order'            => 'DESC',

			'post_type'        => 'tour',

			'post_mime_type'   => '',

			'post__not_in'	   =>	$list_post,	
			'tax_query'=>array(array(
				'taxonomy'=>'diem_den',
				'field'=>'term_id',
				'post_type' => 'tour',
				'terms'=> $catid
			)) ,
			'post_status'      => 'publish'

		);

		$posts_array = get_posts( $args );

		foreach ($posts_array as $key => $value) {

			array_push($list_post, $value->ID);

		}

		return $posts_array;
	}

	function get_tour_by_danhmuc($catid, $num_of_post = 5){
		global $list_post;

		$args = array(

			'posts_per_page'   => $num_of_post,

			'offset'           => 0,

			'orderby'          => 'date',

			'order'            => 'DESC',

			'post_type'        => 'tour',

			'post_mime_type'   => '',

			'post__not_in'	   =>	$list_post,	
			'tax_query'=>array(array(
				'taxonomy'=>'danh_muc_tour',
				'field'=>'term_id',
				'post_type' => 'tour',
				'terms'=> $catid
			)) ,
			'post_status'      => 'publish'

		);

		$posts_array = get_posts( $args );

		foreach ($posts_array as $key => $value) {

			array_push($list_post, $value->ID);

		}

		return $posts_array;
	}

	function show_home( $num_of_post = 8){
		global $list_post;

		$args = array(

			'posts_per_page'   => $num_of_post,

			'offset'           => 0,

			'orderby'          => 'date',

			'order'            => 'DESC',

			'post_type'        => 'tour',

			'post_mime_type'   => '',

			'post__not_in'	   =>	$list_post,	
			'meta_query' => array(
		       	array(
		           	'key' => 'show-home',
		           	'value' => '1',
		           	'compare' => '=',
		       	)
		   	),

			'post_status'      => 'publish'

		);

		$posts_array = get_posts( $args );

		foreach ($posts_array as $key => $value) {

			array_push($list_post, $value->ID);

		}

		return $posts_array;
	}

	function lichkhoihanh( $num_of_post = 5){
		global $list_post;

		$args = array(

			'posts_per_page'   => $num_of_post,

			'offset'           => 0,

			'orderby'          => 'date',

			'order'            => 'DESC',

			'post_type'        => 'tour',

			'post_mime_type'   => '',

			'post__not_in'	   =>	$list_post,	
			'meta_query' => array(
		       	array(
		           	'key' => 'show-lichkhoihanh',
		           	'value' => '1',
		           	'compare' => '=',
		       	)
		   	),

			'post_status'      => 'publish'

		);

		$posts_array = get_posts( $args );

		foreach ($posts_array as $key => $value) {

			array_push($list_post, $value->ID);

		}

		return $posts_array;
	}

?>