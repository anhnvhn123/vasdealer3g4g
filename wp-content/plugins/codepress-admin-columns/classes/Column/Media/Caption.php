<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * @since 2.0
 */
class AC_Column_Media_Caption extends AC_Column {

	public function __construct() {
		$this->set_type( 'column-caption' );
		$this->set_label( __( 'Caption', 'codepress-admin-columns' ) );
	}

	public function get_value( $id ) {
		$value = esc_html( $this->get_raw_value( $id ) );

		if ( ! $value ) {
			return $this->get_empty_char();
		}

		return $value;
	}

	public function get_raw_value( $id ) {
		return ac_helper()->post->get_raw_field( 'post_excerpt', $id );
	}

}
