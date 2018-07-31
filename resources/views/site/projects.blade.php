@extends('layouts.app')
@section('content')
    <div class="container rtl">

        <div class="mt-3 site-ads-container">
            <div class="d-flex">
                <h4 class="m-3 ">آخرین پروژه ها</h4>
                <div class="mr-auto"></div>
                <form action="{{route('search-project')}}" method="post">
                    <div class="d-flex justify-content-around mt-3 ">

                        <input name="text" class="form-control w-50 mr-3" placeholder="جستجو">
                        {{csrf_field()}}
                        <button type="submit" class=" btn btn-outline-success ">جستجو</button>
                    </div>
                </form>
            </div>


            <div id="site-projects" class="row p-4">

                @foreach($projects as $project)
                    <div class="col-lg-4 col-md-6">
                        <div id="site-projects_card" class="card rtl mb-3">
                            <div class="card-body">
                                <h5 class="card-title">{{$project->title}}</h5>
                                <div id="summary">
                                    <p class="card-text collapse" id="s{{$project->id}}">
                                        {{$project->description}}

                                    </p>
                                    <a class="collapsed" data-toggle="collapse" href="#s{{$project->id}}"
                                       aria-expanded="false"
                                       aria-controls="collapseSummary"></a>
                                </div>
                            </div>
                            @if($project->is_immediate == 1)
                                <div class="d-flex justify-content-between p-0">
                                    <item></item>
                                    <alert class="alert alert-danger p-1 m-1">فوری</alert>
                                </div>
                            @else
                                <div class="d-flex justify-content-between p-0">
                                    <item></item>
                                    <alert class="hide">فوری</alert>
                                </div>
                            @endif
                            <div class="card-footer d-flex justify-content-between p-1">

                                @php
                                    $user = \Illuminate\Support\Facades\Auth::user();
                                    $cv = $user->cv;
                                @endphp

                                @if($cv !== null)
                                    @if($cv->is_accepted == 1&& $project->user_id!=$user->id)
                                        <button class="btn btn-primary" data-toggle="modal"
                                                data-target="#sendRequestModal" onclick="sendRequest({{$project->id}})">
                                            ارسال درخواست
                                        </button>
                                    @endif
                                @endif

                                <form class="ml-auto d-inline-block" method="post" action="{{route('report-project')}}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="project_id" value="{{$project->id}}">
                                    <input class="form-control btn btn-danger" type="submit" value="گزارش">
                                </form>

                                {{--<a href="#" class="btn btn-danger">گزارش</a>--}}
                            </div>
                        </div>
                    </div>

                @endforeach


            </div>
            <nav class="text-center" aria-label="Page navigation example">
                <ul class="d-inline-block" class="pagination">
                    {{$projects->links()}}
                </ul>
            </nav>
        </div>

    </div>

    </div>
    <!-- Edit Tag Modal -->
    <div class="modal fade rtl" id="sendRequestModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">ارسال درخواست</h5>
                    <button class="close" data-dismiss="modal"><span class="text-light">&times;</span></button>
                </div>
                <form id="request-form" action="{{route('send-request')}}" method="post">
                    {{csrf_field()}}
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="modal-text-project">متن :</label>
                            <textarea id="modal-text-project" type="text" class="form-control" name="description"
                                      value="" placeholder="متن درخواست خود را برای گرفتن پروژه بنویسید..."></textarea>
                            <label for="modal-price-project" class="mt-2 hide">قیمت(تومان):</label>
                            <input name="price" type="text" class="form-control hide"
                                   placeholder="قیمت پیشنهادی شما برای این پروژه">
                            <input id="modal-project-id" type="hidden" name="project_id" value="">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit">ارسال برای کارفرما</button>
                        <button class="btn btn-secondary" data-dismiss="modal">بستن</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection