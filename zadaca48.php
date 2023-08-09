<?php
if(isset($_POST["ok"]))
{
    $con=mysqli_connect("localhost","root","")or die(mysqli_error());
    mysqli_select_db($con,"airmode")or die(mysqli_error());
    $ime=$_POST["ime"];
    $prez=$_POST["prez"];
    $usr=$_POST["usr"];
    $pass=$_POST["pass"];
    $email=$_POST["email"];
    $brPasosh=$_POST["brPasosh"];
    $embg=$_POST["embg"];
    $k=mysqli_query($con,"INSERT INTO patnik(Ime,Prezime,EMBG,Username,Lozinka,Email,BrPasosh)
VALUES('$ime','$prez','$embg','$usr','$pass','$email','$brPasosh')");
    $k=mysqli_query($con,"SELECT * FROM patnik");
    $q=mysqli_num_rows($k);
    if($q>0)
        include "index.html";
    else
        echo "greska";
}