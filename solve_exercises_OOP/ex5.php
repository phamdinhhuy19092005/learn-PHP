<?php

class Calculator
{
    public static function cong($a, $b)
    {
        return $a + $b;
    }

    public static function tru($a, $b)
    {
        return $a - $b;
    }

    public static function nhan($a, $b)
    {
        return $a * $b;
    }

    public static function chia($a, $b)
    {
        return $a / $b;
    }
}

echo "Cộng: ". Calculator::cong(3, 4). "<br>";
echo "Trừ: ". Calculator::tru(5, 4). "<br>";
echo "Nhân: ". Calculator::nhan(3, 3). "<br>";
echo "Chia: ".Calculator::chia(12, 4). "<br>";
