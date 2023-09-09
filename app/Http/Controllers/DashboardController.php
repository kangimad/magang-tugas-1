<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function userIndex()
    {
        return view('user.dashboard.index', [
            'app' => 'Health Services',
            'title' => 'Dashboard',
            'page' => 'dashboard',
        ]);
    }
}
