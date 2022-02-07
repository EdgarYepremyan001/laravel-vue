<?php

namespace App\Repositories;

use App\Interfaces\PostRepositoryInterface;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

/**
 *
 */
class PostRepository implements PostRepositoryInterface
{
    public function getAll()
    {
        return Post::where(Auth::id(),'user_id');
    }

    public function getById($postId)
    {
        return Post::find($postId);
    }

    /**
     * @param $postId
     * @return void
     */
    public function delete($postId)
    {
        Post::destroy($postId);
    }

}
