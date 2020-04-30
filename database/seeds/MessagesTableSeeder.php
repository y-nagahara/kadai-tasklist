<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'content' => 'test 1',
            'status' => 'OK'
        ]);
        DB::table('tasks')->insert([
            'content' => 'test 2',
            'status' => 'OK'
        ]);
        DB::table('tasks')->insert([
            'content' => 'test 3',
            'status' => 'OK'
        ]);
    }
}
