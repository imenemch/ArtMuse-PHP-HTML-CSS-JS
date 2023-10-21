<?php
// Inclusion de la connexion à la BDD
include "connect.php";

// Récupération des messages de la table
$req_messages = "SELECT * FROM messages";
$res_messages = mysqli_query($id, $req_messages);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messagerie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Messagerie</h2>
        <?php
        // Vérification s'il y a des messages
        if(mysqli_num_rows($res_messages) > 0) {
            // Affichage des messages
            while($row_message = mysqli_fetch_assoc($res_messages)){
                $email = $row_message["email"];
                $sujet = $row_message["sujet"];
                $message = $row_message["message"];
                $date = $row_message["date"];
                ?>
                <div class="message">
                    <div class="meta">
                        <span><strong>De :</strong> <?php echo $email; ?></span>
                        <span><strong>Date :</strong> <?php echo $date; ?></span>
                    </div>
                    <div class="subject"><?php echo $sujet; ?></div>
                    <div class="body"><?php echo $message; ?></div>
                </div>
                <?php
            }
        } else {
            echo "<p>Aucun message trouvé.</p>";
        }
        ?>
    </div>
</body>
</html>
