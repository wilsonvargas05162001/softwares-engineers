<?php
session_start();
require_once "database.php";
if (isset($_GET['deleteid'])){
$id=$_GET['deleteid'];
$sql="DELETE FROM `post` WHERE id=$id";
$result=mysqli_query($conn,$sql);
if($result){
header('location:index.php');
}
else{
echo "dead";
}
}
?>


