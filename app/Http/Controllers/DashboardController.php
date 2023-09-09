<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('user.dashboard.index', [
            'title' => 'Dashboard',
            'page' => 'dashboard',
            'subtitle' => 'Health Services',
        ]);
    }
}
