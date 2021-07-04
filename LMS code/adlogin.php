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
<img src="bg.jpg" style="height:550px;width:500;position:absolute;top:20px;left:450px"></img>

<form method="POST">
<h1 style="position:absolute;top:130px;left:540px;font-family:'algerian';color:blue">LOGIN FORM FOR ADMIN</h1>
<h1 style="position:absolute;top:190px;color:green;left:500px">ADMIN ID</h1>
<input type="text" name="id" placeholder="enter your id here"style="position:absolute;top:260px;left:500px;height:35px;width:400px;border-width:2px" required>
<h1 style="position:absolute;top:280px;color:green;left:500px">PASSWORD</h1>
<input type="password" name="pwd" placeholder="enter your password" style="border-width:2px;position:absolute;top:345px;left:500px;height:35px;width:400px">
<input type="submit" value="LOGIN" style="position:absolute;top:410px;left:500px;height:40px;width:400px;color:white;background-color:blue;font-size:20px;font-family:algerian" required>
</form>
<a href="front.php"><h1 style="position:absolute;color:black;top:510;left:480"><u>Back</h1>
<body>
</body>
</html>
<?php
include("connect.php");
$id=$_POST['id'];
$password=$_POST['pwd'];
if(empty($password) and empty($id))
{
	echo"<h3 style='color:red;position:absolute;left:500px;top:450px'><u>"."PLESAE ENTER ID AND PASSWORD"."</u></h3>";
}
else
{
$query="select * from admin where id='$id' and password='$password';";
$q=mysqli_query($conn,$query);
$num=mysqli_num_rows($q);
if($num==1)
{
	header('location:awork.php');
}
else
{
	echo"<h3 style='color:red;position:absolute;left:500;top:450px'><u>"."PLEASE ENTER CORRECT ID AND PASSWORD"."</u></h3>";
}
}
?>