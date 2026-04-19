<?php
// Create Cookie
if(isset($_POST['create'])) {
    setcookie("username", $_POST['username'], time()+3600);
    setcookie("password", $_POST['password'], time()+3600);
    echo "Cookies Created Successfully!<br>";
}



?>

<html>
<head>
    <title>Cookie Program</title>
</head>
<body>

<h2>Cookie Program for question no 2</h2>

<form method="post">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" name="create" value="Create Cookie">
    <input type="submit" name="show" value="Show Cookie">
   
</form>

<br>

<?php
if(isset($_POST['show'])) {
    if(isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
        echo "Username: " . $_COOKIE['username'] . "<br>";
        echo "Password: " . $_COOKIE['password'];
    } else {
        echo "No Cookies Found!";
    }
}
?>

</body>
</html>
<h3><b>qno 2 by rajan</b></h3>
