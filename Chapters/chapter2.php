<?php$name = 'Tomira';$greeting = 'Hello ';if ( $name !== '' ) {    $greeting = 'Welcome back ' . $name . ' !!!';}$stock = 0;$ordered = 3;/*if ( $stock > 0 ) {    $message = 'In Stock';} else {    $message = 'Unfortunately Sold Out ';}*///$message = ($stock > 0) ? 'In Stock' : 'Unfortunately Sold Out';if ( $stock > 0 ) {    $message = "In Stock";} elseif ( $ordered > 0 ) {    $message = "Coming Soon";} else {    $message = 'Unfortunately Sold Out';};$day = "Monday";$date = date( 'l' );$day = $date;switch ( $day ) {    case 'Monday':        $offer = '20% off Chocolate!';        break;    case 'Tuesday':        $offer = '20% off mints';        break;    case 'Friday':        $offer = '10% on all Sweets !';        break;    default:        $offer = 'Buy 2 packs of chocolates get the 3rd one free';}/*$offer = match($day) {    'Monday' => '20% off Chocolates !!!',    'Saturday', 'Sunday' => '20% off Mints !!!', //Error appears as DreamWeaver only supports functions for PHP 7 or below. match function is for PHP 8 or above.     default => '10% on your Entire Order',}*/$counter = 1;$packs = 5;$price = 1.95;$products = [    'Toffee' => 2.99,    'Mints' => 1.95,    'Fudge' => 3.50,    'Ice Cream' => 5.00,];$best_sellers = [    'Chocoalte',    'Mints',    'Muffins',    'Chocolate Chip Cookies'];?><!DOCTYPE html><?php require_once '../includes/chapters_header.php'; ?><body><?php require_once '../includes/chapters_navbar.php'; ?><main>    <?php require_once '../includes/chapters_side_menu.php'; ?>    <div class="main">        <h1>The Candy Store </h1>        <h2>            <?= $greeting ?>        </h2>        <br>        <h4>Chocolate is            <?= $message ?>        </h4>        <br>        <h2>            <?= $day?>            Offers:</h2>        <p>            <?= $offer?>        </p>        <br>        <h2>Multiple pack prices:</h2>        <h4>Counted using while loop</h4>        <p>            <?php            while ( $counter <= $packs ) {                echo $counter;                echo ' packs costs €';                echo $price * $counter;                echo '<br>';                $counter++;            }            ?>        </p>        <br>        <h4>Counted using do while loop</h4>        <p>            <?php            do {                echo $packs;                echo ' packs costs €';                echo $price * $packs;                echo '<br>';                $packs--;            } while ( $packs > 0 );            ?>        </p>        <br>        <h4>Counted using while loop</h4>        <p>            <?php            for ( $i = 1; $i <= 10; $i++ ) {                echo $i;                echo ' packs costs €';                echo $price * $i;                echo '<br>';            }            ?>        </p>        <h2>Prices For Large Orders:</h2>        <h4>Counted using for loop</h4>        <p>            <?php            for ( $i = 10; $i <= 100; $i = $i + 10 ) {                echo $i;                echo ' packs costs €';                echo $i * $price;                echo '<br>';            }            ?>        </p>        <h2>Price List:</h2>        <table>            <tr>                <th>Item</th>                <th>Price</th>            </tr>            <?php foreach ($products as $items => $price) {?>            <tr>                <td><?=$items?></td>                <td><?=$price?></td>            </tr>            <?php }?>        </table>        <br>        <h2>Shop Best Sellers:</h2>        <br>        <?php foreach($best_sellers as $product) {?>        <p>            <?=$product?>        </p>        <?php } ?>    </div></main><?php include '../includes/footer.php'; ?></body></html>