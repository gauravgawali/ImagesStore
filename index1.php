<!-- INDEX ONE (START) -->



<?php

	include_once "db/config.php";

?> 



<?php



	if((!empty($_POST['modal_submit_btn'])))
	{

	if(isset($_POST['modal_submit_btn']))
	{

	if(is_array($_POST))
	{

	if((gettype($_POST)) === "array")
	{

	if((count($_POST)) === 1)
	{

	if((sizeof($_POST)) === 1)
	{

	if(array_key_exists("modal_submit_btn", $_POST))
	{



		extract($_POST);



		$name = $_FILES['photo']['name'];
		$type = $_FILES['photo']['type'];
		$size = $_FILES['photo']['size'];
		$temp = $_FILES['photo']['tmp_name'];
		$error = $_FILES['photo']['error'];



		if(($name) && ($type) && ($size) && ($temp) && ($error === 0))
		{

			$upload = "images/";
			$imgExt = strtolower(pathinfo($name, PATHINFO_EXTENSION));
			$validExt = array("jpg", "jpeg", "png", "bmp", "webp", "gif", "svg");
			$photo = rand(1000, 1000000).".".$imgExt;
			//unlink($upload.$photo);
			#unlink($upload.$fetch['photo']);
			move_uploaded_file($temp, $upload.$photo);

		}



		$myQuery1 = " insert into images_collection_table (img_name, img_date) values ('".$photo."', now()) ";



		$result1 = mysqli_query($con, $myQuery1) or die(mysqli_error($con));



		if($result1)
		{

			echo '<script type="text/javascript" language="javascript" crossorigin="anonymous">';
			echo 'window.alert("Image has been Added Successfully..!!") ;';
			echo 'window.location.href = "index.php" ;';
			echo '</script>';

		}
		else if(!$result1)
		{

			echo '<script type="text/javascript" language="javascript" crossorigin="anonymous">';
			echo 'window.alert("There is an Error arise while Adding an Image into Database., Please try again.,") ;';
			echo 'window.location.href = "index.php" ;';
			echo '</script>';

		}



	}

	}

	}

	}

	}

	}

	}



?>



<!-- INDEX ONE (END) -->