<?php
/*
 * @author: Eric Andre
 * @date: 2014-06-06
 * @description: This script is used to dynamically change the Title and Description metadata based on URI.
 * @dependencies: PHP_Framework
 */

require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/modules/phpframework/basic.php');

class id_metaData
{

	var $title;
	var $uri;
	var $desc;
	var $requestURI;
	var $meta;

	public function __construct($sitename, $sectioning)
	{
		$this->requestURI = $_SERVER['REQUEST_URI'];

		// REMOVE QUERY STRING FROM REQUEST URI
		if (strpos($this->requestURI, '?') > 0)
		{
			$pos = strpos($this->requestURI, '?');
			$this->requestURI = substr($this->requestURI, 0, $pos);
		}

		if(substr($this->requestURI, -1) == '/' && strlen($this->requestURI) > 1)
		{
			$this->requestURI = substr($this->requestURI, 0, -1);
		}

		$meta = new select("SELECT * FROM meta WHERE uri = " . prep($this->requestURI, "text"));


		$this->title = ($meta->title) ? $sitename . $sectioning . $meta->title : $sitename;
		$this->desc = ($meta->description) ? $meta->description : "Default Description";


	} // end constructor

} // end id_MetaData Class

if(!isset($iDesignMeta)) {

	$iDesignMeta = new id_metaData("", " | ");

	define("IDESIGN_TITLE", $iDesignMeta->title);
	define("IDESIGN_DESC", $iDesignMeta->desc);
}

?>
