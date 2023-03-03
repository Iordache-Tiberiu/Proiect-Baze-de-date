<?php

    require 'conectareBD.php';

    $id_adresa ="";
    $strada ="";
    $numar ="";
    $bloc ="";
    $apartament ="";
    $judet ="";
    $oras ="";

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        if(!isset($_GET["ID_Adresa"])){
            header("location:/EvidentaPopulatiei_DITL/operatiiModificare2.php");
            exit;
        }

        $id_adresa = $_GET["ID_Adresa"];

        $sql = "SELECT * FROM adrese WHERE ID_Adresa = $id_adresa";
        $result = mysqli_query($conectare, $sql);
        $row =  $result->fetch_assoc();

        if(!$row){
            header("location:/EvidentaPopulatiei_DITL/operatiiModificare2.php");
            exit;
        }

        $strada = $row["Strada"];
        $numar = $row["Numar"];
        $bloc = $row["Bloc"];
        $apartament = $row["Apartament"];
        $judet = $row["Judet"];
        $oras = $row["Oras"];
    }

    else{
        $id_adresa = $_POST["id_adresa"];
        $strada = $_POST["strada"];
        $numar = $_POST["numar"];
        $bloc = $_POST["bloc"];
        $apartament = $_POST["apartament"];
        $judet = $_POST["judet"];
        $oras = $_POST["oras"];

        $sql = "UPDATE adrese SET Strada = '$strada', Numar = '$numar', Bloc = '$bloc', Apartament = '$apartament', Judet = '$judet', Oras = '$oras' WHERE ID_Adresa = '$id_adresa'";
        $result = mysqli_query($conectare, $sql);
        
        header("location:/EvidentaPopulatiei_DITL/operatiiModificare2.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Adresa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>Update Adresa</h2>
        <form method="post">
            <input type="hidden" name="id_adresa" value="<?php echo $id_adresa; ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Strada</label>
                <div class = "col-sm-6">
                    <input type="text" class="form-control" name="strada" value="<?php echo $strada; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Numar</label>
                <div class = "col-sm-6">
                    <input type="text" class="form-control" name="numar" value="<?php echo $numar; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Bloc</label>
                <div class = "col-sm-6">
                    <input type="text" class="form-control" name="bloc" value="<?php echo $bloc; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Apartament</label>
                <div class = "col-sm-6">
                    <input type="text" class="form-control" name="apartament" value="<?php echo $apartament; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Judet</label>
                <div class = "col-sm-6">
                    <input type="text" class="form-control" name="judet" value="<?php echo $judet; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Oras</label>
                <div class = "col-sm-6">
                    <input type="text" class="form-control" name="oras" value="<?php echo $oras; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/EvidentaPopulatiei_DITL/operatiiModificare2.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>