<?php

class users extends model{

    public function __construct($role){
        parent::__construct($role);
        $this->role = 'admin';
    }
    function getname(){
        return array(
            'userid'=>'evoorhis',
            'firstname'=>'Emily',
            'lastname'=>'Voorhis',
            'email'=>'evoorhis@iupui.edu',
            'role'=>'admin'
              );
        }
        public function __set($name, $value){
        $this->$name = $value;
        return;
        }
        public function __get($name){
        return $this->$name;
        }
        public function __destruct(){
    }

}
?>
