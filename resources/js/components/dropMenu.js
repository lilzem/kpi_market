//document.querySelectorAll('.menu__container').forEach((element) => {
//$('.menu__container').each((index, element) => {
//const menuClassList = element.querySelector('.nav__menu').classList;
const el = $('.menu__container');
const menu = el.children('.nav__menu').first();

el.on('mouseenter', _ => menu.addClass('show'));

el.on('mouseleave', _ => menu.removeClass('show'));
//});