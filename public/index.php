<?php

use OOP\app\Controller\Buyer;
use OOP\app\Controller\Exporter;
use OOP\app\Core\Router;
use OOP\app\Controller\Product;
use OOP\app\Controller\Saldo;
use OOP\app\Controller\Supplier;
use OOP\app\Controller\Trx_Buy;
use OOP\app\Controller\Trx_Receive;
use OOP\app\Middleware\Auth;
use OOP\app\Middleware\Guest;

require_once __DIR__ . '/../vendor/autoload.php';
session_start();

Router::addRoute('GET', '/', Exporter::class, 'home', [Auth::class]);
Router::addRoute('GET', '/login', Exporter::class, 'login', [Guest::class]);
Router::addRoute('POST', '/logining' , Exporter::class, 'signin', []);
Router::addRoute('GET', '/sign-up', Exporter::class, 'signup', [Guest::class]);
Router::addRoute('GET', '/logout', Exporter::class, 'logout', []);

//buyer
Router::addRoute('GET', '/buyer', Buyer::class, 'index', [Auth::class]);
Router::addRoute('GET', '/buyer/add', Buyer::class, 'add', [Auth::class]);
Router::addRoute('POST', '/buyer/adding', Buyer::class,'input', []);
Router::addRoute('POST', '/buyer/update/:id', Buyer::class, 'new', [Auth::class]);
Router::addRoute('POST','/buyer/updating', Buyer::class, 'update', []);
Router::addRoute('POST', '/buyer/delete', Buyer::class, 'delete', []);

//exporter
Router::addRoute('GET', '/exporter', Exporter::class, 'index', [Auth::class]);
Router::addRoute('POST', '/exporter/adding', Exporter::class,'input', []);
Router::addRoute('POST', '/exporter/update/', Exporter::class, 'new', [Auth::class]);
Router::addRoute('POST','/exporter/updating', Exporter::class, 'update', []);
Router::addRoute('POST', '/exporter/delete', Exporter::class, 'delete', []);

//product
Router::addRoute('GET', '/product', Product::class, 'index', [Auth::class]);
Router::addRoute('GET', '/product/add', Product::class, 'add', [Auth::class]);
Router::addRoute('POST', '/product/adding', Product::class,'input', []);
Router::addRoute('POST', '/product/update/:id', Product::class, 'new', [Auth::class]);
Router::addRoute('POST','/product/updating', Product::class, 'update', []);
Router::addRoute('POST', '/product/delete', Product::class, 'delete', []);

//supplier

Router::addRoute('GET', '/supplier', Supplier::class, 'index', [Auth::class]);
Router::addRoute('GET', '/supplier/add', Supplier::class, 'add', [Auth::class]);
Router::addRoute('POST', '/supplier/adding', Supplier::class,'input', []);
Router::addRoute('POST', '/supplier/update/:id', Supplier::class, 'new', [Auth::class]);
Router::addRoute('POST','/supplier/updating', Supplier::class, 'update', []);
Router::addRoute('POST', '/supplier/delete', Supplier::class, 'delete', []);

//trx_buy
Router::addRoute('GET', '/transaction_buy', Trx_Buy::class, 'index', [Auth::class]);
Router::addRoute('GET', '/transaction_buy/add', Trx_Buy::class, 'add', [Auth::class]);
Router::addRoute('POST', '/transaction_buy/detail/:id', Trx_Buy::class, 'detail', [Auth::class]);
Router::addRoute('POST', '/transaction_buy/adding', Trx_Buy::class,'input', []);
Router::addRoute('POST', '/transaction_buy/update/:id', Trx_Buy::class, 'new', [Auth::class]);
Router::addRoute('POST','/transaction_buy/updating', Trx_Buy::class, 'update', []);
Router::addRoute('POST', '/transaction_buy/delete', Trx_Buy::class, 'delete', []);


//trx_receive
Router::addRoute('GET', '/transaction_receive', Trx_Receive::class, 'index', [Auth::class]);
Router::addRoute('GET', '/transaction_receive/add', Trx_Receive::class, 'add', [Auth::class]);
Router::addRoute('POST', '/transaction_receive/adding', Trx_Receive::class,'input', []);
Router::addRoute('POST','/transaction_receive/updating', Trx_Receive::class, 'update', [Auth::class]);
Router::addRoute('POST', '/transaction_receive/delete', Trx_Receive::class, 'delete', []);

//status
Router::addRoute('GET', '/status', Saldo::class, 'index', [Auth::class]);
Router::addRoute('GET', '/status/add', Saldo::class, 'add', []);
Router::addRoute('GET', '/status/adding', Saldo::class,'input', []);
Router::addRoute('GET','/status/updating', Saldo::class, 'update', []);
Router::addRoute('GET', '/status/delete', Saldo::class, 'delete', []);

Router::run();   