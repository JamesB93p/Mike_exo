<!DOCTYPE html>
<html>
<head>
    <title>Exercice 3</title>
    <meta charset="utf-8" />
    <style>
    label{float: left; width: 95px; font-size: italic; font-family: Calibri;}
    h1{margin: 0 0 10px 200px; font-family: Calibri;}
    </style>
</head>
<body>
    <hr>
    <h1>Exercice 3 - Film</h1>

    <!-- Formulaire !-->
    <form method="post" action="">
        <label for="titre">Titre</label>
        <input type="text" id="titre" name="titre"><br>
        <br>
        <label for="acteurs">Acteurs</label>
        <input type="text" id="acteurs" name="acteurs"><br>
        <br>
        <label for="realisateur">Réalisateur</label>
        <input type="text" id="realisateur" name="realisateur"><br>
        <br>
        <label for="producteur">Producteur</label>
        <input type="text" id="producteur" name="producteur"><br>
        <br>
        <label for="annee_production">Année de production</label>

        <select id="annee_production" name="annee_production">
            <option value="0">2010</option>
            <option value="1">2011</option>
            <option value="2">2012</option>
            <option value="3">2013</option>
            <option value="4">2014</option>
            <option value="5">2015</option>
            <option value="6">2016</option>
            <option value="7">2017</option>
        </select>

        <br><br><br>

        <label for="langue">Langue du film</label>
        <select id="langue" name="langue">
            <option value="fr">Français</option>
            <option value="an">Anglais</option>
            <option value="esp">Espagnol</option>
            <option value="itl">Italien</option>
        </select>

        <br><br><br>

        <label for="categorie">Categorie</label>
        <select id="categorie" name="categorie">
            <option value="horreur">Horreur</option>
            <option value="action">Action</option>
            <option value="drame_thriller">Drame Thriller</option>
        </select>

        <br><br>

        <label for="synopsis">Synopsis</label>
        <input type="text" id="synopsis" name="synopsis"><br>
        <br>
        <label for="bande_annonce">Bande annonce</label>
        <input type="text" id="bande_annonce" name="bande_annonce"><br>
        <br><br>
        <input type="submit" value="envoi">

    </form>
</body>
</html>
