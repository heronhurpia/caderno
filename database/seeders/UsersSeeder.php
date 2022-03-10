<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
	public function run()
	{
		DB::table('users')->insert(['name'=>'admin','email'=>'admin@test.com','role'=>2,'password' => Hash::make('admin'),'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")]);
		DB::table('users')->insert(['name'=>'user','email'=>'user@test.com','role'=>1,'password' => Hash::make('user'),'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")]);
	}
}

