@extends('admin.user_pages.user_control')
@section('user_info')
    {{--User Request List For Site Projects --}}
    <section>
        <div class="row">
            <div class="col-md-6">
                <h5>آخرین درخواست های این کاربر:</h5>
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


                @foreach($project_requests as $request)
                    <div class="swiper-slide">
                        <div id="request_card" class="card rtl">
                            <div class="card-header bg-danger"></div>
                            <div class="card-body">
                                <h5 class="card-title">{{$request->description}}</h5>
                                <div id="summary">
                                    <p class="card-text collapse" id="r{{$request->id}}">
                                        {{$request->project['description']}}
                                    </p>
                                    <a class="collapsed" data-toggle="collapse" href="#r{{$request->id}}" aria-expanded="false"
                                       aria-controls="collapseSummary"></a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between p-0">
                                <item class="py-1 m-1 card-info">{{$request->project['title']}}</item>
                                <item class="py-1 m-1 card-info">
                                    <item>قیمت:</item>
                                    <item>{{$request->price}}</item>
                                </item>
                            </div>
                            <div class="card-footer d-flex justify-content-between p-1">


                                <form class="btn btn-danger" method="post" action="{{route('admin-remove-user-project-request')}}">
                                    {{csrf_field()}}
                                    <input  type="hidden" name="request_id" value="{{$request->id}}">
                                    <input  type="hidden" name="user_id" value="{{$user->id}}">
                                    <input class="btn btn-danger" type="submit" value="حذف درخواست">
                                </form>

                                {{--<a href="#" class="btn btn-danger">حذف</a>--}}


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
                            {{--<a href="#" class="btn btn-danger">حذف</a>--}}
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
                            {{--<a href="#" class="btn btn-danger">حذف</a>--}}
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
                            {{--<a href="#" class="btn btn-danger">حذف</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}







            </div>
            <!-- Add Pagination -->
            <!-- Add Navigation -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>
@endsection