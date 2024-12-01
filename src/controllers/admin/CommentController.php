<?php
namespace controllers\admin;

use models\Comment;


class CommentController
    {
    public $modelObject;
    public $base = BASE_URL;
    public function __construct()
    {
    $this->modelObject = new Comment();
    }
    public function index()
        {
            // $_SESSION['admin_ift'] = '1';
        $comments = $this->modelObject->getAllComment();
        require_once './src/views/admin/comment/index.php';
        }
   

    public function delete(){
        $_SESSION['admin_ift'] = '1';
        $id = $_GET['id'];
        $this->modelObject->deleteComment($id);
        header("location: $this->base/admin/comment");
        }

    public function create(){
        $_SESSION['admin_ift'] = '1';
        if ($_SERVER['REQUEST_METHOD'] =='POST') {       
            $this->modelObject->createComment($_POST);
            header("location: $this->base/admin/comment");
            } else {
            require_once './src/views/admin/comments/create.php';
            }
        }

    public function update()
        {
            $_SESSION['admin_ift'] = '1';
            if ($_SERVER['REQUEST_METHOD'] =='POST') {       
                $this->modelObject->updateComment($_POST);
                header("location: $this->base/admin/comment");
            } else {
                $id = $_GET['id'];
                $Comments = $this->modelObject->getCommentById($id);
                require_once './src/views/admin/comment/edit.php';
            }
        }
    }

?>