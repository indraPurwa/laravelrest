<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        return "Belajar Controller di Lumen";
    }

    public function index()
    {
        return "Halo ini berasal dari controller UserController dengan Method Index";
    }

    public function getIndexViews()
    {
        return view('user');
    }
}