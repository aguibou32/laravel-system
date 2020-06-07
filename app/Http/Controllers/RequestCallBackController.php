<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RequestCallBack;


class RequestCallBackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $callbacks = RequestCallBack::orderBy('created_at', 'desc')->get();
        return view("callback.index")->with('callbacks', $callbacks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("callback.create");
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
        // return request()->all();
        $callback = new RequestCallBack();

        $callback->name = request('inputName');
        $callback->phone_no = request('inputPhone_no');
        $callback->email = request('inputEmail');

        $callback->save();

        return redirect()->route('callback.index');
       
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
        $callback = RequestCallBack::findOrFail($id);

        $callback->destroy($id);


        return redirect()->route('callback.index');
    }
}
