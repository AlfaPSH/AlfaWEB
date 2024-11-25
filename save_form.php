<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $file = fopen("submissions.txt", "a");
    fwrite($file, "Nombre: $name\nCorreo: $email\nMensaje: $message\n\n");
    fclose($file);

    echo "¡Datos guardados con éxito!";
}
?>
