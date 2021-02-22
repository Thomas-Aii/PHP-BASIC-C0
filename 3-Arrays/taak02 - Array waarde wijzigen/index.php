<!DOCTYPE html>
<html>
<body>

<?php
$myDogNames = ["Lopke", "Sieb", "Woodie"];
echo "<li>$myDogNames[0]</li><li>$myDogNames[1]</li><li>$myDogNames[2]</li>";
$myDogNames[0] = "Ollie";
$myDogNames[2] = "Soef";
$myDogNames[1] = "Beer";
echo "<li>$myDogNames[0]</li><li>$myDogNames[1]</li><li>$myDogNames[2]</li>"
?>

</body>
</html> 