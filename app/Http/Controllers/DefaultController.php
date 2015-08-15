<?php

namespace Profile\Http\Controllers;

use Illuminate\Http\Request;

use Profile\User;
use Profile\Http\Requests;
use Profile\Http\Controllers\Controller;

class DefaultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // Get only one user (ID: 1)
        $user = User::with([
            'posts' => function($q){
                $q->orderBy('created_at', 'desc');
            }
        ])->find(1);

        return view('profile', [ 'user' => $user ]);
    }

}
