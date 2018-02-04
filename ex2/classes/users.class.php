<?php

class users {
    protected $user_id;
    protected $user_type;
    protected $first_name;
    protected $last_name;
    protected $email_address;
    protected $user_level; //passed variable


    public function __construct(){
        $this->user_id = 1;
    }


    public function __set($name, $value)
    {
    }

//    public function setLevel($Level){
//        $this-> user_level = $Level;
//        return;
 //   }

    public function __get($name)
    {
    }

 //   public function getLevel(){
 //       return $this-> user_level;
  //  }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }

}
?>