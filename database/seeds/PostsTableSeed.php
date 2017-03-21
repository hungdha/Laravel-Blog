<?php

use Illuminate\Database\Seeder;

class PostsTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'This is a title for post',
            'except' => 'This is a except for post',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo vitae autem deleniti nihil praesentium cum labore, vero quo itaque voluptates ex quidem dolore atque sit, obcaecati dolorum id laudantium quasi.',
            'hits' => 0,
            'votes' => 0,
            'visible' => 1,
            'author' => 1,
            'create_at' => date("Y-m-d H:i:s"),
            'update_at' => date("Y-m-d H:i:s"),
            'settings' => json_encode([
                'comment_on' => 'open',
                'seo' => false,                
            ])
        ]);
    }
}
