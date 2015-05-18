<?php

abstract class MainClass {

    protected static $table;
    protected static $class;

    public static function get_all(){
        $db = new DB();
        $sql = "SELECT * FROM ".static::$table;

        $result = $db->query($sql,static::$class);
        return $result;
    }

    public static  function get_one($id){
        $db = new DB();
        $sql = "SELECT * FROM ".static::$table." WHERE id=".$id;
        $arr = $db->query($sql,static::$class);
        return $arr[0];
    }

} 