<?php 
class frameworkCommon {
	
	function getTableInfo ($tableNameOrSQL, $db_connect = NULL, $db_name = NULL) {
		global $f_db;
		if($db_connect == NULL) { 
		 	$db_connect = $f_db;
		}
		if($db_name == NULL) { 
		 	$db_name = DB_NAME;
		}
		mysql_select_db(DB_NAME, $f_db);
		
		if(!strpos($tableNameOrSQL, " ")) {
			$tableNameOrSQL = "SELECT * FROM " . $tableNameOrSQL;
		}
		
		$get_table_info_query = mysql_query($tableNameOrSQL, $db_connect);
			$i = 0;
			while ($i < mysql_num_fields($get_table_info_query)) {
				$meta = mysql_fetch_field($get_table_info_query, $i);	
				$tblData[] = array("col"		=>$meta->name,
								   "not_null"	=>$meta->not_null,
								   "numeric"	=>$meta->numeric,
								   "primary_key"=>$meta->primary_key,
								   "type"		=>$meta->type);
				$i++;
			}
		return $tblData;
	}
}

//START - Check setup of framework
if((!defined('DB_USER')) || (!defined('DB_PASS')) || (!defined('DB_NAME')) || (!defined('DB_HOSTNAME'))) {
	trigger_error ("PHP Framework: Either your mysql_connect.php file is not set up correctly or framework is not finding it.  Check the first include in phpframework/basic.php to be sure that it is pointing to your mysql_connect file and that it has the correct constants defined. ", E_USER_ERROR);	
}
//END - Check setup of framework.

?>