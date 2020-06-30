<?php

use Illuminate\Database\Seeder;

class TestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tests')->insert([
            [
                'title' => 'TNTSearch',
                'content' => 'PHP编写的全文搜索引擎,非常强大'
            ],
            [
                'title' => 'jieba-php',
                'content' => '强大的中文分词，最好的php中文分词，中文拆分成关键字'
            ]
        ]);
    }
}
