@extends('admin.user_pages.user_control')
@section('user_info')
    <div id="user-information" class="row">
        <div class="col-md-5">
            <h5 class="pb-1">اطلاعات پروفایل</h5>
            <form action="{{route('admin-set-rate')}}" method="post">

                <div class="p-1 border-info border-top border-left border-right border-bottom ">

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label"> ایمیل: </label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" value="{{$user->email}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label"> نام: </label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" value="{{$user->name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label"> شماره تلفن: </label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" value="{{$user->phone_number}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label"> امتیاز(0-5): </label>
                        <div class="col-sm-9">
                            {{csrf_field()}}
                            <input type="number" min="0" max="5" name="rate" class="form-control" value="{{(int)$rate}}">
                            <input type="hidden" name="user_id"  value="{{$user->id}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label p-0 pl-3 pt-2"> تعداد آگهی ها: </label>
                        <div class="col-sm-8">
                            <label type="text" class="col-form-label">{{$user_ad_count}}</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label  p-0 pl-3 pt-2"> تعداد پروژه ها: </label>
                        <div class="col-sm-8">
                            <label type="text" class="col-form-label">{{$user_project_count}}</label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <item></item>
                    </div>
                </div>
                <input type="submit" class="btn btn-outline-secondary btn-block mt-3 mr-2 " value="ثبت امتیاز">
            </form>
        </div>
        <div class="col-md-5">
            <h5>رزومه کاربر</h5>
            <form action="{{route('admin-accept-cv')}}" method="post">
                <div class="form-group">
                    @if($user->cv !== null)
                    <textarea name="" id="" cols="30" rows="14" readonly class="form-control"
                              placeholder="">{{$user->cv->cv_text}}</textarea>
                        @else
                        <textarea name="" id="" cols="30" rows="14" readonly class="form-control-plaintext"
                                  placeholder="هیچ رزومه ای از طرف کاربر فرستاده نشده است"></textarea>
                    @endif
                </div>

                @if($user->cv !== null)
                    @if($user->cv->is_accepted == 0)
                        {{csrf_field()}}
                        <input type="hidden" name="user_id" class="form-control btn btn-success" value="{{$user->id}}">
                        <input type="submit" class="form-control btn btn-success" value="تایید رزومه">
                    @else
                        <input type="text" class="form-control btn btn-success" value="رزومه قبلا تایید شده است">
                    @endif
                @endif
            </form>
        </div>

    </div>
@endsection