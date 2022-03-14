<?php


namespace App\Http\Repositories;


use App\Http\Interfaces\CommentInterface;
use App\Http\Resources\CommentResource;
use App\Http\Traits\ApiResponser;
use App\Models\Comment;
use Illuminate\Http\JsonResponse;

class CommentRepository implements CommentInterface
{
    use ApiResponser;

    public function createComment($data)
    {
        $comment = Comment::create($data);
        return $this->showOne(new CommentResource($comment),201);
    }

    public function readComments()
    {
        return $this->showAll(CommentResource::collection(Comment::where('post_id',request()->get('post_id'))->get()),30);
    }

    public function updateComment($data, $comment)
    {
        $comment->update($data);
        return $this->showOne(new CommentResource($comment));
    }

    public function deleteComment($comment)
    {
        $comment->delete();
        return $this->showMessage('Comment deleted successfully');
    }
}
