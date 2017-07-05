<?php

	if (!defined('FW')) die('Forbidden');

	$args_category_list = array(
		'type'         => 'post',
		'child_of'     => 0,
		'parent'       => '',
		'orderby'      => 'name',
		'order'        => 'ASC',
		'hide_empty'   => 1,
		'hierarchical' => 1,
		'exclude'      => '',
		'include'      => '',
		'number'       => 0,
		'taxonomy'     => 'category',
		'pad_counts'   => false,
	);

	$res_category_list =  array();

	$category_list = get_categories( $args_category_list );

	foreach ($category_list as $category_listt_item) {
		$res_category_list[$category_listt_item->term_id] = $category_listt_item->name;
	}
//настройки для страницы настроек темы
	$options = array(
		'kdv_tap_general_opions' => array(
    		'type' => 'tab',
    		'options' => array(
        		'kdv_header_opacity' => array(
				    'type'  => 'text',
				    'label' => __('Opacity', '{domain}'),
				    'help'  => __('set opacity for header (from 0 to 1) default: 0.5', '{domain}'),
				),
				'kdv_header_phone' => array(
				    'type'  => 'text',
				    'label' => __('Phone', '{domain}'),
				    'help'  => __('set phone for header', '{domain}'),
				),			
				'kdv_header_menu_position' => array(
				    'type'  => 'select',
				    'value' => '1',
				    'label' => __('Menu position', '{domain}'),
				    'help'  => __('set position for main menu', '{domain}'),
				    'choices' => array(
				        '1' => __('left', '{domain}'),
				        '2' => __('center', '{domain}'),
				        '3' => __('right', '{domain}'),
				    )
				)
    		),
    		'title' => __('Header', '{domain}'),
    		'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
		),
		'kdv_tap_gallary_post_new' => array(
    		'type' => 'tab',
    		'options' => array(
				'kdv_footer_logo' => array(
				    'type'  => 'upload',
				    'value' => array(
				        /*
				        'attachment_id' => '9',
				        'url' => '//site.com/wp-content/uploads/2014/02/whatever.jpg'
				        */
				        // if value is set in code, it is not considered and not used
				        // because there is no sense to set hardcode attachment_id
				    ),
				    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				    'label' => __('Logo', '{domain}'),
				    'desc'  => __('', '{domain}'),
				    'help'  => __('Upload logo images for footer (jpg, png, gif)', '{domain}'),
				    /**
				     * If set to `true`, the option will allow to upload only images, and display a thumb of the selected one.
				     * If set to `false`, the option will allow to upload any file from the media library.
				     */
				    'images_only' => true,
				    /**
				     * An array with allowed files extensions what will filter the media library and the upload files.
				     */
				    'files_ext' => array( 'jpg', 'png', 'gif' ),
				    /**
				     * An array with extra mime types that is not in the default array with mime types from the javascript Plupload library.
				     * The format is: array( '<mime-type>, <ext1> <ext2> <ext2>' ).
				     * For example: you set rar format to filter, but the filter ignore it , than you must set
				     * the array with the next structure array( '.rar, rar' ) and it will solve the problem.
				     */
				    'extra_mime_types' => array( 'audio/x-aiff, aif aiff' )
				),

				'kdv_footer_link_for_logo' => array(
				    'type'  => 'text',
				    'label' => __('Link for logo', '{domain}'),
				    'help'  => __('set link for logo image', '{domain}'),
				),

				'kdv_footer_color_1' => array(
				    'type'  => 'color-picker',
				    'value' => '#6899d6',
				    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				    // palette colors array
				    'label' => __('Footer color 1', '{domain}'),
				),

				'kdv_footer_color_2' => array(
				    'type'  => 'color-picker',
				    'value' => '#3367D6',
				    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				    // palette colors array
				    'label' => __('Footer color 2', '{domain}'),
				)

			),
    		'title' => __('Footer settings', '{domain}'),
    		'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
		),
	);

?>