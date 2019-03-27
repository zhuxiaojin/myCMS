@extends('layouts.all')
@push('css')
    <!-- Bootstrap fileupload css -->
    <link href="{{asset('./plugins/bootstrap-fileupload/bootstrap-fileupload.css')}}" rel="stylesheet"/>
@endpush
<!-- 个人信息编辑 -->
@section('breadcrumb')
    <h4 class="page-title">【修改配置】</h4>
    {{Breadcrumbs::render('permission.index')}}
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
                                    <form action="{{route('option.update',$option->id)}}" method="post">
                                        @method('PATCH')
                                        @csrf
                                        <div class="form-group row">
                                            {!! Form::label('name','名称'.$red ,['class'=>'col-2 col-form-label '],false) !!}
                                            <div class="col-6">
                                                <input type="text" name="name" required
                                                       class="form-control {{$errors->has('name')?'is-invalid':''}}"
                                                       value="{{old('name',$option->name)}}"/>
                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            {!! Form::label('key','KEY'.$red,['class'=>'col-2 col-form-label'],false) !!}
                                            <div class="col-6">
                                                <input type="text" name="key" required placeholder="请使用英文"
                                                       class="form-control {{$errors->has('key')?'is-invalid':''}}"
                                                       value="{{old('key',$option->key)}}"/>
                                                @if ($errors->has('key'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('key') }}</strong>
                                    </span>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            {!! Form::label('value','内容'.$red ,['class'=>'col-2 col-form-label '],false) !!}
                                            <div class="col-6">
                                                <textarea type="text" name="value" required
                                                          class="form-control {{$errors->has('value')?'is-invalid':''}}"
                                                          placeholder="可以为数组，json">{{old('value',$option->value)}}</textarea>
                                                @if ($errors->has('value'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('value') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row text-center m-t-8">
                                            <div class="col-6 offset-2">
                                                {!! Form::button('保存',['type'=>'submit','class'=>'btn btn-block btn-custom waves-effect waves-light']) !!}
                                            </div>
                                        </div>
                                    </form>
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