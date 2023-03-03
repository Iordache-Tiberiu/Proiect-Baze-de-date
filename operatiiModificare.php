<!-- Acest script va arata o lista cu toti cetatenii. -->
<?php
    require 'conectareBD.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operatii Modificare</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>Lista Cetatenilor</h2>
        <a class="btn btn-primary" href="/EvidentaPopulatiei_DITL/createCetatean.php" role="button">Insert Cetatean</a>
        <br>
        <table class="table">
            <tbody>
                    <?php
                        $sql = "SELECT * FROM cetateni";
                        $result = mysqli_query($conectare, $sql);

                        while($row = $result->fetch_assoc()){
                            echo "
                            <tr>
                                <td>$row[Nume]</td>
                                <td>$row[Prenume]</td>
                                <td>$row[CNP]</td>
                                <td>$row[SerieCI]</td>
                                <td>$row[NumarCI]</td>
                                <td>$row[StatutPersoana]</td>
                                <td>$row[NrRolNominalUnic]</td>
                                <td>
                                    <a class='btn btn-primary btn-sm' href ='/EvidentaPopulatiei_DITL/editCetatean.php?ID_Cetatean=$row[ID_Cetatean]'>Update</a>
                                    <a class='btn btn-danger btn-sm' href ='/EvidentaPopulatiei_DITL/deleteCetatean.php?ID_Cetatean=$row[ID_Cetatean]'>Delete</a>
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