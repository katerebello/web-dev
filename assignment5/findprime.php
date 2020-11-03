<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<style>
	body{
		border:1px solid black;
		text-align:center;
	}
</style>
<body>
	<?php
	 $num1 = $_GET["num1"];
	 $num2 = $_GET["num2"];
	 echo"<div>";
	 function prime($num){
		if($num == 1){
			return 0;
		}
		for($i=2;$i<$num;$i++){
			
			if(($num%$i)==0){
				return 0;
			}
		}
		return 1;
	 }
	 echo "<h1>Prime numbers between ". $num1 ." and " . $num2 . " are:</h1>";
	 for($i=$num1;$i<=$num2;$i++){
		$ans = prime($i);
	 	if($ans == 1){
	 		echo "<h3>" .$i . "</h3>";
	 	}

	 }
	 echo"</div>";
 ?>
<br>



</body>
</html>
