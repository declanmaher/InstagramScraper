<?php 
/*
Saves the Images for Approval ot a text file ( as temporary measure for demo).
*/
session_start(); 
//get header
require 'header.php';
require 'approvedImages.class.php';
?>

	<div style='text-align:center'>
            <p></p>	
<h1>Images Approved!</h1>
<?php
 if(!empty($_POST['savedImages'])) { 
          
        $approvedImages = new approvedImages();
        $approvedImages->insert_approved_images($_POST['savedImages']); 

} else
{
    echo 'No images to save.Please go back and save Images';
}

echo '<p>Images are now approved.</p>';

echo '<a href="viewImages.php"> Click here to view the images you have approved.</a>';

?>
</p>