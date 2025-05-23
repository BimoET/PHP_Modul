<?php
session_start();


const USERNAME = "admin";
const PASSWORD = "123";


if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: sessions_login.php");
    exit;
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = $_POST["username"] ?? '';
    $pass = $_POST["password"] ?? '';
    
    if ($user === USERNAME && $pass === PASSWORD) {
        $_SESSION["login"] = true;
        $_SESSION["user"] = $user;
        header("Location: sessions_login.php"); 
        exit;
    } else {
        $error = "Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Session</title>
</head>
<body>

<?php if (!isset($_SESSION["login"])): ?>
    <h2>Login</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="post">
        <label>Username:</label><br>
        <input type="text" name="username" required><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>
<?php else: ?>
    <h2>Halo, <?= htmlspecialchars($_SESSION["user"]) ?>!</h2>
    <p>Selamat datang di halaman dashboard.</p>
    <a href="?logout=true">Logout</a>
<?php endif; ?>

</body>
</html>
