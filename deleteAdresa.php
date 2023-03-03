<?php
    if(isset($_GET["ID_Adresa"])){
        $id_adresa = $_GET["ID_Adresa"];

        require 'conectareBD.php';

        $sql = "DELETE FROM adrese WHERE ID_Adresa = $id_adresa";
        $result = mysqli_query($conectare, $sql);
    }

    header("location: /EvidentaPopulatiei_DITL/operatiiModificare2.php");
?>