const loadItems = (appendTo, path) => {

    $.post(path, { load: 'load' }, (output) => {

        const data = JSON.parse(output);
        for (let i = 0; i < output.length; i++) {

            //alert(data[i]['image_url'])
            const item = $(`
            <div class="col-3 product-item">
                <img src="${data[i]['image_url']}" alt="">
                <p class="name fw-bold">${data[i]['name']}</p>
                <div class="d-flex flex-row justify-content-between align-items-center">
                    <p class="catalog">${data[i]['description']}</p>
                    <p class="price fw-bold">${data[i]['price']} лв.</p>
                </div>
            </div>`);

            appendTo.append(item);
            setTimeout(() => { item.addClass('sliding') }, 500);
        }
    })
}


loadItems($('.products-row'), 'PHP/LoadProducts.php');