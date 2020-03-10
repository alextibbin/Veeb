<?php


class Post
{
    private $db;

    public function __construct(){
        $this->db = new Database();
    }
    // get all posts
    public function getAllPosts(){
        $this->db->query('SELECT * FROM posts');
        $posts=$this->db->getAll();
        if($this->db->rowCount() > 0){
            return $posts;
        } else {
            return false;
        }
    }

}