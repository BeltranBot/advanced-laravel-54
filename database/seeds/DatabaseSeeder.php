<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\User::Class, 10)->create()->each(function($user) {
          $user->profile()->save(factory(App\Profile::class)->make());
        });
        factory(App\Article::Class, 100)->create();
    }
}
