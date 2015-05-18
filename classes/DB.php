<?php

class DB{

    public function __construct(){
        mysql_connect("localhost","root","","news_base");
        mysql_select_db("news_base");
     }

    public function query($sql,$class = stdClass){
        $res = mysql_query($sql);
        if($res===false){
            return false;
        }
        $ret = array();
        while($row = mysql_fetch_object($res,$class)){
            $ret[] = $row;
        }
        return $ret;
    }

    public function queryOne($sql,$class = stdClass){
        $arr = $this->query($sql,$class);
        return $arr;
    }


}



?>