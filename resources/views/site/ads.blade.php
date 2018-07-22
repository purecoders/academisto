@extends('layouts.app')
@section('content')
    <div class="container rtl">
        <div class="row bg-light site-filer-container">
            <div class="col-md-6">

                <form id="filter-form" action="" >
                    <div class="form-group d-inline-block">
                        <label for="inputDescription" class=" col-form-label">شهر:</label>

                        <select id="city-select" class="form-control">
                            <option value="">انتخاب شهر</option>
                            <option value="تبریز">تبریز</option>
                            <option value="ماکو">ماکو</option>
                        </select>
                    </div>
                    <div class="form-group d-inline-block ">
                        <label for="inputDescription" class="col-form-label">دانشگاه:</label>

                        <select id="uni-select" class="form-control">
                            <option value="">انتخاب دانشگاه</option>
                            <option value="دانشگاه آذربایجان">دانشگاه آذربایجان</option>
                            <option value="دانشگاه تبریز">دانشگاه تبریز</option>
                        </select>

                    </div>
                    <input onclick="clickFilter()" type="submit" class="btn" value="فیلتر">
                </form>
            </div>
            <div class="col-md-6">
                <form action="">
                    <div class="d-flex justify-content-end mt-4 pt-3">
                        <item></item>
                        <input type="text" class="form-control w-50 mr-2" placeholder="جستجو">
                        <button type="submit" class=" btn btn-outline-success ">جستجو</button>
                    </div>
                </form>
            </div>

        </div>
        <div class="mt-3 site-ads-container">
            <h4 class="m-3">آخرین آگهی ها</h4>
            <div class="row p-4">
                <div class="col-lg-4 col-md-6"><div class="card rtl mb-3">
                        <img class="card-img-top  card-img-top-250" src="assets/img/logo.png" alt="Card image cap">
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
                        <div class="card-footer p-1 d-flex">
                            <span class="card-info pl-2 pt-2 mr-auto">قیمت:10000 تومان</span>
                            <a href="#" class="btn btn-danger mr-2">گزارش</a>
                        </div>
                    </div></div>
                <div class="col-lg-4 col-md-6"><div class="card rtl mb-3">
                        <img class="card-img-top  card-img-top-250" src="assets/img/logo.png" alt="Card image cap">
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
                        <div class="card-footer p-1 d-flex">
                            <span class="card-info pl-2 pt-2 mr-auto">قیمت:10000 تومان</span>
                            <a href="#" class="btn btn-danger mr-2">گزارش</a>
                        </div>
                    </div></div>
                <div class="col-lg-4 col-md-6"><div class="card rtl mb-3">
                        <img class="card-img-top  card-img-top-250" src="assets/img/logo.png" alt="Card image cap">
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
                        <div class="card-footer p-1 d-flex">
                            <span class="card-info pl-2 pt-2 mr-auto">قیمت:10000 تومان</span>
                            <a href="#" class="btn btn-danger mr-2">گزارش</a>
                        </div>
                    </div></div>
                <div class="col-lg-4 col-md-6"><div class="card rtl mb-3">
                        <img class="card-img-top  card-img-top-250" src="assets/img/logo.png" alt="Card image cap">
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
                        <div class="card-footer p-1 d-flex">
                            <span class="card-info pl-2 pt-2 mr-auto">قیمت:10000 تومان</span>
                            <a href="#" class="btn btn-danger mr-2">گزارش</a>
                        </div>
                    </div></div>
                <div class="col-lg-4 col-md-6"><div class="card rtl mb-3">
                        <img class="card-img-top  card-img-top-250" src="assets/img/logo.png" alt="Card image cap">
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
                        <div class="card-footer p-1 d-flex">
                            <span class="card-info pl-2 pt-2 mr-auto">قیمت:10000 تومان</span>
                            <a href="#" class="btn btn-danger mr-2">گزارش</a>
                        </div>
                    </div></div>
                <div class="col-lg-4 col-md-6"><div class="card rtl mb-3">
                        <img class="card-img-top  card-img-top-250" src="assets/img/logo.png" alt="Card image cap">
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
                        <div class="card-footer p-1 d-flex">
                            <span class="card-info pl-2 pt-2 mr-auto">قیمت:10000 تومان</span>
                            <a href="#" class="btn btn-danger mr-2">گزارش</a>
                        </div>
                    </div></div>
                <div class="col-lg-4 col-md-6"><div class="card rtl mb-3">
                        <img class="card-img-top  card-img-top-250" src="assets/img/logo.png" alt="Card image cap">
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
                        <div class="card-footer p-1 d-flex">
                            <span class="card-info pl-2 pt-2 mr-auto">قیمت:10000 تومان</span>
                            <a href="#" class="btn btn-danger mr-2">گزارش</a>
                        </div>
                    </div></div>
                <div class="col-lg-4 col-md-6"><div class="card rtl mb-3">
                        <img class="card-img-top  card-img-top-250" src="assets/img/logo.png" alt="Card image cap">
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
                        <div class="card-footer p-1 d-flex">
                            <span class="card-info pl-2 pt-2 mr-auto">قیمت:10000 تومان</span>
                            <a href="#" class="btn btn-danger mr-2">گزارش</a>
                        </div>
                    </div></div>

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
