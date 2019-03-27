@extends('layouts.all')
<!-- 权限组列表 -->
@section('breadcrumb')
    <h4 class="page-title">配置管理</h4>
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
                <div class="form-inline mb-3 mr-5">
                    <form action="{{route('option.index')}}" method="get">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="keywords" placeholder="名称/KEY"
                                   value="{{$keywords}}">
                            <button class="btn btn-primary ml-2 " type="submit">查询</button>
                        </div>
                    </form>
                </div>
                <a href="{{route('option.create')}}" class="btn btn-outline-primary btn-rounded  mb-3"><i
                            class="mdi mdi-plus-circle"></i> 创建配置</a>
            </div>

            <div class="row">
                <div class="table-responsive">
                    <div>
                        <p class="text-muted m-b-15 font-13">
                            使用 <code>option($key)</code>调用配置.
                        </p>
                    </div>
                    <table class="table table-hover table-centered m-0">
                        <thead>
                        <tr>
                            <th>名称</th>
                            <th>KEY</th>
                            <th width="20%">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($options)==0)
                            <tr>
                                <td colspan="4" class="text-center text-dark">暂无数据</td>
                            </tr>
                        @endif
                        @foreach($options as $option)
                            <tr>
                                <td>
                                    <h5 class="m-0 font-weight-normal">{{$option->name}}
                                    </h5>
                                </td>
                                <td>
                                    {{$option->key}}
                                </td>
                                <td>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm- mr-1"><a href="{{route('option.edit',$option->id)}}"
                                                                         class="btn btn-sm btn-custom">编辑</a></div>
                                            <div class="col-sm-  mr-1">
                                                <button type="button" onclick="deleteObj({{$option->id}})"
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
                        {{$options->links()}}
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
                title: '确定删除该配置吗？',
                type: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'btn btn-confirm mt-2',
                cancelButtonClass: 'btn btn-cancel ml-2 mt-2',
                confirmButtonText: '删除',
                cancelButtonText: '取消'
            }).then(function () {
                $.ajax({
                    url: "{{url('option')}}/" + id,
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