<?php

namespace Tests;

use App\Models\Comment;
use App\Models\Post;
//use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication,RefreshDatabase;

    protected function createPost(){
        return Post::factory()->make();
    }

    protected function createComment(){
        return Comment::factory()->make();
    }
}
