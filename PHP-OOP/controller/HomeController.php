<?php

require "Controller.php";

class HomeController extends Controller
{
    static function index()
    {
        return self::view("./view/home.php");
    }
}