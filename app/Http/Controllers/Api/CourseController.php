<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function store(Request $request){
            $validated = $request->validate([
                'name' => 'required|string',
                'text' => 'required|string',
                'banner_url' => 'required|string',
                'student_count' => 'required|integer'
            ]);

            $post = Course::create($validated);
            return response()->json($post);
    }

    public function index(){
        return Course::all();
    }
}
