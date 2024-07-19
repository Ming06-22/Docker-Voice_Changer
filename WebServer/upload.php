<?php
unlink("/share/result.wav");
unlink("/share/result2.wav");
unlink("/share/result3.wav");
?>

<html>
<head>
<title>Voice changer</title>
<style>
body{
background-image: url("background.jpg");
background-size: cover;
}
</style>
</head>

<form method="post" action="exe.php" enctype="multipart/form-data">

<input type="file" name="uploadFile">
<input type="submit" value="Submit">

</form>

</html>
