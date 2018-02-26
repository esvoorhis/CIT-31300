<?php
class controller{

    public $load;
    public $model;


    function __construct(){

        $this->load = new Load();
        $this->model = new users('admin');
        $this->home();
    }

    function home(){
        $data = $this->model->getname();
        $this->load->view('view.php',$data);
    }
}
