@extends('layouts.admin')
@section('content')
    <div class="container rtl bg-light pt-2">
        <h3 class="mt-4">آمار مالی سایت <strong class="academisto-brand">آکادمیستو:</strong></h3>
        <div class="row">
            <div class="col-md-6 p-5 text-center">
                <div class="card bg-light  border-danger admin-finance-card-pay">
                    <div class="card-body ">
                        <h4>کل پرداخت <strong class="academisto-brand">آکادمیستو</strong></h4>
                        <h3 class="admin-finance-price">19,254,000</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-5 text-center">
                <div class="card bg-light  border-success admin-finance-card-income">
                    <div class="card-body ">
                        <h4>کل درآمد <strong class="academisto-brand">آکادمیستو</strong></h4>
                        <h3 class="admin-finance-price">87,627,000</h3>
                    </div>
                </div>
            </div>
        </div>
        <h3>ریز تراکنش های سایت:</h3>
        <div class="row ">
            <div id="admin-finance" class="col-md-10 m-auto">
                <table  class="table table-sm">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">کاربر</th>
                        <th scope="col">مبلغ</th>
                        <th scope="col">بابت</th>
                        <th scope="col">تاریخ</th>
                        <th scope="col">اطلاعات مالی کاربر</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="table-success spacer">
                        <th scope="row">1</th>
                        <td>محسن</td>
                        <td class="farsi-digits">15,000+</td>
                        <td>درج آگهی</td>
                        <td class="farsi-digits">96/12/02</td>
                        <td><a href="{{route('admin-user-finance')}}" class="btn btn-outline-info">مشاهده اطلاعات مالی</a></td>
                    </tr>

                    <tr class="table-success">
                        <th scope="row">2</th>
                        <td>علی</td>
                        <td class="farsi-digits">18,000+</td>
                        <td>درج آگهی</td>
                        <td class="farsi-digits">96/12/01</td>
                        <td><a href="{{route('admin-user-finance')}}" class="btn btn-outline-info">مشاهده اطلاعات مالی</a></td>
                    </tr>
                    <tr class="table-danger">
                        <th scope="row">4</th>
                        <td>پویا</td>
                        <td class="farsi-digits">184,000-</td>
                        <td>انجام پروژه</td>
                        <td class="farsi-digits">95/12/02</td>
                        <td><a href="{{route('admin-user-finance')}}" class="btn btn-outline-info">مشاهده اطلاعات مالی</a></td>
                    </tr>
                    <tr class="table-success">
                        <th scope="row">5</th>
                        <td>مهدی</td>
                        <td class="farsi-digits">15000+</td>
                        <td>درج آگهی</td>
                        <td class="farsi-digits">96/02/24</td>
                        <td><a href="{{route('admin-user-finance')}}" class="btn btn-outline-info">مشاهده اطلاعات مالی</a></td>
                    </tr>
                    <tr class="table-success">
                        <th scope="row">6</th>
                        <td>حسن</td>
                        <td class="farsi-digits">15000+</td>
                        <td>درج آگهی</td>
                        <td class="farsi-digits">96/12/02</td>
                        <td><a href="{{route('admin-user-finance')}}" class="btn btn-outline-info">مشاهده اطلاعات مالی</a></td>
                    </tr>
                    <tr class="table-danger">
                        <th scope="row">7</th>
                        <td>امین</td>
                        <td class="farsi-digits">150,000-</td>
                        <td>انجام پروژه</td>
                        <td class="farsi-digits">97/04/14</td>
                        <td><a href="{{route('admin-user-finance')}}" class="btn btn-outline-info">مشاهده اطلاعات مالی</a></td>
                    </tr>
                    <tr class="table-success">
                        <th scope="row">8</th>
                        <td>محسن</td>
                        <td class="farsi-digits">15000+</td>
                        <td>درج آگهی</td>
                        <td class="farsi-digits">96/12/02</td>
                        <td><a href="{{route('admin-user-finance')}}" class="btn btn-outline-info">مشاهده اطلاعات مالی</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection