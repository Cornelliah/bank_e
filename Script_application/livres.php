
<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bank'e</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link rel="icon" type="image/png" sizes="512x512" href="img\fav.png">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- banke CSS Files -->
  <link href="banke/aos/aos.css" rel="stylesheet">
  <link href="banke/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="banke/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="banke/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="banke/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="banke/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php">Bank'e</a></h1>
      

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Accueil</a></li>
          <li><a class="nav-link scrollto " href="livres.php">Livres</a></li>
        </ul>
        <form action="livres.php" method="get">
    <div >
        <input class="search-bar" type="text" name="q" placeholder="Rechercher...">
        <button type="submit"><i class="bi bi-search"></i></button>
    </div>
    </form>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- Fin Header -->



</html>




  <?php
if (isset($_GET['q'])) 
{
  $termeRecherche = $_GET['q'];
  require_once('C:\Xampp\htdocs\Projet_php\connexion_db\conn_db.php');

  $termeRecherche = mysqli_real_escape_string($conn, $termeRecherche);
  $sql = "SELECT Document.Titre, Document.Thème, Document.Resume,Auteur.ID_Auteur, Auteur.nom_a, Auteur.prenom_a
  FROM Document
  INNER JOIN Auteur ON Document.ID_Auteur = Auteur.ID_Auteur 
  WHERE Thème LIKE '%$termeRecherche%'OR Titre LIKE '%$termeRecherche%' 
  OR nom_a LIKE '%$termeRecherche%' OR prenom_a LIKE '%$termeRecherche%'
  OR FIND_IN_SET('$termeRecherche', 'Mot_clé')";

    $result = $conn->query($sql);

   if (mysqli_num_rows($result) > 0) {
    while ($row = $result->fetch_assoc()) {

        $urlRedirection = 'téléchargement.php?livre_id='. $row["ID_Auteur"] . '';

         // Utiliser l'ID_Auteur comme ID pour la div
         echo '<div id="' . $row["ID_Auteur"] . '" class="image-container">';

         echo '<img class="liv_img "src="img/'. $row["ID_Auteur"] .'.jpeg" >';
         echo '<button class="redirection-button" data-url="' . $urlRedirection. '">Télécharger</button>';
         echo '<br>';
         echo "<strong>Titre :</strong> " . $row["Titre"] . "<br>";
         echo "<strong>Thème : </strong>" . $row["Thème"] . "<br>";
         echo '<br>';
         echo '<div id="resume">';
         echo "<strong>Résumé : </strong>" . $row["Resume"] . "<br>";
         echo'</div>';
         echo '<br>';
         echo "<strong>Auteur : </strong>" . $row["prenom_a"] . " " . $row["nom_a"] . "<br><br>";
         echo '<br>';

         echo '</div>';
         
     }
    
    } 
   else {
        $PHPtext="Aucun document ne correspond à votre recherche";
         
    require_once('C:\Xampp\htdocs\Projet_php\connexion_db\conn_db.php');

    $sql = "SELECT Document.Titre, Document.Thème, Document.Resume,Auteur.ID_Auteur, Auteur.nom_a, Auteur.prenom_a
    FROM Document
    INNER JOIN Auteur ON Document.ID_Auteur = Auteur.ID_Auteur";

    $result = $conn->query($sql);

    if (mysqli_num_rows($result) > 0) {
     while ($row = $result->fetch_assoc()) {

     $urlRedirection = 'téléchargement.php?livre_id='. $row["ID_Auteur"] . '';

      
      echo '<div id="' . $row["ID_Auteur"] . '" class="image-container">';
      echo '<img class="liv_img" src="img/'. $row["ID_Auteur"] .'.jpeg" >';
      echo '<button class="redirection-button" data-url="' . $urlRedirection. '"> Télécharger</button>';
      echo '<br>';
      echo "<strong>Titre :</strong> " . $row["Titre"] . "<br>";
      echo "<strong>Thème : </strong>" . $row["Thème"] . "<br>";
      echo '<br>';
      echo '<div id="resume">';
      echo "<strong>Résumé : </strong>" . $row["Resume"] . "<br>";
      echo'</div>';
      echo '<br>';
      echo "<strong>Auteur : </strong>" . $row["prenom_a"] . " " . $row["nom_a"] . "<br><br>";
      echo '<br>';

      echo '</div>';
        }


     }
   }
}

if (!isset($_GET['q'])) 
{
  require_once('C:\Xampp\htdocs\Projet_php\connexion_db\conn_db.php');

  $sql = "SELECT Document.Titre, Document.Thème, Document.Resume,Auteur.ID_Auteur, Auteur.nom_a, Auteur.prenom_a
  FROM Document
  INNER JOIN Auteur ON Document.ID_Auteur = Auteur.ID_Auteur";

  $result = $conn->query($sql);

  if (mysqli_num_rows($result) > 0) {
   while ($row = $result->fetch_assoc()) {

   $urlRedirection = 'téléchargement.php?livre_id='. $row["ID_Auteur"] . '';

    
    echo '<div id="' . $row["ID_Auteur"] . '" class="image-container">';
    echo '<img class="liv_img" src="img/'. $row["ID_Auteur"] .'.jpeg" >';
    echo '<button class="redirection-button" data-url="' . $urlRedirection. '"> Télécharger</button>';
    echo '<br>';
    echo "<strong>Titre :</strong> " . $row["Titre"] . "<br>";
    echo "<strong>Thème : </strong>" . $row["Thème"] . "<br>";
    echo '<br>';
    echo '<div id="resume">';
    echo "<strong>Résumé : </strong>" . $row["Resume"] . "<br>";
    echo'</div>';
    echo '<br>';
    echo "<strong>Auteur : </strong>" . $row["prenom_a"] . " " . $row["nom_a"] . "<br><br>";
    echo '<br>';

    echo '</div>';
      }


   }
 }


?>

<html>
<script>
        $(document).ready(function() {
            // Gérer le clic sur le bouton de redirection
            $('.redirection-button').click(function() {
                
                var urlRedirection = $(this).data('url');

                // Rediriger vers l'URL spécifiée
                window.location.href = urlRedirection;
            });
        });
        
    </script>
    <script>  var JavaScriptAlert = <?php echo json_encode ($PHPtext); ?>;
        alert (JavaScriptAlert); </script>
 <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Bank'e</h3>
              <p>
                Dakar,Sénégal <br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Liens utiles</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="livres.php">Livres</a></li>
    
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Bank'e</span></strong>. All Rights Reserved
      </div>
     
  </footer><!-- Fin Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  
  <script src="banke/aos/aos.js"></script>
  <script src="banke/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="banke/glightbox/js/glightbox.min.js"></script>
  <script src="banke/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="banke/swiper/swiper-bundle.min.js"></script>
  <script src="banke/php-email-form/validate.js"></script>

  
  <script src="js/main.js"></script>

</html>

