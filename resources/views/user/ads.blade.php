@extends('user.user_panel')
{{--@section('ads')--}}
@section('user_info')
    {{--User Ads List--}}
    <section>
        <h5>آخرین آگهی های شما:</h5>
        <div class="swiper-container" dir="rtl">
            <div id="user-ads" class="swiper-wrapper">


                @foreach($ads as $ad)

                    <div class="swiper-slide">
                        <div class="card rtl">
                            <img class="card-img-top  card-img-top-250" src="{{$ad->photo->path}}" alt="Card image cap">
                            <div class="card-body pb-1">
                                <h5 class="card-title">{{$ad->title}}</h5>
                                <div id="summary">
                                    <p class="collapse" id="sum1{{$ad->id}}">
                                       {{$ad->description}}
                                    </p>
                                    <a class="collapsed" data-toggle="collapse" href="#sum1{{$ad->id}}" aria-expanded="false"
                                       aria-controls="collapseSummary"></a>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush p-0 rtl">
                                <li class="list-group-item">شهر : {{ $ad->city['name']}}</li>
                                <li class="list-group-item list-group-item-uni">دانشگاه : {{$ad->univ['name']}}</li>
                            </ul>
                            <div class="card-footer d-flex p-1">
                                <span class="card-info pr-4">قیمت : {{number_format($ad->price)}}</span>
                                <form class="ml-auto d-inline-block" method="post" action="{{route('ad.destroy', $ad->id)}}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input class="form-control btn btn-danger" type="submit" value="حذف آگهی">
                                </form>

                            </div>
                        </div>
                    </div>

                    @endforeach





            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Navigation -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>
    <hr>
    {{--User Create Ad Form--}}
    <section>
        <h5>ثبت آگهی جدید:</h5>
        <div class="row">
            <div class="col-md-6">
                <form class="rtl" action="{{route('ad.store')}}" method="post"  enctype="multipart/form-data">

                    <div class="form-group row">
                        <label for="inputTitle" class="col-sm-2 col-form-label">عنوان:</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" class="form-control" id="inputTitle"
                                   placeholder="عنوان آگهی">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputDescription" class="col-sm-2 col-form-label">توضیحات:</label>
                        <div class="col-sm-10">
                            <textarea type="text" name="description" class="form-control" id="inputDescription" rows="4"
                                      placeholder="توضیحات آگهی"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPrice" class="col-sm-2 col-form-label">قیمت:</label>
                        <div class="col-sm-10">
                            <input type="number" name="price" class="form-control" id="inputPrice"
                                   placeholder="قیمت (تومان)">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="inputDescription" class="col-sm-2 col-form-label">استان:</label>
                        <div class="col-sm-10">
                            {{--<select class="form-control">--}}
                                {{--<option value=""> انتخاب استان</option>--}}
                            {{--</select>--}}

                            <select id="state" class="form-control" name="state_id">
                                <option value="0"></option>
                                @foreach($states as $state)
                                    <option value="{{$state->id}}">{{$state->name}}</option>
                                @endforeach
                            </select>


                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputDescription" class="col-sm-2 col-form-label">شهر:</label>
                        <div class="col-sm-10">

                            <select id="cities" class="form-control" name="city_id">
                                <option value="0"></option>
                                @foreach($cities as $city)
                                    <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                            </select>


                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputDescription" class="col-sm-2 col-form-label">دانشگاه:</label>
                        <div class="col-sm-10">

                            <select id="uni-select" class="form-control" name="univ_id">
                                <option value="0"></option>
                                @foreach($univs as $univ)
                                    <option  value="{{$univ->id}}">{{$univ->name}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>



                    <div class="form-group row">
                        <label for="adphoto" class="col-sm-2 col-form-label">تصویر: </label>
                        <div class="col-sm-10">
                            <input  accept=".jpg,.jpeg,.png" type="file" class="form-control-file" id="adphoto" name="image">
                        </div>
                    </div>



                    {{csrf_field()}}


                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">ارسال</button>
                        </div>
                    </div>
                </form>


            </div>
            <div class="col-md-6">

            </div>
        </div>

    </section>
@endsection