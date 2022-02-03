export default function menuMobile(){
    const menuBtn = document.querySelector('.header__btn-mobile');
    const menu = document.querySelector('.header__mobile');

    menuBtn.addEventListener('click', () => {
        menu.classList.toggle('header__mobile--active');
    });
}