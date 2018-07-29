@extends('layouts.admin')
@section('content')

    <div class="container rtl bg-light p-4">
        <h4>تسویه حساب با فریلنسر:</h4>
        <div class="row text-center">
            <div class="col-md-6">
                <form class="rtl mt-3">
                    <div class="form-group row">
                        <label for="inputTitle" class="col-sm-3 col-form-label">مبلغ:</label>
                        <div class="col-sm-8">
                            <input type="text" name="title" class="form-control" id="inputTitle"
                                   placeholder="مبلغ فرستاده شده را وارد کنید...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputDescription" class="col-sm-3 col-form-label">رسید بانکی:</label>
                        <div class="col-sm-8">
                            <input name="decs" class="form-control" id="inputDescription"
                                   placeholder="کد رسید بانکی را وارد کنید...">
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <div class="d-flex ml-2">

                        <button type="submit" class="btn btn-success mr-4 ml-3  ">ثبت تراکنش</button>
                        <a href="{{route('user-orders')}}" class="btn btn-secondary mr-4">بازگشت</a>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
@endsection