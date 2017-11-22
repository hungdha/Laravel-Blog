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
		$user = [
			'username' => 'admin',
			'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'firstname' => 'An' ,
            'lastname' => 'Le',
            'activated' => 1,
            'lastlogin' => time(),
            'createdtime' => time(),
            'modifiedtime' => time()
        ];
		$db = DB::table('users')->insert($user);
    }
}
