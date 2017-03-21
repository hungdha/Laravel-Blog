<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            'user'=> 1,
            'address1' => 'Thien Nhan, Linh Hai, Gio Linh, Quang Tri',
            'address2' => 'Con Tien, Gio Linh',
            'country' => 'Viet Nam',
            'state' => 100,
            'lang' => 'en'

        );
        DB::table('profiles')->insert( $data );
    }
}
