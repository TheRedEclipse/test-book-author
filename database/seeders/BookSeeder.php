<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [ 'name' => 'Совершенный код'],
            [ 'name' => 'PHP глазами хакера'],
            [ 'name' => 'Laravel. Полное руководство'],
            [ 'name' => 'PHP. Рецепты программирования'],
            [ 'name' => 'MySQL по максимуму'],
            [ 'name' => 'Паттерны объектно-ориентированного проектирования']
        ];

        foreach ($data as $item) {
            Book::firstOrCreate($item);
        }
    }
}
