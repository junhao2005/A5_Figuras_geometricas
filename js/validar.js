// Validar selección de figura (index.php)
function validarFigura() {
    const figura = document.getElementById('figura');
    let error = figura.nextElementSibling;

    if (!error || !error.classList.contains('error')) {
        error = document.createElement('span');
        error.className = 'error';
        error.style.color = 'red';
        figura.parentNode.insertBefore(error, figura.nextSibling);
    }

    if (!figura.value) {
        error.textContent = "Debes seleccionar una figura";
        return false;
    }

    error.textContent = "";
    return true;
}

// Validar inputs de medidas (datos.php)
function validarDatos() {
    let valido = true;
    document.querySelectorAll('.form-inputs input[type="number"]').forEach(input => {
        let error = input.nextElementSibling;
        if (!error || !error.classList.contains('error')) {
            error = document.createElement('span');
            error.className = 'error';
            error.style.color = 'red';
            input.parentNode.insertBefore(error, input.nextSibling);
        }

        if (!input.value || Number(input.value) <= 0) {
            error.textContent = "Ingrese un número positivo";
            valido = false;
        } else {
            error.textContent = "";
        }

        // Borrar error al corregir
        input.onblur = () => {
            if (input.value && Number(input.value) > 0) error.textContent = "";
        };
    });
    return valido;
}
