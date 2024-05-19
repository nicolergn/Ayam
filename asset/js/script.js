// ==================== NAVBAR - BURGER MENU ====================

let burgermenu = document.querySelector('#burger-menu');
let navbar = document.querySelector('.navbar');

burgermenu.onclick = () => {
    burgermenu.classList.toggle('bx-x');
    navbar.classList.toggle('active');
}

window.onscroll = () => {
    burgermenu.classList.remove('bx-x');
    navbar.classList.remove('active');
}


// ====================