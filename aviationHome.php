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
	    
	    	
		
	    <form>
			Name: 
		<input type="text" name="Name">
		<input type="submit" value="Submit">
		</form> 
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
		$("form").submit(function(){
			alert("Welcome to Aviation Flash Cards");
			});
		});
	    </script>
    
       
       	<img src="images/img04.jpg" alt="Federal Aviation Regulation (FAR)"><br><br>
		    
        
		
	    <footer>Green River Community College<br>12401 SE 320th St, Auburn, WA 98092<br>
		(253) 833-9111<br> 
		
		
           
    </body>
</html>