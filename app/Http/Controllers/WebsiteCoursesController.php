<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WebsiteCourse;

class WebsiteCoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $courses = WebsiteCourse::all();
        $courses = WebsiteCourse::orderBy('created_at', 'desc')->get();

        // return $courses;
        // dd($courses);

        return view('website_courses.index')->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('website_courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // dump(request()->all()); // This will show all the data we recieved from the form when it hits the store endpoint
        
        $course = new WebsiteCourse();

        request()->validate([
            'title' =>  ['required', 'max:255'],
            'description' => 'required',
            'duration'  => 'required',
            'seats' => 'required',
            'lecturer'  => 'required',
            'course_image'  => ['required', 'image', 'max:1999'] // or required can be nullable if we want so that it is not required for the user  
                                                                // the 1999 is the maximum size of the picture. We are making it lesser than 2 magabits
        ]);

        // Handling the file upload
        if($request->hasFile('course_image')){
            
            // Get the file name with the extension
            $fileNameWithExt = $request->file('course_image')->getClientOriginalName();

            // Get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            // Get just extension
            $extension = $request->file('course_image')->getClientOriginalExtension();

            // filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            // Upload the image 
            $path = $request->file('course_image')->storeAs('public/assets/images', $fileNameToStore);
        }
        else{
            $fileNameToStore = 'noimage.jpg';
        }
        
        $course->title = request('title');
        $course->description = request('description');
        $course->duration = request('duration');
        $course->seats = request('seats');
        $course->lecturer = request('lecturer');
        $course->course_image = $fileNameToStore;
      
        $course->save();

        return redirect('/courses')->with('success', 'course created !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $course = WebsiteCourse:: findOrFail($id); 
        return view('website_courses.show')->with('course', $course);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $course = WebsiteCourse:: findOrFail($id);

        // return view('website_courses.edit')->with('course', $course);

        return view('website_courses.edit', compact('course')); // same as above
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

        $course = WebsiteCourse::findOrFail($id);


        request()->validate([
            'title' =>  ['required', 'max:255'],
            'description' => 'required',
            'duration'  => 'required',
            'seats' => 'required',
            'lecturer'  => 'required',
            'course_image'  => 'required|image|max:1999' // or required can be nullable if we want so that it is not required for the user  
                                                                // the 1999 is the maximum size of the picture. We are making it lesser than 2 magabits
        ]);


       // Handling the file upload
       if($request->hasFile('course_image')){
            
            // Get the file name with the extension
            $fileNameWithExt = $request->file('course_image')->getClientOriginalName();

            // Get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            // Get just extension
            $extension = $request->file('course_image')->getClientOriginalExtension();

            // filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            // Upload the image 
            $path = $request->file('course_image')->storeAs('public/assets/images', $fileNameToStore);
        }
   
    
        $course->title = request('title');
        $course->description = request('description');
        $course->duration = request('duration');
        $course->seats = request('seats');
        $course->lecturer = request('lecturer');

        if($request->hasFile('course_image')){
            $course->course_image = $fileNameToStore;
        }
        
        $course->save();

        return redirect('/courses/' . $course->id)->with('success', 'course information updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $course = WebsiteCourse::findOrFail($id);
        $course->delete();
        
        return redirect('/courses')->with('error', 'course removed !');
    }
}
