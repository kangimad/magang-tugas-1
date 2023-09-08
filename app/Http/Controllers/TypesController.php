<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypesController extends Controller
{
    public function index()
    {
        return view('types.index', [
            'title' => 'Types',
            'subtitle' => 'Health Services',
            'types' => Type::all()
        ]);
    }
}
