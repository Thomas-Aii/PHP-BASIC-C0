<?php
$leeftijd = 16;
?>
<html>
<head>
</head>
<body>

   <div id="isMeerderJarig">
       <?php if($leeftijd >= 18){
           echo "Je bent 18 jaar of ouder";
       }
       else {
           echo "Je bent jonger dan 18 jaar";
       }
       ?>
</body>
</html>