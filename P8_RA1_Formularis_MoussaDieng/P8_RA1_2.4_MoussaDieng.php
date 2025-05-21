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
?>
<form method="post">
    Correu: <input type="email" name="email"><br>
    <input type="submit" value="Validar">
</form>
<p style="color:red;"><?php echo $error; ?></p>