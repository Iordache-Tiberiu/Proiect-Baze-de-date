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
        <form action="interogare_simpla_5.php" method="POST" style="text-align:center;">
        <fieldset>
            <legend>Introduceti Adresa:</legend>
                <input type="text" name="strada" placeholder="Strada"><br><br>
                <input type="text" name="numar" placeholder="Numar"><br><br>
                <input type="text" name="bloc" placeholder="Bloc"><br><br>
                <input type="text" name="apartament" placeholder="Apartament"><br><br>
                <input type="text" name="judet" placeholder="Judet"><br><br>
                <input type="text" name="oras" placeholder="Oras"><br><br>
                <input type="submit" name="trimite" value="Trimite">
        </fieldset>
        </form>
        
<?php
    mysqli_close($conectare);
?>

    </body>
</html>