<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=[
            [
                'name'=>'Erika Cruz',
                'phone'=>3112305183,
            ],
            [
                'name'=>'Diego Ortega',
                'phone'=>3112305193,
            ],
            [
                'name'=>'Pablo Jaramillo',
                'phone'=>3112305163,
            ]
        ];
        foreach ($users as  $user) {
            $nuevo= new User();
            $nuevo->name=$user['name'];
            $nuevo->phone=$user['phone'];
            $nuevo->email=null;
            $nuevo->status=true;
            $nuevo->save();
        }
    }
}
