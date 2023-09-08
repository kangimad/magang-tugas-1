<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Routing\Controller;

class GroupsController extends Controller
{
    public function index ()
    {
        return view('user.groups.index', [
            'title' => 'Groups',
            'subtitle' => 'Health Services',
            'groups' => Group::all()
        ]);
    }

    public function show ($group)
    {
        return view('user.groups.show', [
            'title' => 'Groups',
            'subtitle' => 'Health Services',
            'groups' => Group::find($group)
        ]);
    }
}
