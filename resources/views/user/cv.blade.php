@extends('user.user_panel')
@section('user_info')
    <div class="row">
        <h5>رزومه خود را برای ما ارسال کنید</h5>
        <div class="col-md-6">
            <form action="">
                <div class="form-group">
                    <textarea name="cv" id="" cols="30" rows="10" class="form-control" placeholder="رزومه خود را بنویسید..."></textarea>
                </div>
                <input type="text" class="form-control btn btn-primary" value="ارسال رزومه">
            </form>
        </div>
        <div class="col-md-6"></div>
    </div>
@endsection
