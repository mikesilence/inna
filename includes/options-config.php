<?php

/**
 * ReduxFramework Sample Config File
 * For full documentation, please visit: http://docs.reduxframework.com/
 */

if ( ! class_exists( 'Redux_Framework_options_config' ) ) {

    class Redux_Framework_options_config {

        public $args = array();
        public $sections = array();
        public $theme;
        public $ReduxFramework;

        public function __construct() {
            if ( ! class_exists( 'ReduxFramework' ) ) {
                return;
            }
            // This is needed. Bah WordPress bugs.  ;)
            /*if ( true == Redux_Helpers::isTheme( __FILE__ ) ) {
				$this->initSettings();
			} else {
				add_action( 'plugins_loaded', array( $this, 'initSettings' ), 10 );
			}*/

            $this->initSettings();
        }

        public function initSettings() {
            // Set the default arguments
            $this->setArguments();

            // Set a few help tabs so you can see how it's done
            $this->setHelpTabs();

            // Create the sections and fields
            $this->setSections();

            if ( ! isset( $this->args['opt_name'] ) ) { // No errors please
                return;
            }

            $this->ReduxFramework = new ReduxFramework( $this->sections, $this->args );
        }

        public function setSections() {

            $page_title_bg_url = THEME_URL . 'assets/images/bg-page-title.jpg';
            $logo_under_construction = THEME_URL . 'assets/images/logo_under_construction.png';
            $image_left_under_construction = THEME_URL . 'assets/images/image_left.png';

            // General Setting
            $this->sections[] = array(
                'title'  => __( 'General Setting', 'g5plus-wolverine' ),
                'desc'   => '',
                'icon'   => 'el el-wrench',
                'fields' => array(
                    array(
                        'id' => 'home_preloader',
                        'type' => 'select',
                        'title' => __('Home Preloader', 'g5plus-wolverine'),
                        'subtitle' => __('Enable/Disable Home Preloader', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array(
                            'square-1'	=> 'Square 01',
                            'square-2'	=> 'Square 02',
                            'square-3'	=> 'Square 03',
                            'square-4'	=> 'Square 04',
                            'square-5'	=> 'Square 05',
                            'square-6'	=> 'Square 06',
                            'square-7'	=> 'Square 07',
                            'square-8'	=> 'Square 08',
                            'square-9'	=> 'Square 09',
                            'round-1'	=> 'Round 01',
                            'round-2'	=> 'Round 02',
                            'round-3'	=> 'Round 03',
                            'round-4'	=> 'Round 04',
                            'round-5'	=> 'Round 05',
                            'round-6'	=> 'Round 06',
                            'round-7'	=> 'Round 07',
                            'round-8'	=> 'Round 08',
                            'round-9'	=> 'Round 09',
                            'various-1'	=> 'Various 01',
                            'various-2'	=> 'Various 02',
                            'various-3'	=> 'Various 03',
                            'various-4'	=> 'Various 04',
                            'various-5'	=> 'Various 05',
                            'various-6'	=> 'Various 06',
                            'various-7'	=> 'Various 07',
                            'various-8'	=> 'Various 08',
                            'various-9'	=> 'Various 09',
                            'various-10'	=> 'Various 10',

                        ),
                        'default' => ''
                    ),


                    array(
                        'id'       => 'home_preloader_bg_color',
                        'type'     => 'color_rgba',
                        'title'    => __( 'Preloader background color', 'g5plus-wolverine' ),
                        'subtitle' => __( 'Set Preloader background color.', 'g5plus-wolverine' ),
                        'default'  => array(),
                        'mode'     => 'background',
                        'validate' => 'colorrgba',
	                    'required'  => array('home_preloader', 'not_empty_and', array('none')),
                    ),

                    array(
                        'id'       => 'home_preloader_spinner_color',
                        'type'     => 'color',
                        'title'    => __('Preloader spinner color', 'g5plus-wolverine'),
                        'subtitle' => __('Pick a preloader spinner color for the Top Bar', 'g5plus-wolverine'),
                        'default'  => '',
                        'validate' => 'color',
	                    'required'  => array('home_preloader', 'not_empty_and', array('none')),
                    ),

                    array(
                        'id' => 'smooth_scroll',
                        'type' => 'button_set',
                        'title' => __('Smooth Scroll', 'g5plus-wolverine'),
                        'subtitle' => __('Enable/Disable Smooth Scroll', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array('1' => 'On','0' => 'Off'),
                        'default' => '0'
                    ),

                    array(
                        'id' => 'custom_scroll',
                        'type' => 'button_set',
                        'title' => __('Custom Scroll', 'g5plus-wolverine'),
                        'subtitle' => __('Enable/Disable Custom Scroll', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array('1' => 'On','0' => 'Off'),
                        'default' => '0'
                    ),

                    array(
                        'id'        => 'custom_scroll_width',
                        'type'      => 'text',
                        'title'     => __('Custom Scroll Width', 'g5plus-wolverine'),
                        'subtitle'  => __('This must be numeric (no px) or empty.', 'g5plus-wolverine'),
                        'validate'  => 'numeric',
                        'default'   => '10',
                        'required'  => array('custom_scroll', '=', array('1')),
                    ),

                    array(
                        'id'       => 'custom_scroll_color',
                        'type'     => 'color',
                        'title'    => __('Custom Scroll Color', 'g5plus-wolverine'),
                        'subtitle' => __('Set Custom Scroll Color', 'g5plus-wolverine'),
                        'default'  => '#19394B',
                        'validate' => 'color',
                        'required'  => array('custom_scroll', '=', array('1')),
                    ),

                    array(
                        'id'       => 'custom_scroll_thumb_color',
                        'type'     => 'color',
                        'title'    => __('Custom Scroll Thumb Color', 'g5plus-wolverine'),
                        'subtitle' => __('Set Custom Scroll Thumb Color', 'g5plus-wolverine'),
                        'default'  => '#e8aa00',
                        'validate' => 'color',
                        'required'  => array('custom_scroll', '=', array('1')),
                    ),


                    array(
                        'id' => 'panel_selector',
                        'type' => 'button_set',
                        'title' => __('Panel Selector', 'g5plus-wolverine'),
                        'subtitle' => __('Enable/Disable Panel Selector', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array('1' => 'On','0' => 'Off'),
                        'default' => '0'
                    ),
                    array(
                        'id' => 'back_to_top',
                        'type' => 'button_set',
                        'title' => __('Back To Top', 'g5plus-wolverine'),
                        'subtitle' => __('Enable/Disable Back to top button', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array('1' => 'On','0' => 'Off'),
                        'default' => '1'
                    ),

	                array(
		                'id' => 'enable_rtl_mode',
		                'type' => 'button_set',
		                'title' => __('Enable RTL mode', 'g5plus-wolverine'),
		                'subtitle' => __('Enable/Disable RTL mode', 'g5plus-wolverine'),
		                'desc' => '',
		                'options' => array('1' => 'On','0' => 'Off'),
		                'default' => '0'
	                ),


	                array(
                        'id' => 'enable_social_meta',
                        'type' => 'button_set',
                        'title' => __('Enable Social Meta Tags', 'g5plus-wolverine'),
                        'subtitle' => __('Enable the social meta head tag output.', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array('1' => 'On','0' => 'Off'),
                        'default' => '0'
                    ),

                    array(
                        'id' => 'twitter_author_username',
                        'type' => 'text',
                        'title' => __('Twitter Publisher Username', 'g5plus-wolverine'),
                        'subtitle' => __( 'Enter your twitter username here, to be used for the Twitter Card date. Ensure that you do not include the @ symbol.','g5plus-wolverine'),
                        'desc' => '',
                        'default' => "",
                        'required'  => array('enable_social_meta', '=', array('1')),
                    ),
                    array(
                        'id' => 'googleplus_author',
                        'type' => 'text',
                        'title' => __('Google+ Username', 'g5plus-wolverine'),
                        'subtitle' => __('Enter your Google+ username here, to be used for the authorship meta.','g5plus-wolverine'),
                        'desc' => '',
                        'default' => "",
                        'required'  => array('enable_social_meta', '=', array('1')),
                    ),


                    array(
                        'id' => 'general_divide_2',
                        'type' => 'divide'
                    ),
                    array(
                        'id' => 'layout_style',
                        'type' => 'image_select',
                        'title' => __('Layout Style', 'g5plus-wolverine'),
                        'subtitle' => __('Select the layout style', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array(
                            'boxed' => array('title' => 'Boxed', 'img' => THEME_URL.'assets/images/theme-options/layout-boxed.png'),
                            'wide' => array('title' => 'Wide', 'img' => THEME_URL.'assets/images/theme-options/layout-wide.png'),
                            'float' => array('title' => 'Float', 'img' => THEME_URL.'assets/images/theme-options/layout-float.png')
                        ),
                        'default' => 'wide'
                    ),


                    array(
                        'id' => 'body_background_mode',
                        'type' => 'button_set',
                        'title' => __('Body Background Mode', 'g5plus-wolverine'),
                        'subtitle' => __('Chose Background Mode', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array('background' => 'Background','pattern' => 'Pattern'),
                        'default' => 'background'
                    ),

                    array(
                        'id'       => 'body_background',
                        'type'     => 'background',
                        'output'   => array( 'body' ),
                        'title'    => __( 'Body Background', 'g5plus-wolverine' ),
                        'subtitle' => __( 'Body background (Apply for Boxed layout style).', 'g5plus-wolverine' ),
                        'default'  => array(
                            'background-color' => '',
                            'background-repeat' => 'no-repeat',
                            'background-position' => 'center center',
                            'background-attachment' => 'fixed',
                            'background-size' => 'cover'
                        ),
                        'required'  => array(
                                array('body_background_mode', '=', array('background'))
                        ),
                    ),
                    array(
                        'id' => 'body_background_pattern',
                        'type' => 'image_select',
                        'title' => __('Background Pattern', 'g5plus-wolverine'),
                        'subtitle' => __('Body background pattern(Apply for Boxed layout style)', 'g5plus-wolverine'),
                        'desc' => '',
                        'height' => '40px',
                        'options' => array(
                            'pattern-1.png' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/pattern-1.png'),
                            'pattern-2.png' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/pattern-2.png'),
                            'pattern-3.png' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/pattern-3.png'),
                            'pattern-4.png' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/pattern-4.png'),
                            'pattern-5.png' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/pattern-5.png'),
                            'pattern-6.png' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/pattern-6.png'),
                            'pattern-7.png' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/pattern-7.png'),
                            'pattern-8.png' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/pattern-8.png'),
                        ),
                        'default' => 'pattern-1.png',
                        'required'  => array(
                                array('body_background_mode', '=', array('pattern'))
                            ) ,
                    ),
                )
            );

            $this->sections[] = array(
                'title' => __('Maintenance Mode', 'g5plus-wolverine'),
                'desc' => '',
                'subsection' => true,
                'icon' => 'el-icon-eye-close',
                'fields' => array(
                    array(
                        'id' => 'enable_maintenance',
                        'type' => 'button_set',
                        'title' => __('Enable Maintenance', 'g5plus-wolverine'),
                        'subtitle' => __('Enable the themes maintenance mode.', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array('2' => 'On (Custom Page)', '1' => 'On (Standard)','0' => 'Off',),
                        'default' => '0'
                    ),
                    array(
                        'id' => 'maintenance_mode_page',
                        'type' => 'select',
                        'data' => 'pages',
                        'required'  => array('enable_maintenance', '=', '2'),
                        'title' => __('Custom Maintenance Mode Page', 'g5plus-wolverine'),
                        'subtitle' => __('Select the page that is your maintenace page, if you would like to show a custom page instead of the standard WordPress message. You should use the Holding Page template for this page.', 'g5plus-wolverine'),
                        'desc' => '',
                        'default' => '',
                        'args' => array()
                    ),
                ),
            );


            // Performance Options
            $this->sections[] = array(
                'title'  => __( 'Performance', 'g5plus-wolverine' ),
                'desc'   => '',
                'icon'   => 'el el-dashboard',
                'subsection' => true,
                'fields' => array(
                    array(
                        'id' => 'enable_minifile_js',
                        'type' => 'button_set',
                        'title' => __('Enable Mini File JS', 'g5plus-wolverine'),
                        'subtitle' => __('Enable/Disable Mini File JS', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array('1' => 'On','0' => 'Off'),
                        'default' => '0'
                    ),
                    array(
                        'id' => 'enable_minifile_css',
                        'type' => 'button_set',
                        'title' => __('Enable Mini File CSS', 'g5plus-wolverine'),
                        'subtitle' => __('Enable/Disable Mini File CSS', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array('1' => 'On','0' => 'Off'),
                        'default' => '0'
                    ),
                )
            );

            // Custom Favicon
            $this->sections[] = array(
                'title'  => __( 'Custom Favicon', 'g5plus-wolverine' ),
                'desc'   => '',
                'icon'   => 'el el-eye-open',
                'subsection' => true,
                'fields' => array(
                    array(
                        'id' => 'custom_favicon',
                        'type' => 'media',
                        'url'=> true,
                        'title' => __('Custom favicon', 'g5plus-wolverine'),
                        'subtitle' => __('Upload a 16px x 16px Png/Gif/ico image that will represent your website favicon', 'g5plus-wolverine'),
                        'desc' => ''
                    ),
                    array(
                        'id' => 'custom_ios_title',
                        'type' => 'text',
                        'title' => __('Custom iOS Bookmark Title', 'g5plus-wolverine'),
                        'subtitle' => __('Enter a custom title for your site for when it is added as an iOS bookmark.', 'g5plus-wolverine'),
                        'desc' => '',
                        'default' => ''
                    ),
                    array(
                        'id' => 'custom_ios_icon57',
                        'type' => 'media',
                        'url'=> true,
                        'title' => __('Custom iOS 57x57', 'g5plus-wolverine'),
                        'subtitle' => __('Upload a 57px x 57px Png image that will be your website bookmark on non-retina iOS devices.', 'g5plus-wolverine'),
                        'desc' => ''
                    ),
                    array(
                        'id' => 'custom_ios_icon72',
                        'type' => 'media',
                        'url'=> true,
                        'title' => __('Custom iOS 72x72', 'g5plus-wolverine'),
                        'subtitle' => __('Upload a 72px x 72px Png image that will be your website bookmark on non-retina iOS devices.', 'g5plus-wolverine'),
                        'desc' => ''
                    ),
                    array(
                        'id' => 'custom_ios_icon114',
                        'type' => 'media',
                        'url'=> true,
                        'title' => __('Custom iOS 114x114', 'g5plus-wolverine'),
                        'subtitle' => __('Upload a 114px x 114px Png image that will be your website bookmark on retina iOS devices.', 'g5plus-wolverine'),
                        'desc' => ''
                    ),
                    array(
                        'id' => 'custom_ios_icon144',
                        'type' => 'media',
                        'url'=> true,
                        'title' => __('Custom iOS 144x144', 'g5plus-wolverine'),
                        'subtitle' => __('Upload a 144px x 144px Png image that will be your website bookmark on retina iOS devices.', 'g5plus-wolverine'),
                        'desc' => ''
                    ),
                )
            );


            // 404
            $this->sections[] = array(
                'title'  => __( '404 Setting', 'g5plus-wolverine' ),
                'desc'   => '',
                'subsection' => true,
                'icon'   => 'el el-error',
                'fields' => array(
                    array(
                        'id'        => 'page_title_404',
                        'type'      => 'text',
                        'title'     => __('Page Title 404', 'g5plus-wolverine'),
                        'default'   => 'Error 404 - znot found',
                    ),
                    array(
                        'id'        => 'sub_page_title_404',
                        'type'      => 'text',
                        'title'     => __('SubPage Title 404', 'g5plus-wolverine'),
                        'default'   => '',
                    ),
                    array(
                        'id' => 'page_404_bg_image',
                        'type' => 'media',
                        'url'=> true,
                        'title' => __('Background page title', 'g5plus-wolverine'),
                        'subtitle' => __('Upload your background image here.', 'g5plus-wolverine'),
                        'desc' => '',
                        'default' =>  array(
                            'url' => $page_title_bg_url
                        )
                    ),
                    array(
                        'id'        => 'title_404',
                        'type'      => 'text',
                        'title'     => __('Title 404', 'g5plus-wolverine'),
                        'default'   => 'SO SORRY! =(',
                    ),
                    array(
                        'id'        => 'subtitle_404',
                        'type'      => 'textarea',
                        'title'     => __('Subtitle 404', 'g5plus-wolverine'),
                        'default'   => 'The document you are looking for may have been removed or re-named. Please contact the web site owner for further assistance.',
                    ),
                    array(
                        'id'        => 'go_back_404',
                        'type'      => 'text',
                        'title'     => __('Go back label', 'g5plus-wolverine'),
                        'default'   => 'BACK TO HOME',
                    ),
                    array(
                        'id'        => 'go_back_url_404',
                        'type'      => 'text',
                        'title'     => __('Go back link', 'g5plus-wolverine'),
                        'default'   => '',
                    ),
                    array(
                        'id'        => 'copyright_404',
                        'type'      => 'textarea',
                        'title'     => __('Go back information', 'g5plus-wolverine'),
                        'default'   => '© 2015 WOLVERINE TEMPLATE. DESIGNED BY OSTHEMES',
                    )
                )
            );

            // Pages Setting
            $this->sections[] = array(
                'title'  => __( 'Pages Setting', 'g5plus-wolverine' ),
                'desc'   => '',
                'icon'   => 'el el-th',
                'fields' => array(
                    array(
                        'id' => 'page_layout',
                        'type' => 'button_set',
                        'title' => __('Layout', 'g5plus-wolverine'),
                        'subtitle' => __('Select Page Layout', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array('full' => 'Full Width','container' => 'Container', 'container-fluid' => 'Container Fluid'),
                        'default' => 'container'
                    ),
                    array(
                        'id' => 'page_sidebar',
                        'type' => 'image_select',
                        'title' => __('Sidebar', 'g5plus-wolverine'),
                        'subtitle' => __('Set Sidebar Style', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array(
                            'none' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/sidebar-none.png'),
                            'left' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/sidebar-left.png'),
                            'right' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/sidebar-right.png'),
                            'both' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/sidebar-both.png'),
                        ),
                        'default' => 'right'
                    ),

                    array(
                        'id' => 'page_sidebar_width',
                        'type' => 'button_set',
                        'title' => __('Sidebar Width', 'g5plus-wolverine'),
                        'subtitle' => __('Set Sidebar width', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array('small' => 'Small (1/4)', 'large' => 'Large (1/3)'),
                        'default' => 'small',
                        'required'  => array('page_sidebar', '=', array('left','both','right')),
                    ),



                    array(
                        'id' => 'page_left_sidebar',
                        'type' => 'select',
                        'title' => __('Left Sidebar', 'g5plus-wolverine'),
                        'subtitle' => "Choose the default left sidebar",
                        'data'      => 'sidebars',
                        'desc' => '',
                        'default' => 'sidebar-1',
                        'required'  => array('page_sidebar', '=', array('left','both')),
                    ),
                    array(
                        'id' => 'page_right_sidebar',
                        'type' => 'select',
                        'title' => __('Right Sidebar', 'g5plus-wolverine'),
                        'subtitle' => "Choose the default right sidebar",
                        'data'      => 'sidebars',
                        'desc' => '',
                        'default' => 'sidebar-2',
                        'required'  => array('page_sidebar', '=', array('right','both')),
                    ),

                    array(
                        'id' => 'breadcrumbs_in_page_title',
                        'type' => 'button_set',
                        'title' => __('Breadcrumbs', 'g5plus-wolverine'),
                        'subtitle' => __('Enable/Disable Breadcrumbs In Pages', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array('1' => 'On','0' => 'Off'),
                        'default' => '1'
                    ),
                    array(
                        'id' => 'show_page_title',
                        'type' => 'button_set',
                        'title' => __('Show Page Title', 'g5plus-wolverine'),
                        'subtitle' => __('Enable/Disable Page Title', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array('1' => 'On','0' => 'Off'),
                        'default' => '1'
                    ),

                    array(
                        'id'       => 'page_title_text_align',
                        'type'     => 'button_set',
                        'title'    => __( 'Page Title Text Align', 'g5plus-wolverine' ),
                        'subtitle' => __( 'Set Page Title Text Align', 'g5plus-wolverine' ),
                        'desc'     => '',
                        'options'  => array( 'left' => 'Left', 'center' => 'Center', 'right' => 'Right' ),
                        'default'  => 'left',
                        'required'  => array('show_page_title', '=', array('1')),
                    ),

                    array(
                        'id'       => 'page_title_parallax',
                        'type'     => 'button_set',
                        'title'    => __( 'Page Title Parallax', 'g5plus-wolverine' ),
                        'subtitle' => __( 'Enable Page Title Parallax', 'g5plus-wolverine' ),
                        'desc'     => '',
                        'options'  => array( '1' => 'Enable', '0' => 'Disable' ),
                        'default'  => '0',
                        'required'  => array('show_page_title', '=', array('1')),
                    ),

                    array(
                        'id'       => 'page_title_height',
                        'type'     => 'dimensions',
                        'units' => 'px',
                        'width'    =>  false,
                        'title'    => __('Page Title Height', 'g5plus-wolverine'),
                        'desc'      => __('You can set a height for the page title here', 'g5plus-wolverine'),
                        'required'  => array('show_page_title', '=', array('1')),
                        'output' => array('.page-title-height'),
                        'default'  => array(
                            'Height'  => ''
                        )
                    ),


                    array(
                        'id' => 'page_title_bg_image',
                        'type' => 'media',
                        'url'=> true,
                        'title' => __('Page Title Background', 'g5plus-wolverine'),
                        'subtitle' => __('Upload page title background.', 'g5plus-wolverine'),
                        'desc' => '',
                        'default' => array(
                            'url' => $page_title_bg_url
                        ),
                        'required'  => array('show_page_title', '=', array('1')),
                    ),

                    array(
                        'id' => 'page_comment',
                        'type' => 'button_set',
                        'title' => __('Page Comment', 'g5plus-wolverine'),
                        'subtitle' => __('Enable/Disable page comment', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array('1' => 'On','0' => 'Off'),
                        'default' => '1'
                    )
                )
            );

	        // Archive Setting
	        $this->sections[] = array(
		        'title'  => __( 'Archive Setting', 'g5plus-wolverine' ),
		        'desc'   => '',
		        'icon'   => 'el el-folder-close',
		        'fields' => array(

			        array(
				        'id' => 'archive_layout',
				        'type' => 'button_set',
				        'title' => __('Layout', 'g5plus-wolverine'),
				        'subtitle' => __('Select Archive Layout', 'g5plus-wolverine'),
				        'desc' => '',
				        'options' => array('full' => 'Full Width','container' => 'Container', 'container-fluid' => 'Container Fluid'),
				        'default' => 'container'
			        ),

			        array(
				        'id' => 'archive_sidebar',
				        'type' => 'image_select',
				        'title' => __('Sidebar', 'g5plus-wolverine'),
				        'subtitle' => __('Set Sidebar Style', 'g5plus-wolverine'),
				        'desc' => '',
				        'options' => array(
					        'none' => array('title' => '', 'img' => THEME_URL . 'assets/images/theme-options/sidebar-none.png'),
					        'left' => array('title' => '', 'img' => THEME_URL . 'assets/images/theme-options/sidebar-left.png'),
					        'right' => array('title' => '', 'img' => THEME_URL . 'assets/images/theme-options/sidebar-right.png'),
					        'both' => array('title' => '', 'img' => THEME_URL . 'assets/images/theme-options/sidebar-both.png'),
				        ),
				        'default' => 'right'
			        ),


			        array(
				        'id' => 'archive_sidebar_width',
				        'type' => 'button_set',
				        'title' => __('Sidebar Width', 'g5plus-wolverine'),
				        'subtitle' => __('Set Sidebar width', 'g5plus-wolverine'),
				        'desc' => '',
				        'options' => array('small' => 'Small (1/4)', 'large' => 'Large (1/3)'),
				        'default' => 'small',
				        'required'  => array('archive_sidebar', '=', array('left','both','right')),
			        ),

			        array(
				        'id' => 'archive_left_sidebar',
				        'type' => 'select',
				        'title' => __('Left Sidebar', 'g5plus-wolverine'),
				        'subtitle' => "Choose the default left sidebar",
				        'data'      => 'sidebars',
				        'desc' => '',
				        'default' => 'sidebar-1',
				        'required'  => array('archive_sidebar', '=', array('left','both')),
			        ),
			        array(
				        'id' => 'archive_right_sidebar',
				        'type' => 'select',
				        'title' => __('Right Sidebar', 'g5plus-wolverine'),
				        'subtitle' => "Choose the default right sidebar",
				        'data'      => 'sidebars',
				        'desc' => '',
				        'default' => 'sidebar-2',
				        'required'  => array('archive_sidebar', '=', array('right','both')),
			        ),
			        array(
				        'id' => 'archive_paging_style',
				        'type' => 'button_set',
				        'title' => __('Paging Style', 'g5plus-wolverine'),
				        'subtitle' => __('Select archive paging style', 'g5plus-wolverine'),
				        'desc' => '',
				        'options' => array('default' => 'Default', 'load-more' => 'Load More', 'infinity-scroll' => 'Infinity Scroll'),
				        'default' => 'default'
			        ),

			        array(
				        'id' => 'archive_display_type',
				        'type' => 'select',
				        'title' => __('Archive Display Type', 'g5plus-wolverine'),
				        'subtitle' => __('Select archive display type', 'g5plus-wolverine'),
				        'desc' => '',
				        'options' => array(
					        'classic-01' => 'Classic 01',
					        'classic-02' => 'Classic 02',
					        'grid-01' => 'Grid 01',
					        'grid-02' => 'Grid 02',
					        'masonry-01' => 'Masonry 01',
					        'masonry-02' => 'Masonry 02'
				        ),
				        'default' => 'classic-01'
			        ),

			        array(
				        'id' => 'archive_display_columns',
				        'type' => 'select',
				        'title' => __('Archive Display Columns', 'g5plus-wolverine'),
				        'subtitle' => __('Choose the number of columns to display on archive pages.','g5plus-wolverine'),
				        'options' => array(
					        '2'		=> '2',
					        '3'		=> '3',
					        '4'		=> '4',
				        ),
				        'desc' => '',
				        'default' => '2',
				        'required' => array('archive_display_type','=',array('grid-01','grid-02','masonry-01','masonry-02')),
			        ),
			        array(
				        'id' => 'breadcrumbs_in_archive_title',
				        'type' => 'button_set',
				        'title' => __('Breadcrumbs', 'g5plus-wolverine'),
				        'subtitle' => __('Enable/Disable Breadcrumbs In Archive', 'g5plus-wolverine'),
				        'desc' => '',
				        'options' => array('1' => 'On','0' => 'Off'),
				        'default' => '1'
			        ),

			        array(
				        'id' => 'show_archive_title',
				        'type' => 'button_set',
				        'title' => __('Show Archive Title', 'g5plus-wolverine'),
				        'subtitle' => __('Enable/Disable Archive Title', 'g5plus-wolverine'),
				        'desc' => '',
				        'options' => array('1' => 'On','0' => 'Off'),
				        'default' => '1'
			        ),


                    array(
                        'id'       => 'archive_title_text_align',
                        'type'     => 'button_set',
                        'title'    => __( 'Archive Title Text Align', 'g5plus-wolverine' ),
                        'subtitle' => __( 'Set Archive Title Text Align', 'g5plus-wolverine' ),
                        'desc'     => '',
                        'options'  => array( 'left' => 'Left', 'center' => 'Center', 'right' => 'Right' ),
                        'default'  => 'left',
                        'required' => array('show_archive_title','=',array('1')),
                    ),

                    array(
                        'id'       => 'archive_title_parallax',
                        'type'     => 'button_set',
                        'title'    => __( 'Archive Title Parallax', 'g5plus-wolverine' ),
                        'subtitle' => __( 'Enable Archive Title Parallax', 'g5plus-wolverine' ),
                        'desc'     => '',
                        'options'  => array( '1' => 'Enable', '0' => 'Disable' ),
                        'default'  => '0',
                        'required' => array('show_archive_title','=',array('1')),
                    ),


			        array(
				        'id'        => 'archive_title_height',
				        'type'      => 'dimensions',
				        'title'     => __('Archive Title Height', 'g5plus-wolverine'),
				        'desc'      => __('You can set a height for the archive title here', 'g5plus-wolverine'),
				        'required' => array('show_archive_title','=',array('1')),
				        'units' => 'px',
				        'width'    =>  false,
                        'output' => array('.archive-title-height'),
				        'default'  => array(
					        'Height'  => ''
				        )
			        ),

			        array(
				        'id' => 'archive_title_bg_image',
				        'type' => 'media',
				        'url'=> true,
				        'title' => __('Archive Title Background', 'g5plus-wolverine'),
				        'subtitle' => __('Upload archive title background.', 'g5plus-wolverine'),
				        'desc' => '',
				        'default' =>  array(
					        'url' => $page_title_bg_url
				        ),
				        'required' => array('show_archive_title','=',array('1')),
			        ),
		        )
	        );

	        // Single Blog
	        $this->sections[] = array(
		        'title'  => __( 'Single Blog', 'g5plus-wolverine' ),
		        'desc'   => '',
		        'icon'   => 'el el-file',
		        'subsection' => true,
		        'fields' => array(
			        array(
				        'id' => 'single_blog_layout',
				        'type' => 'button_set',
				        'title' => __('Layout', 'g5plus-wolverine'),
				        'subtitle' => __('Select Single Blog Layout', 'g5plus-wolverine'),
				        'desc' => '',
				        'options' => array('full' => 'Full Width','container' => 'Container', 'container-fluid' => 'Container Fluid'),
				        'default' => 'container'
			        ),

			        array(
				        'id' => 'single_blog_sidebar',
				        'type' => 'image_select',
				        'title' => __('Sidebar', 'g5plus-wolverine'),
				        'subtitle' => __('Set Sidebar Style', 'g5plus-wolverine'),
				        'desc' => '',
				        'options' => array(
					        'none' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/sidebar-none.png'),
					        'left' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/sidebar-left.png'),
					        'right' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/sidebar-right.png'),
					        'both' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/sidebar-both.png'),
				        ),
				        'default' => 'none'
			        ),

			        array(
				        'id' => 'single_blog_sidebar_width',
				        'type' => 'button_set',
				        'title' => __('Sidebar Width', 'g5plus-wolverine'),
				        'subtitle' => __('Set Sidebar width', 'g5plus-wolverine'),
				        'desc' => '',
				        'options' => array('small' => 'Small (1/4)', 'large' => 'Large (1/3)'),
				        'default' => 'small',
				        'required'  => array('single_blog_sidebar', '=', array('left','both','right')),
			        ),


			        array(
				        'id' => 'single_blog_left_sidebar',
				        'type' => 'select',
				        'title' => __('Left Sidebar', 'g5plus-wolverine'),
				        'subtitle' => "Choose the default left sidebar",
				        'data'      => 'sidebars',
				        'desc' => '',
				        'default' => 'sidebar-1',
				        'required'  => array('single_blog_sidebar', '=', array('left','both')),
			        ),

			        array(
				        'id' => 'single_blog_right_sidebar',
				        'type' => 'select',
				        'title' => __('Right Sidebar', 'g5plus-wolverine'),
				        'subtitle' => "Choose the default right sidebar",
				        'data'      => 'sidebars',
				        'desc' => '',
				        'default' => 'sidebar-2',
				        'required'  => array('single_blog_sidebar', '=', array('right','both')),
			        ),

			        array(
				        'id' => 'breadcrumbs_in_single_blog_title',
				        'type' => 'button_set',
				        'title' => __('Breadcrumbs', 'g5plus-wolverine'),
				        'subtitle' => __('Enable/Disable Breadcrumbs In Single Blog', 'g5plus-wolverine'),
				        'desc' => '',
				        'options' => array('1' => 'On','0' => 'Off'),
				        'default' => '1'
			        ),


			        array(
				        'id' => 'show_post_navigation',
				        'type' => 'button_set',
				        'title' => __('Show Post Navigation', 'g5plus-wolverine'),
				        'subtitle' => __('Enable/Disable Post Navigation', 'g5plus-wolverine'),
				        'desc' => '',
				        'options' => array('1' => 'On','0' => 'Off'),
				        'default' => '1'
			        ),

			        array(
				        'id' => 'show_author_info',
				        'type' => 'button_set',
				        'title' => __('Show Author Info', 'g5plus-wolverine'),
				        'subtitle' => __('Enable/Disable Author Info', 'g5plus-wolverine'),
				        'desc' => '',
				        'options' => array('1' => 'On','0' => 'Off'),
				        'default' => '1'
			        ),





			        array(
				        'id' => 'show_related_post',
				        'type' => 'button_set',
				        'title' => __('Show Related Post', 'g5plus-wolverine'),
				        'subtitle' => __('Enable/Disable Related Post', 'g5plus-wolverine'),
				        'desc' => '',
				        'options' => array('1' => 'On','0' => 'Off'),
				        'default' => '1'
			        ),

			        array(
				        'id'       => 'related_post_count',
				        'type'     => 'text',
				        'title'    => __('Related Post Number', 'g5plus-wolverine'),
				        'subtitle' => __('Total Record Of Related Post.', 'g5plus-wolverine'),
				        'validate' => 'number',
				        'default'  => '6',
				        'required'  => array('show_related_post', '=', array('1')),
			        ),

			        array(
				        'id'       => 'related_post_columns',
				        'type'     => 'select',
				        'title'    => __('Related Post Columns', 'g5plus-wolverine'),
				        'default'  => '3',
				        'options' => array('2' => '2' ,'3' => '3','4' => '4'),
				        'select2' => array('allowClear' =>  false) ,
				        'required'  => array('show_related_post', '=', array('1')),
			        ),


			        array(
				        'id' => 'related_post_condition',
				        'type' => 'checkbox',
				        'title' => __('Related Post Condition', 'g5plus-wolverine'),
				        'options' => array(
					        'category' => __('Same Category','g5plus-wolverine'),
					        'tag' => __('Same Tag','g5plus-wolverine'),
				        ),
				        'default' => array(
					        'category'      => '1',
					        'tag'      => '1',
				        ),
				        'required'  => array('show_related_post', '=', array('1')),
			        ),

			        array(
				        'id' => 'related_post_place_holder_image_mode',
				        'type' => 'button_set',
				        'title' => __('Use Placeholder Image With Related Post No Image', 'g5plus-wolverine'),
				        'options' => array('0' => 'Off','1' => 'On (Default)' , '2' => 'On (Images)'),
				        'default' => '1',
				        'required'  => array('show_related_post', '=', array('1')),
			        ),

			        array(
				        'id' => 'related_post_place_holder_image',
				        'type' => 'media',
				        'url'=> true,
				        'title' => __('Placeholder Images For Related Post', 'g5plus-wolverine'),
				        'subtitle' => __('Upload Placeholder Images For Related Post.', 'g5plus-wolverine'),
				        'desc' => '',
				        'required'  => array('related_post_place_holder_image_mode', '=', array('2')),
			        ),


			        array(
				        'id' => 'show_single_blog_title',
				        'type' => 'button_set',
				        'title' => __('Show Single Blog Title', 'g5plus-wolverine'),
				        'subtitle' => __('Enable/Disable Single Blog Title', 'g5plus-wolverine'),
				        'desc' => '',
				        'options' => array('1' => 'On','0' => 'Off'),
				        'default' => '1'
			        ),



                    array(
                        'id'       => 'single_blog_title_text_align',
                        'type'     => 'button_set',
                        'title'    => __( 'Single Blog Title Text Align', 'g5plus-wolverine' ),
                        'subtitle' => __( 'Set Single Blog Title Text Align', 'g5plus-wolverine' ),
                        'desc'     => '',
                        'options'  => array( 'left' => 'Left', 'center' => 'Center', 'right' => 'Right' ),
                        'default'  => 'left',
                        'required'  => array('show_single_blog_title', '=', array('1')),
                    ),

                    array(
                        'id'       => 'single_blog_title_parallax',
                        'type'     => 'button_set',
                        'title'    => __( 'Single Blog Title Parallax', 'g5plus-wolverine' ),
                        'subtitle' => __( 'Enable Single Blog Title Parallax', 'g5plus-wolverine' ),
                        'desc'     => '',
                        'options'  => array( '1' => 'Enable', '0' => 'Disable' ),
                        'default'  => '0',
                        'required'  => array('show_single_blog_title', '=', array('1')),
                    ),



			        array(
				        'id'        => 'single_blog_title_height',
				        'type'      => 'dimensions',
				        'title'     => __('Single Blog Title Height', 'g5plus-wolverine'),
				        'desc'      => __('You can set a height for the single blog title here', 'g5plus-wolverine'),
				        'required'  => array('show_single_blog_title', '=', array('1')),
				        'units' => 'px',
				        'width'    =>  false,
                        'output' => array('.single-blog-title-height'),
				        'default'  => array(
					        'Height'  => ''
				        )
			        ),

			        array(
				        'id' => 'single_blog_title_bg_image',
				        'type' => 'media',
				        'url'=> true,
				        'title' => __('Single Blog Title Background', 'g5plus-wolverine'),
				        'subtitle' => __('Upload single blog title background.', 'g5plus-wolverine'),
				        'desc' => '',
				        'default' =>  array(
					        'url' => $page_title_bg_url
				        ),
				        'required'  => array('show_single_blog_title', '=', array('1'))
			        ),
		        )
	        );

            // Logo
            $this->sections[] = array(
                'title'  => __( 'Logo', 'g5plus-wolverine' ),
                'desc'   => '',
                'icon'   => 'el el-leaf',
                'fields' => array(
                    array(
                        'id' => 'logo',
                        'type' => 'media',
                        'url'=> true,
                        'title' => __('Logo', 'g5plus-wolverine'),
                        'subtitle' => __('Upload your logo here.', 'g5plus-wolverine'),
                        'desc' => '',
                        'default' => array(
                            'url' => THEME_URL . 'assets/images/theme-options/logo.png'
                        )
                    ),

	                array(
		                'id'        => 'logo_height',
		                'type'      => 'dimensions',
		                'title'     => __('Logo Height', 'g5plus-wolverine'),
		                'desc'      => __('You can set a height for the logo here', 'g5plus-wolverine'),
		                'units' => 'px',
		                'width'    =>  false,
		                'default'  => array(
			                'Height'  => ''
		                )
	                ),

                    array(
                        'id'        => 'logo_max_height',
                        'type'      => 'dimensions',
                        'title'     => __('Logo Max Height', 'g5plus-wolverine'),
                        'desc'      => __('You can set a max height for the logo here', 'g5plus-wolverine'),
                        'units' => 'px',
                        'width'    =>  false,
                        'default'  => array(
                            'Height'  => ''
                        )
                    ),

	                array(
		                'id'             => 'logo_padding',
		                'type'           => 'spacing',
		                'mode'           => 'padding',
		                'units'          => 'px',
		                'units_extended' => 'false',
		                'title'          => __('Logo Top/Bottom Padding', 'g5plus-wolverine'),
		                'subtitle'       => __('This must be numeric (no px). Leave balnk for default.', 'g5plus-wolverine'),
		                'desc'           => __('If you would like to override the default logo top/bottom padding, then you can do so here.', 'g5plus-wolverine'),
		                'left'          => false,
		                'right'          => false,
		                'default'            => array(
			                'padding-top'     => '',
			                'padding-bottom'  => '',
			                'units'          => 'px',
		                )
	                ),
	                array(
		                'id' => 'sticky_logo',
		                'type' => 'media',
		                'url'=> true,
		                'title' => __('Sticky Logo', 'g5plus-wolverine'),
		                'subtitle' => __('Upload a sticky version of your logo here', 'g5plus-wolverine'),
		                'desc' => '',
		                'default' => array(
			                'url' => THEME_URL . 'assets/images/theme-options/logo.png'
		                )
	                ),
                )
            );

            // Header
            $this->sections[] = array(
                'title'  => __( 'Header', 'g5plus-wolverine' ),
                'desc'   => '',
                'icon'   => 'el el-credit-card',
                'fields' => array(
	                array(
		                'id'       => 'top_drawer_type',
		                'type'     => 'button_set',
		                'title'    => __( 'Top Drawer Type', 'g5plus-wolverine' ),
		                'subtitle' => __( 'Set top drawer type.', 'g5plus-wolverine' ),
		                'desc'     => '',
		                'options'  => array( 'none' => 'Disable', 'show' => 'Always Show', 'toggle' => 'Toggle' ),
		                'default'  => 'none'
	                ),
	                array(
                        'id'       => 'top_drawer_sidebar',
                        'type' => 'select',
                        'title' => __('Top Drawer Sidebar', 'g5plus-wolverine'),
                        'subtitle' => "Choose the default top drawer sidebar",
                        'data'      => 'sidebars',
                        'desc' => '',
                        'default' => 'top_drawer_sidebar',
		                'required' => array('top_drawer_type','=',array('show','toggle')),
                    ),

                    array(
                        'id' => 'top_drawer_wrapper_layout',
                        'type' => 'button_set',
                        'title' => __('Top Drawer Wrapper Layout', 'g5plus-wolverine'),
                        'subtitle' => __('Select top drawer wrapper layout', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array('full' => 'Full Width','container' => 'Container', 'container-fluid' => 'Container Fluid'),
                        'default' => 'container',
                        'required' => array('top_drawer_type','=',array('show','toggle')),
                    ),

	                array(
		                'id'       => 'top_drawer_hide_mobile',
		                'type'     => 'button_set',
		                'title'    => __( 'Show/Hide Top Drawer on mobile', 'g5plus-wolverine' ),
		                'desc'     => '',
		                'options'  => array( '1' => 'On', '0' => 'Off' ),
		                'default'  => '1',
		                'required' => array('top_drawer_type','=',array('show','toggle')),
	                ),

	                array(
		                'id'             => 'top_drawer_padding',
		                'type'           => 'spacing',
		                'mode'           => 'padding',
		                'units'          => 'px',
		                'units_extended' => 'false',
		                'left'           => false,
		                'right'          => false,
		                'title'          => __('Top drawer padding', 'g5plus-wolverine'),
		                'desc'           => __('Set top drawer padding (px). Not include units.','g5plus-wolverine'),
		                'default'            => array(
			                'padding-top'     => '0',
			                'padding-bottom'  => '0',
			                'units'          => 'px',
		                ),
		                'required' => array('top_drawer_type','=',array('show','toggle')),
	                ),

	                array(
		                'id'       => 'top_bar',
		                'type'     => 'button_set',
		                'title'    => __( 'Show/Hide Top Bar', 'g5plus-wolverine' ),
		                'subtitle' => __( 'Show Hide Top Bar.', 'g5plus-wolverine' ),
		                'desc'     => '',
		                'options'  => array( '1' => 'On', '0' => 'Off' ),
		                'default'  => '0',
	                ),
                    array(
                        'id' => 'top_bar_layout',
                        'type' => 'image_select',
                        'title' => __('Top bar Layout', 'g5plus-wolverine'),
                        'subtitle' => __('Select the top bar column layout.', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array(
                            'top-bar-1' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/top-bar-layout-1.jpg'),
                            'top-bar-2' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/top-bar-layout-2.jpg'),
                            'top-bar-3' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/top-bar-layout-3.jpg'),
	                        'top-bar-4' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/top-bar-layout-4.jpg'),
                        ),
                        'default' => 'top-bar-1',
                        'required' => array('top_bar','=','1'),
                    ),

                    array(
                        'id' => 'top_bar_left_sidebar',
                        'type' => 'select',
                        'title' => __('Top Left Sidebar', 'g5plus-wolverine'),
                        'subtitle' => "Choose the default top left sidebar",
                        'data'      => 'sidebars',
                        'desc' => '',
                        'default' => 'top_bar_left',
                        'required' => array('top_bar','=','1'),
                    ),
                    array(
                        'id' => 'top_bar_right_sidebar',
                        'type' => 'select',
                        'title' => __('Top Right Sidebar', 'g5plus-wolverine'),
                        'subtitle' => "Choose the default top right sidebar",
                        'data'      => 'sidebars',
                        'desc' => '',
                        'default' => 'top_bar_right',
                        'required' => array('top_bar','=','1'),
                    ),

                    array(
                        'id' => 'header_layout',
                        'type' => 'image_select',
                        'title' => __('Header Layout', 'g5plus-wolverine'),
                        'subtitle' => __('Select a header layout option from the examples.', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array(
                            'header-1' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/header-1.png'),
	                        'header-2' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/header-2.png'),
	                        'header-3' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/header-3.png'),
	                        'header-4' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/header-4.png'),
	                        'header-5' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/header-5.png'),
	                        'header-6' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/header-6.png'),
	                        'header-7' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/header-7.jpg'),
                        ),
                        'default' => 'header-2'
                    ),

	                array(
		                'id'        => 'header_tag_line',
		                'type'      => 'text',
		                'title'     => __('Set header Tagline', 'g5plus-wolverine'),
		                'default'  => '',
		                'required' => array('header_layout','=','header-4'),
	                ),

	                array(
		                'id'       => 'header_background',
		                'type'     => 'background',
		                'title'    => __('Header background', 'g5plus-wolverine'),
		                'subtitle' => __('Header background with image, color, etc.', 'g5plus-wolverine'),
		                'default'  => array(
			                'background-color' => '#fff',
		                )
	                ),

	                array(
		                'id' => 'header_background_color_opacity',
		                'type'     => 'slider',
		                'title' => __('Header background color opacity', 'g5plus-wolverine'),
		                'subtitle' => __('Set the opacity level of background color.', 'g5plus-wolverine'),
		                'default'  => '100',
		                "min"       => 0,
		                "step"      => 1,
		                "max"       => 100
	                ),

	                array(
		                'id'        => 'header_nav_layout',
		                'type'      => 'button_set',
		                'title'     => __('Header navigation layout', 'g5plus-wolverine'),
		                'options'  => array(
			                'container' => __('Container','g5plus-wolverine'),
			                'nav-fullwith' => __('Full width','g5plus-wolverine'),
		                ),
		                'default'  => 'container'
	                ),

	                array(
		                'id'        => 'header_nav_layout_padding',
		                'type'     => 'slider',
		                'title'     => __('Header navigation padding left/right (px)', 'g5plus-wolverine'),
		                'default'  => '100',
		                "min"       => 0,
		                "step"      => 1,
		                "max"       => 200,
		                'required' => array('header_nav_layout','=','nav-fullwith'),
	                ),

	                array(
		                'id'        => 'header_nav_separate',
		                'type'      => 'button_set',
		                'title'     => __('Header navigation separate', 'g5plus-wolverine'),
		                'options'  => array( '1' => 'Show', '0' => 'Hide' ),
		                'default'  => '0'
	                ),

	                array(
		                'id'        => 'header_nav_hover',
		                'type'      => 'button_set',
		                'title'     => __('Header navigation hover', 'g5plus-wolverine'),
		                'options'  => array( 'nav-hover-primary' => 'Primary Color', 'nav-hover-bolder' => 'Bolder' ),
		                'default'  => 'nav-hover-primary'
	                ),

	                array(
		                'id'        => 'header_nav_hover_border',
		                'type'      => 'button_set',
		                'title'     => __('Header navigation hover border', 'g5plus-wolverine'),
		                'options'  => array( '1' => 'On', '0' => 'Off' ),
		                'default'  => '0',
		                'desc'      => __('Turn On/Off menu border when hover (top level)', 'g5plus-wolverine'),
	                ),

	                array(
		                'id'        => 'header_nav_distance',
		                'type'      => 'dimensions',
		                'title'     => __('Header navigation distance', 'g5plus-wolverine'),
		                'desc'      => __('You can set distance between navigation items. Empty value to default', 'g5plus-wolverine'),
		                'units' => 'px',
		                'height'    =>  false,
		                'default'  => array(
			                'Width'  => ''
		                )
	                ),

	                array(
		                'id'       => 'header_nav_scheme',
		                'type'     => 'button_set',
		                'title'    => __( 'Header navigation scheme', 'g5plus-wolverine' ),
		                'subtitle' => __( 'Set header navigation scheme', 'g5plus-wolverine' ),
		                'default'  => 'gray',
		                'options'  => array(
			                'gray' => __('Gray','g5plus-wolverine'),
			                'light' => __('Light','g5plus-wolverine'),
			                'dark' => __('Dark','g5plus-wolverine'),
			                'customize' => __('Customize','g5plus-wolverine')
		                )
	                ),

	                array(
		                'id'       => 'header_nav_bg_color',
		                'type'     => 'color_rgba',
		                'title'    => __( 'Header navigation background color', 'g5plus-wolverine' ),
		                'subtitle' => __( 'Set header navigation background color', 'g5plus-wolverine' ),
		                'default'  => array(),
		                'mode'     => 'background',
		                'validate' => 'colorrgba',
		                'default'   => array(
			                'color'     => '#f4f4f4',
			                'alpha'     => 1
		                ),
		                'options'       => array(
			                'allow_empty'   => false,
		                ),
		                'required' => array('header_nav_scheme','=','customize'),
	                ),

	                array(
		                'id'       => 'header_nav_text_color',
		                'type'     => 'color',
		                'title'    => __('Header navigation text color', 'g5plus-wolverine'),
		                'subtitle' => __('Set header navigation text color', 'g5plus-wolverine'),
		                'default'  => '#222',
		                'validate' => 'color',
		                'required' => array('header_nav_scheme','=','customize'),
	                ),

	                array(
		                'id'       => 'header_nav_border',
		                'type'     => 'border',
		                'title'    => __('Header navigation border bottom', 'g5plus-wolverine'),
		                'left'     => false,
		                'right'     => false,
		                'top'     => false,
		                'default'  => array(
			                'border-color'  => '#E9E9E9',
			                'border-style'  => 'none',
			                'border-bottom' => '0'
		                ),
	                ),
	                array(
		                'id' => 'header_nav_border_opacity',
		                'type'     => 'slider',
		                'title' => __('Header navigation border bottom opacity', 'g5plus-wolverine'),
		                'subtitle' => __('Set the opacity level of border bottom.', 'g5plus-wolverine'),
		                'default'  => '40',
		                "min"       => 0,
		                "step"      => 1,
		                "max"       => 100
	                ),

	                array(
		                'id'       => 'header_layout_float',
		                'type'     => 'button_set',
		                'title'    => __( 'Header Float', 'g5plus-wolverine' ),
		                'subtitle' => __( 'Enable/Disable Header Float.', 'g5plus-wolverine' ),
		                'desc'     => '',
		                'options'  => array( '1' => 'On', '0' => 'Off' ),
		                'default'  => '0',
	                ),

                    array(
                        'id'       => 'header_sticky',
                        'type'     => 'button_set',
                        'title'    => __( 'Show/Hide Header Sticky', 'g5plus-wolverine' ),
                        'subtitle' => __( 'Show Hide header Sticky.', 'g5plus-wolverine' ),
                        'desc'     => '',
                        'options'  => array( '1' => 'On', '0' => 'Off' ),
                        'default'  => '1'
                    ),

	                array(
		                'id'       => 'header_sticky_scheme',
		                'type'     => 'button_set',
		                'title'    => __( 'Header sticky scheme', 'g5plus-wolverine' ),
		                'subtitle' => __( 'Choose header sticky scheme', 'g5plus-wolverine' ),
		                'desc'     => '',
		                'options'  => array(
			                'inherit'   => __('Inherit','g5plus-wolverine'),
			                'gray'      => __('Gray','g5plus-wolverine'),
			                'light'     => __('Light','g5plus-wolverine'),
			                'dark'     => __('Dark','g5plus-wolverine')
		                ),
		                'default'  => 'inherit'
	                ),

	                array(
		                'id'      => 'header_customize',
		                'type'    => 'sorter',
		                'title'   => 'Header customize',
		                'desc'    => 'Organize how you want the layout to appear on the header',
		                'options' => array(
			                'enabled'  => array(
				                'shopping-cart'   => __('Shopping Cart','g5plus-wolverine'),
				                'search' => __('Search Box','g5plus-wolverine'),
			                ),
			                'disabled' => array(
				                'social-profile' => __('Social Profile','g5plus-wolverine'),
				                'custom-text' => __('Custom Text','g5plus-wolverine'),
			                )
		                )
	                ),

	                array(
		                'id' => 'header_customize_social_profile',
		                'type' => 'select',
		                'multi' => true,
		                'width' => '100%',
		                'title' => __('Custom social profiles', 'g5plus-wolverine'),
		                'subtitle' => __('Select social profile for custom text', 'g5plus-wolverine'),
		                'options' => array(
			                'twitter'  => __( 'Twitter', 'g5plus-wolverine' ),
			                'facebook'  => __( 'Facebook', 'g5plus-wolverine' ),
			                'dribbble'  => __( 'Dribbble', 'g5plus-wolverine' ),
			                'vimeo'  => __( 'Vimeo', 'g5plus-wolverine' ),
			                'tumblr'  => __( 'Tumblr', 'g5plus-wolverine' ),
			                'skype'  => __( 'Skype', 'g5plus-wolverine' ),
			                'linkedin'  => __( 'LinkedIn', 'g5plus-wolverine' ),
			                'googleplus'  => __( 'Google+', 'g5plus-wolverine' ),
			                'flickr'  => __( 'Flickr', 'g5plus-wolverine' ),
			                'youtube'  => __( 'YouTube', 'g5plus-wolverine' ),
			                'pinterest' => __( 'Pinterest', 'g5plus-wolverine' ),
			                'foursquare'  => __( 'Foursquare', 'g5plus-wolverine' ),
			                'instagram' => __( 'Instagram', 'g5plus-wolverine' ),
			                'github'  => __( 'GitHub', 'g5plus-wolverine' ),
			                'xing' => __( 'Xing', 'g5plus-wolverine' ),
			                'behance'  => __( 'Behance', 'g5plus-wolverine' ),
			                'deviantart'  => __( 'Deviantart', 'g5plus-wolverine' ),
			                'soundcloud'  => __( 'SoundCloud', 'g5plus-wolverine' ),
			                'yelp'  => __( 'Yelp', 'g5plus-wolverine' ),
			                'rss'  => __( 'RSS Feed', 'g5plus-wolverine' ),
			                'email'  => __( 'Email address', 'g5plus-wolverine' ),
		                ),
		                'desc' => '',
		                'default' => ''
	                ),

	                array(
		                'id' => 'header_customize_text',
		                'type' => 'ace_editor',
		                'mode' => 'html',
		                'theme' => 'monokai',
		                'title' => __('Custom Text Content', 'g5plus-wolverine'),
		                'subtitle' => __('Add Content for Custom Text', 'g5plus-wolverine'),
		                'desc' => '',
		                'default' => '',
		                'options'  => array('minLines'=> 5, 'maxLines' => 60),
	                ),

	                array(
		                'id' => 'header_shopping_cart_button',
		                'type' => 'checkbox',
		                'title' => __('Shopping Cart Button', 'g5plus-wolverine'),
		                'subtitle' => __('Select header shopping cart button', 'g5plus-wolverine'),
		                'options' => array(
			                'view-cart' => 'View Cart',
			                'checkout' => 'Checkout',
		                ),
		                'default' => array(
			                'view-cart' => '1',
			                'checkout' => '1',
		                ),
		                'required' => array('header_shopping_cart','=','1'),
	                ),

                    array(
                        'id' => 'search_box_type',
                        'type' => 'button_set',
                        'title' => __('Search Box Type', 'g5plus-wolverine'),
                        'subtitle' => __('Select search box type.', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array('standard' => __('Standard','g5plus-wolverine'),'ajax' => __('Ajax Search','g5plus-wolverine')),
                        'default' => 'standard'
                    ),

                    array(
                        'id' => 'search_box_post_type',
                        'type' => 'checkbox',
                        'title' => __('Post type for Ajax Search', 'g5plus-wolverine'),
                        'subtitle' => __('Select post type for ajax search', 'g5plus-wolverine'),
                        'options' => array(
                            'post' => 'Post',
	                        'page' => 'Page',
                            'product' => 'Product',
                            'portfolio' => 'Portfolio',
                            'service' => 'Our Services',
                        ),
                        'default' => array(
                            'post'      => '1',
	                        'page'      => '0',
                            'product'   => '1',
                            'portfolio' => '1',
	                        'service'   => '1',
                        ),
                        'required' => array('search_box_type','=','ajax'),
                    ),

                    array(
                        'id'        => 'search_box_result_amount',
                        'type'      => 'text',
                        'title'     => __('Amount Of Search Result', 'g5plus-wolverine'),
                        'subtitle'  => __('This must be numeric (no px) or empty (default: 8).', 'g5plus-wolverine'),
                        'desc'      => __('Set mount of Search Result', 'g5plus-wolverine'),
                        'validate'  => 'numeric',
                        'default'   => '',
                        'required' => array('search_box_type','=','ajax'),
                    ),
                )
            );

            $this->sections[] = array(
                'title'  => __( 'Mobile Header', 'g5plus-wolverine' ),
                'desc'   => '',
                'icon'   => 'el el-th-list',
                'fields' => array(
	                array(
		                'id' => 'mobile_header_layout',
		                'type' => 'image_select',
		                'title' => __('Header Layout', 'g5plus-wolverine'),
		                'subtitle' => __('Select header mobile layout', 'g5plus-wolverine'),
		                'desc' => '',
		                'options' => array(
			                'header-mobile-1' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/header-mobile-layout-1.png'),
			                'header-mobile-2' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/header-mobile-layout-2.png'),
			                'header-mobile-3' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/header-mobile-layout-3.png'),
			                'header-mobile-4' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/header-mobile-layout-4.png'),
			                'header-mobile-5' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/header-mobile-layout-5.jpg'),
		                ),
		                'default' => 'header-mobile-2'
	                ),

	                array(
		                'id'       => 'mobile_header_menu_drop',
		                'type'     => 'button_set',
		                'title'    => __( 'Menu Drop Type', 'g5plus-wolverine' ),
		                'subtitle' => __( 'Set menu drop type for mobile header', 'g5plus-wolverine' ),
		                'desc'     => '',
		                'options'  => array(
			                'dropdown' => __('Dropdown Menu','g5plus-wolverine'),
			                'fly' => __('Fly Menu','g5plus-wolverine')
		                ),
		                'default'  => 'fly'
	                ),

	                array(
                        'id' => 'mobile_header_logo',
                        'type' => 'media',
                        'url'=> true,
                        'title' => __('Mobile Logo', 'g5plus-wolverine'),
                        'subtitle' => __('Upload your logo here.', 'g5plus-wolverine'),
                        'desc' => '',
                        'default' => array(
                            'url' => THEME_URL . 'assets/images/theme-options/logo.png'
                        )
                    ),

	                array(
		                'id'        => 'logo_mobile_height',
		                'type'      => 'dimensions',
		                'title'     => __('Logo Height', 'g5plus-wolverine'),
		                'desc'      => __('You can set a height for the logo here', 'g5plus-wolverine'),
		                'units' => 'px',
		                'width'    =>  false,
		                'default'  => array(
			                'Height'  => ''
		                )
	                ),

	                array(
		                'id'        => 'logo_mobile_max_height',
		                'type'      => 'dimensions',
		                'title'     => __('Logo Mobile Max Height', 'g5plus-wolverine'),
		                'desc'      => __('You can set a max height for the logo mobile here', 'g5plus-wolverine'),
		                'units' => 'px',
		                'width'    =>  false,
		                'default'  => array(
			                'Height'  => ''
		                )
	                ),

	                array(
		                'id'        => 'logo_mobile_padding',
		                'type'      => 'dimensions',
		                'title'     => __('Logo Top/Bottom Padding', 'g5plus-wolverine'),
		                'desc'      => __('If you would like to override the default logo top/bottom padding, then you can do so here', 'g5plus-wolverine'),
		                'units' => 'px',
		                'width'    =>  false,
		                'default'  => array(
			                'Height'  => ''
		                )
	                ),

                    array(
                        'id'       => 'mobile_header_top_bar',
                        'type'     => 'button_set',
                        'title'    => __( 'Top Bar', 'g5plus-wolverine' ),
                        'subtitle' => __( 'Enable Top bar.', 'g5plus-wolverine' ),
                        'desc'     => '',
                        'options'  => array( '1' => 'On', '0' => 'Off' ),
                        'default'  => '0'
                    ),
                    array(
                        'id'       => 'mobile_header_stick',
                        'type'     => 'button_set',
                        'title'    => __( 'Stick Mobile Header', 'g5plus-wolverine' ),
                        'subtitle' => __( 'Enable Stick Mobile Header.', 'g5plus-wolverine' ),
                        'desc'     => '',
                        'options'  => array( '1' => 'On', '0' => 'Off' ),
                        'default'  => '1'
                    ),
                    array(
                        'id'       => 'mobile_header_search_box',
                        'type'     => 'button_set',
                        'title'    => __( 'Search Box', 'g5plus-wolverine' ),
                        'subtitle' => __( 'Enable Search Box.', 'g5plus-wolverine' ),
                        'desc'     => '',
                        'options'  => array( '1' => 'On', '0' => 'Off' ),
                        'default'  => '1'
                    ),
                    array(
                        'id'       => 'mobile_header_shopping_cart',
                        'type'     => 'button_set',
                        'title'    => __( 'Shopping Cart', 'g5plus-wolverine' ),
                        'subtitle' => __( 'Enable Shopping Cart', 'g5plus-wolverine' ),
                        'desc'     => '',
                        'options'  => array( '1' => 'On', '0' => 'Off' ),
                        'default'  => '1'
                    ),
                )
            );

            $this->sections[] = array(
                'title'  => __( 'Footer', 'g5plus-wolverine' ),
                'desc'   => '',
                'icon'   => 'el el-website',
                'fields' => array(
	                array(
		                'id' => 'footer_wrap_layout',
		                'type' => 'button_set',
		                'title' => __('Wrapper Layout', 'g5plus-wolverine'),
		                'subtitle' => __('Select Footer Wrapper Layout', 'g5plus-wolverine'),
		                'desc' => '',
		                'options' => array(
                            'full' => __('Full Width','g5plus-wolverine'),
                            'container-fluid' => __('Container Fluid','g5plus-wolverine')
                        ),
		                'default' => 'full'
	                ),


                    array(
                        'id' => 'footer_layout',
                        'type' => 'image_select',
                        'title' => __('Layout', 'g5plus-wolverine'),
                        'subtitle' => __('Select the footer column layout.', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array(
                            'footer-1' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/footer-layout-1.jpg'),
                            'footer-2' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/footer-layout-2.jpg'),
                            'footer-3' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/footer-layout-3.jpg'),
                            'footer-4' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/footer-layout-4.jpg'),
                            'footer-5' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/footer-layout-5.jpg'),
                            'footer-6' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/footer-layout-6.jpg'),
                            'footer-7' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/footer-layout-7.jpg'),
                            'footer-8' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/footer-layout-8.jpg'),
                            'footer-9' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/footer-layout-9.jpg'),
                        ),
                        'default' => 'footer-5'
                    ),

	                array(
		                'id' => 'footer_sidebar_1',
		                'type' => 'select',
		                'title' => __('Sidebar 1', 'g5plus-wolverine'),
		                'subtitle' => "Choose the default footer sidebar 1",
		                'data'      => 'sidebars',
		                'desc' => '',
		                'default' => 'footer-1',
	                ),

	                array(
		                'id' => 'footer_sidebar_2',
		                'type' => 'select',
		                'title' => __('Sidebar 2', 'g5plus-wolverine'),
		                'subtitle' => "Choose the default footer sidebar 2",
		                'data'      => 'sidebars',
		                'desc' => '',
		                'default' => 'footer-2',
	                ),

	                array(
		                'id' => 'footer_sidebar_3',
		                'type' => 'select',
		                'title' => __('Sidebar 3', 'g5plus-wolverine'),
		                'subtitle' => "Choose the default footer sidebar 3",
		                'data'      => 'sidebars',
		                'desc' => '',
		                'default' => 'footer-3',
	                ),

	                array(
		                'id' => 'footer_sidebar_4',
		                'type' => 'select',
		                'title' => __('Sidebar 4', 'g5plus-wolverine'),
		                'subtitle' => "Choose the default footer sidebar 4",
		                'data'      => 'sidebars',
		                'desc' => '',
		                'default' => 'footer-4',
	                ),

                    array(
                        'id'             => 'footer_padding',
                        'type'           => 'spacing',
                        'mode'           => 'padding',
                        'units'          => 'px',
                        'units_extended' => 'false',
                        'title'          => __('Footer Top/Bottom Padding', 'g5plus-wolverine'),
                        'subtitle'       => __('This must be numeric (no px). Leave balnk for default.', 'g5plus-wolverine'),
                        'desc'           => __('If you would like to override the default footer top/bottom padding, then you can do so here.', 'g5plus-wolverine'),
                        'left'          => false,
                        'right'          => false,
                        'default'            => array(
                            'padding-top'     => '',
                            'padding-bottom'  => '',
                            'units'          => 'px',
                        )
                    ),


                    array(
                        'id' => 'footer_bg_image',
                        'type' => 'media',
                        'url'=> true,
                        'title' => __('Background image', 'g5plus-wolverine'),
                        'subtitle' => __('Upload footer background image here', 'g5plus-wolverine'),
                        'desc' => '',
                    ),


	                array(
		                'id' => 'footer_scheme',
		                'type' => 'button_set',
		                'title' => __('Scheme', 'g5plus-wolverine'),
		                'subtitle' => __( 'Choose footer scheme', 'g5plus-wolverine' ),
		                'desc' => '',
		                'options'  => array(
			                'gray'      => __('Gray','g5plus-wolverine'),
			                'light'     => __('Light','g5plus-wolverine'),
			                'dark'     => __('Dark','g5plus-wolverine'),
			                'custom'   => __('Custom','g5plus-wolverine'),
		                ),
		                'default' => 'gray'
	                ),





	                array(
		                'id'       => 'footer_bg_color',
		                'type'     => 'color_rgba',
		                'title'    => __('Background Color', 'g5plus-wolverine'),
		                'subtitle' => __('Set Footer Background Color.', 'g5plus-wolverine'),
		                'default'  => array(),
		                'validate' => 'colorrgba',
		                'required' => array('footer_scheme','=','custom'),
	                ),

	                array(
		                'id'       => 'footer_text_color',
		                'type'     => 'color',
		                'title'    => __('Text Color', 'g5plus-wolverine'),
		                'subtitle' => __('Set Footer Text Color.', 'g5plus-wolverine'),
		                'default'  => '',
		                'validate' => 'color',
		                'required' => array('footer_scheme','=','custom'),
	                ),

	                array(
		                'id'       => 'footer_heading_text_color',
		                'type'     => 'color',
		                'title'    => __('Heading Text Color', 'g5plus-wolverine'),
		                'subtitle' => __('Set Footer Heading Text Color.', 'g5plus-wolverine'),
		                'default'  => '',
		                'validate' => 'color',
		                'required' => array('footer_scheme','=','custom'),
	                ),

	                array(
		                'id'       => 'bottom_bar_bg_color',
		                'type'     => 'color_rgba',
		                'title'    => __('Bottom Bar Background Color', 'g5plus-wolverine'),
		                'subtitle' => __('Set Bottom Bar Background Color.', 'g5plus-wolverine'),
		                'default'  => array(),
		                'validate' => 'colorrgba',
		                'required' => array('footer_scheme','=','custom'),
	                ),

	                array(
		                'id'       => 'bottom_bar_text_color',
		                'type'     => 'color',
		                'title'    => __('Bottom Bar Text Color', 'g5plus-wolverine'),
		                'subtitle' => __('Set Bottom Bar Text Color.', 'g5plus-wolverine'),
		                'default'  => '',
		                'validate' => 'color',
		                'required' => array('footer_scheme','=','custom'),
	                ),

                    array(
                        'id'       => 'footer_parallax',
                        'type'     => 'button_set',
                        'title'    => __( 'Footer Parallax', 'g5plus-wolverine' ),
                        'subtitle' => __( 'Enable Footer Parallax', 'g5plus-wolverine' ),
                        'desc'     => '',
                        'options'  => array( '1' => 'Enable', '0' => 'Disable' ),
                        'default'  => '0'
                    ),
                    array(
                        'id'       => 'collapse_footer',
                        'type'     => 'button_set',
                        'title'    => __( 'Collapse footer on mobile device', 'g5plus-wolverine' ),
                        'subtitle' => __( 'Enable collapse footer', 'g5plus-wolverine' ),
                        'desc'     => '',
                        'options'  => array( '1' => 'On', '0' => 'Off' ),
                        'default'  => '0'
                    ),
                    array(
                        'id'       => 'bottom_bar',
                        'type'     => 'button_set',
                        'title'    => __( 'Bottom Bar', 'g5plus-wolverine' ),
                        'subtitle' => __( 'Enable Bottom Bar (below Footer)', 'g5plus-wolverine' ),
                        'desc'     => '',
                        'options'  => array( '1' => 'On', '0' => 'Off' ),
                        'default'  => '1'
                    ),

                    array(
                        'id' => 'bottom_bar_layout',
                        'type' => 'image_select',
                        'title' => __('Bottom bar Layout', 'g5plus-wolverine'),
                        'subtitle' => __('Select the bottom bar column layout.', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array(
                            'bottom-bar-1' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/bottom-bar-layout-1.jpg'),
                            'bottom-bar-2' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/bottom-bar-layout-2.jpg'),
                            'bottom-bar-3' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/bottom-bar-layout-3.jpg'),
	                        'bottom-bar-4' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/bottom-bar-layout-4.jpg'),
                        ),
                        'default' => 'bottom-bar-4',
                        'required' => array('bottom_bar','=','1'),
                    ),

                    array(
                        'id' => 'bottom_bar_left_sidebar',
                        'type' => 'select',
                        'title' => __('Bottom Left Sidebar', 'g5plus-wolverine'),
                        'subtitle' => "Choose the default bottom left sidebar",
                        'data'      => 'sidebars',
                        'desc' => '',
                        'default' => 'bottom_bar_left',
                        'required' => array('bottom_bar','=','1'),
                    ),
                    array(
                        'id' => 'bottom_bar_right_sidebar',
                        'type' => 'select',
                        'title' => __('Bottom Right Sidebar', 'g5plus-wolverine'),
                        'subtitle' => "Choose the default bottom right sidebar",
                        'data'      => 'sidebars',
                        'desc' => '',
                        'default' => 'bottom_bar_right',
                        'required' => array('bottom_bar','=','1'),
                    ),
                )
            );




            $this->sections[] = array(
                'title'  => __( 'Styling Options', 'g5plus-wolverine' ),
                'desc'   => __( 'If you change value in this section, you must "Save & Generate CSS"', 'g5plus-wolverine' ),
                'icon'   => 'el el-magic',
                'fields' => array(
                    array(
                        'id'       => 'primary_color',
                        'type'     => 'color',
                        'title'    => __('Primary Color', 'g5plus-wolverine'),
                        'subtitle' => __('Set Primary Color', 'g5plus-wolverine'),
                        'default'  => '#995958',
                        'validate' => 'color',
                    ),

                    array(
                        'id'       => 'secondary_color',
                        'type'     => 'color',
                        'title'    => __('Secondary Color', 'g5plus-wolverine'),
                        'subtitle' => __('Set Secondary Color', 'g5plus-wolverine'),
                        'default'  => '#444444',
                        'validate' => 'color',
                    ),

	                array(
		                'id'       => 'top_drawer_bg_color',
		                'type'     => 'color',
		                'title'    => __( 'Top drawer background color', 'g5plus-wolverine' ),
		                'subtitle' => __( 'Set Top drawer background color.', 'g5plus-wolverine' ),
		                'default'  => '#2f2f2f',
		                'validate' => 'color',
	                ),

	                array(
		                'id'       => 'top_drawer_text_color',
		                'type'     => 'color',
		                'title'    => __('Top drawer text color', 'g5plus-wolverine'),
		                'subtitle' => __('Pick a text color for the Top drawer', 'g5plus-wolverine'),
		                'default'  => '#c5c5c5',
		                'validate' => 'color',
	                ),

	                array(
		                'id'       => 'top_bar_bg_color',
		                'type'     => 'color_rgba',
		                'title'    => __( 'Top Bar background color', 'g5plus-wolverine' ),
		                'subtitle' => __( 'Set Top Bar background color.', 'g5plus-wolverine' ),
		                'default'  => array(
			                'color' => '#333',
			                'alpha' => '1'
		                ),
		                'mode'     => 'background',
		                'validate' => 'colorrgba',
	                ),

	                array(
		                'id'       => 'top_bar_text_color',
		                'type'     => 'color',
		                'title'    => __('Top Bar text color', 'g5plus-wolverine'),
		                'subtitle' => __('Pick a text color for the Top Bar', 'g5plus-wolverine'),
		                'default'  => '#c5c5c5',
		                'validate' => 'color',
	                ),

                    array(
                        'id'       => 'text_color',
                        'type'     => 'color',
                        'title'    => __('Text Color', 'g5plus-wolverine'),
                        'subtitle' => __('Set Text Color.', 'g5plus-wolverine'),
                        'default'  => '#555555',
                        'validate' => 'color',
                    ),

                    array(
                        'id'       => 'bold_color',
                        'type'     => 'color',
                        'title'    => __('Bolder Color', 'g5plus-wolverine'),
                        'subtitle' => __('Set Bolder Color.', 'g5plus-wolverine'),
                        'default'  => '#333333',
                        'validate' => 'color',
                    ),

                    array(
                        'id'       => 'heading_color',
                        'type'     => 'color',
                        'title'    => __('Heading Color', 'g5plus-wolverine'),
                        'subtitle' => __('Set Heading Color.', 'g5plus-wolverine'),
                        'default'  => '#333333',
                        'validate' => 'color',
                    ),



                    array(
                        'id'       => 'link_color',
                        'type'     => 'link_color',
                        'title'    => __( 'Link Color', 'g5plus-wolverine' ),
                        'subtitle' => __( 'Link Color.', 'g5plus-wolverine' ),
                        'default'  => array(
                            'regular'  => '#995958', // blue
                            'hover'    => '#995958', // red
                            'active'   => '#995958',  // purple
                        ),
                    ),

                    array(
                        'id'       => 'count_down_color',
                        'type'     => 'color',
                        'title'    => __( 'Circle countdown Color', 'g5plus-wolverine' ),
                        'subtitle' => __( 'Circle countdown Color.', 'g5plus-wolverine' ),
                        'default'  => '#fff',
                        'validate' => 'color'
                    ),

                    array(
                        'id'=>'styling-color-divide-0',
                        'type' => 'divide'
                    ),

	                array(
		                'id'       => 'menu_sub_scheme',
		                'type'     => 'button_set',
		                'title'    => __( 'Sub menu scheme', 'g5plus-wolverine' ),
		                'subtitle' => __( 'Set sub menu scheme', 'g5plus-wolverine' ),
		                'default'  => 'light',
		                'options'  => array(
			                'gray' => __('Gray','g5plus-wolverine'),
			                'light' => __('Light','g5plus-wolverine'),
			                'dark' => __('Dark','g5plus-wolverine'),
			                'customize' => __('Customize','g5plus-wolverine')
		                )
	                ),

                    array(
                        'id'       => 'menu_sub_bg_color',
                        'type'     => 'color',
                        'title'    => __('Sub Menu Background Color', 'g5plus-wolverine'),
                        'subtitle' => __('Set Sub Menu Background Color.', 'g5plus-wolverine'),
                        'default'  => '#fff',
                        'validate' => 'color',
	                    'required'  => array('menu_sub_scheme', '=', 'customize'),
                    ),

                    array(
                        'id'       => 'menu_sub_text_color',
                        'type'     => 'color',
                        'title'    => __('Sub Menu Text Color', 'g5plus-wolverine'),
                        'subtitle' => __('Set Sub Menu Text Color.', 'g5plus-wolverine'),
                        'default'  => '#888',
                        'validate' => 'color',
	                    'required'  => array('menu_sub_scheme', '=', 'customize'),
                    ),

                    array(
                        'id'=>'styling-color-divide-1',
                        'type' => 'divide'
                    ),

                    array(
                        'id' => 'page_title_bg_color',
                        'type'     => 'color',
                        'title' => __('Page Title Background Color', 'g5plus-wolverine'),
                        'subtitle' => __('Pick a background color for page title.', 'g5plus-wolverine'),
                        'default'  => '#FFFFFF',
                        'validate' => 'color',
                    ),
                    array(
                        'id' => 'page_title_overlay_color',
                        'type'     => 'color',
                        'title' => __('Page Title Background Overlay Color', 'g5plus-wolverine'),
                        'subtitle' => __('Pick a background overlay color for page title.', 'g5plus-wolverine'),
                        'default'  => '#000',
                        'validate' => 'color',
                    ),

                    array(
		                'id' => 'page_title_overlay_opacity',
		                'type'     => 'slider',
		                'title' => __('Page Title Background Overlay Opacity', 'g5plus-wolverine'),
		                'subtitle' => __('Set the opacity level of the overlay.', 'g5plus-wolverine'),
		                'default'  => '30',
		                "min"       => 0,
		                "step"      => 1,
		                "max"       => 100
	                ),

                    array(
                        'id'=>'styling-color-divide-2',
                        'type' => 'divide'
                    ),



                    array(
                        'id' => 'breadcrumbs_text_color',
                        'type'     => 'color',
                        'title' => __('Breadcrumbs Text Color', 'g5plus-wolverine'),
                        'subtitle' => __('Pick a text color for breadcrumbs.', 'g5plus-wolverine'),
                        'default'  => '#535353',
                        'validate' => 'color',
                    ),

                    array(
                        'id' => 'breadcrumbs_background_color',
                        'type'     => 'color',
                        'title' => __('Breadcrumbs background color', 'g5plus-wolverine'),
                        'subtitle' => __('Pick a color for background breadcrumbs.', 'g5plus-wolverine'),
                        'default'  => '#f4f4f4',
                        'validate' => 'color',
                    ),

                )
            );

            $this->sections[] = array(
                'icon' => 'el-icon-fontsize',
                'title' => __('Font Options', 'g5plus-wolverine'),
                'desc'   => __( 'If you change value in this section, you must "Save & Generate CSS"', 'g5plus-wolverine' ),
                'fields' => array(
                    array(
                        'id'=>'body_font',
                        'type' => 'typography',
                        'title' => __('Body Font', 'g5plus-wolverine'),
                        'subtitle' => __('Specify the body font properties.', 'g5plus-wolverine'),
                        'google'=> true,
                        'text-align'=>false,
                        'color'=>false,
                        'letter-spacing'=>false,
                        'line-height'=>false,
                        'all_styles' => true, // Enable all Google Font style/weight variations to be added to the page
                        'output' => array('body'), // An array of CSS selectors to apply this font style to dynamically
                        'compiler' => array('body'), // An array of CSS selectors to apply this font style to dynamically
                        'units'=>'px', // Defaults to px
                        'default' => array(
                            'font-size'=>'13px',
                            'font-family'=>'Raleway',
                            'font-weight'=>'400',
                        ),
                    ),
                    array(
                        'id'=>'h1_font',
                        'type' => 'typography',
                        'title' => __('H1 Font', 'g5plus-wolverine'),
                        'subtitle' => __('Specify the H1 font properties.', 'g5plus-wolverine'),
                        'google'=> true,
                        'text-align'=>false,
                        'line-height'=>false,
                        'color'=>false,
                        'letter-spacing'=>false,
                        'all_styles' => true, // Enable all Google Font style/weight variations to be added to the page
                        'output' => array('h1'), // An array of CSS selectors to apply this font style to dynamically
                        'compiler' => array('h1'), // An array of CSS selectors to apply this font style to dynamically
                        'units'=>'px', // Defaults to px
                        'default' => array(
                            'font-size'=>'36px',
                            'line-height'=>'43.2px',
                            'font-family'=>'Montserrat',
                            'font-weight'=>'400',
                        ),
                    ),
                    array(
                        'id'=>'h2_font',
                        'type' => 'typography',
                        'title' => __('H2 Font', 'g5plus-wolverine'),
                        'subtitle' => __('Specify the H2 font properties.', 'g5plus-wolverine'),
                        'google'=> true,
                        'line-height'=>false,
                        'text-align'=>false,
                        'color'=>false,
                        'letter-spacing'=>false,
                        'all_styles' => true, // Enable all Google Font style/weight variations to be added to the page
                        'output' => array('h2'), // An array of CSS selectors to apply this font style to dynamically
                        'compiler' => array('h2'), // An array of CSS selectors to apply this font style to dynamically
                        'units'=>'px', // Defaults to px
                        'default' => array(
                            'font-size'=>'28px',
                            'line-height'=>'33.6px',
                            'font-family'=>'Montserrat',
                            'font-weight'=>'400',
                        ),
                    ),
                    array(
                        'id'=>'h3_font',
                        'type' => 'typography',
                        'title' => __('H3 Font', 'g5plus-wolverine'),
                        'subtitle' => __('Specify the H3 font properties.', 'g5plus-wolverine'),
                        'google'=> true,
                        'text-align'=>false,
                        'line-height'=>false,
                        'color'=>false,
                        'letter-spacing'=>false,
                        'all_styles' => true, // Enable all Google Font style/weight variations to be added to the page
                        'output' => array('h3'), // An array of CSS selectors to apply this font style to dynamically
                        'compiler' => array('h3'), // An array of CSS selectors to apply this font style to dynamically
                        'units'=>'px', // Defaults to px
                        'default' => array(
                            'font-size'=>'24px',
                            'line-height'=>'28.8px',
                            'font-family'=>'Montserrat',
                            'font-weight'=>'400',
                        ),
                    ),
                    array(
                        'id'=>'h4_font',
                        'type' => 'typography',
                        'title' => __('H4 Font', 'g5plus-wolverine'),
                        'subtitle' => __('Specify the H4 font properties.', 'g5plus-wolverine'),
                        'google'=> true,
                        'text-align'=>false,
                        'line-height'=>false,
                        'color'=>false,
                        'letter-spacing'=>false,
                        'all_styles' => true, // Enable all Google Font style/weight variations to be added to the page
                        'output' => array('h4'), // An array of CSS selectors to apply this font style to dynamically
                        'compiler' => array('h4'), // An array of CSS selectors to apply this font style to dynamically
                        'units'=>'px', // Defaults to px
                        'default' => array(
                            'font-size'=>'21px',
                            'line-height'=>'25.2px',
                            'font-family'=>'Montserrat',
                            'font-weight'=>'400',
                        ),
                    ),
                    array(
                        'id'=>'h5_font',
                        'type' => 'typography',
                        'title' => __('H5 Font', 'g5plus-wolverine'),
                        'subtitle' => __('Specify the H5 font properties.', 'g5plus-wolverine'),
                        'google'=> true,
                        'line-height'=>false,
                        'text-align'=>false,
                        'color'=>false,
                        'letter-spacing'=>false,
                        'all_styles' => true, // Enable all Google Font style/weight variations to be added to the page
                        'output' => array('h5'), // An array of CSS selectors to apply this font style to dynamically
                        'compiler' => array('h5'), // An array of CSS selectors to apply this font style to dynamically
                        'units'=>'px', // Defaults to px
                        'default' => array(
                            'font-size'=>'18px',
                            'line-height'=>'21.6px',
                            'font-family'=>'Montserrat',
                            'font-weight'=>'400',
                        ),
                    ),
                    array(
                        'id'=>'h6_font',
                        'type' => 'typography',
                        'title' => __('H6 Font', 'g5plus-wolverine'),
                        'subtitle' => __('Specify the H6 font properties.', 'g5plus-wolverine'),
                        'google'=> true,
                        'line-height'=>false,
                        'text-align'=>false,
                        'color'=>false,
                        'letter-spacing'=>false,
                        'all_styles' => true, // Enable all Google Font style/weight variations to be added to the page
                        'output' => array('h6'), // An array of CSS selectors to apply this font style to dynamically
                        'compiler' => array('h6'), // An array of CSS selectors to apply this font style to dynamically
                        'units'=>'px', // Defaults to px
                        'default' => array(
                            'font-size'=>'14px',
                            'line-height'=>'16.8px',
                            'font-family'=>'Montserrat',
                            'font-weight'=>'400',
                        ),
                    ),
                    array(
                        'id'=> 'menu_font',
                        'type' => 'typography',
                        'title' => __('Menu Font', 'g5plus-wolverine'),
                        'subtitle' => __('Specify the Menu font properties.', 'g5plus-wolverine'),
                        'google' => true,
                        'line-height'=>false,
                        'all_styles' => true, // Enable all Google Font style/weight variations to be added to the page
                        'color'=>false,
                        'text-align'=>false,
                        'font-style' => false,
                        'subsets' => false,
                        'font-size' => false,
                        'font-weight' => false,
                        'output' => array(''), // An array of CSS selectors to apply this font style to dynamically
                        'compiler' => array(''), // An array of CSS selectors to apply this font style to dynamically
                        'units'=> 'px', // Defaults to px
                        'default' => array(
                            'font-family'=>'Montserrat',
                        ),
                    ),

                    array(
                        'id'=> 'secondary_font',
                        'type' => 'typography',
                        'title' => __('Secondary Font', 'g5plus-wolverine'),
                        'subtitle' => __('Specify the Secondary font properties.', 'g5plus-wolverine'),
                        'google' => true,
                        'line-height'=>false,
                        'all_styles' => true, // Enable all Google Font style/weight variations to be added to the page
                        'color'=>false,
                        'text-align'=>false,
                        'font-style' => false,
                        'subsets' => false,
                        'font-size' => false,
                        'font-weight' => false,
                        'output' => array(''), // An array of CSS selectors to apply this font style to dynamically
                        'compiler' => array(''), // An array of CSS selectors to apply this font style to dynamically
                        'units'=> 'px', // Defaults to px
                        'default' => array(
                            'font-family'=>'Montserrat',
                        ),
                    ),


                    array(
                        'id'=> 'other_font',
                        'type' => 'typography',
                        'title' => __('Other Font', 'g5plus-wolverine'),
                        'subtitle' => __('Specify the Other font properties.', 'g5plus-wolverine'),
                        'google' => true,
                        'line-height'=>false,
                        'all_styles' => true, // Enable all Google Font style/weight variations to be added to the page
                        'color'=>false,
                        'text-align'=>false,
                        'font-style' => false,
                        'subsets' => false,
                        'font-size' => false,
                        'font-weight' => false,
                        'output' => array(''), // An array of CSS selectors to apply this font style to dynamically
                        'compiler' => array(''), // An array of CSS selectors to apply this font style to dynamically
                        'units'=> 'px', // Defaults to px
                        'default' => array(
                            'font-family'=>'Playfair Display',
                        ),
                    ),

                    array(
                        'id'=> 'page_title_font',
                        'type' => 'typography',
                        'title' => __('Page Title Font', 'g5plus-wolverine'),
                        'subtitle' => __('Specify the page title font properties.', 'g5plus-wolverine'),
                        'google' => true,
                        'all_styles' => true, // Enable all Google Font style/weight variations to be added to the page
                        'line-height'=>false,
                        'color'=>true,
                        'text-align'=>false,
                        'font-style' => true,
                        'subsets' => false,
                        'font-size' => true,
                        'font-weight' => true,
                        'text-transform' => true,
                        'output' => array('.page-title-inner h1'), // An array of CSS selectors to apply this font style to dynamically
                        'compiler' => array(), // An array of CSS selectors to apply this font style to dynamically
                        'units'=> 'px', // Defaults to px
                        'default' => array(
                            'font-family'=>'Montserrat',
                            'font-size'=>'36px',
                            'font-weight'=>'400',
                            'text-transform' => 'uppercase',
                            'color' => '#ffffff'
                        ),
                    ),

                    array(
                        'id'=> 'page_sub_title_font',
                        'type' => 'typography',
                        'title' => __('Page Sub Title Font', 'g5plus-wolverine'),
                        'subtitle' => __('Specify the page sub title font properties.', 'g5plus-wolverine'),
                        'google' => true,
                        'all_styles' => true, // Enable all Google Font style/weight variations to be added to the page
                        'line-height'=>false,
                        'color'=>true,
                        'text-align'=>false,
                        'font-style' => true,
                        'subsets' => false,
                        'font-size' => true,
                        'font-weight' => true,
                        'text-transform' => true,
                        'output' => array('.page-title-inner .page-sub-title'), // An array of CSS selectors to apply this font style to dynamically
                        'compiler' => array(), // An array of CSS selectors to apply this font style to dynamically
                        'units'=> 'px', // Defaults to px
                        'default' => array(
                            'font-family'=>'Playfair Display',
                            'font-size'=>'16px',
                            'font-weight'=>'400',
	                        'font-style'=>'italic',
                            'text-transform' => 'none',
                            'color' => '#ffffff'
                        ),
                    ),



                    array(
                        'id'=> 'count_down_font',
                        'type' => 'typography',
                        'title' => __('Countdown Font', 'g5plus-wolverine'),
                        'subtitle' => __('Specify the countdown font properties.', 'g5plus-wolverine'),
                        'google' => true,
                        'all_styles' => false, // Enable all Google Font style/weight variations to be added to the page
                        'line-height'=>false,
                        'color'=>false,
                        'text-align'=>false,
                        'font-style' => false,
                        'subsets' => false,
                        'font-size' => false,
                        'font-weight' => false,
                        'output' => array(''), // An array of CSS selectors to apply this font style to dynamically
                        'compiler' => array(''), // An array of CSS selectors to apply this font style to dynamically
                        'units'=> 'px', // Defaults to px
                        'default' => array(
                            'font-family'=>'Lato',
                        ),
                    ),
                ),
            );

            $this->sections[] = array(
                'title'  => __( 'Social Profiles', 'g5plus-wolverine' ),
                'desc'   => '',
                'icon'   => 'el el-path',
                'fields' => array(
                    array(
                        'id' => 'twitter_url',
                        'type' => 'text',
                        'title' => __('Twitter', 'g5plus-wolverine'),
                        'subtitle' => "Your Twitter",
                        'desc' => '',
                        'default' => ''
                    ),
                    array(
                        'id' => 'facebook_url',
                        'type' => 'text',
                        'title' => __('Facebook', 'g5plus-wolverine'),
                        'subtitle' => "Your facebook page/profile url",
                        'desc' => '',
                        'default' => ''
                    ),
                    array(
                        'id' => 'dribbble_url',
                        'type' => 'text',
                        'title' => __('Dribbble', 'g5plus-wolverine'),
                        'subtitle' => "Your Dribbble",
                        'desc' => '',
                        'default' => ''
                    ),
                    array(
                        'id' => 'vimeo_url',
                        'type' => 'text',
                        'title' => __('Vimeo', 'g5plus-wolverine'),
                        'subtitle' => "Your Vimeo",
                        'desc' => '',
                        'default' => ''
                    ),
                    array(
                        'id' => 'tumblr_url',
                        'type' => 'text',
                        'title' => __('Tumblr', 'g5plus-wolverine'),
                        'subtitle' => "Your Tumblr",
                        'desc' => '',
                        'default' => ''
                    ),
                    array(
                        'id' => 'skype_username',
                        'type' => 'text',
                        'title' => __('Skype', 'g5plus-wolverine'),
                        'subtitle' => "Your Skype username",
                        'desc' => 'Your Skype username',
                        'default' => ''
                    ),
                    array(
                        'id' => 'linkedin_url',
                        'type' => 'text',
                        'title' => __('LinkedIn', 'g5plus-wolverine'),
                        'subtitle' => "Your LinkedIn page/profile url",
                        'desc' => '',
                        'default' => ''
                    ),
                    array(
                        'id' => 'googleplus_url',
                        'type' => 'text',
                        'title' => __('Google+', 'g5plus-wolverine'),
                        'subtitle' => "Your Google+ page/profile URL",
                        'desc' => '',
                        'default' => ''
                    ),
                    array(
                        'id' => 'flickr_url',
                        'type' => 'text',
                        'title' => __('Flickr', 'g5plus-wolverine'),
                        'subtitle' => "Your Flickr page url",
                        'desc' => '',
                        'default' => ''
                    ),
                    array(
                        'id' => 'youtube_url',
                        'type' => 'text',
                        'title' => __('YouTube', 'g5plus-wolverine'),
                        'subtitle' => "Your YouTube URL",
                        'desc' => '',
                        'default' => ''
                    ),
                    array(
                        'id' => 'pinterest_url',
                        'type' => 'text',
                        'title' => __('Pinterest', 'g5plus-wolverine'),
                        'subtitle' => "Your Pinterest",
                        'desc' => '',
                        'default' => ''
                    ),
                    array(
                        'id' => 'foursquare_url',
                        'type' => 'text',
                        'title' => __('Foursquare', 'g5plus-wolverine'),
                        'subtitle' => "Your Foursqaure URL",
                        'desc' => '',
                        'default' => ''
                    ),
                    array(
                        'id' => 'instagram_url',
                        'type' => 'text',
                        'title' => __('Instagram', 'g5plus-wolverine'),
                        'subtitle' => "Your Instagram",
                        'desc' => '',
                        'default' => ''
                    ),
                    array(
                        'id' => 'github_url',
                        'type' => 'text',
                        'title' => __('GitHub', 'g5plus-wolverine'),
                        'subtitle' => "Your GitHub URL",
                        'desc' => '',
                        'default' => ''
                    ),
                    array(
                        'id' => 'xing_url',
                        'type' => 'text',
                        'title' => __('Xing', 'g5plus-wolverine'),
                        'subtitle' => "Your Xing URL",
                        'desc' => '',
                        'default' => ''
                    ),
                    array(
                        'id' => 'behance_url',
                        'type' => 'text',
                        'title' => __('Behance', 'g5plus-wolverine'),
                        'subtitle' => "Your Behance URL",
                        'desc' => '',
                        'default' => ''
                    ),
                    array(
                        'id' => 'deviantart_url',
                        'type' => 'text',
                        'title' => __('Deviantart', 'g5plus-wolverine'),
                        'subtitle' => "Your Deviantart URL",
                        'desc' => '',
                        'default' => ''
                    ),
                    array(
                        'id' => 'soundcloud_url',
                        'type' => 'text',
                        'title' => __('SoundCloud', 'g5plus-wolverine'),
                        'subtitle' => "Your SoundCloud URL",
                        'desc' => '',
                        'default' => ''
                    ),
                    array(
                        'id' => 'yelp_url',
                        'type' => 'text',
                        'title' => __('Yelp', 'g5plus-wolverine'),
                        'subtitle' => "Your Yelp URL",
                        'desc' => '',
                        'default' => ''
                    ),
                    array(
                        'id' => 'rss_url',
                        'type' => 'text',
                        'title' => __('RSS Feed', 'g5plus-wolverine'),
                        'subtitle' => "Your RSS Feed URL",
                        'desc' => '',
                        'default' => ''
                    ),
                    array(
                        'id' => 'email_address',
                        'type' => 'text',
                        'title' => __('Email address', 'g5plus-wolverine'),
                        'subtitle' => "Your email address",
                        'desc' => '',
                        'default' => ''
                    ),
                    array(
                        'id'=>'social-profile-divide-0',
                        'type' => 'divide'
                    ),
                    array(
                        'title'    => __('Social Share', 'g5plus-wolverine'),
                        'id'       => 'social_sharing',
                        'type'     => 'checkbox',
                        'subtitle' => __('Show the social sharing in blog posts', 'g5plus-wolverine'),

                        //Must provide key => value pairs for multi checkbox options
                        'options'  => array(
                            'facebook' => 'Facebook',
                            'twitter' => 'Twitter',
                            'google' => 'Google',
                            'linkedin' => 'Linkedin',
                            'tumblr' => 'Tumblr',
                            'pinterest' => 'Pinterest'
                        ),

                        //See how default has changed? you also don't need to specify opts that are 0.
                        'default' => array(
                            'facebook' => '1',
                            'twitter' => '1',
                            'google' => '1',
                            'linkedin' => '1',
                            'tumblr' => '1',
                            'pinterest' => '1'
                        )
                    )
                )
            );

            $this->sections[] = array(
                'title'  => __( 'Woocommerce', 'g5plus-wolverine' ),
                'desc'   => '',
                'icon'   => 'el el-shopping-cart',
                'fields' => array(
                    array(
                        'id'       => 'add_to_cart_animation',
                        'type'     => 'button_set',
                        'title'    => __( 'Add To Cart Animation', 'g5plus-wolverine' ),
                        'subtitle' => __( 'Enable Add To Cart Animation', 'g5plus-wolverine' ),
                        'desc'     => '',
                        'options'  => array( '1' => 'On', '0' => 'Off' ),
                        'default'  => '1'
                    ),
                    array(
                        'id'        => 'product_per_page',
                        'type'      => 'text',
                        'title'     => __('Products Per Page', 'g5plus-wolverine'),
                        'subtitle'  => __('This must be numeric or empty (default 12).', 'g5plus-wolverine'),
                        'desc'      => __('Set Products Per Page in archive product', 'g5plus-wolverine'),
                        'validate'  => 'numeric',
                        'default'   => '12',
                    ),
                    array(
                        'id' => 'product_display_columns',
                        'type' => 'select',
                        'title' => __('Product Display Columns', 'g5plus-wolverine'),
                        'subtitle' => __('Choose the number of columns to display on shop/category pages.','g5plus-wolverine'),
                        'options' => array(
                            '2'		=> '2',
                            '3'		=> '3',
                            '4'		=> '4',
                            '5'		=> '5',
                            '6'		=> '6',
                        ),
                        'desc' => '',
                        'default' => '3',
                        'select2' => array('allowClear' =>  false) ,
                    ),
                    array(
                        'id'       => 'product_show_rating',
                        'type'     => 'button_set',
                        'title'    => __( 'Show Rating', 'g5plus-wolverine' ),
                        'subtitle' => __( 'Show/Hide Rating product', 'g5plus-wolverine' ),
                        'desc'     => '',
                        'options'  => array( '1' => 'On', '0' => 'Off' ),
                        'default'  => '1'
                    ),


                    array(
                        'id'       => 'product_sale_flash_mode',
                        'type'     => 'button_set',
                        'title'    => __( 'Sale Flash Mode', 'g5plus-wolverine' ),
                        'subtitle' => __( 'Chose Sale Flash Mode', 'g5plus-wolverine' ),
                        'desc'     => '',
                        'options'  => array( 'text' => 'Text', 'percent' => 'Percent' ),
                        'default'  => 'percent'
                    ),

                    array(
                        'id'       => 'product_show_result_count',
                        'type'     => 'button_set',
                        'title'    => __( 'Show Result Count', 'g5plus-wolverine' ),
                        'subtitle' => __( 'Show/Hide Result Count In Archive Product', 'g5plus-wolverine' ),
                        'desc'     => '',
                        'options'  => array( '1' => 'On', '0' => 'Off' ),
                        'default'  => '1'
                    ),
                    array(
                        'id'       => 'product_show_catalog_ordering',
                        'type'     => 'button_set',
                        'title'    => __( 'Show Catalog Ordering', 'g5plus-wolverine' ),
                        'subtitle' => __( 'Show/Hide Catalog Ordering', 'g5plus-wolverine' ),
                        'desc'     => '',
                        'options'  => array( '1' => 'On', '0' => 'Off' ),
                        'default'  => '1'
                    ),
	                array(
		                'id'       => 'product_quick_view',
		                'type'     => 'button_set',
		                'title'    => __( 'Quick View', 'g5plus-wolverine' ),
		                'subtitle' => __( 'Enable/Disable Quick View', 'g5plus-wolverine' ),
		                'desc'     => '',
		                'options'  => array( '1' => 'Enable', '0' => 'Disable' ),
		                'default'  => '1'
	                ),
                )
            );


            // Archive Product
            $this->sections[] = array(
                'title'  => __( 'Archive Product', 'g5plus-wolverine' ),
                'desc'   => '',
                'icon'   => 'el el-book',
                'subsection' => true,
                'fields' => array(

	                array(
		                'id' => 'archive_product_style',
		                'type' => 'button_set',
		                'title' => __('Archive Product Style', 'g5plus-wolverine'),
		                'subtitle' => __('Archive Product Style', 'g5plus-wolverine'),
		                'desc' => '',
		                'options' => array(
			                'classic-1' => 'Classic 1',
			                'classic-2' => 'Classic 2',
			                'creative' => 'Creative'
		                ),
		                'default' => 'classic-1'
	                ),

                    array(
                        'id' => 'archive_product_layout',
                        'type' => 'button_set',
                        'title' => __('Archive Product Layout', 'g5plus-wolverine'),
                        'subtitle' => __('Select Archive Product Layout', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array('full' => 'Full Width','container' => 'Container', 'container-fluid' => 'Container Fluid'),
                        'default' => 'container'
                    ),
                    array(
                        'id' => 'archive_product_sidebar',
                        'type' => 'image_select',
                        'title' => __('Archive Product Sidebar', 'g5plus-wolverine'),
                        'subtitle' => __('Set Archive Product Sidebar', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array(
                            'none' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/sidebar-none.png'),
                            'left' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/sidebar-left.png'),
                            'right' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/sidebar-right.png'),
                        ),
                        'default' => 'right'
                    ),
                    array(
                        'id' => 'archive_product_sidebar_width',
                        'type' => 'button_set',
                        'title' => __('Sidebar Width', 'g5plus-wolverine'),
                        'subtitle' => __('Set Sidebar width', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array('small' => 'Small (1/4)', 'large' => 'Large (1/3)'),
                        'default' => 'small',
                        'required'  => array('archive_product_sidebar', '=', array('left','both','right')),
                    ),
                    array(
                        'id' => 'archive_product_left_sidebar',
                        'type' => 'select',
                        'title' => __('Archive Product Left Sidebar', 'g5plus-wolverine'),
                        'subtitle' => "Choose the default Archive Product left sidebar",
                        'data'      => 'sidebars',
                        'desc' => '',
                        'default' => 'woocommerce',
                        'required'  => array('archive_product_sidebar', '=', array('left','both')),
                    ),
                    array(
                        'id' => 'archive_product_right_sidebar',
                        'type' => 'select',
                        'title' => __('Archive Product Right Sidebar', 'g5plus-wolverine'),
                        'subtitle' => "Choose the default Archive Product right sidebar",
                        'data'      => 'sidebars',
                        'desc' => '',
                        'default' => 'woocommerce',
                        'required'  => array('archive_product_sidebar', '=', array('right','both')),
                    ),

                    array(
                        'id' => 'breadcrumbs_in_archive_product_title',
                        'type' => 'button_set',
                        'title' => __('Breadcrumbs in Archive Product', 'g5plus-wolverine'),
                        'subtitle' => __('Enable/Disable Breadcrumbs in Archive Product', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array('1' => 'On','0' => 'Off'),
                        'default' => '0'
                    ),

                    array(
                        'id' => 'show_archive_product_title',
                        'type' => 'button_set',
                        'title' => __('Show Archive Title', 'g5plus-wolverine'),
                        'subtitle' => __('Enable/Disable Archive Product Title', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array('1' => 'On','0' => 'Off'),
                        'default' => '1'
                    ),


                    array(
                        'id'       => 'archive_product_title_text_align',
                        'type'     => 'button_set',
                        'title'    => __( 'Archive Product Title Text Align', 'g5plus-wolverine' ),
                        'subtitle' => __( 'Set Archive Product Title Text Align', 'g5plus-wolverine' ),
                        'desc'     => '',
                        'options'  => array( 'left' => 'Left', 'center' => 'Center', 'right' => 'Right' ),
                        'default'  => 'left',
                        'required'  => array('show_archive_product_title', '=', array('1')),
                    ),

                    array(
                        'id'       => 'archive_product_title_parallax',
                        'type'     => 'button_set',
                        'title'    => __( 'Archive Product Title Parallax', 'g5plus-wolverine' ),
                        'subtitle' => __( 'Enable Archive Product Title Parallax', 'g5plus-wolverine' ),
                        'desc'     => '',
                        'options'  => array( '1' => 'Enable', '0' => 'Disable' ),
                        'default'  => '0',
                        'required'  => array('show_archive_product_title', '=', array('1')),
                    ),


                    array(
                        'id'        => 'archive_product_title_height',
                        'type'      => 'dimensions',
                        'title'     => __('Archive Product Title Height', 'g5plus-wolverine'),
                        'desc'      => __('You can set a height for the archive product title here', 'g5plus-wolverine'),
                        'required'  => array('show_archive_product_title', '=', array('1')),
                        'units' => 'px',
                        'output' => array('.archive-product-title-height'),
                        'width'    =>  false,
                        'default'  => array(
                            'Height'  => ''
                        )
                    ),

                    array(
                        'id' => 'archive_product_title_bg_image',
                        'type' => 'media',
                        'url'=> true,
                        'title' => __('Archive Product Title Background', 'g5plus-wolverine'),
                        'subtitle' => __('Upload archive product title background.', 'g5plus-wolverine'),
                        'desc' => '',
                        'default' => array(
                            'url' => $page_title_bg_url
                        ),
                        'required'  => array('show_archive_product_title', '=', array('1')),
                    ),
                    array(
                        'id' => 'show_page_shop_content',
                        'type' => 'button_set',
                        'title' => __('Show Page Shop Content', 'g5plus-wolverine'),
                        'subtitle' => __('Enable/Disable Shop Page Content', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array('0' => 'Off','before' => 'Show Before Archive','after' => 'Show After Archive'),
                        'default' => '0'
                    ),
                )
            );

            // Single Product
            $this->sections[] = array(
                'title'  => __( 'Single Product', 'g5plus-wolverine' ),
                'desc'   => '',
                'icon'   => 'el el-laptop',
                'subsection' => true,
                'fields' => array(
	                array(
		                'id'       => 'single_product_show_image_thumb',
		                'type'     => 'button_set',
		                'title'    => __( 'Show Image Thumb', 'g5plus-wolverine' ),
		                'subtitle' => __( 'Show/Hide Image Thumb product', 'g5plus-wolverine' ),
		                'desc'     => '',
		                'options'  => array( '1' => 'On', '0' => 'Off' ),
		                'default'  => '1'
	                ),





	                array(
		                'id' => 'section-single-product-layout-start',
		                'type' => 'section',
		                'title' => __('Layout Options', 'g5plus-wolverine'),
		                'indent' => true
	                ),

                    array(
                        'id' => 'single_product_layout',
                        'type' => 'button_set',
                        'title' => __('Single Product Layout', 'g5plus-wolverine'),
                        'subtitle' => __('Select Single Product Layout', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array('full' => 'Full Width','container' => 'Container', 'container-fluid' => 'Container Fluid'),
                        'default' => 'container'
                    ),
                    array(
                        'id' => 'single_product_sidebar',
                        'type' => 'image_select',
                        'title' => __('Single Product Sidebar', 'g5plus-wolverine'),
                        'subtitle' => __('Set Single Product Sidebar', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array(
                            'none' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/sidebar-none.png'),
                            'left' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/sidebar-left.png'),
                            'right' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/sidebar-right.png'),
                        ),
                        'default' => 'left'
                    ),
                    array(
                        'id' => 'single_product_sidebar_width',
                        'type' => 'button_set',
                        'title' => __('Single Product Sidebar Width', 'g5plus-wolverine'),
                        'subtitle' => __('Set Sidebar width', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array('small' => 'Small (1/4)', 'large' => 'Large (1/3)'),
                        'default' => 'small',
                        'required'  => array('single_product_sidebar', '=', array('left','both','right')),
                    ),
                    array(
                        'id' => 'single_product_left_sidebar',
                        'type' => 'select',
                        'title' => __('Single Product Left Sidebar', 'g5plus-wolverine'),
                        'subtitle' => "Choose the default Single Product left sidebar",
                        'data'      => 'sidebars',
                        'desc' => '',
                        'default' => 'woocommerce',
                        'required'  => array('single_product_sidebar', '=', array('left','both')),
                    ),
                    array(
                        'id' => 'single_product_right_sidebar',
                        'type' => 'select',
                        'title' => __('Single Product Right Sidebar', 'g5plus-wolverine'),
                        'subtitle' => "Choose the default Single Product right sidebar",
                        'data'      => 'sidebars',
                        'desc' => '',
                        'default' => 'woocommerce',
                        'required'  => array('single_product_sidebar', '=', array('right','both')),
                    ),

                    array(
                        'id' => 'breadcrumbs_in_single_product_title',
                        'type' => 'button_set',
                        'title' => __('Breadcrumbs in Single Product', 'g5plus-wolverine'),
                        'subtitle' => __('Enable/Disable Breadcrumbs in Single Product', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array('1' => 'On','0' => 'Off'),
                        'default' => '1'
                    ),

                    array(
                        'id' => 'show_single_product_title',
                        'type' => 'button_set',
                        'title' => __('Show Single Title', 'g5plus-wolverine'),
                        'subtitle' => __('Enable/Disable Single Product Title', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array('1' => 'On','0' => 'Off'),
                        'default' => '1'
                    ),


                    array(
                        'id'       => 'single_product_title_text_align',
                        'type'     => 'button_set',
                        'title'    => __( 'Single Product Title Text Align', 'g5plus-wolverine' ),
                        'subtitle' => __( 'Set Single Product Title Text Align', 'g5plus-wolverine' ),
                        'desc'     => '',
                        'options'  => array( 'left' => 'Left', 'center' => 'Center', 'right' => 'Right' ),
                        'default'  => 'left',
                        'required'  => array('show_single_product_title', '=', array('1')),
                    ),

                    array(
                        'id'       => 'single_product_title_parallax',
                        'type'     => 'button_set',
                        'title'    => __( 'Single Product Title Parallax', 'g5plus-wolverine' ),
                        'subtitle' => __( 'Enable Single Product Title Parallax', 'g5plus-wolverine' ),
                        'desc'     => '',
                        'options'  => array( '1' => 'Enable', '0' => 'Disable' ),
                        'default'  => '0',
                        'required'  => array('show_single_product_title', '=', array('1')),
                    ),


                    array(
                        'id'        => 'single_product_title_height',
                        'type'      => 'dimensions',
                        'title'     => __('Single Product Title Height', 'g5plus-wolverine'),
                        'subtitle'  => __('This must be numeric (no px) or empty.', 'g5plus-wolverine'),
                        'desc'      => __('You can set a height for the single product title here', 'g5plus-wolverine'),
                        'required'  => array('show_single_product_title', '=', array('1')),
                        'units' => 'px',
                        'width'    =>  false,
                        'output' => array('.single-product-title-height'),
                        'default'  => array(
                            'Height'  => ''
                        )
                    ),

                    array(
                        'id' => 'single_product_title_bg_image',
                        'type' => 'media',
                        'url'=> true,
                        'title' => __('Single Product Title Background', 'g5plus-wolverine'),
                        'subtitle' => __('Upload single product title background.', 'g5plus-wolverine'),
                        'desc' => '',
                        'default' => array(
                            'url' => $page_title_bg_url
                        ),
                        'required'  => array('show_single_product_title', '=', array('1')),
                    ),

	                array(
		                'id' => 'section-single-product-layout-end',
		                'type' => 'section',
		                'indent' => false
	                ),

	                array(
		                'id' => 'section-single-product-related-start',
		                'type' => 'section',
		                'title' => __('Product Related Options', 'g5plus-wolverine'),
		                'indent' => true
	                ),



	                array(
		                'id' => 'related_product_style',
		                'type' => 'button_set',
		                'title' => __('Related Product Style', 'g5plus-wolverine'),
		                'desc' => '',
		                'options' => array(
			                'classic-3' => 'Classic',
			                'creative-2' => 'Creative'
		                ),
		                'default' => 'classic-3'
	                ),

	                array(
		                'id'       => 'related_product_count',
		                'type'     => 'text',
		                'title'    => __('Related Product Total Record', 'g5plus-wolverine'),
		                'subtitle' => __('Total Record Of Related Product.', 'g5plus-wolverine'),
		                'validate' => 'number',
		                'default'  => '6',
	                ),

	                array(
		                'id' => 'related_product_display_columns',
		                'type' => 'select',
		                'title' => __('Related Product Display Columns', 'g5plus-wolverine'),
		                'subtitle' => __('Choose the number of columns to display on related product.','g5plus-wolverine'),
		                'options' => array(
			                '3'		=> '3',
			                '4'		=> '4',
			                '5'		=> '5',
			                '6'		=> '6',
		                ),
		                'desc' => '',
		                'default' => '4'
	                ),

	                array(
		                'id' => 'related_product_condition',
		                'type' => 'checkbox',
		                'title' => __('Related Product Condition', 'g5plus-wolverine'),
		                'options' => array(
			                'category' => __('Same Category','g5plus-wolverine'),
			                'tag' => __('Same Tag','g5plus-wolverine'),
		                ),
		                'default' => array(
			                'category'      => '1',
			                'tag'      => '1',
		                ),
	                ),


	                array(
		                'id' => 'section-single-product-related-end',
		                'type' => 'section',
		                'indent' => false
	                ),



                )
            );



            $this->sections[] = array(
                'title'  => __( 'Custom Post Type', 'g5plus-wolverine' ),
                'desc'   => '',
                'icon'   => 'el el-screenshot',
                'fields' => array(
                    array(
                        'id' => 'cpt-disable',
                        'type' => 'checkbox',
                        'title' => __('Disable Custom Post Types', 'g5plus-wolverine'),
                        'subtitle' => __('You can disable the custom post types used within the theme here, by checking the corresponding box. NOTE: If you do not want to disable any, then make sure none of the boxes are checked.', 'g5plus-wolverine'),
                        'options' => array(
                            'portfolio' => 'Portfolio',
                            'ourteam' => 'Our Team',
                            'countdown' => 'CountDown',
                            'pricingtable' => 'Pricing Table',
                            'food' => 'Food',
                            'gallery' => 'Gallery',
                        ),
                        'default' => array(
                            'portfolio' => '0',
                            'ourteam' => '0',
                            'countdown' => '0',
                            'pricingtable' => '0',
                            'food' => '0',
                            'gallery' => '0'
                        )
                    ),


                )
            );

	        $this->sections[] = array(
		        'title'  => __( 'Portfolio Settings', 'g5plus-wolverine' ),
		        'desc'   => '',
		        'icon'   => 'el el-th-large',
		        'subsection' => true,
		        'fields' => array(
			        array(
				        'id' => 'home_portfolio_flip_book_url',
				        'type' => 'text',
				        'title' => __('Home page portfolio flip book url', 'g5plus-wolverine'),
				        'desc' => '',
				        'default' => ''
			        ),

                    array(
                        'id'       => 'portfolio_copyright',
                        'type'     => 'textarea',
                        'title'    => __( 'Portfolio Copyright', 'g5plus-wolverine' ),
                        'subtitle' => __( 'Display copyright below portfolio flip book footer', 'g5plus-wolverine' ),
                        'default'  => '© 2015 Wolverine Template Designed By G5Theme'
                    ),

                    array(
                        'id' => 'portfolio_disable_link_detail',
                        'type' => 'button_set',
                        'title' => esc_html__('Disable link to detail', 'g5plus-handmade'),
                        'subtitle' => esc_html__('Enable/Disable link to detail in Portfolio', 'g5plus-handmade'),
                        'desc' => '',
                        'options' => array('1' => 'On','0' => 'Off'),
                        'default' => '0'
                    ),

                    array(
                        'id' => 'breadcrumbs_in_portfolio_title',
                        'type' => 'button_set',
                        'title' => __('Breadcrumbs in Portfolio', 'g5plus-wolverine'),
                        'subtitle' => __('Enable/Disable Breadcrumbs in Portfolio', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array('1' => 'On','0' => 'Off'),
                        'default' => '0'
                    ),

			        array(
				        'id' => 'show_portfolio_title',
				        'type' => 'button_set',
				        'title' => __('Show Portfolio Title', 'g5plus-wolverine'),
				        'subtitle' => __('Enable/Disable Portfolio Title', 'g5plus-wolverine'),
				        'desc' => '',
				        'options' => array('1' => 'On','0' => 'Off'),
				        'default' => '1'
			        ),

                    array(
                        'id'       => 'portfolio_title_text_align',
                        'type'     => 'button_set',
                        'title'    => __( 'Portfolio Title Text Align', 'g5plus-wolverine' ),
                        'subtitle' => __( 'Set Portfolio Title Text Align', 'g5plus-wolverine' ),
                        'desc'     => '',
                        'options'  => array( 'left' => 'Left', 'center' => 'Center', 'right' => 'Right' ),
                        'default'  => 'left',
                        'required'  => array('show_portfolio_title', '=', array('1')),
                    ),

                    array(
                        'id'       => 'portfolio_title_parallax',
                        'type'     => 'button_set',
                        'title'    => __( 'Portfolio Title Parallax', 'g5plus-wolverine' ),
                        'subtitle' => __( 'Enable Portfolio Title Parallax', 'g5plus-wolverine' ),
                        'desc'     => '',
                        'options'  => array( '1' => 'Enable', '0' => 'Disable' ),
                        'default'  => '0',
                        'required'  => array('show_portfolio_title', '=', array('1')),
                    ),




			        array(
				        'id'        => 'portfolio_title_height',
				        'type'      => 'dimensions',
				        'title'     => __('Portfolio Title Height', 'g5plus-wolverine'),
				        'subtitle'  => __('This must be numeric (no px) or empty.', 'g5plus-wolverine'),
				        'desc'      => __('You can set a height for the Portfolio title here', 'g5plus-wolverine'),
				        'units' => 'px',
				        'width'    =>  false,
                        'output' => array('.portfolio-title-height'),
				        'default'  => array(
					        'Height'  => ''
				        ),
                        'required'  => array('show_portfolio_title', '=', array('1')),
			        ),

			        array(
				        'id' => 'portfolio_title_bg_image',
				        'type' => 'media',
				        'url'=> true,
				        'title' => __('Portfolio Title Background', 'g5plus-wolverine'),
				        'subtitle' => __('Upload portfolio title background.', 'g5plus-wolverine'),
				        'desc' => '',
				        'default' => array(
					        'url' => $page_title_bg_url
				        ),
                        'required'  => array('show_portfolio_title', '=', array('1')),
			        ),
                    array(
                        'id'       => 'portfolio-single-style-enable',
                        'type'     => 'button_set',
                        'title'    => __( 'Custom Single Layout', 'g5plus-wolverine' ),
                        'subtitle' => __( 'Enable Custom Single Layout', 'g5plus-wolverine' ),
                        'desc'     => '',
                        'options'  => array( '1' => 'Enable', '0' => 'Disable' ),
                        'default'  => '1',

                    ),
			        array(
				        'id' => 'portfolio-single-style',
				        'type' => 'image_select',
				        'title' => __('Single Portfolio Layout', 'g5plus-wolverine'),
				        'subtitle' => __('Select Single Portfolio Layout', 'g5plus-wolverine'),
				        'desc' => '',
				        'options' => array(
					        'detail-01' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/portfolio-detail-01.jpg'),
					        'detail-02' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/portfolio-detail-02.jpg'),
					        'detail-03' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/portfolio-detail-03.jpg'),
					        'detail-04' => array('title' => '', 'img' => THEME_URL.'assets/images/theme-options/portfolio-detail-04.jpg'),
				        ),
				        'default' => 'detail-01',
                        'required'  => array('portfolio-single-style-enable', '=', array('1')),
			        ),
		        )
	        );


            $this->sections[] = array(
                'title'  => __( 'Archive Portfolio Settings', 'g5plus-wolverine' ),
                'desc'   => '',
                'icon'   => 'el el-folder-close',
                'subsection' => true,
                'fields' => array(

                    array(
                        'id' => 'portfolio_archive_layout',
                        'type' => 'button_set',
                        'title' => __('Layout', 'g5plus-wolverine'),
                        'subtitle' => __('Select Archive Layout', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array('full' => 'Full Width','container' => 'Container', 'container-fluid' => 'Container Fluid'),
                        'default' => 'container'
                    ),

                    array(
                        'id' => 'portfolio_archive_sidebar',
                        'type' => 'image_select',
                        'title' => __('Sidebar', 'g5plus-wolverine'),
                        'subtitle' => __('Set Sidebar Style', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array(
                            'none' => array('alt' => 'No sidebar', 'img' => THEME_URL . 'assets/images/theme-options/sidebar-none.png'),
                            'left' => array('alt' => 'Left sidebar', 'img' => THEME_URL . 'assets/images/theme-options/sidebar-left.png'),
                            'right' => array('alt' => 'Right sidebar', 'img' => THEME_URL . 'assets/images/theme-options/sidebar-right.png'),
                            'both' => array('alt' => 'Both left and right sidebar', 'img' => THEME_URL . 'assets/images/theme-options/sidebar-both.png'),
                        ),
                        'default' => 'none'
                    ),


                    array(
                        'id' => 'portfolio_archive_sidebar_width',
                        'type' => 'button_set',
                        'title' => __('Sidebar Width', 'g5plus-wolverine'),
                        'subtitle' => __('Set Sidebar width', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array('small' => 'Small (1/4)', 'large' => 'Large (1/3)'),
                        'default' => 'small',
                        'required'  => array('portfolio_archive_sidebar', '=', array('left','both','right')),
                    ),

                    array(
                        'id' => 'portfolio_archive_left_sidebar',
                        'type' => 'select',
                        'title' => __('Left Sidebar', 'g5plus-wolverine'),
                        'subtitle' => "Choose the default left sidebar",
                        'data'      => 'sidebars',
                        'desc' => '',
                        'default' => 'sidebar-1',
                        'required'  => array('portfolio_archive_sidebar', '=', array('left','both')),
                    ),
                    array(
                        'id' => 'portfolio_archive_right_sidebar',
                        'type' => 'select',
                        'title' => __('Right Sidebar', 'g5plus-wolverine'),
                        'subtitle' => "Choose the default right sidebar",
                        'data'      => 'sidebars',
                        'desc' => '',
                        'default' => 'sidebar-2',
                        'required'  => array('portfolio_archive_sidebar', '=', array('right','both')),
                    ),

                    array(
                        'id' => 'breadcrumbs_in_portfolio_archive',
                        'type' => 'button_set',
                        'title' => __('Breadcrumbs in Portfolio Archive', 'g5plus-wolverine'),
                        'subtitle' => __('Enable/Disable Breadcrumbs in Portfolio Archive', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array('1' => 'On','0' => 'Off'),
                        'default' => '0'
                    ),

                    array(
                        'id' => 'show_portfolio_archive_title',
                        'type' => 'button_set',
                        'title' => __('Show Portfolio Archive Title', 'g5plus-wolverine'),
                        'subtitle' => __('Enable/Disable Portfolio Title', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array('1' => 'On','0' => 'Off'),
                        'default' => '1'
                    ),

                    array(
                        'id'       => 'portfolio_archive_title_text_align',
                        'type'     => 'button_set',
                        'title'    => __( 'Portfolio Archive Title Text Align', 'g5plus-wolverine' ),
                        'subtitle' => __( 'Set Portfolio Archive Title Text Align', 'g5plus-wolverine' ),
                        'desc'     => '',
                        'options'  => array( 'left' => 'Left', 'center' => 'Center', 'right' => 'Right' ),
                        'default'  => 'left',
                        'required'  => array('show_portfolio_archive_title', '=', array('1')),
                    ),

                    array(
                        'id'       => 'portfolio_archive_title_parallax',
                        'type'     => 'button_set',
                        'title'    => __( 'Portfolio Archive Title Parallax', 'g5plus-wolverine' ),
                        'subtitle' => __( 'Enable Portfolio Archive Title Parallax', 'g5plus-wolverine' ),
                        'desc'     => '',
                        'options'  => array( '1' => 'Enable', '0' => 'Disable' ),
                        'default'  => '0',
                        'required'  => array('show_portfolio_archive_title', '=', array('1')),
                    ),


                    array(
                        'id' => 'portfolio_archive_title_bg_image',
                        'type' => 'media',
                        'url'=> true,
                        'title' => __('Portfolio Archive Title Background', 'g5plus-wolverine'),
                        'subtitle' => __('Upload portfolio title background.', 'g5plus-wolverine'),
                        'desc' => '',
                        'default' => array(
                            'url' => $page_title_bg_url
                        ),
                        'required'  => array('show_portfolio_archive_title', '=', array('1')),
                    ),
                    array(
                        'id'       => 'portfolio_archive_heading_enable',
                        'type'     => 'button_set',
                        'title'    => __( 'Enable using heading on top item', 'g5plus-wolverine' ),
                        'desc'     => '',
                        'options'  => array( '1' => 'Enable', '0' => 'Disable' ),
                        'default'  => '0',
                    ),


                    array(
                        'id' => 'portfolio_archive_heading_style',
                        'type' => 'select',
                        'title' => __('Portfolio Archive Heading Layout', 'g5plus-wolverine'),
                        'subtitle' => __('Select Portfolio Archive Heading Layout', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array(
                            'style1' => __('style 1', 'g5plus-wolverine'),
                            'style2' => __('style 2', 'g5plus-wolverine'),
                            'style3' => __('style 3', 'g5plus-wolverine'),
                            'style4'  => __('style 4', 'g5plus-wolverine'),
                            'style5' => __('style 5', 'g5plus-wolverine'),
                            'style6' => __('style 6', 'g5plus-wolverine'),
                            'style7' =>  __('style 7', 'g5plus-wolverine')),
                        'default' => 'style1',
                        'required'  => array('portfolio_archive_heading_enable', '=', array('1')),
                    ),
                    array(
                        'id'        => 'portfolio_archive_heading_title',
                        'type'      => 'text',
                        'title'     => __('Heading title', 'g5plus-wolverine'),
                        'subtitle' => __('Add keyword %s into title if want display category name in title', 'g5plus-wolverine'),
                        'required'  => array('portfolio_archive_heading_enable', '=', array('1'))
                    ),
                    array(
                        'id'        => 'portfolio_archive_heading_sub_title',
                        'type'      => 'text',
                        'title'     => __('Heading sub title', 'g5plus-wolverine'),
                        'required'  => array('portfolio_archive_heading_style', '=', array('style1', 'style2', 'style7')),
                    ),
                    array(
                        'id'        => 'portfolio_archive_heading_description',
                        'type'      => 'textarea',
                        'title'     => __('Heading description', 'g5plus-wolverine'),
                        'required'  => array('portfolio_archive_heading_enable', '=', array('1'))
                    ),
                    array(
                        'id' => 'portfolio_archive_heading_text_align',
                        'type' => 'select',
                        'title' => __('Portfolio Archive Heading Align', 'g5plus-wolverine'),
                        'subtitle' => __('Select Portfolio Archive Heading Align', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array(
                            'text-left' => __('Left', 'g5plus-wolverine'),
                            'text-right' => __('Right', 'g5plus-wolverine'),
                            'text-center' => __('Center', 'g5plus-wolverine')),
                        'default' => 'text-center',
                        'required'  => array('portfolio_archive_heading_enable', '=', array('1')),
                    ),

                    array(
                        'id' => 'portfolio_archive_item_style',
                        'type' => 'select',
                        'title' => __('Portfolio Archive Item Layout', 'g5plus-wolverine'),
                        'subtitle' => __('Select Portfolio Archive Item Layout', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array(
                            'grid' => __('Grid', 'g5plus-wolverine') ,
                            'title' => __('Title & category', 'g5plus-wolverine') ,
                            'one-page' => __('One page', 'g5plus-wolverine') ,
                            'masonry' =>  __('Masonry Style-01', 'g5plus-wolverine'),
                            'masonry-style-02' =>  __('Masonry Style-02', 'g5plus-wolverine'),
                            'masonry-classic' =>  __('Masonry Classic', 'g5plus-wolverine'),
                            'left-menu' =>  __('Left menu', 'g5plus-wolverine')),
                        'default' => 'grid'
                    ),
                    array(
                        'id' => 'portfolio_archive_item_column',
                        'type' => 'select',
                        'title' => __('Portfolio Archive Item Column', 'g5plus-wolverine'),
                        'subtitle' => __('Select Portfolio Archive Item Column', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array(
                            '2' => '2' ,
                            '3' => '3' ,
                            '4' => '4' ,
                            '5' => '5',
                            '6' => '6'),
                        'default' => '4',
                        'required'  => array('portfolio_archive_item_style', '=', array('grid','title')),
                    ),
                    array(
                        'id' => 'portfolio_archive_item_masonry_column',
                        'type' => 'select',
                        'title' => __('Portfolio Archive Item Column', 'g5plus-wolverine'),
                        'subtitle' => __('Select Portfolio Archive Item Column', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array(
                            '3' => '3' ,
                            '4' => '4' ,
                            '5' => '5'),
                        'default' => '4',
                        'required'  => array('portfolio_archive_item_style', '=', array('masonry')),
                    ),
                    array(
                        'id'        => 'portfolio_archive_item_per_page',
                        'type'      => 'text',
                        'title'     => __('Portfolio Archive Iterm Per Page', 'g5plus-wolverine'),
                        'subtitle'  => __('This must be numeric or empty. Empty for select all', 'g5plus-wolverine'),
                    ),
                    array(
                        'id' => 'portfolio_archive_padding_item',
                        'type' => 'select',
                        'title' => __('Portfolio Archive Padding Between Items', 'g5plus-wolverine'),
                        'subtitle' => __('Select Portfolio Archive Padding Between Items', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array(
                            '' => __('No padding', 'g5plus-wolverine'),
                            'col-padding-10'=> '10 px',
                            'col-padding-15' =>  '15 px',
                            'col-padding-20'  => '20 px',
                            'col-padding-40' =>  '40 px'),
                        'default' => 'col-padding-15'
                    ),
                    array(
                        'id' => 'portfolio_archive_item_image_size',
                        'type' => 'select',
                        'title' => __('Portfolio Archive Item Image Size', 'g5plus-wolverine'),
                        'subtitle' => __('Select Portfolio Archive Item Image Size', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' =>array('585x585' => '585x585', '590x393' => '590x393'),
                        'default' => '585x585',
                        'required'  => array('portfolio_archive_item_style', '=', array('grid','title')),
                    ),
                    array(
                        'id' => 'portfolio_archive_overlay',
                        'type' => 'select',
                        'title' => __('Single Portfolio Archive hover style', 'g5plus-wolverine'),
                        'subtitle' => __('Select Portfolio Archive hover style', 'g5plus-wolverine'),
                        'desc' => '',
                        'options' => array('icon' => __('Icon', 'g5plus-wolverine') ,
                            'title' => __('Title', 'g5plus-wolverine'),
                            'title-category' => __('Title & Category', 'g5plus-wolverine')  ,
                            'title-category-link' =>  __('Title & Category & Link button', 'g5plus-wolverine') ,
                            'title-excerpt-link' => __('Title & Excerpt & Link button & Align center', 'g5plus-wolverine') ,
                            'left-title-excerpt-link' =>  __('Title & Excerpt & Link button & Align left', 'g5plus-wolverine') ,
                            'title-excerpt-link-no-icon'  => __('Title & Excerpt & Link button & No Icon', 'g5plus-wolverine') ,
                            'title-excerpt' => __('Title & Excerpt', 'g5plus-wolverine'),
                        ),
                        'default' => 'title'
                    ),
                    array(
                        'id'        => 'portfolio_archive_css',
                        'type'      => 'text',
                        'title'     => __('Custome css class name', 'g5plus-wolverine')
                    ),
                )
            );

            $this->sections[] = array(
                'title'  => __( 'Resources Options', 'g5plus-wolverine' ),
                'desc'   => '',
                'icon'   => 'el el-th-large',
                'fields' => array(
                    array(
                        'id'        => 'cdn_bootstrap_js',
                        'type'      => 'text',
                        'title'     => __('CDN Bootstrap Script', 'g5plus-wolverine'),
                        'subtitle'  => __('Url CDN Bootstrap Script', 'g5plus-wolverine'),
                        'desc'      => '',
                        'default'   => '',
                    ),

                    array(
                        'id'        => 'cdn_bootstrap_css',
                        'type'      => 'text',
                        'title'     => __('CDN Bootstrap Stylesheet', 'g5plus-wolverine'),
                        'subtitle'  => __('Url CDN Bootstrap Stylesheet', 'g5plus-wolverine'),
                        'desc'      => '',
                        'default'   => '',
                    ),

                    array(
                        'id'        => 'cdn_font_awesome',
                        'type'      => 'text',
                        'title'     => __('CDN Font Awesome', 'g5plus-wolverine'),
                        'subtitle'  => __('Url CDN Font Awesome', 'g5plus-wolverine'),
                        'desc'      => '',
                        'default'   => '',
                    ),

                )
            );
            $this->sections[] = array(
                'title'  => __( 'Custom CSS & Script', 'g5plus-wolverine' ),
                'desc'   => __( 'If you change Custom CSS, you must "Save & Generate CSS"', 'g5plus-wolverine' ),
                'icon'   => 'el el-edit',
                'fields' => array(
                    array(
                        'id' => 'custom_css',
                        'type' => 'ace_editor',
                        'mode' => 'css',
                        'theme' => 'monokai',
                        'title' => __('Custom CSS', 'g5plus-wolverine'),
                        'subtitle' => __('Add some CSS to your theme by adding it to this textarea. Please do not include any style tags.', 'g5plus-wolverine'),
                        'desc' => '',
                        'default' => '',
                        'options'  => array('minLines'=> 20, 'maxLines' => 60)
                    ),
                    array(
                        'id' => 'custom_js',
                        'type' => 'ace_editor',
                        'mode' => 'javascript',
                        'theme' => 'chrome',
                        'title' => __('Custom JS', 'g5plus-wolverine'),
                        'subtitle' => __('Add some custom JavaScript to your theme by adding it to this textarea. Please do not include any script tags.', 'g5plus-wolverine'),
                        'desc' => '',
                        'default' => '',
                        'options'  => array('minLines'=> 20, 'maxLines' => 60)
                    ),

                )
            );
        }

        public function setHelpTabs() {
        }

        /**
         * All the possible arguments for Redux.
         * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
         * */
        public function setArguments() {

            $theme = wp_get_theme(); // For use with some settings. Not necessary.

            $this->args = array(
                // TYPICAL -> Change these values as you need/desire
                'opt_name'           => 'g5plus_wolverine_options',
                // This is where your data is stored in the database and also becomes your global variable name.
                'display_name'       => $theme->get( 'Name' ),
                // Name that appears at the top of your panel
                'display_version'    => $theme->get( 'Version' ),
                // Version that appears at the top of your panel
                'menu_type'          => 'menu',
                //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
                'allow_sub_menu'     => true,
                // Show the sections below the admin menu item or not
                'menu_title'         => __( 'Theme Options', 'g5plus-wolverine' ),
                'page_title'         => __( 'Theme Options', 'g5plus-wolverine' ),
                // You will need to generate a Google API key to use this feature.
                // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
                'google_api_key'     => '',
                // Must be defined to add google fonts to the typography module

                'async_typography'   => false,
                // Use a asynchronous font on the front end or font string
                'admin_bar'          => true,
                // Show the panel pages on the admin bar
                'global_variable'    => '',
                // Set a different name for your global variable other than the opt_name
                'dev_mode'           => false,
                // Show the time the page took to load, etc
                'customizer'         => true,
                // Enable basic customizer support

                // OPTIONAL -> Give you extra features
                'page_priority'      => null,
                // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
                'page_parent'        => 'themes.php',
                // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_theme_page#Parameters
                'page_permissions'   => 'manage_options',
                // Permissions needed to access the options panel.
                'menu_icon'          => '',
                // Specify a custom URL to an icon
                'last_tab'           => '',
                // Force your panel to always open to a specific tab (by id)
                'page_icon'          => 'icon-themes',
                // Icon displayed in the admin panel next to your menu_title
                'page_slug'          => '_options',
                // Page slug used to denote the panel
                'save_defaults'      => true,
                // On load save the defaults to DB before user clicks save or not
                'default_show'       => false,
                // If true, shows the default value next to each field that is not the default value.
                'default_mark'       => '',
                // What to print by the field's title if the value shown is default. Suggested: *
                'show_import_export' => true,
                // Shows the Import/Export panel when not used as a field.

                // CAREFUL -> These options are for advanced use only
                'transient_time'     => 60 * MINUTE_IN_SECONDS,
                'output'             => true,
                // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
                'output_tag'         => true,
                // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
                // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

                // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
                'database'           => '',
                // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
                'system_info'        => false,
                // REMOVE

                // HINTS
                'hints'              => array(
                    'icon'          => 'icon-question-sign',
                    'icon_position' => 'right',
                    'icon_color'    => 'lightgray',
                    'icon_size'     => 'normal',
                    'tip_style'     => array(
                        'color'   => 'light',
                        'shadow'  => true,
                        'rounded' => false,
                        'style'   => '',
                    ),
                    'tip_position'  => array(
                        'my' => 'top left',
                        'at' => 'bottom right',
                    ),
                    'tip_effect'    => array(
                        'show' => array(
                            'effect'   => 'slide',
                            'duration' => '500',
                            'event'    => 'mouseover',
                        ),
                        'hide' => array(
                            'effect'   => 'slide',
                            'duration' => '500',
                            'event'    => 'click mouseleave',
                        ),
                    ),
                )
            );


            // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
            $this->args['share_icons'][] = array(
                'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
                'title' => 'Visit us on GitHub',
                'icon'  => 'el el-github'
                //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
            );
            $this->args['share_icons'][] = array(
                'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
                'title' => 'Like us on Facebook',
                'icon'  => 'el el-facebook'
            );
            $this->args['share_icons'][] = array(
                'url'   => 'http://twitter.com/reduxframework',
                'title' => 'Follow us on Twitter',
                'icon'  => 'el el-twitter'
            );
            $this->args['share_icons'][] = array(
                'url'   => 'http://www.linkedin.com/company/redux-framework',
                'title' => 'Find us on LinkedIn',
                'icon'  => 'el el-linkedin'
            );

            // Panel Intro text -> before the form
            if ( ! isset( $this->args['global_variable'] ) || $this->args['global_variable'] !== false ) {
                if ( ! empty( $this->args['global_variable'] ) ) {
                    $v = $this->args['global_variable'];
                } else {
                    $v = str_replace( '-', '_', $this->args['opt_name'] );
                }
                $this->args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'g5plus-wolverine' ), $v );
            } else {
                $this->args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'g5plus-wolverine' );
            }

            // Add content after the form.
            $this->args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'g5plus-wolverine' );
        }

    }

    global $reduxConfig;
    $reduxConfig = new Redux_Framework_options_config();
}