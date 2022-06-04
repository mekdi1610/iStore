<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = user::all();
        return $user;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * user a newly created resource in storage.
     *
     */
    public function user(Request $request)
    {
        $user = new user;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->profile_id = $request->profile_id;
        $hashedpassword = Hash::make($request->password);
        $user->password = $hashedpassword;
        $user->save();
        return $user;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
           return user::findOrFail($id);
      
    }
    public function getByEmail($email)
    {
        return User::where('email', $email)->get()->first();
    }
    public function login(Request $request){
        $user = new User;
    
        $user = $this->getByEmail($request->email);
        if (Hash::check($request->password, $user->password)) {
            return $user->id;
            // The passwords match...
        }
        // return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        //
    }

    
    public function update(Request $request, user $user)
    {
       
        $user=user::find($request->id);
        $hashedpassword = Hash::make($request->password);
        $request->password = $hashedpassword;
        $user->update($request->all());
        return $user;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return user::destroy($id);
    }
}
