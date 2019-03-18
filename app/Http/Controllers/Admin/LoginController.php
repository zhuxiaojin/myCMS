<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\LoginRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * @name:loginForm 登录页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author:Storm 朱晓进 <qhj1989@qq.com>
     */
    public function loginForm() {

        return view('auth.login');
    }

    /**
     * @name:login 登录验证
     * @param LoginRequest $request
     * @return \Illuminate\Http\RedirectResponse
     * @author:Storm 朱晓进 <qhj1989@qq.com>
     */
    public function login(LoginRequest $request) {
        $email = $request->input('email');
        $user = User::whereEmail($email)->first();
        if (empty($user)) {
            return back()->withInput()->withErrors(['email'=>'邮箱不存在']);
        }
        if (!\Hash::check($request->password, $user->password)) {
            return back()->withInput()->withErrors(['password'=>'密码错误']);
        }
        if (\Auth::attempt($request->only(['email', 'password']), $request->has('remember'))) {
            session()->flash('success', '欢迎回来！');
        }
        return redirect()->route('role.index');
    }

    /**
     * @name:logout 退出登录
     * @return \Illuminate\Http\RedirectResponse
     * @author:Storm 朱晓进 <qhj1989@qq.com>
     */
    public function logout() {
        \Auth::logout();
        return redirect()->route('login');
    }

}
