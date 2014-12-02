<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
        <link rel="stylesheet" type="text/css" href="css/awesomestyle.css">
            
    
	
	<!-- Countdown style -->
        <style>
	
	label{
	    font-size: 16px;
	    font-style: normal;    
	}
	
	#countdown{
	    width:150px;
	    height:150px;
	    background-color:white;
	    padding:15px;
	    margin: 0 auto;
	    text-align: center;
	}
	
	#count{
	    width: inherit;
	    color:black;
	    font-size: 80px;
	    padding-top: 10px;
	}
	
	.seconds{
	font-size: 20px;
	color: #ccc;
	}
	    
	</style>
        <!-- END Countdown style-->
        


    <title>Aviation Flash Cards v2</title>    
    </head>

    <body>
    
    <h1>Aviation Flash Cards Quiz</h1>
    
    <?php
    include 'nav.php';
    ?>
	    
    <!-- HTML countdown-->
    <div id="countdown">
    <span id="count">60</span> <span class="seconds">seconds</span>
    </div>
    <!-- END HTML countdown-->
    
    <form action="confirmation.html" method="get">
        <p><strong>1.	What does FAA stand for?</strong></p>
        <input type="radio" name="q1" id="1" value="1"> <label>Federal Aviation Administration</label><br>
        <input type="radio" name="q1" id="2" value="2"> <label>Federal Way Administration</label><br>
        <input type="radio" name="q1" id="3" value="3"> <label>Federal Aviation Administrator</label>
            
        <br><br>
        <p><strong>2.	What does FBR stand for?</strong></p>
        <input type="radio" name="q2" id="4" value="1"> <label>Federal Aviation Regulation</label><br>
        <input type="radio" name="q2" id="5" value="2"> <label>Federal Avis Administration</label><br>
        <input type="radio" name="q2" id="6" value="3"> <label>Fedex Aviation Administration</label>
        
        <br><br>    
        <p><strong>3.	What does FBO stand for?</strong></p>
        <input type="radio"  name="q3" id="7" value="1"> <label>Flyable Base Operator</label><br>
        <input type="radio"  name="q3" id="8" value="2"> <label>Fixed Base Operator</label><br>
        <input type="radio"  name="q3" id="9" value="3"> <label>Fixed Base Optional</label>            
	<br><br>

    
    <input type="submit" name="btnSubmit" value="Submit your quiz">
    </form>
	
	<br>
	<a href= "aviationHome.html">Home</a><p id="faatext">Federal Aviation Administration(FAA)
	<br>
	
	
    <!-- JavaScript includes -->
    <script type="text/javascript">

	window.onload = function(){
	
	(function(){
	  var counter = 60;
	
	  setInterval(function() {
	    counter--;
	    if (counter >= 0) {
	      span = document.getElementById("count");
	      span.innerHTML = counter;
	    }
	    // Display 'counter' wherever you want to display it.
	    if (counter === 0) {
		alert("Time's up");
		clearInterval(counter);
	    }
	
	  }, 1000);
	
	})();
	
	}
    </script>
    <!-- END JavaScript includes -->
	
	

    
    </body>
</html>