<!-- 
 Name: Graciela C. Gozum
 Section: WD-201
 Date: 12/02/2025

-------------------------------------------------
 DWEB: Assignment Activity 3

-->

 <?php
    // Kpop Groups
    $boyGroup = ["BTS", "BOYNEXTDOOR"];
    $girlGroup = ["New Jeans", "Twice"];

    // Prices of lightsticks and albums
    $lightstickPrices = [
        "BTS" => 80,
        "BOYNEXTDOOR" => 75,
        "New Jeans" => 72,
        "Twice" => 80
    ];

    $albumPrices = [
        "BTS" => 60,
        "BOYNEXTDOOR" => 45,
        "New Jeans" => 30,
        "Twice" => 50
    ];

    // Lightstick names
    $lightstickNames = [
        "BTS" => "Army Bomb - BTS",
        "BOYNEXTDOOR" => "Wonder Stick - BOYNEXTDOOR",
        "New Jeans" => "Binky Bong - New Jeans",
        "Twice" => "Candy Bong - Twice"
    ];

    // Promo
    $month = 'December';

    $sale = match ($month) {
        'November' => 'Get 25% off on all items!',
        'December' => 'Coming soon!',
        default => 'No promotions going on at the moment.',
    };
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kpop Store</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'headerStore.php'; ?>

    <nav class="navbar">
        <a href="KpopStore.php" class="nav-link active">Store</a>
        <a href="merchStock.php" class="nav-link">Stock Inventory</a>
    </nav>

    <div class="promoBox">
        <h2>Ongoing Promotion for <?= $month ?> </h2>
        <p><?= $sale ?></p>
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
        <?php foreach ($albumPrices as $group => $price) echo "<tr><td>$group Album</td><td>$$price</td></tr>"; ?>
            
    </table>


    <!-- For ordering -->
    <div class="orderBox">
    
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
            <?php 
            for ($i = 0; $i <= 5; $i++) {
                echo "<option value=\"$i\">$i</option>";
            }
            ?>
        </select></p>

        <p>BOYNEXTDOOR - $<?= $lightstickPrices['BOYNEXTDOOR'] ?>
        <select id="bndLightstick">
            <?php 
            for ($i = 0; $i <= 5; $i++) {
                echo "<option value=\"$i\">$i</option>";
            }
            ?>
        </select></p>

        <p>New Jeans - $<?= $lightstickPrices['New Jeans'] ?>
        <select id="njLightstick">
            <?php 
            for ($i = 0; $i <= 5; $i++) {
                echo "<option value=\"$i\">$i</option>";
            }
            ?>
        </select></p>

        <p>Twice - $<?= $lightstickPrices['Twice'] ?>
        <select id="twiceLightstick">
            <?php 
            for ($i = 0; $i <= 5; $i++) {
                echo "<option value=\"$i\">$i</option>";
            }
            ?>
        </select></p>

        <h3>♬ Albums:</h3>
        <p>BTS - $<?= $albumPrices['BTS'] ?>
        <select id="btsAlbum">
            <?php 
            for ($i = 0; $i <= 5; $i++) {
                echo "<option value=\"$i\">$i</option>";
            }
            ?>
        </select></p>

        <p>BOYNEXTDOOR - $<?= $albumPrices['BOYNEXTDOOR'] ?>
        <select id="bndAlbum">
            <?php 
            for ($i = 0; $i <= 5; $i++) {
                echo "<option value=\"$i\">$i</option>";
            }
            ?>
        </select></p>

        <p>New Jeans - $<?= $albumPrices['New Jeans'] ?>
        <select id="njAlbum">
            <?php 
            for ($i = 0; $i <= 5; $i++) {
                echo "<option value=\"$i\">$i</option>";
            }
            ?>
        </select></p>

        <p>Twice - $<?= $albumPrices['Twice'] ?>
        <select id="twiceAlbum">
            <?php 
            for ($i = 0; $i <= 5; $i++) {
                echo "<option value=\"$i\">$i</option>";
            }
            ?>
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
            total += qty * <?= $lightstickPrices['BTS'] ?>; 
        }
        
        qty = parseInt(document.getElementById('bndLightstick').value);
        if (qty > 0) { 
            itemsList += qty + " Wonder Stick - BOYNEXTDOOR" + " = $<?= $lightstickPrices['BOYNEXTDOOR'] ?>" + " \n"; 
            total += qty * <?= $lightstickPrices['BOYNEXTDOOR'] ?>; 
        }

        qty = parseInt(document.getElementById('njLightstick').value);
        if (qty > 0) { 
            itemsList += qty + " Binky Bong - New Jeans" + " = $<?= $lightstickPrices['New Jeans'] ?>" + " \n"; 
            total += qty * <?= $lightstickPrices['New Jeans'] ?>; 
        }

        qty = parseInt(document.getElementById('twiceLightstick').value);
        if (qty > 0) { 
            itemsList += qty + " Candy Bong - Twice" + " = $<?= $lightstickPrices['Twice'] ?>" + " \n"; 
            total += qty * <?= $lightstickPrices['Twice'] ?>; 
        }

        qty = parseInt(document.getElementById('btsAlbum').value);
        if (qty > 0) { 
            itemsList += qty + " BTS Album" + " = $<?= $albumPrices['BTS'] ?>" + " \n"; 
            total += qty * <?= $albumPrices['BTS'] ?>; 
        }

        qty = parseInt(document.getElementById('bndAlbum').value);
        if (qty > 0) { 
            itemsList += qty + " BOYNEXTDOOR Album" + " = $<?= $albumPrices['BOYNEXTDOOR'] ?>" + " \n"; 
            total += qty * <?= $albumPrices['BOYNEXTDOOR'] ?>; 
        }

        qty = parseInt(document.getElementById('njAlbum').value);
        if (qty > 0) { 
            itemsList += qty + " New Jeans Album" + " = $<?= $albumPrices['New Jeans'] ?>" + " \n"; 
            total += qty * <?= $albumPrices['New Jeans'] ?>; 
        }

        qty = parseInt(document.getElementById('twiceAlbum').value);
        if (qty > 0) { 
            itemsList += qty + " Twice Album" + " = $<?= $albumPrices['Twice'] ?>" + " \n"; 
            total += qty * <?= $albumPrices['Twice'] ?>; 
        }

        if (total > 0) {
            alert("Items selected:\n" + itemsList + "\n" +
                "-----------------------------" +
                  "\nTotal: $" + total + 
                  "\n\n♡Thank you for ordering at Kverse Kpop Store! Your order bill will be emailed shortly. (づ｡◕‿‿◕｡)づ");
        } else {
            alert("Please select at least one item!");
        }
    }
    </script>

    <?php include 'footerStore.php';?>

</body>
</html>