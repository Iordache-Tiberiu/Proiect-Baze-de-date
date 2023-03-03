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
            <th>Oras</th>
            <th>Judet</th>
            <th>TotalCapacitatiCilindrice (cm cubi)</th>
        </tr>

<?php
    
    require 'conectareBD.php';

    $sql = "SELECT Oras, Judet,
                   (SELECT SUM(BC.ValoareAsociata)
                    FROM bunuricaracteristici BC, bunuri B
                    WHERE BC.ID_Caracteristica = 1 AND
                          BC.ID_Bun = B.ID_Bun AND
                          B.ID_Adresa = A.ID_Adresa) AS TotalCapacitatiCilindrice
            FROM adrese A
            ORDER BY TotalCapacitatiCilindrice DESC;
           ";
        
    $result = mysqli_query($conectare, $sql);

    while($row = $result->fetch_assoc()){

        echo "<tr><td>" . $row['Oras'] ."</td><td>" . $row['Judet'] ."</td><td>" . $row['TotalCapacitatiCilindrice'] ."</td></tr>";
    }

    mysqli_close($conectare);

?>

    </table>

    <br><form action="index.php" method="POST" style="text-align:center;">
            <button submit="button">Pagina principala</button>
    </form><br>

</body>
</html>