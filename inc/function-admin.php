<?php 

/*
@package my first theme
    ========================
            ADMIN PAGE
    ========================
 */

 function my_first_theme_admin(){
    /* 'My theme option', 'My theme', 'manage_options', 'myfirsttheme', 'my_theme_create_page', get_template_directory() . '/img/dashboard_icon.png', 110*/
    add_menu_page( 'My theme option', 'My theme', 'manage_options', 'myfirsttheme', 'my_theme_create_page', get_template_directory() . '/img/dashboard_icon.png', 110 );

 }

 add_action( 'admin_menu,', 'my_first_theme_admin');

 function  my_theme_create_page(){

 }

