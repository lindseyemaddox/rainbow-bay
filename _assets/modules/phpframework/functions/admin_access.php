<?
function access_check($instance, $redirect_to_if_fail, $page_access_level_required = NULL) {
	
	/*
	  FUNCTION
	  --------------------------------------------------------------------------------------------------
		access_check(A, B, [C])
			A is the instance name defined first in your admin_login instance.
			B is the page to redirect to if the user is either not logged in or does not have the correct access level for that page.  You can pass $_GET variables with no problem. 
			C an optional number variable that you can use to set prevliages for that page.  It is assumed that lower numbers means higher level access. 0 = absolute access. 
					Exmaple:  If the user has a defined access level of 1 but C is 0 then the script will deny access for that user for the page. 
		
	  SAMPLE USAGE
	  --------------------------------------------------------------------------------------------------
	  	
			Normal:
			access_check("login1", "login2.php");
		
			With Access level defined:
			access_check("login1", "login2.php", 1);
	*/
	
	$fail = 0;
	if($_SESSION[$instance . '_username'] == ""){ 
		$fail = 1;
		$error = 1;
		$_SESSION[$instance . '_backUrl'] = $_SERVER['PHP_SELF'];
		
		if(isset($_SERVER['QUERY_STRING'])){
			$_SESSION[$instance . '_backUrl'] .= "?" . $_SERVER['QUERY_STRING'];
		}
	}
	if((isset($page_access_level_required)) && ($page_access_level_required < $_SESSION[$instance . '_access'])) {
		$fail = 1;
		$error = 2;
		$_SESSION[$instance . '_backUrl'] = $_SERVER['PHP_SELF'];
	}
	if($error){
		
		if(strpos($redirect_to_if_fail, "?")){
			$errorAdd = "&";
		} else { 
			$errorAdd = "?";
		}
		$redirect_to = $redirect_to_if_fail . $errorAdd . "pfw_login_error=" . $error;
		header("Location: " . $redirect_to );
		exit;
	}
}
?>