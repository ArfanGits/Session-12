<?php
/*echo "<pre>";
var_dump($_POST);
echo "</pre>";*/

session_start();

$_title = $_POST['title'];
//echo $_title;

//Connect to database
$conn = new PDO("mysql:host=localhost;dbname=ecommerce",
    'root', '');
//set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);
$query = "INSERT INTO `product` (`title`) VALUES (:title);";

$stmt = $conn->prepare($query);
$stmt->bindParam(':title', $_title);
$result = $stmt->execute();

//var_dump($result);

if ($result){
    $_SESSION['message'] = "Product is added successfully";
}else{
    $_SESSION['message'] = "Product is not added";
}


// this is for the location set to store.php to main home page index.php
header("location:index.php");

?>