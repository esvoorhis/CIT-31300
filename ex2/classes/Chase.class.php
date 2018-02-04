<?php

class Chase extends users {

    public function __construct(){
        parent::__construct();
        $this-> user_id = "cburke";
        $this-> user_type = "1";
        $this-> first_name = "Chase";
        $this-> last_name = "Burke";
        $this-> email_address = "cburke@mail.com";
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