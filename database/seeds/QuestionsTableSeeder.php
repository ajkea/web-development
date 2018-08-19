<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Question::class, 8)->create()->each(function ($u) {
            $u->question->save(factory(App\Question::class)->make());
        });
    }
}
