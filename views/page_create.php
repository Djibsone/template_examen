<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title>PAGE CREATE</title>
</head>
<body>

    <!-- debut formulaire  -->
    <div class="container mt-3">
        <div class="card bg-transparentt">
            <div class="card-header text-center">
                <span class="fa fa-arrow-circle-left custome-icon" onclick="retour();"></span>
                Nouvel enregistrement
            </div>
            <div class="card-body">
                <form action="../controllers/store.php" method="post">
                    <div class="form-row mb-3">
                        <div class="col">
                            <label>FILIERE <span>*</span></label>
                            <select class="form-control" name="">
                                <option value="">Sélectionner la filière</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="col">
                            <label>PRENOM <span>*</span></label>
                            <input type="text" class="form-control" name="" value="" placeholder="prénom">
                        </div>
                        <div class="col">
                            <label>NOM <span>*</span></label>
                            <input type="text" class="form-control" name="" value="" placeholder="nom">
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="col">
                            <label>NIVEAU <span>*</span></label>
                            <input type="text" class="form-control" name="" value="" placeholder="niveau">
                        </div>
                        <div class="col">
                            <label>LOCALITE <span>*</span></label>
                            <input type="text" class="form-control" name="" value="" placeholder="localité">
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="col">
                            <label>PRÉFÉRENCE <span>*</span></label>
                            <input type="text" class="form-control" name="" value="" placeholder="préférence">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block mt-2" name="add">Enregistrer <span class="fa fa-save"></span></button>
                    <!-- <button type="submit" class="btn btn-primary mr-2">Enregistrer</button>
                    <button type="reset" class="btn btn-warning">Annuler</button> -->
                </form>
            </div>
        </div>
    </div>
    <!-- fin formulaire  -->

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/scripts.js"></script>
</body>
</html>