<? 
class insert extends frameworkCommon {
	
	/*
	  METHODS
	  --------------------------------------------------------------------------------------------------
		insert(A, [B]) 
			A is the full SQL or the table name that you are inserting data.
			B an optional value that will redirect the page to the specified value after inserting data.
			
	  SAMPLE USAGE
	  --------------------------------------------------------------------------------------------------
	  	Entering SQL Example:
		$sql = sprintf("INSERT INTO products (subCatID, typeID, name, `description`, price, promoDiscount, weight) VALUES (%s, %s, %s, %s, %s, %s, %s)",
						   prep($subCatID, "text"),
						   prep($typeID, "text"),
						   prep($_POST['name'], "text"),
						   prep($_POST['description'], "text"),
						   prep($_POST['price'], "text"),
						   prep($_POST['promoDiscount'], "text"),
						   prep($_POST['weight'], "text"));
		$insert = new insert($sql);
		
		Just specifying the table Example:
		$insert = new insert("products", "products.php");
		
			NOTES: For this method to work, you will need to name all $_POST values the same why as their corresponding columns in the database.
		
	*/
	
	var $query;
	var $id; // is the returned unique ID for the row that was inserted. 
	
	function insert($sql, $goto_after_insert=NULL){
		global $f_db;
		mysql_select_db(DB_NAME, $f_db);
		
		if(!strstr($sql, "INSERT INTO")) {
			$table = $sql;
			
			$tableInfo = $this->getTableInfo($table);
			foreach ($tableInfo as $column) {
				
				$col = $column['col'];
				
				if(isset($_POST[$col])){
					$col_name[] = $col;
				
					if($column['numeric'] == 1) { $type = "int"; } else { $type = "text"; }
					if($column['type'] == "real") { $type = "double"; }
					if($column['type'] == "timestamp") { $type = "date"; }
				
					$values .= prep($_POST[$col], $type) . ",";
				}
			}
			
			$columns = implode("`, `", $col_name);
			$columns = "`" . $columns . "`";
			$sql = "INSERT INTO " . $table . " (" . $columns . ") VALUES ";
			$values = rtrim($values, ",");
			$sql .= "(" . $values . ")";
			
			$this->query = $sql;
		} else {
			$this->query = $sql;	
		}
		
		global $debug_framework;
			if(!isset($debug_framework)) {
				$result = mysql_query($sql, $f_db) or die(logSQLerror($qString, "INSERT", mysql_error()));
				$this->id = mysql_insert_id();
				
				if(isset($goto_after_insert)){
					header("Location: " . $goto_after_insert);
				}
			} else {
				echo '<div style="position:fixed; background:#FFF; border:5px solid #AAA; color:#000; padding:15px; z-index:10000;">' . $sql . '</div>';	
			}
		
	}
}
	
?>