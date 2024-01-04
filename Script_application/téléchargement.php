<?php
if (isset($_GET['livre_id'])) {
    $livreID = $_GET['livre_id'];

   
    $nomFichier = "livre_" . $livreID . ".pdf"; 
    $cheminFichier = "livres" . $nomFichier;


    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="' . $nomFichier . '"');
    header('Content-Length: ' . filesize($cheminFichier));

    
    readfile($cheminFichier);
    exit;
}
?>