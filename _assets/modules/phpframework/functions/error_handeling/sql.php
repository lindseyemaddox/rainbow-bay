<? 
/* MYSQL ERROR HANDELING
---------------------------------------------------------------------
Created By:  Garrett Davis on 3-26-2012

Notes:  This document outlines what framework should do in the event of a SQL error.  By default it will log the error into your database. 
*/
include("common.php");

function logSQLerror($sqlStatement, $type, $errorFromSQLserver){
	//Check if error_sql tabel exists and if not then create table
	checkErrorTabelExists();
	
	$insert = new insert("INSERT INTO " . ERROR_SQL_TABLE . "(`sql`, `type`, uri, userIP, errorMsg, getVars, postVars, `date`) VALUES (".
						  prep($sqlStatement, "text"). "," .
						  prep($type, "text") . "," .
						  prep($_SERVER['REQUEST_URI'], "text"). "," .
						   prep($_SERVER['REMOTE_ADDR'], "text"). "," .
						  prep($errorFromSQLserver, "text") . "," .
						  prep(getGETvars(), "text") . "," .
						  prep(getPOSTvars(), "text") . "," .
						  "CURRENT_TIMESTAMP)");
						  
	echo $errorFromSQLserver;
}

function checkErrorTabelExists(){	
	global $f_db;
	
	$sql = "SELECT COUNT(*) AS count FROM information_schema.tables  WHERE table_schema = '".DB_NAME."' AND table_name = '".ERROR_SQL_TABLE."'";
    $test = mysql_query($sql,$f_db);
    if (!mysql_result($test, 0)){
    	//table_name doesn't exist so create table
		mysql_query("CREATE TABLE ".ERROR_SQL_TABLE." (
								  `errorID` int(11) unsigned NOT NULL auto_increment,
								  `sql` text,
								  `type` varchar(50) default NULL,
								  `uri` text default NULL,
								  `userIP` varchar(50) default NULL,
								  `errorMsg` text,
								  `getVars` text default NULL,
								  `postVars` text default NULL,
								  `date` timestamp NULL default NULL,
								  PRIMARY KEY  (`errorID`)
								) ENGINE=InnoDB DEFAULT CHARSET=latin1;", $f_db);
    }
}

?>