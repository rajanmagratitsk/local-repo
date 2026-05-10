<?php
// Set cookie when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['username'];

    // set cookie (expires in 1 hour)
    setcookie("user", $name, time() + 3600);
    
    // refresh page to access cookie
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Delete cookie
if (isset($_GET['logout'])) {
    setcookie("user", "", time() - 3600); // expire cookie
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie example ..</title>
</head>
<body>

<h2>Cookie Example (Single File)</h2>

<?php if (!isset($_COOKIE['user'])) { ?>

    <!-- FORM -->
    <form method="post">
        Name: <input type="text" name="username" required>
        <input type="submit" value="Save Cookie">
    </form>

<?php } else { ?>

    <!-- DISPLAY COOKIE -->
    <h3>Welcome, <?php echo $_COOKIE['user']; ?></h3>

    <!-- DELETE COOKIE -->
    <a href="?logout=true">Delete Cookie</a>

<?php } ?>

</body>
</html>