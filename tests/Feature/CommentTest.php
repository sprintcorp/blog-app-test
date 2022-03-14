<?php

namespace Tests\Feature;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CommentTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_user_can_create_comment()
    {
        $post = Post::factory()->create();
        $data = [
            'content' => "book title update",
            'author_name' => 'Fred Adebayo',
            'post_id' => $post->id,
        ];
        $response = $this->post("/api/comment",$data);
        $response->assertStatus(201);
    }

    /** @test */
    public function test_user_can_read_comment()
    {
        $post = Post::factory()->create();
        $response = $this->get("/api/comment?post_id=$post->id");
        $response->assertStatus(200);
    }
}
