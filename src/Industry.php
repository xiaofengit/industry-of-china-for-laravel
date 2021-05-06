<?php
namespace Xiaofengit\IndustryOfChinaForlaravel;

use Exception;

class Industry
{
    public static function getRawInsert()
    {
        $prefix = __DIR__ . '/../data/';
        $file = $prefix .'insert_industry.sql';
        if (!file_exists($file)) {
            throw new Exception("file:{$file} does not exist.");
        }
        $raw = \file_get_contents($file);
        if (!$raw) {
            throw new Exception("Unknow error.");
        }

       
        return $raw;
    }
}