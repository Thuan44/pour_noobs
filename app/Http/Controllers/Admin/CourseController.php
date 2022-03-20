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

        return redirect('courses')->with('success', 'Formation créée avec succès !');
    }

    public function update(Request $request, $courseID)
    {
        $course = Course::find($courseID);

        if ($course) {
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
                return back()->withErrors($error);
            }

            $course->update($request->all());

            return redirect('courses')->with('success', 'Formation modifiée avec succès !');
        } else {
            return response(['message' => 'No course found with the id ' . $courseID], 400);
        }
    }

    public function destroy($courseID)
    {
        $course = Course::where('id', $courseID)->firstOrFail();
        $course->delete();

        return redirect('courses')->with('success', 'Formation supprimée avec succès !');
    }
}
