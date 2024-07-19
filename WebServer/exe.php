<?php
ini_set('display_errors','1');
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html>
<head>
<title>Voice Changer</title>
<style>
body{
background-image: url("background.jpg");
background-size: cover;
}
</style>
</head>
<body>
<?php
$dirPath = "/share/";

if($_FILES["uploadFile"]["error"] > 0){
    echo "ERROR.\n";
}
else{
    $fname = $dirPath . "input.wav";
    move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $fname);
    shell_exec("chmod -Rf 777 $dirPath");
}

echo "<script type='text/javascript'>window.location.href='http://192.168.150.171:8080/cloudsystem/view.php?jobId=".$dirname."'</script>";

?>
</body>
</html>
