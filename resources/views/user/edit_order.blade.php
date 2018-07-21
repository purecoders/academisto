@extends('layouts.app')
@section('content')
    <div class="container rtl">
        <a href="{{route('user-orders')}}" class="btn btn-secondary mb-1 ">بازگشت به قسمت پروژه ها</a>
        <div class="row mx-auto">

            <div class="col-md-6 m-auto bg-light pt-3">
                <form class="rtl">
                    <div class="form-group row">
                        <label for="inputTitle" class="col-sm-2 col-form-label">عنوان:</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" class="form-control" id="inputTitle"
                                   placeholder="عنوان پروژه">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputDescription" class="col-sm-2 col-form-label">توضیحات:</label>
                        <div class="col-sm-10">
                            <textarea name="decs" class="form-control" id="inputDescription" rows="4"
                                      placeholder="توضیحات پروژه"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPrice" class="col-sm-2 col-form-label">قیمت:</label>
                        <div class="col-sm-10">
                            <input type="text" name="price" class="form-control" id="inputPrice"
                                   placeholder="قیمت (تومان)">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputDescription" class="col-sm-2 col-form-label">فوری:</label>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    فوری باشد
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    فوری نباشد
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">ویرایش و ثبت تغییرات</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection