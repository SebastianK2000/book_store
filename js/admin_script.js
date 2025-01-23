let navbar = document.querySelector('.header .navbar');
let accountBox = document.querySelector('.header .account-box');



console.log('Kliknięcie działa!');
document.querySelector('#user-btn').onclick = () => {
    console.log('Kliknięto ikonę użytkownika');
    accountBox.classList.toggle('active');
    navbar.classList.remove('active');
}

document.querySelector('#menu-btn').onclick = () => {
    console.log('Kliknięto ikonę użytkownika');
    navbar.classList.toggle('active');
    accountBox.classList.remove('active');
}


window.onscroll = () => {
    navbar.classList.remove('active');
    accountBox.classList.remove('active');
}

document.querySelector('#close-update').onclick = () => {
    document.querySelector('.edit-product-form').style.display = 'none';
    window.location.href = 'admin_products.php';
}

