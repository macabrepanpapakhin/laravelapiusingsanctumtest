<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'topic'=>fake()->title(),
            'learnt_time'=>fake()->time(),
            'start_date'=>fake()->date(),
            'end_date'=>fake()->date(),
            'finish_task'=>'false',
            'category_name'=>fake()->name(),
            'user_id'=>rand(1,10)
        ];
    }
    // $table->id();
    // $table->foreignId('user_id')->constrained()->onDelete('cascade');
    // $table->string('topic');
    // $table->string('learnt_time');
    // $table->string('start_date');
    // $table->string('end_date')->nullable();
    // $table->string('finish_task');
    // $table->string('category_name');
    // $table->timestamps();
}
