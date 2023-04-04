<?php
class BlogModel {
    private $db;

    public function __construct() {
        // connect to the database
        $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
        $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        $this->db = new PDO($dsn, DB_USER, DB_PASSWORD, $options);
    }

    public function getPosts() {
        // retrieve all blog posts from the database
        $stmt = $this->db->query('SELECT * FROM posts ORDER BY created_at DESC');
        $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $posts;
    }

    public function getPostById($id) {
        // retrieve a single blog post by its ID from the database
        $stmt = $this->db->prepare('SELECT * FROM posts WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $post = $stmt->fetch(PDO::FETCH_ASSOC);
        return $post;
    }

    public function createPost($title, $content) {
        // insert a new blog post into the database
        $stmt = $this->db->prepare('INSERT INTO posts (title, content) VALUES (:title, :content)');
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->execute();
        return $this->db->lastInsertId();
    }

    public function updatePost($id, $title, $content) {
        // update an existing blog post in the database
        $stmt = $this->db->prepare('UPDATE posts SET title = :title, content = :content WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->execute();
    }

    public function deletePost($id) {
        // delete a blog post from the database
        $stmt = $this->db->prepare('DELETE FROM posts WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
