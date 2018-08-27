<?php

use App\Forum;
use App\User;
use App\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 50)->create();
        factory(Forum::class, 20)->create();
        factory(Post::class, 100)->create();

    }
}
