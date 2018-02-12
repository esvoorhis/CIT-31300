<?php

class Registered extends users {

    public function __construct($id,$level){
        parent::__construct($level);
        $this-> user_id = $id;
        $this-> user_type = "1";

    }

    public function __set($name, $value){
        $this->$name = $value;
        return;
    }

    public function __get($name){
        return $this->$name;
    }

    static public function equation($a,$b){
        return  ($a+$b) * $a;
    }
    public function __destruct()
    {
    }

}
?>