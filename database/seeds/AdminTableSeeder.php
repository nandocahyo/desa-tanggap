<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            "name" => "Admin",
            "email" => "desatanggap@admin.com",
            "password" => bcrypt(12345678)
        ]);
    }
}
