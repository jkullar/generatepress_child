<?php
/**
 * Generate child theme functions and definitions
 *
 * @package Generate
 */
 

require_once get_stylesheet_directory() . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'wpwd_register_required_plugins' );

function wpwd_register_required_plugins() {

	$plugins = array(

		// This is an example of how to include a plugin bundled with a theme.
		array(
			'name'               => 'WPWD Base Master', // The plugin name.
			'slug'               => 'wpwd-base-master', // The plugin slug (typically the folder name).
			//'source'             => get_stylesheet_directory() . '/lib/plugins/tgm-example-plugin.zip', // The plugin source.
			'source'       => 'https://github.com/jkullar/wpwd-base/archive/master.zip', // The plugin source.
			
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		)

		
	);

	tgmpa( $plugins, $config );
}
