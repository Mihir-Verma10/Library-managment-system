<html>
<head>
<style>
body{
background-image:url("lms1.jpg");
background-position:center;
background-size:cover;
}
</style>
</head>
<body>
<img src="bg.jpg" style="height:550px;width:500;position:absolute;top:20px;left:450px"></img>
<h1 style="position:absolute;top:130px;left:520px;font-family:algerian;width:400px"> enter the number of book want to delete</h1>
</body>
<form method="post">
<h2 style="position:absolute;top:230px;left:630px;font-family:algerian">book no. :</h2>
<input type="text" name="bno" style="position:absolute;top:300px;left:540px;width:300px;height:30px" required>
<input type="submit" value="remove book" style="position:absolute;top:380px;left:520px;font-family:algerian;height:30px;width:350px;color:white;background-color:blue;font-size:20px">
</form>
<a href="awork.php"><h1 style="position:absolute;color:black;top:510;left:480"><u>Back</h1>
</html>
<?php
include("connect.php");
$bno=$_POST['bno'];

$query1="select * from book where book_no='$bno';";
$q1=mysqli_query($conn,$query1);
$num=mysqli_num_rows($q1);
if($num==1)
{
$query="delete from book where book_no=$bno;";
$q=mysqli_query($conn,$query);
if($q)
{
	echo"<h3 style='position:absolute;top:400px;left:580px;font-family:algerian;color:green'>book has been deleted</h3>" ;

}
else
{
	
	echo"<h3 style='position:absolute;top:420px;left:560px;font-family:algerian;color:green'>this book is not in library</h3>";
}}
else{
	echo"<h3 style='position:absolute;top:420px;left:560px;font-family:algerian;color:green'>this book is not in library</h3>";
}
?>
