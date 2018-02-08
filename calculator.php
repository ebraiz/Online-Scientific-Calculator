<?php include('header.php'); ?>
<form data-toggle="validator" class="form-inline" method="post" action="calculator.php" role="form">

<div class="container" style="padding-top:100px;text-align:center;">

  </br><h1 align="center"><b>Arthematical Calculator</b></h1>
    </br></br>
    <div class="form-group">
      <div class="col-sm-4">
        <input type="number" class="form-control input-lg" name="NO1" maxlength="25" pattern="[0-9]{1,25}" data-error="Invalid Values" placeholder="Enter The First Value" required>
      <div class="help-block with-errors"></div>
	  </div></div>
	  
	   <div class="form-group"> 
	   <div class="col-sm-4">
    <select class="form-control input-sm" name="OP">
      <option>+</option>
      <option>-</option>
      <option>*</option>
      <option>/</option>
    </select>
	</div></div>

 <div class="form-group">
      <div class="col-sm-4">
        <input type="number" class="form-control input-lg" name="NO2" maxlength="25" pattern="[0-9]{1,25}" data-error="Invalid Values" placeholder="Enter The Second Value" required>
      <div class="help-block with-errors"></div>
	  </div></div>
	  
	      <div class="form-group">    
      <button type="submit" name="calculate" class="btn btn-info btn-lg">Submit</button>
	  </div>
</div>
</form>
	  
	<?php
	if(isset ($_POST['calculate'])){
	$Number1 = $_POST['NO1'];
	$Operator = $_POST['OP'];
	$Number2 = $_POST['NO2'];
	
	if ($Operator == '+'){
		$Result = $Number1 + $Number2; 
		echo "<script>swal('Your Result is= $Result !');</script>";
		die();
		}		
	
	else if ($Operator == '-'){
		$Result = $Number1 - $Number2; 
		echo "<script>swal('Your Result is= $Result !');</script>";
		die();
		} 
		
	else if ($Operator == '*'){
		$Result = $Number1 * $Number2; 
		echo "<script>swal('Your Result is= $Result !');</script>";
		die();
		} 
		
	else if ($Operator == '/'){
		$Result = $Number1 / $Number2; 
		echo "<script>swal('Your Result is= $Result !');</script>";
		die();
		} 
	}
	?>