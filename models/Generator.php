<?php

namespace app\models;

use app\helpers\StringHelper;

/**
 * Class Generator
 * @package app\models
 */
class Generator
{

    public function getData(): array
    {
        $json_string = file_get_contents('data.json');
        return StringHelper::isJson($json_string) ? json_decode($json_string, true) : [];
    }

}