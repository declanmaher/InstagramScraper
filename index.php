<?php 
session_start(); 
//get header
require 'header.php';
?>
	<div style='text-align:center; padding: 100px'>
		

    <?php
if (!empty($_SESSION['userdetails'])) 
{
	header('Location: home.php');
}
      require 'instagram.class.php';
      require 'instagram.config.php';
      
      // Display the login button
      $loginUrl = $instagram->getLoginUrl();
      echo "<a  href=\"$loginUrl\" class=\"button\">Sign in with Instagram</a>";
    ?>

  </body>

</html>