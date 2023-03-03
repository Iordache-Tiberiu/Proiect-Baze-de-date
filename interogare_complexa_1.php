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
            <th>TotalDePlata</th>
        </tr>

<?php
    
    require 'conectareBD.php';

    $sql = "SELECT Nume, Prenume, SUM(I.ValoareDePlata) AS TotalDePlata
            FROM cetateni C, impozit I
            WHERE C.ID_Cetatean = I.ID_Cetatean
            GROUP BY C.Nume, C.Prenume
            HAVING TotalDePlata >= ALL (SELECT SUM(I2.ValoareDePlata)
                                        FROM impozit I2
                                        GROUP BY ID_Cetatean)
            ";
        
    $result = mysqli_query($conectare, $sql);

    while($row = $result->fetch_assoc()){

        echo "<tr><td>" . $row['Nume'] ."</td><td>" . $row['Prenume'] ."</td><td>" . $row['TotalDePlata'] ."</td></tr>";
    }

    mysqli_close($conectare);

?>

    </table>

    <br><form action="index.php" method="POST" style="text-align:center;">
            <button submit="button">Pagina principala</button>
    </form><br>

</body>
</html>