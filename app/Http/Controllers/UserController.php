<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use App\Models\Role;
use App\User;
use Auth;

class UserController extends Controller
{
    /**
     * Display the constructor of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('role:super-admin|admin')->except('update','changePassword','show');
        $this->middleware('permission:create_user',['only'=>['create','store']]);
        $this->middleware('permission:delete_user',['only'=>'destroy']);
        $this->middleware('permission:edit_user',['only'=>['update','edit']]);
    }

    /**
     * Change the password of the current user.
     *
     * @return \Illuminate\Http\Response
     */
    public function changePassword(Request $request)
    {
        request()->validate([
            'id'                =>  'required',
            'previous_password' =>  'required|min:6',
            'password'          =>  'required|min:6',
        ]);

        $user = User::find($request->id);

        if ($request->id != Auth::user()->id) {
            if (condition) {
                return redirect()->route('profile',compact(['user']))->with('danger','C\'mon you cannot change another person\'s password!');
            }
        }else {
            if ($request->confirm_password != $request->password) {
                return redirect()->route('profile',compact(['user']))->with('info','Your newly created passwords do not match!!!');
            }
            else{
                if (Hash::check($request->previous_password, Auth::user()->password)) {
                    $user = User::find($request->id);
                    $user->password = Hash::make($request->password);
                    $user->save();

                    return redirect()->route('profile',compact(['user']))->with('success','Your password has beeen updated successfully!');
                }
                else{
                    return redirect()->route('profile',compact(['user']))->with('warning','Your old password does not match our records!');
                }
            }
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        $users = User::latest()->paginate(5);
        return view('admin.users.index', compact(['users','roles']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name'      => 'required',
            'email'     => 'required',
            'role' => 'required',

        ]);
        $user = User::create($request->all());

        DB::table('role_user');

        $user->attachRole(Role::where('name',($request->role))->first());

        return redirect()->route('users.index')->with('success','User Profile Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('users.index')->with('danger', 'User Not Found!');
        }
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        if (!$user) {
            return redirect()->route('users.index')->with('danger', 'User Not Found!');
        }
        return view('admin.users.edit', compact('user','roles'));
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
        request()->validate([
            'name'      =>  'required',
            'email'     =>  'required',
            'role'      =>  'required',
        ]);
        
        $user  = User::find($id);
        $user->name     = $request->name;
        $user->role     = $request->role;
        $user->email    = $request->email;
        $user->gender   = $request->gender;
        $user->telephone     = $request->telephone;
        $user->place_of_work = $request->place_of_work;
        $user->nationality  = $request->nationality;
        $user->occupation   = $request->occupation;
        $user->date_of_birth     = $request->date_of_birth;
        $user->work_address  = $request->work_address;
        $user->bio      = $request->bio;
        $user->home_address    = $request->home_address;
        $user->email_notifications   = $request->email_notifications;
        // $user->whatsapp_number  = $request->whatsapp_number;
        $user->status   = $request->status;
        $user->save();

        DB::table('role_user')->where('user_id',$id)->delete();

        User::find($id)->attachRole(Role::where('name',($request->role))->first());
        if ($request->router) {
            return redirect()->route($request->router)->with('success','Your profile has been updated successfully!');
        }
        return redirect()->route('users.index')->with('success','User Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        DB::table('role_user')->where('user_id',$id)->delete();
        return redirect()->route('users.index')->with('danger', 'User Profile Deleted Successfully');
    }
}
