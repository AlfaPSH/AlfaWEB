<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Guardar los datos en el archivo
    $file = fopen("db/forms/forms-submission.txt", "a");
    fwrite($file, "Nombre: $name\nCorreo: $email\nMensaje: $message\n\n");
    fclose($file);

    // Redirigir al usuario a la subpágina
    header("Location: ../thank_you.html");
    exit();
}
?>
