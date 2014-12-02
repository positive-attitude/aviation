
<?php

    //Connect to the database
    include 'db.php';

    
    try {
        $dbh = new PDO("mysql:host=$hostname;
                       dbname=aviation", $username, $password);
        //echo "Connected to database.";
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    // Collecting data from query string
    $id=$_GET['id'];
    
    // Checking data it is a number or not
    if(!is_numeric($id)){ 
    echo "<h2>Data Error</h2>";
    }
    
    //Get one of rows for $_GET  
    $sql = "SELECT id, definition, img_file, img_alt, audio_file FROM flashcard WHERE id=$id";
    $result = $dbh->query($sql);                foreach ($result as $row) {
            echo $row['id']."<br>"; 
            echo $row['definition']."<br>"; 
            echo $row['img_file']."<br>"; 
            echo $row['img_alt']."<br>";
            echo $row['audio_file']."<br>";
            }
            
        if($row['id']!==NULL)
        {
            //echo "<h2>Data<h2>";
            $previous=$id-1;
            $next=$id+1;
        }else{
            echo "<h2>No Data</h2>";
            $previous="";
            $next="";
        }
        
    
    //$gid = $link->prepare("SELECT MAX(id) FROM flashcard");
    //$gid->execute();
    //$test = $gid->fetch(PDO::FETCH_ASSOC);
    //echo $test;
?>




<html>
    <head>
		<meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/awesomestyle.css">
		<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>        
                               
		<title>Aviation Flash Cards Version 3</title>
        
    </head>

    <body>
                                  
        <h1>Aviation Flash Cards Version 3</h1>
	
	<?php
	include 'nav.php';
	?>
				
        <h5>Please click on the button to reveal the definition.</h5>
        
	
        <button id="buttonFAA">Show Definition</button>
	
        <div class="image1">	
        <img src="images/<?php echo $row['img_file']; ?>" width=500 height=400 alt="<?php echo $row['img_alt']; ?>">
        </div>
	
        <p id="faatext" style="text-align: center;"><?php echo $row['img_alt']; ?></p>
		
		<br>
        <audio controls>
			<source src="<?php echo $row['audio_file']; ?>">
		</audio>
		</br>
		
		<br>
			<div class="center">
			&larr;<a href="
                        <?php
                                
                                if ($previous==NULL || $previous=0){
                                    echo  'aviationHome.html';
                                }else{
                                    echo 'tutorial.php?id='.$previous;
                                } 
                        ?>
                        ">Back</a>&nbsp;&nbsp;&nbsp;
                        
                        <a href="
                        <?php
                                if ($next==NULL){
                                    echo  'aviationHome.html';
                                }else{
                                    echo 'tutorial.php?id='.$next;
                                }
                        ?>
                        ">Next</a>&rarr;
			</div>
		</br>

		<script src="http://code.jquery.com/jquery.js"></script>
                <script>
                    $(document).ready(function() {
                    $("#buttonFAA").click(function() {
                        $("#faatext").show();
                        });
                    });           
                    </script>
		    
    </body>
</html>
