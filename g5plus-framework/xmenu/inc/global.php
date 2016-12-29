<?php
function xmenu_get_transition() {
	return array(
		'none' => __('None','g5plus-wolverine'),
		'x-animate-slide-up' => __('Slide Up','g5plus-wolverine'),
		'x-animate-slide-down' => __('Slide Down','g5plus-wolverine'),
		'x-animate-slide-left' => __('Slide Left','g5plus-wolverine'),
		'x-animate-slide-right' => __('Slide Right','g5plus-wolverine'),
		'x-animate-sign-flip' => __('Sign Flip','g5plus-wolverine'),
	);
}

function xmenu_get_grid () {
	return array(
		'basic' => array(
			'text' => __('Basic','g5plus-wolverine'),
			'options' => array(
				'auto' => __('Automatic','g5plus-wolverine'),
				'x-col x-col-12-12' => __('Full Width','g5plus-wolverine'),
			)
		),
		'halves' => array(
			'text' => __('Halves','g5plus-wolverine'),
			'options' => array(
				'x-col x-col-6-12' => __('1/2','g5plus-wolverine'),
			)
		),
		'thirds' => array(
			'text' => __('Thirds','g5plus-wolverine'),
			'options' => array(
				'x-col x-col-4-12' => __('1/3','g5plus-wolverine'),
				'x-col x-col-8-12' => __('2/3','g5plus-wolverine'),
			)
		),
		'quarters' => array(
			'text' => __('Quarters','g5plus-wolverine'),
			'options' => array(
				'x-col x-col-3-12' => __('1/4','g5plus-wolverine'),
				'x-col x-col-9-12' => __('3/4','g5plus-wolverine'),
			)
		),
		'fifths' => array(
			'text' => __('Fifths','g5plus-wolverine'),
			'options' => array(
				'x-col x-col-2-10' => __('1/5','g5plus-wolverine'),
				'x-col x-col-4-10' => __('2/5','g5plus-wolverine'),
				'x-col x-col-6-10' => __('3/5','g5plus-wolverine'),
				'x-col x-col-8-10' => __('4/5','g5plus-wolverine'),
			)
		),
		'sixths' => array(
			'text' => __('Sixths','g5plus-wolverine'),
			'options' => array(
				'x-col x-col-2-12' => __('1/6','g5plus-wolverine'),
				'x-col x-col-10-12' => __('5/6','g5plus-wolverine'),
			)
		),
		'sevenths' => array(
			'text' => __('Sevenths','g5plus-wolverine'),
			'options' => array(
				'x-col x-col-1-7' => __('1/7','g5plus-wolverine'),
				'x-col x-col-2-7' => __('2/7','g5plus-wolverine'),
				'x-col x-col-3-7' => __('3/7','g5plus-wolverine'),
				'x-col x-col-4-7' => __('4/7','g5plus-wolverine'),
				'x-col x-col-5-7' => __('5/7','g5plus-wolverine'),
				'x-col x-col-6-7' => __('6/7','g5plus-wolverine'),
			)
		),
		'eighths' => array(
			'text' => __('Eighths','g5plus-wolverine'),
			'options' => array(
				'x-col x-col-1-8' => __('1/8','g5plus-wolverine'),
				'x-col x-col-3-8' => __('3/8','g5plus-wolverine'),
				'x-col x-col-5-8' => __('5/8','g5plus-wolverine'),
				'x-col x-col-7-8' => __('7/8','g5plus-wolverine'),
			)
		),
		'ninths' => array(
			'text' => __('Ninths','g5plus-wolverine'),
			'options' => array(
				'x-col x-col-1-9' => __('1/9','g5plus-wolverine'),
				'x-col x-col-2-9' => __('2/9','g5plus-wolverine'),
				'x-col x-col-4-9' => __('4/9','g5plus-wolverine'),
				'x-col x-col-5-9' => __('5/9','g5plus-wolverine'),
				'x-col x-col-7-9' => __('7/9','g5plus-wolverine'),
				'x-col x-col-8-9' => __('8/9','g5plus-wolverine'),
			)
		),
		'tenths' => array(
			'text' => __('Tenths','g5plus-wolverine'),
			'options' => array(
				'x-col x-col-1-10' => __('1/10','g5plus-wolverine'),
				'x-col x-col-3-10' => __('3/10','g5plus-wolverine'),
				'x-col x-col-7-10' => __('7/10','g5plus-wolverine'),
				'x-col x-col-9-10' => __('9/10','g5plus-wolverine'),
			)
		),
		'elevenths' => array(
			'text' => __('Elevenths','g5plus-wolverine'),
			'options' => array(
				'x-col x-col-1-11' => __('1/11','g5plus-wolverine'),
				'x-col x-col-2-11' => __('2/11','g5plus-wolverine'),
				'x-col x-col-3-11' => __('3/11','g5plus-wolverine'),
				'x-col x-col-4-11' => __('4/11','g5plus-wolverine'),
				'x-col x-col-5-11' => __('5/11','g5plus-wolverine'),
				'x-col x-col-6-11' => __('6/11','g5plus-wolverine'),
				'x-col x-col-7-11' => __('7/11','g5plus-wolverine'),
				'x-col x-col-8-11' => __('8/11','g5plus-wolverine'),
				'x-col x-col-9-11' => __('9/11','g5plus-wolverine'),
				'x-col x-col-10-11' => __('10/11','g5plus-wolverine'),
			)
		),
		'twelfths' => array(
			'text' => __('Twelfths','g5plus-wolverine'),
			'options' => array(
				'x-col x-col-1-12' => __('1/12','g5plus-wolverine'),
				'x-col x-col-5-12' => __('5/12','g5plus-wolverine'),
				'x-col x-col-7-12' => __('7/12','g5plus-wolverine'),
				'x-col x-col-11-12' => __('11/12','g5plus-wolverine'),
			)
		),
	);
}


global $xmenu_item_settings;
$xmenu_item_settings = array(
	'general' => array(
		'text' => __('General','g5plus-wolverine'),
		'icon' => 'fa fa-cogs',
		'config' => array(
			'general-heading' => array(
				'text' => __('General','g5plus-wolverine'),
				'type' => 'heading'
			),
			'general-url' => array(
				'text' => __('URL','g5plus-wolverine'),
				'type' => 'text',
				'std'  => '',
			),
			'general-title' => array(
				'text' => __('Navigation Label','g5plus-wolverine'),
				'type' => 'text',
				'std'  => '',
			),
			'general-attr-title' => array(
				'text' => __('Title Attribute','g5plus-wolverine'),
				'type' => 'text',
				'std'  => '',
			),
			'general-target' => array(
				'text' => __('Open link in a new window/tab','g5plus-wolverine'),
				'type' => 'checkbox',
				'std'  => '',
				'value' => '_blank',
			),
			'general-classes' => array(
				'text' => __('CSS Classes (optional)','g5plus-wolverine'),
				'type' => 'array',
				'std'  => '',
			),
			'general-xfn' => array(
				'text' => __('Link Relationship (XFN)','g5plus-wolverine'),
				'type' => 'text',
				'std'  => '',
			),
			'general-description' => array(
				'text' => __('Description','g5plus-wolverine'),
				'type' => 'textarea',
				'std'  => '',
			),
			'general-other-heading' => array(
				'text' => __('Other','g5plus-wolverine'),
				'type' => 'heading'
			),
			'other-disable-text' => array(
				'text' => __('Disable Text','g5plus-wolverine'),
				'type' => 'checkbox',
				'std' => ''
			),
			'other-disable-menu-item' => array(
				'text' => __('Disable Menu Item','g5plus-wolverine'),
				'type' => 'checkbox',
				'std' => ''
			),
			'other-disable-link' => array(
				'text' => __('Disable Link','g5plus-wolverine'),
				'type' => 'checkbox',
				'std' => ''
			),
			'other-display-header-column' => array(
				'text' => __('Display as a Sub Menu column header','g5plus-wolverine'),
				'type' => 'checkbox',
				'std' => ''
			),
			'other-feature-text' => array(
				'text' => __('Menu Feature Text','g5plus-wolverine'),
				'type' => 'text',
				'std' => ''
			),
		)
	),
	'icon' => array(
		'text' => __('Icon','g5plus-wolverine'),
		'icon' => 'fa fa-qrcode',
		'config' => array(
			'icon-heading' => array(
				'text' => __('Icon','g5plus-wolverine'),
				'type' => 'heading'
			),
			'icon-value' => array(
				'text' => __('Set Icon','g5plus-wolverine'),
				'type' => 'icon',
				'std'  => '',
			),
			'icon-position' => array(
				'text' => __('Icon Position','g5plus-wolverine'),
				'type' => 'select',
				'std'  => 'left',
				'options' => array(
					'left' => __('Left of Menu Text','g5plus-wolverine'),
					'right' => __('Right of Menu Text','g5plus-wolverine'),
				)
			),
			'icon-padding' => array(
				'text' => __('Padding Icon and Text Menu','g5plus-wolverine'),
				'type' => 'text',
				'std'  => '',
				'des' => __('Padding between Icon and Text Menu (px). Do not include units','g5plus-wolverine')
			)
		)
	),
	'image' => array(
		'text' => __('Image','g5plus-wolverine'),
		'icon' => 'fa fa-picture-o',
		'config' => array(
			'image-heading' => array(
				'text' => __('Image','g5plus-wolverine'),
				'type' => 'heading'
			),
			'image-url' => array(
				'text' => __('Image Url','g5plus-wolverine'),
				'type' => 'image',
				'std'  => '',
			),
			'image-size' => array(
				'text' => __('Image Size','g5plus-wolverine'),
				'type' => 'select',
				'std'  => 'inherit',
				'options' => xmenu_get_image_size()
			),
			'image-dimensions' => array(
				'text' => __('Image Dimensions','g5plus-wolverine'),
				'type' => 'select',
				'std'  => 'inherit',
				'options' => array(
					'inherit' => 'Inherit from Menu Settings',
					'custom' => 'Custom',
				)
			),
			'image-width' => array(
				'text' => __('Image Width','g5plus-wolverine'),
				'type' => 'text',
				'std'  => '',
				'des' => __('Image width attribute (px). Do not include units. Only valid if "Image Dimension" is set to "Custom" above','g5plus-wolverine')
			),
			'image-height' => array(
				'text' => __('Image Height','g5plus-wolverine'),
				'type' => 'text',
				'std'  => '',
				'des' => __('Image width attribute (px). Do not include units. Only valid if "Image Dimension" is set to "Custom" above','g5plus-wolverine')
			),
			'image-layout' => array(
				'text' => __('Image Layout','g5plus-wolverine'),
				'type' => 'select',
				'std'  => 'image-only',
				'options' => array(
					'image-only' => __('Image Only','g5plus-wolverine'),
					'left' => __('Image Left','g5plus-wolverine'),
					'right' => __('Image Right','g5plus-wolverine'),
					'above' => __('Image Above','g5plus-wolverine'),
					'below' => __('Image Below','g5plus-wolverine'),
				)
			),
			'image-feature' => array(
				'text' => __('Use Feature Image','g5plus-wolverine'),
				'type' => 'checkbox',
				'std'  => '',
				'des' => 'Use Feature Image from Post/Page Menu Item',
			),
		)
	),

	'layout' => array(
		'text' => __('Layout','g5plus-wolverine'),
		'icon' => 'fa fa-columns',
		'config' => array(
			'layout-heading' => array(
				'text' => __('Layout','g5plus-wolverine'),
				'type' => 'heading'
			),
			'layout-width' => array(
				'text' => __('Menu Item Width','g5plus-wolverine'),
				'type' => 'select-group',
				'std'  => 'auto',
				'options' => xmenu_get_grid()
			),
			'layout-text-align' => array(
				'text' => __('Item Content Alignment','g5plus-wolverine'),
				'type' => 'select',
				'std'  => 'none',
				'options' => array(
					'none' => __('Default','g5plus-wolverine'),
					'left' => __('Text Left','g5plus-wolverine'),
					'center' => __('Text Center','g5plus-wolverine'),
					'right' => __('Text Right','g5plus-wolverine'),
				)
			),
			'layout-padding' => array(
				'text' => __('Padding','g5plus-wolverine'),
				'type' => 'text',
				'std'  => '',
				'des' => __('Set padding for menu item. Include the units.','g5plus-wolverine'),
			),
			'layout-margin' => array(
				'text' => __('Margin','g5plus-wolverine'),
				'type' => 'text',
				'std'  => '',
				'des' => __('Set margin for menu item. Include the units.','g5plus-wolverine'),
			),
			'layout-new-row' => array(
				'text' => __('New Row','g5plus-wolverine'),
				'type' => 'checkbox',
				'std'  => ''
			),
		)
	),
	'submenu' => array(
		'text' => __('Sub Menu','g5plus-wolverine'),
		'icon' => 'fa fa-list-alt',
		'config' => array(
			'submenu-heading' => array(
				'text' => __('Sub Menu','g5plus-wolverine'),
				'type' => 'heading'
			),
			'submenu-type' => array(
				'text' => __('Sub Menu Type','g5plus-wolverine'),
				'type' => 'select',
				'std'  => 'standard',
				'options' => array(
					'standard' => __('Standard','g5plus-wolverine'),
					'multi-column' => __('Multi Column','g5plus-wolverine'),
					/*'stack' => __('Stack','g5plus-wolverine'),*/
					'tab' => __('Tab','g5plus-wolverine'),
				)
			),
			'submenu-position' => array(
				'text' => __('Sub Menu Position','g5plus-wolverine'),
				'type' => 'select',
				'std'  => '',
				'options' => array(
					'' => __('Automatic','g5plus-wolverine'),
					'pos-left-menu-parent' => __('Left of Menu Parent','g5plus-wolverine'),
					'pos-right-menu-parent' => __('Right of Menu Parent','g5plus-wolverine'),
					'pos-center-menu-parent' => __('Center of Menu Parent','g5plus-wolverine'),
					'pos-left-menu-bar' => __('Left of Menu Bar','g5plus-wolverine'),
					'pos-right-menu-bar' => __('Right of Menu Bar','g5plus-wolverine'),
					'pos-full' => __('Full Size','g5plus-wolverine'),
				)
			),
			'submenu-width-custom' => array(
				'text' => __('Sub Menu Width Custom','g5plus-wolverine'),
				'type' => 'text',
				'std'  => '',
				'des' => __('Set custom Sub Menu Width. Include the units (px/em/%).','g5plus-wolverine'),
			),
			'submenu-col-width-default' => array(
				'text' => __('Sub Menu Column Width Default','g5plus-wolverine'),
				'type' => 'select-group',
				'std'  => 'auto',
				'options' => xmenu_get_grid()
			),
			'submenu-col-spacing-default' => array(
				'text' => __('Sub Menu Column Spacing Default','g5plus-wolverine'),
				'type' => 'text',
				'std'  => '',
				'des' => __('Set sub menu column spacing default. Do not include unit.','g5plus-wolverine'),
			),
			'submenu-list-style' => array(
				'text' => __('Sub Menu List Style','g5plus-wolverine'),
				'type' => 'select',
				'std'  => 'none',
				'options' => array(
					'none' => __('None','g5plus-wolverine'),
					'disc' => __('Disc','g5plus-wolverine'),
					'square' => __('Square','g5plus-wolverine'),
					'circle' => __('Circle','g5plus-wolverine'),
				)
			),
			'submenu-tab-position' => array(
				'text' => __('Tab Position','g5plus-wolverine'),
				'type' => 'select',
				'std'  => 'left',
				'des' => __('Tab Position set to "Sub Menu Type" is "TAB".','g5plus-wolverine'),
				'options' => array(
					'left' => __('Left','g5plus-wolverine'),
					'right' => __('Right','g5plus-wolverine'),
				)
			),
			'submenu-animation' => array(
				'text' => __('Sub Menu Animation','g5plus-wolverine'),
				'type' => 'select',
				'std'  => 'x-animate-sign-flip',
				'options' => xmenu_get_transition()
			),
		)
	),
	'custom-content' => array(
		'text' => __('Custom Content','g5plus-wolverine'),
		'icon' => 'fa fa-code',
		'config' => array(
			'custom-content-heading' => array(
				'text' => __('Custom Content','g5plus-wolverine'),
				'type' => 'heading'
			),
			'custom-content-value' => array(
				'text' => __('Custom Content','g5plus-wolverine'),
				'type' => 'textarea',
				'std'  => '',
				'des' => __('Can contain HTML and shortcodes','g5plus-wolverine'),
				'height' => '300px'
			),
		)
	),
	'widget' => array(
		'text' => __('Widget Area','g5plus-wolverine'),
		'icon' => 'fa-puzzle-piece',
		'config' => array(
			'widget-heading' => array(
				'text' => __('Widget Area','g5plus-wolverine'),
				'type' => 'heading'
			),
			'widget-area' => array(
				'text' => __('Widget Area','g5plus-wolverine'),
				'type' => 'text',
				'std'  => '',
				'des' => __('Enter a name for your Widget Area, and a widget area specifically for this menu item will be automatically be created in the <a href="widgets.php" target="_blank">Widgets Screen</a>','g5plus-wolverine'),
			),
		)
	),
	'customize-style' => array(
		'text' => __('Customize Style','g5plus-wolverine'),
		'icon' => 'fa-paint-brush',
		'config' => array(
			'custom-style-menu-heading' => array(
				'text' => __('Menu Item','g5plus-wolverine'),
				'type' => 'heading'
			),
			'custom-style-menu-bg-color' => array(
				'text' => __('Background Color','g5plus-wolverine'),
				'type' => 'color',
				'std'  => '',
			),
			'custom-style-menu-text-color' => array(
				'text' => __('Text Color','g5plus-wolverine'),
				'type' => 'color',
				'std'  => '',
			),
			'custom-style-menu-bg-color-active' => array(
				'text' => __('Background Color [Active]','g5plus-wolverine'),
				'type' => 'color',
				'std'  => '',
			),
			'custom-style-menu-text-color-active' => array(
				'text' => __('Text Color [Active]','g5plus-wolverine'),
				'type' => 'color',
				'std'  => '',
			),
			'custom-style-menu-bg-image' => array(
				'text' => __('Background Image','g5plus-wolverine'),
				'type' => 'image',
				'std'  => '',
			),
			'custom-style-menu-bg-image-repeat' => array(
				'text' => __('Background Image Repeat','g5plus-wolverine'),
				'type' => 'select',
				'std' => 'no-repeat',
				'hide-label' => 'true',
				'options' => array(
					'no-repeat' => 'no-repeat',
					'repeat' => 'repeat',
					'repeat-x' => 'repeat-x',
					'repeat-y' => 'repeat-y'
				)
			),
			'custom-style-menu-bg-image-attachment' => array(
				'text' => __('Background Image Attachment','g5plus-wolverine'),
				'type' => 'select',
				'std' => 'scroll',
				'hide-label' => 'true',
				'options' => array(
					'scroll' => 'scroll',
					'fixed' => 'fixed'
				)
			),
			'custom-style-menu-bg-image-position' => array(
				'text' => __('Background Image Position','g5plus-wolverine'),
				'type' => 'select',
				'std' => 'center',
				'hide-label' => 'true',
				'options' => array(
					'center' => 'center',
					'center left' => 'center left',
					'center right' => 'center right',
					'top left' => 'top left',
					'top center' => 'top center',
					'top right' => 'top right',
					'bottom left' => 'bottom left',
					'bottom center' => 'bottom center',
					'bottom right' => 'bottom right'
				)
			),
			'custom-style-menu-bg-image-size' => array(
				'text' => __('Background Image Size','g5plus-wolverine'),
				'type' => 'select',
				'std' => 'auto',
				'hide-label' => 'true',
				'options' => array(
					'auto' => 'Keep original',
					'100% auto' => 'Stretch to width',
					'auto 100%' => 'Stretch to height',
					'cover' => 'Cover',
					'contain' => 'Contain'
				)
			),
			'custom-style-sub-menu-heading' => array(
				'text' => __('Sub Menu','g5plus-wolverine'),
				'type' => 'heading'
			),
			'custom-style-sub-menu-bg-color' => array(
				'text' => __('Background Color','g5plus-wolverine'),
				'type' => 'color',
				'std'  => '',
			),
			'custom-style-sub-menu-text-color' => array(
				'text' => __('Text Color','g5plus-wolverine'),
				'type' => 'color',
				'std'  => '',
			),
			'custom-style-sub-menu-bg-image' => array(
				'text' => __('Background Image','g5plus-wolverine'),
				'type' => 'image',
				'std'  => '',
			),
			'custom-style-sub-menu-bg-image-repeat' => array(
				'text' => __('Background Image Repeat','g5plus-wolverine'),
				'type' => 'select',
				'std' => 'no-repeat',
				'hide-label' => 'true',
				'options' => array(
					'no-repeat' => 'no-repeat',
					'repeat' => 'repeat',
					'repeat-x' => 'repeat-x',
					'repeat-y' => 'repeat-y'
				)
			),
			'custom-style-sub-menu-bg-image-attachment' => array(
				'text' => __('Background Image Attachment','g5plus-wolverine'),
				'type' => 'select',
				'std' => 'scroll',
				'hide-label' => 'true',
				'options' => array(
					'scroll' => 'scroll',
					'fixed' => 'fixed'
				)
			),
			'custom-style-sub-menu-bg-image-position' => array(
				'text' => __('Background Image Position','g5plus-wolverine'),
				'type' => 'select',
				'std' => 'center',
				'hide-label' => 'true',
				'options' => array(
					'center' => 'center',
					'center left' => 'center left',
					'center right' => 'center right',
					'top left' => 'top left',
					'top center' => 'top center',
					'top right' => 'top right',
					'bottom left' => 'bottom left',
					'bottom center' => 'bottom center',
					'bottom right' => 'bottom right'
				)
			),
			'custom-style-sub-menu-bg-image-size' => array(
				'text' => __('Background Image Size','g5plus-wolverine'),
				'type' => 'select',
				'std' => 'auto',
				'hide-label' => 'true',
				'options' => array(
					'auto' => 'Keep original',
					'100% auto' => 'Stretch to width',
					'auto 100%' => 'Stretch to height',
					'cover' => 'Cover',
					'contain' => 'Contain'
				)
			),
			'custom-style-col-min-width' => array(
				'text' => __('Column Min Width','g5plus-wolverine'),
				'type' => 'text',
				'std'  => '',
				'des' => __('Set min-width for Sub Menu Column (px). Not include the units.','g5plus-wolverine'),
			),
			'custom-style-padding' => array(
				'text' => __('Padding','g5plus-wolverine'),
				'type' => 'text',
				'std'  => '',
				'des' => __('Set padding for Sub Menu. Include the units.','g5plus-wolverine'),
			),

			'custom-style-feature-menu-text-heading' => array(
				'text' => __('Menu Feature Text','g5plus-wolverine'),
				'type' => 'heading'
			),
			'custom-style-feature-menu-text-type' => array(
				'text' => __('Feature Menu Type','g5plus-wolverine'),
				'type' => 'select',
				'std'  => '',
				'options' => array(
					'' => __('Standard','g5plus-wolverine'),
					'x-feature-menu-not-float' => __('Not Float','g5plus-wolverine')
				)
			),
			'custom-style-feature-menu-text-bg-color' => array(
				'text' => __('Background Color','g5plus-wolverine'),
				'type' => 'color',
				'std'  => '',
			),
			'custom-style-feature-menu-text-color' => array(
				'text' => __('Text Color','g5plus-wolverine'),
				'type' => 'color',
				'std'  => '',
			),
			'custom-style-feature-menu-text-top' => array(
				'text' => __('Position Top','g5plus-wolverine'),
				'type' => 'text',
				'std'  => '',
				'des'  => 'Position Top (px) Feature Menu Text. Do not include units.',
			),
			'custom-style-feature-menu-text-left' => array(
				'text' => __('Position Left','g5plus-wolverine'),
				'type' => 'text',
				'std'  => '',
				'des'  => 'Position Left (px) Feature Menu Text. Do not include units.',
			),
		)
	),
	'responsive' => array(
		'text' => __('Responsive','g5plus-wolverine'),
		'icon' => 'fa-desktop',
		'config' => array(
			'responsive-heading' => array(
				'text' => __('Responsive','g5plus-wolverine'),
				'type' => 'heading'
			),
			'responsive-hide-mobile-css' => array(
				'text' => __('Hide item on mobile via CSS','g5plus-wolverine'),
				'type' => 'checkbox',
				'std' => ''
			),
			'responsive-hide-desktop-css' => array(
				'text' => __('Hide item on desktop via CSS','g5plus-wolverine'),
				'type' => 'checkbox',
				'std' => ''
			),
			'responsive-hide-mobile-css-submenu' => array(
				'text' => __('Hide sub menu on mobile via CSS','g5plus-wolverine'),
				'type' => 'checkbox',
				'std' => ''
			),
			'responsive-remove-mobile' => array(
				'text' => __('Remove this item when mobile device is detected via wp_is_mobile()','g5plus-wolverine'),
				'type' => 'checkbox',
				'std' => ''
			),
			'responsive-remove-desktop' => array(
				'text' => __('Remove this item when desktop device is NOT detected via wp_is_mobile()','g5plus-wolverine'),
				'type' => 'checkbox',
				'std' => ''
			),
			'responsive-remove-mobile-submenu' => array(
				'text' => __('Remove sub menu when desktop device is NOT detected via wp_is_mobile()','g5plus-wolverine'),
				'type' => 'checkbox',
				'std' => ''
			),
		),
	),
	'responsive' => array(
		'text' => __('Responsive','g5plus-wolverine'),
		'icon' => 'fa-desktop',
		'config' => array(
			'responsive-heading' => array(
				'text' => __('Responsive','g5plus-wolverine'),
				'type' => 'heading'
			),
			'responsive-hide-mobile-css' => array(
				'text' => __('Hide item on mobile via CSS','g5plus-wolverine'),
				'type' => 'checkbox',
				'std' => ''
			),
			'responsive-hide-desktop-css' => array(
				'text' => __('Hide item on desktop via CSS','g5plus-wolverine'),
				'type' => 'checkbox',
				'std' => ''
			),
			'responsive-hide-mobile-css-submenu' => array(
				'text' => __('Hide sub menu on mobile via CSS','g5plus-wolverine'),
				'type' => 'checkbox',
				'std' => ''
			),
			'responsive-hide-desktop-css-submenu' => array(
				'text' => __('Hide sub menu on desktop via CSS','g5plus-wolverine'),
				'type' => 'checkbox',
				'std' => ''
			),
			/*'responsive-remove-mobile' => array(
				'text' => __('Remove this item when mobile device is detected via wp_is_mobile()','g5plus-wolverine'),
				'type' => 'checkbox',
				'std' => ''
			),
			'responsive-remove-desktop' => array(
				'text' => __('Remove this item when desktop device is NOT detected via wp_is_mobile()','g5plus-wolverine'),
				'type' => 'checkbox',
				'std' => ''
			),
			'responsive-remove-mobile-submenu' => array(
				'text' => __('Remove sub menu when desktop device is NOT detected via wp_is_mobile()','g5plus-wolverine'),
				'type' => 'checkbox',
				'std' => ''
			),*/
		),
	)
);

global $xmenu_item_defaults;
$xmenu_item_defaults = xmenu_get_item_defaults($xmenu_item_settings);

function xmenu_get_item_defaults($items_setting, $defaults = array()) {
	if (!$defaults) {
		$defaults = array(
			'nosave-type_label' => '',
			'nosave-type' => '',
			'nosave-change' => 0
		);
	}

	foreach ($items_setting as $seting_key => $setting) {
		foreach ($setting['config'] as $key => $value) {
			if (isset($value['config']) && $value['config']) {

			}
			else {
				if ($value['type'] != 'heading') {
					$defaults[$key] = $value['std'];
				}
			}

		}
	}
	return $defaults;
}
function xmenu_get_image_size($is_setting = 0) {
	global $_wp_additional_image_sizes;

	$sizes = array();
	$get_intermediate_image_sizes = get_intermediate_image_sizes();

	// Create the full array with sizes and crop info
	foreach( $get_intermediate_image_sizes as $_size ) {

		if ( in_array( $_size, array( 'thumbnail', 'medium', 'large' ) ) ) {

			$sizes[ $_size ]['width'] = get_option( $_size . '_size_w' );
			$sizes[ $_size ]['height'] = get_option( $_size . '_size_h' );
			$sizes[ $_size ]['crop'] = (bool) get_option( $_size . '_crop' );

		} elseif ( isset( $_wp_additional_image_sizes[ $_size ] ) ) {

			$sizes[ $_size ] = array(
				'width' => $_wp_additional_image_sizes[ $_size ]['width'],
				'height' => $_wp_additional_image_sizes[ $_size ]['height'],
				'crop' =>  $_wp_additional_image_sizes[ $_size ]['crop']
			);

		}

	}
	$image_size = array();
	if (!$is_setting) {
		$image_size ['inherit'] = __('Inherit from Menu Setting','g5plus-wolverine');
	}
	$image_size ['full'] = __('Full Size','g5plus-wolverine');
	foreach ($sizes as $key => $value) {
		$image_size[$key] = ucfirst($key) . ' (' . $value['width'] . ' x ' . $value['height'] .')' . ($value['crop'] ? '[cropped]' : '') ;
	}
	return $image_size;
}