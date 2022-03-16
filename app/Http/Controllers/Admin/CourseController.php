<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:1500'],
            'author' => ['required', 'string', 'max:255'],
            'image' => ['required', 'string', 'max:255'],
            'price' => ['required'],
            'category_id' => ['required'],
        ]);

        if ($validator->fails()) {
            $error = $validator->errors();
            // return response([
            //     'message'  => 'There was an error during the process',
            //     'errors' => $error
            // ], 409);
            return redirect('courses')->withErrors($error);
        }

        $course = Course::create([
            'name' => $request->name,
            'description' => $request->description,
            'author' => $request->author,
            'image' => $request->image,
            'price' => $request->price,
            'category_id' => $request->category_id,
        ]);

        $response = [
            'course' => $course,
        ];

        // return response($response, 201);
        return redirect('courses')->with('success', 'Formation créée avec succès !');
    }
}
