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
            <th>CNP</th>
            <th>Denumire</th>
            <th>NumarBunuri</th>
        </tr>

<?php
    require 'conectareBD.php';

    $sql = "SELECT Nume, Prenume, CNP, Denumire, COUNT(B.ID_Categorie) AS NumarBunuri
            FROM cetateni C LEFT OUTER JOIN impozit I ON (C.ID_Cetatean = I.ID_Cetatean)
                            LEFT OUTER JOIN bunuri B ON (I.ID_Bun = B.ID_Bun)
                            LEFT OUTER JOIN categoriebun CB ON (B.ID_Categorie = CB.ID_Categorie)
            GROUP BY Nume, Prenume, CNP, Denumire";
    
    $result = mysqli_query($conectare, $sql);

    while($row = $result->fetch_assoc()) {
        // echo "Nume: "; echo $row['Nume'].'<br>';
        // echo "Prenume: "; echo $row['Prenume'].'<br>';
        // echo "CNP: "; echo $row['CNP'].'<br>';
        // echo "Denumire: "; echo $row['Denumire'].'<br>';
        // echo "NumarBunuri: "; echo $row['NumarBunuri'].'<br>'.'<br>';

        echo "<tr><td>" . $row['Nume'] ."</td><td>" . $row['Prenume'] ."</td><td>" . $row['CNP'] ."</td><td>" . $row['Denumire'] ."</td><td>" . $row['NumarBunuri'] ."</td></tr>";
    }

    mysqli_close($conectare);

?>

    </table>

    <br><form action="index.php" method="POST" style="text-align:center;">
            <button submit="button">Pagina principala</button>
    </form><br>

</body>
</html>