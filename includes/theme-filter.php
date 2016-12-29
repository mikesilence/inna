<?php
/*---------------------------------------------------
/* COMMENT FIELDS
/*---------------------------------------------------*/
if (!function_exists('g5plus_comment_fields')) {
    function g5plus_comment_fields($fields) {

        $commenter = wp_get_current_commenter();
        $req = get_option('require_name_email');
        $aria_req = ($req ? " aria-required='true'" : '');
        $html5 = current_theme_supports('html5', 'comment-form') ? 'html5' : 'xhtml';;

        $fields = array(
            'author' => '<div class="form-group col-md-6">' .
                '<input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" placeholder="'.__('Name*','g5plus-wolverine').'" ' . $aria_req . '>' .
                '</div>',
            'email' => '<div class="form-group col-md-6">' .
                '<input id="email" name="email" ' . ($html5 ? 'type="email"' : 'type="text"') . ' value="' . esc_attr($commenter['comment_author_email']) . '" placeholder="'.__('Email*','g5plus-wolverine').'" ' . $aria_req . '>' .
                '</div>'
        );

        return $fields;

    }
    add_filter('g5plus_comment_fields','g5plus_comment_fields');
}

/*---------------------------------------------------
/* COMMENT FORMS ARGS
/*---------------------------------------------------*/
if (!function_exists('g5plus_comment_form_args')) {
    function g5plus_comment_form_args($comment_form_args) {
        $commenter = wp_get_current_commenter();
        $req = get_option('require_name_email');
        $aria_req = ($req ? " aria-required='true'" : '');
        $html5 = current_theme_supports('html5', 'comment-form') ? 'html5' : 'xhtml';;

        $comment_form_args['comment_field'] = '<div class="form-group col-md-12">' .
            '<textarea rows="6" id="comment" name="comment"  placeholder="'.__('Message*','g5plus-wolverine') .'" '. $aria_req .'></textarea>' .
            '</div>';

        $comment_form_args['class_submit'] = 'wolverine-button style1 button-2x';
        $comment_form_args['label_submit'] = __('Send', 'g5plus-wolverine');
        return $comment_form_args;
    }
    add_filter('g5plus_comment_form_args','g5plus_comment_form_args');
}

/*---------------------------------------------------
/* SET ONE PAGE MENU
/*---------------------------------------------------*/
if (!function_exists('g5plus_main_menu_one_page_filter')) {
	function g5plus_main_menu_one_page_filter($args) {
		if (isset($args['theme_location']) && ($args['theme_location'] != 'primary') && ($args['theme_location'] != 'mobile')) {
			return $args;
		}
		$prefix = 'g5plus_';
		$is_one_page = rwmb_meta($prefix . 'is_one_page');
		if ($is_one_page == '1') {
			$args['menu_class'] .= ' menu-one-page';
		}
		return $args;
	}
	add_filter('wp_nav_menu_args','g5plus_main_menu_one_page_filter', 20);
}

/*---------------------------------------------------
/* HEADER CUSTOMIZE
/*---------------------------------------------------*/
if (!function_exists('g5plus_header_customize_filter')) {
	add_filter('g5plus_header_customize_filter','g5plus_header_customize_filter');
	function g5plus_header_customize_filter($args) {
		global $g5plus_options, $g5plus_header_layout;

		$prefix = 'g5plus_';

		$enable_header_customize = rwmb_meta($prefix . 'enable_header_customize');

		$header_customize = array();
		if ($enable_header_customize == '1') {
			$page_header_customize = rwmb_meta($prefix . 'header_customize');
			if (isset($page_header_customize['enable']) && !empty($page_header_customize['enable'])) {
				$header_customize = explode('||', $page_header_customize['enable']);
			}
		}
		else {
			if (isset($g5plus_options['header_customize']) && isset($g5plus_options['header_customize']['enabled']) && is_array($g5plus_options['header_customize']['enabled'])) {
				foreach ($g5plus_options['header_customize']['enabled'] as $key => $value) {
					$header_customize[] = $key;
				}
			}
		}
		$header_nav_separate = rwmb_meta($prefix . 'header_nav_separate');
		if (($header_nav_separate == '') || ($header_nav_separate == '-1')) {
			$header_nav_separate = isset($g5plus_options['header_nav_separate']) && !empty($g5plus_options['header_nav_separate'])
				? $g5plus_options['header_nav_separate'] : '0';
		}

		$header_customize_class = array('header-customize');

		switch ($g5plus_header_layout) {
			case 'header-2':
			case 'header-4':
				$header_customize_class [] = 'nav-separate';
				break;
			case 'header-7':
				break;
			default:
				if ( $header_nav_separate == '1') {
					$header_customize_class [] = 'nav-separate-outer';
				}
				break;
		}

		ob_start();
		if (count($header_customize) > 0) {
			?>
			<div class="<?php echo join(' ', $header_customize_class) ?>">
				<?php foreach ($header_customize as $key){
					switch ($key) {
						case 'search':
							g5plus_get_template('header/search-button');
							break;
						case 'shopping-cart':
							if (class_exists( 'WooCommerce' )) {
								g5plus_get_template('header/mini-cart');
							}
							break;
						case 'social-profile':
							g5plus_get_template('header/social-profile');
							break;
						case 'custom-text':
							g5plus_get_template('header/custom-text');
							break;
					}
				} ?>
			</div>
		<?php
		}

		return ob_get_clean();
	}
}

/*---------------------------------------------------
/* THEME URL REWRITE
/*---------------------------------------------------*/
if (!function_exists('g5plus_less_css_url_rewrite')) {
	function g5plus_less_css_url_rewrite() {
		$my_theme = get_template();
		add_rewrite_rule( 'wp-content/themes/' . $my_theme . '/g5plus-less-css', 'index.php', 'top' );
		flush_rewrite_rules();
	}
	add_action( 'init', 'g5plus_less_css_url_rewrite');
}
function add_query_vars_filter( $vars ){
	$vars[] = "custom-page";
	return $vars;
}
add_filter( 'query_vars', 'add_query_vars_filter' );

/*---------------------------------------------------
/* ADD SEARCH FORM TO BEFORE X-MENU
/*---------------------------------------------------*/
if (!function_exists('g5plus_search_form_before_menu_mobile')) {
	function g5plus_search_form_before_menu_mobile($params) {
		ob_start();
		?>
		<form class="search-form-menu-mobile"  method="get" action="<?php echo esc_url(home_url('/')); ?>">
			<input type="text" name="s" placeholder="<?php _e('Search...','g5plus-wolverine'); ?>">
			<button type="submit"><i class="fa fa-search"></i></button>
		</form>
		<?php
		$params .= ob_get_clean();

		return $params;
	}
	add_filter('g5plus_before_menu_mobile_filter','g5plus_search_form_before_menu_mobile', 10);
}

/*---------------------------------------------------
/* CUSTOM HEADER CSS
/*---------------------------------------------------*/
if (!function_exists('g5plus_custom_header_css')) {
	function g5plus_custom_header_css() {
		$page_id = '0';
		if (isset($_REQUEST['current_page_id'])) {
			$page_id = $_REQUEST['current_page_id'];
		}

		$css_variable = g5plus_custom_css_variable($page_id);

		if (!class_exists('Less_Parser')) {
			require_once THEME_DIR . 'g5plus-framework/less/Autoloader.php';
			Less_Autoloader::register();
		}
		$parser = new Less_Parser(array( 'compress'=>true ));

		$parser->parse($css_variable, THEME_URL);

		//global $g5plus_options;
		global $g5plus_options;

		if (isset($g5plus_options['enable_rtl_mode'])) {
			$enable_rtl_mode =  $g5plus_options['enable_rtl_mode'];
		}

		if (is_rtl() || $enable_rtl_mode == '1' || isset($_GET['RTL'])) {
			$parser->parseFile( THEME_DIR . 'assets/css/less/header-customize-rtl.less', THEME_URL );
			$parser->parseFile( THEME_DIR . 'assets/css/less/footer-customize.less', THEME_URL );
		}
		else {
			$parser->parseFile( THEME_DIR . 'assets/css/less/header-customize.less', THEME_URL );
			$parser->parseFile( THEME_DIR . 'assets/css/less/footer-customize.less', THEME_URL );
		}

		$css = $parser->getCss();
		header("Content-type: text/css; charset: UTF-8");
		echo sprintf('%s', $css);
	}
	add_action('custom-page/header-custom-css', 'g5plus_custom_header_css');
}


/*---------------------------------------------------
/* ADD FILE TYPE
/*---------------------------------------------------*/
if (!function_exists('g5plus_upload_types')) {
	function g5plus_upload_types($existing_mimes=array()){
		$existing_mimes['svg'] = 'image/svg+xml';
		return $existing_mimes;
	}
	add_filter('upload_mimes', 'g5plus_upload_types');
}

// STICKY LOGO
if (!function_exists('g5plus_sticky_logo')) {
	function g5plus_sticky_logo($agrs){
		global $g5plus_options, $g5plus_header_layout;
		if (!in_array($g5plus_header_layout, array('header-2', 'header-4', 'header-5', 'header-6'))) {
			return $agrs;
		}

		$prefix = 'g5plus_';

		$logo_sticky_meta_id = rwmb_meta($prefix . 'sticky_logo');
		$logo_sticky_meta = rwmb_meta($prefix . 'sticky_logo', 'type=image_advanced');

		$logo_sticky = '';
		if ($logo_sticky_meta !== array() && isset($logo_sticky_meta[$logo_sticky_meta_id]) && isset($logo_sticky_meta[$logo_sticky_meta_id]['full_url'])) {
			$logo_sticky = $logo_sticky_meta[$logo_sticky_meta_id]['full_url'];
		}
		if (empty($logo_sticky)) {
			if (isset($g5plus_options['sticky_logo']) && isset($g5plus_options['sticky_logo']['url'])) {
				$logo_sticky = $g5plus_options['sticky_logo']['url'];
			}
			else if (isset($g5plus_options['logo']) && isset($g5plus_options['logo']['url'])) {
				$logo_sticky = $g5plus_options['logo']['url'];
			}
		}

		if (!empty($logo_sticky)) {
			ob_start();
			?>
				<li class="logo-sticky">
					<a  href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> - <?php bloginfo( 'description' ); ?>">
						<img src="<?php echo esc_url($logo_sticky); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> - <?php bloginfo( 'description' ); ?>" />
					</a>
				</li>
			<?php

			$agrs .= ob_get_clean();
		}

		return $agrs;
	}
	add_filter('xmenu_primary_filter_before', 'g5plus_sticky_logo');
}