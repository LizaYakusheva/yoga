document.addEventListener('DOMContentLoaded', function () {
    const burger = document.getElementById('burger-toggle');
    const nav = document.getElementById('main-nav');
    const logo = document.querySelector('.logo-overlay');

    if (burger && nav) {
        burger.addEventListener('click', function () {
            nav.classList.toggle('active');
            logo.classList.toggle('logo-left');
            burger.classList.toggle('open');
        });
    }
});
