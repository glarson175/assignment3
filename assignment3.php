<?php
	spl_autoload_register(function ($class_name) {
			include $class_name . '.php';
	});
	//$gabriel = new ParentClass("Gabriel", "senior", "breast");
	$gabe = new ChildClass("Gabe", "senior", "Breaststroke");
	//$ = array("Volvo", "BMW", "Toyota");

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>
	
	
	<link rel='stylesheet' type='text/css' href='assignment3css.php' />
</head>
<body>
	
	<section>
		<p>how do i use my php? HOW!?!!?</p>
		<p>php is weird to me</p>
		
		<!--<?= $gabriel;?>-->
		
		<p class = "output"><?= $gabe; ?></p>
		
		<p>But the coaches changed their minds. </p>
		<?= $gabe->updateStroke("Butterfly"); ?>

		<p>So...</p>
		<p class = "output"><?= $gabe; ?></p>
		<p id = "goodluck"> Good luck learning a new stroke focus </p>
		

		
	</section>
</body>
</html>