<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // booksテーブルにデータを挿入
        DB::table('books')->insert([
            ['title' => "John's Book", 'author_id' => 1],
            ['title' => "Paul's Book", 'author_id' => 2],
            ['title' => "George's Book1st", 'author_id' => 3],
            ['title' => "George's Book2nd", 'author_id' => 3],
        ]);
    }
}
