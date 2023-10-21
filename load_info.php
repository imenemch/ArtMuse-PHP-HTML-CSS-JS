<?php
    /*  Fonction de chargement de la description de l'annonce d'une conversation donnée */

            if(isset($id_conv)){

//---- On récupère l'id  de l'annonce correspondant a la conversation actuelle depuis la table conversation --// 
                $requete_info = "SELECT * FROM conversation where id_conv=$id_conv";
                include "../connect.php";
                $res = mysqli_query($id,$requete_info);
                $conv = mysqli_fetch_assoc($res);
                $id_annonce = $conv["id_annonce"];

//---- On récupère les informations de la table annonce correspondant a la bonne conversation ----------//  
                $requete_info = "SELECT * FROM annonces where id=$id_annonce";
                $res = mysqli_query($id,$requete_info);
                $annonce = mysqli_fetch_assoc($res);
                $desc = $annonce["description"];

//----------- Affichage de la description ---------------------------------------------------//
                echo "<h3>Description</h3><br><div class='desc'>$desc</div><br><br>";
                echo "<button onclick=\"location.href='../annonce.php?annonceid=$id_annonce'\" class='voir'>Voir l'annonce</button>";
                
            }
?>