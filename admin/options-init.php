<?php

    /**
     * For full documentation, please visit: http://docs.reduxframework.com/
     * For a more extensive sample-config file, you may look at:
     * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "xpanel";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'opt_name' => 'xpanel',
        'use_cdn' => TRUE,
        'display_name' => 'xPanel - UrduNews',
        'display_version' => FALSE,
        'page_slug' => 'xpanel',
        'page_title' => 'xPanel Theme Settings',
        'update_notice' => FALSE,
        'intro_text' => '<p>You can customize your theme with different options with this panel</p>’',
        'footer_text' => '<p>Powered by <a href="http://www.stylothemes.com">StyloThemes</a></p>',
        'admin_bar' => TRUE,
        'menu_type' => 'submenu',
        'menu_title' => 'Theme Settings',
        'allow_sub_menu' => TRUE,
        'page_parent' => 'themes.php',
        'page_parent_post_type' => 'your_post_type',
        'customizer' => TRUE,
        'default_show' => TRUE,
        'default_mark' => '*',
        'google_api_key' => 'AIzaSyAZncm6O4E0LFyFh3Fv0MUDkJMSbJJkLIk',
        'class' => 'xpanel',
        'hints' => array(
            'icon' => 'el el-comment',
            'icon_position' => 'right',
            'icon_size' => 'normal',
            'tip_style' => array(
                'color' => 'light',
            ),
            'tip_position' => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect' => array(
                'show' => array(
                    'duration' => '500',
                    'event' => 'mouseover',
                ),
                'hide' => array(
                    'duration' => '500',
                    'event' => 'mouseleave unfocus',
                ),
            ),
        ),
        'output' => TRUE,
        'output_tag' => TRUE,
        'settings_api' => TRUE,
        'cdn_check_time' => '1440',
        'compiler' => TRUE,
        'page_permissions' => 'manage_options',
        'save_defaults' => TRUE,
        'show_import_export' => TRUE,
        'database' => 'options',
        'transient_time' => '3600',
        'network_sites' => TRUE,
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/stylotheme',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/StyloThemes',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.linkedin.com/company/stylothemes',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Need Support ?', 'admin_folder' ),
            'content' => __( '<h3>Having trouble setting up the theme ? Go ahead and submit a support ticket via <a href="http://stylothemes.com/shop/support" target="_blank">http://stylothemes.com/shop/support</a></h3>', 'admin_folder' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'More Themes', 'admin_folder' ),
            'content' => __( '<p>Browse collection of our more themes <a href="http://stylothemes.com/shop/support" target="_blank">http://stylothemes.com/shop</a></p>', 'admin_folder' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p><a href="http://stylothemes.com/shop" target="_blank"><img src="http://stylothemes.com/shop/wp-content/themes/styloshop/images/logo-footer.png" width="150" height="80"></a></p>', 'admin_folder' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    Redux::setSection( $opt_name, array(
        'title' => __( 'General Settings', 'xpanel-framework' ),
        'id'    => 'general',
        'desc'  => __( 'General Theme Settings.', 'xpanel-framework' ),
        'icon'  => 'el el-home'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Logo & Favicon', 'xpanel-framework' ),
        'desc'       => __( 'Upload Your Website Logo & Favicon', 'xpanel-framework' ),
        'id'         => 'logo-favicon',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'logo',
                'type'     => 'media', 
                'url'      => true,
                'title'    => __('Logo URL', 'xpanel-framework'),
                'desc'     => __('Upload Your Website Logo.', 'xpanel-framework'),
                'subtitle' => __('Select Valid Image File ie: .png, .jpg, .gif', 'xpanel-framework'),
                'default'  => array(
                    'url'=>''.get_template_directory_uri().'/images/logo.png'
                ),
            ),

            array(
                'id'       => 'favicon',
                'type'     => 'media', 
                'url'      => true,
                'title'    => __('Favicon URL', 'xpanel-framework'),
                'desc'     => __('Upload Favicon Image for your website.', 'xpanel-framework'),
                'subtitle' => __('Select Valid Favicon File ie: .ico, .png', 'xpanel-framework'),
                'default'  => array(
                    'url'=>''.get_template_directory_uri().'/favicon.png'
                ),
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Body Backgrounds', 'xpanel-framework' ),
        'desc'       => __( 'Manage Background colors and images for main website body', 'xpanel-framework' ),
        'id'         => 'background-settings',
        'subsection' => true,
        'output'     => array('body'),
        'fields'     => array(
            
            array(
                'id'       => 'body-background',
                'type'     => 'background',
                'title'    => __('Body Background', 'xpanel-framework'),
                'subtitle' => __('', 'xpanel-framework'),
                'desc'     => __('Body background with image, color, etc.', 'xpanel-framework'),
                'default'  => array(
                    'background-color' => '#fff',
                    'background-image' => ''.get_template_directory_uri('/').'/images/bg.png'
                ),
                'output'   => 'body'
            )
        )
    ) );
    //End of Body Backgrounds Settings
    
    
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Footer Settings', 'xpanel-framework' ),
        'desc'       => __( 'Manage Footer copyright text', 'xpanel-framework' ),
        'id'         => 'footer-text-settings',
        'subsection' => true,
        'output'     => '',
        'fields'     => array(
            
            array(
                'id'=>'footer-copyright',
                'type' => 'textarea',
                'title' => __('Footer Copyright', 'xpanel-framework'), 
                'subtitle' => __('', 'xpanel-framework'),
                'desc' => __('Enter your website copyright text for footer. some HTML is allowed such as, <p>, <a>, <br>, <em>, <strong>', 'xpanel-framework'),
                'validate' => 'html_custom',
                'default' => 'Copyright © 2015, UrduNews all rights reserved. Theme Designed by <a href="http://www.stylothemes.com">StyloThemes</a>',
                'allowed_html' => array(
                    'a' => array(
                        'href' => array(),
                        'title' => array()
                    ),
                    'p' => array(
                        'class' => array(),
                        'id'    => array(),
                        'style' => array(),
                    ),
                    'br' => array(),
                    'em' => array(),
                    'strong' => array()
                )
            ),
            array(
                'id'=>'footer-about-text',
                'type' => 'text',
                'title' => __('Footer About', 'xpanel-framework'), 
                'subtitle' => __('', 'xpanel-framework'),
                'desc' => __('Enter your short about us text for footer. some HTML is allowed such as, <p>, <a>, <br>, <em>, <strong>', 'xpanel-framework'),
                'default' => 'اردو نیوز',
            ),//Footer copyright area

            
        )
    ) );
    //End of Header Backgrounds Settings

//    Redux::setSection( $opt_name, array(
//        'title' => __( 'Header', 'xpanel-framework' ),
//        'id'    => 'header-settings',
//        'desc'  => __( 'Customize your webite header.', 'xpanel-framework' ),
//        'icon'  => 'el el-cog'
//    ) );

    //End of Header Settings
    Redux::setSection( $opt_name, array(
        'title' => __( 'Homepage', 'xpanel-framework' ),
        'id'    => 'homepage',
        'desc'  => __( 'Manage Homepage blocks and content areas.', 'xpanel-framework' ),
        'icon'  => 'el el-cogs'
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Latest Post Blocks Limit', 'xpanel-framework' ),
        'desc'       => __( 'Select how many Post Blocks you want to display on Homepage Latests Block', 'xpanel-framework' ),
        'id'         => 'homepage-latest',
        'subsection' => true,
        'fields'     => array(

            array(
                'id'       => 'homepage-latest-block-count',
                'type'     => 'select',
                'title'    => __('Total Number of posts', 'xpanel-framework'), 
                'subtitle' => __('', 'xpanel-framework'),
                'desc'     => __('Select how many post blocks you want to dispaly on Homepage', 'xpanel-framework'),
                'options'  => array(
                           '1' => '1',
                           '4' => '4',
                           '7' => '7',
                           '10' => '10'
                ),
                'default'  => '4',
            ),
        )
    ) ); // Latest Post Blocks  
	Redux::setSection( $opt_name, array(
        'title'      => __( 'Seprater Blocks', 'xpanel-framework' ),
        'desc'       => __( 'Select how many Post Blocks you want to display on Homepage Latests Block', 'xpanel-framework' ),
        'id'         => 'homepage-seprater',
        'subsection' => true,
        'fields'     => array(
			 array(
                'id'       => 'homepage-seprater-cat',
                'type'     => 'select',
                'title'    => __('Select category ', 'xpanel-framework'), 
                'subtitle' => __('', 'xpanel-framework'),
                'desc'     => __('Select Category post that for seprater block below latest Block dispaly on Homepage', 'xpanel-framework'),
				'data'     => 'categories',
                'default'  => '0',
            ),
			
        )
    ) ); // Seprater Post Blocks 
	Redux::setSection( $opt_name, array(
        'title'      => __( 'Feature Block', 'xpanel-framework' ),
        'desc'       => __( 'Select category', 'xpanel-framework' ),
        'id'         => 'homepage-feature',
        'subsection' => true,
        'fields'     => array(
			array(
                'id'       => 'homepage-feature-head',
                'type'     => 'text',
                'title'    => __('Enter Category Name ', 'xpanel-framework'), 
                'subtitle' => __('', 'xpanel-framework'),
                'desc'     => __('', 'xpanel-framework'),
                'default'  => 'خصوصی ضمیمہ',
            ),
			 array(
                'id'       => 'homepage-feature-cat',
                'type'     => 'select',
                'title'    => __('Select category ', 'xpanel-framework'), 
                'subtitle' => __('', 'xpanel-framework'),
                'desc'     => __('Select Category post that for seprater block below latest Block dispaly on Homepage', 'xpanel-framework'),
				'data'     => 'categories',
                'default'  => '0',
            ),
			 array(
                'id'       => 'homepage-feature-limit',
                'type'     => 'select',
                'title'    => __('Total Number of posts', 'xpanel-framework'), 
                'subtitle' => __('', 'xpanel-framework'),
                'desc'     => __('Select how many post blocks you want to dispaly on Homepage', 'xpanel-framework'),
                'options'  => array(
                           '1' => '1',
                           '2' => '2',
                           '3' => '3',
                           '4' => '4',
                           '5' => '5'
                ),
                'default'  => '1',
            ),
        )
    ) ); // Seprater Post Blocks 

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Post Block 1 Category', 'xpanel-framework' ),
        'desc'       => __( 'Select categories for Homepage Post Blocks taht will show belo the FEATURE Block', 'xpanel-framework' ),
        'id'         => 'homepage-blocks-cats',
        'subsection' => true,
        'fields'     => array(

            array(
                'id'       => 'homepage-cat1-head',
                'type'     => 'text',
                'title'    => __('Enter Category Name ', 'xpanel-framework'), 
                'subtitle' => __('', 'xpanel-framework'),
                'desc'     => __('', 'xpanel-framework'),
                'default'  => 'تصاویر',
            ),
			 array(
                'id'       => 'homepage-cat1-cat',
                'type'     => 'select',
                'title'    => __('Select category ', 'xpanel-framework'), 
                'subtitle' => __('', 'xpanel-framework'),
                'desc'     => __('Select Category post that for seprater block below latest Block dispaly on Homepage', 'xpanel-framework'),
				'data'     => 'categories',
                'default'  => '0',
            ),
			 array(
                'id'       => 'homepage-cat1-limit',
                'type'     => 'select',
                'title'    => __('Total Number of posts', 'xpanel-framework'), 
                'subtitle' => __('', 'xpanel-framework'),
                'desc'     => __('Select how many post blocks you want to dispaly on Homepage', 'xpanel-framework'),
                'options'  => array(
                           '2' => '2',
                           '4' => '4',
                           '6' => '6',
                           '8' => '8'
                ),
                'default'  => '2',
            ),
            
        )
    ) ); // Post Block Categories
	 Redux::setSection( $opt_name, array(
        'title'      => __( 'Post Block 2 Category', 'xpanel-framework' ),
        'desc'       => __( 'Select categories for Homepage Post Blocks taht will show belo the Post Block 1 Category Block', 'xpanel-framework' ),
        'id'         => 'homepage-blocks-cats1',
        'subsection' => true,
        'fields'     => array(

            array(
                'id'       => 'homepage-cat2-head',
                'type'     => 'text',
                'title'    => __('Enter Category Name ', 'xpanel-framework'), 
                'subtitle' => __('', 'xpanel-framework'),
                'desc'     => __('', 'xpanel-framework'),
                'default'  => 'پاکستان',
            ),
			 array(
                'id'       => 'homepage-cat2-cat',
                'type'     => 'select',
                'title'    => __('Select category ', 'xpanel-framework'), 
                'subtitle' => __('', 'xpanel-framework'),
                'desc'     => __('Select Category post that for seprater block below latest Block dispaly on Homepage', 'xpanel-framework'),
				'data'     => 'categories',
                'default'  => '0',
            ),
			 array(
                'id'       => 'homepage-cat2-limit',
                'type'     => 'select',
                'title'    => __('Total Number of posts', 'xpanel-framework'), 
                'subtitle' => __('', 'xpanel-framework'),
                'desc'     => __('Select how many post blocks you want to dispaly on Homepage', 'xpanel-framework'),
                'options'  => array(
                           '5' => '5',
                           '10' => '10',
                           '12' => '12',
                           '15' => '15'
                ),
                'default'  => '5',
            ),
            
        )
    ) ); // Post Block Categories
	 Redux::setSection( $opt_name, array(
        'title'      => __( 'Post Block 3 Category', 'xpanel-framework' ),
        'desc'       => __( 'Select categories for Homepage Post Blocks taht will show belo the Post Block 2 Category Block', 'xpanel-framework' ),
        'id'         => 'homepage-blocks-cats2',
        'subsection' => true,
        'fields'     => array(

            array(
                'id'       => 'homepage-cat3-head',
                'type'     => 'text',
                'title'    => __('Enter Category Name ', 'xpanel-framework'), 
                'subtitle' => __('', 'xpanel-framework'),
                'desc'     => __('', 'xpanel-framework'),
                'default'  => 'کھیل',
            ),
			 array(
                'id'       => 'homepage-cat3-cat',
                'type'     => 'select',
                'title'    => __('Select category ', 'xpanel-framework'), 
                'subtitle' => __('', 'xpanel-framework'),
                'desc'     => __('Select Category post that for seprater block below latest Block dispaly on Homepage', 'xpanel-framework'),
				'data'     => 'categories',
                'default'  => '0',
            ),
			 array(
                'id'       => 'homepage-cat3-limit',
                'type'     => 'select',
                'title'    => __('Total Number of posts', 'xpanel-framework'), 
                'subtitle' => __('', 'xpanel-framework'),
                'desc'     => __('Select how many post blocks you want to dispaly on Homepage', 'xpanel-framework'),
                'options'  => array(
                           '5' => '5',
                           '10' => '10',
                           '12' => '12',
                           '15' => '15'
                ),
                'default'  => '5',
            ),
            
        )
    ) ); // Post Block Categories 
	Redux::setSection( $opt_name, array(
        'title'      => __( 'Post Block 4 Category', 'xpanel-framework' ),
        'desc'       => __( 'Select categories for Homepage Post Blocks taht will show belo the Post Block 3 Category Block', 'xpanel-framework' ),
        'id'         => 'homepage-blocks-cats4',
        'subsection' => true,
        'fields'     => array(

            array(
                'id'       => 'homepage-cat4-head',
                'type'     => 'text',
                'title'    => __('Enter Category Name ', 'xpanel-framework'), 
                'subtitle' => __('', 'xpanel-framework'),
                'desc'     => __('', 'xpanel-framework'),
                'default'  => 'ملٹی میڈیا',
            ),
			 array(
                'id'       => 'homepage-cat4-cat',
                'type'     => 'select',
                'title'    => __('Select category ', 'xpanel-framework'), 
                'subtitle' => __('', 'xpanel-framework'),
                'desc'     => __('Select Category post that for seprater block below latest Block dispaly on Homepage', 'xpanel-framework'),
				'data'     => 'categories',
                'default'  => '0',
            ),
			 array(
                'id'       => 'homepage-cat4-limit',
                'type'     => 'select',
                'title'    => __('Total Number of posts', 'xpanel-framework'), 
                'subtitle' => __('', 'xpanel-framework'),
                'desc'     => __('Select how many post blocks you want to dispaly on Homepage', 'xpanel-framework'),
                'options'  => array(
                           '4' => '4',
                           '6' => '6',
                           '8' => '8',
                           '10' => '10'
                ),
                'default'  => '4',
            ),
            
        )
    ) ); // Post Block Categories
	Redux::setSection( $opt_name, array(
        'title'      => __( 'More News Block', 'xpanel-framework' ),
        'desc'       => __( 'Select categories for Homepage Post Blocks taht will show belo the Post Block 4 Category Block', 'xpanel-framework' ),
        'id'         => 'homepage-blocks-m-news',
        'subsection' => true,
        'fields'     => array(

            array(
                'id'       => 'homepage-more-news-head',
                'type'     => 'text',
                'title'    => __('Enter Category Name ', 'xpanel-framework'), 
                'subtitle' => __('', 'xpanel-framework'),
                'desc'     => __('', 'xpanel-framework'),
                'default'  => 'مزید خبریں',
            ),
			 array(
                'id'       => 'homepage-more-news-limit',
                'type'     => 'select',
                'title'    => __('Total Number of posts', 'xpanel-framework'), 
                'subtitle' => __('', 'xpanel-framework'),
                'desc'     => __('Select how many post blocks you want to dispaly on Homepage', 'xpanel-framework'),
                'options'  => array(
                           '6' => '6',
                           '8' => '8',
                           '10' => '10',
                           '12' => '12'
                ),
                'default'  => '6',
            ),
            
        )
    ) ); // MOre news Block Categories


    //End of Homepage Setings

    Redux::setSection( $opt_name, array(
        'title' => __( 'Post Settings', 'xpanel-framework' ),
        'id'    => 'post-settings',
        'desc'  => __( 'Manage your posts layout and settings.', 'xpanel-framework' ),
        'icon'  => 'el el-tasks'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Post Meta', 'xpanel-framework' ),
        'desc'       => __( 'Post Meta Information Settings', 'xpanel-framework' ),
        'id'         => 'post-meta-settings',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'show-author',
                'type'     => 'switch', 
                'title'    => __('Post Author', 'xpanel-framework'),
                'desc'     => __('Show Post Author Under Post Title?', 'xpanel-framework'),
                'default'  => true,
            ),
            array(
                'id'       => 'show-views',
                'type'     => 'switch', 
                'title'    => __('Post Views', 'xpanel-framework'),
                'desc'     => __('Show or Hide Post Views', 'xpanel-framework'),
                'default'  => true,
            ),
            array(
                'id'       => 'show-comment-count',
                'type'     => 'switch', 
                'title'    => __('Post Comments', 'xpanel-framework'),
                'desc'     => __('Show Post Comments Count Under Post Title?', 'xpanel-framework'),
                'default'  => true,
            ),
            array(
                'id'       => 'show-posted-date',
                'type'     => 'switch', 
                'title'    => __('Posted Date', 'xpanel-framework'),
                'desc'     => __('Show Post Publish Date in Single Post View?', 'xpanel-framework'),
                'default'  => true,
            ),
            array(
                'id'       => 'show-sharing',
                'type'     => 'switch', 
                'title'    => __('Post Sharing', 'xpanel-framework'),
                'desc'     => __('Dislay Pist Sharing Button', 'xpanel-framework'),
                'default'  => true,
            ),

        )
    ) );//Post Meta

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Post Layout', 'xpanel-framework' ),
        'desc'       => __( 'Customize your single post view layout', 'xpanel-framework' ),
        'id'         => 'post-layout-settings',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'show-post-featured',
                'type'     => 'switch', 
                'title'    => __('Featured Image', 'xpanel-framework'),
                'desc'     => __('Show/Hide Post Featured Image', 'xpanel-framework'),
                'default'  => true,
            ),
            array(
                'id'       => 'show-post-sidebar',
                'type'     => 'switch', 
                'title'    => __('Mini Sidebar', 'xpanel-framework'),
                'desc'     => __('Show/Hide Mini Sidebar in Single Post View', 'xpanel-framework'),
                'default'  => true,
            ),
            array(
                'id'       => 'show-zoom',
                'type'     => 'switch', 
                'title'    => __('ZoomIn/ZoomOut', 'xpanel-framework'),
                'desc'     => __('Enable or Disable Font Size Increase/Decrease Option.', 'xpanel-framework'),
                'default'  => true,
            ),
            array(
                'id'       => 'show-related-posts',
                'type'     => 'switch', 
                'title'    => __('Show Related Posts', 'xpanel-framework'),
                'desc'     => __('Show/Hide Related Posts Block after post content.', 'xpanel-framework'),
                'default'  => true,
            ),
            array(
                'id'       => 'related-posts-limit',
                'type'     => 'select',
                'title'    => __('Related Posts Limit', 'xpanel-framework'), 
                'subtitle' => __('', 'xpanel-framework'),
                'desc'     => __('Select how many posts you want to display in related posts block.', 'xpanel-framework'),
                'options'  => array(
                           '3' => '3',
                           '6' => '6',
                           '9' => '9'
                ),
                'default'  => '6',
            )

        )
    ) );//Post Layout

    //End of Post Settings
    Redux::setSection( $opt_name, array(
        'title' => __( 'Typography', 'xpanel-framework' ),
        'id'    => 'typography',
        'desc'  => __( 'Manage Font Family, Style, Size & Color.', 'xpanel-framework' ),
        'icon'  => 'el el-font'
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Headings', 'xpanel-framework' ),
        'desc'       => __( 'Select Font Styling for Headings', 'xpanel-framework' ),
        'id'         => 'font-headings',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'          => 'font-h1',
                'type'        => 'typography', 
                'title'       => __('H1', 'xpanel-framework'),
                'google'      => true,
                'font-backup' => true,
                'output'      => array('h1'),
                'units'       =>'px',
                'subtitle'    => __('Heading 1 (H1 tag)', 'xpanel-framework'),
                'default'     => array(
                    'color'       => '#222', 
                    'font-style'  => '400', 
                    'font-family' => 'Lateef', 
                    'google'      => false,
                    'font-size'   => '48px',
                    'line-height'   => '48px'
                ),
            ),
            array(
                'id'          => 'font-h2',
                'type'        => 'typography', 
                'title'       => __('H2', 'xpanel-framework'),
                'google'      => true, 
                'font-backup' => true,
                'output'      => array('h2'),
                'units'       =>'px',
                'subtitle'    => __('Heading 2 (H2 tag)', 'xpanel-framework'),
                'default'     => array(
                    'color'       => '#222', 
                    'font-style'  => '400', 
                    'font-family' => 'Lateef', 
                    'google'      => false,
                    'font-size' => '44px',
                    'line-height' => '44px'
                ),
            ),
            array(
                'id'          => 'font-h3',
                'type'        => 'typography', 
                'title'       => __('H3', 'xpanel-framework'),
                'google'      => true, 
                'font-backup' => true,
                'output'      => array('h3'),
                'units'       =>'px',
                'subtitle'    => __('Heading 3 (H3 tag)', 'xpanel-framework'),
                'default'     => array(
                    'color'       => '#222', 
                    'font-style'  => '400', 
                    'font-family' => 'Lateef', 
                    'google'      => false,
                    'font-size'   => '36px',
                    'line-height' => '36px'
                ),
            ),
            array(
                'id'          => 'font-h4',
                'type'        => 'typography', 
                'title'       => __('H4', 'xpanel-framework'),
                'google'      => true,
                'font-backup' => true,
                'output'      => array('h4'),
                'units'       =>'px',
                'subtitle'    => __('Heading 4 (H4 tag)', 'xpanel-framework'),
                'default'     => array(
                    'color'       => '#222', 
                    'font-style'  => '400', 
                    'font-family' => 'Lateef', 
                    'google'      => false,
                    'font-size'   => '28px',
                    'line-height' => '28px'
                ),
            ),
            array(
                'id'          => 'font-h5',
                'type'        => 'typography', 
                'title'       => __('H5', 'xpanel-framework'),
                'google'      => true, 
                'font-backup' => true,
                'output'      => array('h5'),
                'units'       =>'px',
                'subtitle'    => __('Heading 5 (H5 tag)', 'xpanel-framework'),
                'default'     => array(
                    'color'       => '#222', 
                    'font-style'  => '400', 
                    'font-family' => 'Lateef', 
                    'google'      => false,
                    'font-size'   => '22px',
                    'line-height' => '22px'
                ),
            ),
            array(
                'id'          => 'font-h6',
                'type'        => 'typography', 
                'title'       => __('H6', 'xpanel-framework'),
                'google'      => true, 
                'font-backup' => true,
                'output'      => array('h6'),
                'units'       => 'px',
                'subtitle'    => __('Heading 6 (H6 tag)', 'xpanel-framework'),
                'default'     => array(
                    'color'       => '#222', 
                    'font-style'  => '400', 
                    'font-family' => 'Lateef', 
                    'google'      => false,
                    'font-size'   => '18px',
                    'line-height' => '18px'
                ),
            ),
            
        )
    ) );
    //End of Headings

    
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Paragraphs', 'xpanel-framework' ),
        'desc'       => __( 'Select Font Styling for Paragraphs', 'xpanel-framework' ),
        'id'         => 'font-paragraphs',
        'subsection' => true,
        'google'     => true,
        'fields'     => array(
            array(
                'id'          => 'font-p',
                'type'        => 'typography', 
                'title'       => __('<p>', 'xpanel-framework'),
                'google'      => true, 
                'fonts'       => array(
                      'nafeesnastaleeq' => 'Nafees Nastaleeq',
                ), 
                'font-backup' => true,
                'output'      => array('p'),
                'units'       =>'px',
                'subtitle'    => __('Paragraph Font Settings', 'xpanel-framework'),
                'default'     => array(
                    'color'       => '#555', 
                    'font-style'  => '400', 
                    'font-family' => 'nafeesnastaleeq', 
                    'google'      => false,
                    'font-size'   => '18px',
                    'line-height' => '36px'
                ),
            ),
            
        )
    ) );
    //End of Paragraphs
    Redux::setSection( $opt_name, array(
        'title' => __( 'Social Media', 'xpanel-framework' ),
        'id'    => 'social',
        'desc'  => __( 'Social Media Icons & Sharing Settings.', 'xpanel-framework' ),
        'icon'  => 'el el-share'
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'URL Settings', 'xpanel-framework' ),
        'desc'       => __( 'Enter Your Social Media Profile Links. These linked icons will be displayed in footer.', 'xpanel-framework' ),
        'id'         => 'social-urls',
        'subsection' => true,

        'fields'     => array(
            array(
                'id'       => 'fb-url',
                'type'     => 'text',
                'title'    => __('Facebook URL', 'xpanel-framework'),
                'subtitle' => __('Enter your facebook page or profile URL here.', 'xpanel-framework'),
                'desc'     => __('', 'xpanel-framework'),
                'validate' => 'url',
                'msg'      => 'Please enter a valid URL',
                'default'  => 'http://www.facebook.com/xitclubsolutions'
            ),
            array(
                'id'       => 'twitter-url',
                'type'     => 'text',
                'title'    => __('Twitter URL', 'xpanel-framework'),
                'subtitle' => __('Enter your twitter profile URL here.', 'xpanel-framework'),
                'desc'     => __('', 'xpanel-framework'),
                'validate' => 'url',
                'msg'      => 'Please enter a valid URL',
                'default'  => 'http://www.twitter.com/xitclub'
            ),
            array(
                'id'       => 'gplus-url',
                'type'     => 'text',
                'title'    => __('Google+ URL', 'xpanel-framework'),
                'subtitle' => __('Enter your Google+ page or profile URL here.', 'xpanel-framework'),
                'desc'     => __('', 'xpanel-framework'),
                'validate' => 'url',
                'msg'      => 'Please enter a valid URL',
                'default'  => 'http://plus.google.com/+Xitclubpage'
            ),
            array(
                'id'       => 'pinterest-url',
                'type'     => 'text',
                'title'    => __('Pinterest URL', 'xpanel-framework'),
                'subtitle' => __('Enter your Pinterest profile URL here.', 'xpanel-framework'),
                'desc'     => __('', 'xpanel-framework'),
                'validate' => 'url',
                'msg'      => 'Please enter a valid URL',
                'default'  => 'http://www.pinterest.com/xitclub'
            ),
            array(
                'id'       => 'linkedin-url',
                'type'     => 'text',
                'title'    => __('LinkedIn URL', 'xpanel-framework'),
                'subtitle' => __('Enter your LinkedIn profile or Company URL here.', 'xpanel-framework'),
                'desc'     => __('', 'xpanel-framework'),
                'validate' => 'url',
                'msg'      => 'Please enter a valid URL',
                'default'  => 'http://www.linkedin.com/company/xitclub-solutions'
            ),
            array(
                'id'       => 'reddit-url',
                'type'     => 'text',
                'title'    => __('Reddit URL', 'xpanel-framework'),
                'subtitle' => __('Enter your Reddit profile or sub-reddit URL here.', 'xpanel-framework'),
                'desc'     => __('', 'xpanel-framework'),
                'validate' => 'url',
                'msg'      => 'Please enter a valid URL',
                'default'  => 'http://www.reddit.com/xitclub'
            ),
            array(
                'id'       => 'stumble-url',
                'type'     => 'text',
                'title'    => __('StumbleUpon URL', 'xpanel-framework'),
                'subtitle' => __('Enter your StumbleUpon profile URL here.', 'xpanel-framework'),
                'desc'     => __('', 'xpanel-framework'),
                'validate' => 'url',
                'msg'      => 'Please enter a valid URL',
                'default'  => 'http://www.stumbleupon.com/xitclub'
            ),
            array(
                'id'       => 'youtube-url',
                'type'     => 'text',
                'title'    => __('YouTube URL', 'xpanel-framework'),
                'subtitle' => __('Enter your YouTube Channel or profile URL here.', 'xpanel-framework'),
                'desc'     => __('', 'xpanel-framework'),
                'validate' => 'url',
                'msg'      => 'Please enter a valid URL',
                'default'  => 'http://www.youtube.com/user/xitclub'
            ),
            array(
                'id'       => 'instagram-url',
                'type'     => 'text',
                'title'    => __('Instagram URL', 'xpanel-framework'),
                'subtitle' => __('Enter your Istagram profile URL here.', 'xpanel-framework'),
                'desc'     => __('', 'xpanel-framework'),
                'validate' => 'url',
                'msg'      => 'Please enter a valid URL',
                'default'  => 'http://www.youtube.com/user/xitclub'
            ),
        )
    ) );
    //End of Social Media URL Settings
    
    /*
     * <--- END SECTIONS
     */
