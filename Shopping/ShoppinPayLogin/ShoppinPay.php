<?php
session_start();
include "../ShoppinPayMainPage/connect.php"; // DB connection

$message = ""; // Feedback message

// --- Handle Form Submission ---
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $action = $_POST['action'] ?? '';

    // 📝 SIGNUP
    if ($action === "signup") {
        $username = trim($_POST['name']);
        $email    = trim($_POST['email']);
        $password = $_POST['password'] ?? '';
        $confirm  = $_POST['confirm'] ?? '';

        if (empty($username) || empty($email) || empty($password) || empty($confirm)) {
            $message = "<div class='msg error'>⚠️ All fields are required</div>";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $message = "<div class='msg error'>⚠️ Invalid email format</div>";
        } elseif ($password !== $confirm) {
            $message = "<div class='msg error'>❌ Passwords do not match</div>";
        } else {
            $hashed = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $email, $hashed);

            if ($stmt->execute()) {
                $message = "<div class='msg success'>✅ Account created successfully! Please login.</div>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        document.getElementById('signup_form').style.display = 'none';
                        document.getElementById('login_form').style.display = 'block';
                    });
                </script>";
            } else {
                if ($conn->errno === 1062) {
                    if (strpos($conn->error, 'username') !== false) {
                        $message = "<div class='msg error'>❌ Username already exists</div>";
                    } elseif (strpos($conn->error, 'email') !== false) {
                        $message = "<div class='msg error'>❌ Email already exists</div>";
                    } else {
                        $message = "<div class='msg error'>❌ Duplicate entry</div>";
                    }
                } else {
                    $message = "<div class='msg error'>❌ Database error: " . htmlspecialchars($stmt->error) . "</div>";
                }
            }
            $stmt->close();
        }
    }

    // 🔐 LOGIN
    if ($action === "login") {
        $email    = trim($_POST['email']);
        $password = $_POST['password'] ?? '';

        if (empty($email) || empty($password)) {
            $message = "<div class='msg error'>⚠️ Email and password are required</div>";
        } else {
            $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                $stmt->bind_result($id, $username, $hashedPassword);
                $stmt->fetch();

                if (password_verify($password, $hashedPassword)) {
                    // ✅ Correct password: login
                    $_SESSION['user_id']  = $id;
                    $_SESSION['username'] = $username;

                    header("Location: ../ShoppinPayMainPage/ShoppinPay_Home_Page.php");
                    exit;
                } else {
                    $message = "<div class='msg error'>❌ Invalid password</div>";
                }
            } else {
                $message = "<div class='msg error'>❌ No account found with this email</div>";
            }
            $stmt->close();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <link rel="stylesheet" href="../ShoppinPayCSS/ShoppinPay.css">
  <title>Shoppin'Pay</title>
</head>
<body>
  <?php if (!empty($message)) echo $message; ?>

  <header class="header">
    <nav class="nav">
      <ul class="Shopping_login">
        <button class="button" type="button" id="show_login_form">Login</button>
        <li class="Shopping"><h1>Choose and Pay</h1></li>
      </ul>
      <span class="Shopping1">Shop anywhere, anytime with Shoppin'Pay</span>
    </nav>
  </header>

  <div class="form_container" id="form_container" style="display: none;">
    <!-- 🔐 LOGIN FORM -->
    <div class="form login_form" id="login_form">
      <form action="" method="POST">
        <input type="hidden" name="action" value="login">

        <div class="input_box">
          <input type="email" name="email" placeholder="Enter your email address" required>
        </div>
        <i class="uil uil-envelope"></i>

        <div class="input_box">
          <input type="password" name="password" id="login_password" placeholder="Enter your password" required>
        </div>
        <i class="uil uil-eye-slash togglePassword" toggle="#login_password"></i>

        <button class="button" type="submit">Login</button>
        <a href="#">Forgot Password?</a>
        <hr class="divider">

        <div class="login_signup">
          <a href="#" id="show_signup">Create New Account</a>
        </div>
      </form>
    </div>

    <!-- 📝 SIGNUP FORM -->
    <div class="form signup_form" id="signup_form" style="display: none;">
      <form action="" method="POST">
        <input type="hidden" name="action" value="signup">

        <div class="input_box">
          <input type="text" name="name" placeholder="Enter your name" required>
        </div>
        <i class="uil uil-user"></i>

        <div class="input_box">
          <input type="email" name="email" placeholder="Enter your email address" required>  
        </div>
        <i class="uil uil-envelope"></i>

        <div class="input_box">
          <input type="password" name="password" id="signup_password" placeholder="Create a password" required>
        </div>
        <i class="uil uil-eye-slash togglePassword" toggle="#signup_password"></i>

        <div class="input_box">
          <input type="password" name="confirm" id="signup_confirm" placeholder="Confirm your password" required>
        </div>
        <i class="uil uil-eye-slash togglePassword" toggle="#signup_confirm"></i>

        <button class="button" type="submit">Sign Up</button>
        <div class="login_signup">
          <p>Already have an account? <a href="#" id="show_login">Login</a></p>
        </div>
      </form>
    </div>
  </div>

  <script src="../ShoppinPayJS/ShoppinPay.js"></script>
</body>
</html>
