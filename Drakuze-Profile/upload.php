<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "Het bestand is een afbeelding - " . $check["mime"] . ".  ";
    $uploadOk = 1;
  } else {
    echo "Het bestand is geen afbeelding.. ";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, het bestand bestaad al. ";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, je bestand is te groot ";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, alleen JPG, JPEG, PNG & GIF zijn toegestaan. ";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, je bestand is niet geupload door een error ";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "Het bestand ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " is geupload.";
  } else {
    echo "Sorry, er is een error";
  }
}

$img = $_FILES["fileToUpload"]["name"];


?>
    <a href="../public/pikmin.php">ddddddddddd</a>
