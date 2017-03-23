var btn = document.querySelector('.c-hamburger');
var menu = document.getElementById('menu-panel');

function open() {
    btn.classList.toggle('is-active');
    menu.classList.toggle('show');
}


btn.addEventListener('click', open);
