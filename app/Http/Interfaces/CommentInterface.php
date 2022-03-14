<?php


namespace App\Http\Interfaces;


interface CommentInterface
{
    public function createComment($data);

    public function readComments();

    public function updateComment($data,$comment);

    public function deleteComment($comment);
}
