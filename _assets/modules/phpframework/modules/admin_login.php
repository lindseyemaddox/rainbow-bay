<? 
class admin_login {
/*
	  METHODS
	  --------------------------------------------------------------------------------------------------
		login(A, B, C, D, [E]) 
			A is the page you want to go to after a successful login
			B is the database Admin table name
			C is the database User column in your Admin table.
			D is the database Password column in your Admin table.
			E an optional variable that is the database Access Level column in your Admin table.
			
				A Note about Access Level:  The system works where 0 = absolute access with each higher number being less access.  You define what level each page should have in the admin_access function.
		
	  SAMPLE USAGE
	  --------------------------------------------------------------------------------------------------
	  	
			Normal:
			$login = new admin_login('login1');
			$login->login("index.php", "admin", "name", "password");
		
				NOTES:  The "login1" above is the unique instance name (can be anything) and is used to sync the admin_access function with the correct login instance.
		
			With Access level defined:
			$login = new admin_login('login1');
			$login->login("index.php", "admin", "name", "password", "accessLevel");
	*/
	
	
	//START text labels
	var $userLabel = "User Name";
	var $passwordLabel = "Password";
	var $submitLabel = "Log In";	
	//END text labels
	var $instance;
	
	function __construct($instance_name) {
        $this->instance = $instance_name;
    }
	
	function login($after_login_goto, $admin_table, $admin_user_column, $admin_password_column, $admin_access_column = NULL) {
		$_SESSION[$this->instance . '_login_goto'] = $after_login_goto;
		$_SESSION[$this->instance . '_login_adminTable'] = $admin_table;
		$_SESSION[$this->instance . '_login_userColumn'] = $admin_user_column;
		$_SESSION[$this->instance . '_login_passwordColumn'] = $admin_password_column;
		$_SESSION[$this->instance . '_login_accessColumn'] = $admin_access_column;
		
		if(isset($_POST['pfw_un'])) { $cookie = $_POST['pfw_un']; } else if (isset($_COOKIE[$this->instance . '_username'])) { $cookie = $_COOKIE[$this->instance . '_username']; }
		if (isset($_COOKIE[$this->instance . '_username'])) { $checkBox = 1; } else { $checkBox = 0; }
	
		
		$error_var = $this->instance . "_login_error_text";
		global $$error_var;
		
		if($$error_var > "") { $error = "<p><strong><font color=red>" . $$error_var . "</font></strong></p>"; }
		
		if(isset($_GET['pfw_login_error'])){
			switch ($_GET['pfw_login_error']) {
				case 1:
					$pfw_error_two = "<p><strong>Your login has timed out, please log in again.</strong><p>";
					break;
				case 2:
					$pfw_error_two = "<p><strong>You do not have sufficient privileges to access that page.</strong></p>";
					break;
			}
		}
		
		$pfw_login_encrypted_key = "1g@GKPelynQvNHu7Z9yAogu";
		$encrypted_instance = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($pfw_login_encrypted_key), $this->instance, MCRYPT_MODE_CBC, md5(md5($pfw_login_encrypted_key))));
		
		
		$loginBox = $pfw_error_two . '
		<form action="' . $_SERVER['PHP_SELF'] . '" id="'. $encrypted_instance . '_login" name="' . $encrypted_instance . '_login" method="POST">
        <p>
		  <label for="pfw_un">'. $this->userLabel .'</label><br />
          <input name="pfw_un" type="text" id="pfw_un" value="' . $cookie .  '" autocomplete="off" />
        </p>
        <p>
          <label for="pfw_pw">' . $this->passwordLabel . '</label><br />
          <input name="pfw_pw" type="password" id="pfw_pw" />
        </p>
   
        <p>
          <input type="submit" name="pfw_login_submit" id="pfw_login_submit" value="' . $this->submitLabel . '" />';
		  if($cookie != "") { $checked = ' checked="checked"'; }
		 $loginBox .= ' 
          <input name="pfw_remember" type="checkbox" id="pfw_remember" value="1"'. $checked.' />
          <label for="pfw_remember">Remember User Name?</label>
		  <input type="hidden" name="pfw_login_instance" value="'. $encrypted_instance .'" />
        </p>
  		</form>' . $error;
		
		echo $loginBox;
	}
}


//START login event listener
if(isset($_POST['pfw_login_instance'])){
	$pfw_login_instance = $_POST['pfw_login_instance'];
	
	$pfw_login_encrypted_key = "1g@GKPelynQvNHu7Z9yAogu";
	
		$pfw_login_instance = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($pfw_login_encrypted_key), base64_decode($pfw_login_instance), MCRYPT_MODE_CBC, md5(md5($pfw_login_encrypted_key))), "\0");
	
	if(isset($_SESSION[$pfw_login_instance . '_login_adminTable'])){
			  $pfw_login_error = 1;
			  $pfw_login_error_text = $pfw_login_instance . "_login_error_text";
			  $$pfw_login_error_text = "";
			  if($_POST['pfw_un'] == "") { $pfw_login_error = 0; $$pfw_login_error_text = "A User Name is required."; }
			  if($_POST['pfw_pw'] == "") { $pfw_login_error = 0; $$pfw_login_error_text = "A Password is required."; }
			
			  if($pfw_login_error) {
				  $pfw_login_un = $_POST['pfw_un'];
				  $pfw_login_pw = md5($_POST['pfw_pw']);
				  $pfw_admin_table = $_SESSION[$pfw_login_instance . '_login_adminTable'];
				  $pfw_user_column = $_SESSION[$pfw_login_instance . '_login_userColumn'];
				  $pfw_password_column = $_SESSION[$pfw_login_instance . '_login_passwordColumn'];
				  $pfw_access_column = $_SESSION[$pfw_login_instance . '_login_accessColumn'];
				
				  $pfw_login_query = "SELECT `". $pfw_user_column . "`,`" . $pfw_password_column . "`";
				  if($pfw_access_column != "") {$pfw_login_query .= ", `" . $pfw_access_column . "`";  }	 
				  $pfw_login_query = sprintf($pfw_login_query . " FROM " . $pfw_admin_table  . " WHERE " . $pfw_user_column . "='%s' AND " . $pfw_password_column . "='%s'",
				  get_magic_quotes_gpc() ?  $pfw_login_un : addslashes($pfw_login_un), get_magic_quotes_gpc() ? $pfw_login_pw : addslashes($pfw_login_pw)); 
				   
				  $pfw_login = new select($pfw_login_query);
				
				  if ($pfw_login->totalRows > 0) {
						$_SESSION[$pfw_login_instance . '_username'] = $pfw_login->row[$pfw_user_column];
						
						if($pfw_access_column != "") { $_SESSION[$pfw_login_instance . '_access'] = $pfw_login->row[$pfw_access_column]; }	
						
						if($_POST['pfw_remember'] == 1){ 
							setcookie ($pfw_login_instance . '_username', $pfw_login_un, time() + (60*60*24*365));
						} else {
							setcookie ($pfw_login_instance . '_username', "", time() - 3600);
						}     
						
						if (isset($_SESSION[$pfw_login_instance . '_backUrl'])) {
						  $pfw_redirect_to = $_SESSION[$pfw_login_instance . '_backUrl'];
						  	$_SESSION[$pfw_login_instance . '_backUrl'] = NULL;
							unset($_SESSION[$pfw_login_instance . '_backUrl']);
						} else {
						  $pfw_redirect_to = $_SESSION[$pfw_login_instance . '_login_goto'];
						}
						header("Location: " . $pfw_redirect_to );
				  } else {
					$$pfw_login_error_text = "Incorrect User Name and/or Password";
				  }
			  } 
	}
}
//END login event listener
?>