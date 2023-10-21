<?php
  session_start();
  include "connect.php";
// Valider un compte utilisateur
        $idu = $_GET["idu"];
        $req = "UPDATE user SET etat = 1 where idu = '$idu'";
        $result = mysqli_query($id, $req);

        if ($result) {
            echo "Le compte utilisateur a été validé avec succès.";
            header("refresh:3 url=détail.php");
        } else {
            echo "Une erreur s'est produite lors de la validation du compte utilisateur.";
        }
?>

