<?php


class Display
{
    public function printNum($result)
    {
        switch($result)
        {
            case ($result['3n5'] === 0):
                print 'Linianos';
                break;
            case ($result['3'] === 0):
                print 'Linio';
                break;
            case ($result['5'] === 0):
                print 'IT';
                break;
            default: print $result['number'];
                break;
        }
    }
}