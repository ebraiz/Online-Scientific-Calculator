<?php include('header.php'); ?>
<form data-toggle="validator" class="form-inline" method="post" action="conversion.php" role="form">

 <div class="container" style="padding-top:120px;text-align:center;">
  
  <h1><b>Number System Conversion</b></h1>
  </br></br>
    <div class="form-group" style="padding-top:10px;">
      <div class="col-sm-4">
        <input type="number" class="form-control input-lg" name="number" maxlength="10" pattern="[0-9]{1,10}" data-error="Invalid Values" placeholder="Enter The Value" required>
      <div class="help-block with-errors"></div>
	  </div></div>
	  
	   <div class="form-group form-group-lg"> 
	   <div class="col-sm-4">
    <select class="form-control" name="system">
      <option>Binary_To_Decimal_Number</option>
      <option>Decimal_To_Binary_Number</option>
      <option>Decimal_To_Hexadecimal_Number</option>
      <option>Decimal_To_Octal_Number</option>
	  <option>Octal_To_Decimal_Number</option>
	  <option>Hexadecimal_To_Decimal_Number</option>
	  
	</select>
	</div></div>
	  
	      <div class="form-group"> 
      <div class="col-sm-4">		  
      <button type="submit" name="convert" class="btn btn-primary btn-lg">Submit</button>
	  </div></div>
</div>
</form>
	  
	<?php
	
	if(isset ($_POST['convert'])){
		
	$Number = $_POST['number'];
	$System = $_POST['system'];
	
	if ($System == 'Binary_To_Decimal_Number'){
		$Result = bindec($Number); 
		echo "<script>swal('Decimal of Binary ($Number) is: $Result !');</script>";
		die();
		}		
	
	else if ($System == 'Decimal_To_Binary_Number'){
		$Result = decbin($Number); 
		echo "<script>swal('Binary of Decimal($Number) is: $Result !');</script>";
		die();
		} 
		
	else if ($System == 'Decimal_To_Hexadecimal_Number'){
		$Result = dechex($Number); 
		echo "<script>swal('Hexadecimal of Decimal ($Number) is: $Result !');</script>";
		die();
		} 
		
	else if ($System == 'Decimal_To_Octal_Number'){
		$Result = decoct($Number); 
		echo "<script>swal('Octal of Decimal ($Number) is: $Result !');</script>";
		die();
		} 
		
	else if ($System == 'Octal_To_Decimal_Number'){
		$Result = octdec($Number); 
		echo "<script>swal('Decimal of Octal ($Number) is: $Result !');</script>";
		die();
		} 
		
	else if ($System == 'Hexadecimal_To_Decimal_Number'){
		$Result = hexdec($Number); 
		echo "<script>swal('Decimal of Hexadecimal ($Number) is: $Result !');</script>";
		die();
		} 
	
	}
	?>