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
            <th>Strada</th>
            <th>Numar</th>
            <th>Bloc</th>
            <th>Apartament</th>
            <th>Judet</th>
            <th>Oras</th>
        </tr>

<?php
    
    require 'conectareBD.php';

    $sql = "SELECT Nume, Prenume, Strada, Numar, Bloc, Apartament, Judet, Oras FROM cetateni C INNER JOIN cetateniadrese CA ON (C.ID_Cetatean = CA.ID_Cetatean) INNER JOIN adrese A ON (CA.ID_Adresa = A.ID_Adresa)";
        
    $result = mysqli_query($conectare, $sql);

    while($row = $result->fetch_assoc()){
        // echo "Nume: "; echo $row['Nume'].'<br>';
        // echo "Prenume: "; echo $row['Prenume'].'<br>';
        // echo "Strada: "; echo $row['Strada'].'<br>';
        // echo "Numar: "; echo $row['Numar'].'<br>';
        // echo "Bloc: "; echo $row['Bloc'].'<br>';
        // echo "Apartament: "; echo $row['Apartament'].'<br>';
        // echo "Judet: "; echo $row['Judet'].'<br>';
        // echo "Oras: "; echo $row['Oras'].'<br>'.'<br>';

        echo "<tr><td>" . $row['Nume'] ."</td><td>" . $row['Prenume'] ."</td><td>" . $row['Strada'] ."</td><td>" . $row['Numar'] ."</td><td>" . $row['Bloc'] ."</td><td>" . $row['Apartament'] ."</td><td>" . $row['Judet'] ."</td><td>" . $row['Oras'] ."</td></tr>";
    }

    mysqli_close($conectare);

?>

    </table>
    
    <br><form action="index.php" method="POST" style="text-align:center;">
            <button submit="button">Pagina principala</button>
    </form><br>

</body>
</html>