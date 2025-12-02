<?php

    declare(strict_types=1);

    $taxRate = 12;  // 12% tax rate - global variable
    
    // Currency symbol for the table
    $currency = '$';


    // Multidimensional array for the products
    $kpopMerch = [
        'Army Bomb - BTS' => [
            'price' => 80.00,
            'stockLevel' => 0
        ],
        'Wonder Stick - BOYNEXTDOOR' => [
            'price' => 75.00,
            'stockLevel' => 3
        ],
        'Binky Bong - New Jeans' => [
            'price' => 72.00,
            'stockLevel' => 13
        ],
        'Candy Bong - Twice' => [
            'price' => 80.00,
            'stockLevel' => 8
        ],
        'Map of the Soul: 7 Album - BTS ' => [
            'price' => 60.00,
            'stockLevel' => 12
        ],
        'No Genre Album - BOYNEXTDOOR ' => [
            'price' => 45.00,
            'stockLevel' => 10
        ],
        'Supernatural Album - New Jeans' => [
            'price' => 30.00,
            'stockLevel' => 3
        ],
        'Eyes Wide Open Album - Twice' => [
            'price' => 50.00,
            'stockLevel' => 2   
        ],
    ];

    // Functions
    function get_reorder_message(int $stockLevel): string {
        return ($stockLevel < 10) ? "Yes" : "No";
    }

    function get_total_value(float $price, int $quantity): float {
        return $price * $quantity; 
    }

    
    function get_tax_due(float $price, int $quantity, int $tax = 0): float {
        return ($price * $quantity) * ($tax / 100); 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KVerse Merch Stock</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'headerStore.php'; ?>

    <nav class="navbar">
        <a href="KpopStore.php" class="nav-link">Store</a>
        <a href="merchStock.php" class="nav-link active">Merch Inventory</a>
    </nav>

    <!-- For monitoring the current stocks/ available merch -->
    <h2>Merchandise Stock Inventory</h2>

    <table>
        <thead>
            <tr>
                <th>PRODUCT NAME</th>
                <th>STOCK</th>
                <th>RE-ORDER</th>
                <th>TOTAL VALUE </th>
                <th>TAX DUE</th>
            </tr>
        </thead>        
        <tbody>

            <!-- Checks the array and loops the price and stock level of the merch -->
            <?php foreach ($kpopMerch as $product_name => $data): 
                $total_value = get_total_value($data['price'], $data['stockLevel']);
                $tax_due = get_tax_due($data['price'], $data['stockLevel'], $taxRate);
            ?>
            <tr>
                <td><?= $product_name ?></td>
                <td><?= $data['stockLevel'] ?></td>
                <td><?= get_reorder_message($data['stockLevel']) ?></td>

                <!-- Adds the currency symbol and formats the numbers -->
                <td><?= $currency . number_format($total_value, 2) ?></td>
                <td><?= $currency . number_format($tax_due, 2) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?php include 'footerStore.php'; ?>

    
</body>
</html>
