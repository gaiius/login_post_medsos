<?php
/*!
* HybridAuth
* http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
* (c) 2009-2012, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
*/

// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------
$config =array(
		"base_url" => "http://educatecode.com/acom/hybridauth/index.php", 
		"providers" => array ( 

			"Google" => array ( 
				"enabled" => true,
				"keys"    => array ( "id" => "XXXXXXXXXXXX", "secret" => "XXXXXXXX" ), 
			),

			"Facebook" => array ( 
				"enabled" => true,
				"keys"    => array ("id" =>"201281886919756","secret" =>"b7d7dd0de5ae20aeeb9e3528b620a7f3"), 
			),

			"Twitter" => array ( 
				"enabled" => true,
				"keys"    => array ("key" =>"lKxujnrColYge3h6k3oLoRCg2","secret" =>"zLXF73aBxbPuXel80gmjlYxg90bhPVgnUt4nb2JWEHRpdCt9oz") 
			),
		),
		// if you want to enable logging, set 'debug_mode' to true  then provide a writable file by the web server on "debug_file"
		"debug_mode" => false,
		"debug_file" => "",
	);
