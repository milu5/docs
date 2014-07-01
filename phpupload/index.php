<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>php upload form</title>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<style>
		#showuploads { width:200px; margin: 10px auto;}
		#showuploads img { width: 200px;}
		#pic { padding-top: 10px;}
		form { margin: 0 auto; font-family: Arial; width: 320px; background: #eee; border-radius: 10px; border: 1px solid #ccc; padding: 10px; }
	</style>
</head>
<body>

<form id="uploadform" action="upload.php" method="POST" enctype="multipart/form-data">
	<i class="fa fa-upload"></i>
		<label for="pic">Choose a file to upload:</label>
		<input type="file" name="pic" id="pic">
	<input type="submit">
</form>

<div id="showuploads"></div>
<script type="text/javascript">
	$(document).ready(function() {

		$('#showuploads').load('showuploades.php').hide().fadeIn(500);

	});
</script>

</body>
</html>