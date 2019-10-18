

In this file of your topic (functions.php), add the following code

Please do not delete the program code in the functions.php topic of your original theme, please add the following program code instead of deleting


Please ignore the following 

<?php

? > 

Just copy:

 <?php 

copy content ← ← ← ← ← ← ← ← ← ← ← ← ← ← ←

? >

-----------------------------------------------
/*

The same, there are any technical (replacement background login page themes) problem, please contact the me e-mail:honcbb@gmail.com
*/


↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓

<?php
/*
login themes
*/

function my_custom_login() {
echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/fbox-login-styles.css" />';
}
add_action('login_head', 'my_custom_login');

function my_login_logo_url() {
return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
return 'Your Site Name and Info';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

//theme footer

?>
