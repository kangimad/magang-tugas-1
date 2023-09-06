<?php

namespace App\Http\Controllers;

use App\Models\Groups;
use PHPUnit\Framework\Attributes\Group;

class GroupsController extends Controller
{
    public function index ()
    {
        return view('groups.index', [
            'title' => 'Groups',
            'subtitle' => 'Health Services',
            'groups' => Groups::all()
        ]);
    }

    public function show ($groups)
    {
        return view('groups.show', [
            'title' => 'Groups',
            'subtitle' => 'Health Services',
            'groups' => Groups::find($groups)
        ]);
    }
}
