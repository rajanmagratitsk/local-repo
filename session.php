<?php
session_start();

// Logout
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Form submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['user'] = $_POST['username'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session in One File</title>
</head>
<body>

<h2>Session Example (Single File)</h2>

<?php if (!isset($_SESSION['user'])) { ?>

    <!-- FORM -->
    <form method="post">
        Name: <input type="text" name="username" required>
        <input type="submit" value="Login">
    </form>

<?php } else { ?>

    <!-- DISPLAY SESSION -->
    <h3>Welcome bro, <?php echo $_SESSION['user']; ?></h3>

    <!-- LOGOUT -->
    <a href="?logout=true">Logout</a>

<?php } ?>

</body>
</html>