<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserMessageRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }

    //
    public function index(Request $request) {
        $keywords = $request->get('keywords', '');
        $users = User::where(function ($query) use ($keywords) {
            $query->where('name', 'like', "%$keywords%")->orWhere('email', 'like', "%$keywords%")->orWhere('mobile', 'like', "%$keywords%");
        })->latest()->paginate();
        return view('user.index', compact('users', 'keywords'));
    }

    public function show(User $user) {
        return view('user.show', compact('user'));
    }

    public function edit(User $user) {
        return view('user.edit', compact('user'));
    }

    /**
     * @name:store
     * @author:Storm 朱晓进 <qhj1989@qq.com>
     */
    public function store() {

    }

    /**
     * @name:update 修改用户信息
     * @param Request $request
     * @param User $user
     * @author:Storm 朱晓进 <qhj1989@qq.com>
     */
    public function update(UserMessageRequest $request, User $user) {

        $user->name = $request->get('name');
        $user->email = $request->get('email');
        if ($request->get('duty')) {
            $user->duty = $request->get('duty');
        }
        $user->mobile = isset($request->phone) ? ltrim(phone($request->phone, 'CN', 'E164'), '+86') : '';
        if ($request->file('avatar')) {
            $user->clearMediaCollection('avatar');
            $user->addMedia($request->file('avatar'))->toMediaCollection('avatar');
        }
        if ($request->get('role')) {
            $user->syncRoles($request->get('role'));
        }
        if ($user->update()) {
            session()->flash('success', '用户信息修改成功');
            return redirect()->route('user.index');
        }
    }

    public function destroy(User $user) {
        $res = $user->delete();
        return response(['status' => $res]);
    }
}
