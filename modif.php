<?php
// Inclusion du fichier de connexion à la base de données
include 'connect.php';

// Vérification si l'id de l'œuvre à modifier est passé en paramètre
if (isset($_GET['ido'])) {
  $ido = $_GET['ido'];

  // Vérification si le formulaire de modification a été soumis
  if (isset($_POST['submit'])) {
    // Récupération des données du formulaire
    $categorie = $_POST['categorie'];
    $description = $_POST['description'];
    $nb_like = $_POST['nb_like'];

    // Vérification si un nouveau fichier a été uploadé
    if ($_FILES['photo']['name']) {
      $photo = $_FILES['photo']['name'];
      $photo_tmp = $_FILES['photo']['tmp_name'];

      // Déplacement du fichier uploadé vers le répertoire des images
      move_uploaded_file($photo_tmp, 'oeuvre/' . $photo);
    } else {
      // Utilisation de l'ancienne photo si aucun fichier n'a été uploadé
      $query = "SELECT photo FROM oeuvre WHERE ido='$ido'";
      $result = mysqli_query($id, $query);
      $row = mysqli_fetch_assoc($result);
      $photo = $row['photo'];
    }

    // Requête de mise à jour de l'œuvre
    $query = "UPDATE oeuvre SET categorie='$categorie', description='$description', nb_like='$nb_like', photo='oeuvre/$photo' WHERE ido='$ido'";
    $result = mysqli_query($id, $query);

    if ($result) {
      // Redirection vers la page listeoeuvre.php après la modification
      header('Location: listeoeuvre.php');
      exit();
    } else {
      echo 'Erreur lors de la mise à jour de l\'œuvre.';
    }
  }

  // Requête pour récupérer les informations de l'œuvre à modifier
  $query = "SELECT * FROM oeuvre WHERE ido='$ido'";
  $result = mysqli_query($id, $query);

  // Vérification si l'œuvre existe
  if (mysqli_num_rows($result) > 0) {
    $oeuvre = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Modifier une œuvre</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Modifier une œuvre</h1>

  <form method="post" enctype="multipart/form-data">
    <label for="categorie">Catégorie :</label>
    <select name="categorie" required>
      <option value="Sculpture" <?php if ($oeuvre['categorie'] == 'Sculpture') echo 'selected'; ?>>Sculpture</option>
      <option value="Bijoux" <?php if ($oeuvre['categorie'] == 'Bijoux') echo 'selected'; ?>>Bijoux</option>
      <option value="Peinture" <?php if ($oeuvre['categorie'] == 'Peinture') echo 'selected'; ?>>Peinture</option>
      <option value="Poesie" <?php if ($oeuvre['categorie'] == 'Poesie') echo 'selected'; ?>>Poesie</option>
      <option value="Meuble" <?php if ($oeuvre['categorie'] == 'Meuble') echo 'selected'; ?>>Meuble</option>
      <option value="Costume" <?php if ($oeuvre['categorie'] == 'Costume') echo 'selected'; ?>>Costume</option>
    </select><br>

    <label for="description">Description :</label>
    <textarea name="description" required><?php echo $oeuvre['description']; ?></textarea>

    <label for="nb_like">Nombre de likes :</label>
    <input type="number" name="nb_like" value="<?php echo $oeuvre['nb_like']; ?>" required>

    <label for="photo">Photo :</label>
    <input type="file" name="photo" accept="image/*">

    <input type="submit" name="submit" value="Modifier">
  </form>

</body>
</html>

<?php
  } else {
    echo 'Œuvre non trouvée.';
  }

  // Libération des résultats de la requête
  mysqli_free_result($result);
} else {
  echo 'Id de l\'œuvre non spécifié.';
}
// Bouton retour 
?>
<p><button><a class="lien" href="accueil.php">Retour</a></button></p><br><br>
<?php

// Fermeture de la connexion à la base de données
mysqli_close($id);
?>
