<?php
// Démarrage de la session
session_start();

// Vérification si l'utilisateur est connecté
if(isset($_SESSION["mail"])){
    // Inclusion de la connexion à la BDD
    include "connect.php";
    
    // Vérification si le formulaire est soumis
    if(isset($_POST["bouton"])){
        // Récupération des données du formulaire
        $sujet = $_POST["sujet"];
        $message = $_POST["message"];
        
        // Récupération de l'ID de l'utilisateur connecté
        $idu = $_SESSION["idu"];
        
        // Récupération de l'e-mail de l'utilisateur connecté
        $req_email = "SELECT mail FROM user WHERE idu = '$idu'";
        $res_email = mysqli_query($id, $req_email);
        $row_email = mysqli_fetch_assoc($res_email);
        $email = $row_email["mail"];
        
        // Insertion dans la BDD
$req = "INSERT INTO messages (idm, idu, email, sujet, message)
VALUES (null, '$idu', '$email', '$sujet', '$message')";
$res = mysqli_query($id, $req);

// Vérification si l'insertion a réussi
if($res){
$mess = "Message envoyé avec succès !!";
} else{
$mess = "Erreur lors de l'envoi du message !!";
}


        // Vérification si l'insertion a réussi
        if($res){
            $mess = "Message envoyé avec succès !!";
        } else{
            $mess = "Erreur lors de l'envoi du message !!";
        }
    }
}
// Redirection vers la page de connexion si l'utilisateur n'est pas connecté
else{
    header("location:connexion.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form class="form_contact" action="" method="post">
        <h2>Nous envoyer un mail : </h2><br>
        <?php
         // Affichage du message d'erreur/réussite
           if(isset($mess)){
               echo $mess;
           }
        ?>
        <p><label for="sujet">Entrez le sujet de votre mail : </label></p>
        <p><input type="text" name="sujet" id="sujet" required></p>
        <label for="mess">Saisissez votre message :</label>
        <p><textarea name="message" id="mess" cols="30" rows="10" required></textarea></p>
        <p><input type="submit" value="Envoyer" name="bouton"></p><br>
        <p>Nous contacter :</p>
        <p>Tel : 061236567</p>
        <p>Adresse postale : 37, Quai de Grenelle.</p><br>
        <p><button><a class="lien" href="accueil.php">Retour</a></button></p>
    </form>
    
</body>
</html>