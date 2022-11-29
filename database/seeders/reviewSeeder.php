<?php

namespace Database\Seeders;

use App\Models\review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class reviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reviews=[
            [
                'users_id'=>1,
                'star'=>5,
                'review'=>'Con los servicios de Guayabo Cero no me preocupo por mis reuniones del trabajo',
            ],
            [
                'users_id'=>2,
                'star'=>5,
                'review'=>'Cuando me recomendaron Guayabo cero no crei que realmente me revivira de esa ultima copa y no mas',

            ],
            [
                'users_id'=>3,
                'star'=>4,
                'review'=>'Para ser mi primera vez recurriendo a estos servicios me parecio excelente la atencion y servicio',

            ]
        ];
        foreach ($reviews as  $review) {
            $nuevo= new review();
            $nuevo->users_id=$review['users_id'];
            $nuevo->star=$review['star'];
            $nuevo->review=$review['review'];
            $nuevo->status=true;
            $nuevo->save();
        }
    }
}
