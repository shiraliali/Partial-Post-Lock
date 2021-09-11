<?php

// Some stuffs defined here 
// Such as Messages,Errors and other values 


// Getting wordpress Site login Url
$login_url = wp_login_url( home_url() );

// Font Awesome Initialize
define('PPL_FONTAWESOME', '//cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css');

//Wordpress Login Url
define('PPL_LOGIN_URL', $login_url);

//Need to login for access message
define('PPL_MSG_Login', '<b>Please log in to your account for Access to this Part of post</b><br>');

//Lock Icon
define('PPL_LOCK_ICON', '<i id="lock-icon" class="fas fa-lock"></i>');

//Makeup login clickable url
define('PPL_LOGIN','<i class="fas fa-key"></i><a href="' . PPL_LOGIN_URL . '"><strong>  Login To My Account</strong></a>');


?>