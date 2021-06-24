<?php
class model{
    public $string;

    public function __construct(){
        $string = "olá mundo...";
    }
    public function get_string(){
        return $this->string;
    }
}
?>