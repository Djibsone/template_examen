<?php
	require_once('models/connexion.php');
    global $i;
    $results = getAll();
    $categories = getAllCategorie();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>INDEX</title>
</head>
<body>

    <!-- debut table  -->
    <div class="container mt-2">
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
			
					<?php foreach ($results as $result) { ?>

						<tr>

                            <th scope="row"><?= $i += 1 ?></th>
                            <td><?= $result['nomArt'] ?></td>
                            <td><?= $result['nom'] ?></td>
                            <td><?= $result['prenom'] ?></td>
                            <td>
                                <!-- <a href="controllers/page_edit.php?id=<?= $result['idOeuvre'] ?>"
                                    class="btn btn-success btn-edit-delete"> 
                                    <span class="fa fa-edit"></span>
                                </a> -->
                                <a href="#" class="btn btn-success btn-edit-delete edit"
                                    data-id="<?= $result['idOeuvre'] ?>"> 
                                    <span class="fa fa-edit"></span>
                                </a>
                                &nbsp
                                <!-- <a onclick="confirmation();"
                                    href="controllers/delete.php?id=<?= $result['idOeuvre'] ?>"
                                    class="btn btn-danger btn-edit-delete">
                                    <span class="fa fa-trash"></span>
                                </a> -->
                                <a href="" class="btn btn-danger btn-edit-delete delete"
                                    data-id="<?= $result['idOeuvre'] ?>">
                                    <span class="fa fa-trash"></span>
                                </a>
                            
                            </td>
							
						</tr>

					<?php } ?>

				</tbody>

			</table>
        </div>

        <!-- <a href="views/page_create.php" class="btn btn-primary mt-2 btn-block">
            <span class="fa fa-plus"></span> NOUVEL ENREGISTREMENT 
        </a> -->
        <a href="#" class="btn btn-primary mt-2 btn-block addnew">
            <span class="fa fa-plus"></span> NOUVEL ENREGISTREMENT 
        </a>
		
	</div>
    <!-- fin table  -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>
</html>

<!-- modal inclusion -->
<?php include 'views/page_modal.php' ?>