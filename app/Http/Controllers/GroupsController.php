<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Routing\Controller;

class GroupsController extends Controller
{
    public function userIndex ()
    {
        return view('user.groups.index', [
            'app' => 'Health Services',
            'title' => 'Groups',
            'page' => 'groups',
            'groups' => Group::all()
        ]);
    }

    public function show ($group)
    {
        return view('user.groups.show', [
            'app' => 'Health Services',
            'title' => 'Groups',
            'subtitle' => 'opoyo',
            'page' => 'groups',
            'groups' => Group::find($group)
        ]);
    }
}
