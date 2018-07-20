@extends('user.user_panel')
@section('ads')
    {{--User Ads List--}}
    <section>
        <h5>آخرین آگهی های شما:</h5>
        <div class="swiper-container" dir="rtl">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card">
                        <img class="card-img-top  card-img-top-250" src="assets/img/logo.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">کتاب شیمی</h5>
                            <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                از
                                طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله</p>
                            <a href="#" class="btn btn-danger">حذف آگهی</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <img class="card-img-top  card-img-top-250" src="assets/img/logo.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">کتاب شیمی</h5>
                            <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                از
                                طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله</p>
                            <a href="#" class="btn btn-danger">حذف آگهی</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <img class="card-img-top  card-img-top-250" src="assets/img/logo.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">کتاب شیمی</h5>
                            <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                از
                                طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله</p>
                            <a href="#" class="btn btn-danger">حذف آگهی</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <img class="card-img-top  card-img-top-250" src="assets/img/logo.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">کتاب شیمی</h5>
                            <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                از
                                طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله</p>
                            <a href="#" class="btn btn-danger">حذف آگهی</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <img class="card-img-top  card-img-top-250" src="assets/img/logo.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">کتاب شیمی</h5>
                            <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                از
                                طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله</p>
                            <a href="#" class="btn btn-danger">حذف آگهی</a>
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
    {{--User Create Ad Form--}}
    <section>
        <h5>ثبت آگهی جدید:</h5>
        <div class="row">
            <div class="col-md-6">
                <form class="rtl">
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
                            <input type="text" name="decs" class="form-control" id="inputDescription"
                                   placeholder="توضیحات آگهی">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputDescription" class="col-sm-2 col-form-label">استان:</label>
                        <div class="col-sm-10">
                            <select class="form-control">
                                <option value=""> انتخاب استان</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputDescription" class="col-sm-2 col-form-label">شهر:</label>
                        <div class="col-sm-10">
                            <select class="form-control">
                                <option value=""> انتخاب شهر</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputDescription" class="col-sm-2 col-form-label">دانشگاه:</label>
                        <div class="col-sm-10">
                            <select class="form-control">
                                <option value=""> انتخاب دانشگاه</option>
                            </select>
                        </div>
                    </div>



                    <div class="form-group row">
                        <label for="adphoto" class="col-sm-2 col-form-label">تصویر: </label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control-file" id="adphoto" name="ad-photo">
                        </div>
                    </div>

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