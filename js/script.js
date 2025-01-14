document.addEventListener('DOMContentLoaded', function() {
  const menuIcon = document.getElementById('menu-icon');
  const menu = document.getElementById('menu');
  const body = document.body;

  menuIcon.addEventListener('click', function() {
      menu.classList.toggle('active');
      body.classList.toggle('no-scroll'); // Ajout ou suppression de la classe
  });
});
