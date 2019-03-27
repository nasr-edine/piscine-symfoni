<?php

class Text
{
    public $param;

    public function __construct($param) {
      $this->param = $param;
    }
    public function printText()
    {
        foreach($this->param as $key => $value)
        {
          echo $key." has the value ". $value . "\n";
        }
    }
}
?>