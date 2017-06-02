<?php
echo '<pre>';
print_r($_POST);
//declaration de la fonction conversion()
function conversion ($montant, $devise) {
    switch($devise) {
        case 'usd' :
        $resultat = round($montant * 1.108679);
        return $resultat;
        break;
        case 'euro' :
        $resultat = round($montant * 0.891321;)
        return $resultat;
        break;
    }
}
//traitement si le bouton convertir est cliqué
if(isset($POST['montant'])){
    if(is_numeric($POST['montant'])){
        if($_POST['devise'] == 'usd' || $_POST['devise'] == 'euro'){
            // tout est OK, on peut éxécuter notre fonction conversion()

            $somme_convertie = conversion($_POST['montant'], $_POST['devise']);

            if($_POST['devise'] == 'euro'){

            }


        }
    }
}
 ?>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form action="" method="post">
            <input type="text" name="montant" placeholder="Somme à convertir"/>
            <select name="devise">
                <option value="usd">EUR -> USD</option>
                <option value="euro">USD -> EUR</option>
            </select>
            <input type="submit" name="" value="convertir">

        </form>
    </body>
</html>
