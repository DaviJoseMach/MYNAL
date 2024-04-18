function toggleDropdown(icon) {
    var dropdown = icon.parentNode.querySelector('.dropdown'); // Seleciona o dropdown dentro do mesmo pai do ícone
    dropdown.style.display === "none" ? dropdown.style.display = "block" : dropdown.style.display = "none";
}

// Fecha o dropdown se o usuário clicar fora dele
window.onclick = function(event) {
    if (!event.target.matches('.tree')) { // Verifica se o clique não foi no ícone
        var dropdowns = document.querySelectorAll('.dropdown');
        dropdowns.forEach(function(dropdown) {
            dropdown.style.display = "none"; // Oculta todos os dropdowns
        });
    }
}