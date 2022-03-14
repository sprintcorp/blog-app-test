<?php


namespace App\Http\Interfaces;


use App\Models\Post;

interface PostInterface
{
    public function createPost($data);

    public function readPosts();

    public function updatePost($data, $post);

    public function upvotePost($post);

    public function deletePost($post);
}
