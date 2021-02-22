<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["filetoupload"]["name"]);
$uploadOk=1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if (file_exists($target_file)){

echo "file already exists";

$uploadOk = 0;

}



if ($uploadOk = 0){
	echo "file was not uploaded";

}

else{

if (move_uploaded_file($_FILES["filetoupload"]["tmp_name"],$target_file)){

	echo "file uploaded";

}
else{

echo "error uploading file...";
}


}



?>

