<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="assets/css/styles.css"> -->
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        body {
            background: #cccc; /* à commenter si le bg du card doit etre transparent*/
        }
        label span {
            color: red;
            font-size: large;
        }
        /* .card-header {
            border: 1px solid black;
        } */
        label, button {
            font-weight: bold;
        }
        .btn-edit-delete{
            padding: 2px;
            margin: 0px;
        }
        span {
            color: #fff;
        }
    </style>
</head>
<body>
    <!-- debut formulaire  -->
    <div class="container mt-3">
        <div class="card bg-transparentt">
            <div class="card-header text-center">
                Nouvel enregistrement
            </div>
            <div class="card-body">
                <form action="" method="">
                    <div class="form-row mb-3">
                        <div class="col">
                            <label>FILIERE <span>*</span></label>
                            <select class="form-control">
                                <option value="">Sélectionner la filière</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="col">
                            <label>PRENOM <span>*</span></label>
                            <input type="text" class="form-control" placeholder="prénom">
                        </div>
                        <div class="col">
                            <label>NOM <span>*</span></label>
                            <input type="text" class="form-control" placeholder="nom">
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="col">
                            <label>NIVEAU <span>*</span></label>
                            <input type="text" class="form-control" placeholder="niveau">
                        </div>
                        <div class="col">
                            <label>LOCALITE <span>*</span></label>
                            <input type="text" class="form-control" placeholder="localité">
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="col">
                            <label>PRÉFÉRENCE <span>*</span></label>
                            <input type="text" class="form-control" placeholder="préférence">
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

    <br><br><br>

    <!-- debut table  -->
    <div class="container">
        <h1 class="text-center"> La liste </h1>
        <div class="card bg-transparentt">	
            <table class="table table-striped">

				<thead>
					<tr>
						<th>N°</th><th>Nom cluster</th><th>Nom villages</th><th>Nom filière</th>
						<th> Actions </th>						
					</tr>
				</thead>
				
				<tbody>
			
					<?php for ($i=0; $i < 5; $i++) { ?>
						<tr>

                            <th scope="row"><?= $i += 1 ?></th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>
                                <a href=""
                                    class="btn btn-success btn-edit-delete"> 
                                    <span class="fa fa-edit"></span>
                                </a>
                                &nbsp
                                <a onclick="confirmation();"
                                    href=""
                                    class="btn btn-danger btn-edit-delete">
                                    <span class="fa fa-trash"></span>
                                </a>
                            
                            </td>
							
						</tr>
					<?php } ?>

				</tbody>

			</table>
        </div>

        <a href="" class="btn btn-primary mt-2">
            <span class="fa fa-plus"></span> NOUVEL ENREGISTREMENT 
        </a>
		
	</div>
    <!-- fin table  -->

    <br><br><br>

    <!-- debut formulaire  -->
  
    <div class="container mt-3">
        <div class="card bg-transparentt">
            <div class="card-header text-center">
                <span class="fa fa-arrow-circle-left custome-icon" onclick="retour();"></span>
                Nouvel enregistrement
            </div>
            <div class="card-body">
                <form action="" method="post">

                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label">FILIERE</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="">
                                <option value="">Sélectionnez la filière</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label">PRENOM</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="" value="">
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label">NOM</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="" value="">
                        </div>
                    </div>
                    
                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label">NIVEAU</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="" value="">
                        </div>
                    </div>
                    
                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label">LOCALITE</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="" value="">
                        </div>
                    </div>
                    
                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label">PRÉFÉRENCE</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="" value="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary btn-block" name="add">Enregistrer <span class="fa fa-save"></span></button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- fin formulaire -->
    
</body>
</html>