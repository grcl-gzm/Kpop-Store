<!-- 
 Name: Graciela C. Gozum
 Section: WD-201
 Date: 11/28/2025

-------------------------------------------------
 DWEB: Assignment Activity 2

-->

 <?php
    // Kpop Groups
    $boyGroup = ["BTS", "BOYNEXTDOOR"];
    $girlGroup = ["New Jeans", "Twice"];

    // prices of lightsticks and albums
    $lightstickPrices = [
        "BTS" => 80,
        "BOYNEXTDOOR" => 75,
        "New Jeans" => 72,
        "Twice" => 80
    ];

    $albumPrices = [
        "BTS" => 45,
        "BOYNEXTDOOR" => 40,
        "New Jeans" => 30,
        "Twice" => 35
    ];

    // Lightstick names
    $lightstickNames = [
        "BTS" => "Army Bomb - BTS",
        "BOYNEXTDOOR" => "Wonder Stick - BOYNEXTDOOR",
        "New Jeans" => "Binky Bong - New Jeans",
        "Twice" => "Candy Bong - Twice"
    ];

    // Promo
    $month = 'November';

    $sale = match ($month) {
        'November' => 'Get 10% off on all items!',
        'December' => 'Buy 1 Get 1 Free on selected albums!',
        default => 'No promotions going on at the moment.',
    };
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kpop Store</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&family=Iceland&family=Jersey+25&display=swap');

        body {
            background: linear-gradient(135deg, #f6edf5 0%, #e8d5f0 12%, #f0e6f7 24%, #e6f3ff 36%,
             #fff0e6 48%, #f0fff0 60%, #ffe6f0 72%, #f6edf5 84%, #ead9f2 100%);
            min-height: 100vh;
            font-family: 'Figtree', sans-serif;
            margin: 20px;
            text-align: center;
        }

        header {
            background-color:rgb(237, 214, 248);
            padding: 20px;
            margin: -20px -20px 30px -20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 img {
            height: 65px;
        }

        h1 {
            color:rgb(121, 74, 165);
            gap: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            margin: 0;
        }

        h2 {
            color:rgb(121, 74, 165);
            margin-top: 10px;
        }

        p {
            font-size: 18px;
        }

        .promoBox {
            margin: 20px auto; 
            padding: 20px;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 300px;
            border-collapse: collapse;
            margin: 10px auto;
        }

        table, th, td {
            border: 1px solid #333;
        }

        th {
            background:rgb(107, 74, 165);
            color: white;
            padding: 8px;
        }

        td {
            padding: 8px;
            background: white;
        }

        .orderBox {
            margin: 50px auto; 
            max-width: 800px;
            padding: 20px;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        button {
            background-color: #4a6fa5;
            color: white;
            margin-top: 20px;
            padding: 10px 15px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #3b5d8a;
        }

        select {
            padding: 5px;
            font-size: 16px;
            margin-left: 10px;
        }

        input[type="email"], input[type="text"] {
            width: 250px;
            padding: 8px;
            font-size: 16px;
            border: 2px solid #ddd;
            border-radius: 5px;
            margin-left: 10px;
        }

        input[type="email"]:focus, input[type="text"]:focus {
            border-color: #4a6fa5;
            outline: none;
        }

        label {
            font-weight: bold;
            color: rgb(121, 74, 165);
        }

        hr {
            border: none;
            border-top: 4px dashed rgb(121, 74, 165);
            margin: 20px 0;
        }

        ul {
            margin: 5px auto;
            padding: 0;
            list-style-position: inside;
        }

        li {
            margin: 2px 0;
            padding: 0;
        }

        footer{
            color: rgb(121, 74, 165);
            background-color: rgb(237, 214, 248);
            padding: 20px;
            margin: 30px -20px -20px -20px;
            text-align: center;
        }

    </style>
</head>
<body>
    <?php include 'headerStore.php'; ?>

    <div class="promoBox">
        <h2>Ongoing Promotion for <?= $month ?> </h2>
        <p>This Black Friday Sale! <?= $sale ?></p>
    </div>

     <p>︵⊹︵︵୨୧︵︵⊹︵︵⊹︵︵୨୧︵︵⊹︵</p>
    
    <h2>Available Groups</h2>
    <h3>Boy Groups:</h3>
    <ul>
        <?php foreach ($boyGroup as $group) echo "<li>$group</li>"; ?>
    </ul>
            
    <h3>Girl Groups:</h3>
    <ul>
        <?php foreach ($girlGroup as $group) echo "<li>$group</li>"; ?>
    </ul>
    
    <h2>Available Products</h2>
    <ul>
        <li>Lightsticks</li>    
        <li>Albums</li>
    </ul>

    <p>More groups and merch coming soon!! (˶ᵔ ᵕ ᵔ˶)</p>

    <p>︶⊹︶︶୨୧︶︶⊹︶︶⊹︶︶୨୧︶︶⊹︶</p>

   <table>
        <tr>
            <th>Lightsticks</th>
            <th>Price</th>
        </tr>
        <?php foreach ($lightstickNames as $group => $name) echo
        "<tr><td>$name</td><td>$$lightstickPrices[$group]</td></tr>"; ?>
    </table>

    <table>
        <tr>
            <th>Albums</th>
            <th>Price</th>
        </tr>
        <?php foreach ($albumPrices as $group => $price) echo 
        "<tr><td>$group Album</td><td>$$price</td></tr>"; ?>
            
    </table>

    <!-- for ordering -->
    <div class="container">
    
        <h2>Contact Information</h3>
        <p>Add your details here for further information about your order! (｡•̀ᴗ-)✧</p>
        <p>
            <label for="customer_email">Email:</label>
            <input type="email" id="customer_email" name="customer_email" placeholder="Enter your email" required>
        </p>
        <p>
            <label for="customer_name">Name:</label>
            <input type="text" id="customer_name" name="customer_name" placeholder="Enter your name" required>
        </p>
         <button onclick="submitContactInfo()">Submit Contact Info</button>

        <script>
        function submitContactInfo() {
            var name = document.getElementById('customer_name').value;
            var email = document.getElementById('customer_email').value;
            
            if (!name || !email) {
                alert('Please enter your name and email before submitting.');
                return;
            }
            alert('Contact information submitted. Thank you, ' + name + '! You can now proceed to place your order (^o^)!');
        }
        </script>

        <hr>

        <h2>Order Here!</h2>
        <h3>★ Lightsticks:</h3>
        <p>BTS - $<?= $lightstickPrices['BTS'] ?>
        <select id="btsLightstick">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select></p>

        <p>BOYNEXTDOOR - $<?= $lightstickPrices['BOYNEXTDOOR'] ?>
        <select id="bndLightstick">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select></p>

        <p>New Jeans - $<?= $lightstickPrices['New Jeans'] ?>
        <select id="njLightstick">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select></p>

        <p>Twice - $<?= $lightstickPrices['Twice'] ?>
        <select id="twiceLightstick">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select></p>

        <h3>♬ Albums:</h3>
        <p>BTS - $<?= $albumPrices['BTS'] ?>
        <select id="btsAlbum">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select></p>

        <p>BOYNEXTDOOR - $<?= $albumPrices['BOYNEXTDOOR'] ?>
        <select id="bndAlbum">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select></p>

        <p>New Jeans - $<?= $albumPrices['New Jeans'] ?>
        <select id="njAlbum">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select></p>

        <p>Twice - $<?= $albumPrices['Twice'] ?>
        <select id="twiceAlbum">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select></p>

        <button onclick="showBill()">Place Order</button>
    </div>

    <script>
    function showBill() {
        // Initializes the items and the total price
        var itemsList = "";
        var total = 0;
        
        // Adds and computes the selected merch and prints the bill
        var qty = parseInt(document.getElementById('btsLightstick').value);
        if (qty > 0) { 
            itemsList += qty + " Army Bomb - BTS" + " = $<?= $lightstickPrices['BTS'] ?> " + "\n"; 
            total += qty * 79.99; 
        }
        
        qty = parseInt(document.getElementById('bndLightstick').value);
        if (qty > 0) { 
            itemsList += qty + " Wonder Stick - BOYNEXTDOOR" + " = $<?= $lightstickPrices['BOYNEXTDOOR'] ?>" + " \n"; 
            total += qty * 75.50; 
        }

        qty = parseInt(document.getElementById('njLightstick').value);
        if (qty > 0) { 
            itemsList += qty + " Binky Bong - New Jeans" + " = $<?= $lightstickPrices['New Jeans'] ?>" + " \n"; 
            total += qty * 72.00; 
        }

        qty = parseInt(document.getElementById('twiceLightstick').value);
        if (qty > 0) { 
            itemsList += qty + " Candy Bong - Twice" + " = $<?= $lightstickPrices['Twice'] ?>" + " \n"; 
            total += qty * 80.00; 
        }

        qty = parseInt(document.getElementById('btsAlbum').value);
        if (qty > 0) { 
            itemsList += qty + " BTS Album" + " = $<?= $albumPrices['BTS'] ?>" + " \n"; 
            total += qty * 25.00; 
        }

        qty = parseInt(document.getElementById('bndAlbum').value);
        if (qty > 0) { 
            itemsList += qty + " BOYNEXTDOOR Album" + " = $<?= $albumPrices['BOYNEXTDOOR'] ?>" + " \n"; 
            total += qty * 20.00; 
        }

        qty = parseInt(document.getElementById('njAlbum').value);
        if (qty > 0) { 
            itemsList += qty + " New Jeans Album" + " = $<?= $albumPrices['New Jeans'] ?>" + " \n"; 
            total += qty * 30.00; 
        }

        qty = parseInt(document.getElementById('twiceAlbum').value);
        if (qty > 0) { 
            itemsList += qty + " Twice Album" + " = $<?= $albumPrices['Twice'] ?>" + " \n"; 
            total += qty * 26.00; 
        }

        if (total > 0) {
            var subtotal = total;
            var discount = total * 0.10; // 10% discount
            var finalTotal = total - discount;
            
            alert("Items selected:\n" + itemsList + "\n" +
                "-----------------------------" +
                  "\nSubtotal: $" + subtotal + 
                  "\nDiscount (10%): -$" + discount + 
                  "\nFinal Total: $" + finalTotal + 
                  "\n\n♡Thank you for ordering at Kverse Kpop Store! Your order bill will be emailed shortly. (づ｡◕‿‿◕｡)づ");
        } else {
            alert("Please select at least one item!");
        }
    }
    </script>

    <?php include 'footerStore.php';?>

</body>
</html>