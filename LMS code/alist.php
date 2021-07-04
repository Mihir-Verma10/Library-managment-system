<html>
<head>
<style>
body{
background-image:url("lms1.jpg");
background-position:center;
background-size:cover;
}
table{
	position:absolute;
	top:250;
	left:550;
}
</style>
</head>
<body>
<img src="white.jpg" style="height:6000px;width:500;position:absolute;top:20px;left:450px"></img>
<h1 style="position:absolute;top:120;left:520px;font-family:algerian;color:red;width:380px"><u>here is the list of all availabel books </u></h1></body></html>
<a href="uwork.php"><h1 style="position:absolute;color:black;top:510;left:480"><u>Back</h1></a>
<?php
include("connect.php");
$q1="select book_no,book_name,writter from book  where allocated_to='';";
	$query1=mysqli_query($conn,$q1);
	echo"<center/><table border='1'><tr><th>BOOK_NO</th><th>BOOK_NAME</th><th>WRITTER</th></tr>";
	while($row=mysqli_fetch_array($query1))
{
	echo "<tr><td>".$row["book_no"]."</td> <br/><td>";
	echo $row["book_name"]." </td><br/><td>";
    echo $row["writter"]."</td></tr>";
}
echo"</table>";
?>

