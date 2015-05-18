<?php
require __DIR__.'/MainClass.php';
//require_once __DIR__ . "/../classes/DB.php";

class News extends MainClass{

    public $id;
    public $title;
    public $short;
    public $long;
    public $date;

    protected static $table = 'news_table';
    protected static $class = 'News';


}

?>