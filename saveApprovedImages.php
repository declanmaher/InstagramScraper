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
<<<<<<< HEAD
<h3>Images Approved!</h3>

=======
<h3>Images Approved</h3>
>>>>>>> f1b143821875c0370200f046e2e84e7545a90e45
<?php
 if(!empty($_POST['savedImages'])) { 
          
        $approvedImages = new approvedImages();        
        
        try{
        $approvedImages->insert_approved_images($_POST['savedImages']); 
        }
        catch(Exception $e){
            
            echo 'Error occurred:'. $e->getMessage();
            die();
        }        

} else
{
    echo 'No images to save.Please go back and save Images';
}

echo '<p>Images are now approved.</p>';

echo '<a href="viewImages.php"> Click here to view the images you have approved.</a>';

?>
</p>
