<?php 

	/**
	 * Performance
	 * Meta plugin, activates all other plugins that improve performance
	 * 
	 * Usage: See the individual plugins' descriptions
	 * Example: -
	 * Status: Stable
	 * Version: 1.0
	 * 
	 * 
	 * @param array &$css The style lines (unused)
	 * @return void
	 */
	function performance(&$css){
		global $plugin_list;
		$performanceplugins = array(
			'datauri',
			'minifier'
		);
		$plugin_list = array_merge($plugin_list, $performanceplugins);
	}


	/**
	 * Register the plugin
	 */
	$cssp->register_plugin('before_parse', 1000, 'performance');


?>