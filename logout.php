<?php
session_start();
session_destroy();
header("Location: login.php"); // Go back to login page
exit();
