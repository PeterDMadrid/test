<?php

class displayView {
    public function display(){
        require_once("formView1.php");
    }
}

$display = new displayView();
$display->display();