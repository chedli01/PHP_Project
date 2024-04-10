<form class="checkout-form" action="../src/place-order/place-order.php" method="post">
    <h1>Checking Out</h1>
<div class="form-element checkout-form-element">
        <label class="label" for="firstName">First Name:</label>
        <div class="form-info"><?=$user['FirstName']?></div>
    </div>

    <div class="form-element checkout-form-element">
        <label class="label" for="lastName">Last Name:</label>
        <div class="form-info"><?=$user['LastName']?></div>
    </div>

    <div class="form-element checkout-form-element">
        <label class="label" for="phoneNumber">Phone number:</label>
        <div class="form-info"><?=$user['phone']?></div>
    </div>

    <div class="form-element checkout-form-element">
        <label class="label" for="shippingAddress">Shipping Address:</label>
        <input class="form-input" type="text" id="shippingAddress" name="shippingAddress" required value="<?=$user['adress']?>">
    </div>

    <div class="form-element checkout-form-element">
        <label class="label" for="shippingOption">Shipping Option:</label>
        <select class="form-input" id="shippingOption" name="shippingOption" required>
            <option value="">Select payment option</option>
            <option value="Pay at delivery">Pay at delivery</option>
        </select>
    </div>

    <div>
        <input class="signup-button" type="submit" value="Checkout">
    </div>
</form>
