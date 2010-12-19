<?php 
/*
 Plugin Name: Demo Shortcode  Attributes
 Plugin URI: http://website-in-a-weekend.net/plugins/demo-plugins/
 Description: A brief description of the Plugin.
 Version: 0.1
 Author: Dave Doolin
 Author URI: http://website-in-a-weekend.net/
 */

/*  Copyright 2009 David M. Doolin  (email : david.doolin@gmail.com)
 This program is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.
 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.
 You should have received a copy of the GNU General Public License
 along with this program; if not, write to the Free Software
 Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

/* On activation, register a new shortcode.
 * Handle a couple of attributes for demonstration.
 */
if (!class_exists("demo_shortcode_attributes")) {
    
    class demo_shortcode_attributes {
        
        function demo_shortcode_attributes() {
            
            add_shortcode('wiawcode_atts', array(&$this, 'wiawcode_handler'));
            register_activation_hook('demo-plugin-shortcode/demo-plugin-shortcode.php', array(&$this, 'on_activation'));
            register_deactivation_hook('demo-plugin-shortcode/demo-plugin-shortcode.php', array(&$this, 'on_deactivation'));
        }
        
        function on_activation() {
            //stub
        }
        
        function on_deactivation() {
            remove_shortcode('wiawcode');
        }

        function wiawcode_handler($atts) {
            
            //$output = "WIAW shortcode text";
            //$foobar = array("feed"=>'', "num"=>'');
            //$foobar = array("feeder"=>'', "number"=>'');            
            //extract(shortcode_atts($foobar, $atts));
            extract(shortcode_atts($atts));
            //extract(shortcode_atts(array("feed"=>'http://', "num"=>'1', ), $atts));
                    
            return $feed.$num;
            //return $feeder.$number;
            //return $output;
        }

            
    }
}


$wpdpd = new demo_shortcode_attributes();

?>
