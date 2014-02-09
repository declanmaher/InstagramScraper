<!DOCTYPE html>
<?php
/*
Shows the Images for Approval and allows User to select Images for approval
*/
session_start();

// logut user 
if($_GET['id']=='logout')
{
unset($_SESSION['userdetails']);
session_destroy();	
}
require 'db.php';
require 'instagram.class.php';
require 'instagram.config.php';
require 'approvedImages.class.php';

if (!empty($_SESSION['userdetails'])) 
{
$data=$_SESSION['userdetails'];

// Store user access token
$instagram->setAccessToken($data);  
}
else
{	
header('Location: index.php');
}

//get header
require 'header.php';
     // Get the tag to search for - set in config file
$tag = $instagram->getTagtoSearchFor();


?>
<div class="main"> 
    <h3>Approve Photos <?php echo '(#'.$tag. ')';
    echo '<input type="button" id="help" value="?">'; ?></h3>  
    <p style="display: none">
        Click on images below to select as an Approved Image. Click on the 'Load More...'button to view more images.<br>
        When you have selected all your approved images, click on 'Save Approved Images' button to save.<br>        
    You can clear all the selected images by clicking the 'Reset' button.
    </p>
    
    <!--- When User clicks on the images the image src is saved to this textarea. 
    Form is then submitted to save approved Images. --->
    <form action="saveApprovedImages.php" method="post">
        <textarea hidden=""  name="savedImages" id="savedImages"></textarea>
        <input type="submit" class="button" value="Save Approved Images">
        <input type="reset" class="button" id="reset" value="Reset to clear all Images">
         
        
    </form>
    
<?php


    // Get recently tagged media
    $media = $instagram->getTagMedia($tag);

    // Display first set of results (future sets displayed with ajax)
    echo '<ul id="photos">';

    foreach ($media->data as $data) 
    {
        echo '<li><img id="image" src="'.$data->images->thumbnail->url.'">';
          //echo "<input type=\"checkbox\" name=\"image[]\" value=\"{$data->images->thumbnail->url}\"></li>";
    }
    echo '</ul>';

    // Show 'load more' button
    echo '<br><button id="more" data-maxid="'.$media->pagination->next_max_id.'" data-tag="'.$tag.'">Load more ...</button>';
?>
</div>
</body>
</html>