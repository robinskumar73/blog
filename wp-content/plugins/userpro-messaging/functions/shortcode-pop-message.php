<?php
// short code for my message
add_shortcode('userpro_mymessage','userpro_msg_mymsg');
function userpro_msg_mymsg()
{
	$user_id=get_current_user_id(); 
	if($user_id==0)
		return "Please login to see messages";
	else{
		$mymsgstr = '<a class="userpro-show-chat dt-btn dt-btn-s" href="#" data-user_id="'.$user_id.'">My Messages</a>' ;
		return $mymsgstr;
	    }
} 
?>
