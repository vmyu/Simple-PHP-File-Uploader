<?php

error_reporting(E_ALL);
ini_set('display_errors',1);

echo "test";

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["filetoupload"]["name"]);
$uploadOk=1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

//check if file is image

if (isset($_POST["submit"])){

	$check = getimagesize($_FILES["filetoupload"]["tmp_name"]);
	if($check !== false){
		echo "File is an image - ". $check["mime"] . ".";
		$uploadOk = 1;
	}
	else
	{
		echo "file is not an image";
		$uploadOk = 0;

	}

}

//if already exists
if (file_exists($target_file)){

echo "file already exists";

$uploadOk = 0;

}



//check if uploadOk set to 0 for error
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

