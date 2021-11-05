document.querySelectorAll('.menu__container').forEach((element) => {
    const menuClassList = element.querySelector('.nav__menu').classList;

    element.addEventListener('mouseenter', _ => menuClassList.add('show'));

    element.addEventListener('mouseleave', _ => menuClassList.remove('show'));
});

