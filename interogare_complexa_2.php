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
            <th>StatutPersoana</th>
            <th>NrRolNominalUnic</th>
            <th>Oras</th>
        </tr>

<?php
    
    require 'conectareBD.php';

    $sql = "SELECT Nume, Prenume, StatutPersoana, NrRolNominalUnic, Oras
            FROM cetateni C, cetateniadrese CA, adrese A
            WHERE C.ID_Cetatean = CA.ID_Cetatean AND CA.ID_Adresa = A.ID_Adresa
                  AND C.ID_Cetatean NOT IN (SELECT I.ID_Cetatean
                                            FROM impozit I)
            ";
        
    $result = mysqli_query($conectare, $sql);

    while($row = $result->fetch_assoc()){

        echo "<tr><td>" . $row['Nume'] ."</td><td>" . $row['Prenume'] ."</td><td>" . $row['StatutPersoana'] ."</td><td>" . $row['NrRolNominalUnic'] ."</td><td>" . $row['Oras'] ."</td></tr>";
    }

    mysqli_close($conectare);

?>

    </table>

    <br><form action="index.php" method="POST" style="text-align:center;">
            <button submit="button">Pagina principala</button>
    </form><br>

</body>
</html>