function load() {
    const cart = JSON.parse(localStorage.getItem('xcart'))
    console.log(cart)

    const items = document.getElementsByClassName('cartProduct');

    for (var i = 0; i < items.length; i++) {
        const id = parseInt(items[i].getAttribute("data-id"))
        const pret = parseInt(items[i].getAttribute("data-pret"))



        if (cart[id] == null || cart[id] <= 0) {
            {
                items[i].remove();
                i--;
            }
        } else {
            console.log(cart[id])
            const qnt = items[i].querySelector('.quantity');
            qnt.innerHTML = cart[id];

            const pretDex = items[i].querySelector('.pret');
            pretDex.innerHTML = parseInt(cart[id]) * parseInt(pret) + " RON";
        }
    }

    updateTotal()
}

function increase(btn) {
    const id = parseInt(btn.getAttribute("data-id"))
    const items = document.getElementsByClassName('cartProduct');

    for (var i = 0; i < items.length; i++) {
        const thisId = parseInt(items[i].getAttribute("data-id"))

        if (thisId == id) {
            const pret = parseInt(items[i].getAttribute("data-pret"))
            const qntDom = items[i].querySelector('.quantity');
            var qnt = parseInt(qntDom.innerHTML);
            qnt += 1;

            var cart = JSON.parse(localStorage.getItem('xcart'))
            cart[id] = qnt
            localStorage.setItem('xcart', JSON.stringify(cart))

            qntDom.innerHTML = qnt;

            const pretDex = items[i].querySelector('.pret');
            pretDex.innerHTML = parseInt(qnt) * parseInt(pret) + " RON";

            break;
        }
    }

    updateTotal()
}

function decrease(btn) {
    const id = parseInt(btn.getAttribute("data-id"))
    const items = document.getElementsByClassName('cartProduct');

    for (var i = 0; i < items.length; i++) {
        const thisId = parseInt(items[i].getAttribute("data-id"))

        if (thisId == id) {
            const pret = parseInt(items[i].getAttribute("data-pret"))
            const qntDom = items[i].querySelector('.quantity');
            var qnt = parseInt(qntDom.innerHTML);
            qnt -= 1;

            var cart = JSON.parse(localStorage.getItem('xcart'))
            cart[id] = qnt
            localStorage.setItem('xcart', JSON.stringify(cart))

            qntDom.innerHTML = qnt;

            const pretDex = items[i].querySelector('.pret');
            pretDex.innerHTML = parseInt(qnt) * parseInt(pret) + " RON";

            if (qnt <= 0) {
                items[i].remove()
                if (document.getElementsByClassName('cartProduct').length <= 0)
                    window.location.href("localhost/koffee")
            }

            break;
        }
    }

    updateTotal()
}

function updateTotal() {

    var total = 0

    const items = document.getElementsByClassName('cartProduct');
    const cart = JSON.parse(localStorage.getItem('xcart'))

    for (var i = 0; i < items.length; i++) {
        const id = parseInt(items[i].getAttribute("data-id"))
        const pret = parseInt(items[i].getAttribute("data-pret"))
        const num = cart[id]

        total += num * pret
    }


    if (total == 0) {
        document.getElementById('totalCart').style.display = 'none';
    } else {
        document.getElementById('totalCart').style.display = 'grid';
    }
    document.getElementById('pretTotal').innerHTML = total + " RON";
    updateText()
}

function callPHP(params) {
    var httpc = new XMLHttpRequest();
    var url = "/koffee/comanda.php?text=WOOOO";
    httpc.open("POST", url, true);

    httpc.onreadystatechange = function() {
        if (httpc.readyState == 4 && httpc.status == 200) {
            alert(httpc.responseText);
        }
    };
    httpc.send(params);
}

function updateText() {
    const items = document.getElementsByClassName('cartProduct');
    var text = "";

    for (var i = 0; i < items.length; i++) {
        const id = parseInt(items[i].getAttribute("data-id"))
        const qntDom = items[i].querySelector('.quantity');
        var qnt = parseInt(qntDom.innerHTML);
        text += `${id}*${qnt},`;
    }

    text = text.slice(0, -1)

    document.getElementById('invisibleInput').setAttribute('value', text)

}

function comanda() {
    console.log("COMANDA")
    alert("Comanda a fost plasata!")
    localStorage.setItem("xcart", "{}")
    var items = document.getElementsByClassName('cartProduct');
    for (var i = 0; i < items.length; i++) {
        items[i].remove();
        i--;
    }
}


load()