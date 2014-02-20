<?php

//set default exception and error handlers


function defaultExceptionHandler($exception) {
  echo "An exception has occurred: " , $exception->getMessage(), "\n";
}

set_exception_handler('defaultExceptionHandler');


function defaultErrorHandler($errno, $errstr)
  {
  echo "<b>Error:</b> [$errno] $errstr<br>";
  echo "Ending Script";
  die();
  } 
set_error_handler('defaultErrorHandler');
?>