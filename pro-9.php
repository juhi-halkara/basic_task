<?php
if (isset($_POST['Submit'])) {
	$x= $_POST['num1'];
	$y=$_POST['num2'];
	$z=$_POST['num3'];
	if($x>$y && $x>$z){
		echo "first number:",$x,"is greater then two number";
	}
	elseif ($y>$x && $y>$z) {
		echo "second number:",$y,"is greater then other two number";
		}	
		elseif ($z>$x && $z>$y) {
			echo "third number:",$z,"is greater then other two number";
		}
}

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container d-flex justify-content-center m-5">
		<div class="card w-50">
			<form class="card-body" method="POST">
				<h1 class="card-header">Find Largest among three number</h1>
				<label >Enter first number</label>
				<input type="text" name="num1" class="form-control">
				<label >Enter second number</label>
				<input type="text" name="num2" class="form-control">
				<label >Enter three number</label>
				<input type="text" name="num3" class="form-control">
				<button class="btn btn-primary m-4" type="Submit" name="Submit">Submit</button>
			</form>
		</div>
	</div>

</body>
</html>