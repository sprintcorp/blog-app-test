<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts =  [
            [
                'title' => 'Title one',
                'link' => 'https://develops.notion.site/PHP-test-assessment-b...',
                'amount_of_upvotes' => 10,
                'author_name' => 'Billy jean',
            ],
            [
                'title' => 'Title two',
                'link' => 'https://develops.notion.site/PHP-test-assessment-b...',
                'amount_of_upvotes' => 100,
                'author_name' => 'Billy jean',
            ],
            [
                'title' => 'Title three',
                'link' => 'https://develops.notion.site/PHP-test-assessment-b...',
                'amount_of_upvotes' => 100,
                'author_name' => 'Billy jean',
            ],
            [
                'title' => 'Title four',
                'link' => 'https://develops.notion.site/PHP-test-assessment-b...',
                'amount_of_upvotes' => 15,
                'author_name' => 'Billy jean',
            ]
        ];

        Post::insert($posts);
    }
}
