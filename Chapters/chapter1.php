<?php/*$name = 'Pawel';$price = 5;*/$name = 'Guest';$name = 'Tomira';$price = 7;$nutrition = [    'fat' => 16,    'sugar' => 21,    'salt' => 6.3,];$best_sellers = [ 'Chocolate', 'Mints', 'Fudge', 'Bubble Gum', 'Toffee', 'Jelly Beans' ];$nutrition[ 'fat' ] = 36;$nutrition[ 'fiber' ] = 2.1;$offers = [    [ 'name' => 'Toffee', 'price' => 5, 'stock' => 120, ],    [ 'name' => 'Mints', 'price' => 3, 'stock' => 60, ],    [ 'name' => 'Fudge', 'price' => 4, 'stock' => 97, ],];$offers[ 3 ] = [ 'name' => 'Gummy Bears', 'price' => 2, 'stock' => 83, ];$favourites = ['Chocolate','Toffee','Fudge',]?><!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><link href="../CSS/main_styles.css" rel="stylesheet" type="text/css"><title>Mr. Soltys Projects</title><link rel="icon" href="/Assets/Logo.png"></head><body><nav>    <div class="navbar"> <a href="index.php"><img id="logo" src="/Assets/Logo.png" alt="My Logo Image"></a>        <header>Mr. Soltys Learning Page</header>        <ul>            <li><a href="#">PHP Text Book</a></li>            <li><a href="chapter1.php">Projects</a></li>        </ul>    </div></nav><main>    <menu>        <div class="sidebar">            <h1>PHP & MY SQL Book</h1>            <h2 class="sidebar_heading">Section A: Basic Programming Instructions</h2>            <ul>                <li class="chapter"><a href="introduction.php" id="A:Introduction">Introduction</a></li>                <li class="chapter selected"><a href="chapter1.php" id="Chapter1">Chapter 1: Variables, Expressions and</br>                    Operators</a></li>                <li class="chapter"><a href="#" id="Chapter2">Chapter 2: Control Structures</a></li>                <li class="chapter"><a href="#" id="Chapter3">Chapter 3: Functions</a></li>                <li class="chapter"><a href="#" id="Chapter4">Chapter 4: Objects</a></li>            </ul>            <h2 class="sidebar_heading">Section B: Dynamic Web Pages</h2>            <ul>                <li class="chapter"><a href="#" id="B:Introduction">Introduction</a></li>                <li class="chapter"><a href="#" id="Chapter5">Chapter 5: Built-in Functions</a></li>                <li class="chapter"><a href="#" id="Chapter6">Chapter 6: Getting Data From Browsers</a></li>                <li class="chapter"><a href="#" id="Chapter7">Chapter 7: Images and Files</a></li>                <li class="chapter"><a href="#" id="Chapter8">Chapter 8: Dates and Times</a></li>                <li class="chapter"><a href="#" id="Chapter9">Chapter 9: Cookies and Sessions</a></li>                <li class="chapter"><a href="#" id="Chapter10">Chapter 10: Error Handling</a></li>            </ul>        </div>    </menu>    <div class="main">        <h1>The Candy Store </h1>        <h2> Welcome <?= $name; ?></h2>        <br>        <p>Your favourite type of candy is:        <?= $favourites[2];?></p>        <p>The Cost of Your Candy is €<?php echo $price?> per pack</p>        <br>        <h3> Nutrition (per 100g) </h3>        <p>Fat: <?php echo $nutrition['fat'];?></p>        <p>Sugar: <?php echo $nutrition['sugar'];?></p>        <p>Salt: <?php echo $nutrition['salt'];?></p>        <p>Fiber: <?php echo $nutrition['fiber'];?></p>        <br>        <h3>Our Best Sellers:</h3>        <ol>            <li><?php echo $best_sellers[0]?></li>            <li><?php echo $best_sellers[1]?></li>            <li><?php echo $best_sellers[2]?></li>            <li><?php echo $best_sellers[3]?></li>            <li><?php echo $best_sellers[4]?></li>        </ol>        <br>        <h3>Offers !!!</h3>        <p><?php echo $offers[0]['name'];?> - €<?php echo $offers[0]['price']?></p>        <p><?php echo $offers[1]['name'];?> - €<?php echo $offers[1]['price']?></p>        <p><?php echo $offers[2]['name'];?> - €<?php echo $offers[2]['price']?></p>        <p><?php echo $offers[3]['name'];?> - €<?php echo $offers[3]['price']?></p>    </div></main></body></html>