<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypesController extends Controller
{
    public function userIndex()
    {
        return view('user.types.index', [
            'app' => 'Health Services',
            'title' => 'Types',
            'subtitle' => 'Form',
            'page' => 'form-types',
            'types' => Type::all()
        ]);
    }
}
