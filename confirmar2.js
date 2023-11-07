document.addEventListener("DOMContentLoaded", function() {
    var links = document.querySelectorAll('.table__item__link');

    links.forEach(function(link) {
        link.addEventListener('click', function(event) {
            var action = event.target.innerText;
            var confirmMessage = '';

            if (action === 'Editar') {
                confirmMessage = '¿Desea editar este registro?';
            } else if (action === 'Eliminar') {
                confirmMessage = '¿Desea eliminar este registro?';
            }

            if (confirmMessage && !confirm(confirmMessage)) {
                event.preventDefault();
            }
        });
    });
});
