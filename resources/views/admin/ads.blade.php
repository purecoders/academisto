@extends('layouts.admin')
@section('content')
    <div class="container rtl">
        <div class="row bg-light site-filer-container">

            <form class="row" id="filter-form" action="{{route('admin-search-ads')}}">
                <div class="col-md-6 d-flex ">


                    <div class="form-group d-inline-block mr-1">
                        <label for="inputDescription" class=" col-form-label">استان:</label>
                        <select id="city-state" class="form-control" name="city_id">
                            <option value="0"></option>
                            @foreach($states as $state)
                                <option value="{{$state->id}}">{{$state->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group d-inline-block mr-1">
                        <label for="inputDescription" class=" col-form-label">شهر:</label>
                        <select id="city-select" class="form-control" name="city_id">
                            <option value="0"></option>
                            @foreach($cities as $city)
                                <option value="{{$city->id}}">{{$city->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group d-inline-block ">
                        <label for="inputDescription" class="col-form-label">دانشگاه:</label>
                        <select id="uni-select" class="form-control" name="univ_id">
                            <option value="0"></option>
                            @foreach($univs as $univ)
                                <option value="{{$univ->id}}">{{$univ->name}}</option>
                            @endforeach
                        </select>
                    </div>


                </div>
                <div class="col-md-6 d-flex justify-content-start align-items-end mb-3">
                    <input type="text" class="form-control w-50 mr-2" placeholder="جستجو">
                    <button type="submit" class="btn btn-outline-success">جستجو</button>

                    <div class="d-flex align-self-end ml-4">
                        <div>
                            <itm>تعدا کل آگهی ها:</itm>
                            <itm>{{$ads->count()}}</itm>
                        </div>
                    </div>
                </div>
            </form>

            {{--<div class="col-md-6 d-flex justify-content-start ">--}}
            {{--<item></item>--}}
            {{--<input type="text" class="form-control w-50 mr-2 hide" placeholder=" بر اساس نام کاربر">--}}
            {{--<button type="submit" class="btn btn-outline-success hide">جستجو</button>--}}
            {{--</div>--}}
        </div>
        <div class="mt-3 site-ads-container">
            <h4 class="m-3">آخرین آگهی ها</h4>
            <div class="row p-4">

                @foreach($ads as $ad)
                    <div class="col-lg-4 col-md-6">
                        <div class="card rtl mb-3">
                            <div class="card-header bg-light ">
                                <div class="d-flex justify-content-around">
                                    <a href="{{route('admin-user-profile', $ad->user_id)}}"
                                       style="text-decoration: none;color:black">
                                        <div class="card-header-icon">
                                            <item><i class="fa fa-user-circle "></i></item>
                                            <item>{{$ad->user->name}}</item>
                                        </div>
                                    </a>
                                    {{--<a href="http://www.google.com" style="text-decoration: none;color:black">--}}
                                    <div class="card-header-icon">
                                        <item class="">   {{$ad->reports->count()}} </item>
                                        <item class="text-danger "> گزارش</item>
                                    </div>
                                    {{--</a>--}}
                                </div>
                            </div>
                            <img class="card-img-top  card-img-top-250" src="{{asset($ad->photo->path)}}"
                                 alt="Card image cap">
                            <div class="card-body pb-1">
                                <h5 class="card-title">{{$ad->title}}</h5>
                                <div id="summary">
                                    <p class="collapse" id="ad{{$ad->id}}">
                                        {{$ad->description}}
                                    </p>
                                    <a class="collapsed" data-toggle="collapse" href="#ad{{$ad->id}}"
                                       aria-expanded="false"
                                       aria-controls="collapseSummary"></a>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush p-0 rtl">
                                @if($ad->city_id != 0)
                                    <li class="list-group-item"> شهر: {{$ad->city->name}} </li>
                                @else
                                    <li class="list-group-item">شهر:</li>
                                @endif

                                @if($ad->univ_id != 0)
                                    <li class="list-group-item">دانشگاه: {{$ad->univ->name}}</li>
                                @else
                                    <li class="list-group-item">دانشگاه:</li>
                                @endif

                            </ul>
                            <div class="card-footer p-1 d-flex">
                                <span class="card-info pl-2 pt-2 mr-auto">  قیمت: {{$ad->price}} تومان</span>
                                <form action="{{route('admin-remove-ads')}}" method="post">
                                    {{csrf_field()}}
                                    <input type="hidden" name="ad_id" value="{{$ad->id}}"/>
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
@endsection