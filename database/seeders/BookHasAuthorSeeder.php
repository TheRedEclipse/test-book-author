<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\BookHasAuthor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookHasAuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'book_id' => Book::whereName('Совершенный код')->firstOrFail()->id,
                'author_id' => Author::whereName('Стив Макконнелл')->firstOrFail()->id
            ],
            [
                'book_id' => Book::whereName('PHP глазами хакера')->firstOrFail()->id,
                'author_id' => Author::whereName('Михаил Фленов')->firstOrFail()->id
            ],
            [
                'book_id' => Book::whereName('Laravel. Полное руководство')->firstOrFail()->id,
                'author_id' => Author::whereName('Мэтт Стаффер')->firstOrFail()->id
            ],
            [
                'book_id' => Book::whereName('PHP. Рецепты программирования')->firstOrFail()->id,
                'author_id' => Author::whereName('Дэвид Скляр')->firstOrFail()->id
            ],
            [
                'book_id' => Book::whereName('PHP. Рецепты программирования')->firstOrFail()->id,
                'author_id' => Author::whereName('Адам Трахтенберг')->firstOrFail()->id
            ],
            [
                'book_id' => Book::whereName('MySQL по максимуму')->firstOrFail()->id,
                'author_id' => Author::whereName('Бэрон Шварц')->firstOrFail()->id
            ],
            [
                'book_id' => Book::whereName('MySQL по максимуму')->firstOrFail()->id,
                'author_id' => Author::whereName('Вадим Ткаченко')->firstOrFail()->id
            ],
            [
                'book_id' => Book::whereName('MySQL по максимуму')->firstOrFail()->id,
                'author_id' => Author::whereName('Петр Зайцев')->firstOrFail()->id
            ],
            [
                'book_id' => Book::whereName('Паттерны объектно-ориентированного проектирования')->firstOrFail()->id,
                'author_id' => Author::whereName('Ральф Джонсон')->firstOrFail()->id
            ],
            [
                'book_id' => Book::whereName('Паттерны объектно-ориентированного проектирования')->firstOrFail()->id,
                'author_id' => Author::whereName('Джон Влиссидес')->firstOrFail()->id
            ],
            [
                'book_id' => Book::whereName('Паттерны объектно-ориентированного проектирования')->firstOrFail()->id,
                'author_id' => Author::whereName('Ричард Хелм')->firstOrFail()->id
            ],
            [
                'book_id' => Book::whereName('Паттерны объектно-ориентированного проектирования')->firstOrFail()->id,
                'author_id' => Author::whereName('Эрих Гамма')->firstOrFail()->id
            ],
        ];

        foreach($data as $item) {
            BookHasAuthor::firstOrCreate($item);
        }
    }
}
