<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OptionRequest;
use App\Option;
use Illuminate\Http\Request;

/**
 * Class OptionController 全局配置管理
 * @package App\Http\Controllers\Admin
 * @author 朱晓进
 * @email qhj1989@qq.com
 */
class OptionController extends Controller
{
    /**
     * @name:index  列表展示
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author:Storm 朱晓进 <qhj1989@qq.com>
     */
    public function index(Request $request) {
        $keywords = $request->get('keywords', '');
        $options = Option::where(function ($query) use ($keywords) {
            $query->where('key', 'like', "%$keywords%")->orWhere('name', 'like', "%$keywords%");
        })->latest('id')->paginate();
        return view('option.index', compact('options', 'keywords'));
    }

    /**
     * @name:create 创建
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author:Storm 朱晓进 <qhj1989@qq.com>
     */
    public function create() {
        return view('option.create');
    }

    /**
     * @name:edit 编辑
     * @param Option $option
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author:Storm 朱晓进 <qhj1989@qq.com>
     */
    public function edit(Option $option) {
        return view('option.edit', compact('option'));
    }

    /**
     * @name:store 保存
     * @param OptionRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @author:Storm 朱晓进 <qhj1989@qq.com>
     */
    public function store(OptionRequest $request) {
        Option::create([
            'name' => $request->name,
            'key' => $request->key,
            'value' => $request->value,
        ]);
        return redirect(route('option.index'));
    }

    /**
     * @name:destroy 删除
     * @param Option $option
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     * @author:Storm 朱晓进 <qhj1989@qq.com>
     * @throws \Exception
     */
    public function destroy(Option $option) {
        $option->delete();
        return response(['status' => 1]);
    }

    /**
     * @name:update 更新
     * @param OptionRequest $request
     * @param Option $option
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @author:Storm 朱晓进 <qhj1989@qq.com>
     */
    public function update(OptionRequest $request, Option $option) {
        $option->update([
            'name' => $request->name,
            'key' => $request->key,
            'value' => $request->value
        ]);
        return redirect(route('option.index'));
    }

}
