<?php
if(isset($_POST["ok"]))
{
	$con=mysqli_connect("localhost","root","")or die(mysqli_error());
    mysqli_select_db($con,"airmode")or die(mysqli_error());
    $email=$_POST["email"];
	$grad=$_POST["grad"];
	$poraka=$_POST["poraka"];
    $k=mysqli_query($con,"INSERT INTO poraki(Email,Grad,Poraka)
VALUES('$email','$grad','$poraka')");
    $k=mysqli_query($con,"SELECT * FROM poraki");
    $q=mysqli_num_rows($k);
    if($q>0)
        header("index.html");
    else
        echo "greska";
}
?>