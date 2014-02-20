InstagramScraper
================

Create an app that will search the instagram API for any images tagged with a hashtag (set in config file). 
An Instagram account with an API Key and Secret is needed.
- further details here: http://instagram.com/developer/  
Requirement to login using oAuth before you can pull Instagram photos from API.

Files


instagram.class.php - this holds the functions that 

approvedImages.class.php - this has functions to save the ApprovedImages and to display the Approved Images. Image paths are saved to a .txt file (called approvedImages.txt).

home.php - This is where user approves images.

ajax.php - returns the next set of images to approve. There is a limit on the number of images returned in one transaction by Instagram.

viewImages.php - displays the approved images 

instagram.config.php - Add the API Key and Secret here. Add tthe search tag.





