<!-- INDEX (START) -->



<?php

	include_once "db/config.php";

?>



<!DOCTYPE html>
<html lang="en-US">
<head>



	<title>Images Store!</title>
	<!-- Title of Index -->



	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge, chrome=1" />
	<meta name="keywords" content="Index Images Store" />
	<!-- Required meta tags -->



	<link type="text/css" rel="stylesheet" media="all" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
	<!-- Css -->



	<link type="text/css" rel="stylesheet" media="all" href="css/style.css" />
	<!-- External css 1 -->



	<style type="text/css" rel="stylesheet" media="all">
	</style>
	<!-- Internal or embedded css -->



</head>
<body>



	<h2 class="hed"><marquee behavior="alternate" direction="right"><span class="fa fa-table" aria-hidden="true"></span> gallery</marquee></h2>



	<h2 class="hed1"></h2>



	<div class="container-fluid">



	<div class="wrapper">



	<button type="button" name="modal_upload_btn" id="modal_upload_btn1" class="btn btn-info btn-lg" value="Upload" data-toggle="modal" data-target="#myModal1">



		<span class="fa fa-upload" aria-hidden="true"></span> Upload



	</button>



	</div>



	<div class="modal fade" name="myModal" id="myModal1">



		<div class="modal-dialog modal-md modal-dialog-scrollable modal-dialog-centered">



			<div class="modal-content">



				<div class="modal-header">



					<h4 class="modal-title"><u>Select Image to Upload:</u></h4>



					<button type="button" name="modal_first_close_btn" id="modal_first_close_btn1" class="close" data-dismiss="modal" value="&times;">



						<span class="icon_one">&times;</span>



					</button>



				</div>



				<div class="modal-body">



					<form name="img_store_form" id="img_store_form1" class="form-horizontal" method="post" action="index1.php" enctype="multipart/form-data">



					<div class="form-group">



					<div class="preview_box" name="preview_img_section" id="preview_img_section1">



					<div class="col-md-12">



						<img src="images/sample_image.png" name="preview_img" id="preview_img1" class="rounded img-thumbnail float-left mx-auto d-block img-fluid preview_img_cls" alt="Preview Image Supposed to be here.," title="Preview of Image" />



					</div>



					<div class="col-md-12">



					<div class="custom-control custom-file img_portion">



						<input type="file" name="photo" id="image" class="custom-file-input form-control file-control-input form-control-file" accept=".jpg, .jpeg, .png, .bmp, .webp., .gif, .svg" />



						<label class="custom-file-label" for="preview_img_section1">

							Upload Image :

						</label>



					</div>



					</div>



					</div>



					</div>



					<div class="form-group wrapper">



					<button type="submit" name="modal_submit_btn" id="modal_submit_btn1" class="btn btn-info btn-lg active" value="Submit">



						<span class="fa fa-sign-in-alt" aria-hidden="true"></span>



					</button>



					</div>



					</form>



				</div>



				<div class="modal-footer">



					<button type="button" name="modal_second_close_btn" id="modal_second_close_btn1" class="btn btn-danger" value="Close" data-dismiss="modal">



						Close



					</button>



				</div>



			</div>



		</div>



	</div>



	</div>



	<div class="container cont">



	<?php



	$myQuery1 = " select a.* from images_collection_table a order by a.img_id desc ";



	$result1 = mysqli_query($con, $myQuery1) or die(mysqli_error($con));



	$row1 = mysqli_num_rows($result1);



	$total1 = $row1;



	//echo "<br /><br />"."Total number of rows are : ",$total1;



	if($row1 >= 1)
	{



	$p = 0;



	while($fetch1 = mysqli_fetch_assoc($result1))
	{



	extract($fetch1);



	$p += 1;	/* $p++ || ++$p */



	?>



	<div class="card1">



		<div class="imgBox">



			<img src="images/<?php echo $fetch1['img_name']; ?>" name="image_<?php echo $p; ?>" id="image_<?php echo $p,"_1"; ?>" class="rounded float-left float-right mx-auto d-block img-fluid" alt="Image <?php echo $p; ?> Supposed to be here.," title="Image <?php echo $p; ?>" />



			<div class="imgBox_subsection">



				<?php echo "Image ".$p; ?>



			</div>



		</div>



		<div class="details">



			<?php echo "Image ".$p; ?>



		</div>



	</div>



	<?php



	}



	}



	?>



	</div>






	<script type="text/javascript" language="javascript" crossorigin="anonymous" src="https://kit.fontawesome.com/2db1707697.js"></script> 
	<!-- Fontawesome link -->
	<script type="text/javascript" language="javascript" crossorigin="anonymous" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
	<!-- Jquery -->
	<script type="text/javascript" language="javascript" crossorigin="anonymous" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
	<!-- Popper.js -->
	<script type="text/javascript" language="javascript" crossorigin="anonymous" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 
	<!-- Bootstrap js -->



	<!-- SCRIPT STARTED HERE -->



	<script type="text/javascript" language="javascript" crossorigin="anonymous" src="js/main_js.js"></script>
	<!-- Main javascript file -->



	<!-- SCRIPT ENDED HERE -->



</body>
</html> 



<!-- INDEX (END) -->