<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Galery</title>
</head>
<body>

<h1><strong>Galery gambar</strong></h1><br>
<?php
$fileList = glob('gambar/*');
foreach($fileList as $filename){
    if(is_file($filename)){
    echo '<img src="' . $filename . '" style="width:150px; margin: 10px;">';

    }
}
?>
</body>
</html>