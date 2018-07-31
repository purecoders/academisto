@extends('layouts.app')
@section('content')
    <div class="container rtl">
        <div class="row bg-light site-filer-container">

            <form class="row" id="filter-form" action="{{route('search-ad')}}">
                <div class="col-md-6 d-flex ">
                    <div class="form-group d-inline-block mr-1">
                        <label for="inputDescription" class=" col-form-label">استان:</label>
                        <select id="state" class="form-control" name="city_id">
                            <option value="0"></option>
                            @foreach($states as $state)
                                <option value="{{$state->id}}">{{$state->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group d-inline-block mr-1">
                        <label for="inputDescription" class=" col-form-label">شهر:</label>
                        <select id="cities" class="form-control" name="city_id">
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
                            <span></span>
                            <span></span>
                        </div>
                    </div>
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
                                     <li class="list-group-item list-group-item-uni ">دانشگاه: {{$ad->univ->name}}</li>
                                @else
                                     <li class="list-group-item list-group-item-uni">دانشگاه:</li>
                                @endif
                            </ul>
                            <div class="card-footer p-1 d-flex">
                                <span class="card-info pl-2 pt-2 mr-auto">  قیمت: {{number_format($ad->price)}} تومان</span>



                                <form class=" ml-auto d-inline-block" method="post" action="{{route('report-ad')}}">
                                    {{csrf_field()}}
                                    <input  type="hidden" name="ad_id" value="{{$ad->id}}">
                                    <input class="form-control btn btn-danger" type="submit" value="گزارش">
                                </form>

                                {{--<a href="#" class="btn btn-danger mr-2">گزارش</a>--}}
                            </div>
                        </div>
                    </div>


                @endforeach


            </div>
            <nav class="text-center"   aria-label="Page navigation example">
                <ul class="d-inline-block" class="pagination">
                    {{$ads->links()}}
                </ul>
            </nav>
        </div>
    </div>
@endsection