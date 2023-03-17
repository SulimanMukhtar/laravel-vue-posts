<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\DoctorUpdateRequest;
use Inertia\Inertia;


class DoctorsController extends Controller
{
    public function edit($id)
    {
        $doctor = Doctor::findOrFail($id);
        $this->authorize('view' , $doctor);
        return Inertia::render('Profile/EditDoctor', compact('doctor'));
    }

    public function update(DoctorUpdateRequest $request , $id)
    {
        $doctor = Doctor::findOrFail($id);
        $this->authorize('update' , $doctor);
        $doctor->update($request->validated());
        return Redirect::route('dashboard');
    }


    public function destroy(Request $request,$id)
    {
        $doctor = Doctor::findOrFail($id);
        $this->authorize('delete' , $doctor);
        $doctor->delete();
        return Redirect::route('dashboard');
    }
}