<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/awesomestyle.css">
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		
	
	
	<!-- jQuery for Nav-->
	<script>
	    $('nav li ul').hide().removeClass('fallback');
	    $('nav li').hover(
	      function () {
		$('ul', this).stop().slideDown(100);
	      },
	      function () {
		$('ul', this).stop().slideUp(100);
	      }
	    );
	</script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<!--END  jQuery for Nav-->
	
	<title>Aviation Flash Cards Version 3</title>
    
    </head>

    <body>
        <h1>Welcome to the Aviation 101</h1>
		 
	    <h2>Introduction to Aviation Slideshow</h2>
		
	    <?php
	    include 'nav.php';
	    ?>
    
       
       	<img src="images/img04.jpg" alt="Federal Aviation Regulation (FAR)"><br><br>
		    
        <p>Welcome to Aviation 101 with George Comollo and congratulations on your path to becoming a Pilot. </p>

        <p>This class is designed as in introduction to Aviation, which will prepare the student for the professional environment.</p>

        <p>Throughout this course, the student will gain knowledge in extensive key terms, and knowledge in regards t various aircraft.</p>

        <p>We encourage you to visit the link below, as it has many useful resources for this course of study.</p>
		
	    <footer>Green River Community College<br>12401 SE 320th St, Auburn, WA 98092<br>
		(253) 833-9111<br> 
		
		
           
    </body>
</html>