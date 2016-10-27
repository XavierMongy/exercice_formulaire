<?php


if (isset ($_POST['firstname']) AND isset ($_POST['name']) AND isset ($_POST['city']) AND isset ($_POST['sexe']) AND isset ($_POST['age']) AND isset ($_POST['hobbies'])) {
  //assigner un type à mon champs
  $_POST["age"] = (int) $_POST["age"];

  echo "Hello " . htmlspecialchars($_POST["firstname"]) . " you are a " . htmlspecialchars($_POST["sexe"]);
}
else {
  echo "you did not fill the form";
}


 ?>
