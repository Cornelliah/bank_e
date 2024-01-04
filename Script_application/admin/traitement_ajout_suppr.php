<?php
if (isset($_POST["action"])) {
    $action = $_POST["action"];

    require_once ('../connexion_db/conn_db.php');
    // Récupération des données par post
    $nom_a = mysqli_real_escape_string($conn, $_POST['nom_auteur']);
    $prenom_a = mysqli_real_escape_string($conn, $_POST['prenom_auteur']);
    $Titre = mysqli_real_escape_string($conn, $_POST['titre']);
    $Thème = mysqli_real_escape_string($conn, $_POST['theme']);
    $Resume = mysqli_real_escape_string($conn, $_POST['resume']);

    if ($action == "Ajouter") {

        // Définition de la requête d'insertion de l'auteur
        $sql_ajout2 = "INSERT INTO Auteur (nom_a, prenom_a) VALUES ('$nom_a', '$prenom_a')";
        $query_ajout2 = mysqli_query($conn, $sql_ajout2) or die(mysqli_error($conn));

        // Récupération de l'ID de l'auteur nouvellement inséré
        $id_auteur = mysqli_insert_id($conn);

        // Définition de la requête d'insertion du document en utilisant l'ID de l'auteur
        $sql_ajout1 = "INSERT INTO Document (ID_Auteur, Thème, Titre, Resume) VALUES ('$id_auteur', '$Thème', '$Titre', '$Resume')";
        $query_ajout1 = mysqli_query($conn, $sql_ajout1) or die(mysqli_error($conn));

        echo "<h2>Le document $Titre a bien été ajouté</h2>";
        echo "<a href='menu.php'>Retour à l'accueil</a>";

    } elseif ($action == "Supprimer") {

        // Requête de suppression du document en fonction du titre et du thème
        $sql_suppr1 = "DELETE FROM Document WHERE Titre='$Titre' AND Thème='$Thème'";
        $query_suppr1 = mysqli_query($conn, $sql_suppr1) or die(mysqli_error($conn));

        // Requête de suppression de l'auteur en fonction du nom et du prénom
        $sql_suppr2 = "DELETE FROM Auteur WHERE nom_a='$nom_a' AND prenom_a='$prenom_a'";
        $query_suppr2 = mysqli_query($conn, $sql_suppr2) or die(mysqli_error($conn));

        echo "<h2>Le document $Titre a bien été supprimé</h2>";
        echo "<a href='menu.php'>Retour à l'accueil</a>";
    }
}
?>






















