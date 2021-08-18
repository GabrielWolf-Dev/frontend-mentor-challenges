export default function menuMobile() {
    const $ = document.querySelector.bind(document);
    const btnOpen = $('.btn-menu-open');
    const btnClose = $('.btn-menu-close');
    const nav = $('.nav-mobile');

    const showMenu = () => nav.classList.add('nav-mobile--active');
    const hideMenu = () => nav.classList.remove('nav-mobile--active');

    // Event Listeners:
    btnOpen.addEventListener('click', showMenu);
    btnClose.addEventListener('click', hideMenu);
}