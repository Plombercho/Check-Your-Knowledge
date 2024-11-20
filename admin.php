<?php
include_once 'dbConnection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['uname'];
    $password = $_POST['password'];

    // Sanitize inputs
    $email = stripslashes($email);
    $password = stripslashes($password);

    // Query the database
    $stmt = $con->prepare("SELECT email, password FROM admin WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row) {
        // Verify the password
        if (password_verify($password, $row['password'])) {
            session_start();
            session_regenerate_id(true); // Prevent session fixation
            $_SESSION["name"] = 'Admin';
            $_SESSION["key"] = 'sunny7785068889'; // Replace with a dynamic value if needed
            $_SESSION["email"] = $email;

            header("Location: dash.php?q=0");
            exit();
        } else {
            // Password mismatch
            header("Location: index.php?q=0&error=invalid_password");
            exit();
        }
    } else {
        // Email not found
        header("Location: index.php?q=0&error=user_not_found");
        exit();
    }
}
?>
