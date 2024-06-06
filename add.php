<?php

$name = $_POST['name'];
$age = $_POST['age'];
$class = $_POST['class'];

$conn = mysqli_connect('localhost', 'root', '', 'School1') or die('connection not');


$insert = "INSERT INTO student (name,age,class) VALUES ('{$name}',$age,'{$class}')";

mysqli_query($conn, $insert);
header("Location: http://localhost/php_intermediate/get_data.php ")


?>