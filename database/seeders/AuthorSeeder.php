<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [ 'name' => 'Стив Макконнелл'],
            [ 'name' => 'Михаил Фленов'],
            [ 'name' => 'Мэтт Стаффер'],
            [ 'name' => 'Дэвид Скляр'],
            [ 'name' => 'Адам Трахтенберг'],
            [ 'name' => 'Бэрон Шварц'],
            [ 'name' => 'Вадим Ткаченко'],
            [ 'name' => 'Петр Зайцев'],
            [ 'name' => 'Ральф Джонсон'],
            [ 'name' => 'Джон Влиссидес'],
            [ 'name' => 'Ричард Хелм'],
            [ 'name' => 'Эрих Гамма'],
        ];

        foreach ($data as $item) {
            Author::firstOrCreate($item);
        }
    }
}
