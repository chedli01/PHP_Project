let addToCartButton = document.querySelectorAll(".add-to-cart");
let productsContainer = document.querySelector(".product-container");

function addToCart() {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "http://example.com/api/endpoint", true);
    xhr.onreadystatechange = function () {
        handleResponse(xhr);
    };
    xhr.send();
}



productsContainer.addEventListener('click', addToCart);

