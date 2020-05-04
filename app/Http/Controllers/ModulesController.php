<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module;

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

        return view('modules.index')->with('modules', $modules);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('modules.create');
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
        else{
            $fileNameToStore = 'noimage.jpg';
        }
        
        $module->module_name = request('module_name');
        $module->module_code = request('module_code');
        $module->module_duration = request('module_duration');
        $module->module_description = request('module_description');
        $module->module_image = $fileNameToStore;
      
        $module->save();

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

        return view('modules.show')->with('module', $module);
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

        return view('modules.edit')->with('module', $module);
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
