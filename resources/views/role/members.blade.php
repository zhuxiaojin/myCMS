@extends('layouts.all')
<!-- 权限组列表 -->
@section('breadcrumb')
    <h4 class="page-title">{{$role->description}}-成员列表</h4>
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
                <div class="  form-inline mb-3">
                    <form action="{{route('role.members',$role)}}" method="get">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="keywords" placeholder="用户名/邮箱/联系方式"
                                   value="{{$keywords}}">
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
                        @empty(count($members))
                            <tr>
                                <td colspan="10"><p class="alert alert-link text-center">空空如也</p></td>
                            </tr>
                        @endempty
                        @foreach($members as $member)
                            <tr>
                                <td>
                                    <img src="{{$member->avatar}}" alt="contact-img" title="contact-img"
                                         class="rounded-circle thumb-sm">
                                </td>
                                <td>
                                    <h5 class="m-0 font-weight-normal">{{$member->name}}</h5>
                                    <p class="mb-0 text-muted">
                                        <small>{{$member->created_at->diffForHumans()}}</small>
                                    </p>
                                </td>
                                <td>
                                    <i class="fi fi-mail text-primary"></i> {{$member->email}}
                                </td>
                                <td>
                                    {{$member->duty}}
                                </td>
                                <td>
                                    {{$member->mobile}}
                                </td>
                                <td>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-  mr-1">
                                                <button type="button" onclick="deletePhoto({{$member->id}})"
                                                        class="btn btn-sm btn-danger">删除
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="pull-right ">
                        {{$members->links()}}
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
        function deletePhoto(id) {
            swal({
                title: '确定删除该权限组成员吗',
                type: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'btn btn-confirm mt-2',
                cancelButtonClass: 'btn btn-cancel ml-2 mt-2',
                confirmButtonText: '删除',
                cancelButtonText: '取消'
            }).then(function () {
                $.ajax({
                    url: "{{url('role/')}}/" + {{$role->id}} +'/member/' + id,
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