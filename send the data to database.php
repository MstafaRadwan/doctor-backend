<?php
	$host = "localhost" ;
	$user = "test" ;
	$pass = "" ;
	$dataBaseName = "register" ;



	$x = mysqli_connect( $host , $user , $pass , $dataBaseName );
	

	$date = date("d / m / Y");
	$time = date("h : i : sa");
	$submit   = $_POST["submit"];
	$Name     = $_POST["name"] ;
	$phone    = $_POST["phone"]  ;
	$complain = $_POST["complain"];
	$comment  = $_POST["comment"];



	if (!$x)
    	die("Connection failed") ;
	$sql = "INSERT INTO reg	VALUES ('','$Name','$phone','$date','$time','$complain','$comment')";



	if ($x->query($sql) === TRUE)
	    echo "New record created successfully";
	else 
	    echo "Error: " . $sql . "<br>" . $x->error;
?>