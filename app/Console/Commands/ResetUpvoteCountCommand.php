<?php

namespace App\Console\Commands;

use App\Jobs\ResetUpvoteCountJob;
use Illuminate\Console\Command;

class ResetUpvoteCountCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'upvote:reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This reset post upvote';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        dispatch(new ResetUpvoteCountJob())->delay(2);
        return 0;
    }
}
