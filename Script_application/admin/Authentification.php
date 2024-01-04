<?php

$email = $_POST['Email'];
$motDePasse = $_POST['Mot_dp'];

require_once ('../connexion_db/conn_db.php');

$sql = "SELECT * FROM Administrateur WHERE Email = '$email' AND Mot_dp = '$motDePasse'";

$result = $conn->query($sql);
if (mysqli_num_rows($result) > 0) {

 header ("location: menu.php");
}

else{
    echo 'alert("Echec! Vérifiez votre email et votre mot de passe")';
    header ("location: index.php");
}

?>