<html>
<head>
  <meta charset="utf-8" />
  <title>Instagram Approval App</title>
 
  <link rel="stylesheet" href="style.css" type="text/css" media="all" />
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#more').click(function() {
        var tag   = $(this).data('tag'),
            maxid = $(this).data('maxid');
            console.log(maxid);

        $.ajax({
          type: 'GET',
          url: 'ajax.php',
          data: {
            tag: tag,
            max_id: maxid
          },
          dataType: 'json',
          cache: false,
          success: function(data) {
            // Output data
            $.each(data.images, function(i, src) {
              $('ul#photos').append('<li><img src="' + src + '"></li>');
            });

            // Store new maxid
            $('#more').data('maxid', data.next_id);
          }
        });
      });
       
       // if no images selected then don't allow form submit
         $("form:first").submit(function(){
                if(document.getElementById("savedImages").value == '')
                {    
            alert('Please select at least one image before saving.');        
            return false;    }
  });
    // set array for photos approved
      var allVals = [];  
        
    // This function saves the images clicked by user
  $('#photos').on( "click","img", function() {            
           allVals.push($(this).attr('src'));
           $(this).css("border","2px solid red");
            $(this).css('margin', '-2px');       
         $('#savedImages').val(allVals)
});

// reset all the image borders
 $(document).on("click", "input[type='reset']", function(){
     $("#photos img").each(function (i) {
   $(this).css("border","2px solid white");
     $(this).css('margin', '-2px');
});
            
});    

// toggle the help info
$( "#help" ).click(function() {
  $( "p" ).slideToggle( "slow" );
});
      
 });     
 </script>
</head>
<body>
   
    
    <div id="header-container">
	<div id="header">
		<div id="header2">
		
			<div id="navigation">
				<h2 >
					Instagram Approval App
				</h2>
                            
                            <?php  // don't show on login page
                            if(basename($_SERVER['PHP_SELF']) != 'index.php' ) { ?>
				<ul>
					<li id="home-nav"><a href="home.php">Approve Images</a></li>
					<li id="about-nav"><a href="viewImages.php">View Approved Images</a></li>
					<li id="news-nav"><a href='home.php?id=logout'>Logout of App</a></li>
					
				</ul>
                            
                            <?php } ?>
			</div>
		</div>
	</div>
</div>
    
    