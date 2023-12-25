<?php
require_once "./src/app/config/index.php";

require_once ROOT . "shared/lib/utils/router/Router.php";
require_once ROOT . "entities/pay-order/PayOrder.php";
require_once ROOT . "entities/store/Store.php";
require_once ROOT . "entities/order/Order.php";
require_once ROOT . "entities/auth/Auth.php";
require_once ROOT . "entities/cart/Cart.php";

session_start();

$router = new Router();

// add cart field to user as order field
$router
  // ->get("/", [, ""])
  ->get("/", [Store::class, "index"])
  ->get("/store", [Store::class, "getProducts"])
  ->get("/cart", [Cart::class, "getCart"])
  ->get("/order", [Order::class, "getOrder"]);

$router
  ->post("/pay-order", [PayOrder::class, "payOrder"])
  ->post("/order", [Order::class, "createPurchase"])
  ->post("/cart", [Cart::class, "addItem"]);

echo $router->resolve(
  $_SERVER["REQUEST_URI"],
  strtolower($_SERVER["REQUEST_METHOD"])
);
?>