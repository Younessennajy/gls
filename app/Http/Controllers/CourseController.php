<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\File;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::query()->paginate(5);
        return view('courses.index')->with('courses', $courses);
    }
    public function home()
    {
        $courses = Course::orderBy('created_at', 'desc')->get();
        return view('courses.home')->with('courses', $courses);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'desc' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'url' => 'required|url',
            'level' => 'required',
        ]);


        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('courses', 'public');
        }
        $course = Course::create($validatedData);

        return redirect('courses')->with('flash_message', 'Course Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);
        return view('courses.show')->with('course', $course);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        return view('courses.edit')->with('courses', $course);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        $input = $request->all();

        if($request->hasfile('image')){
            $d = 'storage/'.$course->image;
            if(File::exists($d)){
                File::delete($d);
            }

            $file = $request->file('image');
            $execu = $file()->getClientOriginalExtension();
            $filename = time().','.$execu;
            $file->move('storage/',$filename);
            $course->image=$filename;
        }
        $course->update($input);
        return redirect('courses')->with('flash_message', 'Course Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Course::destroy($id);
        return redirect('courses')->with('flash_message', 'Course deleted!');
    }
}
