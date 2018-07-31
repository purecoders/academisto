@extends('layouts.admin')
@section('content')
    <div class="container rtl bg-light pt-2">
        <h3 class="mt-4">آمار مالی سایت <strong class="academisto-brand">آکادمیستو:</strong></h3>
        <div class="row">
            <div class="col-md-6 p-5 text-center">
                <div class="card bg-light  border-danger admin-finance-card-pay">
                    <div class="card-body ">
                        <h4>کل پرداخت های <strong class="academisto-brand">آکادمیستو</strong></h4>
                        <h3 class="admin-finance-price">{{number_format($site_paysSum)}} تومان </h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-5 text-center">
                <div class="card bg-light  border-success admin-finance-card-income">
                    <div class="card-body ">
                        <h4>کل درآمد <strong class="academisto-brand">آکادمیستو</strong></h4>
                        <h3 class="admin-finance-price">{{number_format($paymentsSum)}} تومان </h3>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="mb-4">ریز تراکنش های سایت:</h3>



        <div class="row">
            <div class="col-md-6">
                <h4>پرداخت های کاربران به <strong class="academisto-brand">آکادمیستو</strong> </h4>
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th  class="text-center" scope="col" >ردیف</th>
                        <th  class="text-center" scope="col">کاربر</th>
                        <th  class="text-center" scope="col">تاریخ</th>
                        <th  class="text-center" scope="col">مبلغ(تومان)</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i=0)
                    @foreach($payments as $payment)
                        @php($i++)
                        <tr class="text-center">
                            <th class="text-center" scope="row ">{{$i}}</th>
                            <td>{{$payment->user['email']}}</td>
                            <td>{{$payment->created_at}}</td>
                            <td>{{number_format($payment->amount)}}  </td>

                        </tr>
                    @endforeach






                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <h4>پرداخت های <strong class="academisto-brand">آکادمیستو</strong> به کاربران</h4>
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th  class="text-center" scope="col" >ردیف</th>
                        <th  class="text-center" scope="col" >کاربر</th>
                        <th   class="text-center" scope="col">تاریخ</th>
                        <th class="text-center" scope="col">مبلغ(تومان)</th>

                    </tr>
                    </thead>
                    <tbody>
                    @php($i=0)
                    @foreach($site_pays as $site_pay)
                        @php($i++)
                        <tr class="text-center">
                            <th class="text-center" scope="row ">{{$i}}</th>
                            <td>{{$site_pay->user['email']}}</td>
                            <td>{{$site_pay->created_at}}</td>
                            <td>{{number_format($site_pay->amount)}} تومان </td>
                        </tr>
                    @endforeach



                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection