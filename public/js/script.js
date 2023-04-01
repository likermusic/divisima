// let imgs = document.querySelectorAll('img[src]'); //, 
// imgs.forEach(element => {
//     let src = element.src; 
//     let matches = src.match(/img.+/);
//         element.src = WWW+'/' + matches[0];
//     //Для  div[data-setbg] слайдера поставить вручную путь в верстке
// });

if (document.querySelector('.product-filter-section')) {

document.querySelector('.product-filter-section').addEventListener('click', function(e) {
    e.preventDefault();
    if (e.target.matches('.add-card, .add-card i, .add-card span')) {
        const id = e.target.dataset.id;
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

}


if (document.querySelector('.cart-table-warp')) {

document.querySelector('.cart-table-warp').addEventListener('click', function(e) {
    if (e.target.matches('.dec,.inc')) {
        let countValue = +e.target.parentElement.querySelector('input').value;
        if (countValue >= 0) {
            // console.log(e.target.closest('.quy-col').previousElementSibling.querySelector('.pc-title p')); 
            const id = +e.target.closest('tr').dataset.id;
            if (!isNaN(id)) {
                fetch('cartHandler', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                        'credentials': 'same-origin',
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: `id=${id}`
                })
                .then(function(resp) {
                    return resp.json();
                    // return resp.text();
                })
                .then(function(data) {
                    console.log(data);
                })
            }

        }
    } 
})

}
 
// console.log(document.querySelector('.product-filter-section .row').children);
