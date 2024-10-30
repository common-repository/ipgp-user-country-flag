<?php
/*
Plugin Name: Ipgp User Country Flag
Plugin URI: http://www.ipgp.net
Description: Show user's country flag.
Author: Lucian Apostol
Version: 1.2
Author URI: http://www.ipgp.net
*/


function ipgp_flag() 
{

$ip =  $_SERVER['REMOTE_ADDR'];

	$content = '';
       	$api_key = get_option('acces_key');
       	$api_key = 'wordpressplugin';
        	$file = "http://www.ipgp.net/api/json/".$ip."/".$api_key."";
        	//echo $file;
        	$json = file_get_contents($file);
        	$json = substr($json, 9);
        	$json = substr($json, 0, -2);
        	$api = json_decode($json);
        	$api = $api->Details;
        	$xml = $api;

// print_r($xml);

if($xml->flag && $xml->code) { 
  $content .= '
  <p><a href="//www.ipgp.net" rel="nofollow"><img style="width: 18px" src="'. $xml->flag .'" /></a></p>

  ';
	}
	
	return $content;
 }

function ipgpCountryWidget($args) {

	 extract($args);
	 echo $before_widget;
	 echo ipgp_flag();
	 echo $after_widget;
}

function ip_country_shortcode( $atts ) {
	
	return ipgp_flag();

}





function ipgpInit()
{
  wp_register_sidebar_widget('ipgp_flag_widget_1', __('Ipgp Country Flag'), 'ipgpCountryWidget');  
  add_shortcode( 'ipflag', 'ip_country_shortcode' );
}


add_action("plugins_loaded", "ipgpInit");




function ipgpucf_menu() {

			add_options_page( __('IPGP User Country Flag', 'ipgp-user-country-flag'), __('IPGP User Country Flag', 'ipgp-user-country-flag'), 'activate_plugins', 'ipgpucf-adminpage', 'ipgpucf_adminpage' );

}

add_action('admin_menu', 'ipgpucf_menu');



function ipgpucf_adminpage() {
	
	?>
	
		<div class="wrap">  
        	<div class="icon32" id="icon-options-general"></div>  
        	<h2>IPGP User Country Flag</h2>
        
        	<br /><br />
        	This plugin will determines the country location for each visitor and will display his country flag. 
        	
        	To display the flag using a shortcode, copy this shortcode: 
        	<br /><input type="text" value="[ipflag]" />
				
			<br /><br />
			To display the flag within a widget on your sidebar, go to Appearance -> Widgets. There, locate the "IPGP User Country Flag" widget and drop it to your desired sidebar.        
        
        
        
        
        
		</div>
	
	
	
	<?php
}
?>