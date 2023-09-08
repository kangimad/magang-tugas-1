<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Group;
use App\Models\Organization;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Type;
use App\Models\Village;
use Illuminate\Http\Request;

class OrganizationsController extends Controller
{
    public function index(Request $request)
    {

        // dd($request->all());

        $organizations = Organization::query()
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
            'groups' => Group::all(),
            'types' => Type::all(),
            'organizations' => $organizations->paginate(10)
        ]);
    }

    public function create()
    {
        return view('organizations.create', [
            'title' => 'Organizations',
            'subtitle' => 'Create',
            'groups' => Group::all(),
            'types' => Type::all(),
            'provinces' => Province::all(),
            'regencies' => Regency::all(),
            'districts' => District::all(),
            'villages' => Village::all()
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

        Organization::create($validatedData);

        return redirect()->route('organizations')->with('success', 'Data created!');



        // dd('Registrasi berhasil', request()->all());
        // return view('organizations', ['data' => $data]);
    }
}
