<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comments =  [
            [
                'post_id' => 1,
                'author_name' => 'Joh Doe',
                'content' => 'Hello world',
            ],
            [
                'post_id' => 2,
                'author_name' => 'Joh Doe',
                'content' => 'Hello world',
            ],
            [
                'post_id' => 1,
                'author_name' => 'Joh Doe',
                'content' => 'Hi',
            ],
            [
                'post_id' => 2,
                'author_name' => 'Joh Doe',
                'content' => 'Hello world',
            ]
        ];

        Comment::insert($comments);
    }
}
