@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-8 offset-2">
            <form action="{{route('article.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="file" name="file">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">提交</button>
                </div>
            </form>

        </div>
    </div>
@endsection