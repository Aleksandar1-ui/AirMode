<?php
if(isset($_POST["ok"]))
{ 
    session_start();
    $_SESSION['usr']=$_POST['usr'];
    $_SESSION['pass']=$_POST['pass'];
    $dataOD=$_POST["Check-in"];
    $dataDO=$_POST["Check-out"];
    $x=rand(1,4);
    $con=mysqli_connect("localhost","root","")or die(mysqli_error());
    mysqli_select_db($con,"airmode")or die(mysqli_error());
    $p1=mysqli_query($con,"SELECT * FROM patnik WHERE Username='".$_SESSION['$usr']."'  
AND Lozinka='".$_SESSION['$pass']."'");
    $vkCena1=mysqli_query($con,"SELECT Cena FROM destinacija WHERE DestinacijaID='$x'");
    $v=mysqli_num_row($vkCena1);
    echo $v;
}