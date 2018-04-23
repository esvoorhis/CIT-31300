<?php

class CommentsController extends Controller
{

    public $commentObject;
    protected $access = "1";

    public function addComment(){
            $this->commentObject = new Comment();
            $this->set('task', 'save');
            $commentdata = array('uID' => $_POST['uID'], 'commentText' => $_POST['commentText'], 'date' => $_POST['date'], 'postID' => $_POST['postID']);
            $result = $this->commentObject->addComment($commentdata);
            $this->set('message', $result);
        }

        public
        function savecomment()
        {
            $this->commentObject = new Comment();
            $data = array('commentText' => $_POST['commentText'], 'date' => $_POST['date'], 'uID' => $_SESSION['uID']);
            $result = $this->commentObject->addComment($data);

            $this->set('message', $result);
        }
    }

