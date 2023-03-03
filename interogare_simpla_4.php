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
            <th>Strada</th>
            <th>Numar</th>
            <th>Bloc</th>
            <th>Apartament</th>
            <th>Judet</th>
            <th>Oras</th>
            <th>Descriere</th>
            <th>Denumire</th>
            <th>ValoareAsociata</th>
        </tr>

<?php
    require 'conectareBD.php';

    $nrrolnominalunic = $_POST['nrrolnominalunic'];

    $sql = "SELECT Strada, Numar, Bloc, Apartament, Judet, Oras, Descriere, Denumire, ValoareAsociata
            FROM cetateni C INNER JOIN cetateniadrese CA ON (C.ID_Cetatean = CA.ID_Cetatean)
                            INNER JOIN adrese A ON (CA.ID_Adresa = A.ID_Adresa)
                            INNER JOIN bunuri B ON (A.ID_Adresa = B.ID_Adresa)
                            INNER JOIN bunuricaracteristici BC ON (B.ID_Bun = BC.ID_Bun)
                            INNER JOIN caracteristici CR ON (BC.ID_Caracteristica = CR.ID_Caracteristica)
            WHERE NrRolNominalUnic = $nrrolnominalunic
            GROUP BY Strada, Numar, Bloc, Apartament, Judet, Oras, Descriere, Denumire, ValoareAsociata";
        
    $result = mysqli_query($conectare, $sql);

    while($row = $result->fetch_assoc()){
        // echo "Strada: "; echo $row['Strada'].'<br>';
        // echo "Numar: "; echo $row['Numar'].'<br>';
        // echo "Bloc: "; echo $row['Bloc'].'<br>';
        // echo "Apartament: "; echo $row['Apartament'].'<br>';
        // echo "Judet: "; echo $row['Judet'].'<br>';    
        // echo "Oras: "; echo $row['Oras'].'<br>';
        // echo "Descriere: "; echo $row['Descriere'].'<br>'; 
        // echo $row['Denumire'];
        // echo ": "; echo $row['ValoareAsociata'].'<br><br>';

        echo "<tr><td>" . $row['Strada'] ."</td><td>" . $row['Numar'] ."</td><td>" . $row['Bloc'] ."</td><td>" . $row['Apartament'] ."</td><td>" . $row['Judet'] ."</td><td>" . $row['Oras'] ."</td><td>" . $row['Descriere'] ."</td><td>" . $row['Denumire'] ."</td><td>" . $row['ValoareAsociata'] ."</td></tr>";
    }

    mysqli_close($conectare);
?>

</table>

    <br><form action="index.php" method="POST" style="text-align:center;">
            <button submit="button">Pagina principala</button>
    </form><br>

</body>
</html>