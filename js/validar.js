// Validación para index.php
function validarFigura() {
    const figura = document.getElementById("figura").value;
    if (figura === "") {
        alert("⚠️ Debes seleccionar una figura antes de continuar.");
        return false;
    }
    return true;
}

// Validación para datos.php
function validarDatos() {
    const campos = document.querySelectorAll('input[type="number"]');
    for (let c of campos) {
        if (c.value === "" || c.value <= 0) {
            alert("⚠️ Ingresa valores válidos en todos los campos.");
            return false;
        }
    }
    return true;
}
