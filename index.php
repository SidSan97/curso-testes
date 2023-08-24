<?php

include 'autoloader.php';

$desconto = new DiscountCalculator;

echo $desconto->apply(value:180);