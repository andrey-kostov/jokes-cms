<?php
require_once 'config.php';
require_once 'models/BlogModel.php';

class BlogController {
    private $model;

    public function __construct() {
        $this->model = new BlogModel();
    }

    public function index() {
        $posts = $this->model->getPosts();
        require_once 'views/home.php';
    }

   
    public function createPost() {
        require_once 'views/create-post.php';
    }

    public function savePost() {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $this->model->createPost($title, $content);
        header('Location: /');
    }
        
    public function showPost($id) {
        $post = $this->model->getPost($id);
        require_once 'views/single-post.php';
    }

    public function editPost($id) {
        $post = $this->model->getPost($id);
        require_once 'views/edit-post.php';
    }

    public function updatePost($id) {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $this->model->updatePost($id, $title, $content);
        header('Location: /post/' . $id);
    }

    public function deletePost($id) {
        $this->model->deletePost($id);
        header('Location: /');
    }
}