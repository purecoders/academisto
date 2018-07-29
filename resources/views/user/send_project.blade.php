@extends('layouts.app')
@section('content')
    <div class="container rtl">

        <a href="{{route('user-orders')}}" class="btn btn-secondary mb-1 ">بازگشت به قسمت پروژه ها</a>
        <div class="row mx-auto">
            <div class="col-md-6 m-auto bg-light pt-3">
                <h5 class="mb-3">ارسال پروژه:</h5>
                <form class="rtl">
                    <div class="form-group row">
                        <label for="inputDescription" class="col-sm-2 col-form-label">توضیحات:</label>
                        <div class="col-sm-10">
                            <textarea name="decs" class="form-control" id="inputDescription" rows="6"
                                      placeholder="توضیحات پروژه"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputDescription" class="col-sm-2 col-form-label">فایل پروژه:</label>
                        <div class="col-sm-10">
                            <input type="file" value="" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success">ارسال پروژه به کارفرما</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection