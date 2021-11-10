document.querySelectorAll('.item').forEach((element) => {
    const desc = element.querySelector('.item__description');
    const jqDesc = $(desc);
    const computedStyle = getComputedStyle(element);

    desc.style.width = computedStyle.width;
    desc.style.height = computedStyle.height;

    element.addEventListener('mouseenter', _ => jqDesc.fadeIn(200));
    element.addEventListener('mouseleave', _ => jqDesc.fadeOut(200));
});