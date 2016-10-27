<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="cible.php" method="post">
      <input type="text" name="firstname" value="Firstname"><br />
      <input type="text" name="name" value="Name" /><br />
      <input type="text" name="age" value="Age" /><br />
      <input type="radio" name="sexe" value="man" id="man" > <label for="man">Man</label>
      <input type="radio" name="sexe" value="woman" id="woman" > <label for="woman">Woman</label><br />
      <input type="text" name="city" value="City" /><br />
      <input type="checkbox" name="hobbies" id="sport" /> <label for="sport">Sport</label><br />
      <input type="checkbox" name="hobbies" id="reading" /> <label for="reading">Reading</label><br />
      <input type="checkbox" name="hobbies" id="movies" /> <label for="movies">Movies</label><br />
      <input type="submit" value="Valider" />
    </form>
    <form action="target_files.php" method="post" enctype="multipart/form-data">
      <p>
        Formulaire d'envoi de fichier :<br />
        <input type="file" name="file" /><br />
        <input type="submit" value="Envoyer le fichier" />
       </p>
    </form>
  </body>
</html>
