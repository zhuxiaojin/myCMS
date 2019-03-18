@extends('layouts.all')
<!-- 权限组列表 -->
@section('breadcrumb')
    <h4 class="page-title">角色管理</h4>
    {{Breadcrumbs::render('role.index')}}
@endsection
@push('css')
    <!-- Sweet Alert css -->
    <link href="{{asset('plugins/sweet-alert/sweetalert2.min.css')}}" rel="stylesheet" type="text/css"/>
@endpush
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <a href="{{route('role.create')}}" class="btn btn-outline-primary btn-rounded  mb-3"><i
                            class="mdi mdi-plus-circle"></i> 创建角色</a>
            </div>

            <div class="row">
                <div class="table-responsive">
                    <table class="table table-hover table-centered m-0">
                        <thead>
                        <tr>
                            <th>角色名称</th>
                            <th>调用名称</th>
                            <th>授权</th>
                            <th>成员</th>
                            <th>状态</th>
                            <th width="20%">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $role)
                            <tr>

                                <td>
                                    <h5 class="m-0 font-weight-normal">{{$role->description}}
                                    </h5>
                                </td>
                                <td>
                                    {{$role->name}}
                                </td>
                                <td>
                                    <a class="btn btn-outline-info btn-sm"
                                       href="{{route('permissions',$role)}}">授权列表</a>
                                </td>
                                <td>
                                    <a class="btn btn-outline-purple btn-sm"
                                       href="{{route('role.members',$role)}}">成员列表</a>
                                </td>
                                <td>
                                    @if($role->status)
                                        <span class="badge  badge-success">启用</span>
                                    @else
                                        <span class="badge   badge-danger">禁用</span>
                                    @endif
                                </td>

                                <td>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm- mr-1"><a href="{{route('role.edit',$role->id)}}"
                                                                         class="btn btn-sm btn-custom">编辑</a></div>
                                            <div class="col-sm-  mr-1">
                                                {{--<form action="{{route('user.destroy',$user)}}" method="delete">--}}
                                                <button type="button" onclick="deleteObj({{$role->id}})"
                                                        class="btn btn-sm btn-danger">删除
                                                </button>
                                                {{--</form>--}}
                                                {{--<button type="button" onclick="  "--}}
                                                {{--class="btn btn-sm btn-dark">禁用--}}
                                                {{--</button>--}}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <div class="pull-right ">
                        {{$roles->links()}}
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
@push('js')
    <!-- Sweet Alert Js  -->
    <script src="{{asset('plugins/sweet-alert/sweetalert2.js')}}"></script>
    <script>
        function deleteObj(id) {
            swal({
                title: '确定删除该角色吗？',
                text: '删除后角色下所有用户会与该角色断开绑定',
                type: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'btn btn-confirm mt-2',
                cancelButtonClass: 'btn btn-cancel ml-2 mt-2',
                confirmButtonText: '删除',
                cancelButtonText: '取消'
            }).then(function () {
                $.ajax({
                    url: "{{url('role')}}/" + id,
                    type: 'DELETE',
                    data: {'_token': "{{csrf_token()}}"},
                    success: function (result) {
                        if (result.status == true) {
                            swal({
                                    title: '删除成功 !',
                                    type: 'success',
                                    button: true,
                                    confirmButtonClass: 'btn btn-confirm mt-2'
                                }
                            ).then(function () {
                                window.location.reload()
                            })
                        } else {

                        }
                    }
                });

            }, function () {

            })

        }
    </script>
@endpush