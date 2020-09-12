<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('school.login');
    }
    public function logout()
    {
        Auth::logout();
        return view('school.login');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function progressLogin(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
           return redirect()->route('student.index');
            return ("Đăng nhập thành công !!!");
        }
        else{
            $credentials = $request->only('email', 'password');
            // dd($credentials);
            return redirect()->route('progressLogin');   
            return ("Đăng nhập không thành công !!!");
        }
    }
    // public function index1()
    // {
    //     return view('school.registration');
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function progressRegistration(Request $request){
      
        
    //     if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
    //         return redirect()->route('student.index');
    //         dd($request->email);
    //         return ("Đăng ký thành công !!!");
    //     }
    //     else{
    //         return redirect()->route('index');   
    //     }
    // }

    public function create()
    {
        //
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
        //
    }
}
