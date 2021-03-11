<!DOCTYPE html>
<html>
<body>

<?php
function geefTienProcent(){
    $koopPrijs = 75;
    $korting = 10;
    return $koopPrijs * 0.9;
}
geefTienProcent(); 
function bedrag(){
    echo '<h3>' . geefTienProcent() . `</h3>`;
}
bedrag(); 
?>

</body>
</html> 