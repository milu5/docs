

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Listing files from directory</title>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="http://malsup.github.io/jquery.cycle.all.js"></script>
</head>
<body>

<div id="rotator"><?php include 'rotator.php'; ?></div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#rotator').cycle({
			fx: 'fade',
			timeout: 1000,
			pause: 1
		});
	});
</script>
</body>
</html>