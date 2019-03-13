$(function() {
    console.log( "Page ready, jquery ok !" );
$('#createUserContainer').hide();
    // SUPPRESSION AJAX
    $(".remove").click(function(){
        var id = $(this).data('id');
        console.log("meh");
        $.ajax({
            url: "./core/deleteUser.php",
            method: "POST",
            data: { id: id},
        }).done(function(response) {
            alert("Utilisateur supprimé");
            location.reload();
        }).fail(function( jqXHR, textStatus ) {
            console.log(textStatus);
        });
    });
    $("#addUser").on('click', function(){
        if($("#createUserContainer").css('display') == 'none')
            $("#createUserContainer").show();
        else
            $("#createUserContainer").hide();

    });

    $('.edit').on('click', function(){
        var nom = $(this).parent().parent().find('.user_nom').val();
        var prenom = $(this).parent().parent().find('.user_prenom').val();
        var email = $(this).parent().parent().find('.user_email').val();
        var id = $(this).parent().parent().find('.user_id').html();

        console.log(nom);
        console.log(prenom);
        console.log(email);
        console.log(id);
        $.ajax({
            url: "./core/updateUser.php",
            method: "POST",
            data: {
                id: id,
                prenom: prenom,
                nom: nom,
                email: email
            }
        }).done(function(response) {
            console.log("flemme");
            location.reload();
        }).fail(function( jqXHR, textStatus ) {
            console.log(textStatus);
        });

    })

});

