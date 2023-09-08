
const loadCartItems = (objectToAppendTo, sessionGetPath, dataLoadPath) => {
    $.post(sessionGetPath, { cartIndexes: 'cartIndexes' }, (cartIndexesJson) => {
        cartIndexes = JSON.parse(cartIndexesJson);

        for (let i = 0; i < cartIndexes.length; i++) {
            $.post(dataLoadPath, { cartItemIndex: cartIndexes[i][0] }, (dataJson) => {
                const data = JSON.parse(dataJson);
                let cartItemExtraModification = document.createElement('div');
                for (let i = 0; i < data.length; i++) {
                    const cartItem = document.createElement('div');
                    cartItem.classList.add('viewed-item');
                    cartItem.classList.add('border');
                    cartItem.classList.add('rounded-4');
                    cartItem.classList.add('bg-white');
                    cartItem.classList.add('w-100');
                    cartItem.classList.add('d-flex');
                    cartItem.classList.add('justify-content-center');
                    cartItem.classList.add('align-items-center');
                    cartItem.classList.add('pt-5');
                    cartItem.classList.add('pb-5');
                    cartItem.classList.add('mb-5');
                    cartItem.innerHTML = `
                        <div class="image-container d-flex justify-content-center w-50">
                            <img src="${data[i]['image_url']}" alt="">
                        </div>
                        <p class="name fw-bold w-75">${data[i]['name']}</p>
                        <div class="info d-flex w-75 flex-column justify-content-between align-items-center">
                            <p class="catalog mb-3">${data[i]['description']}</p>
                            <p class="price fw-bold mb-3">${data[i]['price']} лв.</p>
                            <p class="count fw-bold">${0} бр.</p>
                        </div>`;



                    cartItemExtraModification = cartItem;
                    objectToAppendTo.appendChild(cartItem);
                    setTimeout(() => { cartItem.classList.add('sliding') }, 500);
                }
                cartItemExtraModification.querySelector('.info .count').textContent = `${cartIndexes[i][1]} бр`;
            })

        }


    })
}


loadCartItems(document.querySelector('.cart'), 'PHP/GetCartIndexes.php', 'PHP/LoadProducts.php');