<?php

class Controller
{   
    //inneritance
    static function view(
        string $page,
        $data = []
    ){
        $data;
        require $page;
    }
}