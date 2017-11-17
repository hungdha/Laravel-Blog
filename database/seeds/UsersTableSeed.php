<?php

use Illuminate\Database\Seeder;

class UsersTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create(['email' => 'foo@bar.com']);
		Model::unguard();
		$user = [
			'name' => 'name',
			'email' => 'name@gmail.com',
			'password' => bcrypt('123456')
		];
		$db = DB::table('users')->insert($user);
    }
}
