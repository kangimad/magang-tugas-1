<?php

namespace App\Http\Controllers;

use App\Models\Districts;
use App\Models\Groups;
use App\Models\Organizations;
use App\Models\Provinces;
use App\Models\Regencies;
use App\Models\Types;
use App\Models\Villages;
use Illuminate\Http\Request;

class OrganizationsController extends Controller
{
    public function index(Request $request)
    {
        
        // dd($request->all());

        $organizations = Organizations::query()
            ->with(['group', 'type', 'province', 'regency', 'district', 'village'])
            ->when($request->name, function ($query) use ($request) {
                return $query->where('name', 'like', '%' . $request->name . '%');
            })
            ->when($request->group_id, function ($query) use ($request) {
                return $query->where('group_id', 'like', '%' . $request->group_id . '%');
            })
            ->when($request->type_id, function ($query) use ($request) {
                return $query->where('type_id', 'like', '%' . $request->type_id . '%');
            });

        return view('organizations.index', [
            'title' => 'Organizations',
            'subtitle' => 'Health Services',
            'groups' => Groups::all(),
            'types' => Types::all(),
            'organizations' => $organizations->paginate(10)
        ]);
    }

    public function create()
    {
        return view('organizations.create', [
            'title' => 'Organizations',
            'subtitle' => 'Create',
            'groups' => Groups::all(),
            'types' => Types::all(),
            'provinces' => Provinces::all(),
            'regencies' => Regencies::all(),
            'districts' => Districts::all(),
            'villages' => Villages::all()
        ]);
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'code' => 'required|unique:organizations|max:4',
            'name' => 'required|max:255',
            'group_id' => 'required',
            'type_id' => 'required',
            'class' => 'required',
            'address' => 'required|max:255',
            'phone' => 'required',
            'province_id' => 'required',
            'regency_id' => 'required',
            'district_id' => 'required',
            'village_id' => 'required',
        ]);

        Organizations::create($validatedData);

        return redirect('/organizations')->with('success', 'Data created!');



        // dd('Registrasi berhasil', request()->all());
        // return view('organizations', ['data' => $data]);
    }
}
