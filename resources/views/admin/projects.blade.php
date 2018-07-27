@extends('layouts.admin')
@section('content')
    <div class="container rtl">
        <div class="mt-3 site-ads-container">
            <div class="d-flex">
                <h4 class="m-3 ">آخرین پروژه ها</h4>
                <div class="mr-4"></div>
                <form action="{{route('admin-search-project')}}" method="post">
                    <div class="d-flex justify-content-around mt-3 ">

                        <input name="text" class="form-control w-50 mr-3" placeholder="جستجو">
                        <button type="submit" class=" btn btn-outline-success ">جستجو</button>
                    </div>
                    {{csrf_field()}}
                </form>

                <form action="" class="hide">
                    <div class="d-flex justify-content-around mt-3 ">

                        <input type="text" class="form-control w-50 mr-3 hide" placeholder="بر اساس نام کارفرما">
                        <button type="submit" class=" btn btn-outline-success hide">جستجو</button>
                    </div>
                </form>
                <div class="d-flex align-self-center ml-4">
                    <div>
                        <itm>تعدا کل پروژها:</itm>
                        <itm>{{$projects->count()}}</itm>
                    </div>
                </div>
            </div>

            <div class="row p-4">
                @foreach($projects as $project)
                    <div class="col-lg-4 col-md-6">
                        <div id="site-projects_card" class="card rtl mb-3">
                            <div class="card-header bg-light">
                                <div class="d-flex justify-content-around">


                                    <form action="{{route('admin-user-profile')}}" method="post" style="text-decoration: none;color:black">
                                        {{csrf_field()}}
                                        <input type="hidden" name="user_id" value="{{$project->user_id}}"/>


                                        <div class="card-header-icon">
                                            <item><i class="fa fa-user-circle "></i></item>
                                            <input style="text-decoration: none;color:black" type="submit"  value="{{$project->user->email}}"/>
                                        </div>

                                        {{--<a href="{{route('admin-user-profile', $ad->user_id)}}" style="text-decoration: none;color:black">--}}
                                        {{--<item type="submit">{{$ad->user->name}}</item>--}}
                                        {{--</a>--}}

                                    </form>



                                    {{--<a href="http://www.google.com" style="text-decoration: none;color:black">--}}
                                        <div class="card-header-icon">
                                            <item >{{$project->reports->count()}}</item>
                                            <item class="text-danger" > گزارش </item>
                                        </div>
                                    {{--</a>--}}



                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{$project->title}}</h5>
                                <div id="summary">
                                    <p class="card-text collapse" id="prj{{$project->id}}">
                                        {{$project->description}}
                                    </p>
                                    <a class="collapsed" data-toggle="collapse" href="#prj{{$project->id}}"
                                       aria-expanded="false"
                                       aria-controls="collapseSummary"></a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between p-0">
                                <item></item>
                                @if($project->is_immediate == 1)
                                     <alert class="alert alert-danger p-1 m-1">فوری</alert>
                                @else
                                        <alert class="alert alert-danger p-1 m-1 hide"></alert>
                                @endif
                            </div>
                            <div class="card-footer d-flex  p-1 align-items-start">

                                {{--<a href="#" class="btn btn-danger">حذف</a>--}}

                                <form action="{{route('admin-remove-project')}}" method="post">
                                    {{csrf_field()}}
                                    <input type="hidden" name="project_id" value="{{$project->id}}"/>
                                    <input type="submit" class="btn btn-danger mr-2" value="حذف"/>
                                </form>

                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
            <nav>
                <ul class="pagination justify-content-center p-1">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
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
                <form id="request-form" action="" method="post">
                    {{csrf_field()}}
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="modal-text-project">متن :</label>
                            <input id="project_id" type="hidden" value="" name="project_id">
                            <textarea id="modal-text-project" type="text" class="form-control" name="name" value="" placeholder="متن درخواست خود را برای گرفتن پروژه بنویسید..."></textarea>
                            <label for="modal-price-project" class="mt-2">قیمت(تومان):</label>
                            <input type="text" class="form-control" placeholder="قیمت پیشنهادی شما برای این پروژه">
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
@endsection