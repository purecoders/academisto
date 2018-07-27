@extends('user.user_panel')
@section('user_info')
    {{--User Request List For Site Projects --}}
    <section>
        <div class="row">
            <div class="col-md-6">
                <h5>آخرین درخواست های شما:</h5>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-between">
                    <item><i class="fa fa-circle text-primary"></i> درحال انجام</item>
                    <item><i class="fa fa-circle text-warning"></i> در حال بررسی</item>
                    <item><i class="fa fa-circle text-danger"></i> رد شده</item>
                    <item><i class="fa fa-circle text-success"></i> تمام شده</item>
                </div>
            </div>

        </div>

        <div class="swiper-container" dir="rtl">
            <div class="swiper-wrapper">




                @foreach($requests as $request)
                    <div class="swiper-slide">
                        <div id="request_card" class="card rtl">
                            <div
                                    @if($request['project_request']['is_denied'] == 1)
                                        class="card-header bg-danger"
                                    @elseif($request['projects']['is_finished'] == 1)
                                        class="card-header bg-success"
                                    @elseif($request['projects']['is_started'] == 1 && $request['project_request']['is_accepted'] == 1 && $request['projects']['is_finished'] == 0)
                                        class="card-header bg-primary"
                                    @else
                                        class="card-header bg-warning"
                                    @endif
                            ></div>
                            <div class="card-body">
                                {{--<h5 class="card-title">متن درخواست</h5>--}}
                                <div id="summary">
                                    <p class="card-text collapse" id="sum{{$request['project_request']['id']}}">
                                       {{$request['project_request']['description']}}
                                    </p>
                                    <a class="collapsed" data-toggle="collapse" href="#sum{{$request['project_request']['id']}}" aria-expanded="false"
                                       aria-controls="collapseSummary"></a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between p-0">
                                <item class="py-1 m-1 card-info">{{$request['projects']['title']}}</item>
                                <item class="py-1 m-1 card-info">
                                    <item>قیمت(تومان):</item>
                                    <item>{{number_format($request['projects']['user_price'])}}</item>
                                </item>
                            </div>
                            <div class="card-footer d-flex justify-content-between p-1">
                                <a href="{{route('user-order-detail',$request['projects']['id'])}}" class="py-1 m-1 btn btn-outline-secondary">مشاهده جزئیات</a>

                                {{--<a href="#" class="btn btn-danger">لغو درخواست</a>--}}

                                @if($request['project_request']['is_denied'] == 1)
                                @elseif($request['projects']['is_finished'] == 1)
                                @elseif($request['projects']['is_started'] == 1 && $request['project_request']['is_accepted'] == 1 && $request['projects']['is_finished'] == 0)
                                @else
                                    <form class="form-group mr-auto d-inline-block" method="post" action="{{route('project-request.destroy', $request['project_request']['id'])}}">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input class="form-control btn btn-danger" type="submit" value="لغو درخواست">
                                    </form>
                                @endif



                            </div>
                        </div>
                    </div>
                @endforeach






                {{--<div class="swiper-slide">--}}
                    {{--<div id="request_card" class="card rtl">--}}
                        {{--<div class="card-header bg-primary"></div>--}}
                        {{--<div class="card-body">--}}
                            {{--<h5 class="card-title">درخواست 1</h5>--}}
                            {{--<div id="summary">--}}
                                {{--<p class="card-text collapse" id="collapseSummary2">--}}
                                    {{--لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.--}}
                                {{--</p>--}}
                                {{--<a class="collapsed" data-toggle="collapse" href="#collapseSummary2" aria-expanded="false"--}}
                                   {{--aria-controls="collapseSummary"></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="d-flex justify-content-between p-0">--}}
                            {{--<item class="py-1 m-1 card-info">پروژه سما</item>--}}
                            {{--<item class="py-1 m-1 card-info">--}}
                                {{--<item>قیمت:</item>--}}
                                {{--<item>10000</item>--}}
                            {{--</item>--}}
                        {{--</div>--}}
                        {{--<div class="card-footer d-flex justify-content-between p-1">--}}
                            {{--<a href="{{route('user-order-detail',1)}}" class="py-1 m-1 btn btn-outline-secondary">مشاهده جزئیات</a>--}}
                            {{--<a href="{{route('user-order-edit',1)}}" class="btn btn-primary">ارسال پروژه</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="swiper-slide">--}}
                    {{--<div id="request_card" class="card rtl">--}}
                        {{--<div class="card-header bg-warning"></div>--}}
                        {{--<div class="card-body">--}}
                            {{--<h5 class="card-title">درخواست 1</h5>--}}
                            {{--<div id="summary">--}}
                                {{--<p class="card-text collapse" id="collapseSummary3">--}}
                                    {{--لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.--}}
                                {{--</p>--}}
                                {{--<a class="collapsed" data-toggle="collapse" href="#collapseSummary3" aria-expanded="false"--}}
                                   {{--aria-controls="collapseSummary"></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="d-flex justify-content-between p-0">--}}
                            {{--<item class="py-1 m-1 card-info">پروژه سما</item>--}}
                            {{--<item class="py-1 m-1 card-info">--}}
                                {{--<item>قیمت:</item>--}}
                                {{--<item>10000</item>--}}
                            {{--</item>--}}
                        {{--</div>--}}
                        {{--<div class="card-footer d-flex justify-content-between p-1">--}}
                            {{--<a href="{{route('user-order-detail',1)}}" class="py-1 m-1 btn btn-outline-secondary">مشاهده جزئیات</a>--}}
                            {{--<a href="#" class="btn btn-danger">حذف</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="swiper-slide">--}}
                    {{--<div id="request_card" class="card rtl border-success">--}}
                        {{--<div class="card-header bg-success"></div>--}}
                        {{--<div class="card-body">--}}
                            {{--<h5 class="card-title">درخواست 1</h5>--}}
                            {{--<div id="summary">--}}
                                {{--<p class="card-text collapse" id="collapseSummary4">--}}
                                    {{--چاپ و با استفاده از طراحان گرافیک است.--}}
                                {{--</p>--}}
                                {{--<a class="collapsed" data-toggle="collapse" href="#collapseSummary4" aria-expanded="false"--}}
                                   {{--aria-controls="collapseSummary"></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="d-flex justify-content-between p-0">--}}
                            {{--<item class="py-1 m-1 card-info">پروژه سما</item>--}}
                            {{--<item class="py-1 m-1 card-info">--}}
                                {{--<item>قیمت:</item>--}}
                                {{--<item>10000</item>--}}
                            {{--</item>--}}
                        {{--</div>--}}
                        {{--<div class="card-footer d-flex justify-content-between p-1">--}}
                            {{--<a href="{{route('user-order-detail',1)}}" class="py-1 m-1 btn btn-outline-secondary">مشاهده جزئیات</a>--}}
                            {{--<a href="#" class="btn btn-danger">حذف</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="swiper-slide">--}}
                    {{--<div id="request_card" class="card rtl">--}}
                        {{--<div class="card-header bg-success"></div>--}}
                        {{--<div class="card-body">--}}
                            {{--<h5 class="card-title">درخواست 1</h5>--}}
                            {{--<div id="summary">--}}
                                {{--<p class="card-text collapse" id="collapseSummary5">--}}
                                    {{--لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.--}}
                                {{--</p>--}}
                                {{--<a class="collapsed" data-toggle="collapse" href="#collapseSummary5" aria-expanded="false"--}}
                                   {{--aria-controls="collapseSummary"></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="d-flex justify-content-between p-0">--}}
                            {{--<a href="{{route('user-order-detail',1)}}" class="py-1 m-1 btn btn-outline-secondary">مشاهده جزئیات</a>--}}
                        {{--</div>--}}
                        {{--<div class="card-footer d-flex justify-content-between p-1">--}}
                            {{--<a href="{{route('user-order-detail',1)}}" class="py-1 m-1 btn btn-outline-secondary">مشاهده جزئیات</a>--}}
                            {{--<a href="#" class="btn btn-danger">حذف</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{----}}





            </div>
            <!-- Add Pagination -->
            <!-- Add Navigation -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>
@endsection