<?php
 
$afficherFormulaire = true; 

if ($_SERVER['REQUEST_METHOD'] === 'POST'&& isset($_POST['action']) && $_POST['action'] === 'Soumettre') {

 
  require_once('C:\Xampp\htdocs\Projet_php\connexion_db\conn_db.php');

    $nom_auteur = mysqli_real_escape_string($conn, $_POST['nom_auteur']);
    $prenom_auteur = mysqli_real_escape_string($conn, $_POST['prenom_auteur']);
    $titre = mysqli_real_escape_string($conn, $_POST['titre']);
    
    
    $sql = "SELECT * FROM Document INNER JOIN Auteur
           ON  Document.ID_Auteur = Auteur.ID_Auteur 
           WHERE Titre = '$titre' AND nom_a = '$nom_auteur'";

    $query= mysqli_query($conn, $sql) or die(mysqli_error($conn));

          $result = $conn->query($sql);
    
    if ( mysqli_num_rows($result) > 0) 
        {$row = $result->fetch_assoc();}
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'Modifier') 
{
    
    $titre = $_POST['titre'];
    $nom_auteur = $_POST['nom_auteur'];
    $prenom_auteur = $_POST['prenom_auteur'];

    require_once('C:\Xampp\htdocs\Projet_php\connexion_db\conn_db.php');

            
            $nouveauTitre =  mysqli_real_escape_string($conn, $_POST['ntitre']);
            $nouveauTheme =  mysqli_real_escape_string($conn, $_POST['ntheme']);
            $nouveauResume =  mysqli_real_escape_string($conn, $_POST['nresume']);
            $nouveauPrenom = mysqli_real_escape_string($conn, $_POST['nprenom_auteur']);
            $nouveauNom =  mysqli_real_escape_string($conn, $_POST['nnom_auteur']);

            
            
            $sqlUpdate1= "UPDATE Document
                          INNER JOIN Auteur ON Document.ID_Auteur = Auteur.ID_Auteur
                        SET Document.Titre = '$nouveauTitre', Document.Thème = '$nouveauTheme',
                            Document.Resume = '$nouveauResume'
                        WHERE Document.Titre = '$titre' AND Auteur.nom_a = '$nom_auteur'";
             $queryUpdate1= mysqli_query($conn, $sqlUpdate1) or die(mysqli_error($conn));


            $sqlUpdate2= "UPDATE Auteur SET nom_a = '$nouveauNom', prenom_a= '$nouveauPrenom'
                          WHERE nom_a= '$nom_auteur' AND prenom_a= '$prenom_auteur'";
             $queryUpdate2= mysqli_query($conn, $sqlUpdate2) or die(mysqli_error($conn));



            if ($conn->query($sqlUpdate1) === TRUE  &&  $conn->query($sqlUpdate2) === TRUE )   
            {
                echo ' <script>alert ("Les informations du livre ont été mises à jour avec succès.")</script>';
                
               $afficherFormulaire = false; 
               echo "<a href='menu.php'>Retour à l'accueil</a>";

            } else {
                echo '<script>alert("Erreur lors de la mise à jour des informations du livre")</script>';   
              $afficherFormulaire = false; 
              echo "<a href='menu.php'>Retour à l'accueil</a>";
              echo "<a href='Modif_doc.php'>Nouvel essai</a>";

            }
        }
        ?>


<!DOCTYPE html>
<html lang="fr-FR">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bank'e</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="stylesheet" type="text/css" href="styleform.css">

</head>

<body>



<?php if ($afficherFormulaire): ?>
<div class="formule">

    
    <form action="" method="post">

        <div class="formbold-mb-5">
            <label for="nouveauTitre" class="formbold-form-label">Nouveau Titre :</label>
            <input type="text" name="ntitre" class="formbold-form-inputs" id="nouveauTitre" required value="<?php echo $row['Titre']; ?>"><br><br>
        </div>

        <div class="formbold-mb-5">
            <label for="nouveauTheme" class="formbold-form-label">Nouveau Thème :</label>
            <input type="text" name="ntheme" class="formbold-form-inputs" class="formbold-form-input" id="nouveauTheme" required value="<?php echo $row['Thème']; ?>"><br><br>
        </div>

        <div class="formbold-mb-5">
            <label for="nouveauResume" class="formbold-form-label">Nouveau Résumé :</label>
            <textarea name="nresume" class="formbold-form-inputs" id="nouveauResume" required><?php echo $row['Resume']; ?></textarea><br><br>
        </div>
 

        <div class="formbold-mb-5">
            <label for="nouveauPrenom" class="formbold-form-label"> Nouveau prénom :</label>
            <input type="text" name="nprenom_auteur" class="formbold-form-inputs" id="nouveauPrenom" required value="<?php echo $row['prenom_a']; ?>"><br><br>
        </div>

        <div class="formbold-mb-5">
            <label for="nouveauNom" class="formbold-form-label"> Nouveau nom:</label>
            <input type="text" name="nnom_auteur" class="formbold-form-inputs" id="nouveauNom" required value="<?php echo $row['nom_a']; ?>"><br><br>
        </div>
    
      <input type="hidden" name="titre" value="<?php echo $titre; ?>">
      <input type="hidden" name="nom_auteur" value="<?php echo $nom_auteur; ?>">
      <input type="hidden" name="prenom_auteur" value="<?php echo $prenom_auteur; ?>">

        
        <input class="login" type="submit" name="action" value="Modifier">
        
        <a href='menu.php'>Retour à l'accueil</a>

    </form>
    <?php endif; ?>
</div>
</body>
</html>







    




