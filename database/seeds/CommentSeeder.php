<?php

use Illuminate\Database\Seeder;
use App\Comments;
class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comment = new Comments();
        $comment->user_id = 1;
        $comment->item_id = 1;
        $comment->text = "comment by comments text Item`s";
        $comment->save();



    }
}
