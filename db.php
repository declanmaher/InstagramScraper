<?php

/*Your Server Name:	mulroyphotography.netfirmsmysql.com
Database Name:	dreamtimetheatre
Database Username:	dreamtimetheatre
Database Password:	******** */

define('DB_SERVER', 'mulroyphotography.netfirmsmysql.com');
define('DB_USERNAME', 'dreamtimetheatre');
define('DB_PASSWORD', 'fidelmas99');
define('DB_DATABASE', 'dreamtimetheatre');
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$database = mysql_select_db(DB_DATABASE) or die(mysql_error());
?>
