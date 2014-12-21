<? 
$htaccessTestingCode = 
"
#START_PHP_FRAMEWORK
php_flag display_errors on
<FilesMatch \"\.(html|htm|js|css)$\">
FileETag None
<IfModule mod_headers.c>
Header unset ETag
Header set Cache-Control \"max-age=0, no-cache, no-store, must-revalidate\"
Header set Pragma \"no-cache\"
Header set Expires \"Wed, 11 Jan 1984 05:00:00 GMT\"
</IfModule>
</FilesMatch>
#END_PHP_FRAMEWORK";
$htaccessFile = $_SERVER['DOCUMENT_ROOT'] .'/.htaccess';

function checkHTAccessForRules() {
	global $htaccessTestingCode, $htaccessFile;
	$current = file_get_contents($htaccessFile);
	
	$pattern = "/\#START_PHP_FRAMEWORK(.*)\#END_PHP_FRAMEWORK/s";
	if(!preg_match($pattern, $current, $matches)) {
		return FALSE;
	} else {
		return TRUE;
	}
}

function testingMode_On() {
   global $htaccessTestingCode, $htaccessFile;
 
   if(!checkHTAccessForRules()){
	   $fp = fopen($htaccessFile, 'a+');
	   fwrite($fp, "\n\n" . $htaccessTestingCode);
	   fclose($fp);
   }
}
function testingMode_Off() {
	global $htaccessTestingCode, $htaccessFile;
	$current = file_get_contents($htaccessFile);
	
	if(checkHTAccessForRules()){
	   $new = str_replace($htaccessTestingCode, "", $current);
	   $fp = fopen($htaccessFile, 'w+');
	   fwrite($fp, $new);
	   fclose($fp);
   }
}
?>