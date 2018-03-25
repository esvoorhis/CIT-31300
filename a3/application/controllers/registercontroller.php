<?php
class RegisterController extends Controller{
    protected $userObject;

    public function defaultTask(){
        $userObject = new Users();
        $this->set('task','add');
    }
 //   public function add(){
 //       $this->userObnect = new Users();
 //       $data = array('first_name'=> $_POST['first_name'],'last_name'=> $_POST['last_name'],
 //           'email'=> $_POST['email'],'password'=> $_POST['password']);
 //       $this->userObject->addUser($data);
 //       $this->set('message','You are now registered.');
 //   }
    public function do_login(){}
}
