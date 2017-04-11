<!DOCTYPE html>
<<html>
    <head> <meta charset="utf-8"></head>
    <body>

    


<?php
mail("aliorhandemirel@hotmail.com", 
        $POST["betreff"], 
        $POST["nachricht"],
        "From".$POST["absender"]);




?>

        </body>
</html>


