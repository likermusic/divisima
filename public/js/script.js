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
        fetch('mainHandler', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            // body: obj
            body:`id=${id}`
        })
        .then(function(resp) {
            return resp.text();
        })
        .then(function(data) {
            console.log(data);
        } );

    }
})



        
// console.log(document.querySelector('.product-filter-section .row').children);

