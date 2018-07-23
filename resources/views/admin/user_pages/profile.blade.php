@extends('admin.user_pages.user_control')
@section('user_info')
    <div id="user-information" class="row">
        <div class="col-md-5">
            <h5 class="pb-1">اطلاعات پروفایل</h5>
            <form action="">
                <div class="p-1 border-info border-top border-left border-right border-bottom ">

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
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label"> امتیاز: </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="4.5">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label p-0 pl-3 pt-2"> تعداد آگهی ها: </label>
                        <div class="col-sm-8">
                            <label type="text" class="col-form-label">54</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label  p-0 pl-3 pt-2"> تعداد پروژه ها: </label>
                        <div class="col-sm-8">
                            <label type="text" class="col-form-label">10</label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <item></item>
                    </div>
                </div>
                <input type="submit" class="btn btn-outline-secondary btn-block mt-3 mr-2" value="ویرایش">
            </form>
        </div>
        <div class="col-md-5">
            <h5>رزومه کاربر</h5>
            <form action="">
                <div class="form-group">
                    <textarea name="cv" id="" cols="30" rows="14" class="form-control"
                              placeholder=""></textarea>
                </div>
                <input type="text" class="form-control btn btn-success" value="تایید رزومه">
            </form>
        </div>

    </div>
@endsection