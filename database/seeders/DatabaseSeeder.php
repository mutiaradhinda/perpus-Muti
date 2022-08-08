<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\models\category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        user::create([
            'name'=> 'Mutiara',
            'email'=> 'mdhinda10@gmail.com',
            'password'=> bcrypt('12345')
        ]);
    }
}
