/*
*
*VARIABLES
*
*/

/*
*
*FUNCTIONS & EVENT
*
*/
$('.btnsubmit').on('click', function() {
    event.preventDefault();
    var nom = $('#oblignom').val();
    // console.log(nom);
    var message = $('#msg');
    if (nom === "") {
        $('#oblignom').closest('div.form-group').addClass('has-error');
        message.addClass('error');
        var noName = $('.error');
        var msgNoName = "Vous n'avez pas renseigné votre nom";
        console.log(msgNoName);
        var noName = $('.error');
        noName[0].innerHTML = msgNoName;
    }

    var pays = $('.selection').val();
    var prenom = $('#obligprenom').val();
    var adresse = $('#obligadresse').val();
    var cp = $('#obligcp').val();
    var telephone = $('#telephone').val();
    var prenom = $('#obligprenom').val();

    if (nom !== "" && prenom !== "" && adresse !== "" && cp !== "" && telephone !== "" && pays !== "pays") {
        var formValid = $('form');
        formValid.addClass('valid');
        var msgFormValid = 'Super !';
        formValid[0].innerHTML = msgFormValid;
    }


})

$('.btnsubmit').on('click', function() {
    event.preventDefault();
    var prenom = $('#obligprenom').val();
    // console.log(prenom);
    var message = $('#msg');
    if (prenom === "") {
        $('#obligprenom').closest('div.form-group').addClass('has-error');
        message.addClass('error');
        var noPrenom = $('.error');
        var msgNoPrenom = "Vous n'avez pas renseigné votre prenom";
        console.log(msgNoPrenom);
        var noPrenom = $('.error');
        noPrenom[0].innerHTML = msgNoPrenom;
    }
    
})
