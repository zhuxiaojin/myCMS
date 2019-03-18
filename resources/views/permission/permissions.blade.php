@extends('layouts.all')
<!-- 权限组列表 -->
@section('breadcrumb')
    <h4 class="page-title">

        <button type="button" class="btn btn-info waves-effect waves-light"><i class="fa fa-user m-r-5"></i>
            <span>{{$role->description}}</span>
        </button>
    </h4>
    {{Breadcrumbs::render('permission.index')}}
@stop
@push('css')
    <!-- Sweet Alert css -->
    <link href="{{asset('plugins/sweet-alert/sweetalert2.min.css')}}" rel="stylesheet" type="text/css"/>
@endpush
@section('content')
    <div class="content">
        <div class="container-fluid">
            @if($errors->has('permissions'))
                <div class="col-md-6 offset-3 alert alert-danger">
                    {{$errors->first('permissions')}}
                </div>
            @endif
            <form action="{{route('role.permissions',$role)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="row ml-lg- ml-lg-md card-box">

                    @foreach($all as $k=>$permission)
                        <div class="col-lg-4 col-md-6 m-t-50  ">
                            <h4 class="m-t-0 header-title"><b>{{empty($k)?'其他':$k}}</b></h4>
                            <p class="text-muted font-14 m-b-10">
                                <small>以下为{{empty($k)?'其他':$k}}的权限列表</small>
                            </p>
                            @foreach ($permission as $value)
                                <div class="checkbox checkbox-circle checkbox-success">
                                    <input id="permission_id_{{$value->id}}" name='permissions[]' value="{{$value->id}}"
                                           {{$role->hasPermissionTo($value->id)?'checked':''}}
                                           type="checkbox">
                                    <label for="permission_id_{{$value->id}}">
                                        {{$value->description}}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group text-right" style="position:fixed;right:80px;top:300px;z-index: 99999">
                            <button class="btn btn-primary top-left" style="">保存
                            </button>
                            <p class="text-center text-muted">
                                <small>保存在这里</small>
                            </p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
