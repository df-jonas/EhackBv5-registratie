<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'email'=>'jonas.de.frere@student.ehb.be',
                'firstname'=>'Jonas',
                'lastname'=>'De Frère',
                'password'=>bcrypt('password'),
                'hasRole'=>false,
                'confirmed'=>true,
            ],
            [
                'email'=>'jenne.baeten@student.ehb.be',
                'firstname'=>'Jenne',
                'lastname'=>'Baeten',
                'password'=>bcrypt('password'),
                'hasRole'=>false,
                'confirmed'=>true,
            ]
        ]);
    }
}
