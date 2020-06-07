<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::orderBy('created_at', 'desc')->with('profile')->get();

        return view('users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.create');
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

         $user = new User();

        request()->validate([
            'name' =>  ['required', 'max:255'],
            'surname' => 'required',
            'email' =>'required',
            'username' =>'required',
            'profile_type' => 'required'
        ]);


        // User::create([
        //     'name' => request('name'),
        //     'surname' => request('surname'),
        //     'email' => request('surname'),
        //     'username' => request('username'),
        //     'profile_type' => request('profile_type'),
        //     'password' => Hash::make(request('username')),
        // ]);

        $user->name = request('name');
        $user->surname = request('surname');
        $user->email = request('surname');
        $user->username = request('username');
        $user->profile_type = request('profile_type');
        $user->password = Hash::make(request('username'));

        $user->save();

        // $user->name = request('name');
        // $user->surname = request('surname');
        // $user->email = request('email');
        // $user->username = request('username');
        // $user->password = Crypt::encrypt(request('username'));

        // $user->save;

        return redirect()->route('users.index');
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
        $user = User::findOrFail($id);
        $user->destroy();

        return redirect()->route("users.index");
    }
}
