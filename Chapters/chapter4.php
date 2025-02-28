<?phpdeclare ( strict_types = 1 );class Customer {    public string $firstname;    public string $surname;    public string $email;    public string $password;}class Account {    public int $number;    public string $type;    public float $balance;        public function deposit(float $amount): float {        $this->balance +=$amount;        return $this->balance;    }        public function withdrawal(float $amount):float {        $this->balance -=$amount;        return $this->balance;    }}$customer = new Customer();$account = new Account();$customer->email = 'ivy@eg.link';$account->balance = 1000.00;$amount = 300;?><!DOCTYPE html><?php require_once '../includes/chapters_header.php'; ?><body><?php require_once '../includes/chapters_navbar.php'; ?><main>    <menu>        <div class="sidebar">            <h1>PHP & MY SQL Book</h1>            <h2 class="sidebar_heading">Section A: Basic Programming Instructions</h2>            <ul>                <li class="chapter"><a href="introduction.php" id="A:Introduction">Introduction</a></li>                <li class="chapter"><a href="chapter1.php" id="Chapter1">Chapter 1: Variables, Expressions and</br>                    Operators</a></li>                <li class="chapter"><a href="chapter2.php" id="Chapter2">Chapter 2: Control Structures</a></li>                <li class="chapter"><a href="chapter3.php" id="Chapter3">Chapter 3: Functions</a></li>                <li class="chapter selected"><a href="chapter4.php" id="Chapter4">Chapter 4: Objects</a></li>            </ul>            <h2 class="sidebar_heading">Section B: Dynamic Web Pages</h2>            <ul>                <li class="chapter"><a href="#" id="B:Introduction">Introduction</a></li>                <li class="chapter"><a href="#" id="Chapter5">Chapter 5: Built-in Functions</a></li>                <li class="chapter"><a href="#" id="Chapter6">Chapter 6: Getting Data From Browsers</a></li>                <li class="chapter"><a href="#" id="Chapter7">Chapter 7: Images and Files</a></li>                <li class="chapter"><a href="#" id="Chapter8">Chapter 8: Dates and Times</a></li>                <li class="chapter"><a href="#" id="Chapter9">Chapter 9: Cookies and Sessions</a></li>                <li class="chapter"><a href="#" id="Chapter10">Chapter 10: Error Handling</a></li>            </ul>        </div>    </menu>    <div class="main chapter4">        <img src="../img/bank_logo.png" alt="bank_logo" height="30" id="bank_logo" title="BankLogo">        <p>Email: <?= $customer->email ?></p>        <p>Opening Balance: €<?= $account->balance ?></p>        <p>Deposit Amount: €<?= $amount?></p>        <p>Closing Balance: €<?= $account->deposit($amount) ?></p>    </div></main><?php include '../includes/footer.php'; ?></body></html>