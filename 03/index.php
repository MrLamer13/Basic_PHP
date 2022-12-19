<?php

require 'Product.php';
require 'Cart.php';

$keyboard = new Product('Клавиатура');
$keyboard->setPrice(1500);

$mouse = new Product('Мышь');
$mouse->setPrice(1000);

$keyboardMouse = new Product('Комплект клавомышь');
$keyboardMouse->setComponents([$keyboard, $mouse]);

$videocard = new Product('Видеокарта');
$videocard->setPrice(100000);

$cpu = new Product('Процессор');
$cpu->setPrice(30000);

$motherboard = new Product('Материнская плата');
$motherboard->setPrice(25000);

$ssd = new Product('Твердотельный накопитель');
$ssd->setPrice(8000);

$computercase = new Product('Корпус');
$computercase->setPrice(3000);

$systemblock = new Product('Системный блок');
$systemblock->setComponents([$computercase, $motherboard, $cpu, $videocard, $ssd]);

$monitor = new Product('Монитор');
$monitor->setPrice(20000);

$computer = new Product('Компьютер');
$computer->setComponents([$systemblock, $monitor, $keyboardMouse]);

echo $systemblock->getPrice().PHP_EOL;
echo $keyboardMouse->getPrice().PHP_EOL;
echo $monitor->getPrice().PHP_EOL;
echo $computer->getPrice().PHP_EOL;

$cart = new Cart();
$cart->addCart($mouse);
$cart->addCart($mouse);
$cart->addCart($keyboardMouse);
$cart->addCart($computer);
$cart->removeCart($computer);
$cart->removeCart($computer);
$cart->removeCart($keyboardMouse);
print_r($cart->getProducts());
echo $cart->getSumPrice();