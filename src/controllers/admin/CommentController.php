<?php
namespace controllers\admin;

use models\Comment;

class CommentController
    {
    
    public $modelObject;
    public $comments;

    public $base = BASE_URL;
    // public function index()
    //     {
    //     $comments = $this->modelObject->getAllComment();
    //     require_once './src/views/admin/comment/comment.php';
    //     }
    public function __construct()
        {
        $this->modelObject = new Comment();
        }

        public function index() {
            $comments =  $this->modelObject->getProduct();
            require_once './src/views/admin/comment/comment.php';
        }

        public function delete() { 
            $id = $_GET['id'];
            $comment = $this->modelObject->deleteComment($id);
            header('Location: '.BASE_URL.'/admin/comment');
        }
        
    }


?>