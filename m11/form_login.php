<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Forum</title>
</head>
<body  class="container">
        <div class="nav">
            <h1><a class="a-text"href="index.html">Menu</a></h1>
            <h1><a class="a-text"href="index.html">Profile</a></h1>
            <h1><a class="a-text"href="form_login.php">Login</a></h1>
        </div> 

    <div class="body_form">
        <form method="POST" action="login.php" >
            <h1>Login Forum</h1>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>

            <button type="submit" name="submit" class="button">Login</button>

            <?php if (isset($_GET['error']) && $_GET['error'] != ''): ?>
            <p style="color: red;"><?php echo $_GET['error']; ?></p>
            <?php endif; ?>

        </form>
    </div>
</body>
</html>
