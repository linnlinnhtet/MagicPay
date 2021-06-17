<?php

use App\AdminUser;
use Illuminate\Database\Seeder;

class AdminUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminUser::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => '09961344108',
            'password' => bcrypt('123123123')
        ]);
    }
}
