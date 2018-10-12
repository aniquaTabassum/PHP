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
	.datatypesection{background:#fff;color:#444}
	</style>
</head>
<body>

	<div class = "phpcoding">
		<section class = "headersetting">
			<h2>This is supposed to be some sort of heading</h2>
		</section>		
	
	<section class = "phppart">
		    Different Data Types in PHP
			</br>
			1.String
			</br>
			<hr/>
			String
			<hr/>
			<br/>
			<?php
				$a = 10;
				$b = 5;
				$c = $a+$b;
			    echo "eto kichu install korte keno hobe?";
				echo "<br></br>";
				echo "here a is 10 and b is 5 and their sum is ".$c;
			?>
			</br>
			<hr/>
			2.Float
			<hr/>
			<?php
			$declaringFloat = 2.5;
			var_dump($declaringFloat);
			
			?>
			</br>
			<hr/>
			3.Array
			<hr/>
			<?php
			$declaringArray = array("PHP","Is","weird");
			var_dump($declaringArray);
			
			?>
		</section>
		
		<section class = "footeroption">
			
			<h2> <?php echo "this is a footer I guess?";?></h2>
		</section>
	</div>
</body>
</html>
