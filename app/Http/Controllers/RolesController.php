<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Permission;
use App\Models\Role;

class RoleController extends Controller
{
    /**
     * Display the constructor of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('role:super-admin|admin');
        
        $this->middleware('permission:create_role',['only'=>'create']);
        $this->middleware('permission:delete_role',['only'=>'destroy']);
        $this->middleware('permission:edit_role',['only'=>['update','edit']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::latest()->paginate(5);
        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('admin.roles.create', compact('permissions'));
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
            'name' => 'required',
            'permission' => 'required',
        ]);
        $role = Role::create($request->except(['permission','_token']));

        foreach ($request->permission as $key => $value) {
            $role->attachPermission($value);
        }

        return redirect()->route('roles.index')->with('success','User Role Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::find($id);
        if (!$role) {
            return redirect()->route('roles.index')->with('danger', 'User Role Not Found!');
        }
        return view('admin.roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);
        if (!$role) {
            return redirect()->route('roles.index')->with('danger', 'User Role Not Found!');
        }
        $permissions = Permission::all();

        $permission_role = $role->perms()->pluck('id','id')->toArray();

        return view('admin.roles.edit', compact(['role','permissions','permission_role']));
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
            'permission'=>  'required',
        ]);

        $role               = Role::find($id);
        $role->name         = $request->name;
        $role->display_name = $request->display_name;
        $role->description  = $request->description;
        $role->save();

        DB::table('permission_role')->where('role_id',$id)->delete();

        foreach ($request->permission as $key => $value) {
            $role->attachPermission($value);
        }

        return redirect()->route('roles.index')->with('success','Role Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();
        DB::table('permission_role')->where('role_id',$id)->delete();
        return redirect()->route('roles.index')->with('danger', 'User Role Deleted Successfully');
    }
}
