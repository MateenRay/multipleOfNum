<?php



class CheckForMultipleNum
{
    public function calc ($number = 1, $param1 = 1, $param2 = 1) {
        return ($number % $param1)+ ($number % $param2);
    }
}