const loadItems = (objectToAppendTo, path) => {

    $.post(path, { load: 'load' }, (output) => {

        const data = JSON.parse(output);
        for (let i = 0; i < output.length; i++) {

            const newItem = document.createElement('div');
            newItem.classList.add('col-3');
            newItem.classList.add('product-item');
            newItem.innerHTML = `
            <img src="${data[i]['image_url']}" alt="">
                <p class="name fw-bold">${data[i]['name']}</p>
                <div class="d-flex flex-row justify-content-between align-items-center">
                    <p class="catalog">${data[i]['description']}</p>
                    <p class="price fw-bold">${data[i]['price']} лв.</p>
                </div>`;

            const viewDetails = document.createElement('button');
            viewDetails.classList.add('view-details');
            viewDetails.classList.add('btn');
            viewDetails.classList.add('rounded-pill');
            viewDetails.textContent = 'За продукта';

            const addCart = document.createElement('button');
            addCart.classList.add('add-cart');
            addCart.classList.add('btn');
            addCart.classList.add('rounded-pill');
            addCart.textContent = 'Добави в количката';

            viewDetails.addEventListener('click', () => {
                $.post('PHP/ViewItemSession.php', { itemIndex: data[i]['id'] }, (output) => {
                    window.open("ViewDetails.php", "_self");
                })
            });
            addCart.addEventListener('click', () => {
                $.post('PHP/AddToCart.php', { itemIndex: data[i]['id'] }, (debug) => {
                    alert('Продуктът е добавен в количката.' + debug);
                    if (countCartItems !== undefined) {
                        countCartItems(document.querySelector('.shopping-cart span'), 'PHP/GetCartIndexes.php');
                    }
                })
            });

            const buttons = document.createElement('div');
            buttons.classList.add('buttons');
            buttons.classList.add('d-flex');
            buttons.classList.add('flex-row');
            buttons.classList.add('justify-content-between');
            buttons.classList.add('align-items-center');

            buttons.appendChild(viewDetails);
            buttons.appendChild(addCart);

            newItem.appendChild(buttons);


            objectToAppendTo.appendChild(newItem);

            setTimeout(() => { newItem.classList.add('sliding') }, 500);
        }
    })
}


loadItems(document.querySelector('.products-row'), 'PHP/LoadProducts.php');