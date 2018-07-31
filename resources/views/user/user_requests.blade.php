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
        @php
            $user = \Illuminate\Support\Facades\Auth::user();
            $cv = $user->cv;
        @endphp
        @if($cv !== null)
            <div class="swiper-container" dir="rtl">
                <div id="user-requests" class="swiper-wrapper">

                    @if($cv->is_accepted == 1)
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
                                            <a class="collapsed" data-toggle="collapse"
                                               href="#sum{{$request['project_request']['id']}}" aria-expanded="false"
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
                                        <a href="{{route('user-order-detail',$request['projects']['id'])}}"
                                           class="py-1 m-1 btn btn-outline-secondary hide">مشاهده جزئیات</a>


                                        @if($request['projects']['is_started'] == 1 && $request['projects']['is_finished'] == 0 && $request['project_request']['is_accepted'] == 1)
                                            {{--<a href="{{route('user-send-project-answer')}}" class="btn btn-primary">ارسال پروژه</a>--}}
                                            <form class="" method="post"
                                                  action="{{route('user-send-project-answer-page')}}">
                                                {{csrf_field()}}
                                                <input type="hidden" name="project_id"
                                                       value="{{$request['projects']['id']}}">
                                                <input type="hidden" name="user_id"
                                                       value="{{$request['project_request']['user_id']}}">
                                                <input class="form-control btn btn-primary" type="submit" value="ارسال پروژه">
                                            </form>
                                        @endif

                                        {{--<a href="#" class="btn btn-danger">لغو درخواست</a>--}}

                                        @if($request['project_request']['is_denied'] == 1)
                                        @elseif($request['projects']['is_finished'] == 1)
                                        @elseif($request['projects']['is_started'] == 1 && $request['project_request']['is_accepted'] == 1 && $request['projects']['is_finished'] == 0)
                                        @else
                                            <form class="ml-auto d-inline-block" method="post"
                                                  action="{{route('project-request.destroy', $request['project_request']['id'])}}">
                                                {{csrf_field()}}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input class="form-control btn btn-danger" type="submit"
                                                       value="لغو درخواست">
                                            </form>
                                        @endif


                                    </div>
                                </div>
                            </div>
                        @endforeach
                </div>
                <!-- Add Pagination -->
                <!-- Add Navigation -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        @elseif($cv->is_accepted == 0)
            <h4 class="alert alert-warning">رزومه شما در حال بررسی است. بعد از تایید رزومه میتوانید اقدام به انجام
                پروژه نمایید</h4>
        @endif
        @else
            <h4 class="alert alert-danger text-dark">برای انجام پروژه باید رزومه خود را ارسال نمایید</h4>
        @endif
    </section>
@endsection