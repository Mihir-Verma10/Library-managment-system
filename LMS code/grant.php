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

<h1 style="position:absolute;top:120px;left:560px;font-family:algerian">grant book to user</h1>
</body>
<form method="post">
<h2 style="position:absolute;top:200px;left:510px;font-family:algerian">book no. :</h2>
<input type="text" name="bno" style="position:absolute;top:220px;left:650px;width:200px;height:30px" required>


<h2 style="position:absolute;top:270px;left:460px;font-family:algerian">email of user who want to take book</h2>
<input type="text" name="em" placeholder="ENTER USER NAME" style="position:absolute;top:350px;left:620px;height:35px;width:215px" required>
<input type="submit" value="grant book" style="position:absolute;top:420px;left:530px;font-family:algerian;height:30px;width:350px;color:white;background-color:blue;font-size:20px">
</form>
<a href="awork.php"><h1 style="position:absolute;color:black;top:510;left:480"><u>Back</h1>
</html>
<?php
include("connect.php");
$bno=$_POST['bno'];
$em=$_POST['em'];
$query1="select * from user where email='$em';";
$q1=mysqli_query($conn,$query1);
$num=mysqli_num_rows($q1);
if($num==1)
{
$query2="select * from book where book_no='$bno';";
$q2=mysqli_query($conn,$query2);
$num=mysqli_num_rows($q2);
if($num==1)
{
$query="update book set allocated_to='$em' where book_no=$bno;";
$q=mysqli_query($conn,$query);
if($q)
{
	echo"<h3 style='position:absolute;top:470px;left:560px;font-family:algerian;color:green'>book has allocated</h3>" ;

}
}
else
{
	echo"<h3 style='position:absolute;top:470px;left:560px;font-family:algerian;color:green'>please enter right book no</h3>";
}
}
else{
		echo"<h3 style='position:absolute;top:470px;left:560px;font-family:algerian;color:green'>this user does not exist</h3>";
	}
?>
