<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


use Illuminate\Support\Facades\DB;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=new Admin;
        $admin->name="Sangeeta";
        $admin->email="admin@admin.com";
        $admin->password=Hash::make('password');
        $admin->save();
    }
}
