<?php

class Admin extends users {

    public function __construct($id, $level){
        parent::__construct($level);
        $this-> user_type = "2";
        $this-> user_id = $id;
    }


    public function __set($name, $value){
        $this->$name = $value;
        return;
    }

    public function __get($name){
        return $this->$name;
    }

    public function __destruct()
    {
    }

}
?>