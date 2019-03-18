@extends('layouts.all')
<!-- 权限组列表 -->
@section('breadcrumb')
    <h4 class="page-title">权限列表</h4>
    {{Breadcrumbs::render('permission.index')}}
@stop
@push('css')
    <!-- Sweet Alert css -->
    <link href="{{asset('plugins/sweet-alert/sweetalert2.min.css')}}" rel="stylesheet" type="text/css"/>
@endpush
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <a href="{{route('permission.create')}}" class="btn btn-outline-primary btn-rounded  mb-3"><i class="mdi mdi-plus-circle"></i> 创建权限</a>
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-hover table-centered m-0">
                        <thead>
                        <tr>
                            <th></th>
                            <th>名称</th>
                            <th>描述</th>
                            <th>分组</th>
                            <th>创建时间</th>
                            <th width="20%">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($permissions as $permission)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    <h5 class="m-0 font-weight-normal">{{$permission->name}}</h5>
                                </td>

                                <td>
                                    {{$permission->description}}
                                </td>
                                <td>
                                    {{$permission->group_name}}
                                </td>
                                <td>
                                    {{$permission->created_at->toDateString()}}
                                </td>
                                <td>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm- mr-1"><a href="{{route('permission.edit',$permission)}}"
                                                                         class="btn btn-sm btn-custom">编辑</a></div>
                                            <div class="col-sm-  mr-1">
                                                {{--<form action="{{route('user.destroy',$user)}}" method="delete">--}}
                                                <button type="button" onclick="deletePhoto({{$permission->id}})"
                                                        class="btn btn-sm btn-danger">删除
                                                </button>
                                                {{--</form>--}}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <div class="pull-right ">
                        {{$permissions->links()}}
                    </div>
                </div>

            </div>
        </div>

    </div>
@stop
@push('js')
    <!-- Sweet Alert Js  -->
    <script src="{{asset('plugins/sweet-alert/sweetalert2.js')}}"></script>
    <script>
        function deletePhoto(id) {
            swal({
                title: '确定删除该权限吗',
                type: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'btn btn-confirm mt-2',
                cancelButtonClass: 'btn btn-cancel ml-2 mt-2',
                confirmButtonText: '删除',
                cancelButtonText: '取消'
            }).then(function () {
                $.ajax({
                    url: "{{url('permission')}}/" + id,
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
                        }
                    }
                });

            }, function () {

            })

        }
    </script>
@endpush