<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Lab;
use App\User;
use App\Http\Requests\addLabRequest;
use App\Http\Requests\addUserRequest;
use Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('labs.listLab');
    }

    //Lab

    public function listLab(){
        $labs = Lab::select()->get();
        return view('labs.listLab',['labs'=>$labs]);
    }

    public function addLab(){
        $labs = Lab::select()->get();
        return view('labs.addLab',['labs'=>$labs]);
    }

    public function postAddLab(addLabRequest $request){
        $lab = new Lab;
        $lab->name = $request->name;
        $lab->type = $request->type;
        $lab->seat = $request->seat;
        $lab->save();
        return redirect()->route('listLab')->with(['flash_level'=>'success','flash_message'=>'Thêm phòng Lab thành công']);
    }

    //User

    public function listUser(){
        $users = User::select()->get();
        return view('users.listUser',['users'=>$users]);
    }

    public function addUser(){
        $users = User::select()->get();
        return view('users.addUser',['users'=>$users]);
    }

    public function postAddUser(addUserRequest $request){
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->save();
        return redirect()->route('listUser')->with(['flash_level'=>'success','flash_message'=>'Tạo tài khoản thành công']);
    }
}
