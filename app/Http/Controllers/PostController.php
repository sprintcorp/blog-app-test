<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\PostInterface;
use App\Http\Requests\PostRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function __construct(protected PostInterface $post){}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->post->readPosts();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        return $this->post->createPost($request->all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        return $this->post->updatePost($request->all(),$post);
    }

    public function postUpvote(Post $post)
    {
        return $this->post->upvotePost($post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        return $this->post->deletePost($post);
    }
}
