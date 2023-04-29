// let imgs = document.querySelectorAll('img[src]'); //, 
// imgs.forEach(element => {
//     let src = element.src; 
//     let matches = src.match(/img.+/);
//         element.src = WWW+'/' + matches[0];
//     //Для  div[data-setbg] слайдера поставить вручную путь в верстке
// });

if (document.querySelector('.product-filter-section')) {

    document.querySelector('.product-filter-section').addEventListener('click', function (e) {
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
                body: `id=${id}`
            })
                .then(function (resp) {
                    return resp.text();
                })
                .then(function (data) {
                    console.log(data);
                });

        }
    })

}


if (document.querySelector('.cart-table-warp')) {

    document.querySelector('.cart-table-warp').addEventListener('click', function (e) {
        if (e.target.matches('.dec,.inc')) {
            let countValue = +e.target.parentElement.querySelector('input').value;
            if (countValue >= 0) {
                // console.log(e.target.closest('.quy-col').previousElementSibling.querySelector('.pc-title p')); 
                const id = +e.target.closest('tr').dataset.id;
                const action = e.target.className.split(' ')[0];
                if (!isNaN(id)) {
                    fetch('cartHandler', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                            'credentials': 'same-origin',
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        body: `id=${id}&action=${action}`
                    })
                        .then(function (resp) {
                            return resp.json();
                            // return resp.text();
                        })
                        .then(function (data) {
                            if (data.qtys.length > 0) {

                                var isProduct = data.qtys.some(function (obj) {
                                    return obj.product_id == id;
                                })

                                if (isProduct) {
                                    const qty = data.qtys.find((item) => { return item.product_id == id }).qty;
                                    const price = data.products.find((item) => { return item.product_id == id }).price;
                                    e.target.closest('tr').querySelector('.total-col .price').textContent = (qty * price).toFixed(2);
                                } else {
                                    e.target.closest('tr').remove();
                                }
                                const sum = data.products.reduce((sum, item) => { return sum + Number(item.price) }, 0);
                                document.querySelector('.total-cost .price').textContent = sum.toFixed(2);
                            } else {
                                const markup = `
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <h1>Empty cart</h1>
                                    </div>	
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <a href="/" class="site-btn">Continue shopping</a>
                                    </div>
                                </div>
                                `;
                                document.querySelector('.cart-section.spad').innerHTML = markup;

                            }
                        })
                }

            }
        }
    })

}


// console.log(document.querySelector('.product-filter-section .row').children);
