<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Requests\RoleHasPermissionsRequest;
use App\Http\Requests\RoleRequest;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


/**
 * Class RoleController 权限组管理
 * @package App\Http\Controllers
 * @author 朱晓进
 * @email qhj1989@qq.com
 */
class RoleController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
        $roles = Role::latest()->paginate();
        return view('role.index', compact('roles'));
    }

    /**
     * @name:bundlePermissions 权限绑定到用户组
     * @param RoleHasPermissionsRequest $request
     * @param Role $role
     * @return \Illuminate\Http\RedirectResponse
     * @author:Storm 朱晓进 <qhj1989@qq.com>
     */
    public function bundlePermissions(RoleHasPermissionsRequest $request, Role $role) {
        $role->syncPermissions($request->permissions);
        session()->flash('success', '权限绑定成功');
        return back();
    }

    public function roleMembers(Request $request, Role $role) {
        $keywords = $request->get('keywords', '');
        $members = $role->users()->with('media')->where(function ($query) use ($keywords) {
            if (!empty($keywords)) {
                $query->where('name', 'like', "%$keywords%")->orWhere('email', 'like', "%$keywords%")->orWhere('mobile', 'like', "%$keywords%");
            }
        })->latest()->paginate();
        return view('role.members', compact('members', 'role', 'keywords'));
    }

    public function deleteMembers(Request $request, Role $role, User $user) {
        $user->removeRole($role);
        return response(['status' => true]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        return view('role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request) {
        //
        Role::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        session()->flash('success', '角色创建成功');
        return redirect(route('role.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role) {
        //
        return view('role.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleRequest $request, Role $role) {
        //
        $role->name = $request->name;
        $role->description = $request->description;
        $role->save();
        return redirect(route('role.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
        Role::destroy($id);
//        return redirect(route('role.index'))
        return response(['status' => 1]);
    }
}
