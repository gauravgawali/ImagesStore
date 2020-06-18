<?php

	$con = mysqli_connect("127.0.0.1", "root", "root@123", "images_store") or die(mysqli_error($con));



	if($con)
	{

		echo '<script type="text/javascript" language="javascript" crossorigin="anonymous">';
		//echo 'window.alert("Database has been Connected Successfully..!!") ;';
		#echo 'window.location.href = "config.php" ;';
		echo '</script>';

	}
	else if(!$con)
	{

		echo '<script type="text/javascript" language="javascript" crossorigin="anonymous">';
		echo 'window.alert("There is an Error arise while Connecting with Database., Please try again.,") ;';
		//echo 'window.location.href = "config.php" ;';
		echo '</script>';

	}

?>