<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job 
{
    

    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Job One',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing
                 elit. Nihil repellat explicabo culpa consequatur sapiente reprehenderit,
                  autem voluptatem, reiciendis et asperiores esse nulla temporibus dicta facere
                Officia quam quas sequi alias voluptatibus est magni accusamus ullam, 
                sunt ducimus reiciendis nam sit, modi ut temporibus vel dolore ipsum 
                voluptas fugit vitae laborum. Placeat quia magnam praesentium quasi?'
            ],
            [
                'id' => 2,
                'title' => 'Job Two',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing
                 elit. Nihil repellat explicabo culpa consequatur sapiente reprehenderit,
                  autem voluptatem, reiciendis et asperiores esse nulla temporibus dicta facere
                Officia quam quas sequi alias voluptatibus est magni accusamus ullam, 
                sunt ducimus reiciendis nam sit, modi ut temporibus vel dolore ipsum 
                voluptas fugit vitae laborum. Placeat quia magnam praesentium quasi?' 
            ]
            ];
    }

    public static function find($id) {
        $jobs = self::all();

        foreach ($jobs as $job) {
            if ($job['id'] == $id) {
                return $job;
            }
        }
    }
};
