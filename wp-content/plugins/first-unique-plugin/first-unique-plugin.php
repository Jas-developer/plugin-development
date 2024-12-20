<?php 

/*
  Plugin Name: Our Test Plugin
  Description: A truly amazing plugin
  Version: 1.0
  Author: DevJas
  Author URI: <https:youtube class="com">
*/

add_filter('the_content', 'addToEndOfPost');

function addToEndOfPost($content){
    return  "<p> My name is EJ <p/>";
}


