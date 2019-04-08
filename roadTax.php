<?php
  /******************Author:Solomon****************/
  /*****************Description: the program *****/
  /***************** calculates Road Tax**********/
  /****************use of radio buttons for forms*/
  /****************Practice Test ****************/
  /***************dd-mm-yy:03-04-19 ************/
?>


<?php
		if(isset($_POST['submit']))
		{
				$weight = $_POST['weight'];

				//takes out the error message
			 	$vehicleType = isset($_POST['vehicle']) && !empty($_POST['vehicle']) ? $_POST['vehicle']: '';

			if(empty($weight) && empty($vehicleType))// check if both fields are empty
			{//start

					echo "Enter the weight";
					echo '<br>';
					echo "You have not filled in the type of vehicle choose one";
					echo '<br>';
			}//ending	
					
			else if (empty($weight))//check if the weight is just empty only 
			{

					echo "Enter the weight";
			}


			else if(empty($vehicleType))//check if the VehicleType is just empty only
			{
							

						echo "You have not filled in the type of vehicle choose one";
						
			}	

			else

			{//start of else	

					if ($vehicleType == "motorcycle") //check if motorcycle is clicked, then sum up the road tax
					{

					
						$sum = $weight * 0.60;//stores the amount of tax
						echo "The amount of road tax to pay is &euro; ".$sum.",-";

					}


					elseif ($vehicleType == "car")//check if car is clicked, then sum up the road tax
					{

						$sum = $weight * 0.55;//stores the amount of tax
						echo "The amount of road tax to pay is &euro; ".$sum.",-";


					}

					elseif ($vehicleType == "trunk") //check if trunk is clicked, then sum up the road tax
					{

						$sum = $weight * 0.50;//stores the amount of tax
						echo "The amount of road tax to pay is &euro; ".$sum.",-";


					}

					else
					{

						echo "error";

					}

					
			}//end of else	

		}	
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Road Tax Calculator</title>
	</head>

	<body>
		<h2>Calculate Road Tax</h2>
		<hr>

		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

			<p>
				Enter the weight of the vehicle in kilograms <br/> <br/>
				<input type="text" name="weight">
			</p>

				<input type="radio" name="vehicle" value="motorcycle">Motorcycle <br/>
				<input type="radio" name="vehicle" value="car">Car <br/>
				<input type="radio" name="vehicle" value="trunk">Trunk <br/>
				
				<input type="submit" name="submit" value="submit">

		</form>

		


	</body>
</html>