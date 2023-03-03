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
        <form action="interogare_simpla_6.php" method="POST" style="text-align:center;">
        <fieldset>
            <legend>Introduceti NumarInmatriculare:</legend>
                <input type="text" name="numarinmatriculare" placeholder="NumarInmatriculare">
                <input type="submit" name="trimite" value="Trimite">
        </fieldset>
        </form>
        
<?php
    mysqli_close($conectare);
?>

    </body>
</html>