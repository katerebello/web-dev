<?php 

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "product_catalog";

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
$sql = "INSERT into product(ProductName, ProductId, ProductPrice, ProductDescription)  VALUES('refrigerator', 67891, 30000,'This is a Samsung refrigerator')";

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