<?php
require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$classifier = new Bayes\Classifier;

$classifier->train();