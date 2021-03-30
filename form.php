<?php 
session_start();

	include("connection.php");
	


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$html = $_POST['html'];
		$js = $_POST['js'];
		$ajax = $_POST['ajax'];
		$php = $_POST['php'];
        $cgi = $_POST['cgi'];
        $techno = $_POST['techno'];
        $date = $_POST['date'];

		if(!empty($html) && !empty($js) && !empty($ajax) && !empty($php) && !empty($cgi))
		{

			//save to database
			
			$qry = "insert into technos (html,js,ajax,php,cgi) values ('$html','$js','$ajax','$php','$cgi')";

			mysqli_query($con, $qry);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
        
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <p>Set your level on these technologies such that 0 (without knowledge) 5 (expert) and the value -1 corresponds to "unknown level".</p>
        <label for="">HTML</label>
        <input type="number" id="quantity" name="html" min="-1" max="5" >
        <label for="">JAVASCRIPT</label>
        <input type="number" id="quantity" name="js" min="-1" max="5" ><br>
        <label for="">PHP</label>
        <input type="number" id="quantity" name="php" min="-1" max="5" >
        <label for="">AJAX</label>
        <input type="number" id="quantity" name="ajax" min="-1" max="5" >
        <label for="">CGI</label>
        <input type="number" id="quantity" name="cgi" min="-1" max="5" >
       
        <input type="submit" value="Submit">

    </form>
    
</body>
</html>