<?php
include "connect.php";
// Radié un compte utilisateur
    $idu = $_GET["idu"]; 
    $req = "DELETE FROM user WHERE idu = '$idu'";
    $result = mysqli_query($id, $req);
    if ($result) 
    {
        echo "Le compte utilisateur a été radié avec succès.";
    } 
    else 
    {
        echo "Une erreur s'est produite lors de la radiation du compte utilisateur.";
    }
  

?> 