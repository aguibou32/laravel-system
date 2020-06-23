<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Module;
use App\Student;
use App\Lecturer;


class ModulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $modules = Module::orderBy('created_at', 'desc')->get();
        // return $modules;

        $students = Student::orderBy('created_at', 'desc')->get();

        return view('modules.index')->with('modules', $modules)
                                    ->with('students', $students);
                                   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $lecturers = User::where('profile_type','App\Lecturer')->Or('profile_type','App\Administrator')->get(); // This for when we add addministrator as Lecturer
        
        $lecturers = User::where('profile_type','App\Lecturer')->get();

        // return $lecturers;

        return view('modules.create')->with('lecturers', $lecturers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Creating a module object;

        $module = new Module();
        // return request();

        // Validating the data 

        request()->validate([
            'module_name' =>  ['required', 'max:255'],
            'module_code' => 'required',
            'module_duration'  => 'required',
            'module_description' => 'required',            
            'module_image'  => ['required', 'image', 'max:1999'], // or required can be nullable if we want so that it is not required for the user  
                                                                // the 1999 is the maximum size of the picture. We are making it lesser than 2 magabits
            'module_lecturer' => 'required'
        ]);

        

        // Handling the file upload
        if($request->hasFile('module_image')){
            
            // Get the file name with the extension
            $fileNameWithExt = $request->file('module_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get just extension
            $extension = $request->file('module_image')->getClientOriginalExtension();
            // filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload the image 
            $path = $request->file('module_image')->storeAs('public/assets/images', $fileNameToStore);
        }
        else{
            $fileNameToStore = 'noimage.jpg';
        }
        
        $module->module_name = request('module_name');
        $module->module_code = request('module_code');
        $module->module_duration = request('module_duration');
        $module->module_description = request('module_description');
        $module->module_image = $fileNameToStore;
              
       
        $module->save(); // Saving the modules first 

        

        $user_id = request('module_lecturer');     // Then we get the id of the lecturer we passed at the select box   

        $user = User::find($user_id); // Then we find the user associated with that lecturer using the previous id

        $lecturer_id = $user->profile->id;  // Using the relationship beetween user and lecturer, we find the lecturer id      
      
        $lecturer = Lecturer::find($lecturer_id);
        
        // return $lecturer;

        $lecturer->module_id = $module->id;

        $lecturer->save();
      
        // return $lecturer;

        return redirect('/module')->with('success', 'module created successfully !');
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
        $module = Module:: findOrFail($id); 

        // return $module->lecturer->lecturer_number;

        $lecturer = User::where('username', $module->lecturer->lecturer_number)->first();

        // return $lecturer->name;

        return view('modules.show')->with('module', $module)
                                   ->with('lecturer_name', $lecturer->name)
                                   ->with('lecturer_surname', $lecturer->surname);
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
        $module = Module:: findOrFail($id); 

        // return $module;
        $lecturers = User::where('profile_type','App\Lecturer')->get();

        return view('modules.edit')->with('module', $module)->with('lecturers', $lecturers);
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
        //

        $module = Module::findOrFail($id);

        request()->validate([
            'module_name' =>  ['required', 'max:255'],
            'module_code' => 'required',
            'module_duration'  => 'required',
            'module_description' => 'required',            
            'module_image'  => ['required', 'image', 'max:1999'] // or required can be nullable if we want so that it is not required for the user  
                                                                // the 1999 is the maximum size of the picture. We are making it lesser than 2 magabits
        ]);

        // Handling the file upload
        if($request->hasFile('module_image')){
            
            // Get the file name with the extension
            $fileNameWithExt = $request->file('module_image')->getClientOriginalName();

            // Get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            // Get just extension
            $extension = $request->file('module_image')->getClientOriginalExtension();

            // filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            // Upload the image 
            $path = $request->file('module_image')->storeAs('public/assets/images', $fileNameToStore);
         }

            $module->module_name = request('module_name');
            $module->module_code = request('module_code');
            $module->module_duration = request('module_duration');
            $module->module_description = request('module_description');
            $module->module_image = $fileNameToStore;
      
            $module->save();

            $user_id = request('module_lecturer');     // Then we get the id of the lecturer we passed at the select box   

                $user = User::find($user_id); // Then we find the user associated with that lecturer using the previous id

                $lecturer_id = $user->profile->id;  // Using the relationship beetween user and lecturer, we find the lecturer id      
            
                $lecturer = Lecturer::find($lecturer_id);
                
                // return $lecturer;

                $lecturer->module_id = $module->id;

                $lecturer->save();

                return redirect('/module')->with('success', 'module updated successfully !');
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
        $module = Module::findOrFail($id);
        $module->delete();

        return redirect('/module')->with('error', 'course removed successfully');
    }
}
