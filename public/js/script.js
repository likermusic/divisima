let imgs = document.querySelectorAll('div[data-setbg], img[src]');
imgs.forEach(element => {
    let src = element.dataset.setbg || element.src;
    // console.log(src);
    let matches = src.match(/img.+/);
    console.log(matches[0]);
    if (element.src) {
        element.src = 'public/' + matches[0];
    } else if (element.dataset.setbg) {
        element.dataset.setbg = 'public/' + matches[0];
    }
    //Для  div[data-setbg] слайдера поставить вручную путь в верстке
});