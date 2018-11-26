<?php

class RomanNumeralsConverter
{
    protected static $lookup = [
        50 => 'L',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I'


    ];
    

    public function convert($number)
    {
        $solution = '';

        foreach (static::$lookup as $limit => $glyph)
        {
            while ($number >= $limit)
            {
                $solution .= $glyph;
                $number -= $limit;
            }
        }


        return $solution;
    }




}
