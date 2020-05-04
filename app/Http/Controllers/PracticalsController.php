<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Practical;

class PracticalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $practicals = Practical::orderBy('created_at', 'desc')->get();

        return view('practicals.index')->with('practicals', $practicals);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('practicals.create');
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
        $practical = new Practical();

        request()->validate([
            'practical_name' =>  ['required', 'max:255'],
            'due_date' => 'required',
            'practical_filename' =>'required|mimes:pdf,docx|max:10000',
            // 'solution_filename' =>  'nullable|mimes:pdf,docx|max:10000'
        ]);

        if($request->hasFile('practical_filename')){                
            // Get the file name with the extension
            $fileNameWithExt = $request->file('practical_filename')->getClientOriginalName();
            // Get just filename
            $name = request('name');
            $name = preg_replace('/\s+/', '', $name);

            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace('/\s+/', '', $filename);
            // Get just extension
            $extension = $request->file('practical_filename')->getClientOriginalExtension();
            // filename to store
            $fileNameToStore = $name.'_'.$filename.'_'.time().'.'.$extension;
            // Upload the image 
            $path = $request->file('practical_filename')->storeAs('public/assets/practicals', $fileNameToStore);
        }
              
        // if($request->hasFile('solution_filename')){                
        //     // Get the file name with the extension
        //     $fileNameWithExt = $request->file('solution_filename')->getClientOriginalName();
        //     // Get just filename
        //     $name = request('name');
        //     $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        //     // Get just extension
        //     $extension = $request->file('solution_filename')->getClientOriginalExtension();
        //     // filename to store
        //     $fileNameToStore2 = $name.'_'.$filename.'_'.time().'.'.$extension;
        //     // Upload the image 
        //     $path = $request->file('solution_filename')->storeAs('public/assets/practicals', $fileNameToStore2);
        // }
       

        $practical->practical_name = request('practical_name');
        $practical->due_date = request('due_date');
        $practical->practical_filename = $fileNameToStore;

        // if($request->hasFile('solution_filename')){
            
        //     $practical->solution_filename = $fileNameToStore2;
        // }

        $practical->save();

        return redirect('/practicals');
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
        $practical = Practical::findOrFail($id);

        return view('practicals.edit')->with('practical', $practical);
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
        $practical = Practical::findOrFail($id);

        request()->validate([
            'practical_name' =>  ['required', 'max:255'],
            'due_date' => '',
            'practical_filename' =>'nullable|mimes:pdf,docx|max:10000',
            'solution_filename' =>  'nullable|mimes:pdf,docx|max:10000'
        ]);

        if($request->hasFile('practical_filename')){                
            // Get the file name with the extension
            $fileNameWithExt = $request->file('practical_filename')->getClientOriginalName();
            // Get just filename
            $name = request('name');
            $name = preg_replace('/\s+/', '', $name);

            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace('/\s+/', '', $filename);
            // Get just extension
            $extension = $request->file('practical_filename')->getClientOriginalExtension();
            // filename to store
            $fileNameToStore = $name.'_'.$filename.'_'.time().'.'.$extension;
            // Upload the image 
            $path = $request->file('practical_filename')->storeAs('public/assets/practicals', $fileNameToStore);
        }
              
        if($request->hasFile('solution_filename')){                
            // Get the file name with the extension
            $fileNameWithExt = $request->file('solution_filename')->getClientOriginalName();
            // Get just filename
            $name = request('name');
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace('/\s+/', '', $filename);
            // Get just extension
            $extension = $request->file('solution_filename')->getClientOriginalExtension();
            // filename to store
            $fileNameToStore2 = $name.'_'.$filename.'_'.time().'.'.$extension;
            // Upload the image 
            $path = $request->file('solution_filename')->storeAs('public/assets/practicals', $fileNameToStore2);
        }
       

        $practical->practical_name = request('practical_name');

        if($request->hasFile('due_date')){
            $practical->due_date = request('due_date');
        }

        if($request->hasFile('practical_filename')){
            $practical->practical_filename = $fileNameToStore;
        }

        if($request->hasFile('solution_filename')){
            $practical->solution_filename = $fileNameToStore2;
        }
        else{
            $practical->solution_filename = "";
        }

        $practical->save();

        // return redirect('/practicals');
        return redirect()->route("practicals.index"); // Same as above
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $practical = Practical::findOrFail($id);
       
        $practical->delete();

        return redirect()->route('practicals.index');
    }
}
