<?php$name = 'Tomira';$greeting = 'Hello ';if ( $name !== '' ) {    $greeting = 'Welcome back ' . $name . '!!!';}$stock = 5;/*if ( $stock > 0 ) {    $message = 'In Stock';} else {    $message = 'Unfortunately Sold Out ';}*/$stock = 0;$message = ($stock > 0) ? 'In Stock' : 'Unfortunately Sold Out';?><!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><link href="../CSS/main_styles.css" rel="stylesheet" type="text/css"><title>Mr. Soltys Projects</title><link rel="icon" href="/Assets/Logo.png"></head><body><nav>    <div class="navbar"> <a href="../index.php"><img id="logo" src="/Assets/Logo.png" alt="My Logo Image"></a>        <header>Mr. Soltys Learning Page</header>        <ul>            <li><a href="#">PHP Text Book</a></li>            <li><a href="../index.php">Projects</a></li>        </ul>    </div></nav><main>    <menu>        <div class="sidebar">            <h1>PHP & MY SQL Book</h1>            <h2 class="sidebar_heading">Section A: Basic Programming Instructions</h2>            <ul>                <li class="chapter"><a href="introduction.php" id="A:Introduction">Introduction</a></li>                <li class="chapter"><a href="chapter1.php" id="Chapter1">Chapter 1: Variables, Expressions and</br>                    Operators</a></li>                <li class="chapter selected"><a href="chapter2.php" id="Chapter2">Chapter 2: Control Structures</a></li>                <li class="chapter"><a href="#" id="Chapter3">Chapter 3: Functions</a></li>                <li class="chapter"><a href="#" id="Chapter4">Chapter 4: Objects</a></li>            </ul>            <h2 class="sidebar_heading">Section B: Dynamic Web Pages</h2>            <ul>                <li class="chapter"><a href="#" id="B:Introduction">Introduction</a></li>                <li class="chapter"><a href="#" id="Chapter5">Chapter 5: Built-in Functions</a></li>                <li class="chapter"><a href="#" id="Chapter6">Chapter 6: Getting Data From Browsers</a></li>                <li class="chapter"><a href="#" id="Chapter7">Chapter 7: Images and Files</a></li>                <li class="chapter"><a href="#" id="Chapter8">Chapter 8: Dates and Times</a></li>                <li class="chapter"><a href="#" id="Chapter9">Chapter 9: Cookies and Sessions</a></li>                <li class="chapter"><a href="#" id="Chapter10">Chapter 10: Error Handling</a></li>            </ul>        </div>    </menu>    <div class="main">        <h1>The Candy Store </h1>        <h2>            <?= $greeting ?>        </h2>        <br>        <h2>Chocolate is            <?= $message ?>        </h2>    </div></main></body></html>