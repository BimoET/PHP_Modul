<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        .eror{
            color:red;
            font-size: 0.7em;
        }
    </style>
</head>
<body>
    <?php
    $name = $email = "";
    $nameErr = $emailErr = "";
    // 
    function bersihkan_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST["u"])) {
            $nameErr = "masukkan username";
        } else {
            $name = bersihkan_input($_POST["u"]);
        }
        if (empty($_POST["p"])) {
            $emailErr = "masukkan password";
        } else {
            $email = bersihkan_input($_POST["p"]);
        }
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Username: <input type="text" name="u">
        <span class="eror">* <?php echo $nameErr;?></span>
        <br><br>
        password: <input type="password" name="p">
        <span class="eror">* <?php echo $emailErr;?></span>
        <br><br>
        <input type="submit" value="Login">
</form>
</body>
</html>