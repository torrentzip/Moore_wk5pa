<?php
session_start();

$name = $_COOKIE["user_name"] ?? "";
$dob  = $_SESSION["user_dob"] ?? "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"] ?? "");
    $dob  = trim($_POST["dob"] ?? "");

    setcookie("user_name", $name, time() + 3600, "/");
    $_SESSION["user_dob"] = $dob;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Torren Moore Wk 5 Performance Assessment</title>
</head>

<body>
    <h3>Store your name in a cookie and birthdate in the Session</h3>

    <form method="post" action="data_entry.php">
        <p><b>Name:</b> <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>"></p>
        <p><b>Date of Birth:</b> <input type="text" name="dob" value="<?php echo htmlspecialchars($dob); ?>"></p>
        <input type="submit" value="Submit">
    </form>

    <p><a href="data_display.php">Show Data Display Page</a></p>
</body>

</html>