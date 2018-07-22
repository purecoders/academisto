@extends('user.user_panel')
@section('user_info')
    <div class="row">
        <div class="col-md-6">
            <h5>رزومه خود را برای ما ارسال کنید</h5>
            @if($cv->is_accepted == 1)
                 <h8 class="bg-success">رزومه شما تایید شده است</h8><br><br>
                @endif
            <form action="{{route('cv-update')}}" method="post">
                <div class="form-group">
                    <textarea name="cv_text" id="" cols="30" rows="10" class="form-control"
                              placeholder="رزومه خود را بنویسید...">{{$cv->cv_text}}</textarea>
                </div>
                {{csrf_field()}}
                <input type="submit" class="form-control btn btn-primary" value="ارسال رزومه">
            </form>
        </div>
        <div class="col-md-6">
            <h5 class="pb-1">اطلاعات پروفایل</h5>
            <form action="{{route('user-update')}}" method="post">
                <div class="p-1 border-info border-top border-left border-right border-bottom h-75 pb-4">

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label"> ایمیل: </label>
                        <div class="col-sm-9">
                            <input  type="text" readonly class="form-control-plaintext" value="{{$user->email}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label"> نام: </label>
                        <div class="col-sm-9">
                            <input name="name" type="text" class="form-control" value="{{$user->name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label"> شماره تلفن: </label>
                        <div class="col-sm-9">
                            <input name="phone_number" type="text" class="form-control" value="{{$user->phone_number}}">
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mb-5">
                        <item></item>
                    </div>
                </div>

                {{csrf_field()}}

                <input type="submit" class="btn btn-outline-secondary btn-block mt-3 mr-2" value="ویرایش">

            </form>
        </div>
    </div>
@endsection