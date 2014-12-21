<? 
class update extends frameworkCommon {
	/*
	  METHODS
	  --------------------------------------------------------------------------------------------------
		update(A, [B]) 
			A is the full SQL or the table name that you are updateing.
			B an optional value that will redirect the page to the specified value after updating data.
			
	  SAMPLE USAGE
	  --------------------------------------------------------------------------------------------------
	  	Entering SQL Example:
		 $updateSQL = sprintf("UPDATE products SET subCatID=%s, typeID=%s, name=%s, description=%s, price=%s, promoDiscount=%s, weight=%s WHERE productID=%s",
                       prep($subCatID, "text"),
					   prep($typeID, "text"),
					   prep($_POST['name'], "text"),
                       prep($_POST['description'], "text"),
					   prep($_POST['price'], "text"),
					   prep($_POST['promoDiscount'], "text"),
					   prep($_POST['weight'], "text"),
					   prep($_POST['productID'], "int"));
	    $update = new update($updateSQL);
		
		Just specifying the table Example:
		$update = new update("products", "products.php");
		
			NOTES: For this method to work, you will need to name all $_POST values the same why as their corresponding columns in the database.  
				   Be sure that your primary key is submitted as a $_POST value too.  
		
	*/
	var $query;
	
	function update($sql, $goto_after_update=NULL){
		global $f_db;
		mysql_select_db(DB_NAME, $f_db);
		
		if(!strstr($sql, "UPDATE")) {
			$table = $sql;
			
			$sql = "UPDATE " . $table . " SET ";
			
			$tableInfo = $this->getTableInfo($table);
			foreach ($tableInfo as $column) {
				
				$col = $column['col'];
				if($column['primary_key'] == 1) { $primary_key = $col; }
				
				if(isset($_POST[$col])){
					$col_name[] = $col;
				
					if($column['numeric'] == 1) { $type = "int"; } else { $type = "text"; }
					if($column['type'] == "real") { $type = "double"; }
					if($column['type'] == "timestamp") { $type = "date"; }
					
					$sql .= "`" . $col . "`=" . prep($_POST[$col], $type) . ",";
				}
			}
			
			$sql = rtrim($sql, ",");
			$sql .= " WHERE " . $primary_key . "=" . prep($_POST[$primary_key], "int");
			
			if(!isset($_POST[$primary_key])) {
				trigger_error ("PHP Framework: Trying to update your table but it looks like you didn't POST the primary key <b>".$primary_key."</b> with your form submission.  Create a hidden form element with the name set to <b>".$primary_key."</b> and set its value to the ID of the row you are wanting to update. ", E_USER_WARNING);
			}
			
			$this->query = $sql;	 
		} else {
			$this->query = $sql;
		}
		global $debug_framework;
			if(!isset($debug_framework)) {
				$result = mysql_query($sql, $f_db) or die(logSQLerror($qString, "UPDATE", mysql_error()));
				
				if(isset($goto_after_update)){
					header("Location: " . $goto_after_update);
				}
			} else {
				echo '<div style="position:fixed; background:#FFF; border:5px solid #AAA; color:#000; padding:15px; z-index:10000;">' . $sql . '</div>';	
			}
		
	}
}
?>