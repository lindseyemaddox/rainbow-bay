<?php 

defined('DB_USER') ? 	 null : define("DB_USER", "hp_user");
defined('DB_PASS') ?     null : define("DB_PASS", "mTA}t3B1J|QJmv3LliwR7e)i");
//defined('DB_HOSTNAME') ? null : define("DB_HOSTNAME", "50.57.80.98");
defined('DB_HOSTNAME') ? null : define("DB_HOSTNAME", "50.57.80.98");

// CHECK FOR PROD VS STAGING ENVIRONMENT AND LOAD DATABASE
if (isset($key) && $key == 'DEB_NWn+=rcttayi()QzLcvm.') {
	defined('DB_NAME') ?     null : define("DB_NAME", "hearingplanet_hp");
} elseif ( ($_SERVER['HTTP_HOST'] == '50.57.47.249') || ($_SERVER['HTTP_HOST'] == 'm.hearingplanet.com')) {
	defined('DB_NAME') ?     null : define("DB_NAME", "hearingplanet_hp");
} else {
	defined('DB_NAME') ?     null : define("DB_NAME", "hearingplanet_hp_staging");
}
global $f_db;
$f_db = mysql_pconnect(DB_HOSTNAME, DB_USER, DB_PASS) or trigger_error(mysql_error(),E_USER_ERROR);
