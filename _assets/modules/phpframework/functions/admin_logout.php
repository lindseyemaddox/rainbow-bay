<? 
function admin_logout($instance, $after_logout_goto = NULL){
	
	/*
	  FUNCTION
	  --------------------------------------------------------------------------------------------------
		admin_logout(A, [B])
			A is the instance name defined first in your admin_login instance.
			B an optional variable that will send the user to another page after the lotout is completed.
		
	  SAMPLE USAGE
	  --------------------------------------------------------------------------------------------------
	  	
			admin_logout("login1", "login.php");
	*/
	
	$_SESSION[$instance . '_username'] = NULL;
	$_SESSION[$instance . '_backUrl'] = NULL;
	$_SESSION[$instance . '_access'] = NULL;
	unset($_SESSION[$instance . '_username']);
	unset($_SESSION[$instance . '_backUrl']);
	unset($_SESSION[$instance . '_access']);
	
	if(isset($after_logout_goto)){
		header("Location: " . $after_logout_goto );
	}
	
}
?>