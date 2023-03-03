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
            <th>NrRolNominalUnic</th>
        </tr>

<?php
    
    require 'conectareBD.php';

    $nrminimdebunuri = $_POST['nrminimdebunuri'];

    $sql = "SELECT Nume, Prenume, NrRolNominalUnic
            FROM cetateni C, (SELECT C2.ID_Cetatean
                              FROM cetateni C2, impozit I
                              WHERE C2.ID_Cetatean = I.ID_Cetatean
                              GROUP BY C2.ID_Cetatean
                              HAVING COUNT(I.ID_Bun) >= $nrminimdebunuri) AS CB
            WHERE C.ID_Cetatean = CB.ID_Cetatean;
           ";
        
    $result = mysqli_query($conectare, $sql);

    while($row = $result->fetch_assoc()){

        echo "<tr><td>" . $row['Nume'] ."</td><td>" . $row['Prenume'] ."</td><td>" . $row['NrRolNominalUnic'] ."</td></tr>";
    }

    mysqli_close($conectare);

?>

    </table>

    <br><form action="index.php" method="POST" style="text-align:center;">
            <button submit="button">Pagina principala</button>
    </form><br>

</body>
</html>