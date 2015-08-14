<?php

namespace Profile\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('profile');
    }

}
