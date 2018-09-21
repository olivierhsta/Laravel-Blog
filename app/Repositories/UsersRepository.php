<?php

namespace App\Repositories;
use App\User;

class UsersRepository {

    public function all($orderBy = null) {
        if ($orderBy === 'desc') {
            return User::latest()
                    ->filter(request(['month', 'year']))
                    ->get();
        } else if ($orderBy === 'asc') {
            return User::oldest()
                    ->filter(request(['month', 'year']))
                    ->get();
        } else {
            return User::all();
        }
    }


}
