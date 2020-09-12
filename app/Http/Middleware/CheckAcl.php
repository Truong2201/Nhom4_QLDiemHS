<?php

namespace App\Http\Middleware;

use App\Permission;
use App\User;
use DB;
use Closure;

class CheckAcl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $permission = null)
    {
        //Lay tat ca cac quyen khi user login
        // b1: lay tat ca cac role cua user khi login
        $listRoleOfUser = DB::table('users')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->join('roles', 'role_user.role_id', '=', 'roles.id')
            ->where('users.id', auth()->id())
            ->select('roles.*')
            ->get()->pluck('id');

        //b2: lay tat ca quyen cua user
        $listRoleOfUser = DB::table('roles')
            ->join('permission_role', 'roles.id', '=', 'permission_role.role_id')
            ->join('permissions', 'permission_role.permission_id', '=', 'permissions.id')
            ->where('roles.id', $listRoleOfUser)
            ->select('permissions.*')
            ->get()->pluck('id')->unique();
        //Lay tat ca cac quyen khi user login

        //Lay permission_id khi truy cap
        $checkPermission = Permission::where('name',$permission)->value('id');
        if ($listRoleOfUser->contains($checkPermission) ){
            return $next($request);
        }
           return abort(401);
    }
}
