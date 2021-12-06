<?php

use App\Models\Activity;
use App\Models\Comment;
use App\User;
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
        User::create([
            'name' => 'Amitav Roy',
            'email' => 'reachme@amitavroy.com',
            'password' => bcrypt('password'),
        ]);

        factory(Activity::class, 10)->create();

        $this->addActivities();
    }