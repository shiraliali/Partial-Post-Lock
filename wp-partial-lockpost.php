<?php
/*
Plugin Name: partial-post-lock
Plugin URI: https://github.com/shiraliali/wordpress-partial-postlock
Description: Lock a part of your post with easiest possible way・Created by twitter.com/alyshirali
Author: ali shirali 
Author URI: https://twitter.com/alyshirali
Text Domain: partial-post-lock
Version: 1.0.0
*/


/*
Css Stylesheet and FontAwsome will loaded here
*/
function ppl_partial_lockpost_css() {
	
    // Getting Plugin Directory URL
    $ppl_plugin_url = plugin_dir_url( __FILE__ );
	
    // Loading Plugin style from css folder in plugin directory
    wp_enqueue_style( 'style', $ppl_plugin_url . 'css/style.css' );
    
    // Loading Font Awsome kit from fontawsome cloud servers	
    wp_enqueue_script( 'fontawsomeicons', PPL_FONTAWESOME );

}
add_action( 'wp_enqueue_scripts', 'ppl_partial_lockpost_css' );


// Include init.php file
include( plugin_dir_path( __FILE__ ) . 'define/init.php');





 // Start Function 
 // This function will Make the shortcode And the Message
 // $content is your post content
 
 function ppl_lock_post( $atts, $content = null ) {

 if ( is_user_logged_in()) {
	 
// If user already logged in , The content will be shown to user
 return $content;

 } else {

    ob_start();
	 
// The Message in Post will shown when User is Not Logged in 
// You can Add more messages or using your custom shortcodes by using echo
?>

<!-- Message Section box styled with css/style.css loaded as div class -->
<div class="login-section">
	<?php
	 
// Login Message	 
echo PPL_MSG_Login;
	 
// Getting Login Wordpress url and displaying url as Clickable link	 
echo PPL_LOGIN;

// Lock Icon using font awsome that will showing in right side Inside Login section Box	 
echo PPL_LOCK_ICON; ?>

</div>
<?php
 }

 return ob_get_clean();

 } 

// Shortcode created, it will be [lockpost] 
add_shortcode( 'lockpost', 'ppl_lock_post' );