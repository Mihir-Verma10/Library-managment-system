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
<img src="bg.jpg" style="height:550px;width:600;position:absolute;top:20px;left:400px"></img>

<form method="POST">
<h1 style="position:absolute;top:120px;left:470px;color:black;font-family:'algerian">REGISTRATION FORM FOR USER</h1>
<input type="text" name="name" placeholder="ENTER YOUR NAME" style="position:absolute;top:220px;left:450px;height:35px;width:215px" required>
<input type="text" name="email" placeholder="ENTER YOUR EMAIL" style="position:absolute;top:220px;left:750px;height:35px;width:215px" required>
<input type="text" name="address" placeholder="ENTER YOUR ADDRESS" style="position:absolute;top:290;left:450px;height:35px;width:215px" required>
<input type="text" name="phone" placeholder="ENTER YOUR NUMBER" style="position:absolute;top:290;left:750px;height:35px;width:215px">
<input type="password" name="pwd" placeholder="ENTER PASSWORD" style="position:absolute;top:360;left:450px;height:35px;width:215px">
<input type="password" name="repwd" placeholder="RE-ENTER PASSWORD"  style="position:absolute;top:360;left:750px;height:35px;width:215px">
<input type="submit" value="REGISTER" style="position:absolute;top:430;left:450px;height:35px;width:520px;color:white;background-color:blue;font-size:20px;font-family:'algerian'">
</form>
<a href="login.php"><h2 style="color:red;position:absolute;left:770px;top:515px;font-family:'algerian'"><U>LOG IN</h2></a>
<body>
<a href="front.php"><h1 style="position:absolute;color:black;top:510;left:400"><u>Back</h1>
</body>
</html>
<?php
include("connect.php");
echo"<h3 style='color:red;position:absolute;left:480px;top:520px;color:black;font-family:'algerian''>"."ALREADY HAVE AN ACCOUNT."."</h3>";
$na=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$pwd=$_POST['pwd'];
$pwd1=$_POST['repwd'];
if(empty($na) or empty($email) or empty($address) or empty($pwd) or empty($pwd1))
{
	echo'<h3 style="position:absolute;top:460px;left:430px;color:red;font-family:algerian"><u><blink>'."please enter data required data with correct manner"."</blink></h3>";

}
else
{
	if($pwd==$pwd1)
	{
	$query="insert into user values('','$na','$email','$address','$phone','$pwd');";
$q=mysqli_query($conn,$query);
if($q)
{
	echo'<h3 style="position:absolute;top:460px;left:500px;color:red;font-family:algerian">'.'registration successfull'.'</h3>';
}
	}
	else{
		echo'<h3 style="position:absolute;top:460px;left:500px;color:red;font-family:algerian"><u><blink>'."password did not match"."</blink></h3>";
	}
}
?>