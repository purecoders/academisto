@extends('layouts.admin')
@section('content')
    <div class="container rtl bg-light p-4">
        <div class="row">
            <div class="col-md-6">
                <h4>کل گزارش های سایت:</h4>
                <table class="table table-sm table-striped table-dark">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">پروژه یا آگهی</th>
                        <th scope="col">تعداد گزارش</th>
                        <th scope="col">مشاهده</th>
                        <th scope="col">حذف</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>سما</td>
                        <td>2</td>
                        <td><a href="" class="btn btn-outline-info">مشاهده</a></td>
                        <td><a href="" class="btn btn-outline-danger">حذف</a></td>

                    </tr>
                    <tr class=" custom-table ">
                        <th scope="row">2</th>
                        <td>ربات</td>
                        <td>4</td>
                        <td><a href="" class="btn btn-outline-info ">مشاهده</a></td>
                        <td><a href="" class="btn btn-outline-danger">حذف</a></td>

                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>نمایشگاه</td>
                        <td>1</td>
                        <td><a href="" class="btn btn-outline-info">مشاهده</a></td>
                        <td><a href="" class="btn btn-outline-danger">حذف</a></td>

                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>نمایشگاه</td>
                        <td>1</td>
                        <td><a href="" class="btn btn-outline-info">مشاهده</a></td>
                        <td><a href="" class="btn btn-outline-danger">حذف</a></td>

                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>نمایشگاه</td>
                        <td>1</td>
                        <td><a href="" class="btn btn-outline-info">مشاهده</a></td>
                        <td><a href="" class="btn btn-outline-danger">حذف</a></td>

                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>نمایشگاه</td>
                        <td>1</td>
                        <td><a href="" class="btn btn-outline-info">مشاهده</a></td>
                        <td><a href="" class="btn btn-outline-danger">حذف</a></td>

                    </tr>  <tr>
                        <th scope="row">3</th>
                        <td>نمایشگاه</td>
                        <td>1</td>
                        <td><a href="" class="btn btn-outline-info">مشاهده</a></td>
                        <td><a href="" class="btn btn-outline-danger">حذف</a></td>

                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>نمایشگاه</td>
                        <td>1</td>
                        <td><a href="" class="btn btn-outline-info">مشاهده</a></td>
                        <td><a href="" class="btn btn-outline-danger">حذف</a></td>

                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>نمایشگاه</td>
                        <td>1</td>
                        <td><a href="" class="btn btn-outline-info">مشاهده</a></td>
                        <td><a href="" class="btn btn-outline-danger">حذف</a></td>

                    </tr>

                    </tbody>
                </table>

            </div>
            <div class="col-md-6">
                <h5>گزارش های آگهی/ پروژه ربات:</h5>
                <table class="table table table-danger table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th class="text-center" scope="col">متن گزارش</th>
                        <th class="text-center" scope="col">تاریخ</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>محتوای نامناسب</td>
                        <td>1397/05/01</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                            تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
                        </td>
                        <td>1396/12/12</td>

                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                            تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
                        </td>
                        <td>1397/08/01</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چو کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
                        </td>
                        <td>1397/02/01</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection