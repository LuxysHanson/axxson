<?php

use App\Excel;
use App\Tree;
use App\Generator;

include 'StringHelper.php';
include 'Tree.php';
include 'Generator.php';
include 'Excel.php';

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
