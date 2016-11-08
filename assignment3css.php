/*styles for assignment 3*/
<?php
    header("Content-type: text/css; charset: UTF-8");
		
		$MainColor = "navy";
		$secondaryColor = "gold";
		$tertiaryColor = "red";
		
?>
body{
	margin-left:20px;
}
p{
	background-color: <?php echo $MainColor; ?>;
	border: 2px solid  <?php echo $tertiaryColor; ?>;
	color: <?php echo $secondaryColor; ?>;
	font-style: italic;
	font-size:20px;
	padding-left: 10px;
}

#goodluck{
	display: block;
	color:<?php echo $secondaryColor; ?>;
	font-size:40px;
	
}

.output{
	background-color: <?php echo $secondaryColor; ?>;
	border: 2px solid  <?php echo $tertiaryColor; ?>;
	color: <?php echo $tertiaryColor; ?>;
	font-weight: bold;
}
