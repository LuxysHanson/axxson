<?php

namespace app\models;

/**
 * Class Excel
 * @package app\models
 */
class Excel
{

    public function columnName(int $index)
    {
        $i = $index - 1;
        if ($i >= 0 && $i < 26) {
            return chr(ord('A') + $i);
        }
        if ($i > 25) {
            return ($this->columnName($i / 26)) . ($this->columnName($i % 26 + 1));
        }
        return 'A';
    }

}