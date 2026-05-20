
function updateCartCount() {

fetch('get-cart-count.php')
.then(res => res.json())
.then(data => {

const cart = document.getElementById('cart-count');

if (cart) {
cart.textContent = data.count;
}

});
}

function addToCart(productId) {

fetch('add-to-cart.php', {
method: 'POST',
headers: {
'Content-Type': 'application/x-www-form-urlencoded'
},
body: 'product_id=' + productId
})
.then(res => res.json())
.then(data => {

if (data.success) {
showNotification('Parfum ajouté au panier 🎀');
updateCartCount();
}

});
}

function showNotification(msg) {

const notif = document.createElement('div');
notif.className = 'notification';
notif.textContent = msg;

document.body.appendChild(notif);

setTimeout(() => {
notif.remove();
}, 3000);
}

updateCartCount();

function filterProducts() {

    let aroma =
        document.getElementById('aromaFilter').value;

    let price =
        document.getElementById('priceFilter').value;

    let products =
        document.querySelectorAll('.product-card');

    products.forEach(product => {

        let productAroma =
            product.dataset.aroma;

        let productPrice =
            parseInt(product.dataset.price);

        let aromaMatch =
            aroma === 'all' ||
            productAroma === aroma;

        let priceMatch =
            price === 'all' ||
            productPrice <= parseInt(price);

        if (aromaMatch && priceMatch) {

            product.style.display = 'block';

        } else {

            product.style.display = 'none';

        }

    });

}