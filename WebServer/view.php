<style>
body {
background-image: url("background.jpg");
background-size: cover;
}
</style>
</head>
<body>
<?php
$file1 = "result.wav";
$file2 = "result2.wav";
$file3 = "result3.wav";

if (file_exists("/share/" . $file1) || file_exists("/share/" . $file2) || file_exists("/share/" . $file3)){
        copy("/share/input.wav", "input.wav");
        echo 'Original music: <br>';
        echo '<a href="input.wav">input.wav</a><br>';
        echo '<audio controls><source src="input.wav" type="audio/wav"></audio><br><br><br>';

        $fp = fopen("/share/_status.txt", "r");
        $line1 = fgets($fp);
        $line2 = fgets($fp);
        $line3 = fgets($fp);

        echo 'Modified music: <br>';
        if (file_exists("/share/" . $file1)){
                copy("/share/" . $file1, $file1);
                echo '<a href="' . $file1 . '">' . basename($file1) . '</a><br>';
                echo '<audio controls><source src="' . $file1 . '" type="audio/wav"></audio><br><br>';
        } else{
                echo $line1. "<br>";
        }
        if (file_exists("/share/" . $file2)){
                copy("/share/" . $file2, $file2);
                echo '<a href="' . $file2 . '">' . basename($file2) . '</a><br>';
                echo '<audio controls><source src="' . $file2 . '" type="audio/wav"></audio><br><br>';
        } else{
                echo $line2 . "<br>";
        }
        if (file_exists("/share/" . $file3)){
                copy("/share/" . $file3, $file3);
                echo '<a href="' . $file3 . '">' . basename($file3) . '</a><br>';
                echo '<audio controls><source src="' . $file3 . '" type="audio/wav"></audio><br><br>';
        } else{
                echo $line3 . "<br><br>";
        }

}
else{
        $fp = fopen("/share/_status.txt", "r");
        while($line=fgets($fp)){
                echo $line;
        }
        echo "Queuing...\n";
}

echo "CPU usage<br>";
echo "Computing Node 1<br>";
$fp = fopen("/share/usage1.txt", "r");
while($line=fgets($fp)){
        echo $line . "<br>";
}
fclose($fp);

echo "<br>Computing Node 2<br>";
$fp = fopen("/share/usage2.txt", "r");
while($line=fgets($fp)){
        echo $line . "<br>";
}
fclose($fp);

echo "<br>Computing Node 3<br>";
$fp = fopen("/share/usage3.txt", "r");
while($line=fgets($fp)){
        echo $line . "<br>";
}
fclose($fp);
?>
</body>
</html
