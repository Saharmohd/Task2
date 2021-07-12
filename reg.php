<?php

$con= mysqli_connect ("localhost","root","") or die (mysqli_error($con));
mysqli_select_db ($con, "control_arm") or die (mysqli_error($con));

$arm1 = $_POST['arm1'];
$arm2 = $_POST['arm2'];
$arm3 = $_POST['arm3'];
$arm4 = $_POST['arm4'];
$arm5 = $_POST['arm5'];
$arm6 = $_POST['arm6'];
$up = 'f';
$right = 'r';
$left = 'l';
$stop = 's';
$down = 'b';
$zero= '';

if(isset($_POST['save']))
{
	
mysqli_query ($con, "insert into arms (arm1, arm2, arm3, arm4, arm5, arm6) 
                values ('$arm1', '$arm2', '$arm3', '$arm4', '$arm5', '$arm6')") or die (mysqli_error($con));
echo '<script>alert("تم الحفظ بنجاح ")</script>';
}


if(isset($_POST['on']))
{
	
mysqli_query ($con,"SELECT * FROM arms ORDER BY ID DESC LIMIT 1") or die (mysqli_error($con));
echo "<b>arm1: </b>". $arm1  ."<br>". "<b>arm2: </b>" . $arm2 . "<br>". "<b>arm3: </b>". $arm3 . "<br>". 
      "<b>arm4: </b>" . $arm4 . "<br>".  "<b>arm5: </b>". $arm5 . "<br>".  "<b>arm6: </b>" . $arm6;
}

if (isset($_POST['pointup']))
{
mysqli_query ($con, "insert into direction(up,rightt,down,leftt,stop) values ('$up' , '$zero','$zero','$zero','$zero')") or die (mysqli_error($con));
mysqli_query ($con,"SELECT * FROM direction ORDER BY ID DESC LIMIT 1") or die (mysqli_error($con));
echo $up;
}

if (isset($_POST['pointright']))
{
mysqli_query ($con, "insert into direction(up,rightt,down,leftt,stop) values ('$zero', '$right','$zero','$zero','$zero')") or die (mysqli_error($con));
mysqli_query ($con,"SELECT * FROM direction ORDER BY ID DESC LIMIT 1") or die (mysqli_error($con));
echo $right; 
 
}

if (isset($_POST['pointdown']))
{
mysqli_query ($con, "insert into direction(up,rightt,down,leftt,stop) values ('$zero','$zero','$down','$zero','$zero')") or die (mysqli_error($con)); 
mysqli_query ($con,"SELECT * FROM direction ORDER BY ID DESC LIMIT 1") or die (mysqli_error($con));
echo $down;

}

if (isset($_POST['pointleft']))
{
mysqli_query ($con, "insert into direction(up,rightt,down,leftt,stop) values ('$zero','$zero','$zero','$left','$zero')") or die (mysqli_error($con)); 
mysqli_query ($con,"SELECT * FROM direction ORDER BY ID DESC LIMIT 1") or die (mysqli_error($con));
echo $left;
}

if (isset($_POST['stop']))
{
mysqli_query ($con, "insert into direction(up,rightt,down,leftt,stop) values ('$zero','$zero','$zero','$zero','$stop')") or die (mysqli_error($con)); 
mysqli_query ($con,"SELECT * FROM direction ORDER BY ID DESC LIMIT 1") or die (mysqli_error($con));
echo $stop;
}

?>