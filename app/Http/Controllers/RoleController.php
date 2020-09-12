<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Role;
use App\Permission;
use Illuminate\Http\Request;
use DB, DateTime;
use Illuminate\Support\Facades\Log;

class RoleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::orderBy('id', 'DESC')->get();
        return view('school.modules.role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $permissions = Permission::all();
        return view('school.modules.role.add', compact('permissions'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:roles',            
        ],[
            'name.required' => "Vui lòng nhập loại người dùng ",
            'name.unique' => "Đã tồn tại loại người dùng này",
            
            ]);
            try {
                DB::beginTransaction();
    
                $role = Role::create([
                    'name' => $request->name
                ]);
    
                $role->permissions()->attach($request->permission);
    
                DB::commit();
                return redirect()->route('role.index');
            }
            catch(\Exception $exception)
            {
                DB::rollBack();
                return redirect()->back();
            }
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
        $permissions = Permission::all();
        $role = Role::where('id',$id)->first();
        $getAllPermissionOfRole = DB::table('permission_role')->where('role_id', $id)->pluck('permission_id');

        return view('school.modules.role.edit', compact('role', 'permissions', 'getAllPermissionOfRole'));
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
        $validatedData = $request->validate([
            'name' => 'required',            
        ],[
            'name.required' => "Vui lòng nhập loại người dùng "
            ]);
            try {
                DB::beginTransaction();
    
                Role::where('id', $id)->update([
                    'name' => $request->name,                    
                ]);
    
                DB::table('permission_role')->where('id', $id)->delete();
                $role = Role::find($id);
                $role->permissions()->attach($request->permission);
    
                DB::commit();
                return redirect()->route('role.index');
            }
            catch(\Exception $exception)
            {
                DB::rollBack();
                return redirect()->back();
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('roles')->where('id',$id)->delete();

        return redirect()->route('role.index');
    }
}
