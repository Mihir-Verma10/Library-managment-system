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

<h1 style="position:absolute;top:120px;left:600px;font-family:algerian">add new book</h1>
</body>
<form method="post">
<h2 style="position:absolute;top:200px;left:480px;font-family:algerian">book no. :</h2>
<input type="text" name="bno" style="position:absolute;top:220px;left:680px;width:230px;height:30px" required>
<h2 style="position:absolute;top:250px;left:480px;font-family:algerian">book name :</h2>
<input type="text" name="bna" style="position:absolute;top:270px;left:680px;width:230px;height:30px" required>
<h2 style="position:absolute;top:300px;left:480px;font-family:algerian">writter name :</h2>
<input type="text" name="wr" style="position:absolute;top:320px;left:680px;width:230px;height:30px" required>
<input type="submit" value="add book" style="position:absolute;top:380px;left:480px;font-family:algerian;height:30px;width:450px;color:white;background-color:blue;font-size:20px">
</form>
<a href="awork.php"><h1 style="position:absolute;color:black;top:510;left:480"><u>Back</h1>
</html>
<?php
include("connect.php");
$bno=$_POST['bno'];
$bna=$_POST['bna'];
$wr=$_POST['wr'];
$query="insert into book values($bno,'$bna','$wr','');";
$q=mysqli_query($conn,$query);
if($q)
{
	echo"<h3 style='position:absolute;top:420px;left:560px;font-family:algerian;color:green'>new book has added</h3>";

}
else
{
	echo"<h3 style='position:absolute;top:420px;left:560px;font-family:algerian;color:green;width:300px'>please enter information for new book in right manner</h3>";
}
?>
