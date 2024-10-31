<?php


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


if ( ! function_exists ( 'oxsn_helpful_css_inc_css' ) ) {

	add_action( 'wp_enqueue_scripts', 'oxsn_helpful_css_inc_css' );
	function oxsn_helpful_css_inc_css() {

		// display

		$display_block_control = get_option( 'oxsn_helpful_css_display_block_control' );
		if($display_block_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_display_block_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/display/display_block.css', array(), '1.0.0', 'all' ); 
		endif;

		$display_flex_control = get_option( 'oxsn_helpful_css_display_flex_control' );
		if($display_flex_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_display_flex_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/display/display_flex.css', array(), '1.0.0', 'all' ); 
		endif;

		$display_inherit_control = get_option( 'oxsn_helpful_css_display_inherit_control' );
		if($display_inherit_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_display_inherit_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/display/display_inherit.css', array(), '1.0.0', 'all' ); 
		endif;

		$display_initial_control = get_option( 'oxsn_helpful_css_display_initial_control' );
		if($display_initial_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_display_initial_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/display/display_initial.css', array(), '1.0.0', 'all' ); 
		endif;

		$display_inline_block_control = get_option( 'oxsn_helpful_css_display_inline_block_control' );
		if($display_inline_block_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_display_inline_block_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/display/display_inline_block.css', array(), '1.0.0', 'all' ); 
		endif;

		$display_inline_flex_control = get_option( 'oxsn_helpful_css_display_inline_flex_control' );
		if($display_inline_flex_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_display_inline_flex_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/display/display_inline_flex.css', array(), '1.0.0', 'all' ); 
		endif;

		$display_inline_table_control = get_option( 'oxsn_helpful_css_display_inline_table_control' );
		if($display_inline_table_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_display_inline_table_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/display/display_inline_table.css', array(), '1.0.0', 'all' ); 
		endif;

		$display_inline_control = get_option( 'oxsn_helpful_css_display_inline_control' );
		if($display_inline_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_display_inline_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/display/display_inline.css', array(), '1.0.0', 'all' ); 
		endif;

		$display_list_item_control = get_option( 'oxsn_helpful_css_display_list_item_control' );
		if($display_list_item_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_display_list_item_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/display/display_list_item.css', array(), '1.0.0', 'all' ); 
		endif;

		$display_none_control = get_option( 'oxsn_helpful_css_display_none_control' );
		if($display_none_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_display_none_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/display/display_none.css', array(), '1.0.0', 'all' ); 
		endif;

		$display_run_in_control = get_option( 'oxsn_helpful_css_display_run_in_control' );
		if($display_run_in_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_display_run_in_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/display/display_run_in.css', array(), '1.0.0', 'all' ); 
		endif;

		$display_table_caption_control = get_option( 'oxsn_helpful_css_display_table_caption_control' );
		if($display_table_caption_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_display_table_caption_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/display/display_table_caption.css', array(), '1.0.0', 'all' ); 
		endif;

		$display_table_cell_control = get_option( 'oxsn_helpful_css_display_table_cell_control' );
		if($display_table_cell_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_display_table_cell_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/display/display_table_cell.css', array(), '1.0.0', 'all' ); 
		endif;

		$display_table_column_group_control = get_option( 'oxsn_helpful_css_display_table_column_group_control' );
		if($display_table_column_group_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_display_table_column_group_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/display/display_table_column_group.css', array(), '1.0.0', 'all' ); 
		endif;

		$display_table_column_control = get_option( 'oxsn_helpful_css_display_table_column_control' );
		if($display_table_column_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_display_table_column_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/display/display_table_column.css', array(), '1.0.0', 'all' ); 
		endif;

		$display_table_footer_group_control = get_option( 'oxsn_helpful_css_display_table_footer_group_control' );
		if($display_table_footer_group_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_display_table_footer_group_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/display/display_table_footer_group.css', array(), '1.0.0', 'all' ); 
		endif;

		$display_table_header_group_control = get_option( 'oxsn_helpful_css_display_table_header_group_control' );
		if($display_table_header_group_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_display_table_header_group_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/display/display_table_header_group.css', array(), '1.0.0', 'all' ); 
		endif;

		$display_table_row_group_control = get_option( 'oxsn_helpful_css_display_table_row_group_control' );
		if($display_table_row_group_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_display_table_row_group_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/display/display_table_row_group.css', array(), '1.0.0', 'all' ); 
		endif;

		$display_table_row_control = get_option( 'oxsn_helpful_css_display_table_row_control' );
		if($display_table_row_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_display_table_row_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/display/display_table_row.css', array(), '1.0.0', 'all' ); 
		endif;

		$display_table_control = get_option( 'oxsn_helpful_css_display_table_control' );
		if($display_table_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_display_table_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/display/display_table.css', array(), '1.0.0', 'all' ); 
		endif;

		// float

		$float_inherit_control = get_option( 'oxsn_helpful_css_float_inherit_control' );
		if($float_inherit_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_float_inherit_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/float/float_inherit.css', array(), '1.0.0', 'all' ); 
		endif;

		$float_initial_control = get_option( 'oxsn_helpful_css_float_initial_control' );
		if($float_initial_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_float_initial_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/float/float_initial.css', array(), '1.0.0', 'all' ); 
		endif;

		$float_left_control = get_option( 'oxsn_helpful_css_float_left_control' );
		if($float_left_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_float_left_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/float/float_left.css', array(), '1.0.0', 'all' ); 
		endif;

		$float_none_control = get_option( 'oxsn_helpful_css_float_none_control' );
		if($float_none_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_float_none_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/float/float_none.css', array(), '1.0.0', 'all' ); 
		endif;

		$float_right_control = get_option( 'oxsn_helpful_css_float_right_control' );
		if($float_right_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_float_right_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/float/float_right.css', array(), '1.0.0', 'all' ); 
		endif;

		// font_size

		$font_size_0pr_control = get_option( 'oxsn_helpful_css_font_size_0pr_control' );
		if($font_size_0pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_0pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_0pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_1pr_control = get_option( 'oxsn_helpful_css_font_size_1pr_control' );
		if($font_size_1pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_1pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_1pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_2pr_control = get_option( 'oxsn_helpful_css_font_size_2pr_control' );
		if($font_size_2pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_2pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_2pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_3pr_control = get_option( 'oxsn_helpful_css_font_size_3pr_control' );
		if($font_size_3pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_3pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_3pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_4pr_control = get_option( 'oxsn_helpful_css_font_size_4pr_control' );
		if($font_size_4pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_4pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_4pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_5pr_control = get_option( 'oxsn_helpful_css_font_size_5pr_control' );
		if($font_size_5pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_5pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_5pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_6pr_control = get_option( 'oxsn_helpful_css_font_size_6pr_control' );
		if($font_size_6pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_6pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_6pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_7pr_control = get_option( 'oxsn_helpful_css_font_size_7pr_control' );
		if($font_size_7pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_7pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_7pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_8pr_control = get_option( 'oxsn_helpful_css_font_size_8pr_control' );
		if($font_size_8pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_8pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_8pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_9pr_control = get_option( 'oxsn_helpful_css_font_size_9pr_control' );
		if($font_size_9pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_9pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_9pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_10pr_control = get_option( 'oxsn_helpful_css_font_size_10pr_control' );
		if($font_size_10pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_10pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_10pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_11pr_control = get_option( 'oxsn_helpful_css_font_size_11pr_control' );
		if($font_size_11pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_11pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_11pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_12pr_control = get_option( 'oxsn_helpful_css_font_size_12pr_control' );
		if($font_size_12pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_12pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_12pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_13pr_control = get_option( 'oxsn_helpful_css_font_size_13pr_control' );
		if($font_size_13pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_13pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_13pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_14pr_control = get_option( 'oxsn_helpful_css_font_size_14pr_control' );
		if($font_size_14pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_14pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_14pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_15pr_control = get_option( 'oxsn_helpful_css_font_size_15pr_control' );
		if($font_size_15pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_15pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_15pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_16pr_control = get_option( 'oxsn_helpful_css_font_size_16pr_control' );
		if($font_size_16pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_16pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_16pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_17pr_control = get_option( 'oxsn_helpful_css_font_size_17pr_control' );
		if($font_size_17pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_17pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_17pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_18pr_control = get_option( 'oxsn_helpful_css_font_size_18pr_control' );
		if($font_size_18pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_18pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_18pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_19pr_control = get_option( 'oxsn_helpful_css_font_size_19pr_control' );
		if($font_size_19pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_19pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_19pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_20pr_control = get_option( 'oxsn_helpful_css_font_size_20pr_control' );
		if($font_size_20pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_20pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_20pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_21pr_control = get_option( 'oxsn_helpful_css_font_size_21pr_control' );
		if($font_size_21pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_21pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_21pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_22pr_control = get_option( 'oxsn_helpful_css_font_size_22pr_control' );
		if($font_size_22pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_22pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_22pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_23pr_control = get_option( 'oxsn_helpful_css_font_size_23pr_control' );
		if($font_size_23pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_23pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_23pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_24pr_control = get_option( 'oxsn_helpful_css_font_size_24pr_control' );
		if($font_size_24pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_24pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_24pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_25pr_control = get_option( 'oxsn_helpful_css_font_size_25pr_control' );
		if($font_size_25pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_25pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_25pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_26pr_control = get_option( 'oxsn_helpful_css_font_size_26pr_control' );
		if($font_size_26pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_26pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_26pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_27pr_control = get_option( 'oxsn_helpful_css_font_size_27pr_control' );
		if($font_size_27pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_27pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_27pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_28pr_control = get_option( 'oxsn_helpful_css_font_size_28pr_control' );
		if($font_size_28pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_28pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_28pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_29pr_control = get_option( 'oxsn_helpful_css_font_size_29pr_control' );
		if($font_size_29pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_29pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_29pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_30pr_control = get_option( 'oxsn_helpful_css_font_size_30pr_control' );
		if($font_size_30pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_30pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_30pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_31pr_control = get_option( 'oxsn_helpful_css_font_size_31pr_control' );
		if($font_size_31pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_31pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_31pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_32pr_control = get_option( 'oxsn_helpful_css_font_size_32pr_control' );
		if($font_size_32pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_32pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_32pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_33pr_control = get_option( 'oxsn_helpful_css_font_size_33pr_control' );
		if($font_size_33pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_33pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_33pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_34pr_control = get_option( 'oxsn_helpful_css_font_size_34pr_control' );
		if($font_size_34pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_34pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_34pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_35pr_control = get_option( 'oxsn_helpful_css_font_size_35pr_control' );
		if($font_size_35pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_35pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_35pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_36pr_control = get_option( 'oxsn_helpful_css_font_size_36pr_control' );
		if($font_size_36pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_36pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_36pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_37pr_control = get_option( 'oxsn_helpful_css_font_size_37pr_control' );
		if($font_size_37pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_37pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_37pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_38pr_control = get_option( 'oxsn_helpful_css_font_size_38pr_control' );
		if($font_size_38pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_38pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_38pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_39pr_control = get_option( 'oxsn_helpful_css_font_size_39pr_control' );
		if($font_size_39pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_39pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_39pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_40pr_control = get_option( 'oxsn_helpful_css_font_size_40pr_control' );
		if($font_size_40pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_40pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_40pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_41pr_control = get_option( 'oxsn_helpful_css_font_size_41pr_control' );
		if($font_size_41pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_41pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_41pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_42pr_control = get_option( 'oxsn_helpful_css_font_size_42pr_control' );
		if($font_size_42pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_42pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_42pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_43pr_control = get_option( 'oxsn_helpful_css_font_size_43pr_control' );
		if($font_size_43pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_43pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_43pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_44pr_control = get_option( 'oxsn_helpful_css_font_size_44pr_control' );
		if($font_size_44pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_44pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_44pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_45pr_control = get_option( 'oxsn_helpful_css_font_size_45pr_control' );
		if($font_size_45pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_45pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_45pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_46pr_control = get_option( 'oxsn_helpful_css_font_size_46pr_control' );
		if($font_size_46pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_46pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_46pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_47pr_control = get_option( 'oxsn_helpful_css_font_size_47pr_control' );
		if($font_size_47pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_47pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_47pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_48pr_control = get_option( 'oxsn_helpful_css_font_size_48pr_control' );
		if($font_size_48pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_48pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_48pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_49pr_control = get_option( 'oxsn_helpful_css_font_size_49pr_control' );
		if($font_size_49pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_49pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_49pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_50pr_control = get_option( 'oxsn_helpful_css_font_size_50pr_control' );
		if($font_size_50pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_50pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_50pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_51pr_control = get_option( 'oxsn_helpful_css_font_size_51pr_control' );
		if($font_size_51pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_51pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_51pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_52pr_control = get_option( 'oxsn_helpful_css_font_size_52pr_control' );
		if($font_size_52pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_52pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_52pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_53pr_control = get_option( 'oxsn_helpful_css_font_size_53pr_control' );
		if($font_size_53pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_53pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_53pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_54pr_control = get_option( 'oxsn_helpful_css_font_size_54pr_control' );
		if($font_size_54pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_54pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_54pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_55pr_control = get_option( 'oxsn_helpful_css_font_size_55pr_control' );
		if($font_size_55pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_55pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_55pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_56pr_control = get_option( 'oxsn_helpful_css_font_size_56pr_control' );
		if($font_size_56pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_56pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_56pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_57pr_control = get_option( 'oxsn_helpful_css_font_size_57pr_control' );
		if($font_size_57pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_57pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_57pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_58pr_control = get_option( 'oxsn_helpful_css_font_size_58pr_control' );
		if($font_size_58pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_58pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_58pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_59pr_control = get_option( 'oxsn_helpful_css_font_size_59pr_control' );
		if($font_size_59pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_59pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_59pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_60pr_control = get_option( 'oxsn_helpful_css_font_size_60pr_control' );
		if($font_size_60pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_60pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_60pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_61pr_control = get_option( 'oxsn_helpful_css_font_size_61pr_control' );
		if($font_size_61pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_61pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_61pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_62pr_control = get_option( 'oxsn_helpful_css_font_size_62pr_control' );
		if($font_size_62pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_62pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_62pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_63pr_control = get_option( 'oxsn_helpful_css_font_size_63pr_control' );
		if($font_size_63pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_63pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_63pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_64pr_control = get_option( 'oxsn_helpful_css_font_size_64pr_control' );
		if($font_size_64pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_64pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_64pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_65pr_control = get_option( 'oxsn_helpful_css_font_size_65pr_control' );
		if($font_size_65pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_65pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_65pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_66pr_control = get_option( 'oxsn_helpful_css_font_size_66pr_control' );
		if($font_size_66pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_66pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_66pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_67pr_control = get_option( 'oxsn_helpful_css_font_size_67pr_control' );
		if($font_size_67pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_67pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_67pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_68pr_control = get_option( 'oxsn_helpful_css_font_size_68pr_control' );
		if($font_size_68pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_68pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_68pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_69pr_control = get_option( 'oxsn_helpful_css_font_size_69pr_control' );
		if($font_size_69pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_69pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_69pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_70pr_control = get_option( 'oxsn_helpful_css_font_size_70pr_control' );
		if($font_size_70pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_70pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_70pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_71pr_control = get_option( 'oxsn_helpful_css_font_size_71pr_control' );
		if($font_size_71pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_71pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_71pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_72pr_control = get_option( 'oxsn_helpful_css_font_size_72pr_control' );
		if($font_size_72pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_72pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_72pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_73pr_control = get_option( 'oxsn_helpful_css_font_size_73pr_control' );
		if($font_size_73pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_73pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_73pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_74pr_control = get_option( 'oxsn_helpful_css_font_size_74pr_control' );
		if($font_size_74pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_74pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_74pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_75pr_control = get_option( 'oxsn_helpful_css_font_size_75pr_control' );
		if($font_size_75pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_75pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_75pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_76pr_control = get_option( 'oxsn_helpful_css_font_size_76pr_control' );
		if($font_size_76pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_76pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_76pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_77pr_control = get_option( 'oxsn_helpful_css_font_size_77pr_control' );
		if($font_size_77pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_77pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_77pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_78pr_control = get_option( 'oxsn_helpful_css_font_size_78pr_control' );
		if($font_size_78pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_78pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_78pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_79pr_control = get_option( 'oxsn_helpful_css_font_size_79pr_control' );
		if($font_size_79pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_79pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_79pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_80pr_control = get_option( 'oxsn_helpful_css_font_size_80pr_control' );
		if($font_size_80pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_80pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_80pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_81pr_control = get_option( 'oxsn_helpful_css_font_size_81pr_control' );
		if($font_size_81pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_81pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_81pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_82pr_control = get_option( 'oxsn_helpful_css_font_size_82pr_control' );
		if($font_size_82pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_82pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_82pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_83pr_control = get_option( 'oxsn_helpful_css_font_size_83pr_control' );
		if($font_size_83pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_83pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_83pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_84pr_control = get_option( 'oxsn_helpful_css_font_size_84pr_control' );
		if($font_size_84pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_84pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_84pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_85pr_control = get_option( 'oxsn_helpful_css_font_size_85pr_control' );
		if($font_size_85pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_85pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_85pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_86pr_control = get_option( 'oxsn_helpful_css_font_size_86pr_control' );
		if($font_size_86pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_86pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_86pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_87pr_control = get_option( 'oxsn_helpful_css_font_size_87pr_control' );
		if($font_size_87pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_87pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_87pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_88pr_control = get_option( 'oxsn_helpful_css_font_size_88pr_control' );
		if($font_size_88pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_88pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_88pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_89pr_control = get_option( 'oxsn_helpful_css_font_size_89pr_control' );
		if($font_size_89pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_89pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_89pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_90pr_control = get_option( 'oxsn_helpful_css_font_size_90pr_control' );
		if($font_size_90pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_90pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_90pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_91pr_control = get_option( 'oxsn_helpful_css_font_size_91pr_control' );
		if($font_size_91pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_91pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_91pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_92pr_control = get_option( 'oxsn_helpful_css_font_size_92pr_control' );
		if($font_size_92pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_92pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_92pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_93pr_control = get_option( 'oxsn_helpful_css_font_size_93pr_control' );
		if($font_size_93pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_93pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_93pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_94pr_control = get_option( 'oxsn_helpful_css_font_size_94pr_control' );
		if($font_size_94pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_94pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_94pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_95pr_control = get_option( 'oxsn_helpful_css_font_size_95pr_control' );
		if($font_size_95pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_95pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_95pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_96pr_control = get_option( 'oxsn_helpful_css_font_size_96pr_control' );
		if($font_size_96pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_96pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_96pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_97pr_control = get_option( 'oxsn_helpful_css_font_size_97pr_control' );
		if($font_size_97pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_97pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_97pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_98pr_control = get_option( 'oxsn_helpful_css_font_size_98pr_control' );
		if($font_size_98pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_98pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_98pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_99pr_control = get_option( 'oxsn_helpful_css_font_size_99pr_control' );
		if($font_size_99pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_99pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_99pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_100pr_control = get_option( 'oxsn_helpful_css_font_size_100pr_control' );
		if($font_size_100pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_100pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_100pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_125pr_control = get_option( 'oxsn_helpful_css_font_size_125pr_control' );
		if($font_size_125pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_125pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_125pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_150pr_control = get_option( 'oxsn_helpful_css_font_size_150pr_control' );
		if($font_size_150pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_150pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_150pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_175pr_control = get_option( 'oxsn_helpful_css_font_size_175pr_control' );
		if($font_size_175pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_175pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_175pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_200pr_control = get_option( 'oxsn_helpful_css_font_size_200pr_control' );
		if($font_size_200pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_200pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_200pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_225pr_control = get_option( 'oxsn_helpful_css_font_size_225pr_control' );
		if($font_size_225pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_225pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_225pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_250pr_control = get_option( 'oxsn_helpful_css_font_size_250pr_control' );
		if($font_size_250pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_250pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_250pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_275pr_control = get_option( 'oxsn_helpful_css_font_size_275pr_control' );
		if($font_size_275pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_275pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_275pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_300pr_control = get_option( 'oxsn_helpful_css_font_size_300pr_control' );
		if($font_size_300pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_300pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_300pr.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_inherit_control = get_option( 'oxsn_helpful_css_font_size_inherit_control' );
		if($font_size_inherit_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_inherit_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_inherit.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_initial_control = get_option( 'oxsn_helpful_css_font_size_initial_control' );
		if($font_size_initial_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_initial_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_initial.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_large_control = get_option( 'oxsn_helpful_css_font_size_large_control' );
		if($font_size_large_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_large_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_large.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_larger_control = get_option( 'oxsn_helpful_css_font_size_larger_control' );
		if($font_size_larger_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_larger_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_larger.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_medium_control = get_option( 'oxsn_helpful_css_font_size_medium_control' );
		if($font_size_medium_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_medium_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_medium.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_small_control = get_option( 'oxsn_helpful_css_font_size_small_control' );
		if($font_size_small_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_small_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_small.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_smaller_control = get_option( 'oxsn_helpful_css_font_size_smaller_control' );
		if($font_size_smaller_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_smaller_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_smaller.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_x_large_control = get_option( 'oxsn_helpful_css_font_size_x_large_control' );
		if($font_size_x_large_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_x_large_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_x_large.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_x_small_control = get_option( 'oxsn_helpful_css_font_size_x_small_control' );
		if($font_size_x_small_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_x_small_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_x_small.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_xx_large_control = get_option( 'oxsn_helpful_css_font_size_xx_large_control' );
		if($font_size_xx_large_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_xx_large_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_xx_large.css', array(), '1.0.0', 'all' );
		endif;

		$font_size_xx_small_control = get_option( 'oxsn_helpful_css_font_size_xx_small_control' );
		if($font_size_xx_small_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_font_size_xx_small_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/font_size/font_size_xx_small.css', array(), '1.0.0', 'all' );
		endif;

		// line_height

		$line_height_0px_control = get_option( 'oxsn_helpful_css_line_height_0px_control' );
		if($line_height_0px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_0px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_0px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_1px_control = get_option( 'oxsn_helpful_css_line_height_1px_control' );
		if($line_height_1px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_1px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_1px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_2px_control = get_option( 'oxsn_helpful_css_line_height_2px_control' );
		if($line_height_2px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_2px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_2px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_3px_control = get_option( 'oxsn_helpful_css_line_height_3px_control' );
		if($line_height_3px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_3px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_3px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_4px_control = get_option( 'oxsn_helpful_css_line_height_4px_control' );
		if($line_height_4px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_4px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_4px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_5px_control = get_option( 'oxsn_helpful_css_line_height_5px_control' );
		if($line_height_5px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_5px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_5px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_6px_control = get_option( 'oxsn_helpful_css_line_height_6px_control' );
		if($line_height_6px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_6px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_6px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_7px_control = get_option( 'oxsn_helpful_css_line_height_7px_control' );
		if($line_height_7px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_7px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_7px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_8px_control = get_option( 'oxsn_helpful_css_line_height_8px_control' );
		if($line_height_8px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_8px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_8px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_9px_control = get_option( 'oxsn_helpful_css_line_height_9px_control' );
		if($line_height_9px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_9px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_9px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_10px_control = get_option( 'oxsn_helpful_css_line_height_10px_control' );
		if($line_height_10px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_10px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_10px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_11px_control = get_option( 'oxsn_helpful_css_line_height_11px_control' );
		if($line_height_11px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_11px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_11px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_12px_control = get_option( 'oxsn_helpful_css_line_height_12px_control' );
		if($line_height_12px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_12px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_12px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_13px_control = get_option( 'oxsn_helpful_css_line_height_13px_control' );
		if($line_height_13px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_13px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_13px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_14px_control = get_option( 'oxsn_helpful_css_line_height_14px_control' );
		if($line_height_14px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_14px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_14px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_15px_control = get_option( 'oxsn_helpful_css_line_height_15px_control' );
		if($line_height_15px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_15px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_15px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_16px_control = get_option( 'oxsn_helpful_css_line_height_16px_control' );
		if($line_height_16px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_16px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_16px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_17px_control = get_option( 'oxsn_helpful_css_line_height_17px_control' );
		if($line_height_17px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_17px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_17px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_18px_control = get_option( 'oxsn_helpful_css_line_height_18px_control' );
		if($line_height_18px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_18px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_18px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_19px_control = get_option( 'oxsn_helpful_css_line_height_19px_control' );
		if($line_height_19px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_19px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_19px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_20px_control = get_option( 'oxsn_helpful_css_line_height_20px_control' );
		if($line_height_20px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_20px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_20px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_21px_control = get_option( 'oxsn_helpful_css_line_height_21px_control' );
		if($line_height_21px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_21px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_21px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_22px_control = get_option( 'oxsn_helpful_css_line_height_22px_control' );
		if($line_height_22px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_22px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_22px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_23px_control = get_option( 'oxsn_helpful_css_line_height_23px_control' );
		if($line_height_23px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_23px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_23px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_24px_control = get_option( 'oxsn_helpful_css_line_height_24px_control' );
		if($line_height_24px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_24px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_24px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_25px_control = get_option( 'oxsn_helpful_css_line_height_25px_control' );
		if($line_height_25px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_25px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_25px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_26px_control = get_option( 'oxsn_helpful_css_line_height_26px_control' );
		if($line_height_26px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_26px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_26px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_27px_control = get_option( 'oxsn_helpful_css_line_height_27px_control' );
		if($line_height_27px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_27px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_27px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_28px_control = get_option( 'oxsn_helpful_css_line_height_28px_control' );
		if($line_height_28px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_28px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_28px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_29px_control = get_option( 'oxsn_helpful_css_line_height_29px_control' );
		if($line_height_29px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_29px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_29px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_30px_control = get_option( 'oxsn_helpful_css_line_height_30px_control' );
		if($line_height_30px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_30px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_30px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_31px_control = get_option( 'oxsn_helpful_css_line_height_31px_control' );
		if($line_height_31px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_31px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_31px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_32px_control = get_option( 'oxsn_helpful_css_line_height_32px_control' );
		if($line_height_32px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_32px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_32px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_33px_control = get_option( 'oxsn_helpful_css_line_height_33px_control' );
		if($line_height_33px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_33px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_33px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_34px_control = get_option( 'oxsn_helpful_css_line_height_34px_control' );
		if($line_height_34px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_34px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_34px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_35px_control = get_option( 'oxsn_helpful_css_line_height_35px_control' );
		if($line_height_35px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_35px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_35px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_36px_control = get_option( 'oxsn_helpful_css_line_height_36px_control' );
		if($line_height_36px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_36px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_36px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_37px_control = get_option( 'oxsn_helpful_css_line_height_37px_control' );
		if($line_height_37px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_37px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_37px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_38px_control = get_option( 'oxsn_helpful_css_line_height_38px_control' );
		if($line_height_38px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_38px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_38px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_39px_control = get_option( 'oxsn_helpful_css_line_height_39px_control' );
		if($line_height_39px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_39px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_39px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_40px_control = get_option( 'oxsn_helpful_css_line_height_40px_control' );
		if($line_height_40px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_40px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_40px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_41px_control = get_option( 'oxsn_helpful_css_line_height_41px_control' );
		if($line_height_41px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_41px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_41px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_42px_control = get_option( 'oxsn_helpful_css_line_height_42px_control' );
		if($line_height_42px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_42px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_42px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_43px_control = get_option( 'oxsn_helpful_css_line_height_43px_control' );
		if($line_height_43px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_43px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_43px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_44px_control = get_option( 'oxsn_helpful_css_line_height_44px_control' );
		if($line_height_44px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_44px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_44px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_45px_control = get_option( 'oxsn_helpful_css_line_height_45px_control' );
		if($line_height_45px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_45px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_45px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_46px_control = get_option( 'oxsn_helpful_css_line_height_46px_control' );
		if($line_height_46px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_46px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_46px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_47px_control = get_option( 'oxsn_helpful_css_line_height_47px_control' );
		if($line_height_47px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_47px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_47px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_48px_control = get_option( 'oxsn_helpful_css_line_height_48px_control' );
		if($line_height_48px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_48px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_48px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_49px_control = get_option( 'oxsn_helpful_css_line_height_49px_control' );
		if($line_height_49px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_49px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_49px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_50px_control = get_option( 'oxsn_helpful_css_line_height_50px_control' );
		if($line_height_50px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_50px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_50px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_51px_control = get_option( 'oxsn_helpful_css_line_height_51px_control' );
		if($line_height_51px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_51px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_51px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_52px_control = get_option( 'oxsn_helpful_css_line_height_52px_control' );
		if($line_height_52px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_52px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_52px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_53px_control = get_option( 'oxsn_helpful_css_line_height_53px_control' );
		if($line_height_53px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_53px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_53px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_54px_control = get_option( 'oxsn_helpful_css_line_height_54px_control' );
		if($line_height_54px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_54px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_54px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_55px_control = get_option( 'oxsn_helpful_css_line_height_55px_control' );
		if($line_height_55px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_55px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_55px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_56px_control = get_option( 'oxsn_helpful_css_line_height_56px_control' );
		if($line_height_56px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_56px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_56px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_57px_control = get_option( 'oxsn_helpful_css_line_height_57px_control' );
		if($line_height_57px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_57px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_57px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_58px_control = get_option( 'oxsn_helpful_css_line_height_58px_control' );
		if($line_height_58px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_58px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_58px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_59px_control = get_option( 'oxsn_helpful_css_line_height_59px_control' );
		if($line_height_59px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_59px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_59px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_60px_control = get_option( 'oxsn_helpful_css_line_height_60px_control' );
		if($line_height_60px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_60px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_60px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_61px_control = get_option( 'oxsn_helpful_css_line_height_61px_control' );
		if($line_height_61px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_61px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_61px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_62px_control = get_option( 'oxsn_helpful_css_line_height_62px_control' );
		if($line_height_62px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_62px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_62px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_63px_control = get_option( 'oxsn_helpful_css_line_height_63px_control' );
		if($line_height_63px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_63px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_63px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_64px_control = get_option( 'oxsn_helpful_css_line_height_64px_control' );
		if($line_height_64px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_64px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_64px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_65px_control = get_option( 'oxsn_helpful_css_line_height_65px_control' );
		if($line_height_65px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_65px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_65px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_66px_control = get_option( 'oxsn_helpful_css_line_height_66px_control' );
		if($line_height_66px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_66px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_66px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_67px_control = get_option( 'oxsn_helpful_css_line_height_67px_control' );
		if($line_height_67px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_67px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_67px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_68px_control = get_option( 'oxsn_helpful_css_line_height_68px_control' );
		if($line_height_68px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_68px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_68px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_69px_control = get_option( 'oxsn_helpful_css_line_height_69px_control' );
		if($line_height_69px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_69px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_69px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_70px_control = get_option( 'oxsn_helpful_css_line_height_70px_control' );
		if($line_height_70px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_70px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_70px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_71px_control = get_option( 'oxsn_helpful_css_line_height_71px_control' );
		if($line_height_71px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_71px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_71px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_72px_control = get_option( 'oxsn_helpful_css_line_height_72px_control' );
		if($line_height_72px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_72px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_72px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_73px_control = get_option( 'oxsn_helpful_css_line_height_73px_control' );
		if($line_height_73px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_73px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_73px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_74px_control = get_option( 'oxsn_helpful_css_line_height_74px_control' );
		if($line_height_74px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_74px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_74px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_75px_control = get_option( 'oxsn_helpful_css_line_height_75px_control' );
		if($line_height_75px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_75px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_75px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_76px_control = get_option( 'oxsn_helpful_css_line_height_76px_control' );
		if($line_height_76px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_76px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_76px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_77px_control = get_option( 'oxsn_helpful_css_line_height_77px_control' );
		if($line_height_77px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_77px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_77px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_78px_control = get_option( 'oxsn_helpful_css_line_height_78px_control' );
		if($line_height_78px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_78px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_78px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_79px_control = get_option( 'oxsn_helpful_css_line_height_79px_control' );
		if($line_height_79px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_79px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_79px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_80px_control = get_option( 'oxsn_helpful_css_line_height_80px_control' );
		if($line_height_80px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_80px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_80px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_81px_control = get_option( 'oxsn_helpful_css_line_height_81px_control' );
		if($line_height_81px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_81px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_81px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_82px_control = get_option( 'oxsn_helpful_css_line_height_82px_control' );
		if($line_height_82px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_82px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_82px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_83px_control = get_option( 'oxsn_helpful_css_line_height_83px_control' );
		if($line_height_83px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_83px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_83px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_84px_control = get_option( 'oxsn_helpful_css_line_height_84px_control' );
		if($line_height_84px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_84px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_84px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_85px_control = get_option( 'oxsn_helpful_css_line_height_85px_control' );
		if($line_height_85px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_85px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_85px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_86px_control = get_option( 'oxsn_helpful_css_line_height_86px_control' );
		if($line_height_86px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_86px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_86px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_87px_control = get_option( 'oxsn_helpful_css_line_height_87px_control' );
		if($line_height_87px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_87px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_87px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_88px_control = get_option( 'oxsn_helpful_css_line_height_88px_control' );
		if($line_height_88px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_88px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_88px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_89px_control = get_option( 'oxsn_helpful_css_line_height_89px_control' );
		if($line_height_89px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_89px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_89px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_90px_control = get_option( 'oxsn_helpful_css_line_height_90px_control' );
		if($line_height_90px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_90px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_90px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_91px_control = get_option( 'oxsn_helpful_css_line_height_91px_control' );
		if($line_height_91px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_91px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_91px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_92px_control = get_option( 'oxsn_helpful_css_line_height_92px_control' );
		if($line_height_92px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_92px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_92px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_93px_control = get_option( 'oxsn_helpful_css_line_height_93px_control' );
		if($line_height_93px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_93px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_93px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_94px_control = get_option( 'oxsn_helpful_css_line_height_94px_control' );
		if($line_height_94px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_94px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_94px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_95px_control = get_option( 'oxsn_helpful_css_line_height_95px_control' );
		if($line_height_95px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_95px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_95px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_96px_control = get_option( 'oxsn_helpful_css_line_height_96px_control' );
		if($line_height_96px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_96px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_96px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_97px_control = get_option( 'oxsn_helpful_css_line_height_97px_control' );
		if($line_height_97px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_97px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_97px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_98px_control = get_option( 'oxsn_helpful_css_line_height_98px_control' );
		if($line_height_98px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_98px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_98px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_99px_control = get_option( 'oxsn_helpful_css_line_height_99px_control' );
		if($line_height_99px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_99px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_99px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_100px_control = get_option( 'oxsn_helpful_css_line_height_100px_control' );
		if($line_height_100px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_100px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_100px.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_inherit_control = get_option( 'oxsn_helpful_css_line_height_inherit_control' );
		if($line_height_inherit_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_inherit_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_inherit.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_initial_control = get_option( 'oxsn_helpful_css_line_height_initial_control' );
		if($line_height_initial_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_initial_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_initial.css', array(), '1.0.0', 'all' );
		endif;

		$line_height_normal_control = get_option( 'oxsn_helpful_css_line_height_normal_control' );
		if($line_height_normal_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_line_height_normal_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/line_height/line_height_normal.css', array(), '1.0.0', 'all' );
		endif;

		// top

		$top_0px_control = get_option( 'oxsn_helpful_css_top_0px_control' );
		if($top_0px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_0px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_0px.css', array(), '1.0.0', 'all' );
		endif;

		$top_1px_control = get_option( 'oxsn_helpful_css_top_1px_control' );
		if($top_1px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_1px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_1px.css', array(), '1.0.0', 'all' );
		endif;

		$top_2px_control = get_option( 'oxsn_helpful_css_top_2px_control' );
		if($top_2px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_2px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_2px.css', array(), '1.0.0', 'all' );
		endif;

		$top_3px_control = get_option( 'oxsn_helpful_css_top_3px_control' );
		if($top_3px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_3px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_3px.css', array(), '1.0.0', 'all' );
		endif;

		$top_4px_control = get_option( 'oxsn_helpful_css_top_4px_control' );
		if($top_4px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_4px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_4px.css', array(), '1.0.0', 'all' );
		endif;

		$top_5px_control = get_option( 'oxsn_helpful_css_top_5px_control' );
		if($top_5px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_5px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_5px.css', array(), '1.0.0', 'all' );
		endif;

		$top_6px_control = get_option( 'oxsn_helpful_css_top_6px_control' );
		if($top_6px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_6px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_6px.css', array(), '1.0.0', 'all' );
		endif;

		$top_7px_control = get_option( 'oxsn_helpful_css_top_7px_control' );
		if($top_7px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_7px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_7px.css', array(), '1.0.0', 'all' );
		endif;

		$top_8px_control = get_option( 'oxsn_helpful_css_top_8px_control' );
		if($top_8px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_8px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_8px.css', array(), '1.0.0', 'all' );
		endif;

		$top_9px_control = get_option( 'oxsn_helpful_css_top_9px_control' );
		if($top_9px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_9px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_9px.css', array(), '1.0.0', 'all' );
		endif;

		$top_10px_control = get_option( 'oxsn_helpful_css_top_10px_control' );
		if($top_10px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_10px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_10px.css', array(), '1.0.0', 'all' );
		endif;

		$top_11px_control = get_option( 'oxsn_helpful_css_top_11px_control' );
		if($top_11px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_11px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_11px.css', array(), '1.0.0', 'all' );
		endif;

		$top_12px_control = get_option( 'oxsn_helpful_css_top_12px_control' );
		if($top_12px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_12px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_12px.css', array(), '1.0.0', 'all' );
		endif;

		$top_13px_control = get_option( 'oxsn_helpful_css_top_13px_control' );
		if($top_13px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_13px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_13px.css', array(), '1.0.0', 'all' );
		endif;

		$top_14px_control = get_option( 'oxsn_helpful_css_top_14px_control' );
		if($top_14px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_14px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_14px.css', array(), '1.0.0', 'all' );
		endif;

		$top_15px_control = get_option( 'oxsn_helpful_css_top_15px_control' );
		if($top_15px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_15px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_15px.css', array(), '1.0.0', 'all' );
		endif;

		$top_16px_control = get_option( 'oxsn_helpful_css_top_16px_control' );
		if($top_16px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_16px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_16px.css', array(), '1.0.0', 'all' );
		endif;

		$top_17px_control = get_option( 'oxsn_helpful_css_top_17px_control' );
		if($top_17px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_17px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_17px.css', array(), '1.0.0', 'all' );
		endif;

		$top_18px_control = get_option( 'oxsn_helpful_css_top_18px_control' );
		if($top_18px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_18px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_18px.css', array(), '1.0.0', 'all' );
		endif;

		$top_19px_control = get_option( 'oxsn_helpful_css_top_19px_control' );
		if($top_19px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_19px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_19px.css', array(), '1.0.0', 'all' );
		endif;

		$top_20px_control = get_option( 'oxsn_helpful_css_top_20px_control' );
		if($top_20px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_20px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_20px.css', array(), '1.0.0', 'all' );
		endif;

		$top_21px_control = get_option( 'oxsn_helpful_css_top_21px_control' );
		if($top_21px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_21px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_21px.css', array(), '1.0.0', 'all' );
		endif;

		$top_22px_control = get_option( 'oxsn_helpful_css_top_22px_control' );
		if($top_22px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_22px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_22px.css', array(), '1.0.0', 'all' );
		endif;

		$top_23px_control = get_option( 'oxsn_helpful_css_top_23px_control' );
		if($top_23px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_23px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_23px.css', array(), '1.0.0', 'all' );
		endif;

		$top_24px_control = get_option( 'oxsn_helpful_css_top_24px_control' );
		if($top_24px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_24px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_24px.css', array(), '1.0.0', 'all' );
		endif;

		$top_25px_control = get_option( 'oxsn_helpful_css_top_25px_control' );
		if($top_25px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_25px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_25px.css', array(), '1.0.0', 'all' );
		endif;

		$top_26px_control = get_option( 'oxsn_helpful_css_top_26px_control' );
		if($top_26px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_26px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_26px.css', array(), '1.0.0', 'all' );
		endif;

		$top_27px_control = get_option( 'oxsn_helpful_css_top_27px_control' );
		if($top_27px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_27px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_27px.css', array(), '1.0.0', 'all' );
		endif;

		$top_28px_control = get_option( 'oxsn_helpful_css_top_28px_control' );
		if($top_28px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_28px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_28px.css', array(), '1.0.0', 'all' );
		endif;

		$top_29px_control = get_option( 'oxsn_helpful_css_top_29px_control' );
		if($top_29px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_29px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_29px.css', array(), '1.0.0', 'all' );
		endif;

		$top_30px_control = get_option( 'oxsn_helpful_css_top_30px_control' );
		if($top_30px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_30px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_30px.css', array(), '1.0.0', 'all' );
		endif;

		$top_31px_control = get_option( 'oxsn_helpful_css_top_31px_control' );
		if($top_31px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_31px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_31px.css', array(), '1.0.0', 'all' );
		endif;

		$top_32px_control = get_option( 'oxsn_helpful_css_top_32px_control' );
		if($top_32px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_32px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_32px.css', array(), '1.0.0', 'all' );
		endif;

		$top_33px_control = get_option( 'oxsn_helpful_css_top_33px_control' );
		if($top_33px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_33px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_33px.css', array(), '1.0.0', 'all' );
		endif;

		$top_34px_control = get_option( 'oxsn_helpful_css_top_34px_control' );
		if($top_34px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_34px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_34px.css', array(), '1.0.0', 'all' );
		endif;

		$top_35px_control = get_option( 'oxsn_helpful_css_top_35px_control' );
		if($top_35px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_35px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_35px.css', array(), '1.0.0', 'all' );
		endif;

		$top_36px_control = get_option( 'oxsn_helpful_css_top_36px_control' );
		if($top_36px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_36px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_36px.css', array(), '1.0.0', 'all' );
		endif;

		$top_37px_control = get_option( 'oxsn_helpful_css_top_37px_control' );
		if($top_37px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_37px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_37px.css', array(), '1.0.0', 'all' );
		endif;

		$top_38px_control = get_option( 'oxsn_helpful_css_top_38px_control' );
		if($top_38px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_38px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_38px.css', array(), '1.0.0', 'all' );
		endif;

		$top_39px_control = get_option( 'oxsn_helpful_css_top_39px_control' );
		if($top_39px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_39px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_39px.css', array(), '1.0.0', 'all' );
		endif;

		$top_40px_control = get_option( 'oxsn_helpful_css_top_40px_control' );
		if($top_40px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_40px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_40px.css', array(), '1.0.0', 'all' );
		endif;

		$top_41px_control = get_option( 'oxsn_helpful_css_top_41px_control' );
		if($top_41px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_41px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_41px.css', array(), '1.0.0', 'all' );
		endif;

		$top_42px_control = get_option( 'oxsn_helpful_css_top_42px_control' );
		if($top_42px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_42px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_42px.css', array(), '1.0.0', 'all' );
		endif;

		$top_43px_control = get_option( 'oxsn_helpful_css_top_43px_control' );
		if($top_43px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_43px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_43px.css', array(), '1.0.0', 'all' );
		endif;

		$top_44px_control = get_option( 'oxsn_helpful_css_top_44px_control' );
		if($top_44px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_44px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_44px.css', array(), '1.0.0', 'all' );
		endif;

		$top_45px_control = get_option( 'oxsn_helpful_css_top_45px_control' );
		if($top_45px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_45px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_45px.css', array(), '1.0.0', 'all' );
		endif;

		$top_46px_control = get_option( 'oxsn_helpful_css_top_46px_control' );
		if($top_46px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_46px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_46px.css', array(), '1.0.0', 'all' );
		endif;

		$top_47px_control = get_option( 'oxsn_helpful_css_top_47px_control' );
		if($top_47px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_47px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_47px.css', array(), '1.0.0', 'all' );
		endif;

		$top_48px_control = get_option( 'oxsn_helpful_css_top_48px_control' );
		if($top_48px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_48px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_48px.css', array(), '1.0.0', 'all' );
		endif;

		$top_49px_control = get_option( 'oxsn_helpful_css_top_49px_control' );
		if($top_49px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_49px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_49px.css', array(), '1.0.0', 'all' );
		endif;

		$top_50px_control = get_option( 'oxsn_helpful_css_top_50px_control' );
		if($top_50px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_50px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_50px.css', array(), '1.0.0', 'all' );
		endif;

		$top_51px_control = get_option( 'oxsn_helpful_css_top_51px_control' );
		if($top_51px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_51px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_51px.css', array(), '1.0.0', 'all' );
		endif;

		$top_52px_control = get_option( 'oxsn_helpful_css_top_52px_control' );
		if($top_52px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_52px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_52px.css', array(), '1.0.0', 'all' );
		endif;

		$top_53px_control = get_option( 'oxsn_helpful_css_top_53px_control' );
		if($top_53px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_53px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_53px.css', array(), '1.0.0', 'all' );
		endif;

		$top_54px_control = get_option( 'oxsn_helpful_css_top_54px_control' );
		if($top_54px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_54px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_54px.css', array(), '1.0.0', 'all' );
		endif;

		$top_55px_control = get_option( 'oxsn_helpful_css_top_55px_control' );
		if($top_55px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_55px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_55px.css', array(), '1.0.0', 'all' );
		endif;

		$top_56px_control = get_option( 'oxsn_helpful_css_top_56px_control' );
		if($top_56px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_56px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_56px.css', array(), '1.0.0', 'all' );
		endif;

		$top_57px_control = get_option( 'oxsn_helpful_css_top_57px_control' );
		if($top_57px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_57px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_57px.css', array(), '1.0.0', 'all' );
		endif;

		$top_58px_control = get_option( 'oxsn_helpful_css_top_58px_control' );
		if($top_58px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_58px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_58px.css', array(), '1.0.0', 'all' );
		endif;

		$top_59px_control = get_option( 'oxsn_helpful_css_top_59px_control' );
		if($top_59px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_59px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_59px.css', array(), '1.0.0', 'all' );
		endif;

		$top_60px_control = get_option( 'oxsn_helpful_css_top_60px_control' );
		if($top_60px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_60px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_60px.css', array(), '1.0.0', 'all' );
		endif;

		$top_61px_control = get_option( 'oxsn_helpful_css_top_61px_control' );
		if($top_61px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_61px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_61px.css', array(), '1.0.0', 'all' );
		endif;

		$top_62px_control = get_option( 'oxsn_helpful_css_top_62px_control' );
		if($top_62px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_62px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_62px.css', array(), '1.0.0', 'all' );
		endif;

		$top_63px_control = get_option( 'oxsn_helpful_css_top_63px_control' );
		if($top_63px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_63px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_63px.css', array(), '1.0.0', 'all' );
		endif;

		$top_64px_control = get_option( 'oxsn_helpful_css_top_64px_control' );
		if($top_64px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_64px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_64px.css', array(), '1.0.0', 'all' );
		endif;

		$top_65px_control = get_option( 'oxsn_helpful_css_top_65px_control' );
		if($top_65px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_65px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_65px.css', array(), '1.0.0', 'all' );
		endif;

		$top_66px_control = get_option( 'oxsn_helpful_css_top_66px_control' );
		if($top_66px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_66px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_66px.css', array(), '1.0.0', 'all' );
		endif;

		$top_67px_control = get_option( 'oxsn_helpful_css_top_67px_control' );
		if($top_67px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_67px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_67px.css', array(), '1.0.0', 'all' );
		endif;

		$top_68px_control = get_option( 'oxsn_helpful_css_top_68px_control' );
		if($top_68px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_68px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_68px.css', array(), '1.0.0', 'all' );
		endif;

		$top_69px_control = get_option( 'oxsn_helpful_css_top_69px_control' );
		if($top_69px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_69px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_69px.css', array(), '1.0.0', 'all' );
		endif;

		$top_70px_control = get_option( 'oxsn_helpful_css_top_70px_control' );
		if($top_70px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_70px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_70px.css', array(), '1.0.0', 'all' );
		endif;

		$top_71px_control = get_option( 'oxsn_helpful_css_top_71px_control' );
		if($top_71px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_71px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_71px.css', array(), '1.0.0', 'all' );
		endif;

		$top_72px_control = get_option( 'oxsn_helpful_css_top_72px_control' );
		if($top_72px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_72px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_72px.css', array(), '1.0.0', 'all' );
		endif;

		$top_73px_control = get_option( 'oxsn_helpful_css_top_73px_control' );
		if($top_73px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_73px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_73px.css', array(), '1.0.0', 'all' );
		endif;

		$top_74px_control = get_option( 'oxsn_helpful_css_top_74px_control' );
		if($top_74px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_74px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_74px.css', array(), '1.0.0', 'all' );
		endif;

		$top_75px_control = get_option( 'oxsn_helpful_css_top_75px_control' );
		if($top_75px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_75px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_75px.css', array(), '1.0.0', 'all' );
		endif;

		$top_76px_control = get_option( 'oxsn_helpful_css_top_76px_control' );
		if($top_76px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_76px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_76px.css', array(), '1.0.0', 'all' );
		endif;

		$top_77px_control = get_option( 'oxsn_helpful_css_top_77px_control' );
		if($top_77px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_77px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_77px.css', array(), '1.0.0', 'all' );
		endif;

		$top_78px_control = get_option( 'oxsn_helpful_css_top_78px_control' );
		if($top_78px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_78px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_78px.css', array(), '1.0.0', 'all' );
		endif;

		$top_79px_control = get_option( 'oxsn_helpful_css_top_79px_control' );
		if($top_79px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_79px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_79px.css', array(), '1.0.0', 'all' );
		endif;

		$top_80px_control = get_option( 'oxsn_helpful_css_top_80px_control' );
		if($top_80px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_80px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_80px.css', array(), '1.0.0', 'all' );
		endif;

		$top_81px_control = get_option( 'oxsn_helpful_css_top_81px_control' );
		if($top_81px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_81px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_81px.css', array(), '1.0.0', 'all' );
		endif;

		$top_82px_control = get_option( 'oxsn_helpful_css_top_82px_control' );
		if($top_82px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_82px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_82px.css', array(), '1.0.0', 'all' );
		endif;

		$top_83px_control = get_option( 'oxsn_helpful_css_top_83px_control' );
		if($top_83px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_83px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_83px.css', array(), '1.0.0', 'all' );
		endif;

		$top_84px_control = get_option( 'oxsn_helpful_css_top_84px_control' );
		if($top_84px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_84px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_84px.css', array(), '1.0.0', 'all' );
		endif;

		$top_85px_control = get_option( 'oxsn_helpful_css_top_85px_control' );
		if($top_85px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_85px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_85px.css', array(), '1.0.0', 'all' );
		endif;

		$top_86px_control = get_option( 'oxsn_helpful_css_top_86px_control' );
		if($top_86px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_86px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_86px.css', array(), '1.0.0', 'all' );
		endif;

		$top_87px_control = get_option( 'oxsn_helpful_css_top_87px_control' );
		if($top_87px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_87px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_87px.css', array(), '1.0.0', 'all' );
		endif;

		$top_88px_control = get_option( 'oxsn_helpful_css_top_88px_control' );
		if($top_88px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_88px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_88px.css', array(), '1.0.0', 'all' );
		endif;

		$top_89px_control = get_option( 'oxsn_helpful_css_top_89px_control' );
		if($top_89px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_89px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_89px.css', array(), '1.0.0', 'all' );
		endif;

		$top_90px_control = get_option( 'oxsn_helpful_css_top_90px_control' );
		if($top_90px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_90px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_90px.css', array(), '1.0.0', 'all' );
		endif;

		$top_91px_control = get_option( 'oxsn_helpful_css_top_91px_control' );
		if($top_91px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_91px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_91px.css', array(), '1.0.0', 'all' );
		endif;

		$top_92px_control = get_option( 'oxsn_helpful_css_top_92px_control' );
		if($top_92px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_92px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_92px.css', array(), '1.0.0', 'all' );
		endif;

		$top_93px_control = get_option( 'oxsn_helpful_css_top_93px_control' );
		if($top_93px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_93px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_93px.css', array(), '1.0.0', 'all' );
		endif;

		$top_94px_control = get_option( 'oxsn_helpful_css_top_94px_control' );
		if($top_94px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_94px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_94px.css', array(), '1.0.0', 'all' );
		endif;

		$top_95px_control = get_option( 'oxsn_helpful_css_top_95px_control' );
		if($top_95px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_95px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_95px.css', array(), '1.0.0', 'all' );
		endif;

		$top_96px_control = get_option( 'oxsn_helpful_css_top_96px_control' );
		if($top_96px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_96px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_96px.css', array(), '1.0.0', 'all' );
		endif;

		$top_97px_control = get_option( 'oxsn_helpful_css_top_97px_control' );
		if($top_97px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_97px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_97px.css', array(), '1.0.0', 'all' );
		endif;

		$top_98px_control = get_option( 'oxsn_helpful_css_top_98px_control' );
		if($top_98px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_98px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_98px.css', array(), '1.0.0', 'all' );
		endif;

		$top_99px_control = get_option( 'oxsn_helpful_css_top_99px_control' );
		if($top_99px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_99px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_99px.css', array(), '1.0.0', 'all' );
		endif;

		$top_100px_control = get_option( 'oxsn_helpful_css_top_100px_control' );
		if($top_100px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_100px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_100px.css', array(), '1.0.0', 'all' );
		endif;

		$top_auto_control = get_option( 'oxsn_helpful_css_top_auto_control' );
		if($top_auto_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_auto_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_auto.css', array(), '1.0.0', 'all' );
		endif;

		$top_inherit_control = get_option( 'oxsn_helpful_css_top_inherit_control' );
		if($top_inherit_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_inherit_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_inherit.css', array(), '1.0.0', 'all' );
		endif;

		$top_initial_control = get_option( 'oxsn_helpful_css_top_initial_control' );
		if($top_initial_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_top_initial_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/top/top_initial.css', array(), '1.0.0', 'all' );
		endif;

		// right

		$right_0px_control = get_option( 'oxsn_helpful_css_right_0px_control' );
		if($right_0px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_0px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_0px.css', array(), '1.0.0', 'all' );
		endif;

		$right_1px_control = get_option( 'oxsn_helpful_css_right_1px_control' );
		if($right_1px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_1px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_1px.css', array(), '1.0.0', 'all' );
		endif;

		$right_2px_control = get_option( 'oxsn_helpful_css_right_2px_control' );
		if($right_2px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_2px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_2px.css', array(), '1.0.0', 'all' );
		endif;

		$right_3px_control = get_option( 'oxsn_helpful_css_right_3px_control' );
		if($right_3px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_3px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_3px.css', array(), '1.0.0', 'all' );
		endif;

		$right_4px_control = get_option( 'oxsn_helpful_css_right_4px_control' );
		if($right_4px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_4px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_4px.css', array(), '1.0.0', 'all' );
		endif;

		$right_5px_control = get_option( 'oxsn_helpful_css_right_5px_control' );
		if($right_5px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_5px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_5px.css', array(), '1.0.0', 'all' );
		endif;

		$right_6px_control = get_option( 'oxsn_helpful_css_right_6px_control' );
		if($right_6px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_6px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_6px.css', array(), '1.0.0', 'all' );
		endif;

		$right_7px_control = get_option( 'oxsn_helpful_css_right_7px_control' );
		if($right_7px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_7px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_7px.css', array(), '1.0.0', 'all' );
		endif;

		$right_8px_control = get_option( 'oxsn_helpful_css_right_8px_control' );
		if($right_8px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_8px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_8px.css', array(), '1.0.0', 'all' );
		endif;

		$right_9px_control = get_option( 'oxsn_helpful_css_right_9px_control' );
		if($right_9px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_9px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_9px.css', array(), '1.0.0', 'all' );
		endif;

		$right_10px_control = get_option( 'oxsn_helpful_css_right_10px_control' );
		if($right_10px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_10px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_10px.css', array(), '1.0.0', 'all' );
		endif;

		$right_11px_control = get_option( 'oxsn_helpful_css_right_11px_control' );
		if($right_11px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_11px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_11px.css', array(), '1.0.0', 'all' );
		endif;

		$right_12px_control = get_option( 'oxsn_helpful_css_right_12px_control' );
		if($right_12px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_12px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_12px.css', array(), '1.0.0', 'all' );
		endif;

		$right_13px_control = get_option( 'oxsn_helpful_css_right_13px_control' );
		if($right_13px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_13px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_13px.css', array(), '1.0.0', 'all' );
		endif;

		$right_14px_control = get_option( 'oxsn_helpful_css_right_14px_control' );
		if($right_14px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_14px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_14px.css', array(), '1.0.0', 'all' );
		endif;

		$right_15px_control = get_option( 'oxsn_helpful_css_right_15px_control' );
		if($right_15px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_15px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_15px.css', array(), '1.0.0', 'all' );
		endif;

		$right_16px_control = get_option( 'oxsn_helpful_css_right_16px_control' );
		if($right_16px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_16px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_16px.css', array(), '1.0.0', 'all' );
		endif;

		$right_17px_control = get_option( 'oxsn_helpful_css_right_17px_control' );
		if($right_17px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_17px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_17px.css', array(), '1.0.0', 'all' );
		endif;

		$right_18px_control = get_option( 'oxsn_helpful_css_right_18px_control' );
		if($right_18px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_18px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_18px.css', array(), '1.0.0', 'all' );
		endif;

		$right_19px_control = get_option( 'oxsn_helpful_css_right_19px_control' );
		if($right_19px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_19px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_19px.css', array(), '1.0.0', 'all' );
		endif;

		$right_20px_control = get_option( 'oxsn_helpful_css_right_20px_control' );
		if($right_20px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_20px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_20px.css', array(), '1.0.0', 'all' );
		endif;

		$right_21px_control = get_option( 'oxsn_helpful_css_right_21px_control' );
		if($right_21px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_21px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_21px.css', array(), '1.0.0', 'all' );
		endif;

		$right_22px_control = get_option( 'oxsn_helpful_css_right_22px_control' );
		if($right_22px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_22px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_22px.css', array(), '1.0.0', 'all' );
		endif;

		$right_23px_control = get_option( 'oxsn_helpful_css_right_23px_control' );
		if($right_23px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_23px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_23px.css', array(), '1.0.0', 'all' );
		endif;

		$right_24px_control = get_option( 'oxsn_helpful_css_right_24px_control' );
		if($right_24px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_24px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_24px.css', array(), '1.0.0', 'all' );
		endif;

		$right_25px_control = get_option( 'oxsn_helpful_css_right_25px_control' );
		if($right_25px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_25px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_25px.css', array(), '1.0.0', 'all' );
		endif;

		$right_26px_control = get_option( 'oxsn_helpful_css_right_26px_control' );
		if($right_26px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_26px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_26px.css', array(), '1.0.0', 'all' );
		endif;

		$right_27px_control = get_option( 'oxsn_helpful_css_right_27px_control' );
		if($right_27px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_27px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_27px.css', array(), '1.0.0', 'all' );
		endif;

		$right_28px_control = get_option( 'oxsn_helpful_css_right_28px_control' );
		if($right_28px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_28px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_28px.css', array(), '1.0.0', 'all' );
		endif;

		$right_29px_control = get_option( 'oxsn_helpful_css_right_29px_control' );
		if($right_29px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_29px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_29px.css', array(), '1.0.0', 'all' );
		endif;

		$right_30px_control = get_option( 'oxsn_helpful_css_right_30px_control' );
		if($right_30px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_30px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_30px.css', array(), '1.0.0', 'all' );
		endif;

		$right_31px_control = get_option( 'oxsn_helpful_css_right_31px_control' );
		if($right_31px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_31px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_31px.css', array(), '1.0.0', 'all' );
		endif;

		$right_32px_control = get_option( 'oxsn_helpful_css_right_32px_control' );
		if($right_32px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_32px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_32px.css', array(), '1.0.0', 'all' );
		endif;

		$right_33px_control = get_option( 'oxsn_helpful_css_right_33px_control' );
		if($right_33px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_33px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_33px.css', array(), '1.0.0', 'all' );
		endif;

		$right_34px_control = get_option( 'oxsn_helpful_css_right_34px_control' );
		if($right_34px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_34px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_34px.css', array(), '1.0.0', 'all' );
		endif;

		$right_35px_control = get_option( 'oxsn_helpful_css_right_35px_control' );
		if($right_35px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_35px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_35px.css', array(), '1.0.0', 'all' );
		endif;

		$right_36px_control = get_option( 'oxsn_helpful_css_right_36px_control' );
		if($right_36px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_36px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_36px.css', array(), '1.0.0', 'all' );
		endif;

		$right_37px_control = get_option( 'oxsn_helpful_css_right_37px_control' );
		if($right_37px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_37px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_37px.css', array(), '1.0.0', 'all' );
		endif;

		$right_38px_control = get_option( 'oxsn_helpful_css_right_38px_control' );
		if($right_38px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_38px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_38px.css', array(), '1.0.0', 'all' );
		endif;

		$right_39px_control = get_option( 'oxsn_helpful_css_right_39px_control' );
		if($right_39px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_39px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_39px.css', array(), '1.0.0', 'all' );
		endif;

		$right_40px_control = get_option( 'oxsn_helpful_css_right_40px_control' );
		if($right_40px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_40px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_40px.css', array(), '1.0.0', 'all' );
		endif;

		$right_41px_control = get_option( 'oxsn_helpful_css_right_41px_control' );
		if($right_41px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_41px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_41px.css', array(), '1.0.0', 'all' );
		endif;

		$right_42px_control = get_option( 'oxsn_helpful_css_right_42px_control' );
		if($right_42px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_42px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_42px.css', array(), '1.0.0', 'all' );
		endif;

		$right_43px_control = get_option( 'oxsn_helpful_css_right_43px_control' );
		if($right_43px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_43px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_43px.css', array(), '1.0.0', 'all' );
		endif;

		$right_44px_control = get_option( 'oxsn_helpful_css_right_44px_control' );
		if($right_44px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_44px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_44px.css', array(), '1.0.0', 'all' );
		endif;

		$right_45px_control = get_option( 'oxsn_helpful_css_right_45px_control' );
		if($right_45px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_45px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_45px.css', array(), '1.0.0', 'all' );
		endif;

		$right_46px_control = get_option( 'oxsn_helpful_css_right_46px_control' );
		if($right_46px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_46px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_46px.css', array(), '1.0.0', 'all' );
		endif;

		$right_47px_control = get_option( 'oxsn_helpful_css_right_47px_control' );
		if($right_47px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_47px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_47px.css', array(), '1.0.0', 'all' );
		endif;

		$right_48px_control = get_option( 'oxsn_helpful_css_right_48px_control' );
		if($right_48px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_48px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_48px.css', array(), '1.0.0', 'all' );
		endif;

		$right_49px_control = get_option( 'oxsn_helpful_css_right_49px_control' );
		if($right_49px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_49px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_49px.css', array(), '1.0.0', 'all' );
		endif;

		$right_50px_control = get_option( 'oxsn_helpful_css_right_50px_control' );
		if($right_50px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_50px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_50px.css', array(), '1.0.0', 'all' );
		endif;

		$right_51px_control = get_option( 'oxsn_helpful_css_right_51px_control' );
		if($right_51px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_51px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_51px.css', array(), '1.0.0', 'all' );
		endif;

		$right_52px_control = get_option( 'oxsn_helpful_css_right_52px_control' );
		if($right_52px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_52px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_52px.css', array(), '1.0.0', 'all' );
		endif;

		$right_53px_control = get_option( 'oxsn_helpful_css_right_53px_control' );
		if($right_53px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_53px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_53px.css', array(), '1.0.0', 'all' );
		endif;

		$right_54px_control = get_option( 'oxsn_helpful_css_right_54px_control' );
		if($right_54px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_54px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_54px.css', array(), '1.0.0', 'all' );
		endif;

		$right_55px_control = get_option( 'oxsn_helpful_css_right_55px_control' );
		if($right_55px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_55px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_55px.css', array(), '1.0.0', 'all' );
		endif;

		$right_56px_control = get_option( 'oxsn_helpful_css_right_56px_control' );
		if($right_56px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_56px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_56px.css', array(), '1.0.0', 'all' );
		endif;

		$right_57px_control = get_option( 'oxsn_helpful_css_right_57px_control' );
		if($right_57px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_57px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_57px.css', array(), '1.0.0', 'all' );
		endif;

		$right_58px_control = get_option( 'oxsn_helpful_css_right_58px_control' );
		if($right_58px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_58px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_58px.css', array(), '1.0.0', 'all' );
		endif;

		$right_59px_control = get_option( 'oxsn_helpful_css_right_59px_control' );
		if($right_59px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_59px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_59px.css', array(), '1.0.0', 'all' );
		endif;

		$right_60px_control = get_option( 'oxsn_helpful_css_right_60px_control' );
		if($right_60px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_60px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_60px.css', array(), '1.0.0', 'all' );
		endif;

		$right_61px_control = get_option( 'oxsn_helpful_css_right_61px_control' );
		if($right_61px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_61px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_61px.css', array(), '1.0.0', 'all' );
		endif;

		$right_62px_control = get_option( 'oxsn_helpful_css_right_62px_control' );
		if($right_62px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_62px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_62px.css', array(), '1.0.0', 'all' );
		endif;

		$right_63px_control = get_option( 'oxsn_helpful_css_right_63px_control' );
		if($right_63px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_63px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_63px.css', array(), '1.0.0', 'all' );
		endif;

		$right_64px_control = get_option( 'oxsn_helpful_css_right_64px_control' );
		if($right_64px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_64px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_64px.css', array(), '1.0.0', 'all' );
		endif;

		$right_65px_control = get_option( 'oxsn_helpful_css_right_65px_control' );
		if($right_65px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_65px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_65px.css', array(), '1.0.0', 'all' );
		endif;

		$right_66px_control = get_option( 'oxsn_helpful_css_right_66px_control' );
		if($right_66px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_66px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_66px.css', array(), '1.0.0', 'all' );
		endif;

		$right_67px_control = get_option( 'oxsn_helpful_css_right_67px_control' );
		if($right_67px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_67px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_67px.css', array(), '1.0.0', 'all' );
		endif;

		$right_68px_control = get_option( 'oxsn_helpful_css_right_68px_control' );
		if($right_68px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_68px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_68px.css', array(), '1.0.0', 'all' );
		endif;

		$right_69px_control = get_option( 'oxsn_helpful_css_right_69px_control' );
		if($right_69px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_69px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_69px.css', array(), '1.0.0', 'all' );
		endif;

		$right_70px_control = get_option( 'oxsn_helpful_css_right_70px_control' );
		if($right_70px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_70px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_70px.css', array(), '1.0.0', 'all' );
		endif;

		$right_71px_control = get_option( 'oxsn_helpful_css_right_71px_control' );
		if($right_71px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_71px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_71px.css', array(), '1.0.0', 'all' );
		endif;

		$right_72px_control = get_option( 'oxsn_helpful_css_right_72px_control' );
		if($right_72px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_72px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_72px.css', array(), '1.0.0', 'all' );
		endif;

		$right_73px_control = get_option( 'oxsn_helpful_css_right_73px_control' );
		if($right_73px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_73px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_73px.css', array(), '1.0.0', 'all' );
		endif;

		$right_74px_control = get_option( 'oxsn_helpful_css_right_74px_control' );
		if($right_74px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_74px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_74px.css', array(), '1.0.0', 'all' );
		endif;

		$right_75px_control = get_option( 'oxsn_helpful_css_right_75px_control' );
		if($right_75px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_75px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_75px.css', array(), '1.0.0', 'all' );
		endif;

		$right_76px_control = get_option( 'oxsn_helpful_css_right_76px_control' );
		if($right_76px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_76px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_76px.css', array(), '1.0.0', 'all' );
		endif;

		$right_77px_control = get_option( 'oxsn_helpful_css_right_77px_control' );
		if($right_77px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_77px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_77px.css', array(), '1.0.0', 'all' );
		endif;

		$right_78px_control = get_option( 'oxsn_helpful_css_right_78px_control' );
		if($right_78px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_78px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_78px.css', array(), '1.0.0', 'all' );
		endif;

		$right_79px_control = get_option( 'oxsn_helpful_css_right_79px_control' );
		if($right_79px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_79px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_79px.css', array(), '1.0.0', 'all' );
		endif;

		$right_80px_control = get_option( 'oxsn_helpful_css_right_80px_control' );
		if($right_80px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_80px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_80px.css', array(), '1.0.0', 'all' );
		endif;

		$right_81px_control = get_option( 'oxsn_helpful_css_right_81px_control' );
		if($right_81px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_81px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_81px.css', array(), '1.0.0', 'all' );
		endif;

		$right_82px_control = get_option( 'oxsn_helpful_css_right_82px_control' );
		if($right_82px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_82px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_82px.css', array(), '1.0.0', 'all' );
		endif;

		$right_83px_control = get_option( 'oxsn_helpful_css_right_83px_control' );
		if($right_83px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_83px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_83px.css', array(), '1.0.0', 'all' );
		endif;

		$right_84px_control = get_option( 'oxsn_helpful_css_right_84px_control' );
		if($right_84px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_84px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_84px.css', array(), '1.0.0', 'all' );
		endif;

		$right_85px_control = get_option( 'oxsn_helpful_css_right_85px_control' );
		if($right_85px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_85px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_85px.css', array(), '1.0.0', 'all' );
		endif;

		$right_86px_control = get_option( 'oxsn_helpful_css_right_86px_control' );
		if($right_86px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_86px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_86px.css', array(), '1.0.0', 'all' );
		endif;

		$right_87px_control = get_option( 'oxsn_helpful_css_right_87px_control' );
		if($right_87px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_87px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_87px.css', array(), '1.0.0', 'all' );
		endif;

		$right_88px_control = get_option( 'oxsn_helpful_css_right_88px_control' );
		if($right_88px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_88px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_88px.css', array(), '1.0.0', 'all' );
		endif;

		$right_89px_control = get_option( 'oxsn_helpful_css_right_89px_control' );
		if($right_89px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_89px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_89px.css', array(), '1.0.0', 'all' );
		endif;

		$right_90px_control = get_option( 'oxsn_helpful_css_right_90px_control' );
		if($right_90px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_90px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_90px.css', array(), '1.0.0', 'all' );
		endif;

		$right_91px_control = get_option( 'oxsn_helpful_css_right_91px_control' );
		if($right_91px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_91px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_91px.css', array(), '1.0.0', 'all' );
		endif;

		$right_92px_control = get_option( 'oxsn_helpful_css_right_92px_control' );
		if($right_92px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_92px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_92px.css', array(), '1.0.0', 'all' );
		endif;

		$right_93px_control = get_option( 'oxsn_helpful_css_right_93px_control' );
		if($right_93px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_93px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_93px.css', array(), '1.0.0', 'all' );
		endif;

		$right_94px_control = get_option( 'oxsn_helpful_css_right_94px_control' );
		if($right_94px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_94px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_94px.css', array(), '1.0.0', 'all' );
		endif;

		$right_95px_control = get_option( 'oxsn_helpful_css_right_95px_control' );
		if($right_95px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_95px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_95px.css', array(), '1.0.0', 'all' );
		endif;

		$right_96px_control = get_option( 'oxsn_helpful_css_right_96px_control' );
		if($right_96px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_96px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_96px.css', array(), '1.0.0', 'all' );
		endif;

		$right_97px_control = get_option( 'oxsn_helpful_css_right_97px_control' );
		if($right_97px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_97px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_97px.css', array(), '1.0.0', 'all' );
		endif;

		$right_98px_control = get_option( 'oxsn_helpful_css_right_98px_control' );
		if($right_98px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_98px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_98px.css', array(), '1.0.0', 'all' );
		endif;

		$right_99px_control = get_option( 'oxsn_helpful_css_right_99px_control' );
		if($right_99px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_99px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_99px.css', array(), '1.0.0', 'all' );
		endif;

		$right_100px_control = get_option( 'oxsn_helpful_css_right_100px_control' );
		if($right_100px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_100px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_100px.css', array(), '1.0.0', 'all' );
		endif;

		$right_auto_control = get_option( 'oxsn_helpful_css_right_auto_control' );
		if($right_auto_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_auto_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_auto.css', array(), '1.0.0', 'all' );
		endif;

		$right_inherit_control = get_option( 'oxsn_helpful_css_right_inherit_control' );
		if($right_inherit_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_inherit_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_inherit.css', array(), '1.0.0', 'all' );
		endif;

		$right_initial_control = get_option( 'oxsn_helpful_css_right_initial_control' );
		if($right_initial_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_right_initial_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/right/right_initial.css', array(), '1.0.0', 'all' );
		endif;

		// bottom

		$bottom_0px_control = get_option( 'oxsn_helpful_css_bottom_0px_control' );
		if($bottom_0px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_0px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_0px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_1px_control = get_option( 'oxsn_helpful_css_bottom_1px_control' );
		if($bottom_1px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_1px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_1px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_2px_control = get_option( 'oxsn_helpful_css_bottom_2px_control' );
		if($bottom_2px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_2px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_2px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_3px_control = get_option( 'oxsn_helpful_css_bottom_3px_control' );
		if($bottom_3px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_3px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_3px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_4px_control = get_option( 'oxsn_helpful_css_bottom_4px_control' );
		if($bottom_4px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_4px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_4px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_5px_control = get_option( 'oxsn_helpful_css_bottom_5px_control' );
		if($bottom_5px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_5px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_5px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_6px_control = get_option( 'oxsn_helpful_css_bottom_6px_control' );
		if($bottom_6px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_6px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_6px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_7px_control = get_option( 'oxsn_helpful_css_bottom_7px_control' );
		if($bottom_7px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_7px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_7px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_8px_control = get_option( 'oxsn_helpful_css_bottom_8px_control' );
		if($bottom_8px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_8px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_8px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_9px_control = get_option( 'oxsn_helpful_css_bottom_9px_control' );
		if($bottom_9px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_9px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_9px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_10px_control = get_option( 'oxsn_helpful_css_bottom_10px_control' );
		if($bottom_10px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_10px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_10px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_11px_control = get_option( 'oxsn_helpful_css_bottom_11px_control' );
		if($bottom_11px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_11px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_11px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_12px_control = get_option( 'oxsn_helpful_css_bottom_12px_control' );
		if($bottom_12px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_12px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_12px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_13px_control = get_option( 'oxsn_helpful_css_bottom_13px_control' );
		if($bottom_13px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_13px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_13px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_14px_control = get_option( 'oxsn_helpful_css_bottom_14px_control' );
		if($bottom_14px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_14px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_14px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_15px_control = get_option( 'oxsn_helpful_css_bottom_15px_control' );
		if($bottom_15px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_15px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_15px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_16px_control = get_option( 'oxsn_helpful_css_bottom_16px_control' );
		if($bottom_16px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_16px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_16px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_17px_control = get_option( 'oxsn_helpful_css_bottom_17px_control' );
		if($bottom_17px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_17px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_17px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_18px_control = get_option( 'oxsn_helpful_css_bottom_18px_control' );
		if($bottom_18px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_18px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_18px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_19px_control = get_option( 'oxsn_helpful_css_bottom_19px_control' );
		if($bottom_19px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_19px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_19px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_20px_control = get_option( 'oxsn_helpful_css_bottom_20px_control' );
		if($bottom_20px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_20px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_20px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_21px_control = get_option( 'oxsn_helpful_css_bottom_21px_control' );
		if($bottom_21px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_21px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_21px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_22px_control = get_option( 'oxsn_helpful_css_bottom_22px_control' );
		if($bottom_22px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_22px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_22px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_23px_control = get_option( 'oxsn_helpful_css_bottom_23px_control' );
		if($bottom_23px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_23px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_23px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_24px_control = get_option( 'oxsn_helpful_css_bottom_24px_control' );
		if($bottom_24px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_24px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_24px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_25px_control = get_option( 'oxsn_helpful_css_bottom_25px_control' );
		if($bottom_25px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_25px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_25px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_26px_control = get_option( 'oxsn_helpful_css_bottom_26px_control' );
		if($bottom_26px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_26px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_26px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_27px_control = get_option( 'oxsn_helpful_css_bottom_27px_control' );
		if($bottom_27px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_27px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_27px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_28px_control = get_option( 'oxsn_helpful_css_bottom_28px_control' );
		if($bottom_28px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_28px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_28px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_29px_control = get_option( 'oxsn_helpful_css_bottom_29px_control' );
		if($bottom_29px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_29px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_29px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_30px_control = get_option( 'oxsn_helpful_css_bottom_30px_control' );
		if($bottom_30px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_30px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_30px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_31px_control = get_option( 'oxsn_helpful_css_bottom_31px_control' );
		if($bottom_31px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_31px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_31px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_32px_control = get_option( 'oxsn_helpful_css_bottom_32px_control' );
		if($bottom_32px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_32px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_32px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_33px_control = get_option( 'oxsn_helpful_css_bottom_33px_control' );
		if($bottom_33px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_33px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_33px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_34px_control = get_option( 'oxsn_helpful_css_bottom_34px_control' );
		if($bottom_34px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_34px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_34px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_35px_control = get_option( 'oxsn_helpful_css_bottom_35px_control' );
		if($bottom_35px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_35px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_35px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_36px_control = get_option( 'oxsn_helpful_css_bottom_36px_control' );
		if($bottom_36px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_36px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_36px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_37px_control = get_option( 'oxsn_helpful_css_bottom_37px_control' );
		if($bottom_37px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_37px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_37px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_38px_control = get_option( 'oxsn_helpful_css_bottom_38px_control' );
		if($bottom_38px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_38px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_38px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_39px_control = get_option( 'oxsn_helpful_css_bottom_39px_control' );
		if($bottom_39px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_39px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_39px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_40px_control = get_option( 'oxsn_helpful_css_bottom_40px_control' );
		if($bottom_40px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_40px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_40px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_41px_control = get_option( 'oxsn_helpful_css_bottom_41px_control' );
		if($bottom_41px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_41px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_41px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_42px_control = get_option( 'oxsn_helpful_css_bottom_42px_control' );
		if($bottom_42px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_42px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_42px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_43px_control = get_option( 'oxsn_helpful_css_bottom_43px_control' );
		if($bottom_43px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_43px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_43px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_44px_control = get_option( 'oxsn_helpful_css_bottom_44px_control' );
		if($bottom_44px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_44px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_44px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_45px_control = get_option( 'oxsn_helpful_css_bottom_45px_control' );
		if($bottom_45px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_45px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_45px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_46px_control = get_option( 'oxsn_helpful_css_bottom_46px_control' );
		if($bottom_46px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_46px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_46px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_47px_control = get_option( 'oxsn_helpful_css_bottom_47px_control' );
		if($bottom_47px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_47px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_47px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_48px_control = get_option( 'oxsn_helpful_css_bottom_48px_control' );
		if($bottom_48px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_48px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_48px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_49px_control = get_option( 'oxsn_helpful_css_bottom_49px_control' );
		if($bottom_49px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_49px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_49px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_50px_control = get_option( 'oxsn_helpful_css_bottom_50px_control' );
		if($bottom_50px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_50px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_50px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_51px_control = get_option( 'oxsn_helpful_css_bottom_51px_control' );
		if($bottom_51px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_51px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_51px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_52px_control = get_option( 'oxsn_helpful_css_bottom_52px_control' );
		if($bottom_52px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_52px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_52px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_53px_control = get_option( 'oxsn_helpful_css_bottom_53px_control' );
		if($bottom_53px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_53px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_53px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_54px_control = get_option( 'oxsn_helpful_css_bottom_54px_control' );
		if($bottom_54px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_54px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_54px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_55px_control = get_option( 'oxsn_helpful_css_bottom_55px_control' );
		if($bottom_55px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_55px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_55px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_56px_control = get_option( 'oxsn_helpful_css_bottom_56px_control' );
		if($bottom_56px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_56px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_56px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_57px_control = get_option( 'oxsn_helpful_css_bottom_57px_control' );
		if($bottom_57px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_57px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_57px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_58px_control = get_option( 'oxsn_helpful_css_bottom_58px_control' );
		if($bottom_58px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_58px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_58px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_59px_control = get_option( 'oxsn_helpful_css_bottom_59px_control' );
		if($bottom_59px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_59px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_59px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_60px_control = get_option( 'oxsn_helpful_css_bottom_60px_control' );
		if($bottom_60px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_60px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_60px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_61px_control = get_option( 'oxsn_helpful_css_bottom_61px_control' );
		if($bottom_61px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_61px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_61px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_62px_control = get_option( 'oxsn_helpful_css_bottom_62px_control' );
		if($bottom_62px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_62px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_62px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_63px_control = get_option( 'oxsn_helpful_css_bottom_63px_control' );
		if($bottom_63px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_63px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_63px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_64px_control = get_option( 'oxsn_helpful_css_bottom_64px_control' );
		if($bottom_64px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_64px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_64px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_65px_control = get_option( 'oxsn_helpful_css_bottom_65px_control' );
		if($bottom_65px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_65px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_65px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_66px_control = get_option( 'oxsn_helpful_css_bottom_66px_control' );
		if($bottom_66px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_66px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_66px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_67px_control = get_option( 'oxsn_helpful_css_bottom_67px_control' );
		if($bottom_67px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_67px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_67px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_68px_control = get_option( 'oxsn_helpful_css_bottom_68px_control' );
		if($bottom_68px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_68px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_68px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_69px_control = get_option( 'oxsn_helpful_css_bottom_69px_control' );
		if($bottom_69px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_69px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_69px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_70px_control = get_option( 'oxsn_helpful_css_bottom_70px_control' );
		if($bottom_70px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_70px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_70px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_71px_control = get_option( 'oxsn_helpful_css_bottom_71px_control' );
		if($bottom_71px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_71px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_71px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_72px_control = get_option( 'oxsn_helpful_css_bottom_72px_control' );
		if($bottom_72px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_72px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_72px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_73px_control = get_option( 'oxsn_helpful_css_bottom_73px_control' );
		if($bottom_73px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_73px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_73px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_74px_control = get_option( 'oxsn_helpful_css_bottom_74px_control' );
		if($bottom_74px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_74px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_74px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_75px_control = get_option( 'oxsn_helpful_css_bottom_75px_control' );
		if($bottom_75px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_75px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_75px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_76px_control = get_option( 'oxsn_helpful_css_bottom_76px_control' );
		if($bottom_76px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_76px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_76px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_77px_control = get_option( 'oxsn_helpful_css_bottom_77px_control' );
		if($bottom_77px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_77px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_77px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_78px_control = get_option( 'oxsn_helpful_css_bottom_78px_control' );
		if($bottom_78px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_78px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_78px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_79px_control = get_option( 'oxsn_helpful_css_bottom_79px_control' );
		if($bottom_79px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_79px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_79px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_80px_control = get_option( 'oxsn_helpful_css_bottom_80px_control' );
		if($bottom_80px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_80px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_80px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_81px_control = get_option( 'oxsn_helpful_css_bottom_81px_control' );
		if($bottom_81px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_81px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_81px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_82px_control = get_option( 'oxsn_helpful_css_bottom_82px_control' );
		if($bottom_82px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_82px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_82px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_83px_control = get_option( 'oxsn_helpful_css_bottom_83px_control' );
		if($bottom_83px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_83px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_83px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_84px_control = get_option( 'oxsn_helpful_css_bottom_84px_control' );
		if($bottom_84px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_84px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_84px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_85px_control = get_option( 'oxsn_helpful_css_bottom_85px_control' );
		if($bottom_85px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_85px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_85px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_86px_control = get_option( 'oxsn_helpful_css_bottom_86px_control' );
		if($bottom_86px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_86px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_86px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_87px_control = get_option( 'oxsn_helpful_css_bottom_87px_control' );
		if($bottom_87px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_87px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_87px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_88px_control = get_option( 'oxsn_helpful_css_bottom_88px_control' );
		if($bottom_88px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_88px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_88px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_89px_control = get_option( 'oxsn_helpful_css_bottom_89px_control' );
		if($bottom_89px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_89px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_89px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_90px_control = get_option( 'oxsn_helpful_css_bottom_90px_control' );
		if($bottom_90px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_90px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_90px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_91px_control = get_option( 'oxsn_helpful_css_bottom_91px_control' );
		if($bottom_91px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_91px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_91px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_92px_control = get_option( 'oxsn_helpful_css_bottom_92px_control' );
		if($bottom_92px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_92px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_92px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_93px_control = get_option( 'oxsn_helpful_css_bottom_93px_control' );
		if($bottom_93px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_93px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_93px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_94px_control = get_option( 'oxsn_helpful_css_bottom_94px_control' );
		if($bottom_94px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_94px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_94px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_95px_control = get_option( 'oxsn_helpful_css_bottom_95px_control' );
		if($bottom_95px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_95px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_95px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_96px_control = get_option( 'oxsn_helpful_css_bottom_96px_control' );
		if($bottom_96px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_96px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_96px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_97px_control = get_option( 'oxsn_helpful_css_bottom_97px_control' );
		if($bottom_97px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_97px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_97px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_98px_control = get_option( 'oxsn_helpful_css_bottom_98px_control' );
		if($bottom_98px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_98px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_98px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_99px_control = get_option( 'oxsn_helpful_css_bottom_99px_control' );
		if($bottom_99px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_99px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_99px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_100px_control = get_option( 'oxsn_helpful_css_bottom_100px_control' );
		if($bottom_100px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_100px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_100px.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_auto_control = get_option( 'oxsn_helpful_css_bottom_auto_control' );
		if($bottom_auto_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_auto_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_auto.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_inherit_control = get_option( 'oxsn_helpful_css_bottom_inherit_control' );
		if($bottom_inherit_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_inherit_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_inherit.css', array(), '1.0.0', 'all' );
		endif;

		$bottom_initial_control = get_option( 'oxsn_helpful_css_bottom_initial_control' );
		if($bottom_initial_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_bottom_initial_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/bottom/bottom_initial.css', array(), '1.0.0', 'all' );
		endif;

		// left

		$left_0px_control = get_option( 'oxsn_helpful_css_left_0px_control' );
		if($left_0px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_0px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_0px.css', array(), '1.0.0', 'all' );
		endif;

		$left_1px_control = get_option( 'oxsn_helpful_css_left_1px_control' );
		if($left_1px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_1px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_1px.css', array(), '1.0.0', 'all' );
		endif;

		$left_2px_control = get_option( 'oxsn_helpful_css_left_2px_control' );
		if($left_2px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_2px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_2px.css', array(), '1.0.0', 'all' );
		endif;

		$left_3px_control = get_option( 'oxsn_helpful_css_left_3px_control' );
		if($left_3px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_3px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_3px.css', array(), '1.0.0', 'all' );
		endif;

		$left_4px_control = get_option( 'oxsn_helpful_css_left_4px_control' );
		if($left_4px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_4px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_4px.css', array(), '1.0.0', 'all' );
		endif;

		$left_5px_control = get_option( 'oxsn_helpful_css_left_5px_control' );
		if($left_5px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_5px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_5px.css', array(), '1.0.0', 'all' );
		endif;

		$left_6px_control = get_option( 'oxsn_helpful_css_left_6px_control' );
		if($left_6px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_6px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_6px.css', array(), '1.0.0', 'all' );
		endif;

		$left_7px_control = get_option( 'oxsn_helpful_css_left_7px_control' );
		if($left_7px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_7px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_7px.css', array(), '1.0.0', 'all' );
		endif;

		$left_8px_control = get_option( 'oxsn_helpful_css_left_8px_control' );
		if($left_8px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_8px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_8px.css', array(), '1.0.0', 'all' );
		endif;

		$left_9px_control = get_option( 'oxsn_helpful_css_left_9px_control' );
		if($left_9px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_9px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_9px.css', array(), '1.0.0', 'all' );
		endif;

		$left_10px_control = get_option( 'oxsn_helpful_css_left_10px_control' );
		if($left_10px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_10px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_10px.css', array(), '1.0.0', 'all' );
		endif;

		$left_11px_control = get_option( 'oxsn_helpful_css_left_11px_control' );
		if($left_11px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_11px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_11px.css', array(), '1.0.0', 'all' );
		endif;

		$left_12px_control = get_option( 'oxsn_helpful_css_left_12px_control' );
		if($left_12px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_12px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_12px.css', array(), '1.0.0', 'all' );
		endif;

		$left_13px_control = get_option( 'oxsn_helpful_css_left_13px_control' );
		if($left_13px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_13px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_13px.css', array(), '1.0.0', 'all' );
		endif;

		$left_14px_control = get_option( 'oxsn_helpful_css_left_14px_control' );
		if($left_14px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_14px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_14px.css', array(), '1.0.0', 'all' );
		endif;

		$left_15px_control = get_option( 'oxsn_helpful_css_left_15px_control' );
		if($left_15px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_15px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_15px.css', array(), '1.0.0', 'all' );
		endif;

		$left_16px_control = get_option( 'oxsn_helpful_css_left_16px_control' );
		if($left_16px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_16px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_16px.css', array(), '1.0.0', 'all' );
		endif;

		$left_17px_control = get_option( 'oxsn_helpful_css_left_17px_control' );
		if($left_17px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_17px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_17px.css', array(), '1.0.0', 'all' );
		endif;

		$left_18px_control = get_option( 'oxsn_helpful_css_left_18px_control' );
		if($left_18px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_18px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_18px.css', array(), '1.0.0', 'all' );
		endif;

		$left_19px_control = get_option( 'oxsn_helpful_css_left_19px_control' );
		if($left_19px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_19px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_19px.css', array(), '1.0.0', 'all' );
		endif;

		$left_20px_control = get_option( 'oxsn_helpful_css_left_20px_control' );
		if($left_20px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_20px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_20px.css', array(), '1.0.0', 'all' );
		endif;

		$left_21px_control = get_option( 'oxsn_helpful_css_left_21px_control' );
		if($left_21px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_21px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_21px.css', array(), '1.0.0', 'all' );
		endif;

		$left_22px_control = get_option( 'oxsn_helpful_css_left_22px_control' );
		if($left_22px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_22px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_22px.css', array(), '1.0.0', 'all' );
		endif;

		$left_23px_control = get_option( 'oxsn_helpful_css_left_23px_control' );
		if($left_23px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_23px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_23px.css', array(), '1.0.0', 'all' );
		endif;

		$left_24px_control = get_option( 'oxsn_helpful_css_left_24px_control' );
		if($left_24px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_24px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_24px.css', array(), '1.0.0', 'all' );
		endif;

		$left_25px_control = get_option( 'oxsn_helpful_css_left_25px_control' );
		if($left_25px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_25px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_25px.css', array(), '1.0.0', 'all' );
		endif;

		$left_26px_control = get_option( 'oxsn_helpful_css_left_26px_control' );
		if($left_26px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_26px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_26px.css', array(), '1.0.0', 'all' );
		endif;

		$left_27px_control = get_option( 'oxsn_helpful_css_left_27px_control' );
		if($left_27px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_27px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_27px.css', array(), '1.0.0', 'all' );
		endif;

		$left_28px_control = get_option( 'oxsn_helpful_css_left_28px_control' );
		if($left_28px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_28px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_28px.css', array(), '1.0.0', 'all' );
		endif;

		$left_29px_control = get_option( 'oxsn_helpful_css_left_29px_control' );
		if($left_29px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_29px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_29px.css', array(), '1.0.0', 'all' );
		endif;

		$left_30px_control = get_option( 'oxsn_helpful_css_left_30px_control' );
		if($left_30px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_30px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_30px.css', array(), '1.0.0', 'all' );
		endif;

		$left_31px_control = get_option( 'oxsn_helpful_css_left_31px_control' );
		if($left_31px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_31px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_31px.css', array(), '1.0.0', 'all' );
		endif;

		$left_32px_control = get_option( 'oxsn_helpful_css_left_32px_control' );
		if($left_32px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_32px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_32px.css', array(), '1.0.0', 'all' );
		endif;

		$left_33px_control = get_option( 'oxsn_helpful_css_left_33px_control' );
		if($left_33px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_33px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_33px.css', array(), '1.0.0', 'all' );
		endif;

		$left_34px_control = get_option( 'oxsn_helpful_css_left_34px_control' );
		if($left_34px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_34px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_34px.css', array(), '1.0.0', 'all' );
		endif;

		$left_35px_control = get_option( 'oxsn_helpful_css_left_35px_control' );
		if($left_35px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_35px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_35px.css', array(), '1.0.0', 'all' );
		endif;

		$left_36px_control = get_option( 'oxsn_helpful_css_left_36px_control' );
		if($left_36px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_36px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_36px.css', array(), '1.0.0', 'all' );
		endif;

		$left_37px_control = get_option( 'oxsn_helpful_css_left_37px_control' );
		if($left_37px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_37px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_37px.css', array(), '1.0.0', 'all' );
		endif;

		$left_38px_control = get_option( 'oxsn_helpful_css_left_38px_control' );
		if($left_38px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_38px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_38px.css', array(), '1.0.0', 'all' );
		endif;

		$left_39px_control = get_option( 'oxsn_helpful_css_left_39px_control' );
		if($left_39px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_39px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_39px.css', array(), '1.0.0', 'all' );
		endif;

		$left_40px_control = get_option( 'oxsn_helpful_css_left_40px_control' );
		if($left_40px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_40px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_40px.css', array(), '1.0.0', 'all' );
		endif;

		$left_41px_control = get_option( 'oxsn_helpful_css_left_41px_control' );
		if($left_41px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_41px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_41px.css', array(), '1.0.0', 'all' );
		endif;

		$left_42px_control = get_option( 'oxsn_helpful_css_left_42px_control' );
		if($left_42px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_42px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_42px.css', array(), '1.0.0', 'all' );
		endif;

		$left_43px_control = get_option( 'oxsn_helpful_css_left_43px_control' );
		if($left_43px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_43px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_43px.css', array(), '1.0.0', 'all' );
		endif;

		$left_44px_control = get_option( 'oxsn_helpful_css_left_44px_control' );
		if($left_44px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_44px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_44px.css', array(), '1.0.0', 'all' );
		endif;

		$left_45px_control = get_option( 'oxsn_helpful_css_left_45px_control' );
		if($left_45px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_45px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_45px.css', array(), '1.0.0', 'all' );
		endif;

		$left_46px_control = get_option( 'oxsn_helpful_css_left_46px_control' );
		if($left_46px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_46px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_46px.css', array(), '1.0.0', 'all' );
		endif;

		$left_47px_control = get_option( 'oxsn_helpful_css_left_47px_control' );
		if($left_47px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_47px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_47px.css', array(), '1.0.0', 'all' );
		endif;

		$left_48px_control = get_option( 'oxsn_helpful_css_left_48px_control' );
		if($left_48px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_48px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_48px.css', array(), '1.0.0', 'all' );
		endif;

		$left_49px_control = get_option( 'oxsn_helpful_css_left_49px_control' );
		if($left_49px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_49px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_49px.css', array(), '1.0.0', 'all' );
		endif;

		$left_50px_control = get_option( 'oxsn_helpful_css_left_50px_control' );
		if($left_50px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_50px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_50px.css', array(), '1.0.0', 'all' );
		endif;

		$left_51px_control = get_option( 'oxsn_helpful_css_left_51px_control' );
		if($left_51px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_51px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_51px.css', array(), '1.0.0', 'all' );
		endif;

		$left_52px_control = get_option( 'oxsn_helpful_css_left_52px_control' );
		if($left_52px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_52px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_52px.css', array(), '1.0.0', 'all' );
		endif;

		$left_53px_control = get_option( 'oxsn_helpful_css_left_53px_control' );
		if($left_53px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_53px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_53px.css', array(), '1.0.0', 'all' );
		endif;

		$left_54px_control = get_option( 'oxsn_helpful_css_left_54px_control' );
		if($left_54px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_54px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_54px.css', array(), '1.0.0', 'all' );
		endif;

		$left_55px_control = get_option( 'oxsn_helpful_css_left_55px_control' );
		if($left_55px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_55px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_55px.css', array(), '1.0.0', 'all' );
		endif;

		$left_56px_control = get_option( 'oxsn_helpful_css_left_56px_control' );
		if($left_56px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_56px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_56px.css', array(), '1.0.0', 'all' );
		endif;

		$left_57px_control = get_option( 'oxsn_helpful_css_left_57px_control' );
		if($left_57px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_57px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_57px.css', array(), '1.0.0', 'all' );
		endif;

		$left_58px_control = get_option( 'oxsn_helpful_css_left_58px_control' );
		if($left_58px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_58px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_58px.css', array(), '1.0.0', 'all' );
		endif;

		$left_59px_control = get_option( 'oxsn_helpful_css_left_59px_control' );
		if($left_59px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_59px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_59px.css', array(), '1.0.0', 'all' );
		endif;

		$left_60px_control = get_option( 'oxsn_helpful_css_left_60px_control' );
		if($left_60px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_60px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_60px.css', array(), '1.0.0', 'all' );
		endif;

		$left_61px_control = get_option( 'oxsn_helpful_css_left_61px_control' );
		if($left_61px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_61px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_61px.css', array(), '1.0.0', 'all' );
		endif;

		$left_62px_control = get_option( 'oxsn_helpful_css_left_62px_control' );
		if($left_62px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_62px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_62px.css', array(), '1.0.0', 'all' );
		endif;

		$left_63px_control = get_option( 'oxsn_helpful_css_left_63px_control' );
		if($left_63px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_63px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_63px.css', array(), '1.0.0', 'all' );
		endif;

		$left_64px_control = get_option( 'oxsn_helpful_css_left_64px_control' );
		if($left_64px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_64px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_64px.css', array(), '1.0.0', 'all' );
		endif;

		$left_65px_control = get_option( 'oxsn_helpful_css_left_65px_control' );
		if($left_65px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_65px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_65px.css', array(), '1.0.0', 'all' );
		endif;

		$left_66px_control = get_option( 'oxsn_helpful_css_left_66px_control' );
		if($left_66px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_66px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_66px.css', array(), '1.0.0', 'all' );
		endif;

		$left_67px_control = get_option( 'oxsn_helpful_css_left_67px_control' );
		if($left_67px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_67px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_67px.css', array(), '1.0.0', 'all' );
		endif;

		$left_68px_control = get_option( 'oxsn_helpful_css_left_68px_control' );
		if($left_68px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_68px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_68px.css', array(), '1.0.0', 'all' );
		endif;

		$left_69px_control = get_option( 'oxsn_helpful_css_left_69px_control' );
		if($left_69px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_69px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_69px.css', array(), '1.0.0', 'all' );
		endif;

		$left_70px_control = get_option( 'oxsn_helpful_css_left_70px_control' );
		if($left_70px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_70px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_70px.css', array(), '1.0.0', 'all' );
		endif;

		$left_71px_control = get_option( 'oxsn_helpful_css_left_71px_control' );
		if($left_71px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_71px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_71px.css', array(), '1.0.0', 'all' );
		endif;

		$left_72px_control = get_option( 'oxsn_helpful_css_left_72px_control' );
		if($left_72px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_72px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_72px.css', array(), '1.0.0', 'all' );
		endif;

		$left_73px_control = get_option( 'oxsn_helpful_css_left_73px_control' );
		if($left_73px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_73px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_73px.css', array(), '1.0.0', 'all' );
		endif;

		$left_74px_control = get_option( 'oxsn_helpful_css_left_74px_control' );
		if($left_74px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_74px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_74px.css', array(), '1.0.0', 'all' );
		endif;

		$left_75px_control = get_option( 'oxsn_helpful_css_left_75px_control' );
		if($left_75px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_75px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_75px.css', array(), '1.0.0', 'all' );
		endif;

		$left_76px_control = get_option( 'oxsn_helpful_css_left_76px_control' );
		if($left_76px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_76px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_76px.css', array(), '1.0.0', 'all' );
		endif;

		$left_77px_control = get_option( 'oxsn_helpful_css_left_77px_control' );
		if($left_77px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_77px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_77px.css', array(), '1.0.0', 'all' );
		endif;

		$left_78px_control = get_option( 'oxsn_helpful_css_left_78px_control' );
		if($left_78px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_78px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_78px.css', array(), '1.0.0', 'all' );
		endif;

		$left_79px_control = get_option( 'oxsn_helpful_css_left_79px_control' );
		if($left_79px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_79px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_79px.css', array(), '1.0.0', 'all' );
		endif;

		$left_80px_control = get_option( 'oxsn_helpful_css_left_80px_control' );
		if($left_80px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_80px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_80px.css', array(), '1.0.0', 'all' );
		endif;

		$left_81px_control = get_option( 'oxsn_helpful_css_left_81px_control' );
		if($left_81px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_81px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_81px.css', array(), '1.0.0', 'all' );
		endif;

		$left_82px_control = get_option( 'oxsn_helpful_css_left_82px_control' );
		if($left_82px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_82px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_82px.css', array(), '1.0.0', 'all' );
		endif;

		$left_83px_control = get_option( 'oxsn_helpful_css_left_83px_control' );
		if($left_83px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_83px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_83px.css', array(), '1.0.0', 'all' );
		endif;

		$left_84px_control = get_option( 'oxsn_helpful_css_left_84px_control' );
		if($left_84px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_84px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_84px.css', array(), '1.0.0', 'all' );
		endif;

		$left_85px_control = get_option( 'oxsn_helpful_css_left_85px_control' );
		if($left_85px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_85px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_85px.css', array(), '1.0.0', 'all' );
		endif;

		$left_86px_control = get_option( 'oxsn_helpful_css_left_86px_control' );
		if($left_86px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_86px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_86px.css', array(), '1.0.0', 'all' );
		endif;

		$left_87px_control = get_option( 'oxsn_helpful_css_left_87px_control' );
		if($left_87px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_87px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_87px.css', array(), '1.0.0', 'all' );
		endif;

		$left_88px_control = get_option( 'oxsn_helpful_css_left_88px_control' );
		if($left_88px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_88px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_88px.css', array(), '1.0.0', 'all' );
		endif;

		$left_89px_control = get_option( 'oxsn_helpful_css_left_89px_control' );
		if($left_89px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_89px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_89px.css', array(), '1.0.0', 'all' );
		endif;

		$left_90px_control = get_option( 'oxsn_helpful_css_left_90px_control' );
		if($left_90px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_90px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_90px.css', array(), '1.0.0', 'all' );
		endif;

		$left_91px_control = get_option( 'oxsn_helpful_css_left_91px_control' );
		if($left_91px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_91px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_91px.css', array(), '1.0.0', 'all' );
		endif;

		$left_92px_control = get_option( 'oxsn_helpful_css_left_92px_control' );
		if($left_92px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_92px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_92px.css', array(), '1.0.0', 'all' );
		endif;

		$left_93px_control = get_option( 'oxsn_helpful_css_left_93px_control' );
		if($left_93px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_93px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_93px.css', array(), '1.0.0', 'all' );
		endif;

		$left_94px_control = get_option( 'oxsn_helpful_css_left_94px_control' );
		if($left_94px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_94px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_94px.css', array(), '1.0.0', 'all' );
		endif;

		$left_95px_control = get_option( 'oxsn_helpful_css_left_95px_control' );
		if($left_95px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_95px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_95px.css', array(), '1.0.0', 'all' );
		endif;

		$left_96px_control = get_option( 'oxsn_helpful_css_left_96px_control' );
		if($left_96px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_96px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_96px.css', array(), '1.0.0', 'all' );
		endif;

		$left_97px_control = get_option( 'oxsn_helpful_css_left_97px_control' );
		if($left_97px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_97px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_97px.css', array(), '1.0.0', 'all' );
		endif;

		$left_98px_control = get_option( 'oxsn_helpful_css_left_98px_control' );
		if($left_98px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_98px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_98px.css', array(), '1.0.0', 'all' );
		endif;

		$left_99px_control = get_option( 'oxsn_helpful_css_left_99px_control' );
		if($left_99px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_99px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_99px.css', array(), '1.0.0', 'all' );
		endif;

		$left_100px_control = get_option( 'oxsn_helpful_css_left_100px_control' );
		if($left_100px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_100px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_100px.css', array(), '1.0.0', 'all' );
		endif;

		$left_auto_control = get_option( 'oxsn_helpful_css_left_auto_control' );
		if($left_auto_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_auto_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_auto.css', array(), '1.0.0', 'all' );
		endif;

		$left_inherit_control = get_option( 'oxsn_helpful_css_left_inherit_control' );
		if($left_inherit_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_inherit_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_inherit.css', array(), '1.0.0', 'all' );
		endif;

		$left_initial_control = get_option( 'oxsn_helpful_css_left_initial_control' );
		if($left_initial_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_left_initial_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/left/left_initial.css', array(), '1.0.0', 'all' );
		endif;

		// margin

		$margin_0px_control = get_option( 'oxsn_helpful_css_margin_0px_control' );
		if($margin_0px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_0px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_0px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_1px_control = get_option( 'oxsn_helpful_css_margin_1px_control' );
		if($margin_1px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_1px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_1px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_2px_control = get_option( 'oxsn_helpful_css_margin_2px_control' );
		if($margin_2px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_2px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_2px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_3px_control = get_option( 'oxsn_helpful_css_margin_3px_control' );
		if($margin_3px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_3px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_3px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_4px_control = get_option( 'oxsn_helpful_css_margin_4px_control' );
		if($margin_4px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_4px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_4px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_5px_control = get_option( 'oxsn_helpful_css_margin_5px_control' );
		if($margin_5px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_5px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_5px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_6px_control = get_option( 'oxsn_helpful_css_margin_6px_control' );
		if($margin_6px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_6px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_6px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_7px_control = get_option( 'oxsn_helpful_css_margin_7px_control' );
		if($margin_7px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_7px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_7px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_8px_control = get_option( 'oxsn_helpful_css_margin_8px_control' );
		if($margin_8px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_8px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_8px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_9px_control = get_option( 'oxsn_helpful_css_margin_9px_control' );
		if($margin_9px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_9px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_9px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_10px_control = get_option( 'oxsn_helpful_css_margin_10px_control' );
		if($margin_10px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_10px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_10px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_11px_control = get_option( 'oxsn_helpful_css_margin_11px_control' );
		if($margin_11px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_11px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_11px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_12px_control = get_option( 'oxsn_helpful_css_margin_12px_control' );
		if($margin_12px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_12px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_12px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_13px_control = get_option( 'oxsn_helpful_css_margin_13px_control' );
		if($margin_13px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_13px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_13px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_14px_control = get_option( 'oxsn_helpful_css_margin_14px_control' );
		if($margin_14px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_14px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_14px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_15px_control = get_option( 'oxsn_helpful_css_margin_15px_control' );
		if($margin_15px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_15px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_15px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_16px_control = get_option( 'oxsn_helpful_css_margin_16px_control' );
		if($margin_16px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_16px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_16px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_17px_control = get_option( 'oxsn_helpful_css_margin_17px_control' );
		if($margin_17px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_17px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_17px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_18px_control = get_option( 'oxsn_helpful_css_margin_18px_control' );
		if($margin_18px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_18px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_18px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_19px_control = get_option( 'oxsn_helpful_css_margin_19px_control' );
		if($margin_19px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_19px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_19px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_20px_control = get_option( 'oxsn_helpful_css_margin_20px_control' );
		if($margin_20px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_20px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_20px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_21px_control = get_option( 'oxsn_helpful_css_margin_21px_control' );
		if($margin_21px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_21px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_21px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_22px_control = get_option( 'oxsn_helpful_css_margin_22px_control' );
		if($margin_22px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_22px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_22px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_23px_control = get_option( 'oxsn_helpful_css_margin_23px_control' );
		if($margin_23px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_23px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_23px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_24px_control = get_option( 'oxsn_helpful_css_margin_24px_control' );
		if($margin_24px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_24px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_24px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_25px_control = get_option( 'oxsn_helpful_css_margin_25px_control' );
		if($margin_25px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_25px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_25px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_26px_control = get_option( 'oxsn_helpful_css_margin_26px_control' );
		if($margin_26px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_26px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_26px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_27px_control = get_option( 'oxsn_helpful_css_margin_27px_control' );
		if($margin_27px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_27px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_27px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_28px_control = get_option( 'oxsn_helpful_css_margin_28px_control' );
		if($margin_28px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_28px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_28px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_29px_control = get_option( 'oxsn_helpful_css_margin_29px_control' );
		if($margin_29px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_29px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_29px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_30px_control = get_option( 'oxsn_helpful_css_margin_30px_control' );
		if($margin_30px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_30px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_30px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_31px_control = get_option( 'oxsn_helpful_css_margin_31px_control' );
		if($margin_31px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_31px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_31px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_32px_control = get_option( 'oxsn_helpful_css_margin_32px_control' );
		if($margin_32px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_32px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_32px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_33px_control = get_option( 'oxsn_helpful_css_margin_33px_control' );
		if($margin_33px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_33px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_33px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_34px_control = get_option( 'oxsn_helpful_css_margin_34px_control' );
		if($margin_34px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_34px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_34px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_35px_control = get_option( 'oxsn_helpful_css_margin_35px_control' );
		if($margin_35px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_35px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_35px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_36px_control = get_option( 'oxsn_helpful_css_margin_36px_control' );
		if($margin_36px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_36px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_36px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_37px_control = get_option( 'oxsn_helpful_css_margin_37px_control' );
		if($margin_37px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_37px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_37px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_38px_control = get_option( 'oxsn_helpful_css_margin_38px_control' );
		if($margin_38px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_38px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_38px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_39px_control = get_option( 'oxsn_helpful_css_margin_39px_control' );
		if($margin_39px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_39px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_39px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_40px_control = get_option( 'oxsn_helpful_css_margin_40px_control' );
		if($margin_40px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_40px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_40px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_41px_control = get_option( 'oxsn_helpful_css_margin_41px_control' );
		if($margin_41px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_41px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_41px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_42px_control = get_option( 'oxsn_helpful_css_margin_42px_control' );
		if($margin_42px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_42px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_42px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_43px_control = get_option( 'oxsn_helpful_css_margin_43px_control' );
		if($margin_43px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_43px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_43px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_44px_control = get_option( 'oxsn_helpful_css_margin_44px_control' );
		if($margin_44px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_44px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_44px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_45px_control = get_option( 'oxsn_helpful_css_margin_45px_control' );
		if($margin_45px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_45px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_45px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_46px_control = get_option( 'oxsn_helpful_css_margin_46px_control' );
		if($margin_46px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_46px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_46px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_47px_control = get_option( 'oxsn_helpful_css_margin_47px_control' );
		if($margin_47px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_47px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_47px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_48px_control = get_option( 'oxsn_helpful_css_margin_48px_control' );
		if($margin_48px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_48px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_48px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_49px_control = get_option( 'oxsn_helpful_css_margin_49px_control' );
		if($margin_49px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_49px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_49px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_50px_control = get_option( 'oxsn_helpful_css_margin_50px_control' );
		if($margin_50px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_50px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_50px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_51px_control = get_option( 'oxsn_helpful_css_margin_51px_control' );
		if($margin_51px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_51px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_51px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_52px_control = get_option( 'oxsn_helpful_css_margin_52px_control' );
		if($margin_52px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_52px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_52px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_53px_control = get_option( 'oxsn_helpful_css_margin_53px_control' );
		if($margin_53px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_53px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_53px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_54px_control = get_option( 'oxsn_helpful_css_margin_54px_control' );
		if($margin_54px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_54px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_54px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_55px_control = get_option( 'oxsn_helpful_css_margin_55px_control' );
		if($margin_55px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_55px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_55px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_56px_control = get_option( 'oxsn_helpful_css_margin_56px_control' );
		if($margin_56px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_56px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_56px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_57px_control = get_option( 'oxsn_helpful_css_margin_57px_control' );
		if($margin_57px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_57px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_57px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_58px_control = get_option( 'oxsn_helpful_css_margin_58px_control' );
		if($margin_58px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_58px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_58px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_59px_control = get_option( 'oxsn_helpful_css_margin_59px_control' );
		if($margin_59px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_59px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_59px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_60px_control = get_option( 'oxsn_helpful_css_margin_60px_control' );
		if($margin_60px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_60px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_60px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_61px_control = get_option( 'oxsn_helpful_css_margin_61px_control' );
		if($margin_61px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_61px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_61px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_62px_control = get_option( 'oxsn_helpful_css_margin_62px_control' );
		if($margin_62px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_62px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_62px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_63px_control = get_option( 'oxsn_helpful_css_margin_63px_control' );
		if($margin_63px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_63px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_63px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_64px_control = get_option( 'oxsn_helpful_css_margin_64px_control' );
		if($margin_64px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_64px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_64px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_65px_control = get_option( 'oxsn_helpful_css_margin_65px_control' );
		if($margin_65px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_65px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_65px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_66px_control = get_option( 'oxsn_helpful_css_margin_66px_control' );
		if($margin_66px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_66px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_66px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_67px_control = get_option( 'oxsn_helpful_css_margin_67px_control' );
		if($margin_67px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_67px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_67px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_68px_control = get_option( 'oxsn_helpful_css_margin_68px_control' );
		if($margin_68px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_68px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_68px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_69px_control = get_option( 'oxsn_helpful_css_margin_69px_control' );
		if($margin_69px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_69px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_69px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_70px_control = get_option( 'oxsn_helpful_css_margin_70px_control' );
		if($margin_70px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_70px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_70px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_71px_control = get_option( 'oxsn_helpful_css_margin_71px_control' );
		if($margin_71px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_71px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_71px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_72px_control = get_option( 'oxsn_helpful_css_margin_72px_control' );
		if($margin_72px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_72px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_72px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_73px_control = get_option( 'oxsn_helpful_css_margin_73px_control' );
		if($margin_73px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_73px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_73px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_74px_control = get_option( 'oxsn_helpful_css_margin_74px_control' );
		if($margin_74px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_74px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_74px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_75px_control = get_option( 'oxsn_helpful_css_margin_75px_control' );
		if($margin_75px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_75px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_75px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_76px_control = get_option( 'oxsn_helpful_css_margin_76px_control' );
		if($margin_76px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_76px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_76px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_77px_control = get_option( 'oxsn_helpful_css_margin_77px_control' );
		if($margin_77px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_77px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_77px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_78px_control = get_option( 'oxsn_helpful_css_margin_78px_control' );
		if($margin_78px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_78px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_78px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_79px_control = get_option( 'oxsn_helpful_css_margin_79px_control' );
		if($margin_79px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_79px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_79px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_80px_control = get_option( 'oxsn_helpful_css_margin_80px_control' );
		if($margin_80px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_80px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_80px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_81px_control = get_option( 'oxsn_helpful_css_margin_81px_control' );
		if($margin_81px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_81px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_81px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_82px_control = get_option( 'oxsn_helpful_css_margin_82px_control' );
		if($margin_82px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_82px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_82px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_83px_control = get_option( 'oxsn_helpful_css_margin_83px_control' );
		if($margin_83px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_83px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_83px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_84px_control = get_option( 'oxsn_helpful_css_margin_84px_control' );
		if($margin_84px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_84px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_84px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_85px_control = get_option( 'oxsn_helpful_css_margin_85px_control' );
		if($margin_85px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_85px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_85px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_86px_control = get_option( 'oxsn_helpful_css_margin_86px_control' );
		if($margin_86px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_86px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_86px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_87px_control = get_option( 'oxsn_helpful_css_margin_87px_control' );
		if($margin_87px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_87px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_87px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_88px_control = get_option( 'oxsn_helpful_css_margin_88px_control' );
		if($margin_88px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_88px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_88px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_89px_control = get_option( 'oxsn_helpful_css_margin_89px_control' );
		if($margin_89px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_89px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_89px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_90px_control = get_option( 'oxsn_helpful_css_margin_90px_control' );
		if($margin_90px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_90px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_90px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_91px_control = get_option( 'oxsn_helpful_css_margin_91px_control' );
		if($margin_91px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_91px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_91px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_92px_control = get_option( 'oxsn_helpful_css_margin_92px_control' );
		if($margin_92px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_92px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_92px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_93px_control = get_option( 'oxsn_helpful_css_margin_93px_control' );
		if($margin_93px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_93px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_93px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_94px_control = get_option( 'oxsn_helpful_css_margin_94px_control' );
		if($margin_94px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_94px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_94px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_95px_control = get_option( 'oxsn_helpful_css_margin_95px_control' );
		if($margin_95px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_95px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_95px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_96px_control = get_option( 'oxsn_helpful_css_margin_96px_control' );
		if($margin_96px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_96px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_96px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_97px_control = get_option( 'oxsn_helpful_css_margin_97px_control' );
		if($margin_97px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_97px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_97px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_98px_control = get_option( 'oxsn_helpful_css_margin_98px_control' );
		if($margin_98px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_98px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_98px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_99px_control = get_option( 'oxsn_helpful_css_margin_99px_control' );
		if($margin_99px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_99px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_99px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_100px_control = get_option( 'oxsn_helpful_css_margin_100px_control' );
		if($margin_100px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_100px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_100px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_auto_control = get_option( 'oxsn_helpful_css_margin_auto_control' );
		if($margin_auto_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_auto_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_auto.css', array(), '1.0.0', 'all' );
		endif;

		$margin_inherit_control = get_option( 'oxsn_helpful_css_margin_inherit_control' );
		if($margin_inherit_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_inherit_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_inherit.css', array(), '1.0.0', 'all' );
		endif;

		$margin_initial_control = get_option( 'oxsn_helpful_css_margin_initial_control' );
		if($margin_initial_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_initial_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin/margin_initial.css', array(), '1.0.0', 'all' );
		endif;

		// margin_bottom

		$margin_bottom_0px_control = get_option( 'oxsn_helpful_css_margin_bottom_0px_control' );
		if($margin_bottom_0px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_0px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_0px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_1px_control = get_option( 'oxsn_helpful_css_margin_bottom_1px_control' );
		if($margin_bottom_1px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_1px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_1px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_2px_control = get_option( 'oxsn_helpful_css_margin_bottom_2px_control' );
		if($margin_bottom_2px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_2px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_2px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_3px_control = get_option( 'oxsn_helpful_css_margin_bottom_3px_control' );
		if($margin_bottom_3px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_3px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_3px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_4px_control = get_option( 'oxsn_helpful_css_margin_bottom_4px_control' );
		if($margin_bottom_4px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_4px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_4px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_5px_control = get_option( 'oxsn_helpful_css_margin_bottom_5px_control' );
		if($margin_bottom_5px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_5px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_5px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_6px_control = get_option( 'oxsn_helpful_css_margin_bottom_6px_control' );
		if($margin_bottom_6px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_6px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_6px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_7px_control = get_option( 'oxsn_helpful_css_margin_bottom_7px_control' );
		if($margin_bottom_7px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_7px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_7px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_8px_control = get_option( 'oxsn_helpful_css_margin_bottom_8px_control' );
		if($margin_bottom_8px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_8px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_8px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_9px_control = get_option( 'oxsn_helpful_css_margin_bottom_9px_control' );
		if($margin_bottom_9px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_9px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_9px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_10px_control = get_option( 'oxsn_helpful_css_margin_bottom_10px_control' );
		if($margin_bottom_10px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_10px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_10px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_11px_control = get_option( 'oxsn_helpful_css_margin_bottom_11px_control' );
		if($margin_bottom_11px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_11px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_11px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_12px_control = get_option( 'oxsn_helpful_css_margin_bottom_12px_control' );
		if($margin_bottom_12px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_12px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_12px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_13px_control = get_option( 'oxsn_helpful_css_margin_bottom_13px_control' );
		if($margin_bottom_13px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_13px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_13px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_14px_control = get_option( 'oxsn_helpful_css_margin_bottom_14px_control' );
		if($margin_bottom_14px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_14px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_14px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_15px_control = get_option( 'oxsn_helpful_css_margin_bottom_15px_control' );
		if($margin_bottom_15px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_15px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_15px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_16px_control = get_option( 'oxsn_helpful_css_margin_bottom_16px_control' );
		if($margin_bottom_16px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_16px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_16px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_17px_control = get_option( 'oxsn_helpful_css_margin_bottom_17px_control' );
		if($margin_bottom_17px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_17px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_17px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_18px_control = get_option( 'oxsn_helpful_css_margin_bottom_18px_control' );
		if($margin_bottom_18px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_18px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_18px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_19px_control = get_option( 'oxsn_helpful_css_margin_bottom_19px_control' );
		if($margin_bottom_19px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_19px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_19px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_20px_control = get_option( 'oxsn_helpful_css_margin_bottom_20px_control' );
		if($margin_bottom_20px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_20px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_20px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_21px_control = get_option( 'oxsn_helpful_css_margin_bottom_21px_control' );
		if($margin_bottom_21px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_21px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_21px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_22px_control = get_option( 'oxsn_helpful_css_margin_bottom_22px_control' );
		if($margin_bottom_22px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_22px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_22px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_23px_control = get_option( 'oxsn_helpful_css_margin_bottom_23px_control' );
		if($margin_bottom_23px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_23px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_23px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_24px_control = get_option( 'oxsn_helpful_css_margin_bottom_24px_control' );
		if($margin_bottom_24px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_24px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_24px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_25px_control = get_option( 'oxsn_helpful_css_margin_bottom_25px_control' );
		if($margin_bottom_25px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_25px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_25px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_26px_control = get_option( 'oxsn_helpful_css_margin_bottom_26px_control' );
		if($margin_bottom_26px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_26px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_26px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_27px_control = get_option( 'oxsn_helpful_css_margin_bottom_27px_control' );
		if($margin_bottom_27px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_27px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_27px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_28px_control = get_option( 'oxsn_helpful_css_margin_bottom_28px_control' );
		if($margin_bottom_28px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_28px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_28px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_29px_control = get_option( 'oxsn_helpful_css_margin_bottom_29px_control' );
		if($margin_bottom_29px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_29px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_29px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_30px_control = get_option( 'oxsn_helpful_css_margin_bottom_30px_control' );
		if($margin_bottom_30px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_30px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_30px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_31px_control = get_option( 'oxsn_helpful_css_margin_bottom_31px_control' );
		if($margin_bottom_31px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_31px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_31px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_32px_control = get_option( 'oxsn_helpful_css_margin_bottom_32px_control' );
		if($margin_bottom_32px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_32px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_32px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_33px_control = get_option( 'oxsn_helpful_css_margin_bottom_33px_control' );
		if($margin_bottom_33px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_33px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_33px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_34px_control = get_option( 'oxsn_helpful_css_margin_bottom_34px_control' );
		if($margin_bottom_34px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_34px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_34px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_35px_control = get_option( 'oxsn_helpful_css_margin_bottom_35px_control' );
		if($margin_bottom_35px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_35px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_35px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_36px_control = get_option( 'oxsn_helpful_css_margin_bottom_36px_control' );
		if($margin_bottom_36px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_36px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_36px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_37px_control = get_option( 'oxsn_helpful_css_margin_bottom_37px_control' );
		if($margin_bottom_37px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_37px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_37px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_38px_control = get_option( 'oxsn_helpful_css_margin_bottom_38px_control' );
		if($margin_bottom_38px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_38px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_38px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_39px_control = get_option( 'oxsn_helpful_css_margin_bottom_39px_control' );
		if($margin_bottom_39px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_39px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_39px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_40px_control = get_option( 'oxsn_helpful_css_margin_bottom_40px_control' );
		if($margin_bottom_40px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_40px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_40px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_41px_control = get_option( 'oxsn_helpful_css_margin_bottom_41px_control' );
		if($margin_bottom_41px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_41px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_41px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_42px_control = get_option( 'oxsn_helpful_css_margin_bottom_42px_control' );
		if($margin_bottom_42px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_42px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_42px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_43px_control = get_option( 'oxsn_helpful_css_margin_bottom_43px_control' );
		if($margin_bottom_43px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_43px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_43px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_44px_control = get_option( 'oxsn_helpful_css_margin_bottom_44px_control' );
		if($margin_bottom_44px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_44px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_44px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_45px_control = get_option( 'oxsn_helpful_css_margin_bottom_45px_control' );
		if($margin_bottom_45px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_45px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_45px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_46px_control = get_option( 'oxsn_helpful_css_margin_bottom_46px_control' );
		if($margin_bottom_46px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_46px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_46px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_47px_control = get_option( 'oxsn_helpful_css_margin_bottom_47px_control' );
		if($margin_bottom_47px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_47px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_47px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_48px_control = get_option( 'oxsn_helpful_css_margin_bottom_48px_control' );
		if($margin_bottom_48px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_48px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_48px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_49px_control = get_option( 'oxsn_helpful_css_margin_bottom_49px_control' );
		if($margin_bottom_49px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_49px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_49px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_50px_control = get_option( 'oxsn_helpful_css_margin_bottom_50px_control' );
		if($margin_bottom_50px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_50px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_50px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_51px_control = get_option( 'oxsn_helpful_css_margin_bottom_51px_control' );
		if($margin_bottom_51px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_51px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_51px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_52px_control = get_option( 'oxsn_helpful_css_margin_bottom_52px_control' );
		if($margin_bottom_52px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_52px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_52px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_53px_control = get_option( 'oxsn_helpful_css_margin_bottom_53px_control' );
		if($margin_bottom_53px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_53px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_53px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_54px_control = get_option( 'oxsn_helpful_css_margin_bottom_54px_control' );
		if($margin_bottom_54px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_54px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_54px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_55px_control = get_option( 'oxsn_helpful_css_margin_bottom_55px_control' );
		if($margin_bottom_55px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_55px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_55px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_56px_control = get_option( 'oxsn_helpful_css_margin_bottom_56px_control' );
		if($margin_bottom_56px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_56px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_56px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_57px_control = get_option( 'oxsn_helpful_css_margin_bottom_57px_control' );
		if($margin_bottom_57px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_57px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_57px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_58px_control = get_option( 'oxsn_helpful_css_margin_bottom_58px_control' );
		if($margin_bottom_58px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_58px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_58px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_59px_control = get_option( 'oxsn_helpful_css_margin_bottom_59px_control' );
		if($margin_bottom_59px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_59px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_59px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_60px_control = get_option( 'oxsn_helpful_css_margin_bottom_60px_control' );
		if($margin_bottom_60px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_60px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_60px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_61px_control = get_option( 'oxsn_helpful_css_margin_bottom_61px_control' );
		if($margin_bottom_61px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_61px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_61px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_62px_control = get_option( 'oxsn_helpful_css_margin_bottom_62px_control' );
		if($margin_bottom_62px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_62px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_62px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_63px_control = get_option( 'oxsn_helpful_css_margin_bottom_63px_control' );
		if($margin_bottom_63px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_63px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_63px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_64px_control = get_option( 'oxsn_helpful_css_margin_bottom_64px_control' );
		if($margin_bottom_64px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_64px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_64px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_65px_control = get_option( 'oxsn_helpful_css_margin_bottom_65px_control' );
		if($margin_bottom_65px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_65px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_65px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_66px_control = get_option( 'oxsn_helpful_css_margin_bottom_66px_control' );
		if($margin_bottom_66px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_66px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_66px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_67px_control = get_option( 'oxsn_helpful_css_margin_bottom_67px_control' );
		if($margin_bottom_67px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_67px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_67px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_68px_control = get_option( 'oxsn_helpful_css_margin_bottom_68px_control' );
		if($margin_bottom_68px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_68px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_68px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_69px_control = get_option( 'oxsn_helpful_css_margin_bottom_69px_control' );
		if($margin_bottom_69px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_69px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_69px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_70px_control = get_option( 'oxsn_helpful_css_margin_bottom_70px_control' );
		if($margin_bottom_70px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_70px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_70px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_71px_control = get_option( 'oxsn_helpful_css_margin_bottom_71px_control' );
		if($margin_bottom_71px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_71px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_71px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_72px_control = get_option( 'oxsn_helpful_css_margin_bottom_72px_control' );
		if($margin_bottom_72px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_72px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_72px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_73px_control = get_option( 'oxsn_helpful_css_margin_bottom_73px_control' );
		if($margin_bottom_73px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_73px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_73px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_74px_control = get_option( 'oxsn_helpful_css_margin_bottom_74px_control' );
		if($margin_bottom_74px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_74px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_74px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_75px_control = get_option( 'oxsn_helpful_css_margin_bottom_75px_control' );
		if($margin_bottom_75px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_75px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_75px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_76px_control = get_option( 'oxsn_helpful_css_margin_bottom_76px_control' );
		if($margin_bottom_76px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_76px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_76px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_77px_control = get_option( 'oxsn_helpful_css_margin_bottom_77px_control' );
		if($margin_bottom_77px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_77px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_77px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_78px_control = get_option( 'oxsn_helpful_css_margin_bottom_78px_control' );
		if($margin_bottom_78px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_78px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_78px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_79px_control = get_option( 'oxsn_helpful_css_margin_bottom_79px_control' );
		if($margin_bottom_79px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_79px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_79px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_80px_control = get_option( 'oxsn_helpful_css_margin_bottom_80px_control' );
		if($margin_bottom_80px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_80px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_80px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_81px_control = get_option( 'oxsn_helpful_css_margin_bottom_81px_control' );
		if($margin_bottom_81px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_81px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_81px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_82px_control = get_option( 'oxsn_helpful_css_margin_bottom_82px_control' );
		if($margin_bottom_82px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_82px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_82px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_83px_control = get_option( 'oxsn_helpful_css_margin_bottom_83px_control' );
		if($margin_bottom_83px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_83px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_83px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_84px_control = get_option( 'oxsn_helpful_css_margin_bottom_84px_control' );
		if($margin_bottom_84px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_84px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_84px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_85px_control = get_option( 'oxsn_helpful_css_margin_bottom_85px_control' );
		if($margin_bottom_85px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_85px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_85px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_86px_control = get_option( 'oxsn_helpful_css_margin_bottom_86px_control' );
		if($margin_bottom_86px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_86px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_86px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_87px_control = get_option( 'oxsn_helpful_css_margin_bottom_87px_control' );
		if($margin_bottom_87px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_87px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_87px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_88px_control = get_option( 'oxsn_helpful_css_margin_bottom_88px_control' );
		if($margin_bottom_88px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_88px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_88px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_89px_control = get_option( 'oxsn_helpful_css_margin_bottom_89px_control' );
		if($margin_bottom_89px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_89px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_89px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_90px_control = get_option( 'oxsn_helpful_css_margin_bottom_90px_control' );
		if($margin_bottom_90px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_90px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_90px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_91px_control = get_option( 'oxsn_helpful_css_margin_bottom_91px_control' );
		if($margin_bottom_91px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_91px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_91px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_92px_control = get_option( 'oxsn_helpful_css_margin_bottom_92px_control' );
		if($margin_bottom_92px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_92px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_92px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_93px_control = get_option( 'oxsn_helpful_css_margin_bottom_93px_control' );
		if($margin_bottom_93px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_93px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_93px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_94px_control = get_option( 'oxsn_helpful_css_margin_bottom_94px_control' );
		if($margin_bottom_94px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_94px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_94px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_95px_control = get_option( 'oxsn_helpful_css_margin_bottom_95px_control' );
		if($margin_bottom_95px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_95px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_95px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_96px_control = get_option( 'oxsn_helpful_css_margin_bottom_96px_control' );
		if($margin_bottom_96px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_96px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_96px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_97px_control = get_option( 'oxsn_helpful_css_margin_bottom_97px_control' );
		if($margin_bottom_97px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_97px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_97px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_98px_control = get_option( 'oxsn_helpful_css_margin_bottom_98px_control' );
		if($margin_bottom_98px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_98px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_98px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_99px_control = get_option( 'oxsn_helpful_css_margin_bottom_99px_control' );
		if($margin_bottom_99px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_99px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_99px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_100px_control = get_option( 'oxsn_helpful_css_margin_bottom_100px_control' );
		if($margin_bottom_100px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_100px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_100px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_auto_control = get_option( 'oxsn_helpful_css_margin_bottom_auto_control' );
		if($margin_bottom_auto_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_auto_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_auto.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_inherit_control = get_option( 'oxsn_helpful_css_margin_bottom_inherit_control' );
		if($margin_bottom_inherit_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_inherit_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_inherit.css', array(), '1.0.0', 'all' );
		endif;

		$margin_bottom_initial_control = get_option( 'oxsn_helpful_css_margin_bottom_initial_control' );
		if($margin_bottom_initial_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_bottom_initial_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_bottom/margin_bottom_initial.css', array(), '1.0.0', 'all' );
		endif;

		// margin_left

		$margin_left_0px_control = get_option( 'oxsn_helpful_css_margin_left_0px_control' );
		if($margin_left_0px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_0px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_0px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_1px_control = get_option( 'oxsn_helpful_css_margin_left_1px_control' );
		if($margin_left_1px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_1px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_1px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_2px_control = get_option( 'oxsn_helpful_css_margin_left_2px_control' );
		if($margin_left_2px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_2px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_2px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_3px_control = get_option( 'oxsn_helpful_css_margin_left_3px_control' );
		if($margin_left_3px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_3px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_3px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_4px_control = get_option( 'oxsn_helpful_css_margin_left_4px_control' );
		if($margin_left_4px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_4px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_4px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_5px_control = get_option( 'oxsn_helpful_css_margin_left_5px_control' );
		if($margin_left_5px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_5px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_5px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_6px_control = get_option( 'oxsn_helpful_css_margin_left_6px_control' );
		if($margin_left_6px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_6px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_6px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_7px_control = get_option( 'oxsn_helpful_css_margin_left_7px_control' );
		if($margin_left_7px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_7px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_7px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_8px_control = get_option( 'oxsn_helpful_css_margin_left_8px_control' );
		if($margin_left_8px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_8px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_8px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_9px_control = get_option( 'oxsn_helpful_css_margin_left_9px_control' );
		if($margin_left_9px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_9px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_9px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_10px_control = get_option( 'oxsn_helpful_css_margin_left_10px_control' );
		if($margin_left_10px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_10px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_10px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_11px_control = get_option( 'oxsn_helpful_css_margin_left_11px_control' );
		if($margin_left_11px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_11px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_11px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_12px_control = get_option( 'oxsn_helpful_css_margin_left_12px_control' );
		if($margin_left_12px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_12px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_12px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_13px_control = get_option( 'oxsn_helpful_css_margin_left_13px_control' );
		if($margin_left_13px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_13px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_13px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_14px_control = get_option( 'oxsn_helpful_css_margin_left_14px_control' );
		if($margin_left_14px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_14px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_14px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_15px_control = get_option( 'oxsn_helpful_css_margin_left_15px_control' );
		if($margin_left_15px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_15px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_15px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_16px_control = get_option( 'oxsn_helpful_css_margin_left_16px_control' );
		if($margin_left_16px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_16px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_16px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_17px_control = get_option( 'oxsn_helpful_css_margin_left_17px_control' );
		if($margin_left_17px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_17px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_17px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_18px_control = get_option( 'oxsn_helpful_css_margin_left_18px_control' );
		if($margin_left_18px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_18px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_18px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_19px_control = get_option( 'oxsn_helpful_css_margin_left_19px_control' );
		if($margin_left_19px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_19px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_19px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_20px_control = get_option( 'oxsn_helpful_css_margin_left_20px_control' );
		if($margin_left_20px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_20px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_20px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_21px_control = get_option( 'oxsn_helpful_css_margin_left_21px_control' );
		if($margin_left_21px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_21px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_21px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_22px_control = get_option( 'oxsn_helpful_css_margin_left_22px_control' );
		if($margin_left_22px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_22px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_22px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_23px_control = get_option( 'oxsn_helpful_css_margin_left_23px_control' );
		if($margin_left_23px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_23px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_23px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_24px_control = get_option( 'oxsn_helpful_css_margin_left_24px_control' );
		if($margin_left_24px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_24px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_24px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_25px_control = get_option( 'oxsn_helpful_css_margin_left_25px_control' );
		if($margin_left_25px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_25px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_25px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_26px_control = get_option( 'oxsn_helpful_css_margin_left_26px_control' );
		if($margin_left_26px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_26px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_26px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_27px_control = get_option( 'oxsn_helpful_css_margin_left_27px_control' );
		if($margin_left_27px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_27px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_27px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_28px_control = get_option( 'oxsn_helpful_css_margin_left_28px_control' );
		if($margin_left_28px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_28px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_28px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_29px_control = get_option( 'oxsn_helpful_css_margin_left_29px_control' );
		if($margin_left_29px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_29px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_29px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_30px_control = get_option( 'oxsn_helpful_css_margin_left_30px_control' );
		if($margin_left_30px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_30px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_30px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_31px_control = get_option( 'oxsn_helpful_css_margin_left_31px_control' );
		if($margin_left_31px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_31px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_31px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_32px_control = get_option( 'oxsn_helpful_css_margin_left_32px_control' );
		if($margin_left_32px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_32px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_32px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_33px_control = get_option( 'oxsn_helpful_css_margin_left_33px_control' );
		if($margin_left_33px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_33px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_33px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_34px_control = get_option( 'oxsn_helpful_css_margin_left_34px_control' );
		if($margin_left_34px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_34px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_34px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_35px_control = get_option( 'oxsn_helpful_css_margin_left_35px_control' );
		if($margin_left_35px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_35px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_35px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_36px_control = get_option( 'oxsn_helpful_css_margin_left_36px_control' );
		if($margin_left_36px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_36px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_36px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_37px_control = get_option( 'oxsn_helpful_css_margin_left_37px_control' );
		if($margin_left_37px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_37px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_37px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_38px_control = get_option( 'oxsn_helpful_css_margin_left_38px_control' );
		if($margin_left_38px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_38px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_38px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_39px_control = get_option( 'oxsn_helpful_css_margin_left_39px_control' );
		if($margin_left_39px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_39px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_39px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_40px_control = get_option( 'oxsn_helpful_css_margin_left_40px_control' );
		if($margin_left_40px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_40px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_40px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_41px_control = get_option( 'oxsn_helpful_css_margin_left_41px_control' );
		if($margin_left_41px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_41px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_41px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_42px_control = get_option( 'oxsn_helpful_css_margin_left_42px_control' );
		if($margin_left_42px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_42px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_42px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_43px_control = get_option( 'oxsn_helpful_css_margin_left_43px_control' );
		if($margin_left_43px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_43px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_43px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_44px_control = get_option( 'oxsn_helpful_css_margin_left_44px_control' );
		if($margin_left_44px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_44px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_44px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_45px_control = get_option( 'oxsn_helpful_css_margin_left_45px_control' );
		if($margin_left_45px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_45px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_45px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_46px_control = get_option( 'oxsn_helpful_css_margin_left_46px_control' );
		if($margin_left_46px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_46px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_46px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_47px_control = get_option( 'oxsn_helpful_css_margin_left_47px_control' );
		if($margin_left_47px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_47px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_47px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_48px_control = get_option( 'oxsn_helpful_css_margin_left_48px_control' );
		if($margin_left_48px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_48px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_48px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_49px_control = get_option( 'oxsn_helpful_css_margin_left_49px_control' );
		if($margin_left_49px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_49px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_49px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_50px_control = get_option( 'oxsn_helpful_css_margin_left_50px_control' );
		if($margin_left_50px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_50px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_50px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_51px_control = get_option( 'oxsn_helpful_css_margin_left_51px_control' );
		if($margin_left_51px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_51px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_51px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_52px_control = get_option( 'oxsn_helpful_css_margin_left_52px_control' );
		if($margin_left_52px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_52px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_52px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_53px_control = get_option( 'oxsn_helpful_css_margin_left_53px_control' );
		if($margin_left_53px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_53px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_53px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_54px_control = get_option( 'oxsn_helpful_css_margin_left_54px_control' );
		if($margin_left_54px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_54px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_54px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_55px_control = get_option( 'oxsn_helpful_css_margin_left_55px_control' );
		if($margin_left_55px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_55px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_55px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_56px_control = get_option( 'oxsn_helpful_css_margin_left_56px_control' );
		if($margin_left_56px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_56px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_56px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_57px_control = get_option( 'oxsn_helpful_css_margin_left_57px_control' );
		if($margin_left_57px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_57px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_57px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_58px_control = get_option( 'oxsn_helpful_css_margin_left_58px_control' );
		if($margin_left_58px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_58px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_58px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_59px_control = get_option( 'oxsn_helpful_css_margin_left_59px_control' );
		if($margin_left_59px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_59px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_59px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_60px_control = get_option( 'oxsn_helpful_css_margin_left_60px_control' );
		if($margin_left_60px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_60px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_60px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_61px_control = get_option( 'oxsn_helpful_css_margin_left_61px_control' );
		if($margin_left_61px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_61px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_61px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_62px_control = get_option( 'oxsn_helpful_css_margin_left_62px_control' );
		if($margin_left_62px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_62px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_62px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_63px_control = get_option( 'oxsn_helpful_css_margin_left_63px_control' );
		if($margin_left_63px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_63px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_63px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_64px_control = get_option( 'oxsn_helpful_css_margin_left_64px_control' );
		if($margin_left_64px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_64px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_64px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_65px_control = get_option( 'oxsn_helpful_css_margin_left_65px_control' );
		if($margin_left_65px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_65px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_65px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_66px_control = get_option( 'oxsn_helpful_css_margin_left_66px_control' );
		if($margin_left_66px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_66px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_66px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_67px_control = get_option( 'oxsn_helpful_css_margin_left_67px_control' );
		if($margin_left_67px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_67px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_67px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_68px_control = get_option( 'oxsn_helpful_css_margin_left_68px_control' );
		if($margin_left_68px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_68px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_68px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_69px_control = get_option( 'oxsn_helpful_css_margin_left_69px_control' );
		if($margin_left_69px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_69px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_69px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_70px_control = get_option( 'oxsn_helpful_css_margin_left_70px_control' );
		if($margin_left_70px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_70px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_70px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_71px_control = get_option( 'oxsn_helpful_css_margin_left_71px_control' );
		if($margin_left_71px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_71px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_71px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_72px_control = get_option( 'oxsn_helpful_css_margin_left_72px_control' );
		if($margin_left_72px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_72px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_72px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_73px_control = get_option( 'oxsn_helpful_css_margin_left_73px_control' );
		if($margin_left_73px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_73px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_73px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_74px_control = get_option( 'oxsn_helpful_css_margin_left_74px_control' );
		if($margin_left_74px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_74px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_74px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_75px_control = get_option( 'oxsn_helpful_css_margin_left_75px_control' );
		if($margin_left_75px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_75px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_75px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_76px_control = get_option( 'oxsn_helpful_css_margin_left_76px_control' );
		if($margin_left_76px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_76px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_76px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_77px_control = get_option( 'oxsn_helpful_css_margin_left_77px_control' );
		if($margin_left_77px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_77px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_77px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_78px_control = get_option( 'oxsn_helpful_css_margin_left_78px_control' );
		if($margin_left_78px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_78px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_78px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_79px_control = get_option( 'oxsn_helpful_css_margin_left_79px_control' );
		if($margin_left_79px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_79px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_79px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_80px_control = get_option( 'oxsn_helpful_css_margin_left_80px_control' );
		if($margin_left_80px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_80px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_80px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_81px_control = get_option( 'oxsn_helpful_css_margin_left_81px_control' );
		if($margin_left_81px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_81px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_81px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_82px_control = get_option( 'oxsn_helpful_css_margin_left_82px_control' );
		if($margin_left_82px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_82px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_82px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_83px_control = get_option( 'oxsn_helpful_css_margin_left_83px_control' );
		if($margin_left_83px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_83px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_83px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_84px_control = get_option( 'oxsn_helpful_css_margin_left_84px_control' );
		if($margin_left_84px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_84px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_84px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_85px_control = get_option( 'oxsn_helpful_css_margin_left_85px_control' );
		if($margin_left_85px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_85px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_85px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_86px_control = get_option( 'oxsn_helpful_css_margin_left_86px_control' );
		if($margin_left_86px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_86px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_86px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_87px_control = get_option( 'oxsn_helpful_css_margin_left_87px_control' );
		if($margin_left_87px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_87px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_87px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_88px_control = get_option( 'oxsn_helpful_css_margin_left_88px_control' );
		if($margin_left_88px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_88px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_88px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_89px_control = get_option( 'oxsn_helpful_css_margin_left_89px_control' );
		if($margin_left_89px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_89px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_89px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_90px_control = get_option( 'oxsn_helpful_css_margin_left_90px_control' );
		if($margin_left_90px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_90px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_90px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_91px_control = get_option( 'oxsn_helpful_css_margin_left_91px_control' );
		if($margin_left_91px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_91px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_91px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_92px_control = get_option( 'oxsn_helpful_css_margin_left_92px_control' );
		if($margin_left_92px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_92px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_92px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_93px_control = get_option( 'oxsn_helpful_css_margin_left_93px_control' );
		if($margin_left_93px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_93px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_93px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_94px_control = get_option( 'oxsn_helpful_css_margin_left_94px_control' );
		if($margin_left_94px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_94px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_94px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_95px_control = get_option( 'oxsn_helpful_css_margin_left_95px_control' );
		if($margin_left_95px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_95px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_95px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_96px_control = get_option( 'oxsn_helpful_css_margin_left_96px_control' );
		if($margin_left_96px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_96px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_96px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_97px_control = get_option( 'oxsn_helpful_css_margin_left_97px_control' );
		if($margin_left_97px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_97px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_97px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_98px_control = get_option( 'oxsn_helpful_css_margin_left_98px_control' );
		if($margin_left_98px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_98px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_98px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_99px_control = get_option( 'oxsn_helpful_css_margin_left_99px_control' );
		if($margin_left_99px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_99px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_99px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_100px_control = get_option( 'oxsn_helpful_css_margin_left_100px_control' );
		if($margin_left_100px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_100px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_100px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_auto_control = get_option( 'oxsn_helpful_css_margin_left_auto_control' );
		if($margin_left_auto_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_auto_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_auto.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_inherit_control = get_option( 'oxsn_helpful_css_margin_left_inherit_control' );
		if($margin_left_inherit_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_inherit_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_inherit.css', array(), '1.0.0', 'all' );
		endif;

		$margin_left_initial_control = get_option( 'oxsn_helpful_css_margin_left_initial_control' );
		if($margin_left_initial_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_left_initial_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_left/margin_left_initial.css', array(), '1.0.0', 'all' );
		endif;

		// margin_right

		$margin_right_0px_control = get_option( 'oxsn_helpful_css_margin_right_0px_control' );
		if($margin_right_0px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_0px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_0px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_1px_control = get_option( 'oxsn_helpful_css_margin_right_1px_control' );
		if($margin_right_1px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_1px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_1px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_2px_control = get_option( 'oxsn_helpful_css_margin_right_2px_control' );
		if($margin_right_2px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_2px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_2px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_3px_control = get_option( 'oxsn_helpful_css_margin_right_3px_control' );
		if($margin_right_3px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_3px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_3px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_4px_control = get_option( 'oxsn_helpful_css_margin_right_4px_control' );
		if($margin_right_4px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_4px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_4px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_5px_control = get_option( 'oxsn_helpful_css_margin_right_5px_control' );
		if($margin_right_5px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_5px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_5px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_6px_control = get_option( 'oxsn_helpful_css_margin_right_6px_control' );
		if($margin_right_6px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_6px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_6px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_7px_control = get_option( 'oxsn_helpful_css_margin_right_7px_control' );
		if($margin_right_7px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_7px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_7px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_8px_control = get_option( 'oxsn_helpful_css_margin_right_8px_control' );
		if($margin_right_8px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_8px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_8px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_9px_control = get_option( 'oxsn_helpful_css_margin_right_9px_control' );
		if($margin_right_9px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_9px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_9px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_10px_control = get_option( 'oxsn_helpful_css_margin_right_10px_control' );
		if($margin_right_10px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_10px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_10px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_11px_control = get_option( 'oxsn_helpful_css_margin_right_11px_control' );
		if($margin_right_11px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_11px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_11px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_12px_control = get_option( 'oxsn_helpful_css_margin_right_12px_control' );
		if($margin_right_12px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_12px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_12px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_13px_control = get_option( 'oxsn_helpful_css_margin_right_13px_control' );
		if($margin_right_13px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_13px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_13px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_14px_control = get_option( 'oxsn_helpful_css_margin_right_14px_control' );
		if($margin_right_14px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_14px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_14px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_15px_control = get_option( 'oxsn_helpful_css_margin_right_15px_control' );
		if($margin_right_15px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_15px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_15px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_16px_control = get_option( 'oxsn_helpful_css_margin_right_16px_control' );
		if($margin_right_16px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_16px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_16px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_17px_control = get_option( 'oxsn_helpful_css_margin_right_17px_control' );
		if($margin_right_17px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_17px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_17px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_18px_control = get_option( 'oxsn_helpful_css_margin_right_18px_control' );
		if($margin_right_18px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_18px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_18px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_19px_control = get_option( 'oxsn_helpful_css_margin_right_19px_control' );
		if($margin_right_19px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_19px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_19px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_20px_control = get_option( 'oxsn_helpful_css_margin_right_20px_control' );
		if($margin_right_20px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_20px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_20px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_21px_control = get_option( 'oxsn_helpful_css_margin_right_21px_control' );
		if($margin_right_21px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_21px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_21px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_22px_control = get_option( 'oxsn_helpful_css_margin_right_22px_control' );
		if($margin_right_22px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_22px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_22px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_23px_control = get_option( 'oxsn_helpful_css_margin_right_23px_control' );
		if($margin_right_23px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_23px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_23px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_24px_control = get_option( 'oxsn_helpful_css_margin_right_24px_control' );
		if($margin_right_24px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_24px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_24px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_25px_control = get_option( 'oxsn_helpful_css_margin_right_25px_control' );
		if($margin_right_25px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_25px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_25px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_26px_control = get_option( 'oxsn_helpful_css_margin_right_26px_control' );
		if($margin_right_26px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_26px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_26px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_27px_control = get_option( 'oxsn_helpful_css_margin_right_27px_control' );
		if($margin_right_27px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_27px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_27px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_28px_control = get_option( 'oxsn_helpful_css_margin_right_28px_control' );
		if($margin_right_28px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_28px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_28px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_29px_control = get_option( 'oxsn_helpful_css_margin_right_29px_control' );
		if($margin_right_29px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_29px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_29px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_30px_control = get_option( 'oxsn_helpful_css_margin_right_30px_control' );
		if($margin_right_30px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_30px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_30px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_31px_control = get_option( 'oxsn_helpful_css_margin_right_31px_control' );
		if($margin_right_31px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_31px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_31px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_32px_control = get_option( 'oxsn_helpful_css_margin_right_32px_control' );
		if($margin_right_32px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_32px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_32px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_33px_control = get_option( 'oxsn_helpful_css_margin_right_33px_control' );
		if($margin_right_33px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_33px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_33px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_34px_control = get_option( 'oxsn_helpful_css_margin_right_34px_control' );
		if($margin_right_34px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_34px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_34px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_35px_control = get_option( 'oxsn_helpful_css_margin_right_35px_control' );
		if($margin_right_35px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_35px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_35px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_36px_control = get_option( 'oxsn_helpful_css_margin_right_36px_control' );
		if($margin_right_36px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_36px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_36px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_37px_control = get_option( 'oxsn_helpful_css_margin_right_37px_control' );
		if($margin_right_37px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_37px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_37px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_38px_control = get_option( 'oxsn_helpful_css_margin_right_38px_control' );
		if($margin_right_38px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_38px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_38px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_39px_control = get_option( 'oxsn_helpful_css_margin_right_39px_control' );
		if($margin_right_39px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_39px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_39px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_40px_control = get_option( 'oxsn_helpful_css_margin_right_40px_control' );
		if($margin_right_40px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_40px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_40px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_41px_control = get_option( 'oxsn_helpful_css_margin_right_41px_control' );
		if($margin_right_41px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_41px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_41px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_42px_control = get_option( 'oxsn_helpful_css_margin_right_42px_control' );
		if($margin_right_42px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_42px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_42px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_43px_control = get_option( 'oxsn_helpful_css_margin_right_43px_control' );
		if($margin_right_43px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_43px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_43px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_44px_control = get_option( 'oxsn_helpful_css_margin_right_44px_control' );
		if($margin_right_44px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_44px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_44px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_45px_control = get_option( 'oxsn_helpful_css_margin_right_45px_control' );
		if($margin_right_45px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_45px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_45px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_46px_control = get_option( 'oxsn_helpful_css_margin_right_46px_control' );
		if($margin_right_46px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_46px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_46px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_47px_control = get_option( 'oxsn_helpful_css_margin_right_47px_control' );
		if($margin_right_47px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_47px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_47px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_48px_control = get_option( 'oxsn_helpful_css_margin_right_48px_control' );
		if($margin_right_48px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_48px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_48px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_49px_control = get_option( 'oxsn_helpful_css_margin_right_49px_control' );
		if($margin_right_49px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_49px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_49px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_50px_control = get_option( 'oxsn_helpful_css_margin_right_50px_control' );
		if($margin_right_50px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_50px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_50px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_51px_control = get_option( 'oxsn_helpful_css_margin_right_51px_control' );
		if($margin_right_51px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_51px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_51px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_52px_control = get_option( 'oxsn_helpful_css_margin_right_52px_control' );
		if($margin_right_52px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_52px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_52px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_53px_control = get_option( 'oxsn_helpful_css_margin_right_53px_control' );
		if($margin_right_53px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_53px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_53px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_54px_control = get_option( 'oxsn_helpful_css_margin_right_54px_control' );
		if($margin_right_54px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_54px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_54px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_55px_control = get_option( 'oxsn_helpful_css_margin_right_55px_control' );
		if($margin_right_55px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_55px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_55px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_56px_control = get_option( 'oxsn_helpful_css_margin_right_56px_control' );
		if($margin_right_56px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_56px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_56px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_57px_control = get_option( 'oxsn_helpful_css_margin_right_57px_control' );
		if($margin_right_57px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_57px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_57px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_58px_control = get_option( 'oxsn_helpful_css_margin_right_58px_control' );
		if($margin_right_58px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_58px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_58px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_59px_control = get_option( 'oxsn_helpful_css_margin_right_59px_control' );
		if($margin_right_59px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_59px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_59px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_60px_control = get_option( 'oxsn_helpful_css_margin_right_60px_control' );
		if($margin_right_60px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_60px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_60px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_61px_control = get_option( 'oxsn_helpful_css_margin_right_61px_control' );
		if($margin_right_61px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_61px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_61px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_62px_control = get_option( 'oxsn_helpful_css_margin_right_62px_control' );
		if($margin_right_62px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_62px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_62px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_63px_control = get_option( 'oxsn_helpful_css_margin_right_63px_control' );
		if($margin_right_63px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_63px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_63px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_64px_control = get_option( 'oxsn_helpful_css_margin_right_64px_control' );
		if($margin_right_64px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_64px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_64px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_65px_control = get_option( 'oxsn_helpful_css_margin_right_65px_control' );
		if($margin_right_65px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_65px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_65px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_66px_control = get_option( 'oxsn_helpful_css_margin_right_66px_control' );
		if($margin_right_66px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_66px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_66px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_67px_control = get_option( 'oxsn_helpful_css_margin_right_67px_control' );
		if($margin_right_67px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_67px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_67px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_68px_control = get_option( 'oxsn_helpful_css_margin_right_68px_control' );
		if($margin_right_68px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_68px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_68px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_69px_control = get_option( 'oxsn_helpful_css_margin_right_69px_control' );
		if($margin_right_69px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_69px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_69px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_70px_control = get_option( 'oxsn_helpful_css_margin_right_70px_control' );
		if($margin_right_70px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_70px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_70px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_71px_control = get_option( 'oxsn_helpful_css_margin_right_71px_control' );
		if($margin_right_71px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_71px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_71px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_72px_control = get_option( 'oxsn_helpful_css_margin_right_72px_control' );
		if($margin_right_72px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_72px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_72px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_73px_control = get_option( 'oxsn_helpful_css_margin_right_73px_control' );
		if($margin_right_73px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_73px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_73px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_74px_control = get_option( 'oxsn_helpful_css_margin_right_74px_control' );
		if($margin_right_74px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_74px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_74px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_75px_control = get_option( 'oxsn_helpful_css_margin_right_75px_control' );
		if($margin_right_75px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_75px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_75px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_76px_control = get_option( 'oxsn_helpful_css_margin_right_76px_control' );
		if($margin_right_76px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_76px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_76px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_77px_control = get_option( 'oxsn_helpful_css_margin_right_77px_control' );
		if($margin_right_77px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_77px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_77px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_78px_control = get_option( 'oxsn_helpful_css_margin_right_78px_control' );
		if($margin_right_78px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_78px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_78px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_79px_control = get_option( 'oxsn_helpful_css_margin_right_79px_control' );
		if($margin_right_79px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_79px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_79px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_80px_control = get_option( 'oxsn_helpful_css_margin_right_80px_control' );
		if($margin_right_80px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_80px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_80px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_81px_control = get_option( 'oxsn_helpful_css_margin_right_81px_control' );
		if($margin_right_81px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_81px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_81px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_82px_control = get_option( 'oxsn_helpful_css_margin_right_82px_control' );
		if($margin_right_82px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_82px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_82px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_83px_control = get_option( 'oxsn_helpful_css_margin_right_83px_control' );
		if($margin_right_83px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_83px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_83px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_84px_control = get_option( 'oxsn_helpful_css_margin_right_84px_control' );
		if($margin_right_84px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_84px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_84px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_85px_control = get_option( 'oxsn_helpful_css_margin_right_85px_control' );
		if($margin_right_85px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_85px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_85px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_86px_control = get_option( 'oxsn_helpful_css_margin_right_86px_control' );
		if($margin_right_86px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_86px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_86px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_87px_control = get_option( 'oxsn_helpful_css_margin_right_87px_control' );
		if($margin_right_87px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_87px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_87px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_88px_control = get_option( 'oxsn_helpful_css_margin_right_88px_control' );
		if($margin_right_88px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_88px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_88px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_89px_control = get_option( 'oxsn_helpful_css_margin_right_89px_control' );
		if($margin_right_89px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_89px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_89px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_90px_control = get_option( 'oxsn_helpful_css_margin_right_90px_control' );
		if($margin_right_90px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_90px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_90px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_91px_control = get_option( 'oxsn_helpful_css_margin_right_91px_control' );
		if($margin_right_91px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_91px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_91px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_92px_control = get_option( 'oxsn_helpful_css_margin_right_92px_control' );
		if($margin_right_92px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_92px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_92px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_93px_control = get_option( 'oxsn_helpful_css_margin_right_93px_control' );
		if($margin_right_93px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_93px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_93px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_94px_control = get_option( 'oxsn_helpful_css_margin_right_94px_control' );
		if($margin_right_94px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_94px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_94px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_95px_control = get_option( 'oxsn_helpful_css_margin_right_95px_control' );
		if($margin_right_95px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_95px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_95px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_96px_control = get_option( 'oxsn_helpful_css_margin_right_96px_control' );
		if($margin_right_96px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_96px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_96px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_97px_control = get_option( 'oxsn_helpful_css_margin_right_97px_control' );
		if($margin_right_97px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_97px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_97px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_98px_control = get_option( 'oxsn_helpful_css_margin_right_98px_control' );
		if($margin_right_98px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_98px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_98px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_99px_control = get_option( 'oxsn_helpful_css_margin_right_99px_control' );
		if($margin_right_99px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_99px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_99px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_100px_control = get_option( 'oxsn_helpful_css_margin_right_100px_control' );
		if($margin_right_100px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_100px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_100px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_auto_control = get_option( 'oxsn_helpful_css_margin_right_auto_control' );
		if($margin_right_auto_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_auto_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_auto.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_inherit_control = get_option( 'oxsn_helpful_css_margin_right_inherit_control' );
		if($margin_right_inherit_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_inherit_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_inherit.css', array(), '1.0.0', 'all' );
		endif;

		$margin_right_initial_control = get_option( 'oxsn_helpful_css_margin_right_initial_control' );
		if($margin_right_initial_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_right_initial_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_right/margin_right_initial.css', array(), '1.0.0', 'all' );
		endif;

		// margin_top

		$margin_top_0px_control = get_option( 'oxsn_helpful_css_margin_top_0px_control' );
		if($margin_top_0px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_0px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_0px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_1px_control = get_option( 'oxsn_helpful_css_margin_top_1px_control' );
		if($margin_top_1px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_1px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_1px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_2px_control = get_option( 'oxsn_helpful_css_margin_top_2px_control' );
		if($margin_top_2px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_2px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_2px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_3px_control = get_option( 'oxsn_helpful_css_margin_top_3px_control' );
		if($margin_top_3px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_3px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_3px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_4px_control = get_option( 'oxsn_helpful_css_margin_top_4px_control' );
		if($margin_top_4px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_4px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_4px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_5px_control = get_option( 'oxsn_helpful_css_margin_top_5px_control' );
		if($margin_top_5px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_5px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_5px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_6px_control = get_option( 'oxsn_helpful_css_margin_top_6px_control' );
		if($margin_top_6px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_6px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_6px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_7px_control = get_option( 'oxsn_helpful_css_margin_top_7px_control' );
		if($margin_top_7px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_7px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_7px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_8px_control = get_option( 'oxsn_helpful_css_margin_top_8px_control' );
		if($margin_top_8px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_8px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_8px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_9px_control = get_option( 'oxsn_helpful_css_margin_top_9px_control' );
		if($margin_top_9px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_9px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_9px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_10px_control = get_option( 'oxsn_helpful_css_margin_top_10px_control' );
		if($margin_top_10px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_10px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_10px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_11px_control = get_option( 'oxsn_helpful_css_margin_top_11px_control' );
		if($margin_top_11px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_11px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_11px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_12px_control = get_option( 'oxsn_helpful_css_margin_top_12px_control' );
		if($margin_top_12px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_12px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_12px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_13px_control = get_option( 'oxsn_helpful_css_margin_top_13px_control' );
		if($margin_top_13px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_13px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_13px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_14px_control = get_option( 'oxsn_helpful_css_margin_top_14px_control' );
		if($margin_top_14px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_14px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_14px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_15px_control = get_option( 'oxsn_helpful_css_margin_top_15px_control' );
		if($margin_top_15px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_15px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_15px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_16px_control = get_option( 'oxsn_helpful_css_margin_top_16px_control' );
		if($margin_top_16px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_16px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_16px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_17px_control = get_option( 'oxsn_helpful_css_margin_top_17px_control' );
		if($margin_top_17px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_17px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_17px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_18px_control = get_option( 'oxsn_helpful_css_margin_top_18px_control' );
		if($margin_top_18px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_18px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_18px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_19px_control = get_option( 'oxsn_helpful_css_margin_top_19px_control' );
		if($margin_top_19px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_19px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_19px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_20px_control = get_option( 'oxsn_helpful_css_margin_top_20px_control' );
		if($margin_top_20px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_20px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_20px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_21px_control = get_option( 'oxsn_helpful_css_margin_top_21px_control' );
		if($margin_top_21px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_21px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_21px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_22px_control = get_option( 'oxsn_helpful_css_margin_top_22px_control' );
		if($margin_top_22px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_22px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_22px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_23px_control = get_option( 'oxsn_helpful_css_margin_top_23px_control' );
		if($margin_top_23px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_23px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_23px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_24px_control = get_option( 'oxsn_helpful_css_margin_top_24px_control' );
		if($margin_top_24px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_24px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_24px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_25px_control = get_option( 'oxsn_helpful_css_margin_top_25px_control' );
		if($margin_top_25px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_25px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_25px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_26px_control = get_option( 'oxsn_helpful_css_margin_top_26px_control' );
		if($margin_top_26px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_26px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_26px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_27px_control = get_option( 'oxsn_helpful_css_margin_top_27px_control' );
		if($margin_top_27px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_27px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_27px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_28px_control = get_option( 'oxsn_helpful_css_margin_top_28px_control' );
		if($margin_top_28px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_28px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_28px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_29px_control = get_option( 'oxsn_helpful_css_margin_top_29px_control' );
		if($margin_top_29px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_29px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_29px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_30px_control = get_option( 'oxsn_helpful_css_margin_top_30px_control' );
		if($margin_top_30px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_30px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_30px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_31px_control = get_option( 'oxsn_helpful_css_margin_top_31px_control' );
		if($margin_top_31px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_31px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_31px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_32px_control = get_option( 'oxsn_helpful_css_margin_top_32px_control' );
		if($margin_top_32px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_32px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_32px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_33px_control = get_option( 'oxsn_helpful_css_margin_top_33px_control' );
		if($margin_top_33px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_33px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_33px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_34px_control = get_option( 'oxsn_helpful_css_margin_top_34px_control' );
		if($margin_top_34px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_34px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_34px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_35px_control = get_option( 'oxsn_helpful_css_margin_top_35px_control' );
		if($margin_top_35px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_35px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_35px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_36px_control = get_option( 'oxsn_helpful_css_margin_top_36px_control' );
		if($margin_top_36px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_36px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_36px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_37px_control = get_option( 'oxsn_helpful_css_margin_top_37px_control' );
		if($margin_top_37px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_37px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_37px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_38px_control = get_option( 'oxsn_helpful_css_margin_top_38px_control' );
		if($margin_top_38px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_38px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_38px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_39px_control = get_option( 'oxsn_helpful_css_margin_top_39px_control' );
		if($margin_top_39px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_39px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_39px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_40px_control = get_option( 'oxsn_helpful_css_margin_top_40px_control' );
		if($margin_top_40px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_40px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_40px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_41px_control = get_option( 'oxsn_helpful_css_margin_top_41px_control' );
		if($margin_top_41px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_41px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_41px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_42px_control = get_option( 'oxsn_helpful_css_margin_top_42px_control' );
		if($margin_top_42px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_42px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_42px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_43px_control = get_option( 'oxsn_helpful_css_margin_top_43px_control' );
		if($margin_top_43px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_43px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_43px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_44px_control = get_option( 'oxsn_helpful_css_margin_top_44px_control' );
		if($margin_top_44px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_44px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_44px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_45px_control = get_option( 'oxsn_helpful_css_margin_top_45px_control' );
		if($margin_top_45px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_45px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_45px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_46px_control = get_option( 'oxsn_helpful_css_margin_top_46px_control' );
		if($margin_top_46px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_46px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_46px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_47px_control = get_option( 'oxsn_helpful_css_margin_top_47px_control' );
		if($margin_top_47px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_47px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_47px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_48px_control = get_option( 'oxsn_helpful_css_margin_top_48px_control' );
		if($margin_top_48px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_48px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_48px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_49px_control = get_option( 'oxsn_helpful_css_margin_top_49px_control' );
		if($margin_top_49px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_49px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_49px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_50px_control = get_option( 'oxsn_helpful_css_margin_top_50px_control' );
		if($margin_top_50px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_50px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_50px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_51px_control = get_option( 'oxsn_helpful_css_margin_top_51px_control' );
		if($margin_top_51px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_51px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_51px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_52px_control = get_option( 'oxsn_helpful_css_margin_top_52px_control' );
		if($margin_top_52px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_52px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_52px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_53px_control = get_option( 'oxsn_helpful_css_margin_top_53px_control' );
		if($margin_top_53px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_53px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_53px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_54px_control = get_option( 'oxsn_helpful_css_margin_top_54px_control' );
		if($margin_top_54px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_54px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_54px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_55px_control = get_option( 'oxsn_helpful_css_margin_top_55px_control' );
		if($margin_top_55px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_55px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_55px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_56px_control = get_option( 'oxsn_helpful_css_margin_top_56px_control' );
		if($margin_top_56px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_56px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_56px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_57px_control = get_option( 'oxsn_helpful_css_margin_top_57px_control' );
		if($margin_top_57px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_57px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_57px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_58px_control = get_option( 'oxsn_helpful_css_margin_top_58px_control' );
		if($margin_top_58px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_58px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_58px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_59px_control = get_option( 'oxsn_helpful_css_margin_top_59px_control' );
		if($margin_top_59px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_59px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_59px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_60px_control = get_option( 'oxsn_helpful_css_margin_top_60px_control' );
		if($margin_top_60px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_60px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_60px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_61px_control = get_option( 'oxsn_helpful_css_margin_top_61px_control' );
		if($margin_top_61px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_61px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_61px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_62px_control = get_option( 'oxsn_helpful_css_margin_top_62px_control' );
		if($margin_top_62px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_62px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_62px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_63px_control = get_option( 'oxsn_helpful_css_margin_top_63px_control' );
		if($margin_top_63px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_63px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_63px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_64px_control = get_option( 'oxsn_helpful_css_margin_top_64px_control' );
		if($margin_top_64px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_64px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_64px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_65px_control = get_option( 'oxsn_helpful_css_margin_top_65px_control' );
		if($margin_top_65px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_65px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_65px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_66px_control = get_option( 'oxsn_helpful_css_margin_top_66px_control' );
		if($margin_top_66px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_66px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_66px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_67px_control = get_option( 'oxsn_helpful_css_margin_top_67px_control' );
		if($margin_top_67px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_67px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_67px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_68px_control = get_option( 'oxsn_helpful_css_margin_top_68px_control' );
		if($margin_top_68px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_68px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_68px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_69px_control = get_option( 'oxsn_helpful_css_margin_top_69px_control' );
		if($margin_top_69px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_69px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_69px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_70px_control = get_option( 'oxsn_helpful_css_margin_top_70px_control' );
		if($margin_top_70px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_70px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_70px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_71px_control = get_option( 'oxsn_helpful_css_margin_top_71px_control' );
		if($margin_top_71px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_71px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_71px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_72px_control = get_option( 'oxsn_helpful_css_margin_top_72px_control' );
		if($margin_top_72px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_72px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_72px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_73px_control = get_option( 'oxsn_helpful_css_margin_top_73px_control' );
		if($margin_top_73px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_73px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_73px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_74px_control = get_option( 'oxsn_helpful_css_margin_top_74px_control' );
		if($margin_top_74px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_74px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_74px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_75px_control = get_option( 'oxsn_helpful_css_margin_top_75px_control' );
		if($margin_top_75px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_75px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_75px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_76px_control = get_option( 'oxsn_helpful_css_margin_top_76px_control' );
		if($margin_top_76px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_76px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_76px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_77px_control = get_option( 'oxsn_helpful_css_margin_top_77px_control' );
		if($margin_top_77px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_77px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_77px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_78px_control = get_option( 'oxsn_helpful_css_margin_top_78px_control' );
		if($margin_top_78px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_78px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_78px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_79px_control = get_option( 'oxsn_helpful_css_margin_top_79px_control' );
		if($margin_top_79px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_79px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_79px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_80px_control = get_option( 'oxsn_helpful_css_margin_top_80px_control' );
		if($margin_top_80px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_80px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_80px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_81px_control = get_option( 'oxsn_helpful_css_margin_top_81px_control' );
		if($margin_top_81px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_81px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_81px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_82px_control = get_option( 'oxsn_helpful_css_margin_top_82px_control' );
		if($margin_top_82px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_82px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_82px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_83px_control = get_option( 'oxsn_helpful_css_margin_top_83px_control' );
		if($margin_top_83px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_83px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_83px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_84px_control = get_option( 'oxsn_helpful_css_margin_top_84px_control' );
		if($margin_top_84px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_84px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_84px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_85px_control = get_option( 'oxsn_helpful_css_margin_top_85px_control' );
		if($margin_top_85px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_85px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_85px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_86px_control = get_option( 'oxsn_helpful_css_margin_top_86px_control' );
		if($margin_top_86px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_86px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_86px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_87px_control = get_option( 'oxsn_helpful_css_margin_top_87px_control' );
		if($margin_top_87px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_87px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_87px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_88px_control = get_option( 'oxsn_helpful_css_margin_top_88px_control' );
		if($margin_top_88px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_88px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_88px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_89px_control = get_option( 'oxsn_helpful_css_margin_top_89px_control' );
		if($margin_top_89px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_89px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_89px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_90px_control = get_option( 'oxsn_helpful_css_margin_top_90px_control' );
		if($margin_top_90px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_90px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_90px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_91px_control = get_option( 'oxsn_helpful_css_margin_top_91px_control' );
		if($margin_top_91px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_91px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_91px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_92px_control = get_option( 'oxsn_helpful_css_margin_top_92px_control' );
		if($margin_top_92px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_92px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_92px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_93px_control = get_option( 'oxsn_helpful_css_margin_top_93px_control' );
		if($margin_top_93px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_93px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_93px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_94px_control = get_option( 'oxsn_helpful_css_margin_top_94px_control' );
		if($margin_top_94px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_94px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_94px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_95px_control = get_option( 'oxsn_helpful_css_margin_top_95px_control' );
		if($margin_top_95px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_95px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_95px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_96px_control = get_option( 'oxsn_helpful_css_margin_top_96px_control' );
		if($margin_top_96px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_96px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_96px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_97px_control = get_option( 'oxsn_helpful_css_margin_top_97px_control' );
		if($margin_top_97px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_97px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_97px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_98px_control = get_option( 'oxsn_helpful_css_margin_top_98px_control' );
		if($margin_top_98px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_98px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_98px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_99px_control = get_option( 'oxsn_helpful_css_margin_top_99px_control' );
		if($margin_top_99px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_99px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_99px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_100px_control = get_option( 'oxsn_helpful_css_margin_top_100px_control' );
		if($margin_top_100px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_100px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_100px.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_auto_control = get_option( 'oxsn_helpful_css_margin_top_auto_control' );
		if($margin_top_auto_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_auto_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_auto.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_inherit_control = get_option( 'oxsn_helpful_css_margin_top_inherit_control' );
		if($margin_top_inherit_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_inherit_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_inherit.css', array(), '1.0.0', 'all' );
		endif;

		$margin_top_initial_control = get_option( 'oxsn_helpful_css_margin_top_initial_control' );
		if($margin_top_initial_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_margin_top_initial_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/margin_top/margin_top_initial.css', array(), '1.0.0', 'all' );
		endif;

		// opacity

		$opacity_0_1_control = get_option( 'oxsn_helpful_css_opacity_0_1_control' );
		if($opacity_0_1_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_opacity_0_1_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/opacity/opacity_0_1.css', array(), '1.0.0', 'all' );
		endif;

		$opacity_0_2_control = get_option( 'oxsn_helpful_css_opacity_0_2_control' );
		if($opacity_0_2_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_opacity_0_2_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/opacity/opacity_0_2.css', array(), '1.0.0', 'all' );
		endif;

		$opacity_0_3_control = get_option( 'oxsn_helpful_css_opacity_0_3_control' );
		if($opacity_0_3_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_opacity_0_3_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/opacity/opacity_0_3.css', array(), '1.0.0', 'all' );
		endif;

		$opacity_0_4_control = get_option( 'oxsn_helpful_css_opacity_0_4_control' );
		if($opacity_0_4_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_opacity_0_4_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/opacity/opacity_0_4.css', array(), '1.0.0', 'all' );
		endif;

		$opacity_0_5_control = get_option( 'oxsn_helpful_css_opacity_0_5_control' );
		if($opacity_0_5_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_opacity_0_5_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/opacity/opacity_0_5.css', array(), '1.0.0', 'all' );
		endif;

		$opacity_0_6_control = get_option( 'oxsn_helpful_css_opacity_0_6_control' );
		if($opacity_0_6_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_opacity_0_6_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/opacity/opacity_0_6.css', array(), '1.0.0', 'all' );
		endif;

		$opacity_0_7_control = get_option( 'oxsn_helpful_css_opacity_0_7_control' );
		if($opacity_0_7_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_opacity_0_7_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/opacity/opacity_0_7.css', array(), '1.0.0', 'all' );
		endif;

		$opacity_0_8_control = get_option( 'oxsn_helpful_css_opacity_0_8_control' );
		if($opacity_0_8_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_opacity_0_8_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/opacity/opacity_0_8.css', array(), '1.0.0', 'all' );
		endif;

		$opacity_0_9_control = get_option( 'oxsn_helpful_css_opacity_0_9_control' );
		if($opacity_0_9_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_opacity_0_9_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/opacity/opacity_0_9.css', array(), '1.0.0', 'all' );
		endif;

		$opacity_0_control = get_option( 'oxsn_helpful_css_opacity_0_control' );
		if($opacity_0_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_opacity_0_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/opacity/opacity_0.css', array(), '1.0.0', 'all' );
		endif;

		$opacity_1_control = get_option( 'oxsn_helpful_css_opacity_1_control' );
		if($opacity_1_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_opacity_1_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/opacity/opacity_1.css', array(), '1.0.0', 'all' );
		endif;

		$opacity_inherit_control = get_option( 'oxsn_helpful_css_opacity_inherit_control' );
		if($opacity_inherit_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_opacity_inherit_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/opacity/opacity_inherit.css', array(), '1.0.0', 'all' );
		endif;

		$opacity_initial_control = get_option( 'oxsn_helpful_css_opacity_initial_control' );
		if($opacity_initial_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_opacity_initial_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/opacity/opacity_initial.css', array(), '1.0.0', 'all' );
		endif;

		// padding

		$padding_0px_control = get_option( 'oxsn_helpful_css_padding_0px_control' );
		if($padding_0px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_0px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_0px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_1px_control = get_option( 'oxsn_helpful_css_padding_1px_control' );
		if($padding_1px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_1px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_1px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_2px_control = get_option( 'oxsn_helpful_css_padding_2px_control' );
		if($padding_2px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_2px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_2px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_3px_control = get_option( 'oxsn_helpful_css_padding_3px_control' );
		if($padding_3px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_3px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_3px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_4px_control = get_option( 'oxsn_helpful_css_padding_4px_control' );
		if($padding_4px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_4px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_4px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_5px_control = get_option( 'oxsn_helpful_css_padding_5px_control' );
		if($padding_5px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_5px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_5px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_6px_control = get_option( 'oxsn_helpful_css_padding_6px_control' );
		if($padding_6px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_6px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_6px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_7px_control = get_option( 'oxsn_helpful_css_padding_7px_control' );
		if($padding_7px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_7px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_7px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_8px_control = get_option( 'oxsn_helpful_css_padding_8px_control' );
		if($padding_8px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_8px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_8px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_9px_control = get_option( 'oxsn_helpful_css_padding_9px_control' );
		if($padding_9px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_9px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_9px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_10px_control = get_option( 'oxsn_helpful_css_padding_10px_control' );
		if($padding_10px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_10px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_10px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_11px_control = get_option( 'oxsn_helpful_css_padding_11px_control' );
		if($padding_11px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_11px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_11px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_12px_control = get_option( 'oxsn_helpful_css_padding_12px_control' );
		if($padding_12px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_12px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_12px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_13px_control = get_option( 'oxsn_helpful_css_padding_13px_control' );
		if($padding_13px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_13px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_13px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_14px_control = get_option( 'oxsn_helpful_css_padding_14px_control' );
		if($padding_14px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_14px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_14px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_15px_control = get_option( 'oxsn_helpful_css_padding_15px_control' );
		if($padding_15px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_15px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_15px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_16px_control = get_option( 'oxsn_helpful_css_padding_16px_control' );
		if($padding_16px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_16px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_16px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_17px_control = get_option( 'oxsn_helpful_css_padding_17px_control' );
		if($padding_17px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_17px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_17px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_18px_control = get_option( 'oxsn_helpful_css_padding_18px_control' );
		if($padding_18px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_18px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_18px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_19px_control = get_option( 'oxsn_helpful_css_padding_19px_control' );
		if($padding_19px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_19px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_19px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_20px_control = get_option( 'oxsn_helpful_css_padding_20px_control' );
		if($padding_20px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_20px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_20px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_21px_control = get_option( 'oxsn_helpful_css_padding_21px_control' );
		if($padding_21px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_21px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_21px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_22px_control = get_option( 'oxsn_helpful_css_padding_22px_control' );
		if($padding_22px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_22px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_22px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_23px_control = get_option( 'oxsn_helpful_css_padding_23px_control' );
		if($padding_23px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_23px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_23px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_24px_control = get_option( 'oxsn_helpful_css_padding_24px_control' );
		if($padding_24px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_24px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_24px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_25px_control = get_option( 'oxsn_helpful_css_padding_25px_control' );
		if($padding_25px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_25px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_25px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_26px_control = get_option( 'oxsn_helpful_css_padding_26px_control' );
		if($padding_26px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_26px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_26px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_27px_control = get_option( 'oxsn_helpful_css_padding_27px_control' );
		if($padding_27px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_27px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_27px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_28px_control = get_option( 'oxsn_helpful_css_padding_28px_control' );
		if($padding_28px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_28px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_28px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_29px_control = get_option( 'oxsn_helpful_css_padding_29px_control' );
		if($padding_29px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_29px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_29px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_30px_control = get_option( 'oxsn_helpful_css_padding_30px_control' );
		if($padding_30px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_30px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_30px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_31px_control = get_option( 'oxsn_helpful_css_padding_31px_control' );
		if($padding_31px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_31px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_31px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_32px_control = get_option( 'oxsn_helpful_css_padding_32px_control' );
		if($padding_32px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_32px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_32px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_33px_control = get_option( 'oxsn_helpful_css_padding_33px_control' );
		if($padding_33px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_33px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_33px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_34px_control = get_option( 'oxsn_helpful_css_padding_34px_control' );
		if($padding_34px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_34px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_34px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_35px_control = get_option( 'oxsn_helpful_css_padding_35px_control' );
		if($padding_35px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_35px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_35px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_36px_control = get_option( 'oxsn_helpful_css_padding_36px_control' );
		if($padding_36px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_36px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_36px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_37px_control = get_option( 'oxsn_helpful_css_padding_37px_control' );
		if($padding_37px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_37px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_37px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_38px_control = get_option( 'oxsn_helpful_css_padding_38px_control' );
		if($padding_38px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_38px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_38px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_39px_control = get_option( 'oxsn_helpful_css_padding_39px_control' );
		if($padding_39px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_39px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_39px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_40px_control = get_option( 'oxsn_helpful_css_padding_40px_control' );
		if($padding_40px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_40px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_40px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_41px_control = get_option( 'oxsn_helpful_css_padding_41px_control' );
		if($padding_41px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_41px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_41px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_42px_control = get_option( 'oxsn_helpful_css_padding_42px_control' );
		if($padding_42px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_42px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_42px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_43px_control = get_option( 'oxsn_helpful_css_padding_43px_control' );
		if($padding_43px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_43px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_43px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_44px_control = get_option( 'oxsn_helpful_css_padding_44px_control' );
		if($padding_44px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_44px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_44px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_45px_control = get_option( 'oxsn_helpful_css_padding_45px_control' );
		if($padding_45px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_45px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_45px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_46px_control = get_option( 'oxsn_helpful_css_padding_46px_control' );
		if($padding_46px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_46px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_46px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_47px_control = get_option( 'oxsn_helpful_css_padding_47px_control' );
		if($padding_47px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_47px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_47px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_48px_control = get_option( 'oxsn_helpful_css_padding_48px_control' );
		if($padding_48px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_48px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_48px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_49px_control = get_option( 'oxsn_helpful_css_padding_49px_control' );
		if($padding_49px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_49px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_49px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_50px_control = get_option( 'oxsn_helpful_css_padding_50px_control' );
		if($padding_50px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_50px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_50px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_51px_control = get_option( 'oxsn_helpful_css_padding_51px_control' );
		if($padding_51px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_51px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_51px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_52px_control = get_option( 'oxsn_helpful_css_padding_52px_control' );
		if($padding_52px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_52px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_52px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_53px_control = get_option( 'oxsn_helpful_css_padding_53px_control' );
		if($padding_53px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_53px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_53px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_54px_control = get_option( 'oxsn_helpful_css_padding_54px_control' );
		if($padding_54px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_54px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_54px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_55px_control = get_option( 'oxsn_helpful_css_padding_55px_control' );
		if($padding_55px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_55px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_55px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_56px_control = get_option( 'oxsn_helpful_css_padding_56px_control' );
		if($padding_56px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_56px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_56px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_57px_control = get_option( 'oxsn_helpful_css_padding_57px_control' );
		if($padding_57px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_57px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_57px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_58px_control = get_option( 'oxsn_helpful_css_padding_58px_control' );
		if($padding_58px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_58px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_58px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_59px_control = get_option( 'oxsn_helpful_css_padding_59px_control' );
		if($padding_59px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_59px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_59px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_60px_control = get_option( 'oxsn_helpful_css_padding_60px_control' );
		if($padding_60px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_60px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_60px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_61px_control = get_option( 'oxsn_helpful_css_padding_61px_control' );
		if($padding_61px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_61px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_61px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_62px_control = get_option( 'oxsn_helpful_css_padding_62px_control' );
		if($padding_62px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_62px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_62px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_63px_control = get_option( 'oxsn_helpful_css_padding_63px_control' );
		if($padding_63px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_63px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_63px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_64px_control = get_option( 'oxsn_helpful_css_padding_64px_control' );
		if($padding_64px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_64px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_64px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_65px_control = get_option( 'oxsn_helpful_css_padding_65px_control' );
		if($padding_65px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_65px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_65px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_66px_control = get_option( 'oxsn_helpful_css_padding_66px_control' );
		if($padding_66px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_66px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_66px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_67px_control = get_option( 'oxsn_helpful_css_padding_67px_control' );
		if($padding_67px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_67px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_67px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_68px_control = get_option( 'oxsn_helpful_css_padding_68px_control' );
		if($padding_68px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_68px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_68px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_69px_control = get_option( 'oxsn_helpful_css_padding_69px_control' );
		if($padding_69px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_69px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_69px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_70px_control = get_option( 'oxsn_helpful_css_padding_70px_control' );
		if($padding_70px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_70px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_70px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_71px_control = get_option( 'oxsn_helpful_css_padding_71px_control' );
		if($padding_71px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_71px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_71px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_72px_control = get_option( 'oxsn_helpful_css_padding_72px_control' );
		if($padding_72px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_72px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_72px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_73px_control = get_option( 'oxsn_helpful_css_padding_73px_control' );
		if($padding_73px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_73px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_73px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_74px_control = get_option( 'oxsn_helpful_css_padding_74px_control' );
		if($padding_74px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_74px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_74px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_75px_control = get_option( 'oxsn_helpful_css_padding_75px_control' );
		if($padding_75px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_75px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_75px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_76px_control = get_option( 'oxsn_helpful_css_padding_76px_control' );
		if($padding_76px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_76px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_76px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_77px_control = get_option( 'oxsn_helpful_css_padding_77px_control' );
		if($padding_77px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_77px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_77px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_78px_control = get_option( 'oxsn_helpful_css_padding_78px_control' );
		if($padding_78px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_78px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_78px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_79px_control = get_option( 'oxsn_helpful_css_padding_79px_control' );
		if($padding_79px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_79px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_79px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_80px_control = get_option( 'oxsn_helpful_css_padding_80px_control' );
		if($padding_80px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_80px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_80px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_81px_control = get_option( 'oxsn_helpful_css_padding_81px_control' );
		if($padding_81px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_81px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_81px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_82px_control = get_option( 'oxsn_helpful_css_padding_82px_control' );
		if($padding_82px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_82px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_82px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_83px_control = get_option( 'oxsn_helpful_css_padding_83px_control' );
		if($padding_83px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_83px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_83px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_84px_control = get_option( 'oxsn_helpful_css_padding_84px_control' );
		if($padding_84px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_84px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_84px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_85px_control = get_option( 'oxsn_helpful_css_padding_85px_control' );
		if($padding_85px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_85px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_85px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_86px_control = get_option( 'oxsn_helpful_css_padding_86px_control' );
		if($padding_86px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_86px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_86px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_87px_control = get_option( 'oxsn_helpful_css_padding_87px_control' );
		if($padding_87px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_87px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_87px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_88px_control = get_option( 'oxsn_helpful_css_padding_88px_control' );
		if($padding_88px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_88px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_88px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_89px_control = get_option( 'oxsn_helpful_css_padding_89px_control' );
		if($padding_89px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_89px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_89px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_90px_control = get_option( 'oxsn_helpful_css_padding_90px_control' );
		if($padding_90px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_90px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_90px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_91px_control = get_option( 'oxsn_helpful_css_padding_91px_control' );
		if($padding_91px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_91px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_91px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_92px_control = get_option( 'oxsn_helpful_css_padding_92px_control' );
		if($padding_92px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_92px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_92px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_93px_control = get_option( 'oxsn_helpful_css_padding_93px_control' );
		if($padding_93px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_93px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_93px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_94px_control = get_option( 'oxsn_helpful_css_padding_94px_control' );
		if($padding_94px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_94px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_94px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_95px_control = get_option( 'oxsn_helpful_css_padding_95px_control' );
		if($padding_95px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_95px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_95px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_96px_control = get_option( 'oxsn_helpful_css_padding_96px_control' );
		if($padding_96px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_96px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_96px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_97px_control = get_option( 'oxsn_helpful_css_padding_97px_control' );
		if($padding_97px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_97px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_97px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_98px_control = get_option( 'oxsn_helpful_css_padding_98px_control' );
		if($padding_98px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_98px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_98px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_99px_control = get_option( 'oxsn_helpful_css_padding_99px_control' );
		if($padding_99px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_99px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_99px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_100px_control = get_option( 'oxsn_helpful_css_padding_100px_control' );
		if($padding_100px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_100px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_100px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_auto_control = get_option( 'oxsn_helpful_css_padding_auto_control' );
		if($padding_auto_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_auto_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_auto.css', array(), '1.0.0', 'all' );
		endif;

		$padding_inherit_control = get_option( 'oxsn_helpful_css_padding_inherit_control' );
		if($padding_inherit_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_inherit_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_inherit.css', array(), '1.0.0', 'all' );
		endif;

		$padding_initial_control = get_option( 'oxsn_helpful_css_padding_initial_control' );
		if($padding_initial_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_initial_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding/padding_initial.css', array(), '1.0.0', 'all' );
		endif;

		// padding_bottom

		$padding_bottom_0px_control = get_option( 'oxsn_helpful_css_padding_bottom_0px_control' );
		if($padding_bottom_0px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_0px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_0px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_1px_control = get_option( 'oxsn_helpful_css_padding_bottom_1px_control' );
		if($padding_bottom_1px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_1px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_1px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_2px_control = get_option( 'oxsn_helpful_css_padding_bottom_2px_control' );
		if($padding_bottom_2px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_2px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_2px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_3px_control = get_option( 'oxsn_helpful_css_padding_bottom_3px_control' );
		if($padding_bottom_3px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_3px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_3px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_4px_control = get_option( 'oxsn_helpful_css_padding_bottom_4px_control' );
		if($padding_bottom_4px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_4px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_4px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_5px_control = get_option( 'oxsn_helpful_css_padding_bottom_5px_control' );
		if($padding_bottom_5px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_5px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_5px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_6px_control = get_option( 'oxsn_helpful_css_padding_bottom_6px_control' );
		if($padding_bottom_6px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_6px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_6px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_7px_control = get_option( 'oxsn_helpful_css_padding_bottom_7px_control' );
		if($padding_bottom_7px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_7px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_7px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_8px_control = get_option( 'oxsn_helpful_css_padding_bottom_8px_control' );
		if($padding_bottom_8px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_8px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_8px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_9px_control = get_option( 'oxsn_helpful_css_padding_bottom_9px_control' );
		if($padding_bottom_9px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_9px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_9px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_10px_control = get_option( 'oxsn_helpful_css_padding_bottom_10px_control' );
		if($padding_bottom_10px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_10px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_10px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_11px_control = get_option( 'oxsn_helpful_css_padding_bottom_11px_control' );
		if($padding_bottom_11px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_11px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_11px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_12px_control = get_option( 'oxsn_helpful_css_padding_bottom_12px_control' );
		if($padding_bottom_12px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_12px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_12px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_13px_control = get_option( 'oxsn_helpful_css_padding_bottom_13px_control' );
		if($padding_bottom_13px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_13px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_13px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_14px_control = get_option( 'oxsn_helpful_css_padding_bottom_14px_control' );
		if($padding_bottom_14px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_14px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_14px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_15px_control = get_option( 'oxsn_helpful_css_padding_bottom_15px_control' );
		if($padding_bottom_15px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_15px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_15px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_16px_control = get_option( 'oxsn_helpful_css_padding_bottom_16px_control' );
		if($padding_bottom_16px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_16px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_16px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_17px_control = get_option( 'oxsn_helpful_css_padding_bottom_17px_control' );
		if($padding_bottom_17px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_17px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_17px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_18px_control = get_option( 'oxsn_helpful_css_padding_bottom_18px_control' );
		if($padding_bottom_18px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_18px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_18px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_19px_control = get_option( 'oxsn_helpful_css_padding_bottom_19px_control' );
		if($padding_bottom_19px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_19px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_19px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_20px_control = get_option( 'oxsn_helpful_css_padding_bottom_20px_control' );
		if($padding_bottom_20px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_20px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_20px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_21px_control = get_option( 'oxsn_helpful_css_padding_bottom_21px_control' );
		if($padding_bottom_21px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_21px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_21px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_22px_control = get_option( 'oxsn_helpful_css_padding_bottom_22px_control' );
		if($padding_bottom_22px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_22px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_22px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_23px_control = get_option( 'oxsn_helpful_css_padding_bottom_23px_control' );
		if($padding_bottom_23px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_23px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_23px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_24px_control = get_option( 'oxsn_helpful_css_padding_bottom_24px_control' );
		if($padding_bottom_24px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_24px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_24px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_25px_control = get_option( 'oxsn_helpful_css_padding_bottom_25px_control' );
		if($padding_bottom_25px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_25px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_25px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_26px_control = get_option( 'oxsn_helpful_css_padding_bottom_26px_control' );
		if($padding_bottom_26px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_26px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_26px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_27px_control = get_option( 'oxsn_helpful_css_padding_bottom_27px_control' );
		if($padding_bottom_27px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_27px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_27px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_28px_control = get_option( 'oxsn_helpful_css_padding_bottom_28px_control' );
		if($padding_bottom_28px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_28px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_28px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_29px_control = get_option( 'oxsn_helpful_css_padding_bottom_29px_control' );
		if($padding_bottom_29px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_29px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_29px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_30px_control = get_option( 'oxsn_helpful_css_padding_bottom_30px_control' );
		if($padding_bottom_30px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_30px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_30px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_31px_control = get_option( 'oxsn_helpful_css_padding_bottom_31px_control' );
		if($padding_bottom_31px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_31px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_31px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_32px_control = get_option( 'oxsn_helpful_css_padding_bottom_32px_control' );
		if($padding_bottom_32px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_32px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_32px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_33px_control = get_option( 'oxsn_helpful_css_padding_bottom_33px_control' );
		if($padding_bottom_33px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_33px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_33px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_34px_control = get_option( 'oxsn_helpful_css_padding_bottom_34px_control' );
		if($padding_bottom_34px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_34px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_34px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_35px_control = get_option( 'oxsn_helpful_css_padding_bottom_35px_control' );
		if($padding_bottom_35px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_35px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_35px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_36px_control = get_option( 'oxsn_helpful_css_padding_bottom_36px_control' );
		if($padding_bottom_36px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_36px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_36px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_37px_control = get_option( 'oxsn_helpful_css_padding_bottom_37px_control' );
		if($padding_bottom_37px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_37px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_37px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_38px_control = get_option( 'oxsn_helpful_css_padding_bottom_38px_control' );
		if($padding_bottom_38px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_38px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_38px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_39px_control = get_option( 'oxsn_helpful_css_padding_bottom_39px_control' );
		if($padding_bottom_39px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_39px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_39px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_40px_control = get_option( 'oxsn_helpful_css_padding_bottom_40px_control' );
		if($padding_bottom_40px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_40px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_40px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_41px_control = get_option( 'oxsn_helpful_css_padding_bottom_41px_control' );
		if($padding_bottom_41px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_41px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_41px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_42px_control = get_option( 'oxsn_helpful_css_padding_bottom_42px_control' );
		if($padding_bottom_42px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_42px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_42px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_43px_control = get_option( 'oxsn_helpful_css_padding_bottom_43px_control' );
		if($padding_bottom_43px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_43px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_43px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_44px_control = get_option( 'oxsn_helpful_css_padding_bottom_44px_control' );
		if($padding_bottom_44px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_44px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_44px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_45px_control = get_option( 'oxsn_helpful_css_padding_bottom_45px_control' );
		if($padding_bottom_45px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_45px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_45px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_46px_control = get_option( 'oxsn_helpful_css_padding_bottom_46px_control' );
		if($padding_bottom_46px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_46px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_46px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_47px_control = get_option( 'oxsn_helpful_css_padding_bottom_47px_control' );
		if($padding_bottom_47px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_47px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_47px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_48px_control = get_option( 'oxsn_helpful_css_padding_bottom_48px_control' );
		if($padding_bottom_48px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_48px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_48px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_49px_control = get_option( 'oxsn_helpful_css_padding_bottom_49px_control' );
		if($padding_bottom_49px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_49px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_49px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_50px_control = get_option( 'oxsn_helpful_css_padding_bottom_50px_control' );
		if($padding_bottom_50px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_50px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_50px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_51px_control = get_option( 'oxsn_helpful_css_padding_bottom_51px_control' );
		if($padding_bottom_51px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_51px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_51px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_52px_control = get_option( 'oxsn_helpful_css_padding_bottom_52px_control' );
		if($padding_bottom_52px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_52px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_52px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_53px_control = get_option( 'oxsn_helpful_css_padding_bottom_53px_control' );
		if($padding_bottom_53px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_53px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_53px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_54px_control = get_option( 'oxsn_helpful_css_padding_bottom_54px_control' );
		if($padding_bottom_54px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_54px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_54px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_55px_control = get_option( 'oxsn_helpful_css_padding_bottom_55px_control' );
		if($padding_bottom_55px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_55px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_55px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_56px_control = get_option( 'oxsn_helpful_css_padding_bottom_56px_control' );
		if($padding_bottom_56px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_56px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_56px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_57px_control = get_option( 'oxsn_helpful_css_padding_bottom_57px_control' );
		if($padding_bottom_57px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_57px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_57px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_58px_control = get_option( 'oxsn_helpful_css_padding_bottom_58px_control' );
		if($padding_bottom_58px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_58px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_58px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_59px_control = get_option( 'oxsn_helpful_css_padding_bottom_59px_control' );
		if($padding_bottom_59px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_59px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_59px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_60px_control = get_option( 'oxsn_helpful_css_padding_bottom_60px_control' );
		if($padding_bottom_60px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_60px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_60px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_61px_control = get_option( 'oxsn_helpful_css_padding_bottom_61px_control' );
		if($padding_bottom_61px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_61px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_61px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_62px_control = get_option( 'oxsn_helpful_css_padding_bottom_62px_control' );
		if($padding_bottom_62px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_62px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_62px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_63px_control = get_option( 'oxsn_helpful_css_padding_bottom_63px_control' );
		if($padding_bottom_63px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_63px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_63px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_64px_control = get_option( 'oxsn_helpful_css_padding_bottom_64px_control' );
		if($padding_bottom_64px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_64px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_64px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_65px_control = get_option( 'oxsn_helpful_css_padding_bottom_65px_control' );
		if($padding_bottom_65px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_65px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_65px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_66px_control = get_option( 'oxsn_helpful_css_padding_bottom_66px_control' );
		if($padding_bottom_66px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_66px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_66px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_67px_control = get_option( 'oxsn_helpful_css_padding_bottom_67px_control' );
		if($padding_bottom_67px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_67px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_67px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_68px_control = get_option( 'oxsn_helpful_css_padding_bottom_68px_control' );
		if($padding_bottom_68px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_68px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_68px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_69px_control = get_option( 'oxsn_helpful_css_padding_bottom_69px_control' );
		if($padding_bottom_69px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_69px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_69px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_70px_control = get_option( 'oxsn_helpful_css_padding_bottom_70px_control' );
		if($padding_bottom_70px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_70px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_70px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_71px_control = get_option( 'oxsn_helpful_css_padding_bottom_71px_control' );
		if($padding_bottom_71px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_71px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_71px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_72px_control = get_option( 'oxsn_helpful_css_padding_bottom_72px_control' );
		if($padding_bottom_72px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_72px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_72px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_73px_control = get_option( 'oxsn_helpful_css_padding_bottom_73px_control' );
		if($padding_bottom_73px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_73px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_73px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_74px_control = get_option( 'oxsn_helpful_css_padding_bottom_74px_control' );
		if($padding_bottom_74px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_74px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_74px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_75px_control = get_option( 'oxsn_helpful_css_padding_bottom_75px_control' );
		if($padding_bottom_75px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_75px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_75px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_76px_control = get_option( 'oxsn_helpful_css_padding_bottom_76px_control' );
		if($padding_bottom_76px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_76px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_76px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_77px_control = get_option( 'oxsn_helpful_css_padding_bottom_77px_control' );
		if($padding_bottom_77px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_77px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_77px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_78px_control = get_option( 'oxsn_helpful_css_padding_bottom_78px_control' );
		if($padding_bottom_78px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_78px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_78px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_79px_control = get_option( 'oxsn_helpful_css_padding_bottom_79px_control' );
		if($padding_bottom_79px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_79px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_79px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_80px_control = get_option( 'oxsn_helpful_css_padding_bottom_80px_control' );
		if($padding_bottom_80px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_80px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_80px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_81px_control = get_option( 'oxsn_helpful_css_padding_bottom_81px_control' );
		if($padding_bottom_81px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_81px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_81px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_82px_control = get_option( 'oxsn_helpful_css_padding_bottom_82px_control' );
		if($padding_bottom_82px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_82px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_82px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_83px_control = get_option( 'oxsn_helpful_css_padding_bottom_83px_control' );
		if($padding_bottom_83px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_83px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_83px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_84px_control = get_option( 'oxsn_helpful_css_padding_bottom_84px_control' );
		if($padding_bottom_84px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_84px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_84px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_85px_control = get_option( 'oxsn_helpful_css_padding_bottom_85px_control' );
		if($padding_bottom_85px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_85px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_85px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_86px_control = get_option( 'oxsn_helpful_css_padding_bottom_86px_control' );
		if($padding_bottom_86px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_86px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_86px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_87px_control = get_option( 'oxsn_helpful_css_padding_bottom_87px_control' );
		if($padding_bottom_87px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_87px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_87px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_88px_control = get_option( 'oxsn_helpful_css_padding_bottom_88px_control' );
		if($padding_bottom_88px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_88px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_88px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_89px_control = get_option( 'oxsn_helpful_css_padding_bottom_89px_control' );
		if($padding_bottom_89px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_89px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_89px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_90px_control = get_option( 'oxsn_helpful_css_padding_bottom_90px_control' );
		if($padding_bottom_90px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_90px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_90px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_91px_control = get_option( 'oxsn_helpful_css_padding_bottom_91px_control' );
		if($padding_bottom_91px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_91px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_91px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_92px_control = get_option( 'oxsn_helpful_css_padding_bottom_92px_control' );
		if($padding_bottom_92px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_92px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_92px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_93px_control = get_option( 'oxsn_helpful_css_padding_bottom_93px_control' );
		if($padding_bottom_93px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_93px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_93px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_94px_control = get_option( 'oxsn_helpful_css_padding_bottom_94px_control' );
		if($padding_bottom_94px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_94px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_94px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_95px_control = get_option( 'oxsn_helpful_css_padding_bottom_95px_control' );
		if($padding_bottom_95px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_95px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_95px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_96px_control = get_option( 'oxsn_helpful_css_padding_bottom_96px_control' );
		if($padding_bottom_96px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_96px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_96px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_97px_control = get_option( 'oxsn_helpful_css_padding_bottom_97px_control' );
		if($padding_bottom_97px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_97px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_97px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_98px_control = get_option( 'oxsn_helpful_css_padding_bottom_98px_control' );
		if($padding_bottom_98px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_98px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_98px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_99px_control = get_option( 'oxsn_helpful_css_padding_bottom_99px_control' );
		if($padding_bottom_99px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_99px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_99px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_100px_control = get_option( 'oxsn_helpful_css_padding_bottom_100px_control' );
		if($padding_bottom_100px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_100px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_100px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_auto_control = get_option( 'oxsn_helpful_css_padding_bottom_auto_control' );
		if($padding_bottom_auto_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_auto_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_auto.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_inherit_control = get_option( 'oxsn_helpful_css_padding_bottom_inherit_control' );
		if($padding_bottom_inherit_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_inherit_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_inherit.css', array(), '1.0.0', 'all' );
		endif;

		$padding_bottom_initial_control = get_option( 'oxsn_helpful_css_padding_bottom_initial_control' );
		if($padding_bottom_initial_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_bottom_initial_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_bottom/padding_bottom_initial.css', array(), '1.0.0', 'all' );
		endif;

		// padding_left

		$padding_left_0px_control = get_option( 'oxsn_helpful_css_padding_left_0px_control' );
		if($padding_left_0px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_0px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_0px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_1px_control = get_option( 'oxsn_helpful_css_padding_left_1px_control' );
		if($padding_left_1px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_1px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_1px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_2px_control = get_option( 'oxsn_helpful_css_padding_left_2px_control' );
		if($padding_left_2px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_2px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_2px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_3px_control = get_option( 'oxsn_helpful_css_padding_left_3px_control' );
		if($padding_left_3px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_3px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_3px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_4px_control = get_option( 'oxsn_helpful_css_padding_left_4px_control' );
		if($padding_left_4px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_4px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_4px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_5px_control = get_option( 'oxsn_helpful_css_padding_left_5px_control' );
		if($padding_left_5px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_5px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_5px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_6px_control = get_option( 'oxsn_helpful_css_padding_left_6px_control' );
		if($padding_left_6px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_6px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_6px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_7px_control = get_option( 'oxsn_helpful_css_padding_left_7px_control' );
		if($padding_left_7px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_7px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_7px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_8px_control = get_option( 'oxsn_helpful_css_padding_left_8px_control' );
		if($padding_left_8px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_8px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_8px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_9px_control = get_option( 'oxsn_helpful_css_padding_left_9px_control' );
		if($padding_left_9px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_9px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_9px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_10px_control = get_option( 'oxsn_helpful_css_padding_left_10px_control' );
		if($padding_left_10px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_10px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_10px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_11px_control = get_option( 'oxsn_helpful_css_padding_left_11px_control' );
		if($padding_left_11px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_11px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_11px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_12px_control = get_option( 'oxsn_helpful_css_padding_left_12px_control' );
		if($padding_left_12px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_12px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_12px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_13px_control = get_option( 'oxsn_helpful_css_padding_left_13px_control' );
		if($padding_left_13px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_13px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_13px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_14px_control = get_option( 'oxsn_helpful_css_padding_left_14px_control' );
		if($padding_left_14px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_14px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_14px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_15px_control = get_option( 'oxsn_helpful_css_padding_left_15px_control' );
		if($padding_left_15px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_15px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_15px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_16px_control = get_option( 'oxsn_helpful_css_padding_left_16px_control' );
		if($padding_left_16px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_16px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_16px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_17px_control = get_option( 'oxsn_helpful_css_padding_left_17px_control' );
		if($padding_left_17px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_17px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_17px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_18px_control = get_option( 'oxsn_helpful_css_padding_left_18px_control' );
		if($padding_left_18px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_18px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_18px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_19px_control = get_option( 'oxsn_helpful_css_padding_left_19px_control' );
		if($padding_left_19px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_19px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_19px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_20px_control = get_option( 'oxsn_helpful_css_padding_left_20px_control' );
		if($padding_left_20px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_20px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_20px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_21px_control = get_option( 'oxsn_helpful_css_padding_left_21px_control' );
		if($padding_left_21px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_21px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_21px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_22px_control = get_option( 'oxsn_helpful_css_padding_left_22px_control' );
		if($padding_left_22px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_22px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_22px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_23px_control = get_option( 'oxsn_helpful_css_padding_left_23px_control' );
		if($padding_left_23px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_23px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_23px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_24px_control = get_option( 'oxsn_helpful_css_padding_left_24px_control' );
		if($padding_left_24px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_24px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_24px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_25px_control = get_option( 'oxsn_helpful_css_padding_left_25px_control' );
		if($padding_left_25px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_25px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_25px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_26px_control = get_option( 'oxsn_helpful_css_padding_left_26px_control' );
		if($padding_left_26px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_26px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_26px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_27px_control = get_option( 'oxsn_helpful_css_padding_left_27px_control' );
		if($padding_left_27px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_27px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_27px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_28px_control = get_option( 'oxsn_helpful_css_padding_left_28px_control' );
		if($padding_left_28px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_28px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_28px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_29px_control = get_option( 'oxsn_helpful_css_padding_left_29px_control' );
		if($padding_left_29px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_29px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_29px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_30px_control = get_option( 'oxsn_helpful_css_padding_left_30px_control' );
		if($padding_left_30px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_30px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_30px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_31px_control = get_option( 'oxsn_helpful_css_padding_left_31px_control' );
		if($padding_left_31px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_31px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_31px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_32px_control = get_option( 'oxsn_helpful_css_padding_left_32px_control' );
		if($padding_left_32px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_32px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_32px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_33px_control = get_option( 'oxsn_helpful_css_padding_left_33px_control' );
		if($padding_left_33px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_33px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_33px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_34px_control = get_option( 'oxsn_helpful_css_padding_left_34px_control' );
		if($padding_left_34px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_34px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_34px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_35px_control = get_option( 'oxsn_helpful_css_padding_left_35px_control' );
		if($padding_left_35px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_35px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_35px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_36px_control = get_option( 'oxsn_helpful_css_padding_left_36px_control' );
		if($padding_left_36px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_36px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_36px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_37px_control = get_option( 'oxsn_helpful_css_padding_left_37px_control' );
		if($padding_left_37px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_37px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_37px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_38px_control = get_option( 'oxsn_helpful_css_padding_left_38px_control' );
		if($padding_left_38px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_38px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_38px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_39px_control = get_option( 'oxsn_helpful_css_padding_left_39px_control' );
		if($padding_left_39px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_39px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_39px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_40px_control = get_option( 'oxsn_helpful_css_padding_left_40px_control' );
		if($padding_left_40px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_40px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_40px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_41px_control = get_option( 'oxsn_helpful_css_padding_left_41px_control' );
		if($padding_left_41px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_41px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_41px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_42px_control = get_option( 'oxsn_helpful_css_padding_left_42px_control' );
		if($padding_left_42px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_42px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_42px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_43px_control = get_option( 'oxsn_helpful_css_padding_left_43px_control' );
		if($padding_left_43px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_43px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_43px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_44px_control = get_option( 'oxsn_helpful_css_padding_left_44px_control' );
		if($padding_left_44px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_44px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_44px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_45px_control = get_option( 'oxsn_helpful_css_padding_left_45px_control' );
		if($padding_left_45px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_45px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_45px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_46px_control = get_option( 'oxsn_helpful_css_padding_left_46px_control' );
		if($padding_left_46px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_46px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_46px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_47px_control = get_option( 'oxsn_helpful_css_padding_left_47px_control' );
		if($padding_left_47px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_47px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_47px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_48px_control = get_option( 'oxsn_helpful_css_padding_left_48px_control' );
		if($padding_left_48px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_48px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_48px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_49px_control = get_option( 'oxsn_helpful_css_padding_left_49px_control' );
		if($padding_left_49px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_49px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_49px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_50px_control = get_option( 'oxsn_helpful_css_padding_left_50px_control' );
		if($padding_left_50px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_50px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_50px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_51px_control = get_option( 'oxsn_helpful_css_padding_left_51px_control' );
		if($padding_left_51px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_51px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_51px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_52px_control = get_option( 'oxsn_helpful_css_padding_left_52px_control' );
		if($padding_left_52px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_52px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_52px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_53px_control = get_option( 'oxsn_helpful_css_padding_left_53px_control' );
		if($padding_left_53px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_53px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_53px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_54px_control = get_option( 'oxsn_helpful_css_padding_left_54px_control' );
		if($padding_left_54px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_54px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_54px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_55px_control = get_option( 'oxsn_helpful_css_padding_left_55px_control' );
		if($padding_left_55px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_55px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_55px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_56px_control = get_option( 'oxsn_helpful_css_padding_left_56px_control' );
		if($padding_left_56px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_56px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_56px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_57px_control = get_option( 'oxsn_helpful_css_padding_left_57px_control' );
		if($padding_left_57px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_57px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_57px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_58px_control = get_option( 'oxsn_helpful_css_padding_left_58px_control' );
		if($padding_left_58px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_58px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_58px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_59px_control = get_option( 'oxsn_helpful_css_padding_left_59px_control' );
		if($padding_left_59px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_59px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_59px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_60px_control = get_option( 'oxsn_helpful_css_padding_left_60px_control' );
		if($padding_left_60px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_60px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_60px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_61px_control = get_option( 'oxsn_helpful_css_padding_left_61px_control' );
		if($padding_left_61px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_61px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_61px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_62px_control = get_option( 'oxsn_helpful_css_padding_left_62px_control' );
		if($padding_left_62px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_62px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_62px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_63px_control = get_option( 'oxsn_helpful_css_padding_left_63px_control' );
		if($padding_left_63px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_63px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_63px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_64px_control = get_option( 'oxsn_helpful_css_padding_left_64px_control' );
		if($padding_left_64px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_64px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_64px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_65px_control = get_option( 'oxsn_helpful_css_padding_left_65px_control' );
		if($padding_left_65px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_65px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_65px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_66px_control = get_option( 'oxsn_helpful_css_padding_left_66px_control' );
		if($padding_left_66px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_66px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_66px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_67px_control = get_option( 'oxsn_helpful_css_padding_left_67px_control' );
		if($padding_left_67px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_67px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_67px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_68px_control = get_option( 'oxsn_helpful_css_padding_left_68px_control' );
		if($padding_left_68px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_68px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_68px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_69px_control = get_option( 'oxsn_helpful_css_padding_left_69px_control' );
		if($padding_left_69px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_69px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_69px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_70px_control = get_option( 'oxsn_helpful_css_padding_left_70px_control' );
		if($padding_left_70px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_70px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_70px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_71px_control = get_option( 'oxsn_helpful_css_padding_left_71px_control' );
		if($padding_left_71px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_71px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_71px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_72px_control = get_option( 'oxsn_helpful_css_padding_left_72px_control' );
		if($padding_left_72px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_72px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_72px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_73px_control = get_option( 'oxsn_helpful_css_padding_left_73px_control' );
		if($padding_left_73px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_73px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_73px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_74px_control = get_option( 'oxsn_helpful_css_padding_left_74px_control' );
		if($padding_left_74px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_74px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_74px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_75px_control = get_option( 'oxsn_helpful_css_padding_left_75px_control' );
		if($padding_left_75px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_75px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_75px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_76px_control = get_option( 'oxsn_helpful_css_padding_left_76px_control' );
		if($padding_left_76px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_76px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_76px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_77px_control = get_option( 'oxsn_helpful_css_padding_left_77px_control' );
		if($padding_left_77px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_77px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_77px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_78px_control = get_option( 'oxsn_helpful_css_padding_left_78px_control' );
		if($padding_left_78px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_78px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_78px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_79px_control = get_option( 'oxsn_helpful_css_padding_left_79px_control' );
		if($padding_left_79px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_79px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_79px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_80px_control = get_option( 'oxsn_helpful_css_padding_left_80px_control' );
		if($padding_left_80px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_80px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_80px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_81px_control = get_option( 'oxsn_helpful_css_padding_left_81px_control' );
		if($padding_left_81px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_81px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_81px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_82px_control = get_option( 'oxsn_helpful_css_padding_left_82px_control' );
		if($padding_left_82px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_82px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_82px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_83px_control = get_option( 'oxsn_helpful_css_padding_left_83px_control' );
		if($padding_left_83px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_83px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_83px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_84px_control = get_option( 'oxsn_helpful_css_padding_left_84px_control' );
		if($padding_left_84px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_84px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_84px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_85px_control = get_option( 'oxsn_helpful_css_padding_left_85px_control' );
		if($padding_left_85px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_85px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_85px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_86px_control = get_option( 'oxsn_helpful_css_padding_left_86px_control' );
		if($padding_left_86px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_86px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_86px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_87px_control = get_option( 'oxsn_helpful_css_padding_left_87px_control' );
		if($padding_left_87px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_87px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_87px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_88px_control = get_option( 'oxsn_helpful_css_padding_left_88px_control' );
		if($padding_left_88px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_88px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_88px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_89px_control = get_option( 'oxsn_helpful_css_padding_left_89px_control' );
		if($padding_left_89px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_89px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_89px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_90px_control = get_option( 'oxsn_helpful_css_padding_left_90px_control' );
		if($padding_left_90px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_90px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_90px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_91px_control = get_option( 'oxsn_helpful_css_padding_left_91px_control' );
		if($padding_left_91px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_91px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_91px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_92px_control = get_option( 'oxsn_helpful_css_padding_left_92px_control' );
		if($padding_left_92px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_92px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_92px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_93px_control = get_option( 'oxsn_helpful_css_padding_left_93px_control' );
		if($padding_left_93px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_93px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_93px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_94px_control = get_option( 'oxsn_helpful_css_padding_left_94px_control' );
		if($padding_left_94px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_94px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_94px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_95px_control = get_option( 'oxsn_helpful_css_padding_left_95px_control' );
		if($padding_left_95px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_95px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_95px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_96px_control = get_option( 'oxsn_helpful_css_padding_left_96px_control' );
		if($padding_left_96px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_96px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_96px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_97px_control = get_option( 'oxsn_helpful_css_padding_left_97px_control' );
		if($padding_left_97px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_97px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_97px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_98px_control = get_option( 'oxsn_helpful_css_padding_left_98px_control' );
		if($padding_left_98px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_98px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_98px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_99px_control = get_option( 'oxsn_helpful_css_padding_left_99px_control' );
		if($padding_left_99px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_99px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_99px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_100px_control = get_option( 'oxsn_helpful_css_padding_left_100px_control' );
		if($padding_left_100px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_100px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_100px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_auto_control = get_option( 'oxsn_helpful_css_padding_left_auto_control' );
		if($padding_left_auto_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_auto_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_auto.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_inherit_control = get_option( 'oxsn_helpful_css_padding_left_inherit_control' );
		if($padding_left_inherit_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_inherit_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_inherit.css', array(), '1.0.0', 'all' );
		endif;

		$padding_left_initial_control = get_option( 'oxsn_helpful_css_padding_left_initial_control' );
		if($padding_left_initial_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_left_initial_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_left/padding_left_initial.css', array(), '1.0.0', 'all' );
		endif;

		// padding_right

		$padding_right_0px_control = get_option( 'oxsn_helpful_css_padding_right_0px_control' );
		if($padding_right_0px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_0px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_0px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_1px_control = get_option( 'oxsn_helpful_css_padding_right_1px_control' );
		if($padding_right_1px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_1px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_1px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_2px_control = get_option( 'oxsn_helpful_css_padding_right_2px_control' );
		if($padding_right_2px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_2px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_2px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_3px_control = get_option( 'oxsn_helpful_css_padding_right_3px_control' );
		if($padding_right_3px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_3px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_3px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_4px_control = get_option( 'oxsn_helpful_css_padding_right_4px_control' );
		if($padding_right_4px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_4px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_4px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_5px_control = get_option( 'oxsn_helpful_css_padding_right_5px_control' );
		if($padding_right_5px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_5px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_5px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_6px_control = get_option( 'oxsn_helpful_css_padding_right_6px_control' );
		if($padding_right_6px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_6px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_6px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_7px_control = get_option( 'oxsn_helpful_css_padding_right_7px_control' );
		if($padding_right_7px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_7px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_7px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_8px_control = get_option( 'oxsn_helpful_css_padding_right_8px_control' );
		if($padding_right_8px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_8px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_8px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_9px_control = get_option( 'oxsn_helpful_css_padding_right_9px_control' );
		if($padding_right_9px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_9px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_9px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_10px_control = get_option( 'oxsn_helpful_css_padding_right_10px_control' );
		if($padding_right_10px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_10px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_10px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_11px_control = get_option( 'oxsn_helpful_css_padding_right_11px_control' );
		if($padding_right_11px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_11px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_11px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_12px_control = get_option( 'oxsn_helpful_css_padding_right_12px_control' );
		if($padding_right_12px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_12px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_12px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_13px_control = get_option( 'oxsn_helpful_css_padding_right_13px_control' );
		if($padding_right_13px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_13px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_13px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_14px_control = get_option( 'oxsn_helpful_css_padding_right_14px_control' );
		if($padding_right_14px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_14px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_14px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_15px_control = get_option( 'oxsn_helpful_css_padding_right_15px_control' );
		if($padding_right_15px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_15px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_15px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_16px_control = get_option( 'oxsn_helpful_css_padding_right_16px_control' );
		if($padding_right_16px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_16px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_16px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_17px_control = get_option( 'oxsn_helpful_css_padding_right_17px_control' );
		if($padding_right_17px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_17px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_17px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_18px_control = get_option( 'oxsn_helpful_css_padding_right_18px_control' );
		if($padding_right_18px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_18px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_18px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_19px_control = get_option( 'oxsn_helpful_css_padding_right_19px_control' );
		if($padding_right_19px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_19px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_19px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_20px_control = get_option( 'oxsn_helpful_css_padding_right_20px_control' );
		if($padding_right_20px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_20px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_20px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_21px_control = get_option( 'oxsn_helpful_css_padding_right_21px_control' );
		if($padding_right_21px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_21px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_21px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_22px_control = get_option( 'oxsn_helpful_css_padding_right_22px_control' );
		if($padding_right_22px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_22px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_22px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_23px_control = get_option( 'oxsn_helpful_css_padding_right_23px_control' );
		if($padding_right_23px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_23px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_23px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_24px_control = get_option( 'oxsn_helpful_css_padding_right_24px_control' );
		if($padding_right_24px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_24px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_24px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_25px_control = get_option( 'oxsn_helpful_css_padding_right_25px_control' );
		if($padding_right_25px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_25px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_25px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_26px_control = get_option( 'oxsn_helpful_css_padding_right_26px_control' );
		if($padding_right_26px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_26px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_26px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_27px_control = get_option( 'oxsn_helpful_css_padding_right_27px_control' );
		if($padding_right_27px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_27px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_27px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_28px_control = get_option( 'oxsn_helpful_css_padding_right_28px_control' );
		if($padding_right_28px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_28px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_28px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_29px_control = get_option( 'oxsn_helpful_css_padding_right_29px_control' );
		if($padding_right_29px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_29px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_29px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_30px_control = get_option( 'oxsn_helpful_css_padding_right_30px_control' );
		if($padding_right_30px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_30px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_30px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_31px_control = get_option( 'oxsn_helpful_css_padding_right_31px_control' );
		if($padding_right_31px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_31px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_31px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_32px_control = get_option( 'oxsn_helpful_css_padding_right_32px_control' );
		if($padding_right_32px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_32px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_32px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_33px_control = get_option( 'oxsn_helpful_css_padding_right_33px_control' );
		if($padding_right_33px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_33px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_33px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_34px_control = get_option( 'oxsn_helpful_css_padding_right_34px_control' );
		if($padding_right_34px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_34px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_34px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_35px_control = get_option( 'oxsn_helpful_css_padding_right_35px_control' );
		if($padding_right_35px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_35px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_35px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_36px_control = get_option( 'oxsn_helpful_css_padding_right_36px_control' );
		if($padding_right_36px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_36px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_36px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_37px_control = get_option( 'oxsn_helpful_css_padding_right_37px_control' );
		if($padding_right_37px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_37px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_37px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_38px_control = get_option( 'oxsn_helpful_css_padding_right_38px_control' );
		if($padding_right_38px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_38px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_38px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_39px_control = get_option( 'oxsn_helpful_css_padding_right_39px_control' );
		if($padding_right_39px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_39px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_39px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_40px_control = get_option( 'oxsn_helpful_css_padding_right_40px_control' );
		if($padding_right_40px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_40px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_40px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_41px_control = get_option( 'oxsn_helpful_css_padding_right_41px_control' );
		if($padding_right_41px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_41px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_41px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_42px_control = get_option( 'oxsn_helpful_css_padding_right_42px_control' );
		if($padding_right_42px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_42px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_42px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_43px_control = get_option( 'oxsn_helpful_css_padding_right_43px_control' );
		if($padding_right_43px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_43px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_43px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_44px_control = get_option( 'oxsn_helpful_css_padding_right_44px_control' );
		if($padding_right_44px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_44px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_44px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_45px_control = get_option( 'oxsn_helpful_css_padding_right_45px_control' );
		if($padding_right_45px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_45px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_45px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_46px_control = get_option( 'oxsn_helpful_css_padding_right_46px_control' );
		if($padding_right_46px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_46px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_46px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_47px_control = get_option( 'oxsn_helpful_css_padding_right_47px_control' );
		if($padding_right_47px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_47px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_47px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_48px_control = get_option( 'oxsn_helpful_css_padding_right_48px_control' );
		if($padding_right_48px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_48px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_48px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_49px_control = get_option( 'oxsn_helpful_css_padding_right_49px_control' );
		if($padding_right_49px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_49px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_49px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_50px_control = get_option( 'oxsn_helpful_css_padding_right_50px_control' );
		if($padding_right_50px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_50px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_50px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_51px_control = get_option( 'oxsn_helpful_css_padding_right_51px_control' );
		if($padding_right_51px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_51px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_51px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_52px_control = get_option( 'oxsn_helpful_css_padding_right_52px_control' );
		if($padding_right_52px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_52px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_52px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_53px_control = get_option( 'oxsn_helpful_css_padding_right_53px_control' );
		if($padding_right_53px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_53px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_53px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_54px_control = get_option( 'oxsn_helpful_css_padding_right_54px_control' );
		if($padding_right_54px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_54px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_54px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_55px_control = get_option( 'oxsn_helpful_css_padding_right_55px_control' );
		if($padding_right_55px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_55px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_55px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_56px_control = get_option( 'oxsn_helpful_css_padding_right_56px_control' );
		if($padding_right_56px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_56px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_56px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_57px_control = get_option( 'oxsn_helpful_css_padding_right_57px_control' );
		if($padding_right_57px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_57px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_57px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_58px_control = get_option( 'oxsn_helpful_css_padding_right_58px_control' );
		if($padding_right_58px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_58px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_58px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_59px_control = get_option( 'oxsn_helpful_css_padding_right_59px_control' );
		if($padding_right_59px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_59px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_59px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_60px_control = get_option( 'oxsn_helpful_css_padding_right_60px_control' );
		if($padding_right_60px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_60px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_60px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_61px_control = get_option( 'oxsn_helpful_css_padding_right_61px_control' );
		if($padding_right_61px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_61px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_61px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_62px_control = get_option( 'oxsn_helpful_css_padding_right_62px_control' );
		if($padding_right_62px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_62px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_62px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_63px_control = get_option( 'oxsn_helpful_css_padding_right_63px_control' );
		if($padding_right_63px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_63px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_63px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_64px_control = get_option( 'oxsn_helpful_css_padding_right_64px_control' );
		if($padding_right_64px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_64px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_64px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_65px_control = get_option( 'oxsn_helpful_css_padding_right_65px_control' );
		if($padding_right_65px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_65px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_65px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_66px_control = get_option( 'oxsn_helpful_css_padding_right_66px_control' );
		if($padding_right_66px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_66px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_66px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_67px_control = get_option( 'oxsn_helpful_css_padding_right_67px_control' );
		if($padding_right_67px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_67px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_67px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_68px_control = get_option( 'oxsn_helpful_css_padding_right_68px_control' );
		if($padding_right_68px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_68px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_68px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_69px_control = get_option( 'oxsn_helpful_css_padding_right_69px_control' );
		if($padding_right_69px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_69px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_69px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_70px_control = get_option( 'oxsn_helpful_css_padding_right_70px_control' );
		if($padding_right_70px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_70px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_70px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_71px_control = get_option( 'oxsn_helpful_css_padding_right_71px_control' );
		if($padding_right_71px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_71px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_71px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_72px_control = get_option( 'oxsn_helpful_css_padding_right_72px_control' );
		if($padding_right_72px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_72px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_72px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_73px_control = get_option( 'oxsn_helpful_css_padding_right_73px_control' );
		if($padding_right_73px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_73px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_73px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_74px_control = get_option( 'oxsn_helpful_css_padding_right_74px_control' );
		if($padding_right_74px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_74px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_74px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_75px_control = get_option( 'oxsn_helpful_css_padding_right_75px_control' );
		if($padding_right_75px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_75px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_75px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_76px_control = get_option( 'oxsn_helpful_css_padding_right_76px_control' );
		if($padding_right_76px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_76px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_76px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_77px_control = get_option( 'oxsn_helpful_css_padding_right_77px_control' );
		if($padding_right_77px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_77px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_77px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_78px_control = get_option( 'oxsn_helpful_css_padding_right_78px_control' );
		if($padding_right_78px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_78px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_78px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_79px_control = get_option( 'oxsn_helpful_css_padding_right_79px_control' );
		if($padding_right_79px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_79px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_79px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_80px_control = get_option( 'oxsn_helpful_css_padding_right_80px_control' );
		if($padding_right_80px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_80px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_80px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_81px_control = get_option( 'oxsn_helpful_css_padding_right_81px_control' );
		if($padding_right_81px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_81px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_81px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_82px_control = get_option( 'oxsn_helpful_css_padding_right_82px_control' );
		if($padding_right_82px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_82px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_82px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_83px_control = get_option( 'oxsn_helpful_css_padding_right_83px_control' );
		if($padding_right_83px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_83px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_83px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_84px_control = get_option( 'oxsn_helpful_css_padding_right_84px_control' );
		if($padding_right_84px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_84px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_84px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_85px_control = get_option( 'oxsn_helpful_css_padding_right_85px_control' );
		if($padding_right_85px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_85px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_85px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_86px_control = get_option( 'oxsn_helpful_css_padding_right_86px_control' );
		if($padding_right_86px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_86px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_86px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_87px_control = get_option( 'oxsn_helpful_css_padding_right_87px_control' );
		if($padding_right_87px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_87px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_87px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_88px_control = get_option( 'oxsn_helpful_css_padding_right_88px_control' );
		if($padding_right_88px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_88px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_88px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_89px_control = get_option( 'oxsn_helpful_css_padding_right_89px_control' );
		if($padding_right_89px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_89px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_89px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_90px_control = get_option( 'oxsn_helpful_css_padding_right_90px_control' );
		if($padding_right_90px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_90px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_90px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_91px_control = get_option( 'oxsn_helpful_css_padding_right_91px_control' );
		if($padding_right_91px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_91px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_91px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_92px_control = get_option( 'oxsn_helpful_css_padding_right_92px_control' );
		if($padding_right_92px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_92px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_92px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_93px_control = get_option( 'oxsn_helpful_css_padding_right_93px_control' );
		if($padding_right_93px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_93px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_93px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_94px_control = get_option( 'oxsn_helpful_css_padding_right_94px_control' );
		if($padding_right_94px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_94px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_94px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_95px_control = get_option( 'oxsn_helpful_css_padding_right_95px_control' );
		if($padding_right_95px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_95px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_95px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_96px_control = get_option( 'oxsn_helpful_css_padding_right_96px_control' );
		if($padding_right_96px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_96px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_96px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_97px_control = get_option( 'oxsn_helpful_css_padding_right_97px_control' );
		if($padding_right_97px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_97px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_97px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_98px_control = get_option( 'oxsn_helpful_css_padding_right_98px_control' );
		if($padding_right_98px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_98px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_98px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_99px_control = get_option( 'oxsn_helpful_css_padding_right_99px_control' );
		if($padding_right_99px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_99px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_99px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_100px_control = get_option( 'oxsn_helpful_css_padding_right_100px_control' );
		if($padding_right_100px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_100px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_100px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_auto_control = get_option( 'oxsn_helpful_css_padding_right_auto_control' );
		if($padding_right_auto_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_auto_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_auto.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_inherit_control = get_option( 'oxsn_helpful_css_padding_right_inherit_control' );
		if($padding_right_inherit_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_inherit_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_inherit.css', array(), '1.0.0', 'all' );
		endif;

		$padding_right_initial_control = get_option( 'oxsn_helpful_css_padding_right_initial_control' );
		if($padding_right_initial_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_right_initial_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_right/padding_right_initial.css', array(), '1.0.0', 'all' );
		endif;

		// padding_top

		$padding_top_0px_control = get_option( 'oxsn_helpful_css_padding_top_0px_control' );
		if($padding_top_0px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_0px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_0px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_1px_control = get_option( 'oxsn_helpful_css_padding_top_1px_control' );
		if($padding_top_1px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_1px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_1px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_2px_control = get_option( 'oxsn_helpful_css_padding_top_2px_control' );
		if($padding_top_2px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_2px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_2px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_3px_control = get_option( 'oxsn_helpful_css_padding_top_3px_control' );
		if($padding_top_3px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_3px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_3px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_4px_control = get_option( 'oxsn_helpful_css_padding_top_4px_control' );
		if($padding_top_4px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_4px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_4px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_5px_control = get_option( 'oxsn_helpful_css_padding_top_5px_control' );
		if($padding_top_5px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_5px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_5px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_6px_control = get_option( 'oxsn_helpful_css_padding_top_6px_control' );
		if($padding_top_6px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_6px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_6px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_7px_control = get_option( 'oxsn_helpful_css_padding_top_7px_control' );
		if($padding_top_7px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_7px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_7px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_8px_control = get_option( 'oxsn_helpful_css_padding_top_8px_control' );
		if($padding_top_8px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_8px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_8px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_9px_control = get_option( 'oxsn_helpful_css_padding_top_9px_control' );
		if($padding_top_9px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_9px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_9px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_10px_control = get_option( 'oxsn_helpful_css_padding_top_10px_control' );
		if($padding_top_10px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_10px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_10px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_11px_control = get_option( 'oxsn_helpful_css_padding_top_11px_control' );
		if($padding_top_11px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_11px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_11px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_12px_control = get_option( 'oxsn_helpful_css_padding_top_12px_control' );
		if($padding_top_12px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_12px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_12px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_13px_control = get_option( 'oxsn_helpful_css_padding_top_13px_control' );
		if($padding_top_13px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_13px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_13px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_14px_control = get_option( 'oxsn_helpful_css_padding_top_14px_control' );
		if($padding_top_14px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_14px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_14px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_15px_control = get_option( 'oxsn_helpful_css_padding_top_15px_control' );
		if($padding_top_15px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_15px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_15px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_16px_control = get_option( 'oxsn_helpful_css_padding_top_16px_control' );
		if($padding_top_16px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_16px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_16px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_17px_control = get_option( 'oxsn_helpful_css_padding_top_17px_control' );
		if($padding_top_17px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_17px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_17px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_18px_control = get_option( 'oxsn_helpful_css_padding_top_18px_control' );
		if($padding_top_18px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_18px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_18px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_19px_control = get_option( 'oxsn_helpful_css_padding_top_19px_control' );
		if($padding_top_19px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_19px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_19px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_20px_control = get_option( 'oxsn_helpful_css_padding_top_20px_control' );
		if($padding_top_20px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_20px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_20px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_21px_control = get_option( 'oxsn_helpful_css_padding_top_21px_control' );
		if($padding_top_21px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_21px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_21px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_22px_control = get_option( 'oxsn_helpful_css_padding_top_22px_control' );
		if($padding_top_22px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_22px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_22px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_23px_control = get_option( 'oxsn_helpful_css_padding_top_23px_control' );
		if($padding_top_23px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_23px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_23px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_24px_control = get_option( 'oxsn_helpful_css_padding_top_24px_control' );
		if($padding_top_24px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_24px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_24px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_25px_control = get_option( 'oxsn_helpful_css_padding_top_25px_control' );
		if($padding_top_25px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_25px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_25px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_26px_control = get_option( 'oxsn_helpful_css_padding_top_26px_control' );
		if($padding_top_26px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_26px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_26px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_27px_control = get_option( 'oxsn_helpful_css_padding_top_27px_control' );
		if($padding_top_27px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_27px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_27px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_28px_control = get_option( 'oxsn_helpful_css_padding_top_28px_control' );
		if($padding_top_28px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_28px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_28px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_29px_control = get_option( 'oxsn_helpful_css_padding_top_29px_control' );
		if($padding_top_29px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_29px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_29px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_30px_control = get_option( 'oxsn_helpful_css_padding_top_30px_control' );
		if($padding_top_30px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_30px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_30px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_31px_control = get_option( 'oxsn_helpful_css_padding_top_31px_control' );
		if($padding_top_31px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_31px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_31px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_32px_control = get_option( 'oxsn_helpful_css_padding_top_32px_control' );
		if($padding_top_32px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_32px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_32px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_33px_control = get_option( 'oxsn_helpful_css_padding_top_33px_control' );
		if($padding_top_33px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_33px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_33px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_34px_control = get_option( 'oxsn_helpful_css_padding_top_34px_control' );
		if($padding_top_34px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_34px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_34px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_35px_control = get_option( 'oxsn_helpful_css_padding_top_35px_control' );
		if($padding_top_35px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_35px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_35px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_36px_control = get_option( 'oxsn_helpful_css_padding_top_36px_control' );
		if($padding_top_36px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_36px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_36px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_37px_control = get_option( 'oxsn_helpful_css_padding_top_37px_control' );
		if($padding_top_37px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_37px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_37px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_38px_control = get_option( 'oxsn_helpful_css_padding_top_38px_control' );
		if($padding_top_38px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_38px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_38px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_39px_control = get_option( 'oxsn_helpful_css_padding_top_39px_control' );
		if($padding_top_39px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_39px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_39px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_40px_control = get_option( 'oxsn_helpful_css_padding_top_40px_control' );
		if($padding_top_40px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_40px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_40px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_41px_control = get_option( 'oxsn_helpful_css_padding_top_41px_control' );
		if($padding_top_41px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_41px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_41px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_42px_control = get_option( 'oxsn_helpful_css_padding_top_42px_control' );
		if($padding_top_42px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_42px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_42px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_43px_control = get_option( 'oxsn_helpful_css_padding_top_43px_control' );
		if($padding_top_43px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_43px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_43px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_44px_control = get_option( 'oxsn_helpful_css_padding_top_44px_control' );
		if($padding_top_44px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_44px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_44px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_45px_control = get_option( 'oxsn_helpful_css_padding_top_45px_control' );
		if($padding_top_45px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_45px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_45px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_46px_control = get_option( 'oxsn_helpful_css_padding_top_46px_control' );
		if($padding_top_46px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_46px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_46px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_47px_control = get_option( 'oxsn_helpful_css_padding_top_47px_control' );
		if($padding_top_47px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_47px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_47px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_48px_control = get_option( 'oxsn_helpful_css_padding_top_48px_control' );
		if($padding_top_48px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_48px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_48px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_49px_control = get_option( 'oxsn_helpful_css_padding_top_49px_control' );
		if($padding_top_49px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_49px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_49px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_50px_control = get_option( 'oxsn_helpful_css_padding_top_50px_control' );
		if($padding_top_50px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_50px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_50px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_51px_control = get_option( 'oxsn_helpful_css_padding_top_51px_control' );
		if($padding_top_51px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_51px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_51px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_52px_control = get_option( 'oxsn_helpful_css_padding_top_52px_control' );
		if($padding_top_52px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_52px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_52px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_53px_control = get_option( 'oxsn_helpful_css_padding_top_53px_control' );
		if($padding_top_53px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_53px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_53px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_54px_control = get_option( 'oxsn_helpful_css_padding_top_54px_control' );
		if($padding_top_54px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_54px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_54px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_55px_control = get_option( 'oxsn_helpful_css_padding_top_55px_control' );
		if($padding_top_55px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_55px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_55px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_56px_control = get_option( 'oxsn_helpful_css_padding_top_56px_control' );
		if($padding_top_56px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_56px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_56px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_57px_control = get_option( 'oxsn_helpful_css_padding_top_57px_control' );
		if($padding_top_57px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_57px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_57px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_58px_control = get_option( 'oxsn_helpful_css_padding_top_58px_control' );
		if($padding_top_58px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_58px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_58px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_59px_control = get_option( 'oxsn_helpful_css_padding_top_59px_control' );
		if($padding_top_59px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_59px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_59px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_60px_control = get_option( 'oxsn_helpful_css_padding_top_60px_control' );
		if($padding_top_60px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_60px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_60px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_61px_control = get_option( 'oxsn_helpful_css_padding_top_61px_control' );
		if($padding_top_61px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_61px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_61px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_62px_control = get_option( 'oxsn_helpful_css_padding_top_62px_control' );
		if($padding_top_62px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_62px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_62px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_63px_control = get_option( 'oxsn_helpful_css_padding_top_63px_control' );
		if($padding_top_63px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_63px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_63px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_64px_control = get_option( 'oxsn_helpful_css_padding_top_64px_control' );
		if($padding_top_64px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_64px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_64px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_65px_control = get_option( 'oxsn_helpful_css_padding_top_65px_control' );
		if($padding_top_65px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_65px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_65px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_66px_control = get_option( 'oxsn_helpful_css_padding_top_66px_control' );
		if($padding_top_66px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_66px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_66px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_67px_control = get_option( 'oxsn_helpful_css_padding_top_67px_control' );
		if($padding_top_67px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_67px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_67px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_68px_control = get_option( 'oxsn_helpful_css_padding_top_68px_control' );
		if($padding_top_68px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_68px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_68px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_69px_control = get_option( 'oxsn_helpful_css_padding_top_69px_control' );
		if($padding_top_69px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_69px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_69px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_70px_control = get_option( 'oxsn_helpful_css_padding_top_70px_control' );
		if($padding_top_70px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_70px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_70px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_71px_control = get_option( 'oxsn_helpful_css_padding_top_71px_control' );
		if($padding_top_71px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_71px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_71px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_72px_control = get_option( 'oxsn_helpful_css_padding_top_72px_control' );
		if($padding_top_72px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_72px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_72px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_73px_control = get_option( 'oxsn_helpful_css_padding_top_73px_control' );
		if($padding_top_73px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_73px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_73px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_74px_control = get_option( 'oxsn_helpful_css_padding_top_74px_control' );
		if($padding_top_74px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_74px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_74px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_75px_control = get_option( 'oxsn_helpful_css_padding_top_75px_control' );
		if($padding_top_75px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_75px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_75px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_76px_control = get_option( 'oxsn_helpful_css_padding_top_76px_control' );
		if($padding_top_76px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_76px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_76px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_77px_control = get_option( 'oxsn_helpful_css_padding_top_77px_control' );
		if($padding_top_77px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_77px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_77px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_78px_control = get_option( 'oxsn_helpful_css_padding_top_78px_control' );
		if($padding_top_78px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_78px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_78px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_79px_control = get_option( 'oxsn_helpful_css_padding_top_79px_control' );
		if($padding_top_79px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_79px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_79px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_80px_control = get_option( 'oxsn_helpful_css_padding_top_80px_control' );
		if($padding_top_80px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_80px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_80px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_81px_control = get_option( 'oxsn_helpful_css_padding_top_81px_control' );
		if($padding_top_81px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_81px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_81px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_82px_control = get_option( 'oxsn_helpful_css_padding_top_82px_control' );
		if($padding_top_82px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_82px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_82px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_83px_control = get_option( 'oxsn_helpful_css_padding_top_83px_control' );
		if($padding_top_83px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_83px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_83px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_84px_control = get_option( 'oxsn_helpful_css_padding_top_84px_control' );
		if($padding_top_84px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_84px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_84px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_85px_control = get_option( 'oxsn_helpful_css_padding_top_85px_control' );
		if($padding_top_85px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_85px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_85px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_86px_control = get_option( 'oxsn_helpful_css_padding_top_86px_control' );
		if($padding_top_86px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_86px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_86px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_87px_control = get_option( 'oxsn_helpful_css_padding_top_87px_control' );
		if($padding_top_87px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_87px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_87px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_88px_control = get_option( 'oxsn_helpful_css_padding_top_88px_control' );
		if($padding_top_88px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_88px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_88px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_89px_control = get_option( 'oxsn_helpful_css_padding_top_89px_control' );
		if($padding_top_89px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_89px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_89px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_90px_control = get_option( 'oxsn_helpful_css_padding_top_90px_control' );
		if($padding_top_90px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_90px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_90px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_91px_control = get_option( 'oxsn_helpful_css_padding_top_91px_control' );
		if($padding_top_91px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_91px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_91px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_92px_control = get_option( 'oxsn_helpful_css_padding_top_92px_control' );
		if($padding_top_92px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_92px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_92px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_93px_control = get_option( 'oxsn_helpful_css_padding_top_93px_control' );
		if($padding_top_93px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_93px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_93px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_94px_control = get_option( 'oxsn_helpful_css_padding_top_94px_control' );
		if($padding_top_94px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_94px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_94px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_95px_control = get_option( 'oxsn_helpful_css_padding_top_95px_control' );
		if($padding_top_95px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_95px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_95px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_96px_control = get_option( 'oxsn_helpful_css_padding_top_96px_control' );
		if($padding_top_96px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_96px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_96px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_97px_control = get_option( 'oxsn_helpful_css_padding_top_97px_control' );
		if($padding_top_97px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_97px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_97px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_98px_control = get_option( 'oxsn_helpful_css_padding_top_98px_control' );
		if($padding_top_98px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_98px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_98px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_99px_control = get_option( 'oxsn_helpful_css_padding_top_99px_control' );
		if($padding_top_99px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_99px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_99px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_100px_control = get_option( 'oxsn_helpful_css_padding_top_100px_control' );
		if($padding_top_100px_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_100px_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_100px.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_auto_control = get_option( 'oxsn_helpful_css_padding_top_auto_control' );
		if($padding_top_auto_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_auto_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_auto.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_inherit_control = get_option( 'oxsn_helpful_css_padding_top_inherit_control' );
		if($padding_top_inherit_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_inherit_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_inherit.css', array(), '1.0.0', 'all' );
		endif;

		$padding_top_initial_control = get_option( 'oxsn_helpful_css_padding_top_initial_control' );
		if($padding_top_initial_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_padding_top_initial_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/padding_top/padding_top_initial.css', array(), '1.0.0', 'all' );
		endif;

		// position

		$position_absolute_control = get_option( 'oxsn_helpful_css_position_absolute_control' );
		if($position_absolute_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_position_absolute_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/position/position_absolute.css', array(), '1.0.0', 'all' );
		endif;

		$position_fixed_control = get_option( 'oxsn_helpful_css_position_fixed_control' );
		if($position_fixed_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_position_fixed_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/position/position_fixed.css', array(), '1.0.0', 'all' );
		endif;

		$position_inherit_control = get_option( 'oxsn_helpful_css_position_inherit_control' );
		if($position_inherit_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_position_inherit_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/position/position_inherit.css', array(), '1.0.0', 'all' );
		endif;

		$position_initial_control = get_option( 'oxsn_helpful_css_position_initial_control' );
		if($position_initial_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_position_initial_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/position/position_initial.css', array(), '1.0.0', 'all' );
		endif;

		$position_relative_control = get_option( 'oxsn_helpful_css_position_relative_control' );
		if($position_relative_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_position_relative_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/position/position_relative.css', array(), '1.0.0', 'all' );
		endif;

		$position_static_control = get_option( 'oxsn_helpful_css_position_static_control' );
		if($position_static_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_position_static_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/position/position_static.css', array(), '1.0.0', 'all' );
		endif;

		// text_align

		$text_align_center_control = get_option( 'oxsn_helpful_css_text_align_center_control' );
		if($text_align_center_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_text_align_center_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/text_align/text_align_center.css', array(), '1.0.0', 'all' );
		endif;

		$text_align_inherit_control = get_option( 'oxsn_helpful_css_text_align_inherit_control' );
		if($text_align_inherit_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_text_align_inherit_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/text_align/text_align_inherit.css', array(), '1.0.0', 'all' );
		endif;

		$text_align_initial_control = get_option( 'oxsn_helpful_css_text_align_initial_control' );
		if($text_align_initial_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_text_align_initial_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/text_align/text_align_initial.css', array(), '1.0.0', 'all' );
		endif;

		$text_align_justify_control = get_option( 'oxsn_helpful_css_text_align_justify_control' );
		if($text_align_justify_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_text_align_justify_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/text_align/text_align_justify.css', array(), '1.0.0', 'all' );
		endif;

		$text_align_left_control = get_option( 'oxsn_helpful_css_text_align_left_control' );
		if($text_align_left_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_text_align_left_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/text_align/text_align_left.css', array(), '1.0.0', 'all' );
		endif;

		$text_align_right_control = get_option( 'oxsn_helpful_css_text_align_right_control' );
		if($text_align_right_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_text_align_right_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/text_align/text_align_right.css', array(), '1.0.0', 'all' );
		endif;

		// vertical_align

		$vertical_align_baseline_control = get_option( 'oxsn_helpful_css_vertical_align_baseline_control' );
		if($vertical_align_baseline_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_vertical_align_baseline_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/vertical_align/vertical_align_baseline.css', array(), '1.0.0', 'all' );
		endif;

		$vertical_align_bottom_control = get_option( 'oxsn_helpful_css_vertical_align_bottom_control' );
		if($vertical_align_bottom_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_vertical_align_bottom_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/vertical_align/vertical_align_bottom.css', array(), '1.0.0', 'all' );
		endif;

		$vertical_align_inherit_control = get_option( 'oxsn_helpful_css_vertical_align_inherit_control' );
		if($vertical_align_inherit_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_vertical_align_inherit_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/vertical_align/vertical_align_inherit.css', array(), '1.0.0', 'all' );
		endif;

		$vertical_align_initial_control = get_option( 'oxsn_helpful_css_vertical_align_initial_control' );
		if($vertical_align_initial_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_vertical_align_initial_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/vertical_align/vertical_align_initial.css', array(), '1.0.0', 'all' );
		endif;

		$vertical_align_middle_control = get_option( 'oxsn_helpful_css_vertical_align_middle_control' );
		if($vertical_align_middle_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_vertical_align_middle_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/vertical_align/vertical_align_middle.css', array(), '1.0.0', 'all' );
		endif;

		$vertical_align_sub_control = get_option( 'oxsn_helpful_css_vertical_align_sub_control' );
		if($vertical_align_sub_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_vertical_align_sub_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/vertical_align/vertical_align_sub.css', array(), '1.0.0', 'all' );
		endif;

		$vertical_align_super_control = get_option( 'oxsn_helpful_css_vertical_align_super_control' );
		if($vertical_align_super_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_vertical_align_super_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/vertical_align/vertical_align_super.css', array(), '1.0.0', 'all' );
		endif;

		$vertical_align_text_bottom_control = get_option( 'oxsn_helpful_css_vertical_align_text_bottom_control' );
		if($vertical_align_text_bottom_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_vertical_align_text_bottom_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/vertical_align/vertical_align_text_bottom.css', array(), '1.0.0', 'all' );
		endif;

		$vertical_align_text_top_control = get_option( 'oxsn_helpful_css_vertical_align_text_top_control' );
		if($vertical_align_text_top_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_vertical_align_text_top_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/vertical_align/vertical_align_text_top.css', array(), '1.0.0', 'all' );
		endif;

		$vertical_align_top_control = get_option( 'oxsn_helpful_css_vertical_align_top_control' );
		if($vertical_align_top_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_vertical_align_top_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/vertical_align/vertical_align_top.css', array(), '1.0.0', 'all' );
		endif;

		// visibility

		$visibility_collapse_control = get_option( 'oxsn_helpful_css_visibility_collapse_control' );
		if($visibility_collapse_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_visibility_collapse_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/visibility/visibility_collapse.css', array(), '1.0.0', 'all' );
		endif;

		$visibility_hidden_control = get_option( 'oxsn_helpful_css_visibility_hidden_control' );
		if($visibility_hidden_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_visibility_hidden_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/visibility/visibility_hidden.css', array(), '1.0.0', 'all' );
		endif;

		$visibility_inherit_control = get_option( 'oxsn_helpful_css_visibility_inherit_control' );
		if($visibility_inherit_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_visibility_inherit_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/visibility/visibility_inherit.css', array(), '1.0.0', 'all' );
		endif;

		$visibility_initial_control = get_option( 'oxsn_helpful_css_visibility_initial_control' );
		if($visibility_initial_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_visibility_initial_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/visibility/visibility_initial.css', array(), '1.0.0', 'all' );
		endif;

		$visibility_visible_control = get_option( 'oxsn_helpful_css_visibility_visible_control' );
		if($visibility_visible_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_visibility_visible_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/visibility/visibility_visible.css', array(), '1.0.0', 'all' );
		endif;

		// width

		$width_0pr_control = get_option( 'oxsn_helpful_css_width_0pr_control' );
		if($width_0pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_0pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_0pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_1pr_control = get_option( 'oxsn_helpful_css_width_1pr_control' );
		if($width_1pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_1pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_1pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_2pr_control = get_option( 'oxsn_helpful_css_width_2pr_control' );
		if($width_2pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_2pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_2pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_3pr_control = get_option( 'oxsn_helpful_css_width_3pr_control' );
		if($width_3pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_3pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_3pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_4pr_control = get_option( 'oxsn_helpful_css_width_4pr_control' );
		if($width_4pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_4pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_4pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_5pr_control = get_option( 'oxsn_helpful_css_width_5pr_control' );
		if($width_5pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_5pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_5pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_6pr_control = get_option( 'oxsn_helpful_css_width_6pr_control' );
		if($width_6pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_6pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_6pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_7pr_control = get_option( 'oxsn_helpful_css_width_7pr_control' );
		if($width_7pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_7pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_7pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_8pr_control = get_option( 'oxsn_helpful_css_width_8pr_control' );
		if($width_8pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_8pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_8pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_9pr_control = get_option( 'oxsn_helpful_css_width_9pr_control' );
		if($width_9pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_9pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_9pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_10pr_control = get_option( 'oxsn_helpful_css_width_10pr_control' );
		if($width_10pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_10pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_10pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_11pr_control = get_option( 'oxsn_helpful_css_width_11pr_control' );
		if($width_11pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_11pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_11pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_12pr_control = get_option( 'oxsn_helpful_css_width_12pr_control' );
		if($width_12pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_12pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_12pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_13pr_control = get_option( 'oxsn_helpful_css_width_13pr_control' );
		if($width_13pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_13pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_13pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_14pr_control = get_option( 'oxsn_helpful_css_width_14pr_control' );
		if($width_14pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_14pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_14pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_15pr_control = get_option( 'oxsn_helpful_css_width_15pr_control' );
		if($width_15pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_15pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_15pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_16pr_control = get_option( 'oxsn_helpful_css_width_16pr_control' );
		if($width_16pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_16pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_16pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_17pr_control = get_option( 'oxsn_helpful_css_width_17pr_control' );
		if($width_17pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_17pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_17pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_18pr_control = get_option( 'oxsn_helpful_css_width_18pr_control' );
		if($width_18pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_18pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_18pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_19pr_control = get_option( 'oxsn_helpful_css_width_19pr_control' );
		if($width_19pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_19pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_19pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_20pr_control = get_option( 'oxsn_helpful_css_width_20pr_control' );
		if($width_20pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_20pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_20pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_21pr_control = get_option( 'oxsn_helpful_css_width_21pr_control' );
		if($width_21pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_21pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_21pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_22pr_control = get_option( 'oxsn_helpful_css_width_22pr_control' );
		if($width_22pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_22pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_22pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_23pr_control = get_option( 'oxsn_helpful_css_width_23pr_control' );
		if($width_23pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_23pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_23pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_24pr_control = get_option( 'oxsn_helpful_css_width_24pr_control' );
		if($width_24pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_24pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_24pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_25pr_control = get_option( 'oxsn_helpful_css_width_25pr_control' );
		if($width_25pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_25pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_25pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_26pr_control = get_option( 'oxsn_helpful_css_width_26pr_control' );
		if($width_26pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_26pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_26pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_27pr_control = get_option( 'oxsn_helpful_css_width_27pr_control' );
		if($width_27pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_27pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_27pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_28pr_control = get_option( 'oxsn_helpful_css_width_28pr_control' );
		if($width_28pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_28pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_28pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_29pr_control = get_option( 'oxsn_helpful_css_width_29pr_control' );
		if($width_29pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_29pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_29pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_30pr_control = get_option( 'oxsn_helpful_css_width_30pr_control' );
		if($width_30pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_30pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_30pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_31pr_control = get_option( 'oxsn_helpful_css_width_31pr_control' );
		if($width_31pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_31pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_31pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_32pr_control = get_option( 'oxsn_helpful_css_width_32pr_control' );
		if($width_32pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_32pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_32pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_33pr_control = get_option( 'oxsn_helpful_css_width_33pr_control' );
		if($width_33pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_33pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_33pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_34pr_control = get_option( 'oxsn_helpful_css_width_34pr_control' );
		if($width_34pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_34pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_34pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_35pr_control = get_option( 'oxsn_helpful_css_width_35pr_control' );
		if($width_35pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_35pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_35pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_36pr_control = get_option( 'oxsn_helpful_css_width_36pr_control' );
		if($width_36pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_36pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_36pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_37pr_control = get_option( 'oxsn_helpful_css_width_37pr_control' );
		if($width_37pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_37pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_37pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_38pr_control = get_option( 'oxsn_helpful_css_width_38pr_control' );
		if($width_38pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_38pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_38pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_39pr_control = get_option( 'oxsn_helpful_css_width_39pr_control' );
		if($width_39pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_39pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_39pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_40pr_control = get_option( 'oxsn_helpful_css_width_40pr_control' );
		if($width_40pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_40pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_40pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_41pr_control = get_option( 'oxsn_helpful_css_width_41pr_control' );
		if($width_41pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_41pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_41pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_42pr_control = get_option( 'oxsn_helpful_css_width_42pr_control' );
		if($width_42pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_42pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_42pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_43pr_control = get_option( 'oxsn_helpful_css_width_43pr_control' );
		if($width_43pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_43pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_43pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_44pr_control = get_option( 'oxsn_helpful_css_width_44pr_control' );
		if($width_44pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_44pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_44pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_45pr_control = get_option( 'oxsn_helpful_css_width_45pr_control' );
		if($width_45pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_45pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_45pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_46pr_control = get_option( 'oxsn_helpful_css_width_46pr_control' );
		if($width_46pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_46pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_46pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_47pr_control = get_option( 'oxsn_helpful_css_width_47pr_control' );
		if($width_47pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_47pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_47pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_48pr_control = get_option( 'oxsn_helpful_css_width_48pr_control' );
		if($width_48pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_48pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_48pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_49pr_control = get_option( 'oxsn_helpful_css_width_49pr_control' );
		if($width_49pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_49pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_49pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_50pr_control = get_option( 'oxsn_helpful_css_width_50pr_control' );
		if($width_50pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_50pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_50pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_51pr_control = get_option( 'oxsn_helpful_css_width_51pr_control' );
		if($width_51pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_51pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_51pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_52pr_control = get_option( 'oxsn_helpful_css_width_52pr_control' );
		if($width_52pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_52pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_52pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_53pr_control = get_option( 'oxsn_helpful_css_width_53pr_control' );
		if($width_53pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_53pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_53pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_54pr_control = get_option( 'oxsn_helpful_css_width_54pr_control' );
		if($width_54pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_54pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_54pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_55pr_control = get_option( 'oxsn_helpful_css_width_55pr_control' );
		if($width_55pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_55pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_55pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_56pr_control = get_option( 'oxsn_helpful_css_width_56pr_control' );
		if($width_56pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_56pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_56pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_57pr_control = get_option( 'oxsn_helpful_css_width_57pr_control' );
		if($width_57pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_57pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_57pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_58pr_control = get_option( 'oxsn_helpful_css_width_58pr_control' );
		if($width_58pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_58pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_58pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_59pr_control = get_option( 'oxsn_helpful_css_width_59pr_control' );
		if($width_59pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_59pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_59pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_60pr_control = get_option( 'oxsn_helpful_css_width_60pr_control' );
		if($width_60pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_60pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_60pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_61pr_control = get_option( 'oxsn_helpful_css_width_61pr_control' );
		if($width_61pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_61pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_61pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_62pr_control = get_option( 'oxsn_helpful_css_width_62pr_control' );
		if($width_62pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_62pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_62pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_63pr_control = get_option( 'oxsn_helpful_css_width_63pr_control' );
		if($width_63pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_63pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_63pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_64pr_control = get_option( 'oxsn_helpful_css_width_64pr_control' );
		if($width_64pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_64pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_64pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_65pr_control = get_option( 'oxsn_helpful_css_width_65pr_control' );
		if($width_65pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_65pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_65pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_66pr_control = get_option( 'oxsn_helpful_css_width_66pr_control' );
		if($width_66pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_66pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_66pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_67pr_control = get_option( 'oxsn_helpful_css_width_67pr_control' );
		if($width_67pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_67pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_67pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_68pr_control = get_option( 'oxsn_helpful_css_width_68pr_control' );
		if($width_68pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_68pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_68pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_69pr_control = get_option( 'oxsn_helpful_css_width_69pr_control' );
		if($width_69pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_69pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_69pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_70pr_control = get_option( 'oxsn_helpful_css_width_70pr_control' );
		if($width_70pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_70pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_70pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_71pr_control = get_option( 'oxsn_helpful_css_width_71pr_control' );
		if($width_71pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_71pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_71pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_72pr_control = get_option( 'oxsn_helpful_css_width_72pr_control' );
		if($width_72pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_72pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_72pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_73pr_control = get_option( 'oxsn_helpful_css_width_73pr_control' );
		if($width_73pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_73pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_73pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_74pr_control = get_option( 'oxsn_helpful_css_width_74pr_control' );
		if($width_74pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_74pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_74pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_75pr_control = get_option( 'oxsn_helpful_css_width_75pr_control' );
		if($width_75pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_75pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_75pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_76pr_control = get_option( 'oxsn_helpful_css_width_76pr_control' );
		if($width_76pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_76pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_76pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_77pr_control = get_option( 'oxsn_helpful_css_width_77pr_control' );
		if($width_77pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_77pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_77pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_78pr_control = get_option( 'oxsn_helpful_css_width_78pr_control' );
		if($width_78pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_78pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_78pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_79pr_control = get_option( 'oxsn_helpful_css_width_79pr_control' );
		if($width_79pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_79pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_79pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_80pr_control = get_option( 'oxsn_helpful_css_width_80pr_control' );
		if($width_80pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_80pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_80pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_81pr_control = get_option( 'oxsn_helpful_css_width_81pr_control' );
		if($width_81pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_81pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_81pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_82pr_control = get_option( 'oxsn_helpful_css_width_82pr_control' );
		if($width_82pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_82pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_82pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_83pr_control = get_option( 'oxsn_helpful_css_width_83pr_control' );
		if($width_83pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_83pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_83pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_84pr_control = get_option( 'oxsn_helpful_css_width_84pr_control' );
		if($width_84pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_84pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_84pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_85pr_control = get_option( 'oxsn_helpful_css_width_85pr_control' );
		if($width_85pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_85pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_85pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_86pr_control = get_option( 'oxsn_helpful_css_width_86pr_control' );
		if($width_86pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_86pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_86pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_87pr_control = get_option( 'oxsn_helpful_css_width_87pr_control' );
		if($width_87pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_87pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_87pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_88pr_control = get_option( 'oxsn_helpful_css_width_88pr_control' );
		if($width_88pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_88pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_88pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_89pr_control = get_option( 'oxsn_helpful_css_width_89pr_control' );
		if($width_89pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_89pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_89pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_90pr_control = get_option( 'oxsn_helpful_css_width_90pr_control' );
		if($width_90pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_90pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_90pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_91pr_control = get_option( 'oxsn_helpful_css_width_91pr_control' );
		if($width_91pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_91pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_91pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_92pr_control = get_option( 'oxsn_helpful_css_width_92pr_control' );
		if($width_92pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_92pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_92pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_93pr_control = get_option( 'oxsn_helpful_css_width_93pr_control' );
		if($width_93pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_93pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_93pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_94pr_control = get_option( 'oxsn_helpful_css_width_94pr_control' );
		if($width_94pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_94pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_94pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_95pr_control = get_option( 'oxsn_helpful_css_width_95pr_control' );
		if($width_95pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_95pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_95pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_96pr_control = get_option( 'oxsn_helpful_css_width_96pr_control' );
		if($width_96pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_96pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_96pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_97pr_control = get_option( 'oxsn_helpful_css_width_97pr_control' );
		if($width_97pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_97pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_97pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_98pr_control = get_option( 'oxsn_helpful_css_width_98pr_control' );
		if($width_98pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_98pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_98pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_99pr_control = get_option( 'oxsn_helpful_css_width_99pr_control' );
		if($width_99pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_99pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_99pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_100pr_control = get_option( 'oxsn_helpful_css_width_100pr_control' );
		if($width_100pr_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_100pr_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_100pr.css', array(), '1.0.0', 'all' );
		endif;

		$width_auto_control = get_option( 'oxsn_helpful_css_width_auto_control' );
		if($width_auto_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_auto_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_auto.css', array(), '1.0.0', 'all' );
		endif;

		$width_inherit_control = get_option( 'oxsn_helpful_css_width_inherit_control' );
		if($width_inherit_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_inherit_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_inherit.css', array(), '1.0.0', 'all' );
		endif;

		$width_initial_control = get_option( 'oxsn_helpful_css_width_initial_control' );
		if($width_initial_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_width_initial_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/width/width_initial.css', array(), '1.0.0', 'all' );
		endif;

		// z_index

		$z_index_0_control = get_option( 'oxsn_helpful_css_z_index_0_control' );
		if($z_index_0_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_z_index_0_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/z_index/z_index_0.css', array(), '1.0.0', 'all' );
		endif;

		$z_index_1_control = get_option( 'oxsn_helpful_css_z_index_1_control' );
		if($z_index_1_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_z_index_1_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/z_index/z_index_1.css', array(), '1.0.0', 'all' );
		endif;

		$z_index_2_control = get_option( 'oxsn_helpful_css_z_index_2_control' );
		if($z_index_2_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_z_index_2_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/z_index/z_index_2.css', array(), '1.0.0', 'all' );
		endif;

		$z_index_3_control = get_option( 'oxsn_helpful_css_z_index_3_control' );
		if($z_index_3_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_z_index_3_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/z_index/z_index_3.css', array(), '1.0.0', 'all' );
		endif;

		$z_index_4_control = get_option( 'oxsn_helpful_css_z_index_4_control' );
		if($z_index_4_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_z_index_4_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/z_index/z_index_4.css', array(), '1.0.0', 'all' );
		endif;

		$z_index_5_control = get_option( 'oxsn_helpful_css_z_index_5_control' );
		if($z_index_5_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_z_index_5_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/z_index/z_index_5.css', array(), '1.0.0', 'all' );
		endif;

		$z_index_6_control = get_option( 'oxsn_helpful_css_z_index_6_control' );
		if($z_index_6_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_z_index_6_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/z_index/z_index_6.css', array(), '1.0.0', 'all' );
		endif;

		$z_index_7_control = get_option( 'oxsn_helpful_css_z_index_7_control' );
		if($z_index_7_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_z_index_7_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/z_index/z_index_7.css', array(), '1.0.0', 'all' );
		endif;

		$z_index_8_control = get_option( 'oxsn_helpful_css_z_index_8_control' );
		if($z_index_8_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_z_index_8_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/z_index/z_index_8.css', array(), '1.0.0', 'all' );
		endif;

		$z_index_9_control = get_option( 'oxsn_helpful_css_z_index_9_control' );
		if($z_index_9_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_z_index_9_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/z_index/z_index_9.css', array(), '1.0.0', 'all' );
		endif;

		$z_index_10_control = get_option( 'oxsn_helpful_css_z_index_10_control' );
		if($z_index_10_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_z_index_10_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/z_index/z_index_10.css', array(), '1.0.0', 'all' );
		endif;

		$z_index_25_control = get_option( 'oxsn_helpful_css_z_index_25_control' );
		if($z_index_25_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_z_index_25_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/z_index/z_index_25.css', array(), '1.0.0', 'all' );
		endif;

		$z_index_50_control = get_option( 'oxsn_helpful_css_z_index_50_control' );
		if($z_index_50_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_z_index_50_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/z_index/z_index_50.css', array(), '1.0.0', 'all' );
		endif;

		$z_index_75_control = get_option( 'oxsn_helpful_css_z_index_75_control' );
		if($z_index_75_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_z_index_75_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/z_index/z_index_75.css', array(), '1.0.0', 'all' );
		endif;

		$z_index_100_control = get_option( 'oxsn_helpful_css_z_index_100_control' );
		if($z_index_100_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_z_index_100_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/z_index/z_index_100.css', array(), '1.0.0', 'all' );
		endif;

		$z_index_250_control = get_option( 'oxsn_helpful_css_z_index_250_control' );
		if($z_index_250_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_z_index_250_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/z_index/z_index_250.css', array(), '1.0.0', 'all' );
		endif;

		$z_index_500_control = get_option( 'oxsn_helpful_css_z_index_500_control' );
		if($z_index_500_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_z_index_500_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/z_index/z_index_500.css', array(), '1.0.0', 'all' );
		endif;

		$z_index_750_control = get_option( 'oxsn_helpful_css_z_index_750_control' );
		if($z_index_750_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_z_index_750_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/z_index/z_index_750.css', array(), '1.0.0', 'all' );
		endif;

		$z_index_1000_control = get_option( 'oxsn_helpful_css_z_index_1000_control' );
		if($z_index_1000_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_z_index_1000_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/z_index/z_index_1000.css', array(), '1.0.0', 'all' );
		endif;

		$z_index_auto_control = get_option( 'oxsn_helpful_css_z_index_auto_control' );
		if($z_index_auto_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_z_index_auto_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/z_index/z_index_auto.css', array(), '1.0.0', 'all' );
		endif;

		$z_index_inherit_control = get_option( 'oxsn_helpful_css_z_index_inherit_control' );
		if($z_index_inherit_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_z_index_inherit_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/z_index/z_index_inherit.css', array(), '1.0.0', 'all' );
		endif;

		$z_index_initial_control = get_option( 'oxsn_helpful_css_z_index_initial_control' );
		if($z_index_initial_control == '1') :
			wp_enqueue_style( 'oxsn_helpful_css_z_index_initial_css', oxsn_helpful_css_plugin_dir_url . 'inc/css/z_index/z_index_initial.css', array(), '1.0.0', 'all' );
		endif;

	}

}


?>