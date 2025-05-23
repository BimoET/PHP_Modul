<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Uploada gambar</title>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="{243307070}">
    <meta name="author" content="{Bimo Elang}">
</head>
<body>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
    <p><label for="">Pilih Gambar yang akan diuplod: </label> <br>
    <input type="file" name="gambar" value="Pilih gambar" id="gambar1">
    </p>
<input type="submit" value="Upload image" name="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["gambar"])) {
    $target_dir = "gambar/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $uploadok = 1;
    $tipeGambar = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        
    // cek apakah ada kiriman data dengan methode post
    if(isset($_POST["submit"])) {
        // check apakah file berupa gambar
        $check = getimagesize($_FILES["gambar"]["tmp_name"]);
        if($check !== false) {
            echo "file berupa gambar - " . $check["mime"] .".";
            $uploadok = 1;
            // simpan kedalam folder gambar
        } else {
            echo "file bukan gambar";
            $uploadok = 0;
        }
    }

    // deteksi apakah ada file dengan nama yang sama
    if(file_exists($target_file)) {
        echo "sorry, file already exists .";
        $uploadok = 0;
    }

    // Check file size
    if($_FILES["gambar"]["size"] > 10000000000) {
        echo "sorry, file anda terlalu besar."; 
        $uploadok = 0;
    }

    // Filter format
    if($tipeGambar != "jpg" && $tipeGambar != "png" && $tipeGambar != "jpeg" 
        && $tipeGambar != "gif") {
        echo "sorry, hanya file JPG, JPEG, PNG & GIF .";
        $uploadok = 0;
    }
        
    // Check if $uploadaok telah sesuai dengan kriteria
    if ($uploadok == 0) {
        echo "Mohon maaf, File anda tidak dapat diupload.<br>";
    } else {
        // proses upload file
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            echo "file " . htmlspecialchars(basename($_FILES["gambar"]["name"])) . " Berhasil diupload.<br>";
        } else {
            echo "Mohon maaf, Ada error saat upload.<br>";
        }
    }
}
?>
</body>
</html>