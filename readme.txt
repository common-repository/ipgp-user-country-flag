=== Plugin Name ===
Contributors: Lucian Apostol
Donate link: http://www.ipgp.net
Tags: widget, ip address lookup, flag, user country flag, country flag, user ip address, ip address flag, shortcode, template tag, sidebar
Requires at least: 2.0.2
Tested up to: 6.1.1
Stable tag: 1.2

This plugin will allow you to show a flag of your visitors country. When a user goes to your website he will see a flag of its own country, based on the IP address lookup API from http://www.ipgp.net

== Description ==

The plugin will show your visitors their country flag, based on their IP Address. You can add it as a widget to your sidebar, using a shortcode in your post or pages or directly in your template trough template tags.

The geolocation is provided by http://www.ipgp.net

You can use [ipflag] shortcode, add it trough a widget, or directly into template with &#x3C;?php echo ipgp_flag(); ?&#x3E;

== Installation ==

This section describes how to install the plugin and get it working.

1. Download the plugin files and upload them into your wp-content/plugins/ directory.
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to 'Appearance' section on your admin panel, and select 'Widgets' submenu OR add the following shortcode to your posts and pages: [ipflag]
4. Drag "Ipgp Country Flag" widget and paste it to your active sidebar, in the place you want it to appear

== Frequently Asked Questions ==

= Do i have to change my theme to make the plugin work? =

No theme changes are needed for this plugin. 

= I don't want the plugin to appear in the sidebar, can i add it elsewhere ? =

You can place the plugin in your sidebar, or in a page or post using template tag [ipflag] or directly into the template with &#x3C;?php echo ipgp_flag(); ?&#x3E;

== Changelog ==

= 1.2 =
* Added p html tags for flag output

= 1.1.1 =
* Tested and updated to work with WordPress 5.3.2

= 1.1 =
* Changed to protocol relative url to prevent mixed content problems

= 1.0.1 =
* Fixed version number

= 1.0 =
* Created admin menu page with instructions
* Set fixed width to the flag image
* Fixed widget headers and footers display

= 0.6.2 =
* Updated deprecated function register_sidebar_widget

= 0.6 =
* Changed plugin description
* Tested with wordpress 4.4

= 0.5 =
* Fixed display problems of the flag
* Adapted to work with wordpress 4.1.1

= 0.4 =
* Checked and tested for wordpress 4.0.1 compatibility
* Changed from xml to json api version
* Fixed api call problems

= 0.3 =
* Added support to work with API key

= 0.2 =
* Fixed the problem showing a broken image when the country is not available 

= 0.1 =
* This is the first version of the plugin