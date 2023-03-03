<!-- Acest script va arata o lista cu toate adresele. -->
<?php
    require 'conectareBD.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operatii Modificare 2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>Lista Adreselor</h2>
        <a class="btn btn-primary" href="/EvidentaPopulatiei_DITL/createAdresa.php" role="button">Insert Adresa</a>
        <br>
        <table class="table">
            <tbody>
                    <?php
                        $sql = "SELECT * FROM adrese";
                        $result = mysqli_query($conectare, $sql);

                        while($row = $result->fetch_assoc()){
                            echo "
                            <tr>
                                <td>$row[Strada]</td>
                                <td>$row[Numar]</td>
                                <td>$row[Bloc]</td>
                                <td>$row[Apartament]</td>
                                <td>$row[Judet]</td>
                                <td>$row[Oras]</td>
                                <td>
                                    <a class='btn btn-primary btn-sm' href ='/EvidentaPopulatiei_DITL/editAdresa.php?ID_Adresa=$row[ID_Adresa]'>Update</a>
                                    <a class='btn btn-danger btn-sm' href ='/EvidentaPopulatiei_DITL/deleteAdresa.php?ID_Adresa=$row[ID_Adresa]'>Delete</a>
                                </td>
                            </tr>
                            ";
                        }
                    ?>
            </tbody>    
        </table>
    </div>
    <form action="index.php" method="POST" style="text-align:center;">
            <button submit="button">Pagina principala</button>
        </form><br>
</body>
</html>