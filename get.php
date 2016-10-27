<?php
if (isset($_GET['firstname']) AND isset($_GET['name']) AND isset($_GET['age']) AND isset($_GET['repetitions'])) {
    //assigner un type 
    $_GET['age'] = (int) $_GET['age'];
    $_GET['repetitions'] = (int) $_GET['repetitions'];

    if ($_GET['repetitions'] >= 1 AND $_GET['repetitions'] <= 20 ) {
      for ($i=0; $i < $_GET['repetitions']; $i++) {
        echo 'hello ' . $_GET['fisrtname'] . ' ' . $_GET['name'] . ' you are ' . $_GET['age'];
      }
    }
}
else {
  echo "You must inform a firstname, a name, an age and a number of repetitions";
}
?>
