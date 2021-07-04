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
<h1 style="position:absolute;top:130px;left:540px;font-family:'algerian';color:blue">LOGIN FORM FOR USER</h1>
<h1 style="position:absolute;top:190px;color:green;left:500px">EMAIL ID</h1>
<input type="text" name="ei" placeholder="enter your email id here"style="position:absolute;top:260px;left:500px;height:35px;width:400px;border-width:2px" required>
<h1 style="position:absolute;top:280px;color:green;left:500px">PASSWORD</h1>
<input type="password" name="pwd" placeholder="enter your password" style="border-width:2px;position:absolute;top:345px;left:500px;height:35px;width:400px">
<input type="submit" value="LOGIN" style="position:absolute;top:410px;left:500px;height:40px;width:400px;color:white;background-color:blue;font-size:20px;font-family:algerian" required>
</form>
<body>
<a href="signup.php"><h2 style="color:red;position:absolute;left:750px;top:493px;font-family:'algerian'"><U>SIGN UP</h2></a>
</body>
<a href="front.php"><h1 style="position:absolute;color:black;top:510;left:480"><u>Back</h1>
</html>
<?php
include("connect.php");
echo"<h3 style='position:absolute;left:500px;top:500px;font-family:'algerian''>"."DONT HAVE AN ACCOUNT."."</h3>";
$email=$_POST['ei'];
$password=$_POST['pwd'];
if(empty($password) and empty($email))
{
	echo"<h3 style='color:red;position:absolute;left:500px;top:450px'><u>"."PLESAE ENTER EMAIL ID AND PASSWORD"."</u></h3>";
}
else
{
$query="select * from user where email='$email' and password='$password';";
$q=mysqli_query($conn,$query);
$num=mysqli_num_rows($q);
if($num==1)
{
	header('location:uwork.php');
}
else
{
	echo"<h3 style='color:red;position:absolute;left:450;top:450px'><u>"."PLEASE ENTER CORRECT EMAIL ID AND PASSWORD"."</u></h3>";
}
}
?>