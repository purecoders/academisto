@extends('layouts.admin')
@section('content')
    <div class="container rtl">
        <div class="mt-3 site-ads-container">
            <div class="d-flex">
                <h4 class="m-3 ">آخرین پروژه ها</h4>
                <div class="mr-4"></div>
                <form action="">
                    <div class="d-flex justify-content-around mt-3 ">

                        <input type="text" class="form-control w-50 mr-3" placeholder="جستجو">
                        <button type="submit" class=" btn btn-outline-success ">جستجو</button>
                    </div>
                </form>
                <form action="">
                    <div class="d-flex justify-content-around mt-3 ">

                        <input type="text" class="form-control w-50 mr-3" placeholder="بر اساس نام کارفرما">
                        <button type="submit" class=" btn btn-outline-success ">جستجو</button>
                    </div>
                </form>
                <div class="d-flex align-self-center ml-4">
                    <div>
                        <itm>تعدا کل پروژها:</itm>
                        <itm>150</itm>
                    </div>
                </div>
            </div>

            <div class="row p-4">
                <div class="col-lg-4 col-md-6">
                    <div id="site-projects_card" class="card rtl mb-3">
                        <div class="card-header bg-light">
                            <div class="d-flex justify-content-around">
                                <a href="" style="text-decoration: none;color:black">
                                    <div class="card-header-icon">
                                        <item><i class="fa fa-user-circle "></i></item>
                                        <item>محسن</item>
                                    </div>
                                </a>
                                <a href="http://www.google.com" style="text-decoration: none;color:black">
                                    <div class="card-header-icon">
                                        <item >5</item>
                                        <item class="text-danger" > گزارش </item>
                                    </div>
                                </a>
                            </div>
                        </div>
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
                        <div class="card-footer d-flex  p-1 align-items-start">

                            <a href="#" class="btn btn-danger">حذف</a>
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
                            <label for="modal-price-project" class="mt-2">قیمت:</label>
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