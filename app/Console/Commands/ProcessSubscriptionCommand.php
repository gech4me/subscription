<?php

namespace App\Console\Commands;

use App\Events\SendSubscriptionPostEmail;
use App\Models\Post;
use Illuminate\Console\Command;

class ProcessSubscriptionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:process-subscription';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $posts = Post::all();
        foreach ($posts as $post) {
            foreach ($post->website->subscribers as $subscriber) {
                SendSubscriptionPostEmail::dispatch($post, $subscriber->email);
            }
        }
    }
}
