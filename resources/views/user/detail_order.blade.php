@extends('layouts.app')
@section('content')
    <div class="container rtl">
        <a href="{{route('user-orders')}}" class="btn btn-secondary mb-1">بازگشت به قسمت پروژه ها</a>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="d-inline-block">عنوان پروژه: </h4>
                        <h4 class="card-title d-inline-block">{{$project->title}}</h4>
                        <h5>توضیحات پروژه</h5>
                        <p class="card-text">
                            {{$project->description}}
                        </p>

                        @if($project_file !== null && $project_file != [])
                            <h5 class="d-inline-block">فایل پیوست شده: </h5>
                            <a class="btn btn-success" href="{{$project_file->url}}">دانلود</a>
                        @endif
                    </div>
                    <div class="card-footer">
                        <item>قیمت(تومان):</item>
                        <item>{{number_format($project->user_price)}}</item>
                    </div>
                </div>

                <div class="alert alert-success mt-2">
                    @php
                        $thisUser = \Illuminate\Support\Facades\Auth::user();
                    @endphp
                    @if($project->user_id == $thisUser->id)
                        @if($project->is_finished == 1)
                            <h4 class="mt-2">پاسخ پروژه شما</h4>
                            <p class="">
                            {{$project->answer->description}}
                        </p>
                            @php
                                $project_answer_file = \App\File::where('project_id', '=', $project->id)->where('is_for_answer', '=', 1)->first();
                            @endphp

                            @if($project_answer_file !== null)
                                <h5 class="mt-2 d-inline-block">فایل پیوست شده برای پروژه شما :</h5><br>
                                <a class="btn btn-success" href="{{$project_answer_file->url}}">دانلود</a>
                            @endif
                        @endif
                    @endif
                </div>

            </div>


            @if($thisUser->id==$project->user_id)
                <div class="col-md-6 bg-light pt-4">

                    <h5 class="pb-4">کاربرانی که برای پروژه شما درخواست داده اند :</h5>
                    <table class="table table-striped">
                        <thead>
                        <tr class="">
                            <th class="text-center" scope="col">#</th>
                            <th class="text-center" scope="col">کاربر</th>
                            <th class="text-center" scope="col">توضیحات</th>
                            <th class="text-center" scope="col">پذیرفتن</th>
                            <th class="text-center" scope="col">رد</th>
                        </tr>
                        </thead>

                        <tbody>

                        @php($i=1)
                        @foreach($requests as $request)
                            <tr @if($request['project_request']['is_accepted'] && $request['project_request']['user_id'] == $request['user']['id'])
                                style="background-color:rgba(66,213,95,0.75);"
                                    @endif
                            >
                                <th scope="row">{{$i}}</th>
                                @php($i++)
                                <td>{{$request['user']['email']}}</td>
                                <td>

                                    {{$request['project_request']['description']}}
                                </td>


                                <td>
                                    @if($project->is_started == 0)
                                        <form class="form-group mr-auto d-inline-block " method="post"
                                              action="{{route('project-request-accept')}}">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="POST">
                                            <input type="hidden" name="project_request_id"
                                                   value="{{$request['project_request']['id']}}">
                                            <input class="form-control btn btn-success" type="submit" value="پذیرفتن">
                                        </form>
                                    @endif

                                    {{--<button class="btn btn-success">پذیرفتن</button>--}}

                                </td>
                                <td>
                                    @if($project->is_started == 0)
                                        <form class="form-group mr-auto d-inline-block" method="post"
                                              action="{{route('project-request-deny')}}">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="post">
                                            <input type="hidden" name="project_request_id"
                                                   value="{{$request['project_request']['id']}}">
                                            <input class="form-control btn btn-danger" type="submit" value="رد">
                                        </form>
                                    @endif
                                    {{--<button class="btn btn-danger">رد</button>--}}
                                </td>

                            </tr>

                            @endforeach


                            </tr>


                        </tbody>
                    </table>

                </div>
            @endif
        </div>
    </div>
@endsection