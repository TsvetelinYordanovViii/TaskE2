const countCartItems = (counterToUpdate, sessionGetPath) => {
    $.post(sessionGetPath, { cartIndexes: 'cartIndexes' }, (cartIndexesJson) => {
        cartIndexes = JSON.parse(cartIndexesJson);

        if (cartIndexes.length > 0) {
            counterToUpdate.textContent = cartIndexes.length;
            counterToUpdate.classList.remove('visually-hidden');
        }
        else {
            counterToUpdate.classList.add('visually-hidden');
        }
    })
}

countCartItems(document.querySelector('.shopping-cart span'), 'PHP/GetCartIndexes.php');