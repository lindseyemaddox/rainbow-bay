<?php 
/* MYSQL ERROR HANDELING - Common Functions
---------------------------------------------------------------------
Created By:  Garrett Davis on 3-26-2012
*/
function getPOSTvars(){
	if(isset($_POST)){
		foreach($_POST as $k => $v){
		$postVars .= $k . " => " . $v . " \n";
		}
	
	return $postVars;
	}
}

function getGETvars(){
	if(isset($_GET)){
		foreach($_GET as $k => $v){
		$getVars .= $k . " => " . $v . " \n";
		}
	
	return $getVars;
	}
}

?>