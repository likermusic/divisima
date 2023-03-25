// let imgs = document.querySelectorAll('img[src]'); //, 
// imgs.forEach(element => {
//     let src = element.src; 
//     let matches = src.match(/img.+/);
//         element.src = WWW+'/' + matches[0];
//     //Для  div[data-setbg] слайдера поставить вручную путь в верстке
// });


document.querySelector('.product-filter-section').addEventListener('click', function(e) {
    e.preventDefault();
    if (e.target.matches('.add-card, .add-card i, .add-card span')) {
        const id = e.target.dataset.id;
        console.log(id);
        fetch('mainHandler', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
                'credentials': 'same-origin',
                'X-Requested-With': 'XMLHttpRequest'
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


function sum() {
    
}



        
// console.log(document.querySelector('.product-filter-section .row').children);

