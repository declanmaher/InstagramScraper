<?php

$instagram = new Instagram(array(
'apiKey' => '[Client Id or Api Key from Instagram]',
'apiSecret' => '[ Api Secret from Instagram]',    
 'tagtoSearchFor' => '[ enter the tag you wish to search for e.g. developer]',  
'apiCallback' => '[path to these files]/success.php' // Callback URL
));
?>
