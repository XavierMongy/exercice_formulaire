<?php


if (isset ($_POST['firstname']) AND isset ($_POST['name']) AND isset ($_POST['city']) AND isset ($_POST['sexe']) AND isset ($_POST['age']) AND isset ($_POST['hobbies'])) {
  //assigner un type à un mon champs
  $_POST["age"] = (int) $_POST["age"];

  echo "Bienvenue " . htmlspecialchars($_POST["prenom"]) . " tu es un(e) " . htmlspecialchars($_POST["sexe"]);
}
else {
  echo "you did not fill the form";
}


 ?>
