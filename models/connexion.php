<?php

//Démarrer session
session_start();

//Connexion à la base de données
function dbConnect(){
    try{
        $db = new PDO('mysql:host=localhost;dbname=tresor;charset=utf8', 'djibril', 'tamou');
        return $db;
    }catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
}

//Récupérer tout
function getAll(){
    $db = dbConnect();

    $req = $db->query('SELECT o.idOeuvre, o.nom, a.nomArt, a.prenom, o.annee, c.nomCategorie FROM oeuvre o LEFT JOIN artiste a ON o.idArtiste = a.idArtiste LEFT JOIN categorie c ON o.idCategorie = c.idCategorie ORDER BY o.idOeuvre');
    return $req;
}

//Recuperer toutes les catégories
function getAllCategorie(){
    $db = dbConnect();

    $req = $db->query('SELECT * FROM categorie ORDER BY idCategorie DESC');
    // $req = $db->query('SELECT * FROM departement ORDER BY nom_c ASC');
    return $req;
}

//Récupérer en fction de l'id
function getInfoById($id){
    $db = dbConnect();

    $req = $db->prepare('SELECT o.idOeuvre, o.nom, a.nomArt, a.prenom, o.annee, c.nomCategorie FROM oeuvre o LEFT JOIN artiste a ON o.idArtiste = a.idArtiste LEFT JOIN categorie c ON o.idCategorie = c.idCategorie WHERE o.idOeuvre = ?');
    //$req = $db->prepare('SELECT o.idOeuvre, o.idCategorie, o.idArtiste, o.nom, a.nomArt, a.prenom, o.annee, c.nomCategorie FROM oeuvre o LEFT JOIN artiste a ON o.idArtiste = a.idArtiste LEFT JOIN categorie c ON o.idCategorie = c.idCategorie WHERE idOeuvre = ?');
    $req->execute(array($id));
    return $req;
}

//Ajouter à db
function add($nom, $desc, $annee, $artiste, $categorie){
    $db = dbConnect();

    $req = $db->prepare('INSERT INTO oeuvre VALUES(Null,?,?,?,?,?)');
    if($req->execute(array($nom, $desc, $annee, $artiste, $categorie)))
        return true;
    else
        return false;
}

//rechercher dans la db
// function search($code) {
//     $db = dbConnect();

//     $req = $db->prepare('SELECT codprojet,nomprojet,datelance,duree,l.codlocal,nomlocal FROM projet p LEFT JOIN localite l ON p.codlocal=l.codlocal WHERE codprojet LIKE :code');
//     $req->execute(array(':code' => '%' . $code . '%'));
//     return $req;
// }

//Compter le nombre
function countNbre() {
    $db = dbConnect();

    $stmt = $db->query('SELECT COUNT(*) AS nbr_total FROM oeuvre');
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['nbr_total'];
}

//Modifier l'infos
function update($nom, $desc, $annee, $artiste, $categorie, $id){
    $db = dbConnect();

    $req = $db->prepare('UPDATE oeuvre SET nom = ?, description = ?, annee = ?, idArtiste = ?, idCategorie = ? WHERE idOeuvre = ?');

    if($req->execute(array($nom, $desc, $annee, $artiste, $categorie, $id)))
        return true;
    else
        return false;
}

//Supprimer l'nfos
function delete($id){
    $db = dbConnect();

    $req = $db->prepare('DELETE FROM oeuvre WHERE id = ?');

    if($req->execute(array($id)))
        return true;
    else
        return false;
}

