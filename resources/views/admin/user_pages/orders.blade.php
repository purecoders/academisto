@extends('admin.user_pages.user_control')
@section('user_info')
    {{--User Project Order List--}}
    <section>
        <div class="row">
            <div class="col-md-6">
                <h5>آخرین پروژه هایی که این کاربر سفارش داده است :</h5>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-between">
                    <item><i class="fa fa-circle text-primary"></i> منتشر شده</item>
                    <item><i class="fa fa-circle text-warning"></i> در حال انجام</item>
                    <item><i class="fa fa-circle text-success"></i> تمام شده</item>
                </div>
            </div>

        </div>

        <div id="orders" class="swiper-container" dir="rtl">
            <div class="swiper-wrapper">

                @php($i=0)
                @foreach($projects as $project)
                    @php($i++)
                    <div class="swiper-slide">

                        <div id="project_card" class="card rtl border-primary">

                            <div class="card-header bg-light p-1">
                                <div class="d-flex justify-content-around">
                                    <a href="http://www.google.com" style="text-decoration: none;color:black">
                                        <div>
                                            <item class="text-danger"> سفارش </item>
                                            <item>{{$i}}</item>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{$project->title}}</h5>
                                <div id="summary">
                                    <p class="card-text collapse" id="collapseSummary1">
                                       {{$project->description}}
                                    </p>
                                    <a class="collapsed" data-toggle="collapse" href="#collapseSummary1"
                                       aria-expanded="false"
                                       aria-controls="collapseSummary"></a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between p-0">

                                @if($project->is_immediate == 1)
                                    <alert class="alert alert-danger p-1 m-1">فوری</alert>
                                @else
                                    <alert class="alert alert-danger p-1 m-1 hide"></alert>
                                @endif

                            </div>
                            <div class="card-footer d-flex justify-content-between p-1">

                                <form class="btn btn-danger" method="post" action="{{route('admin-remove-user-project')}}">
                                    {{csrf_field()}}
                                    <input  type="hidden" name="project_id" value="{{$project->id}}">
                                    <input  type="hidden" name="user_id" value="{{$user->id}}">
                                    <input class="btn btn-danger" type="submit" value="حذف پروژه">
                                </form>
                                {{--<a href="#" class="btn btn-danger">حذف پروژه</a>--}}
                            </div>
                        </div>
                    </div>

                @endforeach

                {{--<div class="swiper-slide">--}}
                    {{--<div id="project_card" class="card rtl border-success">--}}
                        {{--<div class="card-header bg-light p-1">--}}
                            {{--<div class="d-flex justify-content-around">--}}
                                {{--<a href="http://www.google.com" style="text-decoration: none;color:black">--}}
                                    {{--<div>--}}
                                        {{--<item>0</item>--}}
                                        {{--<item class="text-danger"> گزارش</item>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="card-body">--}}
                            {{--<h5 class="card-title">پروژه 1</h5>--}}
                            {{--<div id="summary">--}}
                                {{--<p class="card-text collapse" id="collapseSummary1">--}}
                                    {{--لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان--}}
                                    {{--گرافیک است.--}}
                                {{--</p>--}}
                                {{--<a class="collapsed" data-toggle="collapse" href="#collapseSummary1"--}}
                                   {{--aria-expanded="false"--}}
                                   {{--aria-controls="collapseSummary"></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="d-flex justify-content-between p-0">--}}
                            {{--<alert class="alert alert-danger p-1 m-1">فوری</alert>--}}
                        {{--</div>--}}
                        {{--<div class="card-footer d-flex justify-content-between p-1">--}}
                            {{--<a href="#" class="btn btn-danger">حذف پروژه</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="swiper-slide">--}}
                    {{--<div id="project_card" class="card rtl border-warning">--}}
                        {{--<div class="card-header bg-light p-1">--}}
                            {{--<div class="d-flex justify-content-around">--}}
                                {{--<a href="http://www.google.com" style="text-decoration: none;color:black">--}}
                                    {{--<div>--}}
                                        {{--<item>2</item>--}}
                                        {{--<item class="text-danger"> گزارش</item>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="card-body">--}}
                            {{--<h5 class="card-title">پروژه 1</h5>--}}
                            {{--<div id="summary">--}}
                                {{--<p class="card-text collapse" id="collapseSummary1">--}}
                                    {{--لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان--}}
                                    {{--گرافیک است.--}}
                                {{--</p>--}}
                                {{--<a class="collapsed" data-toggle="collapse" href="#collapseSummary1"--}}
                                   {{--aria-expanded="false"--}}
                                   {{--aria-controls="collapseSummary"></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="d-flex justify-content-between p-0">--}}
                            {{--<alert class="alert alert-danger p-1 m-1">فوری</alert>--}}
                        {{--</div>--}}
                        {{--<div class="card-footer d-flex justify-content-between p-1">--}}
                            {{--<a href="#" class="btn btn-danger">حذف پروژه</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="swiper-slide">--}}
                    {{--<div id="project_card" class="card rtl border-success">--}}
                        {{--<div class="card-header bg-light p-1">--}}
                            {{--<div class="d-flex justify-content-around">--}}
                                {{--<a href="http://www.google.com" style="text-decoration: none;color:black">--}}
                                    {{--<div>--}}
                                        {{--<item>5</item>--}}
                                        {{--<item class="text-danger"> گزارش</item>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="card-body">--}}
                            {{--<h5 class="card-title">پروژه 1</h5>--}}
                            {{--<div id="summary">--}}
                                {{--<p class="card-text collapse" id="collapseSummary1">--}}
                                    {{--لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان--}}
                                    {{--گرافیک است.--}}
                                {{--</p>--}}
                                {{--<a class="collapsed" data-toggle="collapse" href="#collapseSummary1"--}}
                                   {{--aria-expanded="false"--}}
                                   {{--aria-controls="collapseSummary"></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="d-flex justify-content-between p-0">--}}
                            {{--<alert class="alert alert-danger p-1 m-1">فوری</alert>--}}
                        {{--</div>--}}
                        {{--<div class="card-footer d-flex justify-content-between p-1">--}}
                            {{--<a href="#" class="btn btn-danger">حذف پروژه</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="swiper-slide">--}}
                    {{--<div id="project_card" class="card rtl border-primary">--}}
                        {{--<div class="card-header bg-light p-1">--}}
                            {{--<div class="d-flex justify-content-around">--}}
                                {{--<a href="http://www.google.com" style="text-decoration: none;color:black">--}}
                                    {{--<div>--}}
                                        {{--<item>5</item>--}}
                                        {{--<item class="text-danger"> گزارش</item>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="card-body">--}}
                            {{--<h5 class="card-title">پروژه 1</h5>--}}
                            {{--<div id="summary">--}}
                                {{--<p class="card-text collapse" id="collapseSummary1">--}}
                                    {{--لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان--}}
                                    {{--گرافیک است.--}}
                                {{--</p>--}}
                                {{--<a class="collapsed" data-toggle="collapse" href="#collapseSummary1"--}}
                                   {{--aria-expanded="false"--}}
                                   {{--aria-controls="collapseSummary"></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="d-flex justify-content-between p-0">--}}
                            {{--<alert class="alert alert-danger p-1 m-1">فوری</alert>--}}
                        {{--</div>--}}
                        {{--<div class="card-footer d-flex justify-content-between p-1">--}}
                            {{--<a href="#" class="btn btn-danger">حذف پروژه</a>--}}
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
    <hr>
@endsection