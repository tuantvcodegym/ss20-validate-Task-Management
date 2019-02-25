<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $task = new TasksTableSeeder();
        $task->title = 'Demo';
        $task->content = 'test';
        $task->due_date = 25/2/2019;
        $task->save();
    }
}
