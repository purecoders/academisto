@extends('user.user_panel')
@section('user_info')
    <div class="row">
        <div class="col-md-6">
            <h5>رزومه خود را برای ما ارسال کنید</h5>
            <form action="">
                <div class="form-group">
                    <textarea name="cv" id="" cols="30" rows="10" class="form-control"
                              placeholder="رزومه خود را بنویسید..."></textarea>
                </div>
                <input type="text" class="form-control btn btn-primary" value="ارسال رزومه">
            </form>
        </div>
        <div class="col-md-6">
            <h5 class="pb-1">اطلاعات پروفایل</h5>
            <form action="">
            <div class="p-1 border-info border-top border-left border-right border-bottom h-75 pb-4">

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label"> ایمیل: </label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" value="pouyaakn4@gmail.com">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label"> نام: </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="پویا">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label"> شماره تلفن: </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="09388584677">
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mb-5">
                        <item></item>
                    </div>
            </div>
                <input type="submit" class="btn btn-outline-secondary btn-block mt-3 mr-2" value="ویرایش">
            </form>
        </div>
    </div>
@endsection
