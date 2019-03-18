@extends('layouts.base')

@section('content')


    <!-- Begin page -->
    <div class="accountbg" style="background: url('{{asset('assets/images/bg-1.jpg')}}');background-size: cover;"></div>

    <div class="wrapper-page account-page-full">

        <div class="card">
            <div class="card-block">
                <div class="account-box">
                    <div class="card-box p-5" style="    padding-bottom: 1rem !important;
">
                        <h2 class="text-uppercase text-center pb-2">
                            <a href="index.html" class="text-success">
                                <span><img src="assets/images/logo.png" alt="" height="26"></span>
                            </a>
                        </h2>

                        <form class="form-horizontal" action="{{route('register')}}" method="post">
                            @csrf
                            <div class="form-group row m-b-20">
                                <div class="col-12">
                                    <label for="username">姓名</label>
                                    <input class="form-control {{$errors->has('name')?'is-invalid':''}} " type="text"
                                           id="username" name="name" required=""
                                           value="{{old('name')}}"
                                           placeholder="姓名">
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row m-b-20">
                                <div class="col-12">
                                    <label for="email">邮箱</label>
                                    <input class="form-control {{$errors->has('email')?'is-invalid':''}} " type="email"
                                           id="email" name='email' required=""
                                           value="{{old('email')}}"
                                           placeholder="邮箱">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row m-b-20">
                                <div class="col-12">
                                    <label for="password">密码</label>
                                    <input class="form-control {{$errors->has('password')?'is-invalid':''}}"
                                           type="password" required="" id="password"
                                           name="password" placeholder="密码">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row m-b-20">
                                <div class="col-12">
                                    <label for="password">确认密码</label>
                                    <input class="form-control" type="password" required="" name="password_confirmation"
                                           placeholder="确认密码">
                                </div>
                            </div>
                            <div class="form-group m-b-20 row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="email">验证码</label>
                                            <input class="form-control {{$errors->has('captcha')?'is-invalid':''}} "
                                                   type="text"
                                                   required="" name="captcha" value="{{old('captcha')}}"
                                                   placeholder="验证码">
                                            @if ($errors->has('captcha'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('captcha') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                        <div class="col-6" style="padding-top:30px;">
                                            <img src="{{captcha_src()}}"
                                                 style="cursor: pointer;border: solid #07b3bf 1px;border-radius∑:1px;"
                                                 onclick="this.src='{{captcha_src()}}'+Math.random()">
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="form-group row m-b-20">
                                <div class="col-12">

                                    <div class="checkbox checkbox-custom">
                                        <input id="read" type="checkbox" checked="">
                                        <label for="read">
                                            我已阅读 <a href="#" class="text-custom">网站说明和开发规范</a>
                                        </label>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group row text-center m-t-10">
                                <div class="col-12">
                                    <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">注册
                                    </button>
                                </div>
                            </div>

                        </form>

                        <div class="row m-t-10">
                            <div class="col-sm-12 text-center">
                                <p class="text-muted">已有账号? <a href="{{route('login')}}"
                                                               class="text-dark m-l-5"><b>登录</b></a></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="m-t-10 text-center">
            <p class="account-copyright"> 2019 © Sooc_oa. - soocedu.com</p>
        </div>
    </div>
@endsection
