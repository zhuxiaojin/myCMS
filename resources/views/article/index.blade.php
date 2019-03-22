@extends('layouts.all')
@push('css')
    <!-- Summernote css -->
    <link href="{{asset('plugins/summernote/summernote-bs4.css')}}" rel="stylesheet"/>
    <!-- Bootstrap fileupload css -->
    <link href="{{asset('./plugins/bootstrap-fileupload/bootstrap-fileupload.css')}}" rel="stylesheet"/>
@endpush
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
                                    <form action="{{route('role.store')}}" method="post">
                                    @csrf
                                    <!-- 标题 -->
                                        <div class="form-group row">
                                            <label for="title" class="col-md-2 col-form-label">标题{!! $red !!}</label>
                                            <div class="col-md-10">
                                                <input type="text" name="title" required
                                                       class="form-control {{$errors->has('title')?'is-invalid':''}}"
                                                       value="{{old('title')}}"/>
                                                @if ($errors->has('title'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- 关键字-->
                                        <div class="form-group row">
                                            <label for="title" class="col-md-2 col-form-label">关键字 </label>
                                            <div class="col-md-10">
                                                <input type="text" name="keywords" required
                                                       class="form-control {{$errors->has('title')?'is-invalid':''}}"
                                                       value="{{old('keywords')}}"/>
                                                @if ($errors->has('keywords'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('keywords') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- 摘要描述 -->
                                        <div class="form-group row">
                                            <label for="title" class="col-md-2 col-form-label">摘要 </label>
                                            <div class="col-md-10">
                                                <textarea name="description" required
                                                          class="form-control {{$errors->has('description')?'is-invalid':''}}"
                                                >{{old('description')}}</textarea>
                                                @if ($errors->has('description'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- 内容 -->
                                        <div class="form-group row ">
                                            <label for="body" class="col-md-2 col-form-label">内容{!! $red !!} </label>
                                            <div class="col-md-10">
                                                <div class="ml-3 summernote"></div>
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            {!! Form::label('cover','封面',['class'=>'col-2 col-form-label']) !!}
                                            <div class="col-6">
                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="fileupload-new thumbnail"
                                                         style="width: 200px; height: 150px;text-align: left;">
                                                        <img src=" " alt="image"/>
                                                    </div>
                                                    <div class="fileupload-preview fileupload-exists thumbnail"
                                                         style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                    <div>
                                                        <button type="button" class="btn btn-info btn-file">
                                                            <span class="fileupload-new"><i
                                                                        class="fa fa-paper-clip"></i> 选择图片</span>
                                                            <span class="fileupload-exists"><i
                                                                        class="fa fa-undo"></i> 切换</span>
                                                            <input type="file" name="avatar" class="btn-light"/>
                                                        </button>
                                                        <a href="#" class="btn btn-danger fileupload-exists"
                                                           data-dismiss="fileupload"><i class="fa fa-trash"></i> 删除</a>
                                                    </div>
                                                </div>
                                                <div class=" m-t-8 text-left">
                                                    @if ($errors->has('cover'))
                                                        <span class="text-danger  font-13" role="alert">
                                        <strong>{{ $errors->first('cover') }}</strong>
                                    </span>
                                                    @endif
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group row text-left m-t-8">
                                            <div class="col-6 offset-2">
                                                {!! Form::button('保存',['type'=>'submit','class'=>'btn btn-custom waves-effect waves-light ']) !!}
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
@stop
@push('js')
    <!--Wysiwig js-->
    <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script>
        jQuery(document).ready(function () {
            $('.summernote').summernote({
                height: 350,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: false                 // set focus to editable area after initializing summernote
            });

            $('.inline-editor').summernote({
                airMode: true
            });
        });
    </script>
@endpush