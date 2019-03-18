<?php
/**
 *
 */
Breadcrumbs::for('home', function ($trail) {
    $trail->push('首页', route('index.index'));
});
Breadcrumbs::for('role-permission', function ($trail) {
    $trail->push('权限管理', '');
});
Breadcrumbs::for('user.edit', function ($trail) {
    $trail->push('个人信息', '');
});
Breadcrumbs::for('user.index', function ($trail) {
    $trail->push('用户列表', '');
});
Breadcrumbs::for('role.show', function ($trail, $role) {
    $trail->parent('role-permission', $role->name);
    $trail->push($role->name, route('role.show', $role->id));
});
Breadcrumbs::for('role.index', function ($trail) {
    $trail->parent('role-permission', '用户分组');
});
Breadcrumbs::for('permission.index', function ($trail) {
    $trail->parent('role-permission', '权限列表');
});
//Breadcrumbs::for('topic', function ($trail, $topic) {
//    $trail->parent('category', $topic->category);
//    $trail->push($topic->title, route('topics.show', $topic->id));
//});