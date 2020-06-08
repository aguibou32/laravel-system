<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;

class ApplicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('application.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $application = new Application(); // Application here refers to the application model 

        // dd(request()->all());

        request()->validate([
            
            'title' => 'required',
            'name' => 'required',
            'surname' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'required',
            'phone_number' => 'required',
            'email_address' => 'required',
            'name_on_certificate' => 'required',
            'id_or_passport_number' => 'required',
            'institution_name' => 'required',
            'year_of_study' => 'required',
            'highest_educational_qualification_name' => 'required',
            'certificate' => ['required', 'file', 'max:1999'],
            'id_or_passport_document' => 'required',
            'declaration' => 'required'
            ]);


             // Handling the file upload
            if($request->hasFile('certificate')){                
                // Get the file name with the extension
                $fileNameWithExt = $request->file('certificate')->getClientOriginalName();
                // Get just filename
                $name = request('name');
                $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                // Get just extension
                $extension = $request->file('certificate')->getClientOriginalExtension();
                // filename to store
                $fileNameToStore = $name.'_'.$filename.'_'.time().'.'.$extension;
                // Upload the image 
                $path = $request->file('certificate')->storeAs('public/assets/application', $fileNameToStore);
            }
            else{
                $fileNameToStore = 'noimage.jpg';
            }

            // File 2

             // Handling the file upload
             if($request->hasFile('id_or_passport_document')){                
                // Get the file name with the extension
                $fileNameWithExt = $request->file('id_or_passport_document')->getClientOriginalName();
                // Get just filename
                $name = request('name');
                $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                // Get just extension
                $extension = $request->file('id_or_passport_document')->getClientOriginalExtension();
                // filename to store
                $fileNameToStore2 = $name.'_'.$filename.'_'.time().'.'.$extension;
                // Upload the image 
                $path = $request->file('id_or_passport_document')->storeAs('public/assets/application', $fileNameToStore2);
            }
            else{
                $fileNameToStore2 = 'noimage.jpg';
            }       
            
            $application->title = request('title');
            $application->name = request('name');
            $application->surname = request('surname');
            $application->gender = request('gender');
            $application->date_of_birth = request('date_of_birth');
            $application->phone_number = request('phone_number');
            $application->email_address = request('email_address');
            $application->name_on_certificate = request('name_on_certificate');
            $application->id_or_passport_number = request('id_or_passport_number');
            $application->institution_name = request('institution_name');
            $application->year_of_study = request('year_of_study');
            $application->highest_educational_qualification_name = request('highest_educational_qualification_name');
            $application->certificate = $fileNameToStore;
            $application->id_or_passport_document = $fileNameToStore2;
            $application->declaration = "acknowledged";


            $application->save();

            return redirect("/welcome")->with('sucess', "application was sent !");
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
    }
}
