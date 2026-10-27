<?php


class BookController extends Controller
{
    static function index()
    {
        return self::view("./views/book.php");
    }
}