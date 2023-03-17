<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Doctor;
use App\Models\Hospital;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        if(auth()->user()->role_id === 0){
            $hospitals = Hospital::all();
        }else{
            $hospitals = null;
        }
        $posts = Post::all();
        return Inertia::render('Dashboard',[
            'posts' => $posts,
            'doctors' => $doctors,
            'hospitals' => $hospitals
        ]);
    }
}
