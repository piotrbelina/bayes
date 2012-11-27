<?php

require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

use Bayes\Example\ProductClick;

$ts = array(
    new ProductClick('sac', '1')
);

$trainingSet = new Bayes\TrainingSet($ts);

$classifier = new Bayes\Classifier($trainingSet);
$classifier->trainOnAttribute('query');
$classifier->trainOnAttribute('product');

$classifier->train();