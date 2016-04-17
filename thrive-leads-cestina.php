<?php
/*
Plugin Name: Thrive Leads čeština
Plugin URI: https://www.danielnytra.cz/thrive-leads-cestina
Description: Přeloží plugin Thrive Leads do češtiny

Version: 0.1
Requires at least: 3.0

Author: Daniel Nytra
Author URI: https://www.danielnytra.cz/

Text Domain: thrive-leads-cestina
Domain Path: /languages/

License: GPL

GitHub URI: https://github.com/danielnytra/thrive-leads-cestina
*/


class Thrive_Leads_cestina {

    public function __construct($file)
    {
    	$this->language = get_locale();
		$this->file = $file;
		
		if ($this->language == 'cs_CZ') {
			$rel_path = dirname( plugin_basename( $this->file ) ) . '/languages/';
			load_plugin_textdomain( 'thrive-leads', false, $rel_path );
		}
    }
	
	
}
$my_plugin = new Thrive_Leads_cestina(__FILE__);


require_once dirname( __FILE__ ) . '/widget.php';