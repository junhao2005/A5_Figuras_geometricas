
// Validar selección de figura (index.php)

function validarFigura() {
    const figura = document.getElementById('figura'); // Captura el select
    let error = figura.nextElementSibling; // Verifica si ya existe un span de error

    // Si no existe, lo crea dinámicamente
    if (!error || !error.classList.contains('error')) {
        error = document.createElement('span'); // Crea span
        error.className = 'error';               // Le asigna clase
        error.style.color = 'red';              // Color rojo
        figura.parentNode.insertBefore(error, figura.nextSibling); // Lo inserta después del select
    }

    // Validación: si no hay valor seleccionado, muestra error y bloquea envío
    if (!figura.value) {
        error.textContent = "Debes seleccionar una figura";
        return false; // Detiene submit
    }

    error.textContent = ""; // Borra mensaje si todo es correcto
    return true;            // Permite submit
}


// Validar inputs de medidas (datos.php)

function validarDatos() {
    let valido = true; // Bandera general de validez

    // Recorre todos los inputs numéricos del formulario
    document.querySelectorAll('.form-inputs input[type="number"]').forEach(input => {
        let error = input.nextElementSibling; // Verifica si ya existe span de error

        // Si no existe, crea uno debajo del input
        if (!error || !error.classList.contains('error')) {
            error = document.createElement('span');
            error.className = 'error';
            error.style.color = 'red';
            input.parentNode.insertBefore(error, input.nextSibling);
        }

        // Validación: campo vacío o número <= 0
        if (!input.value || Number(input.value) <= 0) {
            error.textContent = "Ingrese un número positivo";
            valido = false; // Marca formulario como inválido
        } else {
            error.textContent = ""; // Borra mensaje si válido
        }

        // Evento blur: borrar error al corregir
        input.onblur = () => {
            if (input.value && Number(input.value) > 0) error.textContent = "";
        };
    });

    return valido; // Devuelve true si todos los campos son válidos
}
