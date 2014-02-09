<?php 
/*
Displays the Images that have been approved.
*/
session_start(); 
//get header
require 'header.php';
require 'approvedImages.class.php';
?>	
<h3> Approved Images</h3>	
</div>		
           
<?php
      $approvedImages = new approvedImages();
     $lines =  $approvedImages->get_approved_images();    
     
foreach ($lines as $line_num => $line) {
       echo '<img src=\''.$line .'\' width="150" style="margin:10px;">';
}

?>
</body>
</html>