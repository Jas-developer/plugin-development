<?php 

/*
  Plugin Name: Our Test Plugin
  Description: A truy amazing plugin
  Version: 1.0
  Author: Brad
  Author URI: https://www.linkedin.com/in/jason-evaristo-0a872b279/
*/


class WordCountAndTimePlugin {
  function __construct(){   
    add_action('admin_menu', array($this, 'adminPage'));
    add_action('admin_init', array($this,'settings'));
   }
  
  function settings(){
    add_settings_field(1,2,3,4,5);
    //
    register_setting('wordcountplugin','wcp_location',
    array('sanitize_callback' => 
    'sanitize_text_field', 'default' => '0'
  ));
  }


  function adminPage(){
    add_options_page('Word Count Settings','Word Count','manage_options',"Words Counter hehe",array($this, 'pageHtml'));
  }

  function pageHtml(){ ?>
  <div class="wrap">
    <h1>Word Count Settings</h1>
  </div>

  <?php

  }
   

}

$wordCounAndTimePlugin = new WordCountAndTimePlugin(); //creating an object/instance of a class



