<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 *   后台路由
 */

/**
 *  注册和登录
 */
Route::get('/login', 'Admin\LoginController@loginForm')->name('login');
Route::post('/login', 'Admin\LoginController@login')->name('login');
Route::get('/logout', 'Admin\LoginController@logout')->name('logout');
Route::get('/register', 'Admin\RegisterController@registerForm')->name('register');
Route::post('/register', 'Admin\RegisterController@register')->name('register');
/**
 * 注册和登录结束
 */
# 首页
Route::resource('/index', 'Admin\IndexController');
# 角色管理
Route::resource('/role', 'Admin\RoleController');
Route::put('/role/{role}/permissions', 'Admin\RoleController@bundlePermissions')->name('role.permissions');
Route::get('/role/{role}/members', 'Admin\RoleController@roleMembers')->name('role.members');
Route::delete('/role/{role}/member/{user}', 'Admin\RoleController@deleteMembers')->name('role.deleteMember');
# 菜单管理
Route::resource('/menu', 'Admin\MenuController');
# 权限管理-原子单位
Route::resource('/permission', 'Admin\PermissionController');
Route::resource('/user', 'Admin\UserController');
Route::get('/permissions/{role}', 'Admin\PermissionController@permissions')->name('permissions');
/**
 *  内容管理
 *
 */
# 文章内容管理
Route::resource('/article', "Admin\ArticleController");
/**
 *  内容管理结束
 *
 */

/**
 * 网站设置
 */
Route::resource('/option', 'Admin\OptionController');
Route::resource('/site', 'Admin\SiteController');
Route::get('/home', 'HomeController@index')->name('home');

