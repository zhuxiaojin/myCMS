<!-- 网站首页 -->
@extends('layouts.app')
@section('content')
    <div class="container-fuild">
        <div class="row">
            <!-- 首页轮播 -->
            <div class="col-md-10 offset-md-1">
            <div class="carousel  slide" id="img" data-ride="carousel">
                <!-- 指示符 -->
                <ul class="carousel-indicators">
                    <li data-target="#img" data-slide-to="0" class="active"></li>
                    <li data-target="#img" data-slide-to="1"></li>
                    <li data-target="#img" data-slide-to="2"></li>
                </ul>

                <!-- 轮播图片 -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://static.runoob.com/images/mix/img_fjords_wide.jpg">
                    </div>
                    <div class="carousel-item">
                        <img src="https://static.runoob.com/images/mix/img_nature_wide.jpg">
                    </div>
                    <div class="carousel-item">
                        <img src="https://static.runoob.com/images/mix/img_mountains_wide.jpg">
                    </div>
                </div>

                <!-- 左右切换按钮 -->
                <a class="carousel-control-prev" href="#img" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#img" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
            </div>
        </div>
    </div>
@endsection