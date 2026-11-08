<?php
session_start();

$name = $_COOKIE["user_name"] ?? "";
$dob  = $_SESSION["user_dob"] ?? "";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Torren Moore Wk 5 Performance Assessment</title>
</head>

<body>
    <p><b>The Name in the Cookie is: <?php echo htmlspecialchars($name); ?></b></p>
    <p><b>The Birthdate in the Session is: <?php echo htmlspecialchars($dob); ?></b></p>

    <p><a href="data_entry.php">Back to Data Entry Page</a></p>
</body>

</html>