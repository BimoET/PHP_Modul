<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data_Cookies</title>
</head>
<body>

<?php
// Proses saat tombol disubmit
if (isset($_POST['submit'])) {
    $nama = htmlspecialchars($_POST['nama']); 
    setcookie("identitas_pengguna", $nama, time() + 60); 
    echo "Data telah disimpan ke cookie.<br>";
}

// Menampilkan isi cookie jika tersedia
if (isset($_COOKIE['identitas_pengguna'])) {
    echo "Hai, " . htmlspecialchars($_COOKIE['identitas_pengguna']) . "!<br><br>";
}
?>

<form method="post" action="">
    <label for="nama">Masukkan nama anda:</label> <br>
    <input type="text" id="nama" name="nama"
        value="<?php echo isset($_COOKIE['identitas_pengguna']) ? htmlspecialchars($_COOKIE['identitas_pengguna']) : ''; ?>" 
        required>
    <button type="submit" name="submit">Simpan</button>
</form>
</body>
</html>
