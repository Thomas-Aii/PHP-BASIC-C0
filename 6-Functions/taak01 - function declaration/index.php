<!DOCTYPE html>
<html>
<body>

<?php
$woordje = "Hallo";
$zinnetje = "mooie blauwe planeet";
$heleZin = $woordje;
function zetTweeWoordenAanElkaar(){
    $woordje = "Hallo ";
    $zinnetje = "mooie blauwe planeet";
    $heleZin = $woordje.$zinnetje;
    echo $heleZin;
}
zetTweeWoordenAanElkaar();
?>

</body>
</html> 