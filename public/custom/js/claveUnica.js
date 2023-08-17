/* JS CLAVE UNICA */

function logout(ruta) {
    // llamada al endpoint de logout
    window.location.href = "https://accounts.claveunica.gob.cl/api/v1/accounts/app/logout";

    // redirección al cabo de 1 segundo a un handler de logout en la aplicación integradora
    setTimeout(function() {
        $.ajax({
            type: 'POST',
            url: ruta,
            success: function() {
                location.reload();
            }
        });

    }, 1000);
}