<?php

// tp metabox 
add_filter('tp_meta_boxes', 'themepure_metabox');

function themepure_metabox($meta_boxes)
{

	$prefix     = 'crank';

	$meta_boxes[] = array(
		'metabox_id'       => $prefix . '_page_meta_box',
		'title'    => esc_html__('TP Page Info', 'crank'),
		'post_type' => 'page',
		'context'  => 'normal',
		'priority' => 'core',
		'fields'   => array(
			array(
				'label'    => esc_html__('Show Breadcrumb?', 'crank'),
				'id'      => "{$prefix}_check_bredcrumb",
				'type'    => 'switch',
				'default' => 'on',
				'conditional' => array()
			),
			array(
				'label'    => esc_html__('Show Breadcrumb Image?', 'crank'),
				'id'      => "{$prefix}_check_bredcrumb_img",
				'type'    => 'switch',
				'default' => 'on',
				'conditional' => array()
			),

			array(
				'label'    => esc_html__('Enable Secondary Logo', 'crank'),
				'id'      => "{$prefix}_en_secondary_logo",
				'type'    => 'switch',
				'default' => 'off',
				'conditional' => array()
			),

			array(

				'label'    => esc_html__('Breadcrumb Background', 'crank'),
				'id'      => "{$prefix}_breadcrumb_bg",
				'type'    => 'image',
				'default' => '',
				'conditional' => array(
					"{$prefix}_check_bredcrumb_img",
					"==",
					"on"
				)
			),
			array(
				'label' => 'Breadcrumb Sub Title',
				'id'    => "{$prefix}_breadcrumb_sub_title",
				'type'  => 'text', // specify the type field
				'placeholder' => __('Please set breadcrumb sub title', 'crank'),
				'default' => '', // do not remove default key
			),

			array(

				'label'    => esc_html__('Footer BG', 'crank'),
				'id'      => "{$prefix}_footer_bg_image",
				'type'    => 'image',
				'default' => '',
				'conditional' => array()
			),


			array(
				'label' => 'Colorpicker',
				'id'   	=> "{$prefix}_footer_bg_color",
				'type' 	=> 'colorpicker',
				'placeholder' => '',
				'default' 	  => '',
				'conditional' => array()
			),




			// multiple buttons group field like multiple radio buttons
			array(
				'label'   => esc_html__('Header', 'crank'),
				'id'      => "{$prefix}_header_tabs",
				'desc'    => '',
				'type'    => 'tabs',
				'choices' => array(
					'default' => esc_html__('Default', 'crank'),
					'custom' => esc_html__('Custom', 'crank'),
				),
				'default' => 'default',
				'conditional' => array()
			),

			// select field dropdown 
			array(

				'label'           => esc_html__('Select Header Style', 'crank'),
				'id'              => "{$prefix}_header_style",
				'type'            => 'select',
				'options'         => array(
					'header_1' => esc_html__('Header 1', 'crank'),
					'header_2' => esc_html__('Header 2', 'crank'),
					'header_3' => esc_html__('Header 3', 'crank'),
					// 'header_1_onepage' => esc_html__( 'Header 01 OnePage', 'crank' ),
					// 'header_2_onepage' => esc_html__( 'Header 02 OnePage', 'crank' ),
					// 'header_3_onepage' => esc_html__( 'Header 03 OnePage', 'crank' ),
				),
				'placeholder'     => esc_html__('Select a header', 'crank'),
				'conditional' => array(
					"{$prefix}_header_tabs",
					"==",
					"custom"
				),
				'default' => 'header_1',
				'parent' => "{$prefix}_header_tabs",
				'context'  => 'normal'
			),


			// select field dropdown
			array(

				'label'           => esc_html__('Select Header Template', 'crank'),
				'id'              => "{$prefix}_header_templates",
				'type'            => 'select_posts',
				'placeholder'     => esc_html__('Select a template', 'crank'),
				'post_type'       => 'tp-header',
				'conditional' => array(
					"{$prefix}_header_tabs",
					"==",
					"elementor"
				),
				'default' => '',
			),


			// multiple buttons group field like multiple radio buttons
			array(
				'label'   => esc_html__('Footer', 'crank'),
				'id'      => "{$prefix}_footer_tabs",
				'desc'    => '',
				'type'    => 'tabs',
				'choices' => array(
					'default' => esc_html__('Default', 'crank'),
					'custom' => esc_html__('Custom', 'crank'),
				),
				'default' => 'default',
				'conditional' => array()
			),

			// select field dropdown
			array(

				'label'           => esc_html__('Select Footer Style', 'crank'),
				'id'              => "{$prefix}_footer_style",
				'type'            => 'select',
				'options'         => array(
					'footer_1' => esc_html__('Footer 1', 'crank'),
					'footer_2' => esc_html__('Footer 2', 'crank'),
					'footer_3' => esc_html__('Footer 3', 'crank'),
				),
				'placeholder'     => esc_html__('Select a footer', 'crank'),
				'conditional' => array(
					"{$prefix}_footer_tabs",
					"==",
					"custom"
				),
				'default' => 'footer_1',
				'parent' => "{$prefix}_footer_tabs"
			),

			// select field dropdown
			array(

				'label'           => esc_html__('Select Footer Template', 'crank'),
				'id'              => "{$prefix}_footer_template",
				'type'            => 'select_posts',
				'placeholder'     => esc_html__('Select a template', 'crank'),
				'post_type'       => 'tp-footer',
				'conditional' => array(
					"{$prefix}_footer_tabs",
					"==",
					"elementor"
				),
				'default' => '',
			),
		),
	);

	$meta_boxes[] = array(
		'metabox_id'       => $prefix . '_post_gallery_meta',
		'title'    => esc_html__('TP Gallery Post', 'crank'),
		'post_type' => 'post',
		'context'  => 'normal',
		'priority' => 'core',
		'fields'   => array(
			array(
				'label'    => esc_html__('Gallery Images Here', ''),
				'id'      => "{$prefix}_post_gallery",
				'type'    => 'gallery',
				'default' => '',
				'conditional' => array(),
			),
		),
		'post_format' => 'gallery'
	);

	$meta_boxes[] = array(
		'metabox_id'       => $prefix . '_post_video_meta',
		'title'    => esc_html__('TP Video Post', 'crank'),
		'post_type' => 'post',
		'context'  => 'normal',
		'priority' => 'core',
		'fields'   => array(
			array(
				'label'    => esc_html__('Video URL Here', 'crank'),
				'id'      => "{$prefix}_post_video",
				'type'    => 'text',
				'default' => '',
				'conditional' => array(),
				'placeholder'     => esc_html__('Place your video url.', 'crank'),
			),
		),
		'post_format' => 'video'
	);

	$meta_boxes[] = array(
		'metabox_id'       => $prefix . '_post_audio_meta',
		'title'    => esc_html__('TP Audio Post', 'crank'),
		'post_type' => 'post',
		'context'  => 'normal',
		'priority' => 'core',
		'fields'   => array(
			array(
				'label'    => esc_html__('Audio URL Here', 'crank'),
				'id'      => "{$prefix}_post_audio",
				'type'    => 'text',
				'default' => '',
				'conditional' => array(),
				'placeholder'     => esc_html__('Place your audio url..', 'crank'),
			),
		),
		'post_format' => 'audio'
	);
	return $meta_boxes;
}


function crank_user_meta()
{
	$meta = array(
		'id'    => 'crank_user_main_meta',
		'label' => 'Crank User Meta',
		'fields' => array(
			array(
				'id'    => 'crank_user_facebook_url',
				'label' => 'Facebook URL',
				'type'  => 'text',
				'default' => 'https://facebook.com',
				'placeholder' => 'Facebook URL...',
				'show_in_admin_table' => 1
			),
			array(
				'id'    => 'crank_user_twitter_url',
				'label' => 'Twitter URL',
				'type'  => 'text',
				'default' => 'https://twitter.com',
				'placeholder' => 'Twitter URL...',
				'show_in_admin_table' => 1
			),
			array(
				'id'    => 'crank_user_instagram_url',
				'label' => 'Instagram URL',
				'type'  => 'text',
				'default' => 'https://instagram.com',
				'placeholder' => 'Instagram URL...',
				'show_in_admin_table' => 1
			),
			array(
				'id'    => 'crank_user_linkedin_url',
				'label' => 'Linkedin URL',
				'type'  => 'text',
				'default' => 'https://linkedin.com',
				'placeholder' => 'Linkedin URL...',
				'show_in_admin_table' => 1
			),
		)
	);

	return $meta;
}
add_filter('tp_user_meta', 'crank_user_meta');
