<?php
    require 'conectareBD.php';

    $strada = "";
    $numar = "";
    $bloc = "";
    $apartament = "";
    $judet = "";
    $oras = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $strada = $_POST["strada"];
        $numar = $_POST["numar"];
        $bloc = $_POST["bloc"];
        $apartament = $_POST["apartament"];
        $judet = $_POST["judet"];
        $oras = $_POST["oras"];

    $sql = "INSERT INTO adrese (Strada, Numar, Bloc, Apartament, Judet, Oras) VALUES ('$strada', '$numar', '$bloc', '$apartament', '$judet', '$oras')";
    $result = mysqli_query($conectare, $sql);

    header("location: /EvidentaPopulatiei_DITL/operatiiModificare2.php");
    exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Adresa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script> src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"</script>
</head>
<body>
    <div class="container my-5">
        <h2>Insert Adresa</h2>
        <form method="post">
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