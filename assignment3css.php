/*styles for assignment 3*/
<?php
    header("Content-type: text/css; charset: UTF-8");
		
		$MainColor = "navy";
		$secondaryColor = "gold";
		$tertiaryColor = "red";
		$colors = array("black", "#1A1A1A", "#333333", "#4D4D4D", "#666666", "#808080", "#999999", "#B3B3B3", "#CCCCCC", "#E5E5E5", "white");
		//for website, want to do cool pictures of pittsbrugh
?>
body{
	margin-left:20px;
	background-color:<?php echo $colors[rand(0,10)]?>;
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
