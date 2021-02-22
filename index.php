<html>
<body>

Version 1 - File listing update

<h3>Existing files:</h3>

<?php
$directory = './uploads';
$scanned_directory = array_diff(scandir($directory), array('..', '.'));

foreach($scanned_directory as $file){
	echo "<a href='./uploads/".$file."'>".$file.'</a><br>';

}
?>

<h3>Upload New File</h3>
<form action = "upload.php" method = "post" enctype ="multipart/form-data">

Select file to upload:
<input type = "file" name ="filetoupload" id = "filetoupload">
<input type ="submit" value="Upload File" name="submit">


</form>
</body>

</html>
