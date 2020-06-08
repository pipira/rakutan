<?php

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataSet = [
            [
                'user_id' => 1,
                'body' => '初投稿です！',
            ],
            [
                'user_id' => 1,
                'body' => '自動でデータを入れました',
            ],
            [
                'user_id' => 2,
                'body' => 'ID: 2 のユーザーの投稿です',
            ],
        ];

        foreach ($dataSet as $data) {
            Review::create($data);
        }
    }
}
