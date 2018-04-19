<?php

use Faker\Generator as Faker;
use App\Task;


$factory->define(App\Task::class, function (Faker $faker) {
    return [
        // id
        // entry_id
	'entry_id'=>1,
	'log'=> str_random(10),
	'task_day'=> '2018-04-19',
	'task_hour'=> 1,
	'created_at'=> '2018-04-19',
	'updated_at'=> '2018-04-19',
        // 

    ];
});
