function cambiarTexto() {
    var boton = document.getElementById("boton");
    
    // Verifica el texto actual del botón
    if (boton.innerText === "Haz clic") {
        boton.innerText = "¡Texto cambiado!";
    } else {
        boton.innerText = "Haz clic";
    }
}