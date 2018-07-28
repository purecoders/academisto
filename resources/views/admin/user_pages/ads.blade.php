@extends('admin.user_pages.user_control')
@section('user_info')
    {{--User Ads List--}}
    <section>
        <h5>آخرین آگهی این کاربر:</h5>
        <div class="swiper-container" dir="rtl">
            <div class="swiper-wrapper">

                @foreach($ads as $ad)
                    <div class="swiper-slide">
                        <div class="card rtl">
                            <div class="card-header bg-light p-1">
                                <div class="d-flex justify-content-around">
                                    <a href="http://www.google.com" style="text-decoration: none;color:black" class="hide">
                                        <div >
                                            <item >{{$ad->reports->count()}}</item>
                                            <item class="text-danger" > گزارش </item>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <img class="card-img-top  card-img-top-250" src="{{asset('assets/img/logo.png')}}" alt="Card image cap">
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
                                @if($ad->city !== null)
                                    <li class="list-group-item">شهر: {{$ad->city->name}}</li>
                                @else
                                    <li class="list-group-item ">شهر: </li>
                                @endif
                                @if($ad->univ !== null)
                                    <li class="list-group-item">دانشگاه: {{$ad->univ->name}}</li>
                                @else
                                    <li class="list-group-item ">دانشگاه: </li>
                                @endif
                            </ul>
                            <div class="card-footer p-1 d-flex">

                                <span class="card-info pl-2 pt-2 mr-auto">قیمت:{{number_format($ad->price)}} تومان</span>
                                <form class="btn btn-danger mr-2" method="post" action="{{route('admin-remove-user-ad')}}">
                                    {{csrf_field()}}
                                    <input  type="hidden" name="ad_id" value="{{$ad->id}}">
                                    <input  type="hidden" name="user_id" value="{{$user->id}}">
                                    <input class="btn btn-danger mr-2" type="submit" value="حذف">
                                </form>

                                {{--<a href="#" class="btn btn-danger mr-2">حذف</a>--}}
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

@endsection