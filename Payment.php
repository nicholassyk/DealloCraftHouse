<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>E-Market Portal System</title>
        <link rel="stylesheet" href="main.css">
        <meta name="Payment" content="Payment">
    </head>
    <body>
        <p><a href="index.php"><img src="logo.svg" id="homeimg" style="width:150px; height:60px; vertical-align-center"></a></p><br>
        <form action="index.php" onsubmit="return paymentconfirm()" method="POST">
            <h1>Payment Method</h1>
            <p>Please select your preferred payment method:</p>
            <label>
                <input type="radio" name="creditcard" required="required" checked="checked">
                <img src="mastercard.png" style="width:75px;height:45px;">
            </label>
            <label>
                <input type="radio" name="creditcard" required="required">
                <img src="visa.png" style="width:75px;height:45px;">
            </label>
            <label>
                <input type="radio" name="creditcard" required="required">
                <img src="aexpress.png" style="width:75px;height:45px;">
            </label>
            <label>
                <input type="radio" name="creditcard" required="required">
                <img src="bitcoin.png" style="width:75px;height:45px;">
            </label><br><br>
            <input type="text" placeholder="XXXX XXXX XXXX XXXX" required="required"><br><br>
            <input type="text" pattern="[0-9]{2}[/][0-9]{4}" placeholder="MM/YYYY" required="required"><br><br>
            <input type="text" pattern="[0-9]{3}"placeholder="CVV" required="required"><br><br>
            <h1>Billing Address</h1>
            Street address:<br>
            <input type="text" name="street" required="required"><br>
            City:<br>
            <input type="text" name="city" required="required"><br>
            State/Province/Region:<br>
            <input type="text" name="state" required="required"><br>
            Postal code:<br>
            <input type="text" name="postal" required="required"><br>
            Country:<br>
            <input type="text" name="country" required="required"><br><br>
            <input type="submit" name="Confirm Payment"><br><br>
        </form>
        <script src="main.js"></script>
    </body>
</html>