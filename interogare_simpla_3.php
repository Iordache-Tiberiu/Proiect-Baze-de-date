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

    $cnp = $_POST['cnp'];

    $sql = "SELECT Nume, Prenume, SUM(ValoareDePlata) AS TotalDePlata
            FROM cetateni C INNER JOIN impozit I ON (C.ID_Cetatean = I.ID_Cetatean)
            WHERE CNP = $cnp
            GROUP BY Nume, Prenume";

    $result = mysqli_query($conectare, $sql);


    while($row = $result->fetch_assoc()){
        // echo "Nume: "; echo $row['Nume'].'<br>';
        // echo "Prenume: "; echo $row['Prenume'].'<br>';
        // echo "Total de plata: "; echo $row['TotalDePlata']; echo " lei";

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
