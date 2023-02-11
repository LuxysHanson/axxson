<?php

namespace App;

use App\StringHelper;

/**
 * Class Generator
 * @package App
 */
class Generator
{

    public function getData(): array
    {
        $json_string = file_get_contents('data.json');
        return StringHelper::isJson($json_string) ? json_decode($json_string, true) : [];
    }

}