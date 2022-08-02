<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\profile;
class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function signin()
    {
        return view('sotre'); //Login View
    }
    public function displayUser()
    {
        $users = user::all();   
        $profiles = profile::all();   
        return view('admin/users')->with('profiles',$profiles)->with('users', $users); //Login View
    }

    
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
    public function store(Request $request, $id)
    {
        $user = new User;
        // if($request->password==$request->confirmpassword){
        $user->email = $request->email;
        $user->role = $request->role;
        $user->profile_id = $id;
       
        $hashedpassword = Hash::make($request->password);
        $user->password = $hashedpassword;
        $user->save();
        return $user;
        // }
        // else{
        //     return "null";
        // }
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
        $userData = $user->only(["password", "email"]);
        $hashedPassword = Hash::make($userData['password']);
        if(Hash::check($request->password, $userData['password'])) {
            if($user->role=="Admin"){
                return view('admin/index');
            }
            else if($user->role=="buyer"){
                return view('client/buyer/index');
            }
            else if($user->role=="seller"){
                return view('client/seller/index');
            }
        
            // The passwords match...
        }
        else{
            return "bye";
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

    
    public function update(Request $request)
    {
        $userData = $request->only(["password", "role"]);
        $userData['password'] = Hash::make($userData['password']);
        User::find($request->id)->update($userData);
        $user=user::find($request->id);
        return $user->password;
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
