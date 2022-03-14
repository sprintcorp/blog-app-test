<?php


namespace App\Http\Repositories;


use App\Http\Interfaces\PostInterface;
use App\Http\Resources\PostResource;
use App\Http\Traits\ApiResponser;
use App\Models\Post;

class PostRepository implements PostInterface
{
    use ApiResponser;

    public function createPost($data)
    {
        $post = Post::create($data);
        return $this->showOne(new PostResource($post),201);
    }

    public function readPosts()
    {
        return $this->showAll(PostResource::collection(Post::all()),30);
    }

    public function updatePost($data, $post)
    {
        $post->update($data);
        return $this->showOne(new PostResource($post));
    }

    public function deletePost($post)
    {
        $post->delete();
        return $this->showMessage('Post deleted successfully');
    }

    public function upvotePost($post)
    {
        $post->amount_of_upvotes += 1;
        $post->save();
        return $this->showMessage('Post upvoted successfully');
    }
}
