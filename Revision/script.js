$(function() {
    /*
        "#form" => Id Form
        ".form" => Class Form
        "form" => Balise Form
    */
    $("form").submit(function(e) {
        e.preventDefault();
        $.ajax({
                url: "class.php",
                method: "POST",
                data: {
                    marque: $("#marque").val(),
                    modele: $("#modele").val(),
                    annee: $("#annee").val(),
                    couleur: $("#couleur").val(),
                    nbPlace: $("#nbPlace").val(),
                    nbPorte: $("#nbPorte").val(),
                }
            })
            .done(function() {
                $("#message").html('<div class="alert alert-success"><strong>Success!</strong> Vehicule ajouté.</div>');
            })
            .fail(function() {
                $("#message").html('<div class="alert alert-danger"><strong>Warning!</strong> Vehicule non ajouté. Probleme serveur.</div>');
            });
    });
})