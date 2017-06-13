$(function(){
    /* "#" => id
    ".form" => Class form
    "form" => Balise form
    */
    $("form").submit(function(e){
        e.preventDefault();
        $.ajax({
            url: "formulaire_voiture.php",
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
        .done(function(){
            $("#message").html('<div class="alert alert-success">  <strong>Success!</strong> Vehicule ajoute.</div>');
        })
        .fail(function(){
            $("#message").html('<div class="alert alert-danger"> <strong>Danger!</strong> Vehicule non ajoute. Erreur.</div>');
        })
    });
})
