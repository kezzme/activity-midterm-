<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Peys App</title>
</head>
<body>
	
<?php  
			$imgSize = 60;
			$color = '#000000';

			if (isset($_GET['btnProcess'])) {
				$imgSize = $_GET['rangeSize'];
				$color = $_GET['colorBorder'];
			}
		?>

		<form method="get">
			<h2>Peys App</h2>

			<label for="rangeSize">Select Photo Size:</label>
			<input type="range" name="rangeSize" id="rangeSize" min="10" max="100" step="10" value="60">

			<br>

			<label for="colorBorder">Select Border Color:</label>
			<input type="color" name="colorBorder" id="colorBorder">

			<br>

			<button type="submit" name="btnProcess">Process</button>

		</form>

		<br><br>

		<img src="../img/IMG_20220702_091023.jpg" alt="" width="<?php echo $imgSize; ?>%" border="5%" style="color:<?php echo $color; ?>">

</body>
</html>