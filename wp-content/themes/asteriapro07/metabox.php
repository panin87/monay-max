<?php
/*
Plugin Name: Asteria MetaBox
Plugin URI: http://en.bainternet.info
Description: Asteria Metabox
Version: 3.1.0
Author: Bainternet, Ohad Raz
Author URI: http://en.bainternet.info
*/

//include the main class file
require_once("meta-box-class/my-meta-box-class.php");
if (is_admin()){
  /* 
   * prefix of meta keys, optional
   * use underscore (_) at the beginning to make keys hidden, for example $prefix = '_ba_';
   *  you also can make prefix empty to disable it
   * 
   */
  $prefix = 'ast_';

  /* 
   * configure your meta box
   */
  $ast_config2 = array(
    'id'             => 'asteria_pagehead',          // meta box id, unique per meta box
    'title'          => 'Asteria Page Header',          // meta box title
    'pages'          => array('page'),      // post types, accept custom post types as well, default is array('post'); optional
    'context'        => 'side',            // where the meta box appear: normal (default), advanced, side; optional
    'priority'       => 'low',            // order of meta box: high (default), low; optional
    'fields'         => array(),            // list of meta fields (can be added by field arrays)
    'local_images'   => true,          // Use local or hosted images (meta box images for add/remove)
    'use_with_theme' => true          //change path if used with theme set to true, false for a plugin or anything else for a custom path(default false).
  );

  /*
   * Initiate your meta box
   */
  $ast_header =  new AT_Meta_Box($ast_config2);
  
  /*
   * Add fields to your meta box
   */
  
  //text field
  $ast_header->addRadio($prefix.'pagetitle',array('left'=>'Left','center'=>'Center','right'=>'Right'),array('name'=> 'Page Title Alignemnt', 'std'=> array('center')));
    
  $ast_header->addImage($prefix.'head_field',array('name'=> 'Header Image '));

  $ast_header->addRadio($prefix.'radio_field_id6',array('no-repeat'=>'No Repeat','repeat'=>'Tile'),array('name'=> 'Repeat', 'std'=> array('no-repeat')));
  
  $ast_header->addText($prefix.'headheight',array('name'=> 'Height', 'desc' => 'eg: 300px'));
  
  /*
   * Don't Forget to Close up the meta box Declaration 
   */
  //Finish Meta Box Declaration 
  $ast_header->Finish();



    /* 
   * configure your meta box
   */
  $ast_config = array(
    'id'             => 'asteria_video_box',          // meta box id, unique per meta box
    'title'          => 'Asteria Video Thumbnail',          // meta box title
    'pages'          => array('post'),      // post types, accept custom post types as well, default is array('post'); optional
    'context'        => 'side',            // where the meta box appear: normal (default), advanced, side; optional
    'priority'       => 'low',            // order of meta box: high (default), low; optional
    'fields'         => array(),            // list of meta fields (can be added by field arrays)
    'local_images'   => true,          // Use local or hosted images (meta box images for add/remove)
    'use_with_theme' => true          //change path if used with theme set to true, false for a plugin or anything else for a custom path(default false).
  );
  
  /*
   * Initiate your meta box
   */
  $ast_meta =  new AT_Meta_Box($ast_config);
  

  /*
   * Add fields to your meta box
   */
  
  //text field
  
  $ast_meta->addText($prefix.'videolink',array('name'=> 'Your youtube video link'));

  /*
   * Don't Forget to Close up the meta box Declaration 
   */
  //Finish Meta Box Declaration 
  $ast_meta->Finish();




    /* 
   * configure your meta box
   */
  $ast_config = array(
    'id'             => 'asteria_meta_box',          // meta box id, unique per meta box
    'title'          => 'Asteria Background Per Page',          // meta box title
    'pages'          => array('post', 'page'),      // post types, accept custom post types as well, default is array('post'); optional
    'context'        => 'side',            // where the meta box appear: normal (default), advanced, side; optional
    'priority'       => 'low',            // order of meta box: high (default), low; optional
    'fields'         => array(),            // list of meta fields (can be added by field arrays)
    'local_images'   => true,          // Use local or hosted images (meta box images for add/remove)
    'use_with_theme' => true          //change path if used with theme set to true, false for a plugin or anything else for a custom path(default false).
  );
  
  /*
   * Initiate your meta box
   */
  $ast_meta =  new AT_Meta_Box($ast_config);
  

  /*
   * Add fields to your meta box
   */
  
  //text field
  
  $ast_meta->addColor($prefix.'bg_color_id',array('name'=> 'Background Color '));

  $ast_meta->addImage($prefix.'bg_field',array('name'=> 'Background Image '));

  $ast_meta->addRadio($prefix.'radio_field_id3',array('no-repeat'=>'No Repeat','repeat'=>'Tile'),array('name'=> 'Repeat', 'std'=> array('no-repeat')));
  
  $ast_meta->addRadio($prefix.'radio_field_id4',array('scroll'=>'Scroll','fixed'=>'Fixed'),array('name'=> 'Attachment', 'std'=> array('scroll')));
  /*
   * Don't Forget to Close up the meta box Declaration 
   */
  //Finish Meta Box Declaration 
  $ast_meta->Finish();

}
