<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="">
                    <div class="timeline">
                        {{--<article class="timeline-item alt">--}}
                            {{--<div class="text-right">--}}
                                {{--<div class="time-show first">--}}
                                    {{--<a href="#" class="btn btn-custom w-lg">至今</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</article>--}}
                        <article class="timeline-item alt">
                            <div class="text-right">
                                <div class="time-show">
                                    <a href="#" class="btn btn-custom w-lg">初来乍到</a>
                                </div>
                            </div>
                        </article>

                        <article class="timeline-item alt">
                            <div class="timeline-desk">
                                <div class="panel">
                                    <div class="timeline-box">
                                        <span class="arrow-alt"></span>
                                        <span class="timeline-icon bg-custom"><i class="mdi mdi-adjust"></i></span>
                                        <h4 class="text-custom">31 December 2017</h4>
                                        <p class="timeline-date text-muted">
                                            <small>08:25 am</small>
                                        </p>
                                        <p>Download the new updates of Ubold admin dashboard</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- 注册信息 -->
                        <article class="timeline-item">
                            <div class="timeline-desk">
                                <div class="panel">
                                    <div class="timeline-box">
                                        <span class="arrow"></span>
                                        <span class="timeline-icon bg-custom"><i class="mdi mdi-adjust"></i></span>
                                        <h4 class="text-custom">{{Auth::user()->created_at->toDateString()}}</h4>
                                        <p class="timeline-date text-muted">
                                            <small>{{Auth::user()->created_at->toTimeString()}}</small>
                                        </p>
                                        <p>注册成为会员</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                    </div>
                    <!-- end timeline -->
                </div>
            </div>
        </div>
        <!-- end row -->

    </div> <!-- container -->

</div> <!-- content -->