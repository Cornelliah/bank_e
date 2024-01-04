

<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bank'e</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link rel="icon" type="image/png" sizes="512x512" href="..\img\fav.png">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- banke CSS Files -->
  <link href="../banke/aos/aos.css" rel="stylesheet">
  <link href="../banke/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../banke/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../banke/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../banke/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../banke/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="styleform.css" rel="stylesheet">
</head>

<body>

  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php">Bank'e</a></h1>
      

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="menu.php">Accueil</a></li>
          <li><a class="nav-link scrollto " href="Ajout_suppr_doc.php">Ajouter un document</a></li>
          <li><a class="nav-link scrollto " href="Ajout_suppr_doc.php">Supprimer un document</a></li>
          <li><a class="nav-link scrollto " href="Modif_doc.php">Modifier un document</a></li>
          <li><a class="nav-link scrollto " href="index.php">Déconnexion</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
</header>


<div>
    <h2>Ajouter ou Supprimer un document</h2>
</div>

<div class="formule">
    <form action="traitement_ajout_suppr.php" method="post">
       
        <div class="formbold-mb-5">
            <label for="titre" class="formbold-form-label">Titre :</label>
            <input type="text" name="titre" class="formbold-form-inputs" id="titre" required><br><br>
        </div>

        <div class="formbold-mb-5">
            <label for="theme" class="formbold-form-label">Thème :</label>
            <input type="text" name="theme" class="formbold-form-inputs" class="formbold-form-input" id="theme"><br><br>
        </div>

        <div class="formbold-mb-5">
            <label for="resume" class="formbold-form-label">Résumé :</label>
            <textarea name="resume" class="formbold-form-inputs" id="resume"></textarea><br><br>
        </div>

        <div class="formbold-mb-5">
            <label for="nom_auteur" class="formbold-form-label">Nom de l'auteur :</label>
            <input type="text" name="nom_auteur" class="formbold-form-inputs" id="nom_auteur" required><br><br>
        </div>

        <div class="formbold-mb-5">
            <label for="prenom_auteur" class="formbold-form-label">Prénom de l'auteur :</label>
            <input type="text" class="formbold-form-inputs" name="prenom_auteur" id="prenom_auteur" required><br><br>
        </div>

        <div class="">
            <input class="login" type="submit" name="action" value="Ajouter">
            <input class="login" type="submit" name="action" value="Supprimer">
        </div>

    </form>
</div>
<br>;
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Bank'e</h3>
              <p>
                Dakar,,Sénégal <br>
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
              <li> <i class="bx bx-chevron-right"></i> <a  href="Ajout_suppr_doc.php">Ajouter un document</a></li>
             <li><i class="bx bx-chevron-right"></i><a href="Ajout_suppr_doc.php">Supprimer un document</a></li>
             <li><i class="bx bx-chevron-right"></i><a href="Modif_doc.php">Modifier un document</a></li>
              
    
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

  <!-- banke JS Files -->
  <script src="../banke/aos/aos.js"></script>
  <script src="../banke/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../banke/glightbox/js/glightbox.min.js"></script>
  <script src="../banke/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../banke/swiper/swiper-bundle.min.js"></script>
  <script src="../banke/php-email-form/validate.js"></script>

  
  <script src="../js/main.js"></script>

</body>

</html>