<?php include('header.php'); ?>
<form data-toggle="validator" class="form-inline" method="post" action="trigonometry.php" role="form">

<div class="container" style="padding-top:100px;text-align:center;">
  </br><h1 align="center"><b>Trigonometric Calculator</b></h1>
  </br></br>
    <div class="form-group" style="padding-top:10px;">
      <div class="col-sm-4">
        <input type="number" class="form-control input-lg" name="trignumber" maxlength="10" pattern="[0-9]{1,10}" data-error="Invalid Values" placeholder="Enter The Value" required>
      <div class="help-block with-errors"></div>
	  </div></div>
	  
	   <div class="form-group form-group-lg"> 
	   <div class="col-sm-4">
    <select class="form-control" name="trig">
	  <option>Cosine</option>
	  <option>Sine</option>
	  <option>Tangent</option>
      <option>Arc_cosine</option>
      <option>Arc_sine</option>
      <option>Arc_tangent</option>
	  <option>Hyperbolic_cosine</option>
	  <option>Hyperbolic_sine</option>
	  <option>Hyperbolic_tangent</option>
      <option>Inverse_hyperbolic_cosine</option>
	  <option>Inverse_hyperbolic_sine</option>
	  <option>Inverse_hyperbolic_tangent</option>
	  <option>Square_root</option>
	  <option>Natural_logarithm</option>
	  <option>Base-10_logarithm</option>
	  <option>Absolute_value</option>
	  <option>Exponential_expression</option>
	  
	</select>
	</div></div>
	  
	      <div class="form-group"> 
      <div class="col-sm-4">		  
      <button type="submit" name="evaluate" class="btn btn-primary btn-lg">Submit</button>
	  </div></div>
</div>
</form>
	  
	<?php
	
	if(isset ($_POST['evaluate'])){
	$Number = $_POST['trignumber'];
	$Trig = $_POST['trig'];
	
	if ($Trig == 'Cosine'){
		$Result = cos($Number); 
		echo "<script>swal('Cosine ($Number) = $Result !');</script>";
		die();
		}		
	
	else if ($Trig == 'Sine'){
		$Result = sin($Number); 
		echo "<script>swal('Sine ($Number) = $Result !');</script>";
		die();
		} 
		
	else if ($Trig == 'Tangent'){
		$Result = tan($Number); 
		echo "<script>swal('Tangent ($Number) = $Result !');</script>";
		die();
		} 
		
	else if ($Trig == 'Arc_cosine'){
		$Result = acos($Number); 
		echo "<script>swal('Arc_cosine ($Number) = $Result !');</script>";
		die();
		} 
		
	else if ($Trig == 'Arc_sine'){
		$Result = asin($Number); 
		echo "<script>swal('Arc_sine ($Number) = $Result !');</script>";
		die();
		} 
		
	else if ($Trig == 'Arc_tangent'){
		$Result = atan($Number); 
		echo "<script>swal('Arc_tangent ($Number) = $Result !');</script>";
		die();
		} 
	
	else if ($Trig == 'Hyperbolic_cosine'){
		$Result = cosh($Number); 
		echo "<script>swal('Hyperbolic_cosine ($Number) = $Result !');</script>";
		die();
		} 
		
		else if ($Trig == 'Hyperbolic_sine'){
		$Result = sinh($Number); 
		echo "<script>swal('Hyperbolic_sine ($Number) = $Result !');</script>";
		die();
		} 
		
		else if ($Trig == 'Hyperbolic_tangent'){
		$Result = tanh($Number); 
		echo "<script>swal('Hyperbolic_tangent ($Number) = $Result !');</script>";
		die();
		} 
	
	else if ($Trig == 'Inverse_hyperbolic_cosine'){
		$Result = acosh($Number); 
		echo "<script>swal('Inverse_hyperbolic_cosine ($Number) = $Result !');</script>";
		die();
		} 
		
		else if ($Trig == 'Inverse_hyperbolic_sine'){
		$Result = asinh($Number); 
		echo "<script>swal('Inverse_hyperbolic_sine ($Number) = $Result !');</script>";
		die();
		} 
		
		else if ($Trig == 'Inverse_hyperbolic_tangent'){
		$Result = atanh($Number); 
		echo "<script>swal('Inverse_hyperbolic_tangent ($Number) = $Result !');</script>";
		die();
		} 
		
		else if ($Trig == 'Square_root'){
		$Result = sqrt($Number); 
		echo "<script>swal('Square_root ($Number) = $Result !');</script>";
		die();
		} 
		
		else if ($Trig == 'Natural_logarithm'){
		$Result = log($Number); 
		echo "<script>swal('Natural_logarithm ($Number) = $Result !');</script>";
		die();
		} 
		
		else if ($Trig == 'Base-10_logarithm'){
		$Result = log10($Number); 
		echo "<script>swal('Base-10_logarithm ($Number) = $Result !');</script>";
		die();
		}

		else if ($Trig == 'Absolute_value'){
		$Result = abs($Number); 
		echo "<script>swal('Absolute_value ($Number) = $Result !');</script>";
		die();
		} 

		else if ($Trig == 'Exponential_expression'){
		$Result = pow($Number); 
		echo "<script>swal('Exponential_expression ($Number) = $Result !');</script>";
		die();
		} 		
	}
	?>