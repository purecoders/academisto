@extends('admin.user_pages.user_control')
@section('user_info')
    {{--User Project Order List--}}
    <section>
        <div class="row">
            <div class="col-md-6">
                <h5>آخرین پروژه هایی که این کاربر سفارش داده است :</h5>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-between">
                    <item><i class="fa fa-circle text-primary"></i> منتشر شده</item>
                    <item><i class="fa fa-circle text-warning"></i> در حال انجام</item>
                    <item><i class="fa fa-circle text-success"></i> تمام شده</item>
                </div>
            </div>

        </div>

        <div id="orders" class="swiper-container" dir="rtl">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                   <div id="project_card" class="card rtl border-primary">
                        <div class="card-body">
                            <h5 class="card-title">پروژه 1</h5>
                            <div id="summary">
                                <p class="card-text collapse" id="collapseSummary1">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                </p>
                                <a class="collapsed" data-toggle="collapse" href="#collapseSummary1" aria-expanded="false"
                                   aria-controls="collapseSummary"></a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between p-0">
                        <a href="{{route('user-order-detail',1)}}" class="py-1 m-1 btn btn-outline-secondary">مشاهده جزئیات</a>
                        <alert class="alert alert-danger p-1 m-1">فوری</alert>
                        </div>
                        <div class="card-footer d-flex justify-content-between p-1">
                            <a href="{{route('user-order-edit',1)}}" class="btn btn-primary">ویرایش پروژه</a>


                            <a href="#" class="btn btn-danger">حذف پروژه</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div id="project_card" class="card rtl border-warning">
                        <div class="card-body">
                            <h5 class="card-title">پروژه 1</h5>
                            <div id="summary">
                                <p class="card-text collapse" id="collapseSummary2">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                </p>
                                <a class="collapsed" data-toggle="collapse" href="#collapseSummary2" aria-expanded="false"
                                   aria-controls="collapseSummary"></a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between p-0">
                            <a href="{{route('user-order-detail',1)}}" class="py-1 m-1 btn btn-outline-secondary">مشاهده جزئیات</a>
                            <alert class="alert alert-danger p-1 m-1 hide">فوری</alert>
                        </div>
                        <div class="card-footer d-flex justify-content-between p-1">
                            <a href="{{route('user-order-edit',1)}}" class="btn btn-primary">ویرایش پروژه</a>
                            <a href="#" class="btn btn-danger">حذف پروژه</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div id="project_card" class="card rtl border-primary">
                        <div class="card-body">
                            <h5 class="card-title">پروژه 1</h5>
                            <div id="summary">
                                <p class="card-text collapse" id="collapseSummary3">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                </p>
                                <a class="collapsed" data-toggle="collapse" href="#collapseSummary3" aria-expanded="false"
                                   aria-controls="collapseSummary"></a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between p-0">
                            <a href="{{route('user-order-detail',1)}}" class="py-1 m-1 btn btn-outline-secondary">مشاهده جزئیات</a>
                            <alert class="alert alert-danger p-1 m-1 hide">فوری</alert>
                        </div>
                        <div class="card-footer d-flex justify-content-between p-1">
                            <a href="{{route('user-order-edit',1)}}" class="btn btn-primary">ویرایش پروژه</a>
                            <a href="#" class="btn btn-danger">حذف پروژه</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div id="project_card" class="card rtl border-success">
                        <div class="card-body">
                            <h5 class="card-title">پروژه 1</h5>
                            <div id="summary">
                                <p class="card-text collapse" id="collapseSummary4">
                                     چاپ و با استفاده از طراحان گرافیک است.
                                </p>
                                <a class="collapsed" data-toggle="collapse" href="#collapseSummary4" aria-expanded="false"
                                   aria-controls="collapseSummary"></a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between p-0">
                            <a href="{{route('user-order-detail',1)}}" class="py-1 m-1 btn btn-outline-secondary">مشاهده جزئیات</a>
                            <alert class="alert alert-danger p-1 m-1">فوری</alert>
                        </div>
                        <div class="card-footer d-flex justify-content-between p-1">
                            <a href="{{route('user-order-edit',1)}}" class="btn btn-primary">ویرایش پروژه</a>
                            <a href="#" class="btn btn-danger">حذف پروژه</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div id="project_card" class="card rtl border-warning">
                        <div class="card-body">
                            <h5 class="card-title">پروژه 1</h5>
                            <div id="summary">
                                <p class="card-text collapse" id="collapseSummary5">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                </p>
                                <a class="collapsed" data-toggle="collapse" href="#collapseSummary5" aria-expanded="false"
                                   aria-controls="collapseSummary"></a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between p-0">
                            <a href="{{route('user-order-detail',1)}}" class="py-1 m-1 btn btn-outline-secondary">مشاهده جزئیات</a>
                            <alert class="alert alert-danger p-1 m-1 hide">فوری</alert>
                        </div>
                        <div class="card-footer d-flex justify-content-between p-1">
                            <a href="{{route('user-order-edit',1)}}" class="btn btn-primary">ویرایش پروژه</a>
                            <a href="#" class="btn btn-danger">حذف پروژه</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <!-- Add Navigation -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>
    <hr>
@endsection