
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <div style="text-align:center; padding:15%;">
        <p style="font-size:50px; font-weight:bold;">
            Hello 
            <?php
            $email = $_SESSION['email'];
            $stmt = mysqli_prepare($conn, "SELECT email FROM users WHERE email = ?");
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                echo htmlspecialchars($row['email']);
            } else {
                echo "User not found.";
            }

            mysqli_stmt_close($stmt);
            ?>
        </p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>

