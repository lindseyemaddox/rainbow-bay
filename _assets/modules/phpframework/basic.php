<?
if (!isset($_SESSION)) { session_start(); }
include("mysql_connect.php");
/*
MYSQL CONNECTIONS CONFIGURATION
--------------------------------------------------

defined('DB_USER') ? 	 null : define("DB_USER", "422763_vipUser");
defined('DB_PASS') ?     null : define("DB_PASS", "7huGK.86zz1b{CX+QZ[N0ELOM");
defined('DB_NAME') ?     null : define("DB_NAME", "422763_vip");
defined('DB_HOSTNAME') ? null : define("DB_HOSTNAME", "mysql50-103.wc2.dfw1.stabletransit.com");

$f_db = mysql_pconnect(DB_HOSTNAME, DB_USER, DB_PASS) or trigger_error(mysql_error(),E_USER_ERROR);
*/

// INCLUDED MODULES -------------------------------
include("modules/_common.php");
include("modules/select.php");
include("modules/insert.php");
include("modules/update.php");
include("modules/delete.php");


// PUBLIC FUNCTIONS -------------------------------
include("functions/prep.php");
include("functions/testing.php");
include("functions/error_handeling/_settings.php");
include("functions/error_handeling/sql.php");

// SETUP FUNCTIONS -------------------------------- 
// Uncomment a function below and refresh a script with basic.php included to setup. 

//testingMode_On();
// testingMode_Off(); // For best performance comment out this function after you have run it. 



//DEBUGGING ---------------------------------------
/*  You can debug Framework by setting the variable $debug_framework before you call insert, select, delete, or update classes.  
	When that variable is set, Framework will only output the SQL statment that it would have sent but will not acutally send
	anything to the database.
	
	EXAMPLE:
	$debug_framework = 1;
	$insert = new insert("subcat");

*/

?>