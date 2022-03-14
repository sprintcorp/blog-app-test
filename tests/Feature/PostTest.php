<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    /** @test */
    public function author_can_read_post()
    {
        $response = $this->get('/api/post');
        $response->assertStatus(200);
    }

    /** @test */
    public function author_can_create_post()
    {
        $data = [
            'title' => "book title update",
            'author_name' => 'Fred Adebayo',
            'link' => "https://develops.notion.site/PHP-test-assessment-b...",
        ];
        $response = $this->post('/api/post',$data);
        $response->assertStatus(201);
    }

    /** @test */
    public function author_can_update_post()
    {
        $post = $this->createPost();
        $data = [
            "title" => "book title update",
        ];
        $response = $this->put("/api/post/$post->id",$data);
        $response->assertStatus(200);
    }

    /** @test */
    public function author_can_delete_post()
    {
        $post = $this->createPost();
        $response = $this->delete("/api/post/$post->id");
        $response->assertStatus(200);
    }
}
