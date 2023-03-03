if (localStorage.getItem('xcart') == null || localStorage.getItem('xcart') == '')
    localStorage.setItem('xcart', "[]");


function increaseCart(e) {
    const id = parseInt(e.getAttribute("data-id"))

    var cart = JSON.parse(localStorage.getItem('xcart'));

    if (cart[id] == null)
        cart[id] = 0

    cart[id] = cart[id] + 1;
    localStorage.setItem('xcart', JSON.stringify(cart));

    updateItemsNum()
}