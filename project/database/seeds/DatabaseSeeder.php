<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Articles;


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

        //Add Users

        User::create([
            'name' => 'Lubomir Popivanov',
            'email' => 'lpopivanov@sbnd.net',
            'password' => bcrypt('Testing1'),
        ]);

        User::create([
            'name' => 'Lubomir Popivanov 2',
            'email' => 'lpopivanov2@sbnd.net',
            'password' => bcrypt('Testing1'),
        ]);

        //End Users

        //Add Articles
        Articles::create([
            'title' => 'Article 1 Title',
            'body' => 'Body Article 1',
            'users_id' => 1
        ]);

        Articles::create([
            'title' => 'Article 2 Title',
            'body' => 'Body Article 2',
            'users_id' => 1
        ]);

        Articles::create([
            'title' => 'Article 3 Title',
            'body' => 'Body Article 3',
            'users_id' => 2
        ]);
        //End Articles
    }
}
