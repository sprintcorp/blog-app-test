<?php

namespace App\Providers;

use App\Http\Interfaces\CommentInterface;
use App\Http\Interfaces\PostInterface;
use App\Http\Repositories\CommentRepository;
use App\Http\Repositories\PostRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PostInterface::class,PostRepository::class);
        $this->app->bind(CommentInterface::class,CommentRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
