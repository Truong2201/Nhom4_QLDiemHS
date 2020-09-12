<?php

namespace App\Http\Controllers;

use App\Role;
use App\Permission;
use Illuminate\Http\Request;
use DB, DateTime, Hash;
use App\User;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->get();
        return view('school.modules.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        // $usertype = role::all();
        $role = Role::all();
        return view('school.modules.user.add',['roles'  => $role]);
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
            'name' => 'required|unique:users|max:255',
            'email' => 'required|unique:users',
            'password' => 'required|min:6',
            'cfm_password' => 'required|same:password',
        ],[
            'name.required'=>'Vui lòng nhập tên user',
            'name.unique'=>'Đã tồn tại tên này, vui lòng nhập lại tên',
            'name.max'=>'Không được phép quá 255 kí tự',
            'email.required'=>'Vui lòng nhập email',   
            'email.unique'=>'Email đã đăng ký, vui lòng sử dụng email khác',
            'password.required'=>'Vui lòng nhập mật khẩu',
            'password.min'=>'Mật khẩu ít nhất 6 ký tự',
            'cfm_password.required'=>'Vui lòng xác nhận mật khẩu',
            'cfm_password.required'=>'Xác nhận mật khẩu không khớp',
        ]);

        //Để đảm bảo tính bảo toàn dữ liệu
        try {
            DB::beginTransaction();

            //Insert data vào user table
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            //insert data vào role_user

            $user->roles()->attach($request->roles);
            DB::commit();
            return redirect()->route('user.index');
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
        $roles = Role::all();
        $user = User::where('id',$id)->first();
        $listRoleOfUser = DB::table('role_user')->where('user_id', $id)->pluck('role_id');
        return view('school.modules.user.edit',compact('user', 'roles', 'listRoleOfUser'));
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
            'name' => 'required|max:255',
            'email' => 'required',
            'password' => 'required|min:6',
            'cfm_password' => 'required|same:password',
        ],[
            'name.required'=>'Vui lòng nhập tên user',
            'name.max'=>'Không được phép quá 255 kí tự',
            'email.required'=>'Vui lòng nhập email',   
            'password.required'=>'Vui lòng nhập mật khẩu',
            'password.min'=>'Mật khẩu ít nhất 6 ký tự',
            'cfm_password.required'=>'Vui lòng xác nhận mật khẩu',
            'cfm_password.required'=>'Xác nhận mật khẩu không khớp',
        ]);

        try
        {
            DB::beginTransaction();

            //update du lieu vao user
            User::where('id',$id)->update([
                'name' => $request->name,
                'email' => $request->email,            
                'password' => Hash::make($request->password),
            ]);

            //update du lieu vao role_user
            DB::table('role_user')->where('user_id',$id)->delete();
            $user = User::find($id);
            $user->roles()->attach($request->roles);

            DB::commit();
            return redirect()->route('user.index');
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
        DB::table('users')->where('id',$id)->delete();

        return redirect()->route('user.index');
    }
}
