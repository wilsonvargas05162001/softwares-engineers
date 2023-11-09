<?php
$id=$_GET['updateid'];
if(isset($_POST['post']))
{
$title =$_POST['title'];
$content =$_POST['content'];
require_once "database.php";
$sql = "update 'post' set id=$id, title='$title', content='$content'";
$result = mysqli_query($conn, $sql);
if($result){
header('location:index.php');
}
}
?>
<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Mini Blog</title>
</head>
<body>
<h1 class="miniblog">MINI BLOG</h1>
        <a href="logout.php" class="btn btn-warning">Logout</a>
    <div class="container">
        <h1>Create Post</h1>
	<form action="index.php" method="POST">
	<input type ="text" name="title" placeholder="Enter Title"><br><br>
	<input type ="text" name="content" placeholder="Enter Content"><br><br>
	<input type="submit" value="Post" name="post" class="btn btn-primary">
	</form>
    </div>

</body>
</html>