<?php 

/*
  Plugin Name: Our Test Plugin
  Description: A truly amazing plugin
  Version: 1.0
  Author: DevJas
  Author URI: <https:youtube class="com">
*/

add_filter('the_content', 'addToEndOfPost');


/*
 this will che check if the post is single ]
 and then it is coming from the main routes using 
 the is_main_query method from wordpress
*/
function addToEndOfPost($content){
    if(is_single() && is_main_query() ){
      return  $content. "<p> My name is EJ <p/>";
    }
      return $content. "<p>did not satisfied condition</p>";
}








