@extends('layouts.app')
@section('content')
    <div class="container rtl">
        <div class="row bg-light site-filer-container">

            <form class="row" id="filter-form" action="{{route('search-ad')}}">
                <div class="col-md-8 d-flex justify-content-start align-items-end">

                    <div class="form-group d-inline-block mr-1">
                        <label for="inputDescription" class=" col-form-label">استان:</label>
                        <select id="state" class="form-control" name="city_id">

                            <option value="0"> </option>
                            @foreach($states as $state)
                                <option value="{{$state->id}}">{{$state->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group d-inline-block mr-1">
                        <label for="inputDescription" class=" col-form-label">شهر:</label>
                        <select id="cities" class="form-control" name="city_id">
                            <option value="0"> </option>
                            @foreach($cities as $city)
                                <option value="{{$city->id}}">{{$city->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group d-inline-block ">
                        <label for="inputDescription" class="col-form-label">دانشگاه:</label>
                        <select id="uni-select" class="form-control" name="univ_id">
                            <option value="0"> </option>
                            @foreach($univs as $univ)
                                <option value="{{$univ->id}}">{{$univ->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center align-items-end mb-3">

                        <item></item>
                        <input type="text" class="form-control w-50 mr-2" placeholder="جستجو">
                        <button type="submit" class="btn btn-outline-success">جستجو</button>
                </div>
            </form>

        </div>
        <div class="mt-3 site-ads-container">
            <h4 class="m-3">آخرین آگهی ها</h4>
            <div class="row p-4">


                @foreach($ads as $ad)

                    <div class="col-lg-4 col-md-6"><div class="card rtl mb-3">
                            <img class="card-img-top  card-img-top-250" src="{{$ad->photo->path}}" alt="Card image cap">
                            <div class="card-body pb-1">
                                <h5 class="card-title">{{$ad->title}}</h5>
                                <div id="summary">
                                    <p class="collapse" id="ad{{$ad->id}}">
                                        {{$ad->description}}
                                    </p>
                                    <a class="collapsed" data-toggle="collapse" href="#ad{{$ad->id}}" aria-expanded="false"
                                       aria-controls="collapseSummary"></a>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush p-0 rtl">
                                @if($ad->city_id != 0)
                                    <li class="list-group-item">شهر: {{$ad->city->name}}</li>
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
                                <span class="card-info pl-2 pt-2 mr-auto">  قیمت: {{number_format($ad->price)}} تومان</span>
                                <form class="form-group mr-auto d-inline-block" method="post" action="{{route('report-ad')}}">
                                    {{csrf_field()}}
                                    <input  type="hidden" name="ad_id" value="{{$ad->id}}">
                                    <input class="form-control btn btn-danger" type="submit" value="گزارش">
                                </form>

                                {{--<a href="#" class="btn btn-danger mr-2">گزارش</a>--}}
                            </div>
                        </div>
                    </div>


                @endforeach

                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        {{$ads->links()}}
                    </ul>
                </nav>





                {{--<div class="col-lg-4 col-md-6"><div class="card rtl mb-3">--}}
                {{--<img class="card-img-top  card-img-top-250" src="assets/img/logo.png" alt="Card image cap">--}}
                {{--<div class="card-body pb-1">--}}
                {{--<h5 class="card-title">کتاب شیمی</h5>--}}
                {{--<div id="summary">--}}
                {{--<p class="collapse" id="collapseSummary5">--}}
                {{--لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.--}}

                {{--</p>--}}
                {{--<a class="collapsed" data-toggle="collapse" href="#collapseSummary5" aria-expanded="false"--}}
                {{--aria-controls="collapseSummary"></a>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<ul class="list-group list-group-flush p-0 rtl">--}}
                {{--<li class="list-group-item">شهر: تهران</li>--}}
                {{--<li class="list-group-item">دانشگاه: دانشگاه شهید مدنی آذربایجان</li>--}}
                {{--</ul>--}}
                {{--<div class="card-footer p-1 d-flex">--}}
                {{--<span class="card-info pl-2 pt-2 mr-auto">قیمت:10000 تومان</span>--}}
                {{--<a href="#" class="btn btn-danger mr-2">گزارش</a>--}}
                {{--</div>--}}
                {{--</div></div>--}}




                {{--<div class="col-lg-4 col-md-6"><div class="card rtl mb-3">--}}
                {{--<img class="card-img-top  card-img-top-250" src="assets/img/logo.png" alt="Card image cap">--}}
                {{--<div class="card-body pb-1">--}}
                {{--<h5 class="card-title">کتاب شیمی</h5>--}}
                {{--<div id="summary">--}}
                {{--<p class="collapse" id="collapseSummary5">--}}
                {{--لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.--}}

                {{--</p>--}}
                {{--<a class="collapsed" data-toggle="collapse" href="#collapseSummary5" aria-expanded="false"--}}
                {{--aria-controls="collapseSummary"></a>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<ul class="list-group list-group-flush p-0 rtl">--}}
                {{--<li class="list-group-item">شهر: تهران</li>--}}
                {{--<li class="list-group-item">دانشگاه: دانشگاه شهید مدنی آذربایجان</li>--}}
                {{--</ul>--}}
                {{--<div class="card-footer p-1 d-flex">--}}
                {{--<span class="card-info pl-2 pt-2 mr-auto">قیمت:10000 تومان</span>--}}
                {{--<a href="#" class="btn btn-danger mr-2">گزارش</a>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}




                {{--<div class="col-lg-4 col-md-6"><div class="card rtl mb-3">--}}
                {{--<img class="card-img-top  card-img-top-250" src="assets/img/logo.png" alt="Card image cap">--}}
                {{--<div class="card-body pb-1">--}}
                {{--<h5 class="card-title">کتاب شیمی</h5>--}}
                {{--<div id="summary">--}}
                {{--<p class="collapse" id="collapseSummary5">--}}
                {{--لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.--}}

                {{--</p>--}}
                {{--<a class="collapsed" data-toggle="collapse" href="#collapseSummary5" aria-expanded="false"--}}
                {{--aria-controls="collapseSummary"></a>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<ul class="list-group list-group-flush p-0 rtl">--}}
                {{--<li class="list-group-item">شهر: تهران</li>--}}
                {{--<li class="list-group-item">دانشگاه: دانشگاه شهید مدنی آذربایجان</li>--}}
                {{--</ul>--}}
                {{--<div class="card-footer p-1 d-flex">--}}
                {{--<span class="card-info pl-2 pt-2 mr-auto">قیمت:10000 تومان</span>--}}
                {{--<a href="#" class="btn btn-danger mr-2">گزارش</a>--}}
                {{--</div>--}}
                {{--</div></div>--}}
                {{--<div class="col-lg-4 col-md-6"><div class="card rtl mb-3">--}}
                {{--<img class="card-img-top  card-img-top-250" src="assets/img/logo.png" alt="Card image cap">--}}
                {{--<div class="card-body pb-1">--}}
                {{--<h5 class="card-title">کتاب شیمی</h5>--}}
                {{--<div id="summary">--}}
                {{--<p class="collapse" id="collapseSummary5">--}}
                {{--لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.--}}

                {{--</p>--}}
                {{--<a class="collapsed" data-toggle="collapse" href="#collapseSummary5" aria-expanded="false"--}}
                {{--aria-controls="collapseSummary"></a>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<ul class="list-group list-group-flush p-0 rtl">--}}
                {{--<li class="list-group-item">شهر: تهران</li>--}}
                {{--<li class="list-group-item">دانشگاه: دانشگاه شهید مدنی آذربایجان</li>--}}
                {{--</ul>--}}
                {{--<div class="card-footer p-1 d-flex">--}}
                {{--<span class="card-info pl-2 pt-2 mr-auto">قیمت:10000 تومان</span>--}}
                {{--<a href="#" class="btn btn-danger mr-2">گزارش</a>--}}
                {{--</div>--}}
                {{--</div></div>--}}
                {{--<div class="col-lg-4 col-md-6"><div class="card rtl mb-3">--}}
                {{--<img class="card-img-top  card-img-top-250" src="assets/img/logo.png" alt="Card image cap">--}}
                {{--<div class="card-body pb-1">--}}
                {{--<h5 class="card-title">کتاب شیمی</h5>--}}
                {{--<div id="summary">--}}
                {{--<p class="collapse" id="collapseSummary5">--}}
                {{--لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.--}}

                {{--</p>--}}
                {{--<a class="collapsed" data-toggle="collapse" href="#collapseSummary5" aria-expanded="false"--}}
                {{--aria-controls="collapseSummary"></a>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<ul class="list-group list-group-flush p-0 rtl">--}}
                {{--<li class="list-group-item">شهر: تهران</li>--}}
                {{--<li class="list-group-item">دانشگاه: دانشگاه شهید مدنی آذربایجان</li>--}}
                {{--</ul>--}}
                {{--<div class="card-footer p-1 d-flex">--}}
                {{--<span class="card-info pl-2 pt-2 mr-auto">قیمت:10000 تومان</span>--}}
                {{--<a href="#" class="btn btn-danger mr-2">گزارش</a>--}}
                {{--</div>--}}
                {{--</div></div>--}}
                {{--<div class="col-lg-4 col-md-6"><div class="card rtl mb-3">--}}
                {{--<img class="card-img-top  card-img-top-250" src="assets/img/logo.png" alt="Card image cap">--}}
                {{--<div class="card-body pb-1">--}}
                {{--<h5 class="card-title">کتاب شیمی</h5>--}}
                {{--<div id="summary">--}}
                {{--<p class="collapse" id="collapseSummary5">--}}
                {{--لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.--}}

                {{--</p>--}}
                {{--<a class="collapsed" data-toggle="collapse" href="#collapseSummary5" aria-expanded="false"--}}
                {{--aria-controls="collapseSummary"></a>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<ul class="list-group list-group-flush p-0 rtl">--}}
                {{--<li class="list-group-item">شهر: تهران</li>--}}
                {{--<li class="list-group-item">دانشگاه: دانشگاه شهید مدنی آذربایجان</li>--}}
                {{--</ul>--}}
                {{--<div class="card-footer p-1 d-flex">--}}
                {{--<span class="card-info pl-2 pt-2 mr-auto">قیمت:10000 تومان</span>--}}
                {{--<a href="#" class="btn btn-danger mr-2">گزارش</a>--}}
                {{--</div>--}}
                {{--</div></div>--}}
                {{--<div class="col-lg-4 col-md-6"><div class="card rtl mb-3">--}}
                {{--<img class="card-img-top  card-img-top-250" src="assets/img/logo.png" alt="Card image cap">--}}
                {{--<div class="card-body pb-1">--}}
                {{--<h5 class="card-title">کتاب شیمی</h5>--}}
                {{--<div id="summary">--}}
                {{--<p class="collapse" id="collapseSummary5">--}}
                {{--لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.--}}

                {{--</p>--}}
                {{--<a class="collapsed" data-toggle="collapse" href="#collapseSummary5" aria-expanded="false"--}}
                {{--aria-controls="collapseSummary"></a>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<ul class="list-group list-group-flush p-0 rtl">--}}
                {{--<li class="list-group-item">شهر: تهران</li>--}}
                {{--<li class="list-group-item">دانشگاه: دانشگاه شهید مدنی آذربایجان</li>--}}
                {{--</ul>--}}
                {{--<div class="card-footer p-1 d-flex">--}}
                {{--<span class="card-info pl-2 pt-2 mr-auto">قیمت:10000 تومان</span>--}}
                {{--<a href="#" class="btn btn-danger mr-2">گزارش</a>--}}
                {{--</div>--}}
                {{--</div></div>--}}

            </div>


        </div>
    </div>
@endsection