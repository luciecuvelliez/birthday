<?php
$correctPassword = "28290271"; // Sicher auf dem Server

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputPassword = $_POST['password'];

    if ($inputPassword === $correctPassword) {
        header("Location: success.html");
        exit();
    } else {
        header("Location: index.html?error=1");
        exit();
    }
}
?>
