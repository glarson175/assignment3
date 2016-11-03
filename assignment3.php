<?php
	spl_autoload_register(function ($class_name) {
			include $class_name . '.php';
	});

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>
	
	<link rel="stylesheet" href="assignment3.css">
</head>
<body>
	
	<section>
		<p>how do i use my php? HOW!?!!?</p>
		<p>I'm gabe, and php is weird to me</p>
		<?php
		echo "HELP ME!";
		?>
		
	</section>
</body>
</html>