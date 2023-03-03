<!DOCTYPE html>
<html>
<head>
<style>

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2}

th{
    background-color: #04AA6D;
    color: white;
}

</style>
</head>
<body>

    <table>
        <tr>
            <th>Nume</th>
            <th>Prenume</th>
            <th>SerieCI</th>
            <th>NumarCI</th>
        </tr>

<?php

    require 'conectareBD.php';

    $strada = $_POST['strada'];
    $numar = $_POST['numar'];
    $bloc = $_POST['bloc'];
    $apartament = $_POST['apartament'];
    $judet = $_POST['judet'];
    $oras = $_POST['oras'];

    $sql = "SELECT Nume, Prenume, SerieCI, NumarCI
            FROM cetateni C INNER JOIN cetateniadrese CA ON (C.ID_Cetatean = CA.ID_Cetatean)
                            INNER JOIN adrese A ON (CA.ID_Adresa = A.ID_Adresa)
            WHERE Strada = '$strada'
            AND Numar = '$numar'
            AND (Bloc = '$bloc' OR Bloc IS NULL)
            AND (Apartament ='$apartament' OR Apartament IS NULL)
            AND Judet = '$judet'
            AND Oras = '$oras'";

    $result = mysqli_query($conectare, $sql);

    while($row = $result->fetch_assoc()){

        echo "<tr><td>" . $row['Nume'] ."</td><td>" . $row['Prenume'] ."</td><td>" . $row['SerieCI'] ."</td><td>" .$row['NumarCI'] ."</td></tr>";
    }

    mysqli_close($conectare);
?>
    </table>

    <br><form action="index.php" method="POST" style="text-align:center;">
            <button submit="button">Pagina principala</button>
    </form><br>

</body>
</html>