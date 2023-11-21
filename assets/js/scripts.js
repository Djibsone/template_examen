$(document).ready(function() {
     
    //comfirmation the delete
    confirmation = () => {
        return confirm('Etes-vous sûr de vouloir supprimer ?')
    };

    //go back
    retour = () => {
        location.href = "/";
        // location.replace("/");
    };

    //add
    $(document).on('click', '.addnew', function(e){
        e.preventDefault();
        $('#addnew').modal('show');
        var id = $(this).attr('data-id');
        $('.donid').val(id);
    });

    //edit
    $(document).on('click', '.edit', function(e){
        e.preventDefault();
        $('#edit_modal').modal('show');
        var id = $(this).attr('data-id');
        $('.edit_id').val(id);

        $.ajax({
            url: "./controllers/show.php",
            type: "post",
            data: {id:id},
            dataType: 'json',
            success: function(data){
                $('#edit_nom').val(data.nom);
                $('#edit_sexe_re').val(data.sexeR);
                $('#edit_localite').val(data.localite);
            }
        });
    });

     //delete
    $(document).on('click', '.delete', function(e){
        e.preventDefault();
        $('#delete_modal').modal('show');
        var id = $(this).attr('data-id');
        $('.del_id').val(id);

        $.ajax({
            url: "./controllers/show.php",
            type: "post",
            data: {id:id},
            dataType: 'json',
            success: function(data){
              $('.name').html(data.nom);
            }
        });
    });
});