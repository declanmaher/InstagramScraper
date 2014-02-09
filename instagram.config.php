<?php

$instagram = new Instagram(array(
'apiKey' => 'f289f0954ec047a99f564da06269c94e',
'apiSecret' => '88af7b71dd6341b5a6d4decd61c2fe2d',    
 'tagtoSearchFor' => 'developer',  
'apiCallback' => 'http://beechillpark.com/instagramScraper/success.php' // Callback URL
));
?>