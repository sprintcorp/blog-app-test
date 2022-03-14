<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CommentTest extends TestCase
{
    /** @test */
    public function author_can_create_post_comment()
    {
        $post = $this->createPost();
        $data = [
            'content' => "book title update",
            'author_name' => 'Fred Adebayo',
            'post_id' => $post->id,
        ];
        $response = $this->post('/api/comment',$data);
        $response->assertStatus(201);
    }

    /** @test */
    public function author_can_read_post_comment()
    {
        $response = $this->post('/api/comment');
        $response->assertStatus(200);
    }
}
