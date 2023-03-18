<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospital;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\HospitalUpdateRequest;
use App\Http\Requests\HospitalStoreRequest;
use Inertia\Inertia;




class HospitalsController extends Controller
{
    public function edit($id)
    {
        $hospital = Hospital::findOrFail($id);
        $this->authorize('view' , $hospital);
        return Inertia::render('Profile/EditHospital', compact('hospital'));
    }

    public function create()
    {
        $this->authorize('view' , Hospital::class);
        return Inertia::render('Add/AddHospital');
    }

    public function store(HospitalStoreRequest $request)
    {
        $this->authorize('create' , Hospital::class);
        Hospital::create([
            'name' => $request->name,
            'location' => $request->location
        ]);
        return Redirect::route('dashboard');
    }

    public function update(HospitalUpdateRequest $request , $id)
    {
        $hospital = Hospital::findOrFail($id);
        $this->authorize('update' , $hospital);
        $hospital->update($request->validated());
        return Redirect::route('dashboard');
    }


    public function destroy(Request $request,$id)
    {
        $hospital = Hospital::findOrFail($id);
        $this->authorize('delete' , $hospital);
        $hospital->delete();
        return Redirect::route('dashboard');
    }
}
