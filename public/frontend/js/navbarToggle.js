document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.menu-toggle');
    const navMenu = document.querySelector('.max-w-7xl.mx-auto.xl\\:hidden ul');

    menuToggle.addEventListener('click', function () {
      navMenu.classList.toggle('hidden');
    });
  });