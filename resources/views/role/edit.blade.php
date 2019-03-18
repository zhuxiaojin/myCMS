@extends('layouts.all')
@push('css')
    <!-- Bootstrap fileupload css -->
    <link href="{{asset('./plugins/bootstrap-fileupload/bootstrap-fileupload.css')}}" rel="stylesheet"/>
@endpush
<!-- 个人信息编辑 -->
@section('breadcrumb')
    <h4 class="page-title">『编辑』{{$role->description}}</h4>
    {{Breadcrumbs::render('role.index')}}
@stop
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
                                    {!! Form::model($role,['url'=>route('role.update',$role->id),'method'=>'PUT']) !!}
                                    <div class="form-group row">
                                        {!! Form::label('name','调用名称'.$red ,['class'=>'col-2 col-form-label '],false) !!}
                                        <div class="col-6">
                                            <input type="text" name="name" required
                                                   class="form-control {{$errors->has('name')?'is-invalid':''}}"
                                                   value="{{old('name',$role->name)}}"/>
                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        {!! Form::label('description','角色名称'.$red,['class'=>'col-2 col-form-label'],false) !!}
                                        <div class="col-6">
                                            <input type="text" name="description" required
                                                   class="form-control {{$errors->has('description')?'is-invalid':''}}"
                                                   value="{{old('description',$role->description)}}"/>
                                            @if ($errors->has('description'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                            @endif
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