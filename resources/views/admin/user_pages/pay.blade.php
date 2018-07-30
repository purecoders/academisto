@extends('layouts.admin')
@section('content')
    <div class="container rtl bg-light p-4">
        <h4>تسویه حساب با فریلنسر:</h4><br>
        <h6>شما باید این مبلغ را به صورت دستی به حساب کاربر ارسال کنید و در اینجا ثبت کنید.</h6>

        <div class="row text-center">
            <div class="col-md-6">
                <form class="rtl mt-3" method="post" action="{{route('admin-user-send-pay')}}">
                    <div class="form-group row">
                        <label for="inputTitle" class="col-sm-3 col-form-label">مبلغ(تومان):</label>
                        <div class="col-sm-8">
                            <input  readonly type="text" name="sum_pay" class="form-control" id="inputTitle"
                                   placeholder="مبلغ فرستاده شده را وارد کنید..." value="{{number_format($sum_pay)}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputDescription" class="col-sm-3 col-form-label">رسید بانکی:</label>
                        <div class="col-sm-8">
                            <input name="bank_receipt" class="form-control" id="inputDescription"
                                   placeholder="کد رسید بانکی را وارد کنید...">
                        </div>
                    </div>
                    <input type="hidden" name="user_id" value="{{$user_id}}">
                    <div class="form-group row mt-3">
                        <div class="d-flex ml-2">
                            {{csrf_field()}}
                            <button type="submit" class="btn btn-success mr-4 ml-3  ">ثبت تراکنش</button>
                            <a href="{{route('user-orders')}}" class="btn btn-secondary mr-4">بازگشت</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection