<?php
require_once __DIR__."/../models/News.php";

class NewsController {

    public function actionAll(){
        $items = News::get_all();
       include __DIR__ . "/../views/allnews.php";
    }

    public function actionOne(){
        $id = $_GET['id'];
        $oneitem = News::get_one($id);
        include __DIR__."/../views/onenews.php";
    }

} 