
function removeCartItemHandler(event) {
    isAdding = event.target.className.includes('add-cart-item');
    if (event.target.tagName === "BUTTON" && (event.target.className.includes('remove-cart-item') || event.target.className.includes('add-cart-item'))) {


        // Get the product name
        const productId = event.target.className;

        // Construct the URL with the product name as a query parameter
        const url = `../src/scripts/add-or-remove-cart-item.php?productId=${encodeURIComponent(productId)}&isAdding=${isAdding}`;

        // Create a new XMLHttpRequest object
        var xhr = new XMLHttpRequest();

        // Configure the request
        xhr.open("GET", url, true);
        xhr.setRequestHeader('Content-Type', 'application/json');

        // Set up the event handler for when the request completes
        xhr.onload = function () {
            if (xhr.status === 200) {
                const responseData = xhr.responseText.split(" ");
                const newQuantity = responseData[0];
                const quantityElement = isAdding ? event.target.previousElementSibling : event.target.previousElementSibling.previousElementSibling; // Get the next sibling, which is the quantity element based on if were adding or removing
                quantityElement.textContent = 'x' + newQuantity; // Update quantity displayed in the UI

                //update shopping cart summary UI 
                const cartSummaryElements = event.target.closest('.cart-items').nextElementSibling.querySelectorAll(".summary");
                const priceElement = cartSummaryElements[1];
                const totalItemsElement = cartSummaryElements[0];
                priceElement.textContent = 'Total Price: ' + responseData[1];
                totalItemsElement.textContent = 'Total Items: ' + responseData[2];
                console.log(responseData[1]);

                //update items UI
                if (newQuantity == 0) {
                    event.target.closest(".product-cart-item").remove();
                }

            } else {
                // Request failed
                console.error('Error:', xhr.statusText);
            }
        };

        // Send the request
        xhr.send();
    }
}


shoppingCart = document.querySelector(".shopping-cart").addEventListener('click', removeCartItemHandler);