<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MathLevel;
use App\Models\MathExercise;

class MathLevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Niveau 1 : Compter jusqu'à 5
        $level1 = MathLevel::create([
            'title' => 'Compter jusqu\'à 5',
            'level_number' => 1,
            'description' => 'Apprends à compter jusqu\'à 5 en plaçant des fruits dans un panier !'
        ]);

        // Exercices pour le niveau 1
        MathExercise::create([
            'math_level_id' => $level1->id,
            'type' => 'counting',
            'question' => 'Place 3 pommes dans le panier',
            'correct_answer' => 3
        ]);

        MathExercise::create([
            'math_level_id' => $level1->id,
            'type' => 'quiz',
            'question' => 'Combien y a-t-il de pommes ?',
            'options' => json_encode([1, 2, 3, 4, 5]),
            'correct_answer' => 3
        ]);

        // Niveau 2 : Compter jusqu'à 10
        $level2 = MathLevel::create([
            'title' => 'Compter jusqu\'à 10',
            'level_number' => 2,
            'description' => 'Apprends à compter jusqu\'à 10 en plaçant des fruits dans un panier !'
        ]);

        // Exercices pour le niveau 2
        MathExercise::create([
            'math_level_id' => $level2->id,
            'type' => 'counting',
            'question' => 'Place 7 pommes dans le panier',
            'correct_answer' => 7
        ]);

        MathExercise::create([
            'math_level_id' => $level2->id,
            'type' => 'quiz',
            'question' => 'Combien y a-t-il de pommes ?',
            'options' => json_encode([6, 7, 8, 9, 10]),
            'correct_answer' => 7
        ]);

        // Ajoutez d'autres niveaux et exercices selon vos besoins
    }
}
