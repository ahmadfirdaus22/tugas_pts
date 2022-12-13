<?php

use OOP\app\Controller\Buyer;
use OOP\app\Controller\Exporter;
use OOP\app\Core\Router;
use OOP\app\Controller\Product;
use OOP\app\Controller\Saldo;
use OOP\app\Controller\Supplier;
use OOP\app\Controller\Trx_Buy;
use OOP\app\Controller\Trx_Receive;

require_once __DIR__ . '/../vendor/autoload.php';
session_start();

//buyer
Router::addRoute('GET', '/buyer', Buyer::class, 'index', []);
Router::addRoute('GET', '/buyer/addding', Buyer::class,'input', []);
Router::addRoute('GET','/buyer/updating', Buyer::class, 'update', []);
Router::addRoute('GET', '/buyer/delete', Buyer::class, 'delete', []);

//exporter
Router::addRoute('GET', '/exporter', Exporter::class, 'index', []);
Router::addRoute('GET', '/exporter/adding', Exporter::class,'input', []);
Router::addRoute('GET','/exporter/updating', Exporter::class, 'update', []);
Router::addRoute('GET', '/exporter/delete', Exporter::class, 'delete', []);

//product
Router::addRoute('GET', '/product', Product::class, 'index', []);
Router::addRoute('GET', '/product/adding', Product::class,'input', []);
Router::addRoute('GET','/product/updating', Product::class, 'update', []);
Router::addRoute('GET', '/product/delete', Product::class, 'delete', []);

//supplier

Router::addRoute('GET', '/supplier', Supplier::class, 'index', []);
Router::addRoute('GET', '/supplier/adding', Supplier::class,'input', []);
Router::addRoute('GET','/supplier/updating', Supplier::class, 'update', []);
Router::addRoute('GET', '/supplier/delete', Supplier::class, 'delete', []);

//trx_buy
Router::addRoute('GET', '/transaction_buy', Trx_Buy::class, 'index', []);
Router::addRoute('GET', '/transaction_buy/adding', Trx_Buy::class,'input', []);
Router::addRoute('GET','/transaction_buy/updating', Trx_Buy::class, 'update', []);
Router::addRoute('GET', '/transaction_buy/delete', Trx_Buy::class, 'delete', []);


//trx_receive
Router::addRoute('GET', '/transaction_receive', Trx_Receive::class, 'index', []);
Router::addRoute('GET', '/transaction_receive/adding', Trx_Receive::class,'input', []);
Router::addRoute('GET','/transaction_receive/updating', Trx_Receive::class, 'update', []);
Router::addRoute('GET', '/transaction_receive/delete', Trx_Receive::class, 'delete', []);

//saldo
Router::addRoute('GET', '/saldo', Saldo::class, 'index', []);
Router::addRoute('GET', '/saldo/adding', Saldo::class,'input', []);
Router::addRoute('GET','/saldo/updating', Saldo::class, 'update', []);
Router::addRoute('GET', '/saldo/delete', Saldo::class, 'delete', []);

Router::run();   