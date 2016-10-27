<?php


if (isset($_FILES["file"]) AND $_FILES["file"]["error"] == 0) {
  //check file's size
  if ($_FILES["file"]["size"] <= 5000000) {
    //check file's extension
    $file_infos = pathinfo($_FILES["file"]["name"]);
    $file_extention = $file_infos["extension"];
    $extentions = array("jpg", "pdf", "doc");
    if (in_array($file_extension, $extentions)) {
      move_uploaded_file($_FILES["file"]["tmp_name"], "files/" . basename($_FILES["file"]["name"]));
      echo "Upload done";
    }
  }
  else {
    echo "file too big";
  }
}
else {
  echo "file missing";
}

?>
