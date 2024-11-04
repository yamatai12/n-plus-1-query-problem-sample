<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // authorsテーブルにデータを挿入
        DB::table('authors')->insert([
            ['name' => 'John'],
            ['name' => 'Paul'],
            ['name' => 'George'],
            ['name' => 'Ringo'],
        ]);
    }
}
