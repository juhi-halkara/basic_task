<?php
if(isset($_POST['Submit'])){
$n = $_POST['num1'];
for($i=1; $i<=10; $i++)
   {
	echo $n , " * " , $i ," = " , $n * $i , "<br>";  
                
}

}

//echo "table is" $num "*" $i = $n;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
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
				<h1 class="card-header">Table Program</h1>
				<label class="form-control">Enter a number whose table you want to print</label>
				<input type="text" name="num1" class="form-control">
				
				<button class="btn btn-primary m-4" type="Submit" name="Submit">Submit</button>
			</form>
		</div>
	</div>

</body>
</html>