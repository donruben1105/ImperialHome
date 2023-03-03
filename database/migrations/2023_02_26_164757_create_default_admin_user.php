<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;

class CreateDefaultAdminUser extends Migration
{
    public function up()
    {
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'is_admin' => true,
        ]);
    }

    public function down()
    {
        DB::table('users')->where('email', 'admin@admin.com')->delete();
    }
}