<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $developer = new User();
        $developer->name = 'Wayne';
        $developer->email = 'waynedemetra@gmail.com';
        $developer->password = bcrypt('wayne1980');
        $developer->save();
    }
}
