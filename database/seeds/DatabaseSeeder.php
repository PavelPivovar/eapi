<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Task;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create();
        factory(Task::class, 10)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
