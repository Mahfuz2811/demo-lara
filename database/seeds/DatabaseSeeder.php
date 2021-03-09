<?php

use App\Category;
use App\Form;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Class1'
        ]);

        Category::create([
            'name' => 'Class2'
        ]);

        Form::create([
            'value' => 'Form 1',
            'category_id' => 1
        ]);

        Form::create([
            'value' => 'Form 2',
            'category_id' => 1
        ]);

        Form::create([
            'value' => 'Form 3',
            'category_id' => 1
        ]);

        Form::create([
            'value' => 'Form 3',
            'category_id' => 2
        ]);

        Form::create([
            'value' => 'Form 4',
            'category_id' => 2
        ]);
    }
}
