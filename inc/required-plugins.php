<?php

add_action( 'tgmpa_register', 'ingenima_register_required_plugins' );

function ingenima_register_required_plugins() {

	$plugins = array(

		// recognize the plugin as being installed.
        array(
			'name'               => 'ACF Pro',
			'slug'               => 'advanced-custom-fields-pro',
			'source'             => get_template_directory()  . '/plugins/advanced-custom-fields-pro.zip',
			'required'           => true,
			'version'            => '',
			'force_activation'   => false,
			'force_deactivation' => false,
			'external_url'       => '',
		),
        
        array(
			'name'               => 'Bootstrap Shortcodes',
            'slug'               => 'column-extension',
			'source'             => get_template_directory()  . '/plugins/column-extension.zip',
			'required'           => true,
			'version'            => '',
			'force_activation'   => false,
			'force_deactivation' => false,
			'external_url'       => '',
		),
        
		array(
			'name'        => 'WordPress SEO by Yoast',
			'slug'        => 'wordpress-seo',
			'required' => true,
		),
        
        array(
			'name'        => 'WordPress SEO by Yoast',
			'slug'        => 'wordpress-seo',
			'required' => true,
		),
        
        array(
			'name'        => 'ACF Theme Code for Advanced Custom Fields',
			'slug'        => 'acf-theme-code',
			'required' => true,
		),
        
        array(
			'name'        => 'Autoptimize',
			'slug'        => 'autoptimize',
			'required' => true,
		),
        
        array(
			'name'        => 'Head, Footer and Post Injections',
			'slug'        => 'header-footer',
			'required' => true,
		),
        
        array(
			'name'        => 'Google XML Sitemaps',
			'slug'        => 'google-sitemap-generator',
			'required' => true,
		),
        
        array(
			'name'        => 'Display Posts Shortcode',
			'slug'        => 'display-posts-shortcode',
			'required' => true,
		),
        
        array(
			'name'        => 'Contact Form Submissions',
			'slug'        => 'contact-form-submissions',
			'required' => true,
		),
        
        array(
			'name'     => 'Contact Form 7',
			'slug'     => 'contact-form-7',
			'required' => true,
		),

	);

	$config = array(
		'id'           => 'ingenima',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

	);

	tgmpa( $plugins, $config );
}
