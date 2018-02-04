<?php

class Emily extends users {

    public function __construct(){
        parent::__construct();
        $this-> user_id = "evoorhis";
        $this-> user_type = "2";
        $this-> first_name = "Emily";
        $this-> last_name = "Voorhis";
        $this-> email_address = "evoorhis@mail.com";
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