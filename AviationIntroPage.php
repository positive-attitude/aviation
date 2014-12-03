<?php

include 'nav.php';

<!DOCTYPE html>

<html>
    
<head>
    
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" type="text/css" href="awesomestyle.css"><link rel="stylesheet" type="text/css" href="css/awesomestyle.css">
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	
	<!-- New Style for Nav-->
	<style>
	    nav {background:#FFF;float:left; width:100%; height:100%; margin-bottom: 25px;} 
	    nav ul {text-align:center;}
	    nav ul li {float:left;display:inline;}
	    nav ul li:hover {background:#E6E6E6;}
	    nav ul li a {display:block;padding:10px 20px;color:#444;}
	    nav ul li ul {position:absolute;width:250px;background:#FFF;}
	    nav ul li ul li {width:250px;}
	    nav ul li ul li a {display:block;padding:10px 10px;color:#444;}
	    nav ul li ul li:hover a {background:#F7F7F7;}
	    nav ul li ul.fallback {display:none;}
	    nav ul li:hover ul.fallback {display:block;}	   
	</style>
        <!-- END New Style for Nav-->
		
	
	
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
		
	    
	    <!-- New Nav-->
	    <nav>
	    <ul>
	      <li><a href="#">Key Terms</a>
	      	<ul class="fallback">
		  <a href="revised1.html">Federal Aviation Administration</a>
		  <li><a href="revised2.html">Federal Aviation Regulation</a></li>
		  <li><a href="revised3.html">Fixed Base Operator</a></li>
		  <li><a href="quiz.html">Key Terms Quiz</a></li>
		</ul>
	      </li>
	      <li>
		<a href="#">Section 2</a>
		<ul class="fallback">
		  <li><a href="#">Sub-Link mock</a></li>
		  <li><a href="#">Sub-Link mock</a></li>
		  <li><a href="#">Sub-Link mock</a></li>
		  <li><a href="#">Section 2 Quiz</a></li>
		</ul>
	      </li>
	      <li>
		<a href="#">Section 3</a>
		<ul class="fallback">
		  <a href="#">Sub-Link mock</a>
		  <li><a href="#">Sub-Link mock</a></li>
		  <li><a href="#">Sub-Link mock</a></li>
		  <li><a href="#">Section 3 Quiz</a></li>
		</ul>
	      </li>
	      
	      <li><a href="contact.html">Contact</a></li>
	    </ul>
		</ul>
	      <a href="AviationIntroPage.html">Mission Statement</a>
	    </ul>
	  </nav>
	<!-- END New Nav-->
        
    <title>Welcome to Aviation 101</title>
    
</head>

<body>
    
    <h1>Aviation 101</h1>
    
    <p>Welcome to Aviation 101 with George Comollo and congratulations on your path to becoming a Pilot.</p></br>
    
    </p>This class is designed as in introduction to Aviation, which will prepare the student for the professional environment.</p></br>
	
	</p>Throughout this course, the student will gain knowledge in extensive key terms, and knowledge in regards t various aircraft.</p></br>
	
	</p>We encourage you to visit the link below, as it has many useful resources for this course of study.</p></br>
	
	<p>
	
	<div class="center">	
    <a href="http://www.greenriver.edu/academics/areas-of-study/details/aviation-technology.htm">*Additional Aviation Information*</a></br>	
	
    <br>
	
	<a href= "revised1.html">Home</a>
    </br></br></br>
	</div>
	

</body>

</html>
?>
