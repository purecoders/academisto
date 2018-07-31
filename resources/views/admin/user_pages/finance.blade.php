@extends('admin.user_pages.user_control')
@section('user_info')
    <div class="row">
        <div class="col-md-3 mt-2">
            <h5>اطلاعات مالی این کاربر:</h5>
            <form action="">
                <div class="form-group">
                    <lable for="cart-no" > شماره کارت</lable>
                    <input id="card-no" name="cv" class="form-control"
                           @if($user_full_info !== null)
                           value="{{$user_full_info->bank_card_id}}"
                           @endif
                           disabled>
                </div>
                <div class="form-group">
                    <lable for="account-no"> شماره حساب</lable>
                    <input id="account-no" name="cv" class="form-control"
                           @if($user_full_info !== null)
                           value="{{$user_full_info->bank_account_id}}"
                           @endif
                           disabled>
                </div>
                <div class="form-group">
                    <lable for="account-name" >نام دارنده حساب</lable>
                    <input id="account-name" name="cv" class="form-control"
                           @if($user_full_info !== null)
                           value="{{$user_full_info->bank_account_owner_name}}"
                           @endif
                           disabled>
                </div>
            </form>
        </div>
        <div class="col-md-7 mt-5 ml-5">
            <div class="d-flex justify-content-start align-items-center">
                <h5 class="d-inline-block mr-3">جمع پرداخت های <strong class="academisto-brand" >آکادمیستو</strong> به {{$user->name}} :</h5>
                <span class="font-weight-bold strong-font-size admin-price-info p-1">{{number_format($siteSumPays)}} تومان</span>
            </div>
            <div class="d-flex justify-content-start align-items-center mt-2">
                <h5 class="d-inline-block mr-3">جمع پرداخت های {{$user->name}} به <strong class="academisto-brand" >آکادمیستو</strong>:</h5>
                <span class="font-weight-bold strong-font-size admin-price-info p-1">{{number_format($userSumPays)}} تومان</span>
            </div>

            <div class="d-flex justify-content-start align-items-center mt-5 pt-5 flex-wrap">
                <h5 class="d-inline-block mr-3">جمع مبلغی که باید به {{$user->name}} پرداخت کنید: </h5>
                <span class="font-weight-bold strong-font-size admin-price-info p-1"> {{number_format($siteSumMustPays)}} تومان</span>
                {{--<a href="{{route('admin-user-pay')}}" class="btn btn-outline-success ml-3 ">رفتن به صفحه پرداخت</a>--}}
                <form class="ml-3 " action="{{route('admin-user-pay')}}" method="post">
                    <input type="hidden" name="sum_pay" value="{{$siteSumMustPays}}">
                    <input type="hidden" name="user_id" value="{{$user->id}}">
                    {{csrf_field()}}
                    <input type="submit" value="رفتن به صفحه پرداخت" class="btn btn-outline-success ml-3 ">
                </form>
            </div>

        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <h4>پرداخت های {{$user->name}} به <strong class="academisto-brand">آکادمیستو</strong> </h4>
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th  class="text-center" scope="col" >ردیف</th>
                    <th   class="text-center" scope="col">تاریخ</th>
                    <th class="text-center" scope="col">مبلغ(تومان)</th>
                    <th class="text-center" scope="col">بابت</th>
                </tr>
                </thead>
                <tbody>
                @php($i=0)
                @foreach($paymentsFullInfo as $item)
                    @php($i++)
                    <tr class="text-center">
                        <th class="text-center" scope="row ">{{$i}}</th>
                        <td>{{$item['payment']['created_at']}}</td>
                        <td>{{number_format($item['payment']['amount'])}}</td>
                        @if($item['payment']['paymentable_type'] == 'App\Ad')
                             <td> آگهی {{$item['payment_name']}}</td>
                        @else
                            <td> پروژه {{$item['payment_name']}}</td>
                        @endif
                    </tr>
                @endforeach



                {{--<tr class="text-center">--}}
                    {{--<th class="text-center" scope="row ">2</th>--}}
                    {{--<td>96/12/05</td>--}}
                    {{--<td>185000</td>--}}
                    {{--<td>پروژه ربات</td>--}}
                {{--</tr>--}}
                {{--<tr class="text-center">--}}
                    {{--<th class="text-center" scope="row ">3</th>--}}
                    {{--<td>96/12/05</td>--}}
                    {{--<td>185000</td>--}}
                    {{--<td>پروژه ماشین</td>--}}
                {{--</tr>--}}
                {{--<tr class="text-center">--}}
                    {{--<th class="text-center" scope="row ">4</th>--}}
                    {{--<td>96/12/05</td>--}}
                    {{--<td>185000</td>--}}
                    {{--<td>آگهی کتاب</td>--}}
                {{--</tr>--}}


                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <h4>پرداخت های <strong class="academisto-brand">آکادمیستو</strong>  به {{$user->name}}</h4>
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
                @foreach($sitePays as $sitePay)
                    @php($i++)
                    <tr class="text-center">
                        <th class="text-center" scope="row ">{{$i}}</th>
                        <td>{{$sitePay->created_at}}</td>
                        <td>{{number_format($sitePay->amount)}}</td>
                    </tr>
                @endforeach

                {{--<tr class="text-center">--}}
                    {{--<th class="text-center" scope="row ">2</th>--}}
                    {{--<td>96/12/05</td>--}}
                    {{--<td>185000</td>--}}
                    {{--<td>انجام پروژه بامیلو</td>--}}
                {{--</tr>--}}
                {{--<tr class="text-center">--}}
                    {{--<th class="text-center" scope="row ">3</th>--}}
                    {{--<td>96/12/05</td>--}}
                    {{--<td>185000</td>--}}
                    {{--<td>انجام پروژه نمایشگاه</td>--}}
                {{--</tr>--}}

                </tbody>
            </table>
        </div>
    </div>
@endsection