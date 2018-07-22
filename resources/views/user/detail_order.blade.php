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
                    </div>
                    <div class="card-footer">
                        <item>قیمت:</item>
                        <item>{{$project->user_price}}</item>
                    </div>
                </div>
            </div>
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
                            class="bg-success"
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
                                    <form class="form-group mr-auto d-inline-block " method="post" action="{{route('project-request-accept')}}">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="POST">
                                        <input type="hidden" name="project_request_id" value="{{$request['project_request']['id']}}">
                                        <input class="form-control btn btn-success" type="submit" value="پذیرفتن">
                                    </form>
                                    @endif

                                    {{--<button class="btn btn-success">پذیرفتن</button>--}}

                                </td>
                                <td>
                                    @if($project->is_started == 0)
                                    <form class="form-group mr-auto d-inline-block" method="post" action="{{route('project-request-deny')}}">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="post">
                                        <input type="hidden" name="project_request_id" value="{{$request['project_request']['id']}}">
                                        <input class="form-control btn btn-danger" type="submit" value="رد">
                                    </form>
                                    @endif
                                    {{--<button class="btn btn-danger">رد</button>--}}
                                </td>

                        </tr>

                        @endforeach

                    {{--<tr>--}}
                        {{--<th scope="row">1</th>--}}
                        {{--<td>Mark</td>--}}
                        {{--<td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از--}}
                            {{--طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای</td>--}}
                        {{--<td><button class="btn btn-success">پذیرفتن</button></td>--}}
                        {{--<td><button class="btn btn-danger">رد</button></td>--}}
                    {{--</tr>--}}


                    {{--<tr>--}}
                        {{--<th scope="row">2</th>--}}
                        {{--<td>Mark</td>--}}
                        {{--<td>--}}
                            {{--لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از--}}
                            {{--طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای--}}
                        {{--</td>--}}

                        {{--<td><button class="btn btn-success">پذیرفتن</button></td>--}}
                        {{--<td><button class="btn btn-danger">رد</button></td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<th scope="row">3</th>--}}
                        {{--<td>Mark</td>--}}
                        {{--<td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از--}}
                            {{--طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای</td>--}}

                        {{--<td><button class="btn btn-success">پذیرفتن</button></td>--}}
                        {{--<td><button class="btn btn-danger">در</button></td>--}}
                    </tr>


                    </tbody>
                </table>
                {{--<nav>--}}
                    {{--<ul class="pagination justify-content-center">--}}
                        {{--<li class="page-item">--}}
                            {{--<a class="page-link" href="#" aria-label="Previous">--}}
                                {{--<span aria-hidden="true">&laquo;</span>--}}
                                {{--<span class="sr-only">Previous</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="page-item"><a class="page-link" href="#">1</a></li>--}}
                        {{--<li class="page-item"><a class="page-link" href="#">2</a></li>--}}
                        {{--<li class="page-item"><a class="page-link" href="#">3</a></li>--}}
                        {{--<li class="page-item">--}}
                            {{--<a class="page-link" href="#" aria-label="Next">--}}
                                {{--<span aria-hidden="true">&raquo;</span>--}}
                                {{--<span class="sr-only">Next</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</nav>--}}
            </div>
        </div>
    </div>
@endsection