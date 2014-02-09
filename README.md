InstagramScraper
================

Create an app that will search the instagram API for any images tagged with the #developer hashtag. 
Need to create an API on Instagram account and get an API Key and Secret 
- further details here: http://instagram.com/developer/  
Requirement to login using oAuth before you can return Instagram photos.

Class Files ----------------------------

instagram.class.php - this holds the functions that 

approvedImages.class.php - this has functions to save the ApprovedImages and to display the Approved Images. Image paths are saved to a .txt file.
--------------------------------------------------------------

home.php - This is where user approves images.

ajax.php - returns the next set of images to approve. There is a limit on the number of images returned in one transaction by Instagram.

viewImages.php - displays the image 

instagram.config.php - enter API Key and Secret. Add tag you would like to search for photos.





