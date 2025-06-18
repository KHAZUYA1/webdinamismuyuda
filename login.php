<?php
session_start();
$error = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // username dan password statis
    if ($username == "admin" && $password == "123456") {
        $_SESSION['login'] = true;
        header("Location: tampil.php");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>🔐 Login Admin</h1>
    <form method="post" class="form-card">
        <label>Username:</label>
        <input type="text" name="username" required>

        <label>Password:</label>
        <input type="password" name="password" required>

        <?php if ($error): ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>

        <button type="submit">Login</button>
    </form>
</div>
</body>
</html>
