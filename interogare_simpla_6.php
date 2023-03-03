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
        </tr>

<?php

    require 'conectareBD.php';

    $numarinmatriculare = $_POST['numarinmatriculare'];         //la $_POST era scris ['nrinmatriculare'] in loc de ['numarinmatriculare'] si de aceea aparea
                                                                //eroarea "Undefined array key ..."

    $sql = "SELECT Nume, Prenume
            FROM cetateni C INNER JOIN cetateniadrese CA ON (C.ID_Cetatean = CA.ID_Cetatean)
                            INNER JOIN adrese A ON (CA.ID_Adresa = A.ID_Adresa)
                            INNER JOIN bunuri B ON (A.ID_Adresa = B.ID_Adresa)
                            INNER JOIN bunuricaracteristici BC ON (B.ID_Bun = BC.ID_Bun)
            WHERE ValoareAsociata = '$numarinmatriculare'";     //AICI TREBUIA SA PUN $numarinmatriculare intre apostrofuri, ca sa rezolv eroarea
                                                                //"Unknown column ... in where clause". Cu toate ca la interogarea 3 (unde caut dupa CNP)
                                                                //nu am folosit apostrofuri

    $result = mysqli_query($conectare, $sql);


    while($row = $result->fetch_assoc()){

        echo "<tr><td>" . $row['Nume'] ."</td><td>" . $row['Prenume'] ."</td></tr>";
    }

    mysqli_close($conectare);
?>
    </table>

    <br><form action="index.php" method="POST" style="text-align:center;">
            <button submit="button">Pagina principala</button>
    </form><br>

</body>
</html>