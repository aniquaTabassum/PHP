<?php
	$fonts = "verdana";
?>

<!doctype html>
<html>
<head>
	<title> PHP IS WEIRD </title>
	<style>
	 body{font-family: <?php echo $fonts;?>}
	.phpcoding{width:900px; margin: 0 auto; background:#ddd; padding 40px;}
	.headersetting, .footeroption{background:#444; color:#fff; text-align: center;}
	.phppart{min-height:40px;background:#fff;color:#444}
	.headersetting h2, .footeroption h2{margin:0}
	</style>
</head>
<body>

	<div class = "phpcoding">
		<section class = "headersetting">
			
			<h2> this is supposed to be some sort of header</h2>
		<section>
		
		<section class = "phppart">
			<?php
			    echo "eto kichu install korte keno hobe?";
			?>
		</section>
		
		<section class = "footeroption">
			
			<h2> <?php echo "this is a footer I guess?";?></h2>
		</section>
	</div>
</body>
</html>
