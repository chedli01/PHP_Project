<form action="../src/place-order/place-order.php" method="post">
    <div>
        <label for="firstName">First Name:</label>
        <div><?=$user['FirstName']?></div>
    </div>

    <div>
        <label for="lastName">Last Name:</label>
        <div><?=$user['LastName']?></div>
    </div>

    <div>
        <label for="phoneNumber">Phone number:</label>
        <div><?=$user['phone']?></div>
    </div>

    <div>
        <label for="shippingAddress">Shipping Address:</label>
        <input type="text" id="shippingAddress" name="shippingAddress" required value="<?=$user['adress']?>">
    </div>

    <div>
        <label for="shippingOption">Shipping Option:</label>
        <select id="shippingOption" name="shippingOption" required>
            <option value="">Select payment option</option>
            <option value="Pay at delivery">Pay at delivery</option>
        </select>
    </div>

    <div>
        <input type="submit" value="Checkout">
    </div>
</form>
