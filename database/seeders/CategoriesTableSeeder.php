<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $major_category_names = [
            '書籍', 'コミック', '雑誌'
        ];

        $book_categories = [
            '文庫', '新書・小説'
        ];

        $comic_categories = [
            '少年コミック', '少女コミック', '青年コミック' 
        ];

        $magazine_categories = [
            'ファッション', 'インテリア', '車' 
        ];

        foreach ($major_category_names as $major_category_name) {
            if ($major_category_name == '書籍') {
                foreach ($book_categories as $book_category) {
                    Category::create([
                        'name' => $book_category,
                        'description' => $book_category,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }

            if ($major_category_name == 'コミック') {
                foreach ($comic_categories as $comic_category) {
                    Category::create([
                        'name' => $comic_category,
                        'description' => $comic_category,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }

            if ($major_category_name == '雑誌') {
                foreach ($magazine_categories as $magazine_category) {
                    Category::create([
                        'name' => $magazine_category,
                        'description' => $magazine_category,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }
        }
    }
}
