<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Subscriber;
use App\Models\Website;
use Illuminate\Database\Seeder;

class WebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Website::factory()
            ->has(Post::factory()->count(3))
            ->has(Subscriber::factory()->count(2))
            ->count(3)
            ->create();
    }
}
