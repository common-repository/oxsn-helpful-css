<?php


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


if ( ! function_exists ( 'oxsn_helpful_css_customizer' ) ) {

	add_action( 'customize_register', 'oxsn_helpful_css_customizer' );
	function oxsn_helpful_css_customizer( $wp_customize ) {
	   
		$wp_customize->add_panel( 'oxsn_helpful_css_panel', array(
			'priority'       => '',
			'capability'     => 'edit_theme_options',
			'theme_supports' => '',
			'title'          => 'OXSN Helpful CSS',
			'description'    => '',
		) );

			// display

			$wp_customize->add_section( 'oxsn_helpful_css_display_section' , array(
				'priority'       => '',
				'capability'     => 'edit_theme_options',
				'theme_supports' => '',
				'title'          => 'Display',
				'description'    => '',
				'panel'  => 'oxsn_helpful_css_panel',
			) );

				// display_block

				$wp_customize->add_setting( 'oxsn_helpful_css_display_block_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_display_block_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_display_section',
					'label'    => 'Display Block',
				) ) );

				// display_flex

				$wp_customize->add_setting( 'oxsn_helpful_css_display_flex_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_display_flex_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_display_section',
					'label'    => 'Display Flex',
				) ) );

				// display_inherit

				$wp_customize->add_setting( 'oxsn_helpful_css_display_inherit_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_display_inherit_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_display_section',
					'label'    => 'Display Inherit',
				) ) );

				// display_initial

				$wp_customize->add_setting( 'oxsn_helpful_css_display_initial_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_display_initial_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_display_section',
					'label'    => 'Display Initial',
				) ) );

				// display_inline_block

				$wp_customize->add_setting( 'oxsn_helpful_css_display_inline_block_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_display_inline_block_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_display_section',
					'label'    => 'Display Inline-Block',
				) ) );

				// display_inline_flex

				$wp_customize->add_setting( 'oxsn_helpful_css_display_inline_flex_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_display_inline_flex_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_display_section',
					'label'    => 'Display Inline-Flex',
				) ) );

				// display_inline_table

				$wp_customize->add_setting( 'oxsn_helpful_css_display_inline_table_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_display_inline_table_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_display_section',
					'label'    => 'Display Inline-Table',
				) ) );

				// display_inline

				$wp_customize->add_setting( 'oxsn_helpful_css_display_inline_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_display_inline_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_display_section',
					'label'    => 'Display Inline',
				) ) );

				// display_list_item

				$wp_customize->add_setting( 'oxsn_helpful_css_display_list_item_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_display_list_item_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_display_section',
					'label'    => 'Display List-Item',
				) ) );

				// display_none

				$wp_customize->add_setting( 'oxsn_helpful_css_display_none_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_display_none_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_display_section',
					'label'    => 'Display None',
				) ) );

				// display_run_in

				$wp_customize->add_setting( 'oxsn_helpful_css_display_run_in_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_display_run_in_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_display_section',
					'label'    => 'Display Run-In',
				) ) );

				// display_table_caption

				$wp_customize->add_setting( 'oxsn_helpful_css_display_table_caption_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_display_table_caption_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_display_section',
					'label'    => 'Display Table-Caption',
				) ) );

				// display_table_cell

				$wp_customize->add_setting( 'oxsn_helpful_css_display_table_cell_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_display_table_cell_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_display_section',
					'label'    => 'Display Table-Cell',
				) ) );

				// display_table_column_group

				$wp_customize->add_setting( 'oxsn_helpful_css_display_table_column_group_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_display_table_column_group_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_display_section',
					'label'    => 'Display Table-Column-Group',
				) ) );

				// display_table_column

				$wp_customize->add_setting( 'oxsn_helpful_css_display_table_column_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_display_table_column_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_display_section',
					'label'    => 'Display Table-Column',
				) ) );

				// display_table_footer_group

				$wp_customize->add_setting( 'oxsn_helpful_css_display_table_footer_group_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_display_table_footer_group_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_display_section',
					'label'    => 'Display Table-Footer-Group',
				) ) );

				// display_table_header_group

				$wp_customize->add_setting( 'oxsn_helpful_css_display_table_header_group_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_display_table_header_group_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_display_section',
					'label'    => 'Display Table-Header-Group',
				) ) );

				// display_table_row_group

				$wp_customize->add_setting( 'oxsn_helpful_css_display_table_row_group_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_display_table_row_group_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_display_section',
					'label'    => 'Display Table-Row-Group',
				) ) );

				// display_table_row

				$wp_customize->add_setting( 'oxsn_helpful_css_display_table_row_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_display_table_row_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_display_section',
					'label'    => 'Display Table-Row',
				) ) );

				// display_table

				$wp_customize->add_setting( 'oxsn_helpful_css_display_table_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_display_table_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_display_section',
					'label'    => 'Display Table',
				) ) );

			// float

			$wp_customize->add_section( 'oxsn_helpful_css_float_section' , array(
				'priority'       => '',
				'capability'     => 'edit_theme_options',
				'theme_supports' => '',
				'title'          => 'Float',
				'description'    => '',
				'panel'  => 'oxsn_helpful_css_panel',
			) );

				// float_inherit

				$wp_customize->add_setting( 'oxsn_helpful_css_float_inherit_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_float_inherit_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_float_section',
					'label'    => 'Float Inherit',
				) ) );

				// float_initial

				$wp_customize->add_setting( 'oxsn_helpful_css_float_initial_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_float_initial_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_float_section',
					'label'    => 'Float Initial',
				) ) );

				// float_left

				$wp_customize->add_setting( 'oxsn_helpful_css_float_left_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_float_left_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_float_section',
					'label'    => 'Float Left',
				) ) );

				// float_none

				$wp_customize->add_setting( 'oxsn_helpful_css_float_none_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_float_none_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_float_section',
					'label'    => 'Float None',
				) ) );

				// float_right

				$wp_customize->add_setting( 'oxsn_helpful_css_float_right_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_float_right_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_float_section',
					'label'    => 'Float Right',
				) ) );

			// font_size

			$wp_customize->add_section( 'oxsn_helpful_css_font_size_section' , array(
				'priority'       => '',
				'capability'     => 'edit_theme_options',
				'theme_supports' => '',
				'title'          => 'Font-Size',
				'description'    => '',
				'panel'  => 'oxsn_helpful_css_panel',
			) );

				// font_size_0pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_0pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_0pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 0%',
				) ) );

				// font_size_1pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_1pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_1pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 1%',
				) ) );

				// font_size_2pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_2pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_2pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 2%',
				) ) );

				// font_size_3pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_3pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_3pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 3%',
				) ) );

				// font_size_4pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_4pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_4pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 4%',
				) ) );

				// font_size_5pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_5pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_5pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 5%',
				) ) );

				// font_size_6pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_6pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_6pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 6%',
				) ) );

				// font_size_7pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_7pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_7pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 7%',
				) ) );

				// font_size_8pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_8pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_8pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 8%',
				) ) );

				// font_size_9pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_9pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_9pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 9%',
				) ) );

				// font_size_10pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_10pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_10pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 10%',
				) ) );

				// font_size_11pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_11pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_11pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 11%',
				) ) );

				// font_size_12pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_12pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_12pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 12%',
				) ) );

				// font_size_13pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_13pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_13pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 13%',
				) ) );

				// font_size_14pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_14pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_14pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 14%',
				) ) );

				// font_size_15pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_15pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_15pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 15%',
				) ) );

				// font_size_16pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_16pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_16pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 16%',
				) ) );

				// font_size_17pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_17pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_17pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 17%',
				) ) );

				// font_size_18pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_18pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_18pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 18%',
				) ) );

				// font_size_19pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_19pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_19pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 19%',
				) ) );

				// font_size_20pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_20pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_20pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 20%',
				) ) );

				// font_size_21pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_21pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_21pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 21%',
				) ) );

				// font_size_22pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_22pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_22pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 22%',
				) ) );

				// font_size_23pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_23pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_23pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 23%',
				) ) );

				// font_size_24pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_24pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_24pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 24%',
				) ) );

				// font_size_25pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_25pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_25pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 25%',
				) ) );

				// font_size_26pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_26pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_26pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 26%',
				) ) );

				// font_size_27pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_27pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_27pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 27%',
				) ) );

				// font_size_28pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_28pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_28pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 28%',
				) ) );

				// font_size_29pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_29pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_29pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 29%',
				) ) );

				// font_size_30pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_30pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_30pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 30%',
				) ) );

				// font_size_31pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_31pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_31pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 31%',
				) ) );

				// font_size_32pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_32pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_32pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 32%',
				) ) );

				// font_size_33pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_33pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_33pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 33%',
				) ) );

				// font_size_34pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_34pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_34pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 34%',
				) ) );

				// font_size_35pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_35pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_35pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 35%',
				) ) );

				// font_size_36pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_36pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_36pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 36%',
				) ) );

				// font_size_37pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_37pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_37pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 37%',
				) ) );

				// font_size_38pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_38pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_38pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 38%',
				) ) );

				// font_size_39pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_39pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_39pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 39%',
				) ) );

				// font_size_40pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_40pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_40pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 40%',
				) ) );

				// font_size_41pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_41pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_41pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 41%',
				) ) );

				// font_size_42pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_42pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_42pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 42%',
				) ) );

				// font_size_43pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_43pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_43pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 43%',
				) ) );

				// font_size_44pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_44pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_44pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 44%',
				) ) );

				// font_size_45pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_45pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_45pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 45%',
				) ) );

				// font_size_46pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_46pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_46pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 46%',
				) ) );

				// font_size_47pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_47pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_47pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 47%',
				) ) );

				// font_size_48pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_48pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_48pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 48%',
				) ) );

				// font_size_49pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_49pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_49pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 49%',
				) ) );

				// font_size_50pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_50pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_50pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 50%',
				) ) );

				// font_size_51pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_51pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_51pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 51%',
				) ) );

				// font_size_52pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_52pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_52pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 52%',
				) ) );

				// font_size_53pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_53pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_53pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 53%',
				) ) );

				// font_size_54pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_54pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_54pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 54%',
				) ) );

				// font_size_55pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_55pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_55pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 55%',
				) ) );

				// font_size_56pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_56pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_56pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 56%',
				) ) );

				// font_size_57pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_57pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_57pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 57%',
				) ) );

				// font_size_58pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_58pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_58pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 58%',
				) ) );

				// font_size_59pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_59pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_59pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 59%',
				) ) );

				// font_size_60pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_60pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_60pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 60%',
				) ) );

				// font_size_61pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_61pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_61pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 61%',
				) ) );

				// font_size_62pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_62pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_62pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 62%',
				) ) );

				// font_size_63pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_63pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_63pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 63%',
				) ) );

				// font_size_64pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_64pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_64pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 64%',
				) ) );

				// font_size_65pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_65pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_65pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 65%',
				) ) );

				// font_size_66pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_66pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_66pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 66%',
				) ) );

				// font_size_67pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_67pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_67pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 67%',
				) ) );

				// font_size_68pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_68pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_68pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 68%',
				) ) );

				// font_size_69pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_69pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_69pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 69%',
				) ) );

				// font_size_70pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_70pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_70pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 70%',
				) ) );

				// font_size_71pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_71pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_71pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 71%',
				) ) );

				// font_size_72pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_72pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_72pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 72%',
				) ) );

				// font_size_73pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_73pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_73pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 73%',
				) ) );

				// font_size_74pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_74pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_74pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 74%',
				) ) );

				// font_size_75pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_75pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_75pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 75%',
				) ) );

				// font_size_76pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_76pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_76pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 76%',
				) ) );

				// font_size_77pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_77pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_77pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 77%',
				) ) );

				// font_size_78pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_78pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_78pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 78%',
				) ) );

				// font_size_79pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_79pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_79pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 79%',
				) ) );

				// font_size_80pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_80pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_80pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 80%',
				) ) );

				// font_size_81pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_81pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_81pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 81%',
				) ) );

				// font_size_82pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_82pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_82pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 82%',
				) ) );

				// font_size_83pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_83pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_83pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 83%',
				) ) );

				// font_size_84pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_84pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_84pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 84%',
				) ) );

				// font_size_85pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_85pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_85pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 85%',
				) ) );

				// font_size_86pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_86pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_86pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 86%',
				) ) );

				// font_size_87pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_87pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_87pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 87%',
				) ) );

				// font_size_88pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_88pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_88pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 88%',
				) ) );

				// font_size_89pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_89pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_89pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 89%',
				) ) );

				// font_size_90pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_90pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_90pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 90%',
				) ) );

				// font_size_91pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_91pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_91pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 91%',
				) ) );

				// font_size_92pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_92pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_92pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 92%',
				) ) );

				// font_size_93pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_93pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_93pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 93%',
				) ) );

				// font_size_94pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_94pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_94pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 94%',
				) ) );

				// font_size_95pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_95pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_95pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 95%',
				) ) );

				// font_size_96pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_96pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_96pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 96%',
				) ) );

				// font_size_97pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_97pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_97pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 97%',
				) ) );

				// font_size_98pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_98pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_98pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 98%',
				) ) );

				// font_size_99pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_99pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_99pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 99%',
				) ) );

				// font_size_100pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_100pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_100pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 100%',
				) ) );

				// font_size_125pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_125pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_125pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 125%',
				) ) );

				// font_size_150pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_150pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_150pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 150%',
				) ) );

				// font_size_175pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_175pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_175pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 175%',
				) ) );

				// font_size_200pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_200pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_200pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 200%',
				) ) );

				// font_size_225pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_225pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_225pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 225%',
				) ) );

				// font_size_250pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_250pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_250pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 250%',
				) ) );

				// font_size_275pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_275pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_275pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 275%',
				) ) );

				// font_size_300pr

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_300pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_300pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size 300%',
				) ) );

				// font_size_inherit

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_inherit_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_inherit_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size Inherit',
				) ) );

				// font_size_initial

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_initial_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_initial_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size Initial',
				) ) );

				// font_size_large

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_large_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_large_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size Large',
				) ) );

				// font_size_larger

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_larger_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_larger_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size Larger',
				) ) );

				// font_size_medium

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_medium_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_medium_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size Medium',
				) ) );

				// font_size_small

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_small_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_small_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size Small',
				) ) );

				// font_size_smaller

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_smaller_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_smaller_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size Smaller',
				) ) );

				// font_size_x_large

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_x_large_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_x_large_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size X-Large',
				) ) );

				// font_size_x_small

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_x_small_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_x_small_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size X-Small',
				) ) );

				// font_size_xx_large

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_xx_large_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_xx_large_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size XX-Large',
				) ) );

				// font_size_xx_small

				$wp_customize->add_setting( 'oxsn_helpful_css_font_size_xx_small_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_font_size_xx_small_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_font_size_section',
					'label'    => 'Font-Size XX-Small',
				) ) );

			$wp_customize->add_section( 'oxsn_helpful_css_line_height_section' , array(
				'priority'       => '',
				'capability'     => 'edit_theme_options',
				'theme_supports' => '',
				'title'          => 'Line-Height',
				'description'    => '',
				'panel'  => 'oxsn_helpful_css_panel',
			) );

				// line_height_0px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_0px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_0px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 0px',
				) ) );

				// line_height_1px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_1px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_1px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 1px',
				) ) );

				// line_height_2px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_2px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_2px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 2px',
				) ) );

				// line_height_3px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_3px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_3px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 3px',
				) ) );

				// line_height_4px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_4px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_4px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 4px',
				) ) );

				// line_height_5px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_5px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_5px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 5px',
				) ) );

				// line_height_6px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_6px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_6px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 6px',
				) ) );

				// line_height_7px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_7px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_7px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 7px',
				) ) );

				// line_height_8px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_8px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_8px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 8px',
				) ) );

				// line_height_9px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_9px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_9px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 9px',
				) ) );

				// line_height_10px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_10px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_10px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 10px',
				) ) );

				// line_height_11px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_11px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_11px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 11px',
				) ) );

				// line_height_12px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_12px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_12px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 12px',
				) ) );

				// line_height_13px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_13px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_13px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 13px',
				) ) );

				// line_height_14px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_14px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_14px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 14px',
				) ) );

				// line_height_15px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_15px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_15px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 15px',
				) ) );

				// line_height_16px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_16px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_16px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 16px',
				) ) );

				// line_height_17px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_17px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_17px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 17px',
				) ) );

				// line_height_18px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_18px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_18px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 18px',
				) ) );

				// line_height_19px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_19px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_19px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 19px',
				) ) );

				// line_height_20px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_20px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_20px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 20px',
				) ) );

				// line_height_21px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_21px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_21px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 21px',
				) ) );

				// line_height_22px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_22px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_22px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 22px',
				) ) );

				// line_height_23px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_23px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_23px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 23px',
				) ) );

				// line_height_24px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_24px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_24px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 24px',
				) ) );

				// line_height_25px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_25px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_25px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 25px',
				) ) );

				// line_height_26px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_26px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_26px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 26px',
				) ) );

				// line_height_27px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_27px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_27px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 27px',
				) ) );

				// line_height_28px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_28px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_28px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 28px',
				) ) );

				// line_height_29px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_29px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_29px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 29px',
				) ) );

				// line_height_30px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_30px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_30px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 30px',
				) ) );

				// line_height_31px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_31px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_31px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 31px',
				) ) );

				// line_height_32px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_32px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_32px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 32px',
				) ) );

				// line_height_33px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_33px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_33px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 33px',
				) ) );

				// line_height_34px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_34px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_34px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 34px',
				) ) );

				// line_height_35px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_35px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_35px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 35px',
				) ) );

				// line_height_36px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_36px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_36px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 36px',
				) ) );

				// line_height_37px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_37px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_37px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 37px',
				) ) );

				// line_height_38px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_38px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_38px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 38px',
				) ) );

				// line_height_39px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_39px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_39px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 39px',
				) ) );

				// line_height_40px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_40px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_40px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 40px',
				) ) );

				// line_height_41px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_41px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_41px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 41px',
				) ) );

				// line_height_42px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_42px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_42px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 42px',
				) ) );

				// line_height_43px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_43px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_43px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 43px',
				) ) );

				// line_height_44px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_44px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_44px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 44px',
				) ) );

				// line_height_45px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_45px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_45px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 45px',
				) ) );

				// line_height_46px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_46px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_46px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 46px',
				) ) );

				// line_height_47px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_47px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_47px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 47px',
				) ) );

				// line_height_48px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_48px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_48px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 48px',
				) ) );

				// line_height_49px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_49px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_49px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 49px',
				) ) );

				// line_height_50px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_50px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_50px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 50px',
				) ) );

				// line_height_51px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_51px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_51px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 51px',
				) ) );

				// line_height_52px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_52px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_52px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 52px',
				) ) );

				// line_height_53px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_53px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_53px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 53px',
				) ) );

				// line_height_54px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_54px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_54px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 54px',
				) ) );

				// line_height_55px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_55px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_55px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 55px',
				) ) );

				// line_height_56px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_56px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_56px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 56px',
				) ) );

				// line_height_57px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_57px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_57px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 57px',
				) ) );

				// line_height_58px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_58px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_58px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 58px',
				) ) );

				// line_height_59px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_59px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_59px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 59px',
				) ) );

				// line_height_60px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_60px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_60px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 60px',
				) ) );

				// line_height_61px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_61px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_61px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 61px',
				) ) );

				// line_height_62px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_62px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_62px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 62px',
				) ) );

				// line_height_63px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_63px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_63px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 63px',
				) ) );

				// line_height_64px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_64px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_64px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 64px',
				) ) );

				// line_height_65px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_65px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_65px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 65px',
				) ) );

				// line_height_66px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_66px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_66px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 66px',
				) ) );

				// line_height_67px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_67px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_67px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 67px',
				) ) );

				// line_height_68px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_68px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_68px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 68px',
				) ) );

				// line_height_69px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_69px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_69px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 69px',
				) ) );

				// line_height_70px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_70px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_70px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 70px',
				) ) );

				// line_height_71px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_71px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_71px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 71px',
				) ) );

				// line_height_72px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_72px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_72px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 72px',
				) ) );

				// line_height_73px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_73px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_73px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 73px',
				) ) );

				// line_height_74px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_74px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_74px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 74px',
				) ) );

				// line_height_75px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_75px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_75px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 75px',
				) ) );

				// line_height_76px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_76px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_76px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 76px',
				) ) );

				// line_height_77px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_77px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_77px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 77px',
				) ) );

				// line_height_78px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_78px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_78px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 78px',
				) ) );

				// line_height_79px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_79px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_79px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 79px',
				) ) );

				// line_height_80px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_80px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_80px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 80px',
				) ) );

				// line_height_81px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_81px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_81px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 81px',
				) ) );

				// line_height_82px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_82px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_82px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 82px',
				) ) );

				// line_height_83px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_83px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_83px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 83px',
				) ) );

				// line_height_84px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_84px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_84px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 84px',
				) ) );

				// line_height_85px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_85px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_85px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 85px',
				) ) );

				// line_height_86px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_86px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_86px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 86px',
				) ) );

				// line_height_87px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_87px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_87px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 87px',
				) ) );

				// line_height_88px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_88px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_88px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 88px',
				) ) );

				// line_height_89px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_89px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_89px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 89px',
				) ) );

				// line_height_90px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_90px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_90px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 90px',
				) ) );

				// line_height_91px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_91px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_91px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 91px',
				) ) );

				// line_height_92px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_92px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_92px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 92px',
				) ) );

				// line_height_93px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_93px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_93px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 93px',
				) ) );

				// line_height_94px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_94px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_94px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 94px',
				) ) );

				// line_height_95px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_95px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_95px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 95px',
				) ) );

				// line_height_96px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_96px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_96px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 96px',
				) ) );

				// line_height_97px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_97px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_97px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 97px',
				) ) );

				// line_height_98px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_98px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_98px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 98px',
				) ) );

				// line_height_99px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_99px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_99px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 99px',
				) ) );

				// line_height_100px

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_100px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_100px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height 100px',
				) ) );

				// line_height_inherit

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_inherit_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_inherit_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height Inherit',
				) ) );

				// line_height_initial

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_initial_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_initial_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height Initial',
				) ) );

				// line_height_normal

				$wp_customize->add_setting( 'oxsn_helpful_css_line_height_normal_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_line_height_normal_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_line_height_section',
					'label'    => 'Line-Height Normal',
				) ) );

			// top

			$wp_customize->add_section( 'oxsn_helpful_css_top_section' , array(
				'priority'       => '',
				'capability'     => 'edit_theme_options',
				'theme_supports' => '',
				'title'          => 'Top',
				'description'    => '',
				'panel'  => 'oxsn_helpful_css_panel',
			) );

				// top_0px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_0px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_0px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 0px',
				) ) );

				// top_1px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_1px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_1px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 1px',
				) ) );

				// top_2px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_2px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_2px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 2px',
				) ) );

				// top_3px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_3px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_3px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 3px',
				) ) );

				// top_4px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_4px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_4px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 4px',
				) ) );

				// top_5px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_5px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_5px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 5px',
				) ) );

				// top_6px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_6px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_6px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 6px',
				) ) );

				// top_7px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_7px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_7px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 7px',
				) ) );

				// top_8px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_8px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_8px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 8px',
				) ) );

				// top_9px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_9px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_9px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 9px',
				) ) );

				// top_10px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_10px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_10px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 10px',
				) ) );

				// top_11px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_11px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_11px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 11px',
				) ) );

				// top_12px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_12px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_12px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 12px',
				) ) );

				// top_13px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_13px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_13px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 13px',
				) ) );

				// top_14px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_14px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_14px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 14px',
				) ) );

				// top_15px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_15px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_15px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 15px',
				) ) );

				// top_16px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_16px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_16px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 16px',
				) ) );

				// top_17px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_17px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_17px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 17px',
				) ) );

				// top_18px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_18px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_18px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 18px',
				) ) );

				// top_19px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_19px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_19px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 19px',
				) ) );

				// top_20px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_20px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_20px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 20px',
				) ) );

				// top_21px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_21px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_21px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 21px',
				) ) );

				// top_22px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_22px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_22px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 22px',
				) ) );

				// top_23px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_23px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_23px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 23px',
				) ) );

				// top_24px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_24px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_24px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 24px',
				) ) );

				// top_25px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_25px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_25px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 25px',
				) ) );

				// top_26px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_26px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_26px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 26px',
				) ) );

				// top_27px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_27px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_27px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 27px',
				) ) );

				// top_28px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_28px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_28px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 28px',
				) ) );

				// top_29px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_29px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_29px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 29px',
				) ) );

				// top_30px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_30px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_30px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 30px',
				) ) );

				// top_31px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_31px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_31px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 31px',
				) ) );

				// top_32px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_32px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_32px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 32px',
				) ) );

				// top_33px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_33px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_33px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 33px',
				) ) );

				// top_34px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_34px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_34px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 34px',
				) ) );

				// top_35px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_35px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_35px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 35px',
				) ) );

				// top_36px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_36px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_36px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 36px',
				) ) );

				// top_37px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_37px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_37px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 37px',
				) ) );

				// top_38px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_38px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_38px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 38px',
				) ) );

				// top_39px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_39px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_39px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 39px',
				) ) );

				// top_40px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_40px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_40px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 40px',
				) ) );

				// top_41px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_41px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_41px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 41px',
				) ) );

				// top_42px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_42px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_42px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 42px',
				) ) );

				// top_43px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_43px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_43px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 43px',
				) ) );

				// top_44px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_44px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_44px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 44px',
				) ) );

				// top_45px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_45px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_45px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 45px',
				) ) );

				// top_46px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_46px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_46px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 46px',
				) ) );

				// top_47px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_47px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_47px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 47px',
				) ) );

				// top_48px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_48px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_48px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 48px',
				) ) );

				// top_49px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_49px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_49px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 49px',
				) ) );

				// top_50px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_50px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_50px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 50px',
				) ) );

				// top_51px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_51px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_51px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 51px',
				) ) );

				// top_52px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_52px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_52px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 52px',
				) ) );

				// top_53px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_53px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_53px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 53px',
				) ) );

				// top_54px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_54px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_54px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 54px',
				) ) );

				// top_55px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_55px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_55px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 55px',
				) ) );

				// top_56px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_56px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_56px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 56px',
				) ) );

				// top_57px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_57px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_57px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 57px',
				) ) );

				// top_58px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_58px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_58px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 58px',
				) ) );

				// top_59px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_59px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_59px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 59px',
				) ) );

				// top_60px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_60px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_60px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 60px',
				) ) );

				// top_61px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_61px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_61px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 61px',
				) ) );

				// top_62px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_62px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_62px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 62px',
				) ) );

				// top_63px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_63px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_63px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 63px',
				) ) );

				// top_64px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_64px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_64px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 64px',
				) ) );

				// top_65px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_65px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_65px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 65px',
				) ) );

				// top_66px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_66px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_66px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 66px',
				) ) );

				// top_67px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_67px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_67px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 67px',
				) ) );

				// top_68px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_68px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_68px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 68px',
				) ) );

				// top_69px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_69px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_69px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 69px',
				) ) );

				// top_70px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_70px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_70px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 70px',
				) ) );

				// top_71px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_71px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_71px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 71px',
				) ) );

				// top_72px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_72px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_72px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 72px',
				) ) );

				// top_73px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_73px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_73px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 73px',
				) ) );

				// top_74px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_74px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_74px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 74px',
				) ) );

				// top_75px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_75px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_75px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 75px',
				) ) );

				// top_76px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_76px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_76px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 76px',
				) ) );

				// top_77px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_77px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_77px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 77px',
				) ) );

				// top_78px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_78px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_78px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 78px',
				) ) );

				// top_79px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_79px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_79px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 79px',
				) ) );

				// top_80px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_80px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_80px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 80px',
				) ) );

				// top_81px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_81px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_81px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 81px',
				) ) );

				// top_82px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_82px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_82px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 82px',
				) ) );

				// top_83px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_83px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_83px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 83px',
				) ) );

				// top_84px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_84px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_84px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 84px',
				) ) );

				// top_85px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_85px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_85px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 85px',
				) ) );

				// top_86px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_86px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_86px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 86px',
				) ) );

				// top_87px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_87px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_87px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 87px',
				) ) );

				// top_88px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_88px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_88px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 88px',
				) ) );

				// top_89px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_89px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_89px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 89px',
				) ) );

				// top_90px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_90px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_90px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 90px',
				) ) );

				// top_91px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_91px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_91px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 91px',
				) ) );

				// top_92px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_92px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_92px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 92px',
				) ) );

				// top_93px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_93px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_93px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 93px',
				) ) );

				// top_94px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_94px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_94px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 94px',
				) ) );

				// top_95px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_95px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_95px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 95px',
				) ) );

				// top_96px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_96px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_96px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 96px',
				) ) );

				// top_97px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_97px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_97px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 97px',
				) ) );

				// top_98px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_98px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_98px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 98px',
				) ) );

				// top_99px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_99px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_99px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 99px',
				) ) );

				// top_100px

				$wp_customize->add_setting( 'oxsn_helpful_css_top_100px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_100px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top 100px',
				) ) );

				// top_auto

				$wp_customize->add_setting( 'oxsn_helpful_css_top_auto_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_auto_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top Auto',
				) ) );

				// top_inherit

				$wp_customize->add_setting( 'oxsn_helpful_css_top_inherit_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_inherit_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top Inherit',
				) ) );

				// top_initial

				$wp_customize->add_setting( 'oxsn_helpful_css_top_initial_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_top_initial_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_top_section',
					'label'    => 'Top Initial',
				) ) );

			// right

			$wp_customize->add_section( 'oxsn_helpful_css_right_section' , array(
				'priority'       => '',
				'capability'     => 'edit_theme_options',
				'theme_supports' => '',
				'title'          => 'Right',
				'description'    => '',
				'panel'  => 'oxsn_helpful_css_panel',
			) );

				// right_0px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_0px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_0px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 0px',
				) ) );

				// right_1px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_1px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_1px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 1px',
				) ) );

				// right_2px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_2px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_2px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 2px',
				) ) );

				// right_3px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_3px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_3px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 3px',
				) ) );

				// right_4px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_4px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_4px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 4px',
				) ) );

				// right_5px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_5px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_5px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 5px',
				) ) );

				// right_6px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_6px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_6px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 6px',
				) ) );

				// right_7px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_7px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_7px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 7px',
				) ) );

				// right_8px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_8px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_8px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 8px',
				) ) );

				// right_9px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_9px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_9px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 9px',
				) ) );

				// right_10px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_10px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_10px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 10px',
				) ) );

				// right_11px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_11px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_11px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 11px',
				) ) );

				// right_12px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_12px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_12px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 12px',
				) ) );

				// right_13px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_13px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_13px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 13px',
				) ) );

				// right_14px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_14px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_14px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 14px',
				) ) );

				// right_15px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_15px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_15px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 15px',
				) ) );

				// right_16px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_16px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_16px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 16px',
				) ) );

				// right_17px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_17px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_17px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 17px',
				) ) );

				// right_18px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_18px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_18px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 18px',
				) ) );

				// right_19px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_19px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_19px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 19px',
				) ) );

				// right_20px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_20px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_20px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 20px',
				) ) );

				// right_21px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_21px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_21px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 21px',
				) ) );

				// right_22px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_22px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_22px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 22px',
				) ) );

				// right_23px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_23px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_23px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 23px',
				) ) );

				// right_24px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_24px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_24px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 24px',
				) ) );

				// right_25px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_25px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_25px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 25px',
				) ) );

				// right_26px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_26px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_26px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 26px',
				) ) );

				// right_27px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_27px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_27px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 27px',
				) ) );

				// right_28px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_28px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_28px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 28px',
				) ) );

				// right_29px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_29px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_29px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 29px',
				) ) );

				// right_30px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_30px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_30px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 30px',
				) ) );

				// right_31px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_31px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_31px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 31px',
				) ) );

				// right_32px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_32px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_32px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 32px',
				) ) );

				// right_33px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_33px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_33px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 33px',
				) ) );

				// right_34px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_34px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_34px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 34px',
				) ) );

				// right_35px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_35px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_35px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 35px',
				) ) );

				// right_36px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_36px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_36px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 36px',
				) ) );

				// right_37px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_37px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_37px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 37px',
				) ) );

				// right_38px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_38px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_38px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 38px',
				) ) );

				// right_39px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_39px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_39px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 39px',
				) ) );

				// right_40px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_40px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_40px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 40px',
				) ) );

				// right_41px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_41px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_41px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 41px',
				) ) );

				// right_42px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_42px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_42px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 42px',
				) ) );

				// right_43px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_43px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_43px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 43px',
				) ) );

				// right_44px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_44px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_44px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 44px',
				) ) );

				// right_45px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_45px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_45px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 45px',
				) ) );

				// right_46px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_46px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_46px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 46px',
				) ) );

				// right_47px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_47px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_47px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 47px',
				) ) );

				// right_48px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_48px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_48px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 48px',
				) ) );

				// right_49px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_49px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_49px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 49px',
				) ) );

				// right_50px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_50px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_50px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 50px',
				) ) );

				// right_51px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_51px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_51px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 51px',
				) ) );

				// right_52px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_52px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_52px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 52px',
				) ) );

				// right_53px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_53px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_53px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 53px',
				) ) );

				// right_54px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_54px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_54px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 54px',
				) ) );

				// right_55px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_55px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_55px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 55px',
				) ) );

				// right_56px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_56px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_56px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 56px',
				) ) );

				// right_57px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_57px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_57px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 57px',
				) ) );

				// right_58px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_58px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_58px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 58px',
				) ) );

				// right_59px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_59px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_59px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 59px',
				) ) );

				// right_60px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_60px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_60px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 60px',
				) ) );

				// right_61px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_61px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_61px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 61px',
				) ) );

				// right_62px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_62px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_62px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 62px',
				) ) );

				// right_63px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_63px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_63px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 63px',
				) ) );

				// right_64px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_64px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_64px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 64px',
				) ) );

				// right_65px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_65px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_65px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 65px',
				) ) );

				// right_66px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_66px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_66px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 66px',
				) ) );

				// right_67px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_67px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_67px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 67px',
				) ) );

				// right_68px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_68px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_68px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 68px',
				) ) );

				// right_69px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_69px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_69px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 69px',
				) ) );

				// right_70px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_70px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_70px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 70px',
				) ) );

				// right_71px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_71px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_71px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 71px',
				) ) );

				// right_72px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_72px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_72px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 72px',
				) ) );

				// right_73px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_73px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_73px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 73px',
				) ) );

				// right_74px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_74px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_74px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 74px',
				) ) );

				// right_75px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_75px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_75px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 75px',
				) ) );

				// right_76px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_76px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_76px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 76px',
				) ) );

				// right_77px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_77px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_77px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 77px',
				) ) );

				// right_78px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_78px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_78px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 78px',
				) ) );

				// right_79px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_79px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_79px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 79px',
				) ) );

				// right_80px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_80px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_80px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 80px',
				) ) );

				// right_81px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_81px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_81px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 81px',
				) ) );

				// right_82px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_82px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_82px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 82px',
				) ) );

				// right_83px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_83px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_83px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 83px',
				) ) );

				// right_84px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_84px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_84px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 84px',
				) ) );

				// right_85px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_85px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_85px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 85px',
				) ) );

				// right_86px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_86px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_86px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 86px',
				) ) );

				// right_87px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_87px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_87px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 87px',
				) ) );

				// right_88px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_88px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_88px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 88px',
				) ) );

				// right_89px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_89px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_89px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 89px',
				) ) );

				// right_90px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_90px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_90px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 90px',
				) ) );

				// right_91px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_91px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_91px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 91px',
				) ) );

				// right_92px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_92px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_92px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 92px',
				) ) );

				// right_93px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_93px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_93px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 93px',
				) ) );

				// right_94px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_94px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_94px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 94px',
				) ) );

				// right_95px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_95px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_95px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 95px',
				) ) );

				// right_96px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_96px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_96px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 96px',
				) ) );

				// right_97px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_97px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_97px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 97px',
				) ) );

				// right_98px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_98px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_98px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 98px',
				) ) );

				// right_99px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_99px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_99px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 99px',
				) ) );

				// right_100px

				$wp_customize->add_setting( 'oxsn_helpful_css_right_100px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_100px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right 100px',
				) ) );

				// right_auto

				$wp_customize->add_setting( 'oxsn_helpful_css_right_auto_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_auto_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right Auto',
				) ) );

				// right_inherit

				$wp_customize->add_setting( 'oxsn_helpful_css_right_inherit_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_inherit_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right Inherit',
				) ) );

				// right_initial

				$wp_customize->add_setting( 'oxsn_helpful_css_right_initial_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_right_initial_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_right_section',
					'label'    => 'Right Initial',
				) ) );

			// bottom

			$wp_customize->add_section( 'oxsn_helpful_css_bottom_section' , array(
				'priority'       => '',
				'capability'     => 'edit_theme_options',
				'theme_supports' => '',
				'title'          => 'Bottom',
				'description'    => '',
				'panel'  => 'oxsn_helpful_css_panel',
			) );

				// bottom_0px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_0px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_0px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 0px',
				) ) );

				// bottom_1px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_1px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_1px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 1px',
				) ) );

				// bottom_2px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_2px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_2px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 2px',
				) ) );

				// bottom_3px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_3px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_3px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 3px',
				) ) );

				// bottom_4px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_4px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_4px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 4px',
				) ) );

				// bottom_5px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_5px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_5px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 5px',
				) ) );

				// bottom_6px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_6px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_6px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 6px',
				) ) );

				// bottom_7px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_7px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_7px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 7px',
				) ) );

				// bottom_8px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_8px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_8px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 8px',
				) ) );

				// bottom_9px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_9px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_9px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 9px',
				) ) );

				// bottom_10px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_10px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_10px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 10px',
				) ) );

				// bottom_11px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_11px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_11px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 11px',
				) ) );

				// bottom_12px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_12px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_12px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 12px',
				) ) );

				// bottom_13px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_13px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_13px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 13px',
				) ) );

				// bottom_14px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_14px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_14px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 14px',
				) ) );

				// bottom_15px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_15px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_15px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 15px',
				) ) );

				// bottom_16px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_16px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_16px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 16px',
				) ) );

				// bottom_17px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_17px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_17px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 17px',
				) ) );

				// bottom_18px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_18px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_18px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 18px',
				) ) );

				// bottom_19px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_19px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_19px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 19px',
				) ) );

				// bottom_20px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_20px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_20px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 20px',
				) ) );

				// bottom_21px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_21px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_21px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 21px',
				) ) );

				// bottom_22px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_22px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_22px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 22px',
				) ) );

				// bottom_23px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_23px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_23px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 23px',
				) ) );

				// bottom_24px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_24px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_24px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 24px',
				) ) );

				// bottom_25px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_25px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_25px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 25px',
				) ) );

				// bottom_26px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_26px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_26px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 26px',
				) ) );

				// bottom_27px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_27px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_27px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 27px',
				) ) );

				// bottom_28px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_28px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_28px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 28px',
				) ) );

				// bottom_29px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_29px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_29px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 29px',
				) ) );

				// bottom_30px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_30px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_30px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 30px',
				) ) );

				// bottom_31px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_31px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_31px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 31px',
				) ) );

				// bottom_32px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_32px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_32px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 32px',
				) ) );

				// bottom_33px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_33px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_33px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 33px',
				) ) );

				// bottom_34px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_34px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_34px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 34px',
				) ) );

				// bottom_35px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_35px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_35px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 35px',
				) ) );

				// bottom_36px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_36px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_36px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 36px',
				) ) );

				// bottom_37px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_37px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_37px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 37px',
				) ) );

				// bottom_38px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_38px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_38px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 38px',
				) ) );

				// bottom_39px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_39px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_39px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 39px',
				) ) );

				// bottom_40px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_40px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_40px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 40px',
				) ) );

				// bottom_41px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_41px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_41px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 41px',
				) ) );

				// bottom_42px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_42px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_42px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 42px',
				) ) );

				// bottom_43px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_43px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_43px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 43px',
				) ) );

				// bottom_44px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_44px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_44px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 44px',
				) ) );

				// bottom_45px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_45px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_45px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 45px',
				) ) );

				// bottom_46px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_46px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_46px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 46px',
				) ) );

				// bottom_47px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_47px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_47px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 47px',
				) ) );

				// bottom_48px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_48px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_48px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 48px',
				) ) );

				// bottom_49px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_49px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_49px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 49px',
				) ) );

				// bottom_50px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_50px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_50px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 50px',
				) ) );

				// bottom_51px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_51px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_51px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 51px',
				) ) );

				// bottom_52px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_52px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_52px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 52px',
				) ) );

				// bottom_53px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_53px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_53px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 53px',
				) ) );

				// bottom_54px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_54px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_54px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 54px',
				) ) );

				// bottom_55px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_55px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_55px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 55px',
				) ) );

				// bottom_56px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_56px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_56px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 56px',
				) ) );

				// bottom_57px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_57px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_57px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 57px',
				) ) );

				// bottom_58px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_58px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_58px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 58px',
				) ) );

				// bottom_59px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_59px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_59px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 59px',
				) ) );

				// bottom_60px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_60px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_60px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 60px',
				) ) );

				// bottom_61px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_61px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_61px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 61px',
				) ) );

				// bottom_62px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_62px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_62px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 62px',
				) ) );

				// bottom_63px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_63px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_63px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 63px',
				) ) );

				// bottom_64px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_64px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_64px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 64px',
				) ) );

				// bottom_65px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_65px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_65px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 65px',
				) ) );

				// bottom_66px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_66px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_66px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 66px',
				) ) );

				// bottom_67px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_67px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_67px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 67px',
				) ) );

				// bottom_68px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_68px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_68px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 68px',
				) ) );

				// bottom_69px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_69px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_69px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 69px',
				) ) );

				// bottom_70px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_70px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_70px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 70px',
				) ) );

				// bottom_71px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_71px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_71px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 71px',
				) ) );

				// bottom_72px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_72px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_72px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 72px',
				) ) );

				// bottom_73px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_73px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_73px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 73px',
				) ) );

				// bottom_74px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_74px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_74px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 74px',
				) ) );

				// bottom_75px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_75px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_75px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 75px',
				) ) );

				// bottom_76px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_76px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_76px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 76px',
				) ) );

				// bottom_77px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_77px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_77px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 77px',
				) ) );

				// bottom_78px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_78px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_78px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 78px',
				) ) );

				// bottom_79px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_79px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_79px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 79px',
				) ) );

				// bottom_80px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_80px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_80px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 80px',
				) ) );

				// bottom_81px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_81px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_81px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 81px',
				) ) );

				// bottom_82px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_82px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_82px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 82px',
				) ) );

				// bottom_83px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_83px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_83px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 83px',
				) ) );

				// bottom_84px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_84px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_84px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 84px',
				) ) );

				// bottom_85px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_85px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_85px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 85px',
				) ) );

				// bottom_86px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_86px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_86px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 86px',
				) ) );

				// bottom_87px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_87px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_87px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 87px',
				) ) );

				// bottom_88px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_88px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_88px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 88px',
				) ) );

				// bottom_89px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_89px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_89px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 89px',
				) ) );

				// bottom_90px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_90px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_90px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 90px',
				) ) );

				// bottom_91px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_91px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_91px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 91px',
				) ) );

				// bottom_92px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_92px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_92px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 92px',
				) ) );

				// bottom_93px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_93px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_93px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 93px',
				) ) );

				// bottom_94px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_94px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_94px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 94px',
				) ) );

				// bottom_95px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_95px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_95px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 95px',
				) ) );

				// bottom_96px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_96px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_96px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 96px',
				) ) );

				// bottom_97px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_97px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_97px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 97px',
				) ) );

				// bottom_98px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_98px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_98px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 98px',
				) ) );

				// bottom_99px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_99px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_99px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 99px',
				) ) );

				// bottom_100px

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_100px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_100px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom 100px',
				) ) );

				// bottom_auto

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_auto_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_auto_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom Auto',
				) ) );

				// bottom_inherit

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_inherit_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_inherit_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom Inherit',
				) ) );

				// bottom_initial

				$wp_customize->add_setting( 'oxsn_helpful_css_bottom_initial_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_bottom_initial_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_bottom_section',
					'label'    => 'Bottom Initial',
				) ) );

			// left

			$wp_customize->add_section( 'oxsn_helpful_css_left_section' , array(
				'priority'       => '',
				'capability'     => 'edit_theme_options',
				'theme_supports' => '',
				'title'          => 'Left',
				'description'    => '',
				'panel'  => 'oxsn_helpful_css_panel',
			) );

				// left_0px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_0px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_0px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 0px',
				) ) );

				// left_1px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_1px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_1px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 1px',
				) ) );

				// left_2px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_2px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_2px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 2px',
				) ) );

				// left_3px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_3px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_3px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 3px',
				) ) );

				// left_4px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_4px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_4px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 4px',
				) ) );

				// left_5px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_5px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_5px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 5px',
				) ) );

				// left_6px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_6px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_6px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 6px',
				) ) );

				// left_7px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_7px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_7px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 7px',
				) ) );

				// left_8px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_8px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_8px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 8px',
				) ) );

				// left_9px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_9px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_9px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 9px',
				) ) );

				// left_10px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_10px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_10px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 10px',
				) ) );

				// left_11px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_11px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_11px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 11px',
				) ) );

				// left_12px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_12px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_12px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 12px',
				) ) );

				// left_13px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_13px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_13px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 13px',
				) ) );

				// left_14px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_14px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_14px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 14px',
				) ) );

				// left_15px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_15px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_15px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 15px',
				) ) );

				// left_16px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_16px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_16px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 16px',
				) ) );

				// left_17px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_17px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_17px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 17px',
				) ) );

				// left_18px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_18px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_18px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 18px',
				) ) );

				// left_19px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_19px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_19px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 19px',
				) ) );

				// left_20px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_20px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_20px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 20px',
				) ) );

				// left_21px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_21px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_21px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 21px',
				) ) );

				// left_22px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_22px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_22px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 22px',
				) ) );

				// left_23px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_23px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_23px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 23px',
				) ) );

				// left_24px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_24px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_24px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 24px',
				) ) );

				// left_25px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_25px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_25px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 25px',
				) ) );

				// left_26px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_26px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_26px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 26px',
				) ) );

				// left_27px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_27px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_27px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 27px',
				) ) );

				// left_28px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_28px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_28px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 28px',
				) ) );

				// left_29px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_29px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_29px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 29px',
				) ) );

				// left_30px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_30px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_30px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 30px',
				) ) );

				// left_31px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_31px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_31px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 31px',
				) ) );

				// left_32px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_32px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_32px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 32px',
				) ) );

				// left_33px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_33px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_33px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 33px',
				) ) );

				// left_34px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_34px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_34px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 34px',
				) ) );

				// left_35px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_35px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_35px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 35px',
				) ) );

				// left_36px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_36px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_36px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 36px',
				) ) );

				// left_37px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_37px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_37px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 37px',
				) ) );

				// left_38px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_38px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_38px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 38px',
				) ) );

				// left_39px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_39px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_39px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 39px',
				) ) );

				// left_40px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_40px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_40px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 40px',
				) ) );

				// left_41px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_41px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_41px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 41px',
				) ) );

				// left_42px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_42px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_42px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 42px',
				) ) );

				// left_43px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_43px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_43px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 43px',
				) ) );

				// left_44px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_44px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_44px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 44px',
				) ) );

				// left_45px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_45px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_45px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 45px',
				) ) );

				// left_46px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_46px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_46px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 46px',
				) ) );

				// left_47px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_47px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_47px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 47px',
				) ) );

				// left_48px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_48px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_48px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 48px',
				) ) );

				// left_49px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_49px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_49px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 49px',
				) ) );

				// left_50px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_50px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_50px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 50px',
				) ) );

				// left_51px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_51px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_51px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 51px',
				) ) );

				// left_52px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_52px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_52px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 52px',
				) ) );

				// left_53px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_53px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_53px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 53px',
				) ) );

				// left_54px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_54px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_54px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 54px',
				) ) );

				// left_55px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_55px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_55px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 55px',
				) ) );

				// left_56px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_56px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_56px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 56px',
				) ) );

				// left_57px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_57px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_57px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 57px',
				) ) );

				// left_58px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_58px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_58px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 58px',
				) ) );

				// left_59px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_59px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_59px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 59px',
				) ) );

				// left_60px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_60px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_60px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 60px',
				) ) );

				// left_61px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_61px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_61px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 61px',
				) ) );

				// left_62px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_62px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_62px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 62px',
				) ) );

				// left_63px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_63px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_63px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 63px',
				) ) );

				// left_64px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_64px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_64px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 64px',
				) ) );

				// left_65px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_65px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_65px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 65px',
				) ) );

				// left_66px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_66px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_66px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 66px',
				) ) );

				// left_67px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_67px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_67px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 67px',
				) ) );

				// left_68px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_68px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_68px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 68px',
				) ) );

				// left_69px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_69px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_69px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 69px',
				) ) );

				// left_70px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_70px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_70px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 70px',
				) ) );

				// left_71px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_71px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_71px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 71px',
				) ) );

				// left_72px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_72px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_72px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 72px',
				) ) );

				// left_73px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_73px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_73px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 73px',
				) ) );

				// left_74px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_74px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_74px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 74px',
				) ) );

				// left_75px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_75px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_75px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 75px',
				) ) );

				// left_76px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_76px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_76px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 76px',
				) ) );

				// left_77px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_77px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_77px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 77px',
				) ) );

				// left_78px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_78px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_78px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 78px',
				) ) );

				// left_79px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_79px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_79px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 79px',
				) ) );

				// left_80px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_80px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_80px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 80px',
				) ) );

				// left_81px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_81px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_81px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 81px',
				) ) );

				// left_82px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_82px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_82px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 82px',
				) ) );

				// left_83px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_83px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_83px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 83px',
				) ) );

				// left_84px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_84px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_84px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 84px',
				) ) );

				// left_85px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_85px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_85px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 85px',
				) ) );

				// left_86px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_86px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_86px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 86px',
				) ) );

				// left_87px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_87px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_87px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 87px',
				) ) );

				// left_88px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_88px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_88px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 88px',
				) ) );

				// left_89px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_89px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_89px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 89px',
				) ) );

				// left_90px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_90px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_90px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 90px',
				) ) );

				// left_91px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_91px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_91px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 91px',
				) ) );

				// left_92px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_92px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_92px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 92px',
				) ) );

				// left_93px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_93px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_93px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 93px',
				) ) );

				// left_94px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_94px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_94px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 94px',
				) ) );

				// left_95px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_95px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_95px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 95px',
				) ) );

				// left_96px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_96px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_96px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 96px',
				) ) );

				// left_97px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_97px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_97px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 97px',
				) ) );

				// left_98px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_98px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_98px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 98px',
				) ) );

				// left_99px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_99px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_99px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 99px',
				) ) );

				// left_100px

				$wp_customize->add_setting( 'oxsn_helpful_css_left_100px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_100px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left 100px',
				) ) );

				// left_auto

				$wp_customize->add_setting( 'oxsn_helpful_css_left_auto_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_auto_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left Auto',
				) ) );

				// left_inherit

				$wp_customize->add_setting( 'oxsn_helpful_css_left_inherit_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_inherit_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left Inherit',
				) ) );

				// left_initial

				$wp_customize->add_setting( 'oxsn_helpful_css_left_initial_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_left_initial_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_left_section',
					'label'    => 'Left Initial',
				) ) );

			// margin

			$wp_customize->add_section( 'oxsn_helpful_css_margin_section' , array(
				'priority'       => '',
				'capability'     => 'edit_theme_options',
				'theme_supports' => '',
				'title'          => 'Margin',
				'description'    => '',
				'panel'  => 'oxsn_helpful_css_panel',
			) );

				// margin_0px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_0px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_0px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 0px',
				) ) );

				// margin_1px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_1px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_1px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 1px',
				) ) );

				// margin_2px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_2px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_2px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 2px',
				) ) );

				// margin_3px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_3px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_3px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 3px',
				) ) );

				// margin_4px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_4px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_4px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 4px',
				) ) );

				// margin_5px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_5px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_5px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 5px',
				) ) );

				// margin_6px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_6px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_6px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 6px',
				) ) );

				// margin_7px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_7px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_7px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 7px',
				) ) );

				// margin_8px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_8px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_8px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 8px',
				) ) );

				// margin_9px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_9px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_9px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 9px',
				) ) );

				// margin_10px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_10px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_10px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 10px',
				) ) );

				// margin_11px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_11px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_11px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 11px',
				) ) );

				// margin_12px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_12px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_12px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 12px',
				) ) );

				// margin_13px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_13px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_13px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 13px',
				) ) );

				// margin_14px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_14px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_14px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 14px',
				) ) );

				// margin_15px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_15px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_15px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 15px',
				) ) );

				// margin_16px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_16px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_16px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 16px',
				) ) );

				// margin_17px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_17px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_17px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 17px',
				) ) );

				// margin_18px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_18px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_18px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 18px',
				) ) );

				// margin_19px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_19px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_19px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 19px',
				) ) );

				// margin_20px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_20px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_20px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 20px',
				) ) );

				// margin_21px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_21px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_21px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 21px',
				) ) );

				// margin_22px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_22px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_22px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 22px',
				) ) );

				// margin_23px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_23px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_23px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 23px',
				) ) );

				// margin_24px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_24px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_24px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 24px',
				) ) );

				// margin_25px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_25px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_25px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 25px',
				) ) );

				// margin_26px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_26px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_26px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 26px',
				) ) );

				// margin_27px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_27px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_27px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 27px',
				) ) );

				// margin_28px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_28px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_28px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 28px',
				) ) );

				// margin_29px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_29px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_29px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 29px',
				) ) );

				// margin_30px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_30px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_30px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 30px',
				) ) );

				// margin_31px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_31px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_31px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 31px',
				) ) );

				// margin_32px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_32px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_32px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 32px',
				) ) );

				// margin_33px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_33px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_33px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 33px',
				) ) );

				// margin_34px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_34px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_34px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 34px',
				) ) );

				// margin_35px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_35px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_35px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 35px',
				) ) );

				// margin_36px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_36px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_36px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 36px',
				) ) );

				// margin_37px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_37px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_37px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 37px',
				) ) );

				// margin_38px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_38px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_38px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 38px',
				) ) );

				// margin_39px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_39px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_39px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 39px',
				) ) );

				// margin_40px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_40px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_40px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 40px',
				) ) );

				// margin_41px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_41px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_41px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 41px',
				) ) );

				// margin_42px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_42px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_42px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 42px',
				) ) );

				// margin_43px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_43px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_43px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 43px',
				) ) );

				// margin_44px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_44px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_44px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 44px',
				) ) );

				// margin_45px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_45px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_45px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 45px',
				) ) );

				// margin_46px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_46px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_46px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 46px',
				) ) );

				// margin_47px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_47px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_47px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 47px',
				) ) );

				// margin_48px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_48px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_48px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 48px',
				) ) );

				// margin_49px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_49px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_49px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 49px',
				) ) );

				// margin_50px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_50px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_50px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 50px',
				) ) );

				// margin_51px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_51px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_51px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 51px',
				) ) );

				// margin_52px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_52px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_52px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 52px',
				) ) );

				// margin_53px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_53px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_53px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 53px',
				) ) );

				// margin_54px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_54px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_54px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 54px',
				) ) );

				// margin_55px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_55px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_55px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 55px',
				) ) );

				// margin_56px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_56px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_56px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 56px',
				) ) );

				// margin_57px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_57px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_57px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 57px',
				) ) );

				// margin_58px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_58px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_58px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 58px',
				) ) );

				// margin_59px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_59px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_59px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 59px',
				) ) );

				// margin_60px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_60px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_60px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 60px',
				) ) );

				// margin_61px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_61px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_61px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 61px',
				) ) );

				// margin_62px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_62px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_62px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 62px',
				) ) );

				// margin_63px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_63px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_63px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 63px',
				) ) );

				// margin_64px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_64px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_64px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 64px',
				) ) );

				// margin_65px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_65px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_65px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 65px',
				) ) );

				// margin_66px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_66px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_66px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 66px',
				) ) );

				// margin_67px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_67px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_67px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 67px',
				) ) );

				// margin_68px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_68px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_68px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 68px',
				) ) );

				// margin_69px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_69px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_69px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 69px',
				) ) );

				// margin_70px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_70px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_70px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 70px',
				) ) );

				// margin_71px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_71px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_71px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 71px',
				) ) );

				// margin_72px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_72px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_72px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 72px',
				) ) );

				// margin_73px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_73px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_73px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 73px',
				) ) );

				// margin_74px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_74px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_74px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 74px',
				) ) );

				// margin_75px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_75px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_75px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 75px',
				) ) );

				// margin_76px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_76px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_76px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 76px',
				) ) );

				// margin_77px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_77px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_77px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 77px',
				) ) );

				// margin_78px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_78px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_78px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 78px',
				) ) );

				// margin_79px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_79px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_79px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 79px',
				) ) );

				// margin_80px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_80px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_80px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 80px',
				) ) );

				// margin_81px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_81px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_81px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 81px',
				) ) );

				// margin_82px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_82px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_82px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 82px',
				) ) );

				// margin_83px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_83px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_83px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 83px',
				) ) );

				// margin_84px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_84px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_84px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 84px',
				) ) );

				// margin_85px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_85px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_85px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 85px',
				) ) );

				// margin_86px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_86px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_86px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 86px',
				) ) );

				// margin_87px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_87px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_87px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 87px',
				) ) );

				// margin_88px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_88px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_88px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 88px',
				) ) );

				// margin_89px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_89px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_89px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 89px',
				) ) );

				// margin_90px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_90px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_90px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 90px',
				) ) );

				// margin_91px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_91px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_91px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 91px',
				) ) );

				// margin_92px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_92px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_92px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 92px',
				) ) );

				// margin_93px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_93px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_93px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 93px',
				) ) );

				// margin_94px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_94px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_94px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 94px',
				) ) );

				// margin_95px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_95px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_95px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 95px',
				) ) );

				// margin_96px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_96px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_96px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 96px',
				) ) );

				// margin_97px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_97px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_97px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 97px',
				) ) );

				// margin_98px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_98px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_98px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 98px',
				) ) );

				// margin_99px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_99px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_99px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 99px',
				) ) );

				// margin_100px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_100px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_100px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin 100px',
				) ) );

				// margin_auto

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_auto_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_auto_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin Auto',
				) ) );

				// margin_inherit

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_inherit_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_inherit_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin Inherit',
				) ) );

				// margin_initial

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_initial_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_initial_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_margin_section',
					'label'    => 'Margin Initial',
				) ) );

			// margin_bottom

			$wp_customize->add_section( 'oxsn_helpful_css_margin_bottom_section' , array(
				'priority'       => '',
				'capability'     => 'edit_theme_options',
				'theme_supports' => '',
				'title'          => 'Margin-Bottom',
				'description'    => '',
				'panel'  => 'oxsn_helpful_css_panel',
			) );

				// margin_bottom_0px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_0px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_0px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 0px',
				) ) );

				// margin_bottom_1px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_1px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_1px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 1px',
				) ) );

				// margin_bottom_2px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_2px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_2px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 2px',
				) ) );

				// margin_bottom_3px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_3px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_3px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 3px',
				) ) );

				// margin_bottom_4px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_4px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_4px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 4px',
				) ) );

				// margin_bottom_5px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_5px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_5px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 5px',
				) ) );

				// margin_bottom_6px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_6px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_6px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 6px',
				) ) );

				// margin_bottom_7px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_7px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_7px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 7px',
				) ) );

				// margin_bottom_8px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_8px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_8px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 8px',
				) ) );

				// margin_bottom_9px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_9px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_9px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 9px',
				) ) );

				// margin_bottom_10px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_10px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_10px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 10px',
				) ) );

				// margin_bottom_11px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_11px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_11px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 11px',
				) ) );

				// margin_bottom_12px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_12px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_12px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 12px',
				) ) );

				// margin_bottom_13px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_13px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_13px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 13px',
				) ) );

				// margin_bottom_14px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_14px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_14px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 14px',
				) ) );

				// margin_bottom_15px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_15px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_15px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 15px',
				) ) );

				// margin_bottom_16px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_16px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_16px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 16px',
				) ) );

				// margin_bottom_17px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_17px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_17px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 17px',
				) ) );

				// margin_bottom_18px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_18px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_18px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 18px',
				) ) );

				// margin_bottom_19px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_19px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_19px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 19px',
				) ) );

				// margin_bottom_20px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_20px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_20px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 20px',
				) ) );

				// margin_bottom_21px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_21px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_21px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 21px',
				) ) );

				// margin_bottom_22px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_22px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_22px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 22px',
				) ) );

				// margin_bottom_23px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_23px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_23px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 23px',
				) ) );

				// margin_bottom_24px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_24px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_24px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 24px',
				) ) );

				// margin_bottom_25px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_25px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_25px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 25px',
				) ) );

				// margin_bottom_26px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_26px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_26px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 26px',
				) ) );

				// margin_bottom_27px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_27px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_27px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 27px',
				) ) );

				// margin_bottom_28px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_28px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_28px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 28px',
				) ) );

				// margin_bottom_29px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_29px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_29px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 29px',
				) ) );

				// margin_bottom_30px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_30px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_30px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 30px',
				) ) );

				// margin_bottom_31px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_31px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_31px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 31px',
				) ) );

				// margin_bottom_32px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_32px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_32px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 32px',
				) ) );

				// margin_bottom_33px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_33px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_33px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 33px',
				) ) );

				// margin_bottom_34px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_34px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_34px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 34px',
				) ) );

				// margin_bottom_35px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_35px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_35px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 35px',
				) ) );

				// margin_bottom_36px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_36px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_36px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 36px',
				) ) );

				// margin_bottom_37px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_37px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_37px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 37px',
				) ) );

				// margin_bottom_38px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_38px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_38px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 38px',
				) ) );

				// margin_bottom_39px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_39px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_39px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 39px',
				) ) );

				// margin_bottom_40px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_40px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_40px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 40px',
				) ) );

				// margin_bottom_41px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_41px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_41px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 41px',
				) ) );

				// margin_bottom_42px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_42px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_42px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 42px',
				) ) );

				// margin_bottom_43px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_43px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_43px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 43px',
				) ) );

				// margin_bottom_44px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_44px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_44px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 44px',
				) ) );

				// margin_bottom_45px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_45px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_45px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 45px',
				) ) );

				// margin_bottom_46px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_46px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_46px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 46px',
				) ) );

				// margin_bottom_47px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_47px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_47px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 47px',
				) ) );

				// margin_bottom_48px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_48px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_48px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 48px',
				) ) );

				// margin_bottom_49px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_49px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_49px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 49px',
				) ) );

				// margin_bottom_50px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_50px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_50px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 50px',
				) ) );

				// margin_bottom_51px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_51px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_51px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 51px',
				) ) );

				// margin_bottom_52px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_52px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_52px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 52px',
				) ) );

				// margin_bottom_53px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_53px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_53px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 53px',
				) ) );

				// margin_bottom_54px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_54px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_54px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 54px',
				) ) );

				// margin_bottom_55px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_55px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_55px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 55px',
				) ) );

				// margin_bottom_56px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_56px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_56px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 56px',
				) ) );

				// margin_bottom_57px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_57px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_57px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 57px',
				) ) );

				// margin_bottom_58px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_58px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_58px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 58px',
				) ) );

				// margin_bottom_59px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_59px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_59px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 59px',
				) ) );

				// margin_bottom_60px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_60px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_60px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 60px',
				) ) );

				// margin_bottom_61px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_61px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_61px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 61px',
				) ) );

				// margin_bottom_62px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_62px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_62px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 62px',
				) ) );

				// margin_bottom_63px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_63px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_63px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 63px',
				) ) );

				// margin_bottom_64px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_64px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_64px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 64px',
				) ) );

				// margin_bottom_65px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_65px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_65px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 65px',
				) ) );

				// margin_bottom_66px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_66px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_66px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 66px',
				) ) );

				// margin_bottom_67px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_67px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_67px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 67px',
				) ) );

				// margin_bottom_68px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_68px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_68px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 68px',
				) ) );

				// margin_bottom_69px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_69px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_69px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 69px',
				) ) );

				// margin_bottom_70px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_70px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_70px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 70px',
				) ) );

				// margin_bottom_71px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_71px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_71px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 71px',
				) ) );

				// margin_bottom_72px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_72px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_72px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 72px',
				) ) );

				// margin_bottom_73px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_73px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_73px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 73px',
				) ) );

				// margin_bottom_74px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_74px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_74px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 74px',
				) ) );

				// margin_bottom_75px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_75px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_75px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 75px',
				) ) );

				// margin_bottom_76px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_76px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_76px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 76px',
				) ) );

				// margin_bottom_77px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_77px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_77px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 77px',
				) ) );

				// margin_bottom_78px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_78px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_78px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 78px',
				) ) );

				// margin_bottom_79px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_79px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_79px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 79px',
				) ) );

				// margin_bottom_80px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_80px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_80px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 80px',
				) ) );

				// margin_bottom_81px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_81px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_81px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 81px',
				) ) );

				// margin_bottom_82px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_82px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_82px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 82px',
				) ) );

				// margin_bottom_83px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_83px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_83px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 83px',
				) ) );

				// margin_bottom_84px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_84px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_84px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 84px',
				) ) );

				// margin_bottom_85px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_85px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_85px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 85px',
				) ) );

				// margin_bottom_86px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_86px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_86px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 86px',
				) ) );

				// margin_bottom_87px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_87px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_87px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 87px',
				) ) );

				// margin_bottom_88px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_88px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_88px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 88px',
				) ) );

				// margin_bottom_89px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_89px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_89px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 89px',
				) ) );

				// margin_bottom_90px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_90px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_90px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 90px',
				) ) );

				// margin_bottom_91px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_91px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_91px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 91px',
				) ) );

				// margin_bottom_92px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_92px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_92px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 92px',
				) ) );

				// margin_bottom_93px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_93px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_93px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 93px',
				) ) );

				// margin_bottom_94px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_94px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_94px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 94px',
				) ) );

				// margin_bottom_95px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_95px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_95px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 95px',
				) ) );

				// margin_bottom_96px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_96px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_96px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 96px',
				) ) );

				// margin_bottom_97px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_97px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_97px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 97px',
				) ) );

				// margin_bottom_98px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_98px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_98px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 98px',
				) ) );

				// margin_bottom_99px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_99px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_99px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 99px',
				) ) );

				// margin_bottom_100px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_100px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_100px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom 100px',
				) ) );

				// margin_bottom_auto

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_auto_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_auto_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom Auto',
				) ) );

				// margin_bottom_inherit

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_inherit_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_inherit_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom Inherit',
				) ) );

				// margin_bottom_initial

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_bottom_initial_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_bottom_initial_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_margin_bottom_section',
					'label'    => 'Margin-Bottom Initial',
				) ) );

			// margin_left

			$wp_customize->add_section( 'oxsn_helpful_css_margin_left_section' , array(
				'priority'       => '',
				'capability'     => 'edit_theme_options',
				'theme_supports' => '',
				'title'          => 'Margin-Left',
				'description'    => '',
				'panel'  => 'oxsn_helpful_css_panel',
			) );

				// margin_left_0px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_0px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_0px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 0px',
				) ) );

				// margin_left_1px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_1px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_1px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 1px',
				) ) );

				// margin_left_2px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_2px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_2px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 2px',
				) ) );

				// margin_left_3px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_3px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_3px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 3px',
				) ) );

				// margin_left_4px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_4px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_4px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 4px',
				) ) );

				// margin_left_5px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_5px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_5px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 5px',
				) ) );

				// margin_left_6px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_6px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_6px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 6px',
				) ) );

				// margin_left_7px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_7px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_7px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 7px',
				) ) );

				// margin_left_8px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_8px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_8px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 8px',
				) ) );

				// margin_left_9px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_9px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_9px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 9px',
				) ) );

				// margin_left_10px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_10px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_10px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 10px',
				) ) );

				// margin_left_11px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_11px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_11px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 11px',
				) ) );

				// margin_left_12px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_12px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_12px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 12px',
				) ) );

				// margin_left_13px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_13px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_13px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 13px',
				) ) );

				// margin_left_14px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_14px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_14px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 14px',
				) ) );

				// margin_left_15px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_15px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_15px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 15px',
				) ) );

				// margin_left_16px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_16px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_16px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 16px',
				) ) );

				// margin_left_17px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_17px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_17px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 17px',
				) ) );

				// margin_left_18px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_18px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_18px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 18px',
				) ) );

				// margin_left_19px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_19px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_19px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 19px',
				) ) );

				// margin_left_20px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_20px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_20px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 20px',
				) ) );

				// margin_left_21px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_21px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_21px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 21px',
				) ) );

				// margin_left_22px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_22px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_22px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 22px',
				) ) );

				// margin_left_23px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_23px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_23px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 23px',
				) ) );

				// margin_left_24px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_24px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_24px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 24px',
				) ) );

				// margin_left_25px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_25px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_25px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 25px',
				) ) );

				// margin_left_26px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_26px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_26px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 26px',
				) ) );

				// margin_left_27px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_27px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_27px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 27px',
				) ) );

				// margin_left_28px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_28px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_28px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 28px',
				) ) );

				// margin_left_29px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_29px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_29px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 29px',
				) ) );

				// margin_left_30px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_30px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_30px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 30px',
				) ) );

				// margin_left_31px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_31px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_31px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 31px',
				) ) );

				// margin_left_32px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_32px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_32px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 32px',
				) ) );

				// margin_left_33px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_33px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_33px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 33px',
				) ) );

				// margin_left_34px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_34px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_34px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 34px',
				) ) );

				// margin_left_35px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_35px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_35px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 35px',
				) ) );

				// margin_left_36px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_36px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_36px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 36px',
				) ) );

				// margin_left_37px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_37px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_37px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 37px',
				) ) );

				// margin_left_38px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_38px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_38px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 38px',
				) ) );

				// margin_left_39px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_39px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_39px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 39px',
				) ) );

				// margin_left_40px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_40px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_40px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 40px',
				) ) );

				// margin_left_41px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_41px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_41px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 41px',
				) ) );

				// margin_left_42px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_42px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_42px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 42px',
				) ) );

				// margin_left_43px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_43px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_43px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 43px',
				) ) );

				// margin_left_44px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_44px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_44px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 44px',
				) ) );

				// margin_left_45px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_45px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_45px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 45px',
				) ) );

				// margin_left_46px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_46px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_46px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 46px',
				) ) );

				// margin_left_47px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_47px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_47px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 47px',
				) ) );

				// margin_left_48px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_48px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_48px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 48px',
				) ) );

				// margin_left_49px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_49px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_49px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 49px',
				) ) );

				// margin_left_50px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_50px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_50px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 50px',
				) ) );

				// margin_left_51px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_51px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_51px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 51px',
				) ) );

				// margin_left_52px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_52px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_52px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 52px',
				) ) );

				// margin_left_53px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_53px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_53px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 53px',
				) ) );

				// margin_left_54px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_54px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_54px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 54px',
				) ) );

				// margin_left_55px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_55px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_55px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 55px',
				) ) );

				// margin_left_56px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_56px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_56px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 56px',
				) ) );

				// margin_left_57px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_57px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_57px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 57px',
				) ) );

				// margin_left_58px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_58px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_58px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 58px',
				) ) );

				// margin_left_59px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_59px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_59px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 59px',
				) ) );

				// margin_left_60px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_60px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_60px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 60px',
				) ) );

				// margin_left_61px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_61px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_61px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 61px',
				) ) );

				// margin_left_62px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_62px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_62px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 62px',
				) ) );

				// margin_left_63px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_63px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_63px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 63px',
				) ) );

				// margin_left_64px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_64px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_64px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 64px',
				) ) );

				// margin_left_65px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_65px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_65px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 65px',
				) ) );

				// margin_left_66px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_66px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_66px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 66px',
				) ) );

				// margin_left_67px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_67px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_67px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 67px',
				) ) );

				// margin_left_68px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_68px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_68px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 68px',
				) ) );

				// margin_left_69px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_69px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_69px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 69px',
				) ) );

				// margin_left_70px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_70px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_70px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 70px',
				) ) );

				// margin_left_71px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_71px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_71px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 71px',
				) ) );

				// margin_left_72px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_72px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_72px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 72px',
				) ) );

				// margin_left_73px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_73px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_73px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 73px',
				) ) );

				// margin_left_74px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_74px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_74px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 74px',
				) ) );

				// margin_left_75px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_75px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_75px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 75px',
				) ) );

				// margin_left_76px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_76px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_76px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 76px',
				) ) );

				// margin_left_77px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_77px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_77px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 77px',
				) ) );

				// margin_left_78px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_78px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_78px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 78px',
				) ) );

				// margin_left_79px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_79px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_79px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 79px',
				) ) );

				// margin_left_80px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_80px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_80px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 80px',
				) ) );

				// margin_left_81px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_81px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_81px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 81px',
				) ) );

				// margin_left_82px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_82px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_82px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 82px',
				) ) );

				// margin_left_83px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_83px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_83px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 83px',
				) ) );

				// margin_left_84px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_84px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_84px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 84px',
				) ) );

				// margin_left_85px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_85px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_85px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 85px',
				) ) );

				// margin_left_86px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_86px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_86px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 86px',
				) ) );

				// margin_left_87px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_87px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_87px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 87px',
				) ) );

				// margin_left_88px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_88px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_88px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 88px',
				) ) );

				// margin_left_89px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_89px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_89px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 89px',
				) ) );

				// margin_left_90px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_90px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_90px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 90px',
				) ) );

				// margin_left_91px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_91px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_91px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 91px',
				) ) );

				// margin_left_92px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_92px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_92px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 92px',
				) ) );

				// margin_left_93px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_93px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_93px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 93px',
				) ) );

				// margin_left_94px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_94px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_94px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 94px',
				) ) );

				// margin_left_95px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_95px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_95px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 95px',
				) ) );

				// margin_left_96px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_96px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_96px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 96px',
				) ) );

				// margin_left_97px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_97px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_97px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 97px',
				) ) );

				// margin_left_98px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_98px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_98px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 98px',
				) ) );

				// margin_left_99px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_99px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_99px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 99px',
				) ) );

				// margin_left_100px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_100px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_100px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left 100px',
				) ) );

				// margin_left_auto

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_auto_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_auto_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left Auto',
				) ) );

				// margin_left_inherit

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_inherit_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_inherit_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left Inherit',
				) ) );

				// margin_left_initial

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_left_initial_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_left_initial_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_margin_left_section',
					'label'    => 'Margin-Left Initial',
				) ) );

			// margin_right

			$wp_customize->add_section( 'oxsn_helpful_css_margin_right_section' , array(
				'priority'       => '',
				'capability'     => 'edit_theme_options',
				'theme_supports' => '',
				'title'          => 'Margin-Right',
				'description'    => '',
				'panel'  => 'oxsn_helpful_css_panel',
			) );

				// margin_right_0px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_0px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_0px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 0px',
				) ) );

				// margin_right_1px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_1px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_1px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 1px',
				) ) );

				// margin_right_2px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_2px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_2px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 2px',
				) ) );

				// margin_right_3px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_3px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_3px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 3px',
				) ) );

				// margin_right_4px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_4px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_4px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 4px',
				) ) );

				// margin_right_5px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_5px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_5px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 5px',
				) ) );

				// margin_right_6px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_6px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_6px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 6px',
				) ) );

				// margin_right_7px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_7px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_7px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 7px',
				) ) );

				// margin_right_8px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_8px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_8px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 8px',
				) ) );

				// margin_right_9px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_9px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_9px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 9px',
				) ) );

				// margin_right_10px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_10px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_10px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 10px',
				) ) );

				// margin_right_11px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_11px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_11px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 11px',
				) ) );

				// margin_right_12px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_12px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_12px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 12px',
				) ) );

				// margin_right_13px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_13px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_13px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 13px',
				) ) );

				// margin_right_14px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_14px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_14px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 14px',
				) ) );

				// margin_right_15px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_15px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_15px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 15px',
				) ) );

				// margin_right_16px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_16px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_16px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 16px',
				) ) );

				// margin_right_17px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_17px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_17px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 17px',
				) ) );

				// margin_right_18px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_18px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_18px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 18px',
				) ) );

				// margin_right_19px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_19px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_19px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 19px',
				) ) );

				// margin_right_20px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_20px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_20px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 20px',
				) ) );

				// margin_right_21px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_21px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_21px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 21px',
				) ) );

				// margin_right_22px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_22px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_22px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 22px',
				) ) );

				// margin_right_23px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_23px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_23px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 23px',
				) ) );

				// margin_right_24px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_24px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_24px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 24px',
				) ) );

				// margin_right_25px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_25px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_25px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 25px',
				) ) );

				// margin_right_26px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_26px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_26px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 26px',
				) ) );

				// margin_right_27px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_27px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_27px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 27px',
				) ) );

				// margin_right_28px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_28px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_28px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 28px',
				) ) );

				// margin_right_29px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_29px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_29px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 29px',
				) ) );

				// margin_right_30px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_30px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_30px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 30px',
				) ) );

				// margin_right_31px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_31px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_31px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 31px',
				) ) );

				// margin_right_32px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_32px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_32px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 32px',
				) ) );

				// margin_right_33px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_33px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_33px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 33px',
				) ) );

				// margin_right_34px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_34px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_34px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 34px',
				) ) );

				// margin_right_35px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_35px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_35px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 35px',
				) ) );

				// margin_right_36px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_36px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_36px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 36px',
				) ) );

				// margin_right_37px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_37px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_37px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 37px',
				) ) );

				// margin_right_38px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_38px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_38px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 38px',
				) ) );

				// margin_right_39px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_39px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_39px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 39px',
				) ) );

				// margin_right_40px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_40px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_40px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 40px',
				) ) );

				// margin_right_41px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_41px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_41px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 41px',
				) ) );

				// margin_right_42px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_42px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_42px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 42px',
				) ) );

				// margin_right_43px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_43px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_43px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 43px',
				) ) );

				// margin_right_44px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_44px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_44px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 44px',
				) ) );

				// margin_right_45px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_45px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_45px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 45px',
				) ) );

				// margin_right_46px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_46px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_46px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 46px',
				) ) );

				// margin_right_47px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_47px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_47px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 47px',
				) ) );

				// margin_right_48px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_48px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_48px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 48px',
				) ) );

				// margin_right_49px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_49px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_49px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 49px',
				) ) );

				// margin_right_50px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_50px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_50px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 50px',
				) ) );

				// margin_right_51px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_51px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_51px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 51px',
				) ) );

				// margin_right_52px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_52px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_52px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 52px',
				) ) );

				// margin_right_53px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_53px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_53px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 53px',
				) ) );

				// margin_right_54px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_54px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_54px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 54px',
				) ) );

				// margin_right_55px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_55px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_55px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 55px',
				) ) );

				// margin_right_56px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_56px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_56px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 56px',
				) ) );

				// margin_right_57px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_57px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_57px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 57px',
				) ) );

				// margin_right_58px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_58px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_58px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 58px',
				) ) );

				// margin_right_59px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_59px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_59px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 59px',
				) ) );

				// margin_right_60px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_60px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_60px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 60px',
				) ) );

				// margin_right_61px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_61px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_61px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 61px',
				) ) );

				// margin_right_62px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_62px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_62px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 62px',
				) ) );

				// margin_right_63px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_63px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_63px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 63px',
				) ) );

				// margin_right_64px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_64px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_64px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 64px',
				) ) );

				// margin_right_65px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_65px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_65px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 65px',
				) ) );

				// margin_right_66px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_66px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_66px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 66px',
				) ) );

				// margin_right_67px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_67px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_67px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 67px',
				) ) );

				// margin_right_68px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_68px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_68px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 68px',
				) ) );

				// margin_right_69px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_69px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_69px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 69px',
				) ) );

				// margin_right_70px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_70px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_70px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 70px',
				) ) );

				// margin_right_71px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_71px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_71px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 71px',
				) ) );

				// margin_right_72px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_72px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_72px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 72px',
				) ) );

				// margin_right_73px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_73px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_73px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 73px',
				) ) );

				// margin_right_74px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_74px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_74px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 74px',
				) ) );

				// margin_right_75px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_75px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_75px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 75px',
				) ) );

				// margin_right_76px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_76px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_76px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 76px',
				) ) );

				// margin_right_77px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_77px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_77px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 77px',
				) ) );

				// margin_right_78px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_78px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_78px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 78px',
				) ) );

				// margin_right_79px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_79px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_79px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 79px',
				) ) );

				// margin_right_80px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_80px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_80px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 80px',
				) ) );

				// margin_right_81px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_81px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_81px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 81px',
				) ) );

				// margin_right_82px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_82px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_82px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 82px',
				) ) );

				// margin_right_83px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_83px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_83px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 83px',
				) ) );

				// margin_right_84px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_84px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_84px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 84px',
				) ) );

				// margin_right_85px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_85px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_85px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 85px',
				) ) );

				// margin_right_86px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_86px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_86px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 86px',
				) ) );

				// margin_right_87px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_87px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_87px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 87px',
				) ) );

				// margin_right_88px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_88px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_88px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 88px',
				) ) );

				// margin_right_89px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_89px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_89px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 89px',
				) ) );

				// margin_right_90px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_90px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_90px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 90px',
				) ) );

				// margin_right_91px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_91px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_91px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 91px',
				) ) );

				// margin_right_92px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_92px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_92px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 92px',
				) ) );

				// margin_right_93px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_93px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_93px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 93px',
				) ) );

				// margin_right_94px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_94px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_94px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 94px',
				) ) );

				// margin_right_95px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_95px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_95px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 95px',
				) ) );

				// margin_right_96px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_96px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_96px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 96px',
				) ) );

				// margin_right_97px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_97px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_97px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 97px',
				) ) );

				// margin_right_98px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_98px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_98px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 98px',
				) ) );

				// margin_right_99px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_99px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_99px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 99px',
				) ) );

				// margin_right_100px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_100px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_100px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right 100px',
				) ) );

				// margin_right_auto

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_auto_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_auto_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right Auto',
				) ) );

				// margin_right_inherit

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_inherit_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_inherit_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right Inherit',
				) ) );

				// margin_right_initial

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_right_initial_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_right_initial_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_margin_right_section',
					'label'    => 'Margin-Right Initial',
				) ) );

			// margin_top

			$wp_customize->add_section( 'oxsn_helpful_css_margin_top_section' , array(
				'priority'       => '',
				'capability'     => 'edit_theme_options',
				'theme_supports' => '',
				'title'          => 'Margin-Top',
				'description'    => '',
				'panel'  => 'oxsn_helpful_css_panel',
			) );

				// margin_top_0px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_0px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_0px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 0px',
				) ) );

				// margin_top_1px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_1px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_1px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 1px',
				) ) );

				// margin_top_2px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_2px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_2px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 2px',
				) ) );

				// margin_top_3px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_3px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_3px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 3px',
				) ) );

				// margin_top_4px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_4px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_4px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 4px',
				) ) );

				// margin_top_5px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_5px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_5px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 5px',
				) ) );

				// margin_top_6px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_6px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_6px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 6px',
				) ) );

				// margin_top_7px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_7px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_7px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 7px',
				) ) );

				// margin_top_8px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_8px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_8px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 8px',
				) ) );

				// margin_top_9px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_9px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_9px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 9px',
				) ) );

				// margin_top_10px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_10px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_10px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 10px',
				) ) );

				// margin_top_11px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_11px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_11px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 11px',
				) ) );

				// margin_top_12px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_12px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_12px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 12px',
				) ) );

				// margin_top_13px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_13px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_13px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 13px',
				) ) );

				// margin_top_14px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_14px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_14px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 14px',
				) ) );

				// margin_top_15px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_15px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_15px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 15px',
				) ) );

				// margin_top_16px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_16px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_16px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 16px',
				) ) );

				// margin_top_17px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_17px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_17px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 17px',
				) ) );

				// margin_top_18px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_18px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_18px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 18px',
				) ) );

				// margin_top_19px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_19px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_19px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 19px',
				) ) );

				// margin_top_20px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_20px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_20px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 20px',
				) ) );

				// margin_top_21px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_21px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_21px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 21px',
				) ) );

				// margin_top_22px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_22px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_22px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 22px',
				) ) );

				// margin_top_23px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_23px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_23px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 23px',
				) ) );

				// margin_top_24px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_24px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_24px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 24px',
				) ) );

				// margin_top_25px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_25px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_25px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 25px',
				) ) );

				// margin_top_26px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_26px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_26px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 26px',
				) ) );

				// margin_top_27px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_27px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_27px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 27px',
				) ) );

				// margin_top_28px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_28px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_28px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 28px',
				) ) );

				// margin_top_29px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_29px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_29px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 29px',
				) ) );

				// margin_top_30px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_30px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_30px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 30px',
				) ) );

				// margin_top_31px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_31px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_31px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 31px',
				) ) );

				// margin_top_32px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_32px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_32px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 32px',
				) ) );

				// margin_top_33px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_33px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_33px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 33px',
				) ) );

				// margin_top_34px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_34px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_34px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 34px',
				) ) );

				// margin_top_35px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_35px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_35px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 35px',
				) ) );

				// margin_top_36px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_36px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_36px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 36px',
				) ) );

				// margin_top_37px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_37px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_37px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 37px',
				) ) );

				// margin_top_38px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_38px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_38px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 38px',
				) ) );

				// margin_top_39px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_39px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_39px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 39px',
				) ) );

				// margin_top_40px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_40px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_40px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 40px',
				) ) );

				// margin_top_41px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_41px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_41px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 41px',
				) ) );

				// margin_top_42px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_42px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_42px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 42px',
				) ) );

				// margin_top_43px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_43px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_43px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 43px',
				) ) );

				// margin_top_44px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_44px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_44px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 44px',
				) ) );

				// margin_top_45px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_45px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_45px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 45px',
				) ) );

				// margin_top_46px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_46px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_46px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 46px',
				) ) );

				// margin_top_47px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_47px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_47px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 47px',
				) ) );

				// margin_top_48px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_48px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_48px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 48px',
				) ) );

				// margin_top_49px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_49px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_49px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 49px',
				) ) );

				// margin_top_50px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_50px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_50px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 50px',
				) ) );

				// margin_top_51px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_51px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_51px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 51px',
				) ) );

				// margin_top_52px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_52px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_52px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 52px',
				) ) );

				// margin_top_53px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_53px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_53px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 53px',
				) ) );

				// margin_top_54px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_54px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_54px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 54px',
				) ) );

				// margin_top_55px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_55px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_55px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 55px',
				) ) );

				// margin_top_56px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_56px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_56px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 56px',
				) ) );

				// margin_top_57px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_57px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_57px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 57px',
				) ) );

				// margin_top_58px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_58px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_58px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 58px',
				) ) );

				// margin_top_59px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_59px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_59px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 59px',
				) ) );

				// margin_top_60px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_60px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_60px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 60px',
				) ) );

				// margin_top_61px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_61px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_61px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 61px',
				) ) );

				// margin_top_62px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_62px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_62px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 62px',
				) ) );

				// margin_top_63px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_63px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_63px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 63px',
				) ) );

				// margin_top_64px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_64px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_64px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 64px',
				) ) );

				// margin_top_65px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_65px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_65px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 65px',
				) ) );

				// margin_top_66px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_66px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_66px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 66px',
				) ) );

				// margin_top_67px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_67px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_67px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 67px',
				) ) );

				// margin_top_68px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_68px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_68px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 68px',
				) ) );

				// margin_top_69px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_69px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_69px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 69px',
				) ) );

				// margin_top_70px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_70px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_70px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 70px',
				) ) );

				// margin_top_71px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_71px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_71px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 71px',
				) ) );

				// margin_top_72px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_72px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_72px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 72px',
				) ) );

				// margin_top_73px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_73px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_73px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 73px',
				) ) );

				// margin_top_74px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_74px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_74px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 74px',
				) ) );

				// margin_top_75px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_75px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_75px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 75px',
				) ) );

				// margin_top_76px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_76px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_76px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 76px',
				) ) );

				// margin_top_77px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_77px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_77px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 77px',
				) ) );

				// margin_top_78px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_78px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_78px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 78px',
				) ) );

				// margin_top_79px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_79px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_79px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 79px',
				) ) );

				// margin_top_80px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_80px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_80px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 80px',
				) ) );

				// margin_top_81px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_81px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_81px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 81px',
				) ) );

				// margin_top_82px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_82px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_82px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 82px',
				) ) );

				// margin_top_83px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_83px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_83px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 83px',
				) ) );

				// margin_top_84px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_84px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_84px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 84px',
				) ) );

				// margin_top_85px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_85px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_85px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 85px',
				) ) );

				// margin_top_86px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_86px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_86px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 86px',
				) ) );

				// margin_top_87px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_87px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_87px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 87px',
				) ) );

				// margin_top_88px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_88px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_88px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 88px',
				) ) );

				// margin_top_89px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_89px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_89px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 89px',
				) ) );

				// margin_top_90px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_90px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_90px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 90px',
				) ) );

				// margin_top_91px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_91px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_91px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 91px',
				) ) );

				// margin_top_92px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_92px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_92px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 92px',
				) ) );

				// margin_top_93px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_93px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_93px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 93px',
				) ) );

				// margin_top_94px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_94px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_94px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 94px',
				) ) );

				// margin_top_95px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_95px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_95px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 95px',
				) ) );

				// margin_top_96px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_96px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_96px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 96px',
				) ) );

				// margin_top_97px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_97px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_97px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 97px',
				) ) );

				// margin_top_98px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_98px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_98px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 98px',
				) ) );

				// margin_top_99px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_99px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_99px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 99px',
				) ) );

				// margin_top_100px

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_100px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_100px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top 100px',
				) ) );

				// margin_top_auto

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_auto_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_auto_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top Auto',
				) ) );

				// margin_top_inherit

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_inherit_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_inherit_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top Inherit',
				) ) );

				// margin_top_initial

				$wp_customize->add_setting( 'oxsn_helpful_css_margin_top_initial_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_margin_top_initial_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_margin_top_section',
					'label'    => 'Margin-Top Initial',
				) ) );

			// opacity

			$wp_customize->add_section( 'oxsn_helpful_css_opacity_section' , array(
				'priority'       => '',
				'capability'     => 'edit_theme_options',
				'theme_supports' => '',
				'title'          => 'Opacity',
				'description'    => '',
				'panel'  => 'oxsn_helpful_css_panel',
			) );

				// opacity_0_1

				$wp_customize->add_setting( 'oxsn_helpful_css_opacity_0_1_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_opacity_0_1_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_opacity_section',
					'label'    => 'Opacity 0.1',
				) ) );

				// opacity_0_2

				$wp_customize->add_setting( 'oxsn_helpful_css_opacity_0_2_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_opacity_0_2_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_opacity_section',
					'label'    => 'Opacity 0.2',
				) ) );

				// opacity_0_3

				$wp_customize->add_setting( 'oxsn_helpful_css_opacity_0_3_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_opacity_0_3_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_opacity_section',
					'label'    => 'Opacity 0.3',
				) ) );

				// opacity_0_4

				$wp_customize->add_setting( 'oxsn_helpful_css_opacity_0_4_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_opacity_0_4_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_opacity_section',
					'label'    => 'Opacity 0.4',
				) ) );

				// opacity_0_5

				$wp_customize->add_setting( 'oxsn_helpful_css_opacity_0_5_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_opacity_0_5_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_opacity_section',
					'label'    => 'Opacity 0.5',
				) ) );

				// opacity_0_6

				$wp_customize->add_setting( 'oxsn_helpful_css_opacity_0_6_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_opacity_0_6_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_opacity_section',
					'label'    => 'Opacity 0.6',
				) ) );

				// opacity_0_7

				$wp_customize->add_setting( 'oxsn_helpful_css_opacity_0_7_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_opacity_0_7_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_opacity_section',
					'label'    => 'Opacity 0.7',
				) ) );

				// opacity_0_8

				$wp_customize->add_setting( 'oxsn_helpful_css_opacity_0_8_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_opacity_0_8_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_opacity_section',
					'label'    => 'Opacity 0.8',
				) ) );

				// opacity_0_9

				$wp_customize->add_setting( 'oxsn_helpful_css_opacity_0_9_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_opacity_0_9_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_opacity_section',
					'label'    => 'Opacity 0.9',
				) ) );

				// opacity_0

				$wp_customize->add_setting( 'oxsn_helpful_css_opacity_0_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_opacity_0_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_opacity_section',
					'label'    => 'Opacity 0',
				) ) );

				// opacity_1

				$wp_customize->add_setting( 'oxsn_helpful_css_opacity_1_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_opacity_1_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_opacity_section',
					'label'    => 'Opacity 1',
				) ) );

				// opacity_inherit

				$wp_customize->add_setting( 'oxsn_helpful_css_opacity_inherit_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_opacity_inherit_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_opacity_section',
					'label'    => 'Opacity Inherit',
				) ) );

				// opacity_initial

				$wp_customize->add_setting( 'oxsn_helpful_css_opacity_initial_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_opacity_initial_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_opacity_section',
					'label'    => 'Opacity Initial',
				) ) );

			// padding

			$wp_customize->add_section( 'oxsn_helpful_css_padding_section' , array(
				'priority'       => '',
				'capability'     => 'edit_theme_options',
				'theme_supports' => '',
				'title'          => 'Padding',
				'description'    => '',
				'panel'  => 'oxsn_helpful_css_panel',
			) );

				// padding_0px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_0px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_0px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 0px',
				) ) );

				// padding_1px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_1px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_1px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 1px',
				) ) );

				// padding_2px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_2px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_2px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 2px',
				) ) );

				// padding_3px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_3px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_3px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 3px',
				) ) );

				// padding_4px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_4px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_4px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 4px',
				) ) );

				// padding_5px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_5px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_5px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 5px',
				) ) );

				// padding_6px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_6px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_6px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 6px',
				) ) );

				// padding_7px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_7px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_7px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 7px',
				) ) );

				// padding_8px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_8px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_8px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 8px',
				) ) );

				// padding_9px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_9px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_9px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 9px',
				) ) );

				// padding_10px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_10px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_10px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 10px',
				) ) );

				// padding_11px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_11px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_11px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 11px',
				) ) );

				// padding_12px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_12px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_12px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 12px',
				) ) );

				// padding_13px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_13px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_13px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 13px',
				) ) );

				// padding_14px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_14px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_14px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 14px',
				) ) );

				// padding_15px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_15px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_15px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 15px',
				) ) );

				// padding_16px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_16px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_16px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 16px',
				) ) );

				// padding_17px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_17px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_17px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 17px',
				) ) );

				// padding_18px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_18px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_18px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 18px',
				) ) );

				// padding_19px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_19px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_19px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 19px',
				) ) );

				// padding_20px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_20px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_20px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 20px',
				) ) );

				// padding_21px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_21px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_21px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 21px',
				) ) );

				// padding_22px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_22px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_22px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 22px',
				) ) );

				// padding_23px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_23px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_23px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 23px',
				) ) );

				// padding_24px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_24px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_24px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 24px',
				) ) );

				// padding_25px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_25px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_25px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 25px',
				) ) );

				// padding_26px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_26px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_26px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 26px',
				) ) );

				// padding_27px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_27px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_27px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 27px',
				) ) );

				// padding_28px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_28px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_28px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 28px',
				) ) );

				// padding_29px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_29px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_29px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 29px',
				) ) );

				// padding_30px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_30px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_30px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 30px',
				) ) );

				// padding_31px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_31px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_31px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 31px',
				) ) );

				// padding_32px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_32px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_32px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 32px',
				) ) );

				// padding_33px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_33px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_33px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 33px',
				) ) );

				// padding_34px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_34px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_34px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 34px',
				) ) );

				// padding_35px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_35px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_35px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 35px',
				) ) );

				// padding_36px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_36px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_36px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 36px',
				) ) );

				// padding_37px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_37px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_37px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 37px',
				) ) );

				// padding_38px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_38px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_38px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 38px',
				) ) );

				// padding_39px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_39px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_39px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 39px',
				) ) );

				// padding_40px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_40px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_40px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 40px',
				) ) );

				// padding_41px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_41px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_41px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 41px',
				) ) );

				// padding_42px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_42px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_42px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 42px',
				) ) );

				// padding_43px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_43px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_43px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 43px',
				) ) );

				// padding_44px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_44px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_44px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 44px',
				) ) );

				// padding_45px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_45px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_45px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 45px',
				) ) );

				// padding_46px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_46px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_46px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 46px',
				) ) );

				// padding_47px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_47px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_47px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 47px',
				) ) );

				// padding_48px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_48px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_48px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 48px',
				) ) );

				// padding_49px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_49px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_49px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 49px',
				) ) );

				// padding_50px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_50px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_50px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 50px',
				) ) );

				// padding_51px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_51px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_51px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 51px',
				) ) );

				// padding_52px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_52px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_52px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 52px',
				) ) );

				// padding_53px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_53px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_53px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 53px',
				) ) );

				// padding_54px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_54px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_54px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 54px',
				) ) );

				// padding_55px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_55px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_55px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 55px',
				) ) );

				// padding_56px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_56px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_56px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 56px',
				) ) );

				// padding_57px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_57px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_57px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 57px',
				) ) );

				// padding_58px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_58px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_58px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 58px',
				) ) );

				// padding_59px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_59px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_59px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 59px',
				) ) );

				// padding_60px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_60px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_60px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 60px',
				) ) );

				// padding_61px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_61px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_61px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 61px',
				) ) );

				// padding_62px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_62px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_62px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 62px',
				) ) );

				// padding_63px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_63px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_63px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 63px',
				) ) );

				// padding_64px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_64px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_64px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 64px',
				) ) );

				// padding_65px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_65px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_65px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 65px',
				) ) );

				// padding_66px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_66px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_66px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 66px',
				) ) );

				// padding_67px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_67px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_67px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 67px',
				) ) );

				// padding_68px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_68px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_68px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 68px',
				) ) );

				// padding_69px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_69px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_69px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 69px',
				) ) );

				// padding_70px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_70px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_70px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 70px',
				) ) );

				// padding_71px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_71px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_71px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 71px',
				) ) );

				// padding_72px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_72px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_72px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 72px',
				) ) );

				// padding_73px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_73px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_73px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 73px',
				) ) );

				// padding_74px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_74px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_74px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 74px',
				) ) );

				// padding_75px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_75px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_75px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 75px',
				) ) );

				// padding_76px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_76px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_76px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 76px',
				) ) );

				// padding_77px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_77px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_77px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 77px',
				) ) );

				// padding_78px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_78px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_78px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 78px',
				) ) );

				// padding_79px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_79px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_79px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 79px',
				) ) );

				// padding_80px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_80px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_80px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 80px',
				) ) );

				// padding_81px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_81px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_81px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 81px',
				) ) );

				// padding_82px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_82px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_82px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 82px',
				) ) );

				// padding_83px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_83px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_83px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 83px',
				) ) );

				// padding_84px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_84px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_84px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 84px',
				) ) );

				// padding_85px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_85px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_85px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 85px',
				) ) );

				// padding_86px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_86px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_86px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 86px',
				) ) );

				// padding_87px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_87px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_87px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 87px',
				) ) );

				// padding_88px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_88px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_88px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 88px',
				) ) );

				// padding_89px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_89px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_89px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 89px',
				) ) );

				// padding_90px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_90px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_90px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 90px',
				) ) );

				// padding_91px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_91px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_91px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 91px',
				) ) );

				// padding_92px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_92px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_92px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 92px',
				) ) );

				// padding_93px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_93px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_93px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 93px',
				) ) );

				// padding_94px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_94px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_94px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 94px',
				) ) );

				// padding_95px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_95px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_95px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 95px',
				) ) );

				// padding_96px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_96px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_96px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 96px',
				) ) );

				// padding_97px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_97px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_97px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 97px',
				) ) );

				// padding_98px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_98px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_98px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 98px',
				) ) );

				// padding_99px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_99px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_99px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 99px',
				) ) );

				// padding_100px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_100px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_100px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding 100px',
				) ) );

				// padding_auto

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_auto_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_auto_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding Auto',
				) ) );

				// padding_inherit

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_inherit_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_inherit_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding Inherit',
				) ) );

				// padding_initial

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_initial_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_initial_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_padding_section',
					'label'    => 'Padding Initial',
				) ) );

			// padding_bottom

			$wp_customize->add_section( 'oxsn_helpful_css_padding_bottom_section' , array(
				'priority'       => '',
				'capability'     => 'edit_theme_options',
				'theme_supports' => '',
				'title'          => 'Padding-Bottom',
				'description'    => '',
				'panel'  => 'oxsn_helpful_css_panel',
			) );

				// padding_bottom_0px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_0px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_0px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 0px',
				) ) );

				// padding_bottom_1px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_1px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_1px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 1px',
				) ) );

				// padding_bottom_2px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_2px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_2px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 2px',
				) ) );

				// padding_bottom_3px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_3px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_3px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 3px',
				) ) );

				// padding_bottom_4px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_4px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_4px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 4px',
				) ) );

				// padding_bottom_5px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_5px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_5px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 5px',
				) ) );

				// padding_bottom_6px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_6px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_6px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 6px',
				) ) );

				// padding_bottom_7px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_7px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_7px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 7px',
				) ) );

				// padding_bottom_8px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_8px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_8px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 8px',
				) ) );

				// padding_bottom_9px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_9px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_9px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 9px',
				) ) );

				// padding_bottom_10px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_10px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_10px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 10px',
				) ) );

				// padding_bottom_11px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_11px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_11px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 11px',
				) ) );

				// padding_bottom_12px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_12px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_12px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 12px',
				) ) );

				// padding_bottom_13px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_13px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_13px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 13px',
				) ) );

				// padding_bottom_14px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_14px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_14px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 14px',
				) ) );

				// padding_bottom_15px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_15px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_15px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 15px',
				) ) );

				// padding_bottom_16px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_16px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_16px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 16px',
				) ) );

				// padding_bottom_17px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_17px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_17px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 17px',
				) ) );

				// padding_bottom_18px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_18px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_18px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 18px',
				) ) );

				// padding_bottom_19px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_19px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_19px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 19px',
				) ) );

				// padding_bottom_20px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_20px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_20px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 20px',
				) ) );

				// padding_bottom_21px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_21px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_21px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 21px',
				) ) );

				// padding_bottom_22px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_22px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_22px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 22px',
				) ) );

				// padding_bottom_23px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_23px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_23px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 23px',
				) ) );

				// padding_bottom_24px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_24px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_24px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 24px',
				) ) );

				// padding_bottom_25px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_25px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_25px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 25px',
				) ) );

				// padding_bottom_26px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_26px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_26px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 26px',
				) ) );

				// padding_bottom_27px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_27px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_27px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 27px',
				) ) );

				// padding_bottom_28px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_28px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_28px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 28px',
				) ) );

				// padding_bottom_29px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_29px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_29px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 29px',
				) ) );

				// padding_bottom_30px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_30px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_30px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 30px',
				) ) );

				// padding_bottom_31px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_31px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_31px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 31px',
				) ) );

				// padding_bottom_32px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_32px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_32px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 32px',
				) ) );

				// padding_bottom_33px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_33px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_33px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 33px',
				) ) );

				// padding_bottom_34px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_34px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_34px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 34px',
				) ) );

				// padding_bottom_35px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_35px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_35px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 35px',
				) ) );

				// padding_bottom_36px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_36px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_36px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 36px',
				) ) );

				// padding_bottom_37px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_37px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_37px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 37px',
				) ) );

				// padding_bottom_38px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_38px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_38px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 38px',
				) ) );

				// padding_bottom_39px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_39px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_39px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 39px',
				) ) );

				// padding_bottom_40px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_40px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_40px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 40px',
				) ) );

				// padding_bottom_41px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_41px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_41px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 41px',
				) ) );

				// padding_bottom_42px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_42px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_42px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 42px',
				) ) );

				// padding_bottom_43px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_43px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_43px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 43px',
				) ) );

				// padding_bottom_44px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_44px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_44px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 44px',
				) ) );

				// padding_bottom_45px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_45px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_45px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 45px',
				) ) );

				// padding_bottom_46px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_46px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_46px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 46px',
				) ) );

				// padding_bottom_47px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_47px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_47px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 47px',
				) ) );

				// padding_bottom_48px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_48px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_48px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 48px',
				) ) );

				// padding_bottom_49px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_49px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_49px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 49px',
				) ) );

				// padding_bottom_50px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_50px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_50px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 50px',
				) ) );

				// padding_bottom_51px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_51px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_51px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 51px',
				) ) );

				// padding_bottom_52px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_52px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_52px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 52px',
				) ) );

				// padding_bottom_53px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_53px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_53px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 53px',
				) ) );

				// padding_bottom_54px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_54px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_54px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 54px',
				) ) );

				// padding_bottom_55px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_55px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_55px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 55px',
				) ) );

				// padding_bottom_56px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_56px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_56px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 56px',
				) ) );

				// padding_bottom_57px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_57px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_57px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 57px',
				) ) );

				// padding_bottom_58px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_58px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_58px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 58px',
				) ) );

				// padding_bottom_59px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_59px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_59px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 59px',
				) ) );

				// padding_bottom_60px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_60px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_60px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 60px',
				) ) );

				// padding_bottom_61px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_61px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_61px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 61px',
				) ) );

				// padding_bottom_62px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_62px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_62px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 62px',
				) ) );

				// padding_bottom_63px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_63px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_63px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 63px',
				) ) );

				// padding_bottom_64px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_64px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_64px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 64px',
				) ) );

				// padding_bottom_65px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_65px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_65px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 65px',
				) ) );

				// padding_bottom_66px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_66px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_66px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 66px',
				) ) );

				// padding_bottom_67px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_67px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_67px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 67px',
				) ) );

				// padding_bottom_68px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_68px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_68px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 68px',
				) ) );

				// padding_bottom_69px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_69px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_69px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 69px',
				) ) );

				// padding_bottom_70px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_70px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_70px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 70px',
				) ) );

				// padding_bottom_71px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_71px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_71px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 71px',
				) ) );

				// padding_bottom_72px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_72px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_72px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 72px',
				) ) );

				// padding_bottom_73px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_73px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_73px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 73px',
				) ) );

				// padding_bottom_74px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_74px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_74px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 74px',
				) ) );

				// padding_bottom_75px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_75px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_75px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 75px',
				) ) );

				// padding_bottom_76px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_76px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_76px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 76px',
				) ) );

				// padding_bottom_77px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_77px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_77px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 77px',
				) ) );

				// padding_bottom_78px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_78px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_78px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 78px',
				) ) );

				// padding_bottom_79px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_79px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_79px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 79px',
				) ) );

				// padding_bottom_80px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_80px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_80px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 80px',
				) ) );

				// padding_bottom_81px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_81px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_81px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 81px',
				) ) );

				// padding_bottom_82px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_82px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_82px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 82px',
				) ) );

				// padding_bottom_83px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_83px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_83px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 83px',
				) ) );

				// padding_bottom_84px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_84px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_84px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 84px',
				) ) );

				// padding_bottom_85px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_85px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_85px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 85px',
				) ) );

				// padding_bottom_86px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_86px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_86px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 86px',
				) ) );

				// padding_bottom_87px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_87px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_87px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 87px',
				) ) );

				// padding_bottom_88px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_88px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_88px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 88px',
				) ) );

				// padding_bottom_89px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_89px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_89px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 89px',
				) ) );

				// padding_bottom_90px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_90px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_90px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 90px',
				) ) );

				// padding_bottom_91px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_91px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_91px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 91px',
				) ) );

				// padding_bottom_92px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_92px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_92px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 92px',
				) ) );

				// padding_bottom_93px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_93px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_93px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 93px',
				) ) );

				// padding_bottom_94px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_94px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_94px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 94px',
				) ) );

				// padding_bottom_95px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_95px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_95px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 95px',
				) ) );

				// padding_bottom_96px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_96px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_96px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 96px',
				) ) );

				// padding_bottom_97px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_97px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_97px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 97px',
				) ) );

				// padding_bottom_98px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_98px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_98px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 98px',
				) ) );

				// padding_bottom_99px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_99px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_99px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 99px',
				) ) );

				// padding_bottom_100px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_100px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_100px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom 100px',
				) ) );

				// padding_bottom_auto

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_auto_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_auto_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom Auto',
				) ) );

				// padding_bottom_inherit

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_inherit_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_inherit_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom Inherit',
				) ) );

				// padding_bottom_initial

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_bottom_initial_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_bottom_initial_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_padding_bottom_section',
					'label'    => 'Padding-Bottom Initial',
				) ) );

			// padding_left

			$wp_customize->add_section( 'oxsn_helpful_css_padding_left_section' , array(
				'priority'       => '',
				'capability'     => 'edit_theme_options',
				'theme_supports' => '',
				'title'          => 'Padding-Left',
				'description'    => '',
				'panel'  => 'oxsn_helpful_css_panel',
			) );

				// padding_left_0px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_0px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_0px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 0px',
				) ) );

				// padding_left_1px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_1px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_1px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 1px',
				) ) );

				// padding_left_2px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_2px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_2px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 2px',
				) ) );

				// padding_left_3px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_3px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_3px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 3px',
				) ) );

				// padding_left_4px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_4px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_4px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 4px',
				) ) );

				// padding_left_5px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_5px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_5px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 5px',
				) ) );

				// padding_left_6px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_6px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_6px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 6px',
				) ) );

				// padding_left_7px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_7px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_7px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 7px',
				) ) );

				// padding_left_8px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_8px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_8px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 8px',
				) ) );

				// padding_left_9px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_9px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_9px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 9px',
				) ) );

				// padding_left_10px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_10px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_10px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 10px',
				) ) );

				// padding_left_11px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_11px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_11px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 11px',
				) ) );

				// padding_left_12px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_12px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_12px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 12px',
				) ) );

				// padding_left_13px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_13px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_13px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 13px',
				) ) );

				// padding_left_14px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_14px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_14px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 14px',
				) ) );

				// padding_left_15px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_15px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_15px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 15px',
				) ) );

				// padding_left_16px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_16px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_16px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 16px',
				) ) );

				// padding_left_17px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_17px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_17px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 17px',
				) ) );

				// padding_left_18px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_18px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_18px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 18px',
				) ) );

				// padding_left_19px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_19px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_19px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 19px',
				) ) );

				// padding_left_20px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_20px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_20px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 20px',
				) ) );

				// padding_left_21px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_21px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_21px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 21px',
				) ) );

				// padding_left_22px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_22px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_22px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 22px',
				) ) );

				// padding_left_23px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_23px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_23px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 23px',
				) ) );

				// padding_left_24px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_24px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_24px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 24px',
				) ) );

				// padding_left_25px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_25px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_25px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 25px',
				) ) );

				// padding_left_26px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_26px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_26px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 26px',
				) ) );

				// padding_left_27px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_27px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_27px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 27px',
				) ) );

				// padding_left_28px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_28px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_28px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 28px',
				) ) );

				// padding_left_29px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_29px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_29px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 29px',
				) ) );

				// padding_left_30px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_30px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_30px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 30px',
				) ) );

				// padding_left_31px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_31px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_31px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 31px',
				) ) );

				// padding_left_32px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_32px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_32px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 32px',
				) ) );

				// padding_left_33px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_33px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_33px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 33px',
				) ) );

				// padding_left_34px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_34px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_34px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 34px',
				) ) );

				// padding_left_35px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_35px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_35px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 35px',
				) ) );

				// padding_left_36px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_36px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_36px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 36px',
				) ) );

				// padding_left_37px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_37px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_37px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 37px',
				) ) );

				// padding_left_38px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_38px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_38px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 38px',
				) ) );

				// padding_left_39px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_39px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_39px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 39px',
				) ) );

				// padding_left_40px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_40px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_40px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 40px',
				) ) );

				// padding_left_41px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_41px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_41px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 41px',
				) ) );

				// padding_left_42px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_42px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_42px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 42px',
				) ) );

				// padding_left_43px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_43px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_43px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 43px',
				) ) );

				// padding_left_44px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_44px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_44px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 44px',
				) ) );

				// padding_left_45px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_45px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_45px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 45px',
				) ) );

				// padding_left_46px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_46px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_46px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 46px',
				) ) );

				// padding_left_47px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_47px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_47px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 47px',
				) ) );

				// padding_left_48px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_48px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_48px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 48px',
				) ) );

				// padding_left_49px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_49px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_49px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 49px',
				) ) );

				// padding_left_50px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_50px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_50px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 50px',
				) ) );

				// padding_left_51px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_51px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_51px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 51px',
				) ) );

				// padding_left_52px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_52px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_52px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 52px',
				) ) );

				// padding_left_53px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_53px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_53px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 53px',
				) ) );

				// padding_left_54px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_54px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_54px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 54px',
				) ) );

				// padding_left_55px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_55px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_55px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 55px',
				) ) );

				// padding_left_56px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_56px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_56px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 56px',
				) ) );

				// padding_left_57px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_57px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_57px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 57px',
				) ) );

				// padding_left_58px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_58px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_58px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 58px',
				) ) );

				// padding_left_59px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_59px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_59px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 59px',
				) ) );

				// padding_left_60px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_60px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_60px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 60px',
				) ) );

				// padding_left_61px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_61px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_61px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 61px',
				) ) );

				// padding_left_62px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_62px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_62px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 62px',
				) ) );

				// padding_left_63px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_63px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_63px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 63px',
				) ) );

				// padding_left_64px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_64px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_64px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 64px',
				) ) );

				// padding_left_65px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_65px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_65px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 65px',
				) ) );

				// padding_left_66px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_66px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_66px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 66px',
				) ) );

				// padding_left_67px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_67px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_67px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 67px',
				) ) );

				// padding_left_68px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_68px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_68px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 68px',
				) ) );

				// padding_left_69px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_69px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_69px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 69px',
				) ) );

				// padding_left_70px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_70px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_70px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 70px',
				) ) );

				// padding_left_71px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_71px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_71px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 71px',
				) ) );

				// padding_left_72px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_72px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_72px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 72px',
				) ) );

				// padding_left_73px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_73px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_73px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 73px',
				) ) );

				// padding_left_74px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_74px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_74px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 74px',
				) ) );

				// padding_left_75px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_75px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_75px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 75px',
				) ) );

				// padding_left_76px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_76px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_76px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 76px',
				) ) );

				// padding_left_77px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_77px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_77px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 77px',
				) ) );

				// padding_left_78px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_78px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_78px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 78px',
				) ) );

				// padding_left_79px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_79px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_79px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 79px',
				) ) );

				// padding_left_80px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_80px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_80px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 80px',
				) ) );

				// padding_left_81px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_81px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_81px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 81px',
				) ) );

				// padding_left_82px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_82px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_82px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 82px',
				) ) );

				// padding_left_83px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_83px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_83px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 83px',
				) ) );

				// padding_left_84px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_84px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_84px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 84px',
				) ) );

				// padding_left_85px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_85px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_85px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 85px',
				) ) );

				// padding_left_86px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_86px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_86px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 86px',
				) ) );

				// padding_left_87px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_87px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_87px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 87px',
				) ) );

				// padding_left_88px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_88px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_88px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 88px',
				) ) );

				// padding_left_89px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_89px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_89px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 89px',
				) ) );

				// padding_left_90px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_90px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_90px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 90px',
				) ) );

				// padding_left_91px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_91px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_91px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 91px',
				) ) );

				// padding_left_92px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_92px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_92px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 92px',
				) ) );

				// padding_left_93px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_93px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_93px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 93px',
				) ) );

				// padding_left_94px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_94px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_94px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 94px',
				) ) );

				// padding_left_95px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_95px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_95px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 95px',
				) ) );

				// padding_left_96px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_96px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_96px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 96px',
				) ) );

				// padding_left_97px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_97px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_97px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 97px',
				) ) );

				// padding_left_98px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_98px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_98px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 98px',
				) ) );

				// padding_left_99px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_99px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_99px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 99px',
				) ) );

				// padding_left_100px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_100px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_100px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left 100px',
				) ) );

				// padding_left_auto

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_auto_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_auto_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left Auto',
				) ) );

				// padding_left_inherit

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_inherit_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_inherit_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left Inherit',
				) ) );

				// padding_left_initial

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_left_initial_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_left_initial_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_padding_left_section',
					'label'    => 'Padding-Left Initial',
				) ) );

			// padding_right

			$wp_customize->add_section( 'oxsn_helpful_css_padding_right_section' , array(
				'priority'       => '',
				'capability'     => 'edit_theme_options',
				'theme_supports' => '',
				'title'          => 'Padding-Right',
				'description'    => '',
				'panel'  => 'oxsn_helpful_css_panel',
			) );

				// padding_right_0px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_0px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_0px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 0px',
				) ) );

				// padding_right_1px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_1px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_1px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 1px',
				) ) );

				// padding_right_2px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_2px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_2px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 2px',
				) ) );

				// padding_right_3px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_3px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_3px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 3px',
				) ) );

				// padding_right_4px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_4px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_4px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 4px',
				) ) );

				// padding_right_5px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_5px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_5px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 5px',
				) ) );

				// padding_right_6px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_6px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_6px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 6px',
				) ) );

				// padding_right_7px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_7px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_7px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 7px',
				) ) );

				// padding_right_8px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_8px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_8px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 8px',
				) ) );

				// padding_right_9px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_9px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_9px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 9px',
				) ) );

				// padding_right_10px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_10px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_10px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 10px',
				) ) );

				// padding_right_11px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_11px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_11px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 11px',
				) ) );

				// padding_right_12px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_12px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_12px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 12px',
				) ) );

				// padding_right_13px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_13px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_13px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 13px',
				) ) );

				// padding_right_14px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_14px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_14px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 14px',
				) ) );

				// padding_right_15px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_15px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_15px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 15px',
				) ) );

				// padding_right_16px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_16px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_16px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 16px',
				) ) );

				// padding_right_17px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_17px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_17px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 17px',
				) ) );

				// padding_right_18px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_18px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_18px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 18px',
				) ) );

				// padding_right_19px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_19px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_19px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 19px',
				) ) );

				// padding_right_20px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_20px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_20px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 20px',
				) ) );

				// padding_right_21px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_21px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_21px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 21px',
				) ) );

				// padding_right_22px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_22px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_22px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 22px',
				) ) );

				// padding_right_23px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_23px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_23px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 23px',
				) ) );

				// padding_right_24px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_24px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_24px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 24px',
				) ) );

				// padding_right_25px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_25px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_25px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 25px',
				) ) );

				// padding_right_26px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_26px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_26px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 26px',
				) ) );

				// padding_right_27px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_27px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_27px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 27px',
				) ) );

				// padding_right_28px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_28px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_28px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 28px',
				) ) );

				// padding_right_29px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_29px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_29px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 29px',
				) ) );

				// padding_right_30px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_30px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_30px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 30px',
				) ) );

				// padding_right_31px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_31px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_31px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 31px',
				) ) );

				// padding_right_32px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_32px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_32px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 32px',
				) ) );

				// padding_right_33px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_33px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_33px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 33px',
				) ) );

				// padding_right_34px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_34px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_34px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 34px',
				) ) );

				// padding_right_35px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_35px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_35px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 35px',
				) ) );

				// padding_right_36px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_36px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_36px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 36px',
				) ) );

				// padding_right_37px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_37px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_37px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 37px',
				) ) );

				// padding_right_38px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_38px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_38px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 38px',
				) ) );

				// padding_right_39px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_39px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_39px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 39px',
				) ) );

				// padding_right_40px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_40px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_40px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 40px',
				) ) );

				// padding_right_41px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_41px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_41px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 41px',
				) ) );

				// padding_right_42px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_42px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_42px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 42px',
				) ) );

				// padding_right_43px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_43px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_43px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 43px',
				) ) );

				// padding_right_44px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_44px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_44px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 44px',
				) ) );

				// padding_right_45px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_45px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_45px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 45px',
				) ) );

				// padding_right_46px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_46px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_46px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 46px',
				) ) );

				// padding_right_47px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_47px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_47px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 47px',
				) ) );

				// padding_right_48px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_48px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_48px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 48px',
				) ) );

				// padding_right_49px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_49px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_49px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 49px',
				) ) );

				// padding_right_50px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_50px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_50px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 50px',
				) ) );

				// padding_right_51px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_51px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_51px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 51px',
				) ) );

				// padding_right_52px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_52px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_52px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 52px',
				) ) );

				// padding_right_53px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_53px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_53px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 53px',
				) ) );

				// padding_right_54px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_54px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_54px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 54px',
				) ) );

				// padding_right_55px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_55px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_55px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 55px',
				) ) );

				// padding_right_56px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_56px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_56px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 56px',
				) ) );

				// padding_right_57px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_57px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_57px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 57px',
				) ) );

				// padding_right_58px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_58px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_58px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 58px',
				) ) );

				// padding_right_59px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_59px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_59px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 59px',
				) ) );

				// padding_right_60px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_60px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_60px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 60px',
				) ) );

				// padding_right_61px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_61px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_61px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 61px',
				) ) );

				// padding_right_62px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_62px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_62px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 62px',
				) ) );

				// padding_right_63px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_63px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_63px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 63px',
				) ) );

				// padding_right_64px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_64px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_64px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 64px',
				) ) );

				// padding_right_65px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_65px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_65px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 65px',
				) ) );

				// padding_right_66px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_66px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_66px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 66px',
				) ) );

				// padding_right_67px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_67px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_67px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 67px',
				) ) );

				// padding_right_68px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_68px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_68px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 68px',
				) ) );

				// padding_right_69px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_69px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_69px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 69px',
				) ) );

				// padding_right_70px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_70px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_70px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 70px',
				) ) );

				// padding_right_71px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_71px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_71px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 71px',
				) ) );

				// padding_right_72px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_72px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_72px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 72px',
				) ) );

				// padding_right_73px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_73px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_73px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 73px',
				) ) );

				// padding_right_74px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_74px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_74px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 74px',
				) ) );

				// padding_right_75px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_75px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_75px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 75px',
				) ) );

				// padding_right_76px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_76px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_76px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 76px',
				) ) );

				// padding_right_77px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_77px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_77px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 77px',
				) ) );

				// padding_right_78px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_78px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_78px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 78px',
				) ) );

				// padding_right_79px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_79px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_79px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 79px',
				) ) );

				// padding_right_80px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_80px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_80px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 80px',
				) ) );

				// padding_right_81px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_81px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_81px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 81px',
				) ) );

				// padding_right_82px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_82px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_82px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 82px',
				) ) );

				// padding_right_83px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_83px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_83px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 83px',
				) ) );

				// padding_right_84px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_84px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_84px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 84px',
				) ) );

				// padding_right_85px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_85px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_85px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 85px',
				) ) );

				// padding_right_86px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_86px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_86px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 86px',
				) ) );

				// padding_right_87px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_87px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_87px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 87px',
				) ) );

				// padding_right_88px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_88px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_88px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 88px',
				) ) );

				// padding_right_89px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_89px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_89px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 89px',
				) ) );

				// padding_right_90px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_90px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_90px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 90px',
				) ) );

				// padding_right_91px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_91px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_91px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 91px',
				) ) );

				// padding_right_92px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_92px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_92px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 92px',
				) ) );

				// padding_right_93px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_93px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_93px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 93px',
				) ) );

				// padding_right_94px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_94px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_94px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 94px',
				) ) );

				// padding_right_95px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_95px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_95px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 95px',
				) ) );

				// padding_right_96px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_96px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_96px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 96px',
				) ) );

				// padding_right_97px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_97px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_97px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 97px',
				) ) );

				// padding_right_98px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_98px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_98px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 98px',
				) ) );

				// padding_right_99px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_99px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_99px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 99px',
				) ) );

				// padding_right_100px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_100px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_100px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right 100px',
				) ) );

				// padding_right_auto

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_auto_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_auto_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right Auto',
				) ) );

				// padding_right_inherit

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_inherit_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_inherit_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right Inherit',
				) ) );

				// padding_right_initial

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_right_initial_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_right_initial_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_padding_right_section',
					'label'    => 'Padding-Right Initial',
				) ) );

			// padding_top

			$wp_customize->add_section( 'oxsn_helpful_css_padding_top_section' , array(
				'priority'       => '',
				'capability'     => 'edit_theme_options',
				'theme_supports' => '',
				'title'          => 'Padding-Top',
				'description'    => '',
				'panel'  => 'oxsn_helpful_css_panel',
			) );

				// padding_top_0px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_0px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_0px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 0px',
				) ) );

				// padding_top_1px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_1px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_1px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 1px',
				) ) );

				// padding_top_2px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_2px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_2px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 2px',
				) ) );

				// padding_top_3px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_3px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_3px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 3px',
				) ) );

				// padding_top_4px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_4px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_4px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 4px',
				) ) );

				// padding_top_5px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_5px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_5px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 5px',
				) ) );

				// padding_top_6px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_6px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_6px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 6px',
				) ) );

				// padding_top_7px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_7px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_7px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 7px',
				) ) );

				// padding_top_8px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_8px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_8px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 8px',
				) ) );

				// padding_top_9px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_9px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_9px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 9px',
				) ) );

				// padding_top_10px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_10px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_10px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 10px',
				) ) );

				// padding_top_11px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_11px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_11px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 11px',
				) ) );

				// padding_top_12px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_12px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_12px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 12px',
				) ) );

				// padding_top_13px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_13px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_13px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 13px',
				) ) );

				// padding_top_14px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_14px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_14px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 14px',
				) ) );

				// padding_top_15px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_15px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_15px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 15px',
				) ) );

				// padding_top_16px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_16px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_16px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 16px',
				) ) );

				// padding_top_17px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_17px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_17px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 17px',
				) ) );

				// padding_top_18px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_18px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_18px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 18px',
				) ) );

				// padding_top_19px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_19px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_19px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 19px',
				) ) );

				// padding_top_20px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_20px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_20px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 20px',
				) ) );

				// padding_top_21px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_21px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_21px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 21px',
				) ) );

				// padding_top_22px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_22px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_22px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 22px',
				) ) );

				// padding_top_23px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_23px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_23px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 23px',
				) ) );

				// padding_top_24px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_24px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_24px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 24px',
				) ) );

				// padding_top_25px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_25px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_25px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 25px',
				) ) );

				// padding_top_26px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_26px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_26px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 26px',
				) ) );

				// padding_top_27px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_27px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_27px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 27px',
				) ) );

				// padding_top_28px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_28px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_28px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 28px',
				) ) );

				// padding_top_29px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_29px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_29px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 29px',
				) ) );

				// padding_top_30px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_30px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_30px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 30px',
				) ) );

				// padding_top_31px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_31px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_31px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 31px',
				) ) );

				// padding_top_32px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_32px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_32px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 32px',
				) ) );

				// padding_top_33px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_33px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_33px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 33px',
				) ) );

				// padding_top_34px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_34px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_34px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 34px',
				) ) );

				// padding_top_35px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_35px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_35px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 35px',
				) ) );

				// padding_top_36px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_36px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_36px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 36px',
				) ) );

				// padding_top_37px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_37px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_37px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 37px',
				) ) );

				// padding_top_38px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_38px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_38px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 38px',
				) ) );

				// padding_top_39px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_39px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_39px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 39px',
				) ) );

				// padding_top_40px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_40px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_40px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 40px',
				) ) );

				// padding_top_41px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_41px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_41px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 41px',
				) ) );

				// padding_top_42px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_42px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_42px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 42px',
				) ) );

				// padding_top_43px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_43px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_43px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 43px',
				) ) );

				// padding_top_44px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_44px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_44px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 44px',
				) ) );

				// padding_top_45px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_45px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_45px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 45px',
				) ) );

				// padding_top_46px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_46px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_46px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 46px',
				) ) );

				// padding_top_47px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_47px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_47px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 47px',
				) ) );

				// padding_top_48px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_48px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_48px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 48px',
				) ) );

				// padding_top_49px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_49px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_49px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 49px',
				) ) );

				// padding_top_50px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_50px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_50px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 50px',
				) ) );

				// padding_top_51px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_51px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_51px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 51px',
				) ) );

				// padding_top_52px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_52px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_52px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 52px',
				) ) );

				// padding_top_53px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_53px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_53px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 53px',
				) ) );

				// padding_top_54px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_54px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_54px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 54px',
				) ) );

				// padding_top_55px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_55px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_55px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 55px',
				) ) );

				// padding_top_56px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_56px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_56px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 56px',
				) ) );

				// padding_top_57px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_57px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_57px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 57px',
				) ) );

				// padding_top_58px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_58px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_58px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 58px',
				) ) );

				// padding_top_59px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_59px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_59px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 59px',
				) ) );

				// padding_top_60px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_60px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_60px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 60px',
				) ) );

				// padding_top_61px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_61px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_61px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 61px',
				) ) );

				// padding_top_62px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_62px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_62px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 62px',
				) ) );

				// padding_top_63px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_63px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_63px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 63px',
				) ) );

				// padding_top_64px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_64px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_64px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 64px',
				) ) );

				// padding_top_65px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_65px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_65px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 65px',
				) ) );

				// padding_top_66px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_66px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_66px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 66px',
				) ) );

				// padding_top_67px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_67px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_67px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 67px',
				) ) );

				// padding_top_68px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_68px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_68px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 68px',
				) ) );

				// padding_top_69px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_69px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_69px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 69px',
				) ) );

				// padding_top_70px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_70px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_70px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 70px',
				) ) );

				// padding_top_71px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_71px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_71px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 71px',
				) ) );

				// padding_top_72px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_72px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_72px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 72px',
				) ) );

				// padding_top_73px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_73px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_73px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 73px',
				) ) );

				// padding_top_74px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_74px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_74px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 74px',
				) ) );

				// padding_top_75px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_75px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_75px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 75px',
				) ) );

				// padding_top_76px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_76px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_76px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 76px',
				) ) );

				// padding_top_77px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_77px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_77px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 77px',
				) ) );

				// padding_top_78px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_78px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_78px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 78px',
				) ) );

				// padding_top_79px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_79px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_79px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 79px',
				) ) );

				// padding_top_80px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_80px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_80px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 80px',
				) ) );

				// padding_top_81px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_81px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_81px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 81px',
				) ) );

				// padding_top_82px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_82px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_82px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 82px',
				) ) );

				// padding_top_83px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_83px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_83px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 83px',
				) ) );

				// padding_top_84px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_84px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_84px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 84px',
				) ) );

				// padding_top_85px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_85px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_85px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 85px',
				) ) );

				// padding_top_86px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_86px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_86px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 86px',
				) ) );

				// padding_top_87px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_87px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_87px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 87px',
				) ) );

				// padding_top_88px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_88px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_88px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 88px',
				) ) );

				// padding_top_89px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_89px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_89px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 89px',
				) ) );

				// padding_top_90px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_90px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_90px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 90px',
				) ) );

				// padding_top_91px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_91px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_91px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 91px',
				) ) );

				// padding_top_92px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_92px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_92px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 92px',
				) ) );

				// padding_top_93px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_93px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_93px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 93px',
				) ) );

				// padding_top_94px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_94px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_94px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 94px',
				) ) );

				// padding_top_95px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_95px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_95px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 95px',
				) ) );

				// padding_top_96px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_96px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_96px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 96px',
				) ) );

				// padding_top_97px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_97px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_97px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 97px',
				) ) );

				// padding_top_98px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_98px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_98px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 98px',
				) ) );

				// padding_top_99px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_99px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_99px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 99px',
				) ) );

				// padding_top_100px

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_100px_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_100px_control', array(
					'type'     => 'checkbox',
					'pxiority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top 100px',
				) ) );

				// padding_top_auto

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_auto_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_auto_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top Auto',
				) ) );

				// padding_top_inherit

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_inherit_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_inherit_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top Inherit',
				) ) );

				// padding_top_initial

				$wp_customize->add_setting( 'oxsn_helpful_css_padding_top_initial_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_padding_top_initial_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_padding_top_section',
					'label'    => 'Padding-Top Initial',
				) ) );

			// position

			$wp_customize->add_section( 'oxsn_helpful_css_position_section' , array(
				'priority'       => '',
				'capability'     => 'edit_theme_options',
				'theme_supports' => '',
				'title'          => 'Position',
				'description'    => '',
				'panel'  => 'oxsn_helpful_css_panel',
			) );

				// position_absolute

				$wp_customize->add_setting( 'oxsn_helpful_css_position_absolute_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_position_absolute_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_position_section',
					'label'    => 'Position Absolute',
				) ) );

				// position_fixed

				$wp_customize->add_setting( 'oxsn_helpful_css_position_fixed_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_position_fixed_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_position_section',
					'label'    => 'Position Fixed',
				) ) );

				// position_inherit

				$wp_customize->add_setting( 'oxsn_helpful_css_position_inherit_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_position_inherit_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_position_section',
					'label'    => 'Position Inherit',
				) ) );

				// position_initial

				$wp_customize->add_setting( 'oxsn_helpful_css_position_initial_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_position_initial_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_position_section',
					'label'    => 'Position Initial',
				) ) );

				// position_relative

				$wp_customize->add_setting( 'oxsn_helpful_css_position_relative_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_position_relative_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_position_section',
					'label'    => 'Position Relative',
				) ) );

				// position_static

				$wp_customize->add_setting( 'oxsn_helpful_css_position_static_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_position_static_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_position_section',
					'label'    => 'Position Static',
				) ) );

			// text_align

			$wp_customize->add_section( 'oxsn_helpful_css_text_align_section' , array(
				'priority'       => '',
				'capability'     => 'edit_theme_options',
				'theme_supports' => '',
				'title'          => 'Text-Align',
				'description'    => '',
				'panel'  => 'oxsn_helpful_css_panel',
			) );

				// text_align_center

				$wp_customize->add_setting( 'oxsn_helpful_css_text_align_center_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_text_align_center_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_text_align_section',
					'label'    => 'Text-Align Center',
				) ) );

				// text_align_inherit

				$wp_customize->add_setting( 'oxsn_helpful_css_text_align_inherit_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_text_align_inherit_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_text_align_section',
					'label'    => 'Text-Align Inherit',
				) ) );

				// text_align_initial

				$wp_customize->add_setting( 'oxsn_helpful_css_text_align_initial_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_text_align_initial_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_text_align_section',
					'label'    => 'Text-Align Initial',
				) ) );

				// text_align_justify

				$wp_customize->add_setting( 'oxsn_helpful_css_text_align_justify_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_text_align_justify_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_text_align_section',
					'label'    => 'Text-Align Justify',
				) ) );

				// text_align_left

				$wp_customize->add_setting( 'oxsn_helpful_css_text_align_left_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_text_align_left_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_text_align_section',
					'label'    => 'Text-Align Left',
				) ) );

				// text_align_right

				$wp_customize->add_setting( 'oxsn_helpful_css_text_align_right_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_text_align_right_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_text_align_section',
					'label'    => 'Text-Align Right',
				) ) );

			// vertical_align

			$wp_customize->add_section( 'oxsn_helpful_css_vertical_align_section' , array(
				'priority'       => '',
				'capability'     => 'edit_theme_options',
				'theme_supports' => '',
				'title'          => 'Vertical-Align',
				'description'    => '',
				'panel'  => 'oxsn_helpful_css_panel',
			) );

				// vertical_align_baseline

				$wp_customize->add_setting( 'oxsn_helpful_css_vertical_align_baseline_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_vertical_align_baseline_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_vertical_align_section',
					'label'    => 'Vertical-Align Baseline',
				) ) );

				// vertical_align_bottom

				$wp_customize->add_setting( 'oxsn_helpful_css_vertical_align_bottom_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_vertical_align_bottom_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_vertical_align_section',
					'label'    => 'Vertical-Align Bottom',
				) ) );

				// vertical_align_inherit

				$wp_customize->add_setting( 'oxsn_helpful_css_vertical_align_inherit_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_vertical_align_inherit_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_vertical_align_section',
					'label'    => 'Vertical-Align Inherit',
				) ) );

				// vertical_align_initial

				$wp_customize->add_setting( 'oxsn_helpful_css_vertical_align_initial_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_vertical_align_initial_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_vertical_align_section',
					'label'    => 'Vertical-Align Initial',
				) ) );

				// vertical_align_middle

				$wp_customize->add_setting( 'oxsn_helpful_css_vertical_align_middle_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_vertical_align_middle_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_vertical_align_section',
					'label'    => 'Vertical-Align Middle',
				) ) );

				// vertical_align_sub

				$wp_customize->add_setting( 'oxsn_helpful_css_vertical_align_sub_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_vertical_align_sub_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_vertical_align_section',
					'label'    => 'Vertical-Align Sub',
				) ) );

				// vertical_align_super

				$wp_customize->add_setting( 'oxsn_helpful_css_vertical_align_super_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_vertical_align_super_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_vertical_align_section',
					'label'    => 'Vertical-Align Super',
				) ) );

				// vertical_align_text_bottom

				$wp_customize->add_setting( 'oxsn_helpful_css_vertical_align_text_bottom_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_vertical_align_text_bottom_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_vertical_align_section',
					'label'    => 'Vertical-Align Text-Bottom',
				) ) );

				// vertical_align_text_top

				$wp_customize->add_setting( 'oxsn_helpful_css_vertical_align_text_top_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_vertical_align_text_top_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_vertical_align_section',
					'label'    => 'Vertical-Align Text-Top',
				) ) );

				// vertical_align_top

				$wp_customize->add_setting( 'oxsn_helpful_css_vertical_align_top_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_vertical_align_top_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_vertical_align_section',
					'label'    => 'Vertical-Align Top',
				) ) );

			// visibility

			$wp_customize->add_section( 'oxsn_helpful_css_visibility_section' , array(
				'priority'       => '',
				'capability'     => 'edit_theme_options',
				'theme_supports' => '',
				'title'          => 'Visibility',
				'description'    => '',
				'panel'  => 'oxsn_helpful_css_panel',
			) );

				// visibility_collapse

				$wp_customize->add_setting( 'oxsn_helpful_css_visibility_collapse_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_visibility_collapse_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_visibility_section',
					'label'    => 'Visibility Collapse',
				) ) );

				// visibility_hidden

				$wp_customize->add_setting( 'oxsn_helpful_css_visibility_hidden_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_visibility_hidden_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_visibility_section',
					'label'    => 'Visibility Hidden',
				) ) );

				// visibility_inherit

				$wp_customize->add_setting( 'oxsn_helpful_css_visibility_inherit_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_visibility_inherit_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_visibility_section',
					'label'    => 'Visibility Inherit',
				) ) );

				// visibility_initial

				$wp_customize->add_setting( 'oxsn_helpful_css_visibility_initial_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_visibility_initial_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_visibility_section',
					'label'    => 'Visibility Initial',
				) ) );

				// visibility_visible

				$wp_customize->add_setting( 'oxsn_helpful_css_visibility_visible_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_visibility_visible_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_visibility_section',
					'label'    => 'Visibility Visible',
				) ) );

			// width

			$wp_customize->add_section( 'oxsn_helpful_css_width_section' , array(
				'priority'       => '',
				'capability'     => 'edit_theme_options',
				'theme_supports' => '',
				'title'          => 'Width',
				'description'    => '',
				'panel'  => 'oxsn_helpful_css_panel',
			) );

				// width_0pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_0pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_0pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 0%',
				) ) );

				// width_1pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_1pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_1pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 1%',
				) ) );

				// width_2pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_2pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_2pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 2%',
				) ) );

				// width_3pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_3pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_3pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 3%',
				) ) );

				// width_4pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_4pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_4pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 4%',
				) ) );

				// width_5pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_5pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_5pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 5%',
				) ) );

				// width_6pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_6pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_6pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 6%',
				) ) );

				// width_7pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_7pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_7pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 7%',
				) ) );

				// width_8pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_8pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_8pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 8%',
				) ) );

				// width_9pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_9pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_9pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 9%',
				) ) );

				// width_10pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_10pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_10pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 10%',
				) ) );

				// width_11pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_11pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_11pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 11%',
				) ) );

				// width_12pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_12pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_12pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 12%',
				) ) );

				// width_13pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_13pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_13pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 13%',
				) ) );

				// width_14pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_14pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_14pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 14%',
				) ) );

				// width_15pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_15pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_15pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 15%',
				) ) );

				// width_16pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_16pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_16pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 16%',
				) ) );

				// width_17pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_17pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_17pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 17%',
				) ) );

				// width_18pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_18pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_18pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 18%',
				) ) );

				// width_19pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_19pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_19pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 19%',
				) ) );

				// width_20pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_20pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_20pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 20%',
				) ) );

				// width_21pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_21pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_21pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 21%',
				) ) );

				// width_22pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_22pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_22pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 22%',
				) ) );

				// width_23pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_23pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_23pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 23%',
				) ) );

				// width_24pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_24pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_24pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 24%',
				) ) );

				// width_25pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_25pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_25pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 25%',
				) ) );

				// width_26pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_26pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_26pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 26%',
				) ) );

				// width_27pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_27pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_27pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 27%',
				) ) );

				// width_28pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_28pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_28pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 28%',
				) ) );

				// width_29pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_29pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_29pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 29%',
				) ) );

				// width_30pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_30pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_30pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 30%',
				) ) );

				// width_31pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_31pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_31pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 31%',
				) ) );

				// width_32pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_32pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_32pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 32%',
				) ) );

				// width_33pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_33pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_33pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 33%',
				) ) );

				// width_34pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_34pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_34pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 34%',
				) ) );

				// width_35pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_35pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_35pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 35%',
				) ) );

				// width_36pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_36pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_36pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 36%',
				) ) );

				// width_37pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_37pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_37pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 37%',
				) ) );

				// width_38pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_38pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_38pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 38%',
				) ) );

				// width_39pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_39pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_39pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 39%',
				) ) );

				// width_40pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_40pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_40pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 40%',
				) ) );

				// width_41pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_41pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_41pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 41%',
				) ) );

				// width_42pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_42pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_42pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 42%',
				) ) );

				// width_43pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_43pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_43pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 43%',
				) ) );

				// width_44pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_44pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_44pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 44%',
				) ) );

				// width_45pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_45pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_45pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 45%',
				) ) );

				// width_46pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_46pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_46pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 46%',
				) ) );

				// width_47pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_47pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_47pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 47%',
				) ) );

				// width_48pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_48pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_48pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 48%',
				) ) );

				// width_49pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_49pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_49pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 49%',
				) ) );

				// width_50pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_50pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_50pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 50%',
				) ) );

				// width_51pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_51pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_51pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 51%',
				) ) );

				// width_52pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_52pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_52pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 52%',
				) ) );

				// width_53pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_53pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_53pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 53%',
				) ) );

				// width_54pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_54pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_54pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 54%',
				) ) );

				// width_55pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_55pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_55pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 55%',
				) ) );

				// width_56pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_56pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_56pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 56%',
				) ) );

				// width_57pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_57pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_57pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 57%',
				) ) );

				// width_58pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_58pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_58pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 58%',
				) ) );

				// width_59pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_59pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_59pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 59%',
				) ) );

				// width_60pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_60pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_60pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 60%',
				) ) );

				// width_61pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_61pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_61pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 61%',
				) ) );

				// width_62pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_62pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_62pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 62%',
				) ) );

				// width_63pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_63pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_63pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 63%',
				) ) );

				// width_64pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_64pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_64pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 64%',
				) ) );

				// width_65pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_65pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_65pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 65%',
				) ) );

				// width_66pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_66pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_66pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 66%',
				) ) );

				// width_67pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_67pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_67pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 67%',
				) ) );

				// width_68pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_68pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_68pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 68%',
				) ) );

				// width_69pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_69pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_69pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 69%',
				) ) );

				// width_70pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_70pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_70pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 70%',
				) ) );

				// width_71pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_71pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_71pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 71%',
				) ) );

				// width_72pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_72pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_72pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 72%',
				) ) );

				// width_73pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_73pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_73pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 73%',
				) ) );

				// width_74pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_74pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_74pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 74%',
				) ) );

				// width_75pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_75pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_75pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 75%',
				) ) );

				// width_76pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_76pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_76pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 76%',
				) ) );

				// width_77pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_77pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_77pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 77%',
				) ) );

				// width_78pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_78pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_78pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 78%',
				) ) );

				// width_79pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_79pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_79pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 79%',
				) ) );

				// width_80pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_80pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_80pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 80%',
				) ) );

				// width_81pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_81pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_81pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 81%',
				) ) );

				// width_82pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_82pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_82pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 82%',
				) ) );

				// width_83pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_83pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_83pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 83%',
				) ) );

				// width_84pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_84pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_84pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 84%',
				) ) );

				// width_85pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_85pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_85pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 85%',
				) ) );

				// width_86pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_86pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_86pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 86%',
				) ) );

				// width_87pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_87pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_87pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 87%',
				) ) );

				// width_88pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_88pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_88pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 88%',
				) ) );

				// width_89pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_89pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_89pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 89%',
				) ) );

				// width_90pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_90pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_90pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 90%',
				) ) );

				// width_91pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_91pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_91pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 91%',
				) ) );

				// width_92pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_92pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_92pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 92%',
				) ) );

				// width_93pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_93pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_93pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 93%',
				) ) );

				// width_94pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_94pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_94pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 94%',
				) ) );

				// width_95pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_95pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_95pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 95%',
				) ) );

				// width_96pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_96pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_96pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 96%',
				) ) );

				// width_97pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_97pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_97pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 97%',
				) ) );

				// width_98pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_98pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_98pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 98%',
				) ) );

				// width_99pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_99pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_99pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 99%',
				) ) );

				// width_100pr

				$wp_customize->add_setting( 'oxsn_helpful_css_width_100pr_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_100pr_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width 100%',
				) ) );

				// Width Auto

				$wp_customize->add_setting( 'oxsn_helpful_css_width_auto_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_auto_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width Auto',
				) ) );

				// Width Inherit

				$wp_customize->add_setting( 'oxsn_helpful_css_width_inherit_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_inherit_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width Inherit',
				) ) );

				// Width Initial

				$wp_customize->add_setting( 'oxsn_helpful_css_width_initial_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_width_initial_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_width_section',
					'label'    => 'Width Initial',
				) ) );

			$wp_customize->add_section( 'oxsn_helpful_css_z_index_section' , array(
				'priority'       => '',
				'capability'     => 'edit_theme_options',
				'theme_supports' => '',
				'title'          => 'Z-Index',
				'description'    => '',
				'panel'  => 'oxsn_helpful_css_panel',
			) );

				// z_index_0

				$wp_customize->add_setting( 'oxsn_helpful_css_z_index_0_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_z_index_0_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_z_index_section',
					'label'    => 'Z-Index 0',
				) ) );

				// z_index_1

				$wp_customize->add_setting( 'oxsn_helpful_css_z_index_1_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_z_index_1_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_z_index_section',
					'label'    => 'Z-Index 1',
				) ) );

				// z_index_2

				$wp_customize->add_setting( 'oxsn_helpful_css_z_index_2_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_z_index_2_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_z_index_section',
					'label'    => 'Z-Index 2',
				) ) );

				// z_index_3

				$wp_customize->add_setting( 'oxsn_helpful_css_z_index_3_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_z_index_3_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_z_index_section',
					'label'    => 'Z-Index 3',
				) ) );

				// z_index_4

				$wp_customize->add_setting( 'oxsn_helpful_css_z_index_4_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_z_index_4_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_z_index_section',
					'label'    => 'Z-Index 4',
				) ) );

				// z_index_5

				$wp_customize->add_setting( 'oxsn_helpful_css_z_index_5_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_z_index_5_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_z_index_section',
					'label'    => 'Z-Index 5',
				) ) );

				// z_index_6

				$wp_customize->add_setting( 'oxsn_helpful_css_z_index_6_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_z_index_6_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_z_index_section',
					'label'    => 'Z-Index 6',
				) ) );

				// z_index_7

				$wp_customize->add_setting( 'oxsn_helpful_css_z_index_7_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_z_index_7_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_z_index_section',
					'label'    => 'Z-Index 7',
				) ) );

				// z_index_8

				$wp_customize->add_setting( 'oxsn_helpful_css_z_index_8_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_z_index_8_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_z_index_section',
					'label'    => 'Z-Index 8',
				) ) );

				// z_index_9

				$wp_customize->add_setting( 'oxsn_helpful_css_z_index_9_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_z_index_9_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_z_index_section',
					'label'    => 'Z-Index 9',
				) ) );

				// z_index_10

				$wp_customize->add_setting( 'oxsn_helpful_css_z_index_10_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_z_index_10_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_z_index_section',
					'label'    => 'Z-Index 10',
				) ) );

				// z_index_25

				$wp_customize->add_setting( 'oxsn_helpful_css_z_index_25_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_z_index_25_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_z_index_section',
					'label'    => 'Z-Index 25',
				) ) );

				// z_index_50

				$wp_customize->add_setting( 'oxsn_helpful_css_z_index_50_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_z_index_50_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_z_index_section',
					'label'    => 'Z-Index 50',
				) ) );

				// z_index_75

				$wp_customize->add_setting( 'oxsn_helpful_css_z_index_75_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_z_index_75_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_z_index_section',
					'label'    => 'Z-Index 75',
				) ) );

				// z_index_100

				$wp_customize->add_setting( 'oxsn_helpful_css_z_index_100_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_z_index_100_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_z_index_section',
					'label'    => 'Z-Index 100',
				) ) );

				// z_index_250

				$wp_customize->add_setting( 'oxsn_helpful_css_z_index_250_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_z_index_250_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_z_index_section',
					'label'    => 'Z-Index 250',
				) ) );

				// z_index_500

				$wp_customize->add_setting( 'oxsn_helpful_css_z_index_500_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_z_index_500_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_z_index_section',
					'label'    => 'Z-Index 500',
				) ) );

				// z_index_750

				$wp_customize->add_setting( 'oxsn_helpful_css_z_index_750_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_z_index_750_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_z_index_section',
					'label'    => 'Z-Index 750',
				) ) );

				// z_index_1000

				$wp_customize->add_setting( 'oxsn_helpful_css_z_index_1000_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_z_index_1000_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_z_index_section',
					'label'    => 'Z-Index 1000',
				) ) );

				// z_index_auto

				$wp_customize->add_setting( 'oxsn_helpful_css_z_index_auto_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_z_index_auto_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_z_index_section',
					'label'    => 'Z-Index Auto',
				) ) );

				// z_index_inherit

				$wp_customize->add_setting( 'oxsn_helpful_css_z_index_inherit_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_z_index_inherit_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_z_index_section',
					'label'    => 'Z-Index Inherit',
				) ) );

				// z_index_initial

				$wp_customize->add_setting( 'oxsn_helpful_css_z_index_initial_control', array(
					'type' => 'option',
					'default' => '',
				) );

				$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'oxsn_helpful_css_z_index_initial_control', array(
					'type'     => 'checkbox',
					'priority' => '',
					'section'  => 'oxsn_helpful_css_z_index_section',
					'label'    => 'Z-Index Initial',
				) ) );

	}

}


?>