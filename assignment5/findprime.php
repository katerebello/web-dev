<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
	<?php
	 $num1 = $_GET["num1"];
	 $num2 = $_GET["num2"];

	 echo "<h1>Prime numbers between ". $num1 ." and " . $num2 . " are:</h1>";
	 for($i=$num1;$i<=$num2;$i++){
	 	if(($i%2) != 0){
	 		if($i != 1){
	 			echo "<h2>" .$i . "</h2>";
	 		}
	 	}

	 }
 ?>
<br>



</body>
</html>
