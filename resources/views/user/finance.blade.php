@extends('user.user_panel')
@section('user_info')
    <div class="row">
        <h5>اطلاعات مالی خود را وارد کنید:</h5>

        <div class="col-md-6 mt-3">
            <form action="">
                <div class="form-group">
                    <lable for="cart-no" > شماره کارت</lable>
                    <input id="card-no" name="cv" class="form-control" placeholder=" شماره کارت خود را بنویسید">
                </div>
                <div class="form-group">
                    <lable for="account-no"> شماره حساب</lable>
                    <input id="account-no" name="cv" class="form-control" placeholder=" شماره حساب خود را بنویسید">
                </div>
                <div class="form-group">
                    <lable for="account-name" >به نام</lable>
                    <input id="account-name" name="cv" class="form-control" placeholder="نام دارنده حساب را بنویسید">
                </div>
                <input type="text" class="form-control btn btn-primary" value="ارسال ">
            </form>
        </div>
        <div class="col-md-6"></div>
    </div>
@endsection
