

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Listing files from directory</title>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>

<div id="gallery">
	<?php include 'galeria.php'; ?>
</div>

<script type="text/javascript" src="galleria/galleria-1.3.6.min.js">
</script>

<script>
$(document).ready(function(){
	Galleria.loadTheme('galleria/themes/classic/galleria.classic.min.js');
 	$('#gallery').galleria({
 		transition: 'fadeslide',
 		width: 800,
 		height: 600
 	});

});
    
</script>

</body>
</html>