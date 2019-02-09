<?php
	
	$host = "localhost" ;
	$user = "test" ;
	$pass = "" ;
	$dataBaseName = "register" ;

	$x = mysqli_connect( $host , $user , $pass , $dataBaseName );


	// ID 	name 	phone 	date 	time 	complain 	comment


	$y = $x->query("SELECT * FROM reg");
	$names = array();
	$times = array();
	$phones = array();
	$dates = array();
	$comp = array();
	$comm = array();
	$id = 0;



	$read = array();



	if ($y->num_rows > 0)
	{
		while($row = $y->fetch_array())
	   	{
	       	$names[$row['name']] = $id++   ;
	       	array_push($phones, $row["phone"] ) ;
	       	array_push($dates, $row["date"] ) ;
	       	array_push($times, $row["time"] ) ;
	       	array_push($comp, $row["complain"] ) ;
	       	array_push($comm, $row["comment"] ) ;
	       	array_push($read, '0' ) ;
		}
	}

	foreach ($names as $key => $value)
	{
		$st = str_replace(" ", "_", $key);
		echo '<form method="post">
    			<input type="submit" name='.$st.' id='.$st.' value='.$st.' /><br/>
				</form>';
		if(array_key_exists($st,$_POST))
		{
   		
			echo "the name is : ".$key . " 		the phone number is : " . $phones[$value] . "		at time : " . $times[$value] . " 		in date : " . $dates[$value] . " 		compalin : " . $comp[$value] . "		comment :" . $comm[$value]. "<br><br><br>"  ;
			$read[$value] = '1' ;
		}
	}
	$theRepeated =  array_count_values($read) ;
	$theUnread = $theRepeated['0'] ;
	echo "<center>You have ".$theUnread . " patient you didn't see</center>";
?>