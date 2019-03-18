<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PermissionRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

/**
 * Class PermissionController 权限管理-原子单位
 * @package App\Http\Controllers\Admin
 * @author 朱晓进
 * @email qhj1989@qq.com
 */
class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
        $permissions = Permission::latest()->paginate();
        return view('permission.index', compact('permissions'));
    }

    /**
     * @name:permissions
     * @author:Storm 朱晓进 <qhj1989@qq.com>
     */
    public function permissions(Request $request, Role $role) {
        $all = Permission::all()->groupBy('group_name');
        return view('permission.permissions', compact('all', 'role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        return view('permission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PermissionRequest $request) {
        //
        Permission::create([
            'name' => $request->name,
            'description' => $request->description,
            'group_name' => $request->group_name
        ]);
        session()->flash('success', '已成功创建权限');
        return redirect(route('permission.index'));
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
    public function edit(Permission $permission) {
        //
        return view('permission.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(PermissionRequest $request, Permission $permission) {
        //

        $permission->name = $request->name;
        $permission->description = $request->description;
        $permission->group_name = $request->group_name;
        $permission->save();
        session()->flash('success', '已成功修改权限');
        return redirect(route('permission.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
        Permission::destroy($id);

        return response(['status' => 1]);
    }
}
