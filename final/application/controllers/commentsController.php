<?php

class commentscontroller extends Controller{

    public $commentObject;

        public function comment($commentID){
        $this->commentObject = new Comment();
        $comment = $this->commentObject->getComment($commentID);
        $this->set('comment',$comment);
    }


    protected $access = "1";

    public function add() {
        $this->commentObject = new Comment();
        $this->set('task', 'save');
        $commentdata = array('uID'=>$_POST['uID'],'commentText'=>$_POST['commentText'],'date'=>$_POST['date'],'postID'=>$_POST['postID']);
        $result = $this->commentObject->addComment($commentdata);
        $this->set('message', $result);
    }

    public function save() {
        $this->commentObject = new Comment();
        $data = array('commentText'=>$_POST['commentText'], 'date'=>$_POST['date'], 'uID'=>$_SESSION['uID']);
        $result = $this->commentObject->addComment($data);

        $this->set('message', $result);
    }
}

