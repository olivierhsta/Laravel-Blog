<?php

namespace App\Repositories;
use App\Post;

class PostsRepository {

    public function all($orderBy = null) {
        if ($orderBy === 'desc') {
            return Post::latest()
                    ->filter(request(['month', 'year']))
                    ->get();
        } else if ($orderBy === 'asc') {
            return Post::oldest()
                    ->filter(request(['month', 'year']))
                    ->get();
        } else {
            return Post::all();
        }
    }


}
