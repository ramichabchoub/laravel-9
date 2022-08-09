<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        //$this->middleware(['auth'])->only('index');
    }

    // Actions
    public function index()
    {
        $title = 'Store';

        // Return response: view, josn, redirect, file

        return view('dashboard.index', [
            'user' => 'Mohammed',
            'title' => $title
        ]);
    }
}
