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
        <form action="interogare_simpla_3.php" method="POST" style="text-align:center;">
        <fieldset>
            <legend>Introduceti CNP:</legend>
                <input type="text" name="cnp" placeholder="CNP">
                <input type="submit" name="trimite" value="Trimite">
        </fieldset>
        </form>
        
<?php
    mysqli_close($conectare);
?>

    </body>
</html>