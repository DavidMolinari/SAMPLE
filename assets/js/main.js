$(function() {
    console.log( "Page ready, jquery ok !" );

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

});

