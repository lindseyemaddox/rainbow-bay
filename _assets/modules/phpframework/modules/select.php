<?
class select extends frameworkCommon {
	
	/*
	  METHODS
	  --------------------------------------------------------------------------------------------------
		select(sql, [limit])
		repeat()
		paging()
		
			NOTE: Limit must be defined if you want to use the paging() method. 
		
	  SAMPLE USAGE
	  --------------------------------------------------------------------------------------------------
	  	$products = new select("SELECT * FROM products", 10);
		
		echo "Showing " . $products->recordCount . "<br />";
		do {
			echo $products->row['name'] . "<br />";
		} while($products->repeat());
		
		echo $products->paging();
		
		
	*/
	
	//START useful user variables
	var $query;
	var $row;
	var $totalRows;
	var $recordCount;
	//END useful user variables
	
	//START custom paging variables
	var $curPage;
	var $totalPages;
	var $firstPage = FALSE;  //Returns Boolean
	var $lastPage = FALSE; //Returns Boolean
	var $nextPageHREF; //Returns the A HREF link for the next page
	var $prevPageHREF; //Returns the A HREF link for the previous page.
	var	$firstPageHREF;
	var $lastPageHREF;
	var $pageHREF;  //Returns an ARRAY where the index is the page number and the value is the HREF to go to that page.  
	//END custom paging variables
	
	var $queryString;
	
	var $table;
	var $sql_query_statement;
	var $limit;
	var $tableStructureAndInfo;
	var $db_connect;
	var $db_name;
	var $curRowNumber = 1;
	var $objectUniqueKey;
	
	function select($string, $limit = NULL, $db_connect = NULL, $db_name = NULL) {
		global $f_db, $framework_global_object_registration;

		if($db_connect == NULL) { 
		 	$db_connect = $f_db;
		}
		if($db_name == NULL) { 
		 	$db_name = DB_NAME;
		}
		$this->db_connect = $db_connect;
		$this->db_name = $db_name;
		
		if(!mysql_select_db($this->db_name, $this->db_connect)){
			trigger_error ("PHP Framework: Could not connect to database: " . $db_name, E_USER_ERROR);	
		} 
		
		if(!strpos($string, " ")) {
			$string = "SELECT * FROM " . $string; 
		}
		preg_match("/(?<=FROM )(`|)(\w*)(`|)/", $string, $matches);
		$this->table = $matches[0];
		
		$framework_global_object_registration[$this->table]++;
		if($framework_global_object_registration[$this->table] > 1) {
			$this->objectUniqueKey = $this->table . $framework_global_object_registration[$this->table];
		} else {
			$this->objectUniqueKey = $this->table;
		}
		//START setup totalRows var
		if(strstr($string, "SELECT") != FALSE){	
			if (isset($_GET[$this->objectUniqueKey . '_totalRows'])) {
				  $this->totalRows = $_GET[$this->objectUniqueKey . '_totalRows'];
			} else {
				  $checkRows = mysql_query($string,$this->db_connect);
				  echo mysql_error($this->db_connect);
				  $this->totalRows = mysql_num_rows($checkRows);
			}
		}
		//END setup totalRows var
		
		//START Limit query and set up record set paging.
		if($limit != NULL) {
			$this->limit = $limit;
			
			$this->curPage = 0;
			if (isset($_GET[$this->objectUniqueKey . '_pageNum'])) {
			  $this->curPage = $_GET[$this->objectUniqueKey . '_pageNum'];
			}
			$startRow = $this->curPage * $limit;
			$qString = sprintf("%s LIMIT %d, %d", $string, $startRow, $limit);
			
			
			$this->totalPages = ceil($this->totalRows/$limit)-1;
			if($this->curPage == 0) { $this->firstPage = TRUE; }
			if($this->curPage >= $this->totalPages) { $this->lastPage = TRUE; }
			
			
			$queryString = "";
			if (!empty($_SERVER['QUERY_STRING'])) {
			  $params = explode("&", $_SERVER['QUERY_STRING']);
			  $newParams = array();
			  foreach ($params as $param) {
				if (stristr($param, $this->objectUniqueKey . "_pageNum") == false && 
					stristr($param, $this->objectUniqueKey . "_totalRows") == false) {
					$newParams[$param] = $param;
				}
			  }
			  if (count($newParams) != 0) {
				$this->queryString = "&" . htmlentities(implode("&", $newParams));
			  }
			}
			$this->queryString = sprintf("&". $this->objectUniqueKey . "_totalRows" . "=%d%s", $this->totalRows, $this->queryString );
			
			
			$gotoPage = $_SERVER["REQUEST_URI"];
			$stripOut = explode("?",$gotoPage);
			$gotoPage = $stripOut[0];
			$this->nextPageHREF = sprintf("%s?" . $this->objectUniqueKey . "_pageNum=%d%s", $gotoPage, min($this->totalPages, $this->curPage + 1), $this->queryString);
			$this->prevPageHREF = sprintf("%s?" . $this->objectUniqueKey . "_pageNum=%d%s", $gotoPage, max(0, $this->curPage - 1), $this->queryString);
			$this->firstPageHREF = sprintf("%s?" . $this->objectUniqueKey . "_pageNum=%d%s", $gotoPage, 0, $this->queryString);
			$this->lastPageHREF = sprintf("%s?" . $this->objectUniqueKey . "_pageNum=%d%s", $gotoPage, $this->totalPages, $this->queryString);
			
			//START Set Up pageHREF array
			for ($i = 0; $i <= $this->totalPages; $i++) {
				$this->pageHREF[$i] = sprintf("%s?" . $this->objectUniqueKey . "_pageNum=%d%s", $gotoPage,$i, $this->queryString);
			}
			//END set Up pageHREF array
			
		} else {
			$qString = $string;
		}
		//END Limit query and set up record set paging. 
		
		//START setup recordCount variable
		$openHTML = "<strong>";
		$closeHTML = "</strong>";
		if($this->limit != "") {
			$this->recordCount = $openHTML . ($startRow + 1) . "$closeHTML to $openHTML" . min($startRow + $this->limit, $this->totalRows) . "$closeHTML of $openHTML" . $this->totalRows . $closeHTML;
		} else { 
			$this->recordCount = 1 . " to " . $this->totalRows . " of " . $this->totalRows;
		}
		//END setupt recordCount variable
		
		global $debug_framework;
		if(isset($debug_framework)) {
			echo '<div style="position:fixed; background:#FFF; border:5px solid #AAA; color:#000; padding:15px; z-index:10000;">' . $qString . '</div>';		
		}
		$this->sql_query_statement = $qString;
		
		$this->query = mysql_query($qString, $db_connect) or die(logSQLerror($qString, "SELECT", mysql_error()));
		$this->row = mysql_fetch_assoc($this->query);
		$this->setColumnNameVariables(TRUE);
		return $this->row;
		
	}
	
	function repeat($while = NULL) {  //If $while is set to anything, then the function assumes you are doing a while loop instead of a do-while loop. 
		if(($this->curRowNumber > 1) && ($while != NULL)) {
			$this->row = mysql_fetch_assoc($this->query);
		} else if ($while == NULL) {
			$this->row = mysql_fetch_assoc($this->query);
		}
		$this->setColumnNameVariables();
		$this->curRowNumber++;
		if(!$this->row) { return FALSE; } else { return TRUE; }
	}
	
	function setColumnNameVariables($firstpass = FALSE) {
		if($firstpass) {
			$this->tableStructureAndInfo = $this->getTableInfo($this->sql_query_statement, $this->db_connect, $this->db_name);
		} 
		foreach ($this->tableStructureAndInfo as $column) {
			$col = $column['col'];
			
			if(isset($this->$col) && ($firstpass)) { 
				//trigger_error("Column name <strong>$col</strong> is a reserved variable by PHP framework and its usage may cause problems with your application.  Either change the column name in your database or refraine from using <strong>\$yourobject->$col</strong><br /> ", E_USER_WARNING);	
			}
			
			$this->$col = $this->row["$col"];
			if($column['primary_key'] == 1) {
				$this->id = $this->row["$col"];
			}		
			
		}
	}
	
	function paging($page = NULL, $displayFirstLast = FALSE, $displayPageNums = FALSE) {
		//Specify a the $page variable if you want to override the default behavior to just page on the current page. 
		if(isset($page)){
			$gotoPage = $page;
		} else {
			$gotoPage = $_SERVER["REQUEST_URI"];
			$stripOut = explode("?",$gotoPage);
			$gotoPage = $stripOut[0];
		}
		
		$rString = "";
		if($displayFirstLast) {
			$rString .= "<a href='" . $this->firstPageHREF . "' class='first_page'>First</a>&nbsp;&nbsp;";
		}
		if (!$this->firstPage) { 
          $rString .= '<a href="' .  sprintf("%s?" . $this->objectUniqueKey . "_pageNum=%d%s", $gotoPage, max(0, $this->curPage - 1), $this->queryString) . '">&lt; Previous</a> &nbsp;&nbsp;';
           }
		if($displayPageNums) {
			if(count($this->pageHREF) > 0) {
				foreach($this->pageHREF as $pageNum => $href) {
					if($pageNum == $this->curPage){ $active = ' active'; } else { $active = ""; }
					$rString .= '<a href="' . $href . '" class="page_num'.$active.'">' . ($pageNum+1) . '</a>&nbsp;';
				}
			}
		}
        if (!$this->lastPage) { 
          $rString .= '&nbsp;&nbsp;<a href="' . sprintf("%s?" . $this->objectUniqueKey . "_pageNum=%d%s", $gotoPage, min($this->totalPages, $this->curPage + 1), $this->queryString) . '">Next &gt;</a>';
           } 
		if($displayFirstLast) {
			$rString .= "&nbsp;&nbsp;<a href='" . $this->lastPageHREF . "' class='last_page'>Last</a>";
		}
		return $rString;
	}
	
	function toArray() {
		do {
			foreach ($this->tableStructureAndInfo as $column) {
				$col = $column['col'];
				$index = $this->id;
				$table[$index][$col] = $this->$col;
			}
		} while($this->repeat());
		return $table;
	}

}

?>