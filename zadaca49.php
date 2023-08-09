<?php
$con=mysqli_connect("localhost","root","","airmode");
if($con->connect_error)
{
    echo "Neuspesna konekcija vo bazata na podatoci";
}
if(isset($_POST["ok"]))
{
    $image=$_FILES["image"]["name"];
    $img=$_FILES["image"]["tmp_name"];
    $folder="C:/wamp64/www".$image;
    $imeD=$_POST["imeD"];
    $tip=$_POST["tip"];
    $opis=$_POST["opis"];
    $kontinent=$_POST["kontinent"];
    $cena=$_POST["cena"];
    $k=mysqli_query($con,"INSERT INTO destinacija(ImeDestinacija,ImeSlika,Tip,Opis,Kontinent,Cena)
VALUES('$imeD','$image','$tip','$opis','$kontinent','$cena')");
    $k=mysqli_query($con,"SELECT * FROM destinacija");
    if(move_uploaded_file($img, $folder))
    {
        echo "<html><head></head><body bgcolor='#c1e6f5'><table border='0'>
<tr><th>DestinacijaID</th><th>ImeDestinacija</th><th>ImeSlika</th><th>Tip</th><th>Opis</th>
<th>Kontinent</th><th>Cena</th></tr>";
        while($r=mysqli_fetch_assoc($k))
        {
            echo "<tr><td>".$r['DestinacijaID']."</td><td>".$r['ImeDestinacija'].
                "</td><td>".$r['ImeSlika']."</td><td>".$r['Tip']."</td><td>".
                $r['Opis']."</td><td>".$r['Kontinent']."</td><td>".$r['Cena']."</td></tr>";
        }
    }
    else
    {
        echo "0";
    }
}