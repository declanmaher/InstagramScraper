<?php

/**
 * Instagram Image Approval class
 * API Documentation: non
 * 
 * @author Declan Maher
 * @since 7.02.2014
 * @copyright Declan Maher 2014
 * @version 1.0
 * @license BSD http://www.opensource.org/licenses/bsd-license.php
 */

class approvedImages  {  
      /**
   * Get approved images
   *
   *  @return array
   */
    public function get_approved_images() {
        // images saved in txt file
     
     if(is_readable('approvedImages.txt')){
     
     $lines = file("approvedImages.txt");     
     return $lines;   

         }
         
      else{
           throw new Exception("Error: The file for saving images is not readable.");
      } 
          
         
    }
    
      /**
   * Get approved images
   *
   * @param string $savedImages
   * 
   */
    function insert_approved_images($savedImages) {

         if(!empty($savedImages)) { 
            $pieces = explode(",", $savedImages);
            //var_dump($pieces);
         } else   {
             echo 'No images to save.Please go back and save Images';
         }

        if(is_readable('approvedImages.txt')){
       
             if(!empty($pieces)) {        
                 //set file name to be written to
         $file ="approvedImages.txt";  
         // Open the file to get existing content
         $fh = fopen($file, 'w') or die("can't open file");

             foreach($pieces as $currentImage) {          
                 $stringnl = $currentImage . PHP_EOL;// add new line
         // Write the contents back to the file
         fwrite($fh, $stringnl);
            }
            fclose($fh);
             }                      

         }     
               else{
           throw new Exception("Error: The file for saving images is not readable.");
      } 
          
    }    
    
}

?>