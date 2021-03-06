<?php
// Prevent loading this file directly
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'RWMB_Text_Field' ) )
{
	class RWMB_Text_Field
	{
		/**
		 * Get field HTML
		 *
		 * @param string $html
		 * @param mixed  $meta
		 * @param array  $field
		 *
		 * @return string
		 */
		static function html( $html, $meta, $field )
		{
			$name     = " name='{$field['field_name']}'";
			$id       = isset( $field['clone'] ) && $field['clone'] ? '' : " id='{$field['id']}'";
			$val      = " value='{$meta}'";
			$size     = isset( $field['size'] ) ? $field['size'] : '30';
			$std      = isset( $field['disabled'] ) ? $field['disabled'] : false;
			$disabled = disabled( $std, true, false );

			$html    .= "<input type='text' class='rwmb-text'{$name}{$id}{$val}{$disabled} size='{$size}' />";

			return $html;
		}
	}
}