<!DOCTYPE html>
<html>
<body>

<?php
$var1 = 9;
$var2 = 7;

if($var1 < 10 && $var2 > 5) {
    echo "het getal zit tussen de 10 en 5.";
}
else {
    echo "het getal is groter dan 10 of kleiner dan 5";
}

if($var1 < 18 || $var2 > 10){
    echo "het getal is of kleiner dan 18 of groter dan 10";
}
else {
    echo "het getal is groter dan 18 en onder 10";
}

if($var1 < 7 xor $var2 > 18) {
    echo "een getal is kleiner dan 7 of groter dan 18";
}
else{
    echo "een getal is kleiner dan 7 en groter dan 18";
}

if($var1 < 10 != $var2 > 5) {
    echo "het getal is groter dan 10 of kleiner dan 5";
}
else{
    echo "het getal is kleiner dan 10 en groter dan 5";
}
?>

</body>
</html> 