<?php
    /*  Fonction de chargement des messages d'une conversation donnée */

    $idu = $_SESSION["idu"];
    if(isset($_GET["id_conv"])){
        $id_conv = $_GET["id_conv"];
    
//---- On récupère les informations de la table messages correspondant a l'id_conv ---------------------------//  
        $id = mysqli_connect("localhost","root","","artmuse");
        $request =  "select * from messages where id_conv=$id_conv order by idm";
        $res = mysqli_query($id, $request);
        
        while($ligne = mysqli_fetch_assoc($res)){
            $idm = $ligne["idm"];
            //$id_conv = $ligne["id_conv"];
            $idu_from = $ligne["idu_from"];
            $message = $ligne["message"];
            $date = $ligne["date"];
            
//-----     Verification du destinataire et destinateur     -----------------------------------------------------//
            if($ligne["idu_to"] != $idu){     //Met l'id du destinataire dans la variable idu_to si celui-ci n'est pas égal à celui du destinateur 
                $idu_to = $ligne["idu_to"];   //Sera utilisé dans send_message.php
            }else{
                $idu_to = $ligne["idu_from"];
            }

//-----     Affichage des messages ---------------------------------------//
            if($idu_from == $idu){
                echo "<div class='from_me'>$message</div>";
            }elseif($idu_from == $idu_to){
                echo "<div class='to_me'>$message</div>";
            }
        }
    }   
?>
