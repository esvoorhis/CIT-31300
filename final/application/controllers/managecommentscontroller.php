<?php

class ManageCommentsController extends Controller{

    public $postComment;
    protected $access = "1";

    public function index() {
    }

    public function add(){
        $this->commentObject = new Comment();
        $this->set('task', 'save');
    }

}

