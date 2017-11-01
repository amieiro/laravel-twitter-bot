<?php

namespace App\Console\Commands;

use App\Models\Tweet;
use App\Notifications\SendTweet;
use Illuminate\Console\Command;

class SendTweets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ltb:sendRandomTweet';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a random tweet';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $prefix = Tweet::inRandomOrder()->whereNotNull('prefix')->first()->prefix;
        $tweet = Tweet::inRandomOrder()->whereNotNull('body')->first();
        $tweet->prefix = $prefix;
        $this->info($tweet->prefix . ' ' . $tweet->body . PHP_EOL);
        $tweet->notify(new SendTweet());
    }
}
