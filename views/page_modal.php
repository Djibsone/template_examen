<!-- 
    ICI LE MODAL POUR LE FORMULAIRE OÙ LES LABELS SONT AU DESSUS DES INPUTS
-->

<!-- Add Modal -->
<div class="modal fade text-dark" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><b>Création</b></h4>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="controllers/store.php" method="post">
                    <div class="form-row mb-3">
                        <div class="col">
                            <label>FILIERE <span>*</span></label>
                            <select class="form-control" name="">
                                <option value="">Sélectionner la filière</option>
                                <?php foreach ($categories as $categorie) { ?>
                                    <option value=""><?= $categorie['nomCategorie'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="col">
                            <label>PRENOM <span>*</span></label>
                            <input type="text" class="form-control" name="" placeholder="prénom">
                        </div>
                        <div class="col">
                            <label>NOM <span>*</span></label>
                            <input type="text" class="form-control" name="" placeholder="nom">
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="col">
                            <label>NIVEAU <span>*</span></label>
                            <input type="text" class="form-control" name="" placeholder="niveau">
                        </div>
                        <div class="col">
                            <label>LOCALITE <span>*</span></label>
                            <input type="text" class="form-control" name="" placeholder="localité">
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="col">
                            <label>PRÉFÉRENCE <span>*</span></label>
                            <input type="text" class="form-control" name="" placeholder="préférence">
                        </div>
                    </div>
                            
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler <span class="fa fa-close"></span></button>
                        <button type="submit" class="btn btn-primary btn-flat" name="add">Enregistrer <span class="fa fa-save"></span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade text-dark" id="edit_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><b>Modification</b></h4>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="controllers/update.php" method="post">
                    <input type="hidden" class="edit_id" name="id">
                    <div class="form-row mb-3">
                        <div class="col">
                            <label>FILIERE <span>*</span></label>
                            <select class="form-control" name="" id="">
                                <option value="">Sélectionner la filière</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="col">
                            <label>PRENOM <span>*</span></label>
                            <input type="text" class="form-control" name="" id="" placeholder="prénom">
                        </div>
                        <div class="col">
                            <label>NOM <span>*</span></label>
                            <input type="text" class="form-control" name="" id="" placeholder="nom">
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="col">
                            <label>NIVEAU <span>*</span></label>
                            <input type="text" class="form-control" name="" id="" placeholder="niveau">
                        </div>
                        <div class="col">
                            <label>LOCALITE <span>*</span></label>
                            <input type="text" class="form-control" name="" id="" placeholder="localité">
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="col">
                            <label>PRÉFÉRENCE <span>*</span></label>
                            <input type="text" class="form-control" name="" id="" placeholder="préférence">
                        </div>
                    </div>
                            
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler <span class="fa fa-close"></span></button>
                        <button type="submit" class="btn btn-success btn-flat" name="update">Modifier <span class="fa fa-edit"></span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- 
    ICI LE MODAL POUR LE FORMULAIRE OÙ LES LABELS SONT SUR LE MÊME ALLIGNEMENT QUE LES INPUTS
-->

<!-- Add Modal -->
<div class="modal fade text-dark" id="addnew">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><b>Création</b></h4>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="controllers/store.php" method="post">
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
                            <input type="text" class="form-control" name="">
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label">NOM</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="">
                        </div>
                    </div>
                    
                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label">NIVEAU</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="">
                        </div>
                    </div>
                    
                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label">LOCALITE</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="">
                        </div>
                    </div>
                    
                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label">PRÉFÉRENCE</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="">
                        </div>
                    </div>
                            
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler <span class="fa fa-close"></span></button>
                        <button type="submit" class="btn btn-primary btn-flat" name="add">Enregistrer <span class="fa fa-save"></span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade text-dark" id="edit_modal">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><b>Modification</b></h4>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="controllers/store.php" method="post">
                    <input type="hidden" class="edit_id" name="id">
                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label">FILIERE</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="" id="">
                                <option value="">Sélectionnez la filière</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label">PRENOM</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="" id="">
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label">NOM</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="" id="">
                        </div>
                    </div>
                    
                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label">NIVEAU</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="" id="">
                        </div>
                    </div>
                    
                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label">LOCALITE</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="" id="">
                        </div>
                    </div>
                    
                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label">PRÉFÉRENCE</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="" id="">
                        </div>
                    </div>
                            
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler <span class="fa fa-close"></span></button>
                        <button type="submit" class="btn btn-success btn-flat" name="update">Modifier <span class="fa fa-edit"></span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div class="modal fade text-dark" id="delete_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><b>Suppression...</b></h4>
        <!-- <button type="button" class="fa fa-close" data-dismiss="modal"></button> -->
      </div>
        <div class="modal-body">
            <form class="form-horizontal" method="POST" action="controllers/delete.php">
            <input type="hidden" class="del_id" name="id">
            <div class="text-center">
                <p class="text-danger">SUPPRIMER ?</p>
                <h2 class="bold name"></h2>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler <span class="fa fa-close"></button>
            <button type="submit" class="btn btn-danger btn-flat" name="delete">Supprimer <span class="fa fa-trash"></span></button>
        </div>
        </form>
    </div>
  </div>
</div>