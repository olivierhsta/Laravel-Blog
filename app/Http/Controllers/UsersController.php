<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Repositories\UsersRepository;
use App\Events\UserWasCreated;
use App\User;

class UsersController extends Controller
{

    public function __construct() {
        $this->middleware('guest')->only(['create','store']);
        $this->middleware('auth')->only(['index','show']);
    }

    public function index(UsersRepository $usersRepository){
        // $posts = Post::latest()
        //             ->filter(request(['month', 'year']))
        //             ->get();

        $users = $usersRepository->all();

        return view('users.showAll', compact('users'));
    }

    public function show(User $user) {
        return view('users.show', compact('user'));
    }

    public function create() {
        return view('users.create');
    }

    public function store(RegistrationRequest $request) {
        $user = $request->persist();

        event(new UserWasCreated($user));

        session()->flash('message', 'Thanks for signing up');

        return redirect()->home();
    }
}
