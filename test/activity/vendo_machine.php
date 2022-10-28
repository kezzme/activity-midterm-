<?php 
	$sodaArr = array('Coke' => 15, 'Sprite' => 20, "Royal" => 20, 'Pepsi' => 15, 'Mountain Dew' => 20);
	$sizesArr = array('Regular' => 'Regular', 'Up-size (add ₱5)' => 'Up-size', 'Jumbo (add ₱10)' => 'Jumbo');
?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Vendo Machine</title>
</head>
<body>

	<h3>Vendo Machine</h3>
	<form method="post">
			
			<!------------------Products------------------>
			<fieldset style="width: 370px;">
				
				<legend>Products:</legend>
				<?php  
					if(isset($sodaArr)){
						foreach ($sodaArr as $sodaKey => $sodaValue) {
							echo "<input type='checkbox' name='sodaCheck[". $sodaKey ."]' value='". $sodaValue ."'>
							<label>". $sodaKey." - ₱". $sodaValue ."</label><br>";
						}
					}
				?>
				
			</fieldset>

			<!------------------Options------------------>
			<fieldset style="display: inline-block;">
				
				<legend>Options:</legend>
				<label for="sizeSelect">Size</label>
				<select name="sizeSelect" id="sizeSelect">
					
					<?php  
						if (isset($sizesArr)) {
							foreach ($sizesArr as $sizesKey => $sizesValue) {
								echo "<option value='". $sizesValue ."'>". $sizesKey ."</option>";
							}
						}
					?>
				</select>

				<!------------------Options------------------>				
				<label for="numQuantity">Quantity</label>
				<input type="number" name="numQuantity" id="numQuantity" min="0" max="100" value="0">

				<button type="submit" name="btnSubmit">Check Out</button>

			</fieldset>

		</form>

		<?php 		
			if (isset($_POST['btnSubmit'])) {

				if (isset($_POST['sizeSelect']) && isset($_POST['sodaCheck'])) {

					$quantity = $_POST['numQuantity'];
					$size = $_POST['sizeSelect'];
					$pop = $_POST['sodaCheck'];

					/*---------------Singular and Plural---------------*/
					if ($quantity == 1) {
						$term = "piece";
					}
					else{
						$term = "pieces";
					}

					/*<!---------------Add-ons--------------->*/
					if ($size == 'Regular') {
						$addOn = 0;
					}
					elseif ($size == 'Up-size') {
						$addOn = 5;
					}
					elseif ($size == 'Jumbo') {
						$addOn = 10;
					}

					echo "<hr><h3>Purchase Summary: </h3>";

					foreach ($pop as $popKey => $popValue) {
						echo 
						"<ul>
							<li>". $quantity ." ". $term ." of ". $size ." ". $popKey ." amounting to ₱". $totalVal = 
							intval($popValue) * intval($quantity) + ($addOn * intval($quantity)) .
							"</li>
						</ul>";
					}

					$itemsTotal = ($quantity * sizeof($pop));
					$grandTotal = (array_sum($pop) + $addOn * $quantity) * $quantity;

					echo "<label><b>Total number of items: </label>". $itemsTotal ."<br>";
					echo "<label><b>Total amount: </label>". $grandTotal;

				}
			
				else {
					echo "<hr>No selected product. Please try again.";
				}
			}
			

		?>

	</body>
</html>