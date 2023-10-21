<?php session_start();
if(!isset($_SESSION["mail"])){
    header("location:../connexion.php");
}
include "bandeau.php";
include "style.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="stylesheet" href="messagerie.css">
    <title>Messagerie</title>
</head>
<body>
    <h1>Messagerie</h1><hr><br>
    <div class="container">
        <div class="annonces">   
            <?php 
//--------- Affichage des conversation ----------------//
            include 'load_conv.php';
            
            ?>
        </div>

        <div class="box_messages">
            <div class="messages">
                <?php 
//--------- Affichage des messages --------------------//
                if(!isset($_GET["id_conv"])){
                    echo "<br><h2>Aucun message </h2>";
                }
                else include 'load_message.php';
                ?>
            </div>

            <?php
//--------- Affichage de la zone d'envoi messages --------------------//
            if(isset($_GET["id_conv"])){
                echo "<form action='send_message.php' method='post' class='send_messages'>
                        <input type='text' name='message' placeholder='Écrivez votre message ici'>
                        <input type='hidden' name='idu_to' value='$idu_to'>
                        <input type='hidden' name='conv' value='$id_conv'>
                        <input type='submit' value='Envoyer'>
                </form>";
            }
            ?>
        </div>
        <div class="other">
            <?php
//--------- Affichage de la description de l'annonce --------------------//
            if(!isset($_GET["id_conv"])){
                echo "<br><h2>Aucune description</h2>";
            }
            else include "load_info.php";
            ?>      
        </div>
    </div>
</body>
</html>