<?php /** 
* Plugin Name: Remove Reference to Zip Code in Gravity Forms
* Description: Changes "Zip Code / Post Code" to just "Postcode"
* Author: Worcester Web Studio
* Author URI: https://www.worcesterwebstudio.com
* Version: v1.2.2
*/ 
add_filter("gform_address_zip", "change_address_zip", 10, 2);
function change_address_zip($label, $form_id){
    return "Postcode";
}
?>