@extends('layouts.all')
@push('css')
    <!-- Bootstrap fileupload css -->
    <link href="{{asset('./plugins/bootstrap-fileupload/bootstrap-fileupload.css')}}" rel="stylesheet"/>
@endpush
<!-- 个人信息编辑 -->
@section('breadcrumb')
    <h4 class="page-title">{{$user->name}}</h4>
    {{Breadcrumbs::render('user.edit')}}
@endsection
@section('content')
    <!-- Start Page content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-8">
                                <div class="p-20">
                                    @php($red='<span class="text-danger">*</span>')
                                    {!! Form::model($user,['url'=>route('user.update',$user->id),'method'=>'PUT','files'=>'true']) !!}
                                    <div class="form-group row">
                                        {!! Form::label('name','姓名'.$red ,['class'=>'col-2 col-form-label '],false) !!}
                                        <div class="col-6">
                                            <input type="text" name="name" required
                                                   class="form-control {{$errors->has('name')?'is-invalid':''}}"
                                                   value="{{old('name',$user->name)}}"/>
                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        {!! Form::label('email','邮箱'.$red,['class'=>'col-2 col-form-label'],false) !!}
                                        <div class="col-6">
                                            <input type="email" name="email" required
                                                   class="form-control {{$errors->has('email')?'is-invalid':''}}"
                                                   value="{{old('email',$user->email)}}"/>
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {!! Form::label('role','角色',['class'=>'col-2 col-form-label'],false) !!}
                                        <div class="col-6">
                                            @include('single.roles',$user)
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {!! Form::label('duty','职务',['class'=>'col-2 col-form-label']) !!}
                                        <div class="col-6">
                                            <input type="text" name="duty"
                                                   class="form-control  {{$errors->has('duty')?'is-invalid':''}}"
                                                   value="{{old('duty',$user->duty)}}"/>
                                            @if ($errors->has('duty'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('duty') }}</strong>
                                    </span>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        {!! Form::label('phone','联系方式',['class'=>'col-2 col-form-label']) !!}
                                        <div class="col-6">
                                            <input type="text" name="phone"
                                                   class="form-control   {{$errors->has('phone')?'is-invalid':''}}"
                                                   id="phone"
                                                   value="{{old('phone',$user->mobile)}}"/>
                                            @if ($errors->has('phone'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                                {!! Form::label('avatar','头像',['class'=>'col-2 col-form-label']) !!}
                                                <div class="col-6">
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                        <div class="fileupload-new thumbnail"
                                                             style="width: 200px; height: 150px;text-align: left;">
                                                            <img src="{{$user->avatar}}" alt="image"/>
                                                        </div>
                                                        <div class="fileupload-preview fileupload-exists thumbnail"
                                                             style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                        <div>
                                                            <button type="button" class="btn btn-info btn-file">
                                                                <span class="fileupload-new"><i class="fa fa-paper-clip"></i> 选择图片</span>
                                                                <span class="fileupload-exists"><i
                                                                            class="fa fa-undo"></i> 切换</span>
                                                                <input type="file" name="avatar" class="btn-light"/>
                                                            </button>
                                                            <a href="#" class="btn btn-danger fileupload-exists"
                                                               data-dismiss="fileupload"><i class="fa fa-trash"></i> 删除</a>
                                                        </div>
                                                    </div>
                                                    <div class=" m-t-8 text-left">
                                                        @if ($errors->has('avatar'))
                                                            <span class="text-danger  font-13" role="alert">
                                        <strong>{{ $errors->first('avatar') }}</strong>
                                    </span>
                                                        @endif
                                                    </div>
                                        </div>

                                    </div>

                                    <div class="form-group row text-center m-t-8">
                                        <div class="col-6 offset-2">
                                            {!! Form::button('保存',['type'=>'submit','class'=>'btn btn-block btn-custom waves-effect waves-light']) !!}

                                        </div>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>

                        </div>
                        <!-- end row -->
                    </div>
                </div>
            </div>
        </div> <!-- container -->
    </div> <!-- content -->
@endsection
@push('js')
    <!-- Bootstrap fileupload js -->
    <script src="{{asset('plugins/bootstrap-fileupload/bootstrap-fileupload.js')}}"></script>
    <!-- Dropzone js -->
    <script src="{{asset('plugins/dropzone/dropzone.js')}}"></script>
@endpush