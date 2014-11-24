<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/awesomestyle.css">

    <title>Aviation: Add content</title>
    <style>
        input{width: 300px;}
        
        button{
            width: 100px;
            height: 50px;
            font-size: 20px;
        }
        
    </style>
</head>

<body>

<h4>Add new flashcard</h4>

<form id="addForm" action="" method="">
    
    <fieldset>
		<legend>Flashcard details</legend>	

                <label>
                        <span>Definition:</span>
                        <input type="text" name="definition" value="" required autofocus><br>
                </label>
                <br>
                
                <label>
                        <span>Image file name:</span>
                        <input type="text" name="img_file" value=""  required autofocus><br>
                </label>
                <br>
                
                <label>
                        <span>Image ALT description:</span>
                        <input type="text" name="img_alt" value="" required><br>
                </label>
                <br>
                
                <label>
                        <span>Audio file name:</span>
                        <input type="email" name="audio_file" value="" required><br>
                </label>
                <br>

<button name="submit" type="submit" id="">Submit</button>

</fieldset>
</form>
	
</body>
</html>