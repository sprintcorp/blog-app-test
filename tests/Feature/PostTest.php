<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_author_can_read_post()
    {

        $response = $this->get("/api/post");
        $response->assertStatus(200);
    }

    /** @test */
    public function test_author_can_create_post()
    {
        $data = [
            'title' => "book title",
            'author_name' => 'Fred Adebayo',
            'link' => "https://develops.notion.site/PHP-test-assessment-b...",
        ];
        $response = $this->post("api/post",$data);
//        $this->assertEquals('book title update',$response->title);
        $response->assertStatus(201);
    }

    /** @test */
    public function test_author_can_update_post()
    {
        $post = Post::factory()->create();
        $data = [
            'title' => "book title update",
            'author_name' => 'Fred Adebayo',
            'link' => "https://develops.notion.site/PHP-test-assessment-b...",
        ];
        $response = $this->put("/api/post/$post->id",$data);
        $response->assertStatus(200);
    }

    /** @test */
    public function test_author_can_delete_post()
    {
        $post = Post::factory()->create();
        $response = $this->delete("/api/post/$post->id");
        $response->assertStatus(200);
    }
}
