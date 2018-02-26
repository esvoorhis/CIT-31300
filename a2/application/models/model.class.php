<?php

abstract class model {
    protected $userid;
    protected $firstname;
    protected $lastname;
    protected $email;
    protected $role; //passed


    public function __construct($role){
        $this->role = $role;
    }

    public function __set($name, $value)
    {
    }

    public function __get($name)
    {
    }

    public function __destruct()
    {
    }

}
?>
