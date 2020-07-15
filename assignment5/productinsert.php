<?php 

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "product_catalog";


$pname = $_GET["pname"];
$pid = $_GET["pid"];
$pprice = $_GET["pprice"];
$pdes = $_GET["pdes"];

//create connection
$conn = mysqli_connect($servername, $username, $password, $databasename);

//check connection
if(! $conn){
	die("connection failed:". mysqli_connect_error());
}
else{
	echo "connection successfull";
}

//query for creating product table in the Db
$sql = "INSERT into product(ProductName, ProductId, ProductPrice, ProductDescription)  VALUES('$pname', $pid , $pprice, '$pdes')";

//execute the query
if(mysqli_query($conn, $sql)){
	echo "inserted succesfully";
}
else{
	echo "Error:" . $sql ."<br>" . mysqli_error($conn);
}
/*
//query for deleting a row from the table named product
$sql = "DELETE from product WHERE ProductName =  'refrigerator' ";
if(mysqli_query($conn, $sql)){
	echo "deleted succesfully";
}
else{
	echo "Error:" . $sql ."<br>" . mysqli_error($conn);
}*/




 ?>

