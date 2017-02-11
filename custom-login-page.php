<?php
/*
 * ADD OUR CUSTOM LOGIN PAGE
 *************************************************************/
add_action('login_head', 'my_custom_login');
function my_custom_login() { // Include a stylesheet to adapt the login page
    echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('template_directory') . '/login/custom-login-styles.css" />';
}
 
add_filter( 'login_headerurl', 'my_login_logo_url' );
function my_login_logo_url() { // Change the logo link from wordpress
    return get_bloginfo( 'url' );
}
 
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
function my_login_logo_url_title() { // Change the title
    return 'ADD YOUR SITE TITLE';
}
 
add_filter('login_errors', 'login_error_override');
function login_error_override() { // Change the login error message
    return 'Incorrect login details.';
}
 
add_action( 'init', 'login_checked_remember_me' );
function login_checked_remember_me() { // Auto check the "remember me" box
    add_filter( 'login_footer', 'rememberme_checked' );
}
function rememberme_checked() {
    echo "<script>document.getElementById('rememberme').checked = true;</script>";
}
?>

//Then create a new CSS file and save it within your theme folder in a folder called login.

body.login {
  background-image: url('login-hero.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
  background-size: cover;
}
.login h1 a {
  background-image: url('logo.png');
}
.login label {
  font-size: 12px;
  color: #555555;
}
 
.login input[type="text"]{
  background-color: #ffffff;
  border-color:#dddddd;
  -webkit-border-radius: 4px;
}
 
.login input[type="password"]{
  background-color: #ffffff;
  border-color:#dddddd;
  -webkit-border-radius: 4px;
}
.login .button-primary {
  width: 120px;
  float:right;
  background-color:#1783d8 !important;
  color: #ffffff;
  -webkit-border-radius: 0;
  border: none;
}
 
.login .button-primary::before {
    bottom: 0;
    content: "";
    height: 4px;
    left: 50%;
    position: absolute;
    right: 50%;
    transition-duration: 0.3s;
    transition-property: left, right;
    transition-timing-function: ease-out;
    z-index: -1;
}
 
.login .button-primary:hover {
  background-color:#17a8e3 !important;
  color: #fff;
  -webkit-border-radius: 0;
  border: none;
}
.login .button-primary:hover::before {
    left: 0;
    right: 0;
}
 
.login .button-primary:active {
  background-color:#17a8e3 !important;
  color: #fff;
  -webkit-border-radius: 0;
  border: none;
}
p#nav {
  display: none;
}
p#backtoblog {
  display: none;
}
