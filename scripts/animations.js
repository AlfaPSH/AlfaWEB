document.getElementById("contactForm").addEventListener("submit", async function (e) {
    e.preventDefault();
    const form = e.target;
    const formData = new FormData(form);

    try {
        const response = await fetch(form.action, {
            method: form.method,
            body: formData,
        });

        if (response.ok) {
            alert("Formulario enviado con éxito. ¡Gracias!");
            form.reset();
        } else {
            alert("Hubo un error al enviar el formulario. Intenta de nuevo.");
        }
    } catch (error) {
        alert("No se pudo enviar el formulario. Revisa tu conexión.");
    }
});
