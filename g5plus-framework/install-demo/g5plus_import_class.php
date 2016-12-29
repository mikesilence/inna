<?php
/**
 * Created by PhpStorm.
 * User: duonglh
 * Date: 8/28/14
 * Time: 3:46 PM
 */
define( 'G5PLUS_LOG_PROCESS_SLIDER', get_template_directory() . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'data-demo' . DIRECTORY_SEPARATOR . 'log' .DIRECTORY_SEPARATOR . 'log_process_slider.log' );

class g5plus_import extends G5_Import {

	var $preStringOption;
	var $results;
	var $getOptions;
	var $saveOptions;
	var $termNames;

	/**
	 * @param $option_file File path of restore setting file
	 */
	function saveOptions( $option_file ) {
		global $wpdb;
		if ( ! is_file( $option_file ) ) {
			return false;
		}
		require_once(ABSPATH . 'wp-admin/includes/file.php');
		WP_Filesystem();
		global $wp_filesystem;
		$setting_data = (array)json_decode($wp_filesystem->get_contents( $option_file ), true);
		$setting_dc = 'ba' . 'se' . 64 . '_de' . 'code';

		foreach($setting_data as $key => $value) {
			$s_query = '';
			if (get_option($key) === false) {
				$s_query = $wpdb->prepare("insert into $wpdb->options(`option_name`, `option_value`, `autoload`) values(%s, %s, %s)", $key, $setting_dc($value["option_value"]), $value["autoload"]);
			}
			else {
				$s_query = $wpdb->prepare("update $wpdb->options set `option_value` = %s , `autoload` = %s where option_name = %s", $setting_dc($value["option_value"]), $value["autoload"], $key);
			}

			$wpdb->query($s_query);
		}


		return true;
	}

	function import_revslider($other_data) {
		require_once(ABSPATH . 'wp-admin/includes/file.php');
		WP_Filesystem();
		global $wp_filesystem;
		$count_installed = 0;
		if (file_exists(G5PLUS_LOG_PROCESS_SLIDER)) {
			$count_installed = $wp_filesystem->get_contents(G5PLUS_LOG_PROCESS_SLIDER);
		}

		$is_import = false;
		$demo_site = isset($_REQUEST['demo_site']) ? $_REQUEST['demo_site'] : '.';

		if ( $handle = opendir( THEME_DIR . "assets" . DIRECTORY_SEPARATOR . "data-demo". DIRECTORY_SEPARATOR . $demo_site . DIRECTORY_SEPARATOR . "revslider" ) ) {
			$amount = 0;
			while ( false !== ( $entry = readdir( $handle ) ) ) {
				if ( $entry != "." && $entry != ".." ) {
					$amount +=1;
				}
			}
			closedir( $handle );
		}

		if ( $handle = opendir( THEME_DIR . "assets" . DIRECTORY_SEPARATOR . "data-demo". DIRECTORY_SEPARATOR . $demo_site . DIRECTORY_SEPARATOR . "revslider" ) ) {
			$count = 0;
			while ( false !== ( $entry = readdir( $handle ) ) ) {
				if ( $entry != "." && $entry != ".." ) {
					if ($count < $count_installed) {
						$count+=1;
						continue;
					}

					$rev_import_file = THEME_DIR . "assets" . DIRECTORY_SEPARATOR . "data-demo" . DIRECTORY_SEPARATOR . $demo_site . DIRECTORY_SEPARATOR . "revslider" . DIRECTORY_SEPARATOR . $entry;
					if ( class_exists( 'RevSlider' ) ) {
						$slider   = new RevSlider();
						$slider->importSliderFromPost( true, true, $rev_import_file );
						$is_import = true;
						$wp_filesystem->put_contents(G5PLUS_LOG_PROCESS_SLIDER, $count_installed + 1, FS_CHMOD_FILE);
						break;

					} else {
						return 'done';
					}
				}
			}
			closedir( $handle );
		} else {
			return 'done';
		}
		if ($is_import) {
			return sprintf('%d|%d', ($count_installed + 1), $amount);
		}
		return 'done';
	}

} 