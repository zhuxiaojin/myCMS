@extends('layouts.all')

<!-- 个人信息展示 -->
@section('breadcrumb')
    <h4 class="page-title">{{$user->name}}</h4>
    {{Breadcrumbs::render('user.edit')}}
@stop
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-box">
                        <ul class="nav nav-tabs tabs-bordered">
                            <li class="nav-item">
                                <a href="#profile-b1" data-toggle="tab" aria-expanded="true"
                                   class="nav-link active show">
                                    <i class="fi-head mr-2"></i>个人详情
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#messages-b1" data-toggle="tab" aria-expanded="false" class="nav-link ">
                                    <i class="fi-paper mr-2"></i> 轨迹
                                </a>

                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active show" id="profile-b1">
                                <div class="container-fuild">
                                    <div class="row">
                                        <div class="col-md-6 offset-2">
                                            <div class="form-group">
                                                <label for="email">头像</label>
                                                <img src="{{$user->avatar}}" alt="" maxwidth="200" maxlength="200" style="margin-left:25px;">
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="label ">邮箱</label>
                                                <input class="form-control" type="text" name="email" id=""
                                                       value="{{$user->email}}" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">姓名</label>
                                                <input class="form-control" type="text" name="email" id=""
                                                       value="{{$user->name}}" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">职务</label>
                                                <input class="form-control" type="text" name="email" id=""
                                                       value="{{$user->duty}}" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">联系方式</label>
                                                <input class="form-control" type="text" name="email" id=""
                                                       value="{{$user->mobile}}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane " id="messages-b1">
                                @include('share._timeline')
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
@stop
@push('js')
    <!-- Bootstrap fileupload js -->
    <script src="{{asset('plugins/bootstrap-fileupload/bootstrap-fileupload.js')}}"></script>
    <!-- Dropzone js -->
    <script src="{{asset('plugins/dropzone/dropzone.js')}}"></script>
@endpush