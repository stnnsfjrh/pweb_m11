<?php
// Username dan password hardcoded
$valid_username = 'annis';
$valid_password = '777888';

$error = '';

// Proses login
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek username dan password
    if ($username == $valid_username && $password == $valid_password) {
        session_start();
        $_SESSION['admin'] = $username;
        header('Location: profile.html'); // Redirect ke halaman profile.html
        exit();
    } else {
        $error = 'Username atau password salah!';
        header('Location: form_login.php?error=' . urlencode($error));
        exit();
    }
}
?>
