<?php
    namespace Controller;

    use Model\Post;
    use Model\PostDB;
    use Model\DBConnection;

    class PostController
    {
        public $postDB;

        public function __construct()
        {
            $connection = new DBConnection('mysql:host=localhost;dbname=blog_manager', 'root', '');
            $this->postDB = new PostDB($connection->connect());
        }

        public function index()
        {
            $posts = $this->postDB->getAll();
            include "view/list.php";
        }

        public function add()
        {
            if ($_SERVER['REQUEST_METHOD'] === 'GET')
            {
                include 'view/add.php';
            } else {
                $title = $_POST['title'];
                $teaser = $_POST['teaser'];
                $content = $_POST['content'];
                $created = date('Y-m-d');
                $post = new Post($title, $teaser, $content, $created);
                $this->postDB->create($post);
                $message = 'Post created';
                include 'view/add.php';
            }
        }

        public function delete()
        {
            if ($_SERVER['REQUEST_METHOD'] === 'GET')
            {
                $id = $_GET['id'];
                $post = $this->postDB->get($id);
                include 'view/delete.php';
            } else {
                $id = $_POST['id'];
                $this->postDB->delete($id);
                header('Location: index.php');
            }
        }

        public function edit()
        {
            if ($_SERVER['REQUEST_METHOD'] === 'GET')
            {
                $id = $_GET['id'];
                $post = $this->postDB->get($id);
                include('view/edit.php');
            } else {
                $id = $_POST['id'];
                $post = new Post($_POST['title'], $_POST['teaser'], $_POST['content'], $_POST['created']);
                $this->postDB->update($id, $post);
                header('Location: index.php');
            }
        }

        public function info()
        {
            $id = $_GET['id'];
            $post = $this->postDB->get($id);
            include('view/info.php');
        }
    }