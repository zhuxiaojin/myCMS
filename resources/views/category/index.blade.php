@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-3">
                <div class="card">
                    <div class="card-header alert-primary">分类测试</div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($list as $value)
                                <li class="list-group-item"><span
                                            class="badge">{{$loop->iteration}}</span>{{$value->name}}</li>
                            @endforeach
                        </ul>
                        <div class="form-group">
                            <a href="{{route('category.store')}}" class="btn btn-primary">add</a>
                        </div>
                    </div>
                    <div class="card-footer">{{\Carbon\Carbon::now()->diffForHumans()}}</div>
                </div>

            </div>

        </div>
    </div>
@endsection
