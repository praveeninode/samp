<html>
	<head>
		<title>Preview Selected Image</title>
		<!-- Include jQuery library -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		
		<!-- jQuery read image data and show preview code -->
		<script type="text/javascript">
		$(document).ready(function(){
			$("#image").change(function(){
		        readImageData(this);
		    });
		});

		function readImageData(imgData){
			if (imgData.files && imgData.files[0]) {
	            var readerObj = new FileReader();
	            
	            readerObj.onload = function (element) {
	                $('#preview_img').attr('src', element.target.result);
	            }
	            
	            readerObj.readAsDataURL(imgData.files[0]);
	        }
		}
		</script>
		<style>
			.form_box{width:500px; margin:0 auto; margin-top:10px; margin-bottom: 40px; text-align: left;}
			.fileinput{margin-left: 10px;}
			.preview_box{clear: both; padding: 5px; margin-top: 10px; text-align: center;}
			.preview_box img{max-width: 100%; max-height: 500px;}
		</style>
	</head>
<body>

<?php echo $error;?> 
      <?php echo form_open_multipart('upload/do_upload');?> 
		
      <form action = "" method = "">
<input type="file" id="image" name="image" class="fileinput"/>
<img id='blah' src='#' alt='your image' />
<div class="preview_box">
		        	<img id="preview_img" src=""/>
		        </div>		        
		  



<br /><br />
<input type='submit' value='upload' />

</form>

</body>
</html>