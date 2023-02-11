<?php

use app\models\Excel;
use app\models\Tree;
use app\models\Generator;

require __DIR__. '/helpers/StringHelper.php';
require __DIR__. '/models/Tree.php';
require __DIR__. '/models/Generator.php';
require __DIR__. '/models/Excel.php';

/**
 * Тестовое задание
 */

// №1
$data = (new Generator())->getData();

$tree = new Tree($data);
var_dump($tree->getTree());

// №2
$excel = new Excel();

var_dump($excel->columnName(1));
var_dump($excel->columnName(2));
var_dump($excel->columnName(27));
var_dump($excel->columnName(28));
