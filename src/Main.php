<?php

 include 'CheckForMultipleNum.php';
 include 'Display.php';

class Main
{
    private $result = [];

    public function printNum($start = 0, $limit = 100)
    {
        $checkFor = new CheckForMultipleNum();

        for($i = $start; $i<= $limit; $i++)
        {
            $this->result['3n5'] = $checkFor->calc($i, 3, 5);
            $this->result['3'] = $checkFor->calc($i, 3);
            $this->result['5'] = $checkFor->calc($i, 5);
            $this->result['number'] = $i;
            $print = new Display();
            echo '<pre>';
            $print->printNum($this->result);

        }
    }
}
