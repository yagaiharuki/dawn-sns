<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
public function run()
    {
        //以下を追加します。
        DB::table('posts')->insert([
            ['post' => '1つ目の投稿になります'],
            ['post' => 'Laravelの投稿ページを作りました'],
            ['post' => '投稿についてのCRUD一式を作っています'],
            ['post' => 'MVCの役割を体験中です'],
            ['post' => '初期レコードがこれで終わりです。']
        ]);
    }
