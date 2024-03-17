<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate credentials (dummy example)
    if ($username === "admin" && $password === "password") {
        // Redirect to dashboard
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }
}
?>
