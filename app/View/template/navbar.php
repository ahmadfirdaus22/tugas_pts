<nav>
    <ul>
        <li><a href="<?= OOP\app\Core\Router::url("") ?>">GoExport</a></li>
        <!-- <li><a href="<?= \OOP\app\Core\Router::url("exporter") ?>">Exporter</a></li> -->
        <li><a href="<?= OOP\app\Core\Router::url("buyer") ?>">Buyer</a></li>
        <li><a href="<?= OOP\app\Core\Router::url("product") ?>">Products</a></li>
        <li><a href="<?= OOP\app\Core\Router::url("supplier") ?>">Suppliers</a></li>
        <li>
            <div class="dropdown">
                Transaction
                <div class="dropdown-content">
                    <a href="<?= OOP\app\Core\Router::url("transaction_buy") ?>" class="item">Transaction Buy</a>
                    <a href="<?= OOP\app\Core\Router::url("transaction_receive") ?>" class="item">Transaction Receive</a>
                    <a href="<?= OOP\app\Core\Router::url("status") ?>" class="item">Status</a>
                </div>
            </div>
        </li>
        <li style="margin-left:105%">
            <div class="dropdown">
                Account
                <div class="dropdown-content" style="right:0;">
                    <a href="<?= OOP\app\Core\Router::url("exporter/new") ?>" class="item">Finish Account</a>
                    <a href="<?= \OOP\app\Core\Router::url("logout") ?>" class="item">Log out</a>
                </div>
            </div>
        </li>
    </ul>
</nav>
<div class="nothing"></div>
<div class="container">
