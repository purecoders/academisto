@extends('admin.user_pages.user_control')
@section('user_info')
    <div class="row">
        <div class="col-md-3 mt-2">
            <h5>اطلاعات مالی این کاربر:</h5>
            <form action="">
                <div class="form-group">
                    <lable for="cart-no" > شماره کارت</lable>
                    <input id="card-no" name="cv" class="form-control"  value="5859-8310-9317-3333" disabled>
                </div>
                <div class="form-group">
                    <lable for="account-no"> شماره حساب</lable>
                    <input id="account-no" name="cv" class="form-control" value="492014562" disabled>
                </div>
                <div class="form-group">
                    <lable for="account-name" >نام دارنده حساب</lable>
                    <input id="account-name" name="cv" class="form-control" value="پویا آکلیون" disabled>
                </div>
            </form>
        </div>
        <div class="col-md-7 mt-5 ml-5">
            <div class="d-flex justify-content-start align-items-center">
                <h5 class="d-inline-block mr-3">جمع پرداخت های <strong class="academisto-brand" >آکادمیستو</strong> به محسن:</h5>
                <span class="font-weight-bold strong-font-size admin-price-info p-1">184,500 تومان</span>
            </div>
            <div class="d-flex justify-content-start align-items-center mt-2">
                <h5 class="d-inline-block mr-3">جمع پرداخت های محسن به <strong class="academisto-brand" >آکادمیستو</strong>:</h5>
                <span class="font-weight-bold strong-font-size admin-price-info p-1">98,500 تومان</span>
            </div>

            <div class="d-flex justify-content-start align-items-center mt-5 pt-5 flex-wrap">
                <h5 class="d-inline-block mr-3">جمع مبلغی که باید به محسن پرداخت کنید: </h5>
                <span class="font-weight-bold strong-font-size admin-price-info p-1">140,000 تومان</span>
                <a href="" class="btn btn-outline-success ml-3 ">رفتن به صفحه پرداخت</a>
            </div>

        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <h4>پرداخت های محسن به <strong class="academisto-brand">آکادمیستو</strong> </h4>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th  class="text-center" scope="col" >ردیف</th>
                        <th   class="text-center" scope="col">تاریخ</th>
                        <th class="text-center" scope="col">مبلغ</th>
                        <th class="text-center" scope="col">بابت</th>
                    </tr>
                </thead>
                <tbody>
                <tr class="text-center">
                    <th class="text-center" scope="row ">1</th>
                    <td>96/12/05</td>
                    <td>185000</td>
                    <td>پروژه سما</td>
                </tr>
                <tr class="text-center">
                    <th class="text-center" scope="row ">2</th>
                    <td>96/12/05</td>
                    <td>185000</td>
                    <td>پروژه ربات</td>
                </tr>
                <tr class="text-center">
                    <th class="text-center" scope="row ">3</th>
                    <td>96/12/05</td>
                    <td>185000</td>
                    <td>پروژه ماشین</td>
                </tr>
                <tr class="text-center">
                    <th class="text-center" scope="row ">4</th>
                    <td>96/12/05</td>
                    <td>185000</td>
                    <td>آگهی کتاب</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <h4>پرداخت های <strong class="academisto-brand">آکادمیستو</strong>  به محسن</h4>
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th  class="text-center" scope="col" >ردیف</th>
                    <th   class="text-center" scope="col">تاریخ</th>
                    <th class="text-center" scope="col">مبلغ</th>
                    <th class="text-center" scope="col">بابت</th>

                </tr>
                </thead>
                <tbody>
                <tr class="text-center">
                    <th class="text-center" scope="row ">1</th>
                    <td>96/12/05</td>
                    <td>185000</td>
                    <td>انجام پروژه کتابراه</td>
                </tr>
                <tr class="text-center">
                    <th class="text-center" scope="row ">2</th>
                    <td>96/12/05</td>
                    <td>185000</td>
                    <td>انجام پروژه بامیلو</td>
                </tr>
                <tr class="text-center">
                    <th class="text-center" scope="row ">3</th>
                    <td>96/12/05</td>
                    <td>185000</td>
                    <td>انجام پروژه نمایشگاه</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
