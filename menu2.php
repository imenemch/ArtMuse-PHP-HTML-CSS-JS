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
    <div class="bandeau">
    <a class="bad" href="accueil.php">Accueil</a>
    <a class="bad" href="exposition.php">Exposition</a>
    <a class="bad" href="notation.php">Deconnexion</a>
    <a class="bad" href="contact.php">Contact</a>
    <a href="profil.php"><img class="av_prof" src='avatar/<?=$_SESSION["avatar"]?>' width="50" height="50"></a>
    </div>
    <div class="video">
    <video src="background/video2.mp4" autoplay muted loop></video>
    </div>

</body>
</html>