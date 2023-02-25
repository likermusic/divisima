// let imgs = document.querySelectorAll('img[src]'); //, 
// imgs.forEach(element => {
//     let src = element.src; 
//     let matches = src.match(/img.+/);
//         element.src = WWW+'/' + matches[0];
//     //Для  div[data-setbg] слайдера поставить вручную путь в верстке
// });

document.querySelector('.product-filter-section').addEventListener('click', function(e) {
    e.preventDefault();
    if (e.target.matches('.add-card, .add-card *')) {
        const id = e.target.dataset.id;
        fetch('', {
            method: 'POST',
            body: id
        })
        .then(function(resp) {
            return resp.json();
        })
        .then(function(data) {
            console.log(data);
        } )
    }
})


// console.log(document.querySelector('.product-filter-section .row').children);

