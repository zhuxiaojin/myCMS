@extends('layouts.all')
<!-- 权限组列表 -->
@section('breadcrumb')
    <h4 class="page-title">用户列表</h4>
    {{Breadcrumbs::render('user.index')}}
@stop
@push('css')
    <!-- Sweet Alert css -->
    <link href="{{asset('plugins/sweet-alert/sweetalert2.min.css')}}" rel="stylesheet" type="text/css"/>
@endpush
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="  form-inline mb-3">
                    <form action="{{route('user.index')}}" method="get">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="keywords" placeholder="用户名/邮箱/联系方式" value="{{$keywords}}">
                            <button class="btn btn-primary ml-2 " type="submit">查询</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-hover table-centered m-0">
                        <thead>
                        <tr>
                            <th>头像</th>
                            <th>姓名</th>
                            <th>邮箱</th>
                            <th>职务</th>
                            <th>联系方式</th>
                            <th width="20%">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>
                                    <img src="{{$user->avatar}}" alt="contact-img" title="contact-img"
                                         class="rounded-circle thumb-sm">
                                </td>
                                <td>
                                    <h5 class="m-0 font-weight-normal">{{$user->name}}</h5>
                                    <p class="mb-0 text-muted">
                                        <small>{{$user->created_at->diffForHumans()}}</small>
                                    </p>
                                </td>

                                <td>
                                    <i class="fi fi-mail text-primary"></i> {{$user->email}}
                                </td>

                                <td>
                                    {{$user->duty}}
                                </td>

                                <td>
                                    {{$user->mobile}}
                                </td>

                                <td>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm- mr-1"><a href="{{route('user.edit',$user)}}"
                                                                         class="btn btn-sm btn-custom">编辑</a></div>
                                            <div class="col-sm-  mr-1"><a href="{{route('user.show',$user)}}"
                                                                          class="btn btn-sm btn-info">查看</a></div>
                                            <div class="col-sm-  mr-1">
                                                {{--<form action="{{route('user.destroy',$user)}}" method="delete">--}}
                                                <button type="button" onclick="deletePhoto({{$user->id}})"
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
                        {{$users->links()}}
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
                title: '确定删除该用户吗',
                type: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'btn btn-confirm mt-2',
                cancelButtonClass: 'btn btn-cancel ml-2 mt-2',
                confirmButtonText: '删除',
                cancelButtonText: '取消'
            }).then(function () {
                $.ajax({
                    url: "{{url('user')}}/" + id,
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