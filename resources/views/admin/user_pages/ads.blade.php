@extends('admin.user_pages.user_control')
@section('user_info')
    {{--User Ads List--}}
    <section>
        <h5>آخرین آگهی این کاربر:</h5>
        <div class="swiper-container" dir="rtl">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card rtl">
                        <img class="card-img-top  card-img-top-250" src="{{asset('assets/img/logo.png')}}" alt="Card image cap">
                        <div class="card-body pb-1">
                            <h5 class="card-title">کتاب شیمی</h5>
                            <div id="summary">
                                <p class="collapse" id="collapseSummary1">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.

                                </p>
                                <a class="collapsed" data-toggle="collapse" href="#collapseSummary1" aria-expanded="false"
                                   aria-controls="collapseSummary"></a>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush p-0 rtl">
                            <li class="list-group-item">شهر: تهران</li>
                            <li class="list-group-item">دانشگاه: دانشگاه شهید مدنی آذربایجان</li>
                        </ul>
                        <div class="card-footer p-1">
                            <span class="card-info pr-4">قیمت:10000 تومان</span>
                            <a href="#" class="btn btn-danger mr-auto">حذف آگهی</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card rtl">
                        <img class="card-img-top  card-img-top-250" src="{{asset('assets/img/logo.png')}}" alt="Card image cap">
                        <div class="card-body pb-1">
                            <h5 class="card-title">کتاب شیمی</h5>
                            <div id="summary">
                                <p class="collapse" id="collapseSummary2">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.

                                </p>
                                <a class="collapsed" data-toggle="collapse" href="#collapseSummary2" aria-expanded="false"
                                   aria-controls="collapseSummary"></a>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush p-0 rtl">
                            <li class="list-group-item">شهر: تهران</li>
                            <li class="list-group-item">دانشگاه: دانشگاه شهید مدنی آذربایجان</li>
                        </ul>
                        <div class="card-footer p-1">
                            <span class="card-info pr-4">قیمت:10000 تومان</span>
                            <a href="#" class="btn btn-danger mr-auto">حذف آگهی</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card rtl">
                        <img class="card-img-top  card-img-top-250" src="{{asset('assets/img/logo.png')}}" alt="Card image cap">
                        <div class="card-body pb-1">
                            <h5 class="card-title">کتاب شیمی</h5>
                            <div id="summary">
                                <p class="collapse" id="collapseSummary3">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.

                                </p>
                                <a class="collapsed" data-toggle="collapse" href="#collapseSummary3" aria-expanded="false"
                                   aria-controls="collapseSummary"></a>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush p-0 rtl">
                            <li class="list-group-item">شهر: تهران</li>
                            <li class="list-group-item">دانشگاه: دانشگاه شهید مدنی آذربایجان</li>
                        </ul>
                        <div class="card-footer p-1">
                            <span class="card-info pr-4">قیمت:10000 تومان</span>
                            <a href="#" class="btn btn-danger mr-auto">حذف آگهی</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card rtl">
                        <img class="card-img-top  card-img-top-250" src="{{asset('assets/img/logo.png')}}" alt="Card image cap">
                        <div class="card-body pb-1">
                            <h5 class="card-title">کتاب شیمی</h5>
                            <div id="summary">
                                <p class="collapse" id="collapseSummary4">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.

                                </p>
                                <a class="collapsed" data-toggle="collapse" href="#collapseSummary4" aria-expanded="false"
                                   aria-controls="collapseSummary"></a>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush p-0 rtl">
                            <li class="list-group-item">شهر: تهران</li>
                            <li class="list-group-item">دانشگاه: دانشگاه شهید مدنی آذربایجان</li>
                        </ul>
                        <div class="card-footer p-1">
                            <span class="card-info pr-4">قیمت:10000 تومان</span>
                            <a href="#" class="btn btn-danger mr-auto">حذف آگهی</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card rtl">
                        <img class="card-img-top  card-img-top-250" src="{{asset('assets/img/logo.png')}}" alt="Card image cap">
                        <div class="card-body pb-1">
                            <h5 class="card-title">کتاب شیمی</h5>
                            <div id="summary">
                                <p class="collapse" id="collapseSummary5">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.

                                </p>
                                <a class="collapsed" data-toggle="collapse" href="#collapseSummary5" aria-expanded="false"
                                   aria-controls="collapseSummary"></a>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush p-0 rtl">
                            <li class="list-group-item">شهر: تهران</li>
                            <li class="list-group-item">دانشگاه: دانشگاه شهید مدنی آذربایجان</li>
                        </ul>
                        <div class="card-footer p-1">
                            <span class="card-info pr-4">قیمت:10000 تومان</span>
                            <a href="#" class="btn btn-danger mr-auto">حذف آگهی</a>
                        </div>
                    </div>
                </div>
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