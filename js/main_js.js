/**** MAIN JS (START) ****/



/**** ONE (START) ****/



function readImageData(imgData)
{

	$(document).ready(function(){



		if(imgData.files && imgData.files[0])
		{

			let readerObj = new FileReader();



			readerObj.onload = function(element)
			{

				let a = document.getElementById("preview_img1");



				let b = document.createAttribute("src");



				b.value = "element.target.result";



				a.setAttributeNode(b);



				$("img[name = 'preview_img' ]#preview_img1.rounded.img-thumbnail.float-left.mx-auto.d-block.img-fluid.preview_img_cls").prop("src", element.target.result);



				$("img[name = 'preview_img' ]#preview_img1.rounded.img-thumbnail.float-left.mx-auto.d-block.img-fluid.preview_img_cls").attr("src", element.target.result);



				document.getElementById("preview_img1").setAttribute("src", element.target.result);

			}



			readerObj.readAsDataURL(imgData.files[0]);

		} 



	});

}



$(document).ready(function(){

	$("input[type = 'file' ][name = 'photo' ]#image.custom-file-input.form-control.form-control-file.file-control-input").on("change", function(){

		readImageData(this);

	});

});
/* For image */



/**** ONE (END) ****/ 



/**** MAIN JS (END) ****/