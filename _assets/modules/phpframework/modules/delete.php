<? 
class delete extends frameworkCommon {
	/*
	  METHODS
	  --------------------------------------------------------------------------------------------------
		delete(A, [B], [C]) 
			A is the full SQL or the table name that you are deleting data from.
			B an optional value that will redirect the page to the specified value after inserting data.
			C on optional value that will attempt to delete the file that you are specifyig.  Can be either from the root or relative. 
			
	  SAMPLE USAGE
	  --------------------------------------------------------------------------------------------------
	  	Entering SQL Example:
		$delete = new delete("DELETE FROM products WHERE productID=" . prep($_POST['productID'], "int"));
		
		Just specifying the table Example:
		$delete = new delete("products", "products.php", "../uploads/img/cats.jpg");
		
			NOTES: For this method to work you will need to $_POST the primary key with its name set the same as your primary key column name.
		
	*/
	
	
	var $query;
	
	function delete($sql, $goto_after_delete=NULL, $delete_file=NULL){
		global $f_db;
		mysql_select_db(DB_NAME, $f_db);
		
		if(!strstr($sql, "DELETE FROM")) {
			$table = $sql;
			$tableInfo = $this->getTableInfo($table);
			foreach ($tableInfo as $column) {
				$col = $column['col'];
				if($column['primary_key'] == 1) { $primary_key = $col; }
			}
			
			if(isset($_POST[$primary_key])) {
				$sql = "DELETE FROM " . $table . " WHERE " . $primary_key . "=" . prep($_POST[$primary_key], "int");
				$this->query = $sql;	
			} else {
				trigger_error("PHP Framework - You are using the delete shortcut with Framework but it did not find a POST variable for <strong>$primary_key</strong>.<br /> ", E_USER_WARNING);	
			}
		} else {
			$this->query = $sql;
		}
		
		//START Delete the file if the flag exists
		if($delete_file != NULL) {
			if(file_exists($delete_file) && !is_dir($delete_file)){
				unlink($delete_file);
			} else if(file_exists($_SERVER['DOCUMENT_ROOT'] . $delete_file) && !is_dir($_SERVER['DOCUMENT_ROOT'] . $delete_file)) {
				unlink($_SERVER['DOCUMENT_ROOT'] . $delete_file);
			}
		}
		//END Delete the file if the flag exists
		
		global $debug_framework;
			if(!isset($debug_framework)) {
				$result = mysql_query($sql, $f_db) or die(logSQLerror($qString, "DELETE", mysql_error()));
				
				if(isset($goto_after_delete)){
					header("Location: " . $goto_after_delete);
				}	
			} else {
				echo '<div style="position:fixed; background:#FFF; border:5px solid #AAA; color:#000; padding:15px; z-index:10000;">' . $sql . '</div>';	
			}
		
	}
}
?>