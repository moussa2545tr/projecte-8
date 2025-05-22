
<?php
$email = $_POST["email"] ?? "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "El correu no és vàlid.";
    } else {
        echo "Email vàlid: $email";
    }
}

if ($error) {
    echo "<p style='color:red;'>$error</p>";
}
?>
