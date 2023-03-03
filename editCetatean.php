<?php

    require 'conectareBD.php';

    $id_cetatean ="";
    $nume ="";
    $prenume ="";
    $cnp ="";
    $serieci ="";
    $numarci ="";
    $statutpersoana ="";
    $nrrolnominalunic ="";

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        if(!isset($_GET["ID_Cetatean"])){
            header("location:/EvidentaPopulatiei_DITL/operatiiModificare.php");
            exit;
        }

        $id_cetatean = $_GET["ID_Cetatean"];

        $sql = "SELECT * FROM cetateni WHERE ID_Cetatean = $id_cetatean";
        $result = mysqli_query($conectare, $sql);
        $row =  $result->fetch_assoc();

        if(!$row){
            header("location:/EvidentaPopulatiei_DITL/operatiiModificare.php");
            exit;
        }

        $nume = $row["Nume"];
        $prenume = $row["Prenume"];
        $cnp = $row["CNP"];
        $serieci = $row["SerieCI"];
        $numarci = $row["NumarCI"];
        $statutpersoana = $row["StatutPersoana"];
        $nrrolnominalunic = $row["NrRolNominalUnic"];
    }

    else{
        $id_cetatean = $_POST["id_cetatean"];
        $nume = $_POST["nume"];
        $prenume = $_POST["prenume"];
        $cnp = $_POST["cnp"];
        $serieci = $_POST["serieci"];
        $numarci = $_POST["numarci"];
        $statutpersoana = $_POST["statutpersoana"];
        $nrrolnominalunic = $_POST["nrrolnominalunic"];

        $sql = "UPDATE cetateni SET Nume = '$nume', Prenume = '$prenume', CNP = '$cnp', SerieCI = '$serieci', NumarCI = '$numarci', StatutPersoana = '$statutpersoana', NrRolNominalUnic = '$nrrolnominalunic' WHERE ID_Cetatean = '$id_cetatean'";
        $result = mysqli_query($conectare, $sql);
        
        header("location:/EvidentaPopulatiei_DITL/operatiiModificare.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Cetatean</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>Update Cetatean</h2>
        <form method="post">
            <input type="hidden" name="id_cetatean" value="<?php echo $id_cetatean; ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nume</label>
                <div class = "col-sm-6">
                    <input type="text" class="form-control" name="nume" value="<?php echo $nume; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Prenume</label>
                <div class = "col-sm-6">
                    <input type="text" class="form-control" name="prenume" value="<?php echo $prenume; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">CNP</label>
                <div class = "col-sm-6">
                    <input type="text" class="form-control" name="cnp" value="<?php echo $cnp; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">SerieCI</label>
                <div class = "col-sm-6">
                    <input type="text" class="form-control" name="serieci" value="<?php echo $serieci; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">NumarCI</label>
                <div class = "col-sm-6">
                    <input type="text" class="form-control" name="numarci" value="<?php echo $numarci; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">StatutPersoana</label>
                <div class = "col-sm-6">
                    <input type="text" class="form-control" name="statutpersoana" value="<?php echo $statutpersoana; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">NrRolNominalUnic</label>
                <div class = "col-sm-6">
                    <input type="text" class="form-control" name="nrrolnominalunic" value="<?php echo $nrrolnominalunic; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/EvidentaPopulatiei_DITL/operatiiModificare.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>