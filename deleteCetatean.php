<?php
    if(isset($_GET["ID_Cetatean"])){
        $id_cetatean = $_GET["ID_Cetatean"];

        require 'conectareBD.php';

        $sql = "DELETE FROM cetateni WHERE ID_Cetatean = $id_cetatean";
        $result = mysqli_query($conectare, $sql);
    }

    header("location: /EvidentaPopulatiei_DITL/operatiiModificare.php");
?>