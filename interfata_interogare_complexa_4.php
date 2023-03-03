<?php
    require 'conectareBD.php';
?>

<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset ="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <form action="interogare_complexa_4.php" method="POST" style="text-align:center;">
        <fieldset>
            <legend>Introduceti Numarul minim de bunuri:</legend>
                <input type="text" name="nrminimdebunuri" placeholder="NrMinimDeBunuri">
                <input type="submit" name="trimite" value="Trimite">
        </fieldset>
        </form>
        
<?php
    mysqli_close($conectare);
?>

    </body>
</html>