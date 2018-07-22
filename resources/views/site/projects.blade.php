@extends('layouts.app')
@section('content')
    <div class="container rtl">

        <div class="mt-3 site-ads-container">
            <div class="d-flex">
                <h4 class="m-3 ">آخرین پروژه ها</h4>
                <div class="mr-auto"></div>
                <form action="">
                    <div class="d-flex justify-content-around mt-3 ">

                        <input type="text" class="form-control w-50 mr-3" placeholder="جستجو">
                        <button type="submit" class=" btn btn-outline-success ">جستجو</button>
                    </div>
                </form>
            </div>
            {{--<div class="d-flex bd-highlight mb-3">--}}
            {{--<div class="p-2 bd-highlight">Flex item</div>--}}
            {{--<div class="p-2 bd-highlight">Flex item</div>--}}
            {{--<div class="ml-auto p-2 bd-highlight">Flex item</div>--}}
            {{--</div>--}}

            <div class="row p-4">
                <div class="col-lg-4 col-md-6">
                    <div id="site-projects_card" class="card rtl mb-3">
                        <div class="card-body">
                            <h5 class="card-title">پروژه 1</h5>
                            <div id="summary">
                                <p class="card-text collapse" id="collapseSummary1">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                    برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                                    می باشد.

                                </p>
                                <a class="collapsed" data-toggle="collapse" href="#collapseSummary1"
                                   aria-expanded="false"
                                   aria-controls="collapseSummary"></a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between p-0">
                            <item></item>
                            <alert class="alert alert-danger p-1 m-1">فوری</alert>
                        </div>
                        <div class="card-footer d-flex justify-content-between p-1">
                            <a href="{{route('user-order-edit',1)}}" class="btn btn-primary">ارسال درخواست</a>
                            <a href="#" class="btn btn-danger">گزارش</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div id="site-projects_card" class="card rtl mb-3">
                        <div class="card-body">
                            <h5 class="card-title">پروژه 1</h5>
                            <div id="summary">
                                <p class="card-text collapse" id="collapseSummary1">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                    برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                                    می باشد.

                                </p>
                                <a class="collapsed" data-toggle="collapse" href="#collapseSummary1"
                                   aria-expanded="false"
                                   aria-controls="collapseSummary"></a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between p-0">
                            <item></item>
                            <alert class="alert alert-danger p-1 m-1">فوری</alert>
                        </div>
                        <div class="card-footer d-flex justify-content-between p-1">
                            <a href="{{route('user-order-edit',1)}}" class="btn btn-primary">ارسال درخواست</a>
                            <a href="#" class="btn btn-danger">گزارش</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div id="site-projects_card" class="card rtl mb-3">
                        <div class="card-body">
                            <h5 class="card-title">پروژه 1</h5>
                            <div id="summary">
                                <p class="card-text collapse" id="collapseSummary1">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                    برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                                    می باشد.

                                </p>
                                <a class="collapsed" data-toggle="collapse" href="#collapseSummary1"
                                   aria-expanded="false"
                                   aria-controls="collapseSummary"></a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between p-0">
                            <item></item>
                            <alert class="alert alert-danger p-1 m-1">فوری</alert>
                        </div>
                        <div class="card-footer d-flex justify-content-between p-1">
                            <a href="{{route('user-order-edit',1)}}" class="btn btn-primary">ارسال درخواست</a>
                            <a href="#" class="btn btn-danger">گزارش</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div id="site-projects_card" class="card rtl mb-3">
                        <div class="card-body">
                            <h5 class="card-title">پروژه 1</h5>
                            <div id="summary">
                                <p class="card-text collapse" id="collapseSummary1">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                    برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                                    می باشد.

                                </p>
                                <a class="collapsed" data-toggle="collapse" href="#collapseSummary1"
                                   aria-expanded="false"
                                   aria-controls="collapseSummary"></a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between p-0">
                            <item></item>
                            <alert class="alert alert-danger p-1 m-1">فوری</alert>
                        </div>
                        <div class="card-footer d-flex justify-content-between p-1">
                            <a href="{{route('user-order-edit',1)}}" class="btn btn-primary">ارسال درخواست</a>
                            <a href="#" class="btn btn-danger">گزارش</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div id="site-projects_card" class="card rtl mb-3">
                        <div class="card-body">
                            <h5 class="card-title">پروژه 1</h5>
                            <div id="summary">
                                <p class="card-text collapse" id="collapseSummary1">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                    برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                                    می باشد.

                                </p>
                                <a class="collapsed" data-toggle="collapse" href="#collapseSummary1"
                                   aria-expanded="false"
                                   aria-controls="collapseSummary"></a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between p-0">
                            <item></item>
                            <alert class="alert alert-danger p-1 m-1">فوری</alert>
                        </div>
                        <div class="card-footer d-flex justify-content-between p-1">
                            <a href="{{route('user-order-edit',1)}}" class="btn btn-primary">ارسال درخواست</a>
                            <a href="#" class="btn btn-danger">گزارش</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div id="site-projects_card" class="card rtl mb-3">
                        <div class="card-body">
                            <h5 class="card-title">پروژه 1</h5>
                            <div id="summary">
                                <p class="card-text collapse" id="collapseSummary1">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                    برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                                    می باشد.

                                </p>
                                <a class="collapsed" data-toggle="collapse" href="#collapseSummary1"
                                   aria-expanded="false"
                                   aria-controls="collapseSummary"></a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between p-0">
                            <item></item>
                            <alert class="alert alert-danger p-1 m-1">فوری</alert>
                        </div>
                        <div class="card-footer d-flex justify-content-between p-1">
                            <a href="{{route('user-order-edit',1)}}" class="btn btn-primary">ارسال درخواست</a>
                            <a href="#" class="btn btn-danger">گزارش</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div id="site-projects_card" class="card rtl mb-3">
                        <div class="card-body">
                            <h5 class="card-title">پروژه 1</h5>
                            <div id="summary">
                                <p class="card-text collapse" id="collapseSummary1">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                    برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                                    می باشد.

                                </p>
                                <a class="collapsed" data-toggle="collapse" href="#collapseSummary1"
                                   aria-expanded="false"
                                   aria-controls="collapseSummary"></a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between p-0">
                            <item></item>
                            <alert class="alert alert-danger p-1 m-1">فوری</alert>
                        </div>
                        <div class="card-footer d-flex justify-content-between p-1">
                            <a href="{{route('user-order-edit',1)}}" class="btn btn-primary">ارسال درخواست</a>
                            <a href="#" class="btn btn-danger">گزارش</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div id="site-projects_card" class="card rtl mb-3">
                        <div class="card-body">
                            <h5 class="card-title">پروژه 1</h5>
                            <div id="summary">
                                <p class="card-text collapse" id="collapseSummary1">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                    برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                                    می باشد.

                                </p>
                                <a class="collapsed" data-toggle="collapse" href="#collapseSummary1"
                                   aria-expanded="false"
                                   aria-controls="collapseSummary"></a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between p-0">
                            <item></item>
                            <alert class="alert alert-danger p-1 m-1">فوری</alert>
                        </div>
                        <div class="card-footer d-flex justify-content-between p-1">
                            <a href="{{route('user-order-edit',1)}}" class="btn btn-primary">ارسال درخواست</a>
                            <a href="#" class="btn btn-danger">گزارش</a>
                        </div>
                    </div>
                </div>

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
@endsection