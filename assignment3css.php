/*styles for assignment 3*/
<?php
    header("Content-type: text/css; charset: UTF-8");
		
		$MainColor = "navy";
		$secondaryColor = "gold";
		$tertiaryColor = "red";
		
?>

section>p{
	color: <?php echo $tertiaryColor; ?>;
	font-style: italic;
	font-size:20px;
}

#goodluck{
	display: block;
	color:<?php echo $MainColor; ?>;
	font-size:40px;
	border: 5px solid  <?php echo $secondaryColor; ?>;
}
