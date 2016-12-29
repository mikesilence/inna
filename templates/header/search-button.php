<?php
	global $g5plus_options, $g5plus_header_layout;

	$prefix = 'g5plus_';

	$data_search_type = 'standard';
	if (isset($g5plus_options['search_box_type']) && ($g5plus_options['search_box_type'] == 'ajax')) {
		$data_search_type = 'ajax';
	}
	$search_box_type = 'standard';
	$search_box_submit = 'submit';
	if (isset($g5plus_options['search_box_type'])) {
		$search_box_type = $g5plus_options['search_box_type'];
	}
	if ($search_box_type == 'ajax') {
		$search_box_submit = 'button';
	}
?>
<?php if (in_array($g5plus_header_layout, array('header-2', 'header-4')) || (($g5plus_header_layout == 'header-7') && ($search_box_type == 'standard'))): ?>
	<div class="search-button-wrapper header-customize-item" data-hint-message="<?php _e('Type at least 3 characters to search','g5plus-wolverine') ?>">
		<form method="get" action="<?php echo esc_url(site_url()); ?>" class="search-type-<?php echo esc_attr($search_box_type) ?>">
			<input type="text" name="s" placeholder="<?php _e('Search','g5plus-wolverine'); ?>"/>
			<button type="<?php echo esc_attr($search_box_submit) ?>"><i class="wicon icon-search-icon"></i></button>
		</form>
	</div>
<?php else:?>
	<div class="search-button-wrapper header-customize-item <?php echo esc_attr($data_search_type) ?>">
		<a class="icon-search-menu" href="#" data-search-type="<?php echo esc_attr($data_search_type) ?>"><i class="wicon icon-search-icon"></i></a>
	</div>
<?php endif;?>