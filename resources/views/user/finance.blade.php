@extends('user.user_panel')
@section('user_info')
    <div class="row">
        <h5>اطلاعات مالی خود را وارد کنید:</h5>

        <div class="col-md-6 mt-3">
            <form action="{{route('user-finance-update')}}" method="post">
                <div class="form-group">
                    <lable for="cart-no" > شماره کارت</lable>
                    <input  id="card-no" value="@if($userFullInfo){{$userFullInfo->bank_card_id}}@endif" name="bank_card_id" class="form-control" placeholder="شماره کارت خود را بنویسید">
                </div>
                <div class="form-group">
                    <lable for="account-no"> شماره حساب</lable>
                    <input id="account-no" value="@if($userFullInfo){{$userFullInfo->bank_account_id}}@endif" name="bank_account_id" class="form-control" placeholder=" شماره حساب خود را بنویسید">
                </div>
                <div class="form-group">
                    <lable for="account-name" >به نام</lable>
                    <input id="account-name" value="@if($userFullInfo){{$userFullInfo->bank_account_owner_name}}@endif" name="bank_account_owner_name" class="form-control" placeholder="نام دارنده حساب را بنویسید">
                </div>

                {{csrf_field()}}
                <input type="submit" class="form-control btn btn-primary" value="ارسال ">
            </form>
        </div>
        <div class="col-md-6"></div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <h4>پرداخت های شما به <strong class="academisto-brand">آکادمیستو</strong> </h4>
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th  class="text-center" scope="col" >ردیف</th>
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
                        <td>{{$payment->created_at}}</td>
                        <td>{{number_format($payment->amount)}}</td>
                    </tr>
                @endforeach
                {{--<tr class="text-center">--}}
                    {{--<th class="text-center" scope="row ">2</th>--}}
                    {{--<td>96/12/05</td>--}}
                    {{--<td>185000</td>--}}
                {{--</tr>--}}
                {{--<tr class="text-center">--}}
                    {{--<th class="text-center" scope="row ">3</th>--}}
                    {{--<td>96/12/05</td>--}}
                    {{--<td>185000</td>--}}
                {{--</tr>--}}

                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <h4>پرداخت های <strong class="academisto-brand">آکادمیستو</strong>  به شما</h4>
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th  class="text-center" scope="col" >ردیف</th>
                    <th   class="text-center" scope="col">تاریخ</th>
                    <th class="text-center" scope="col">مبلغ(تومان)</th>
                </tr>
                </thead>
                <tbody>
                @php($i=0)
                @foreach($received_payments as $payment)
                    @php($i++)
                    <tr class="text-center">
                        <th class="text-center" scope="row ">{{$i}}</th>
                        <td>{{$payment->created_at}}</td>
                        <td>{{number_format($payment->amount)}}</td>
                    </tr>
                @endforeach

                {{--<tr class="text-center">--}}
                    {{--<th class="text-center" scope="row ">2</th>--}}
                    {{--<td>96/12/05</td>--}}
                    {{--<td>185000</td>--}}
                {{--</tr>--}}
                {{--<tr class="text-center">--}}
                    {{--<th class="text-center" scope="row ">3</th>--}}
                    {{--<td>96/12/05</td>--}}
                    {{--<td>185000</td>--}}
                {{--</tr>--}}

                </tbody>
            </table>
        </div>
    </div>
@endsection