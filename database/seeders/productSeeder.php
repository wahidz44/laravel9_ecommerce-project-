<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Tomato',
                'price'=>'100',
                'category'=>'vegetable',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad animi delectus incidunt laudantium maxime quae ullam veritatis vitae voluptatibus? Architecto asperiores commodi consequatur illum ipsa, quam qui ratione ullam.',
                'image'=>'img/1.png',
            ],
            [
                'name'=>'Berger',
                'price'=>'200',
                'category'=>'fast food',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad animi delectus incidunt laudantium maxime quae ullam veritatis vitae voluptatibus? Architecto asperiores commodi consequatur illum ipsa, quam qui ratione ullam.',
                'image'=>'img/2.png',
            ],
            [
                'name'=>'Berger Food',
                'price'=>'300',
                'category'=>'fast food',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad animi delectus incidunt laudantium maxime quae ullam veritatis vitae voluptatibus? Architecto asperiores commodi consequatur illum ipsa, quam qui ratione ullam.',
                'image'=>'img/3.jpg',
            ],
            [
                'name'=>'Birth day gift',
                'price'=>'500',
                'category'=>'fast food',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad animi delectus incidunt laudantium maxime quae ullam veritatis vitae voluptatibus? Architecto asperiores commodi consequatur illum ipsa, quam qui ratione ullam.',
                'image'=>'img/4.png',
            ],
            [
                'name'=>'Vegetable',
                'price'=>'400',
                'category'=>'vegetable',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad animi delectus incidunt laudantium maxime quae ullam veritatis vitae voluptatibus? Architecto asperiores commodi consequatur illum ipsa, quam qui ratione ullam.',
                'image'=>'img/5.png',
            ],
            [
                'name'=>' Mixed Vegetable',
                'price'=>'500',
                'category'=>'vegetable',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad animi delectus incidunt laudantium maxime quae ullam veritatis vitae voluptatibus? Architecto asperiores commodi consequatur illum ipsa, quam qui ratione ullam.',
                'image'=>'img/6.png',
            ],
        ]);
    }
}
