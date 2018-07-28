@extends('layouts.app')
@section('content')
    <div class="container rtl">
        <a href="{{route('user-orders')}}" class="btn btn-secondary mb-1 ">بازگشت به قسمت پروژه ها</a>
        <div class="row mx-auto">

            <div class="col-md-6 m-auto bg-light pt-3">
                <form class="rtl" action="{{route('project-update')}}" method="post">
                    <div class="form-group row">
                        <label for="inputTitle" class="col-sm-2 col-form-label">عنوان:</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" class="form-control" id="inputTitle" value="{{$project->title}}"
                                   placeholder="عنوان پروژه">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputDescription" class="col-sm-2 col-form-label">توضیحات:</label>
                        <div class="col-sm-10">
                            <textarea name="description" class="form-control" id="inputDescription" rows="4"
                                      placeholder="توضیحات پروژه">{{$project->description}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPrice" class="col-sm-2 col-form-label">قیمت(تومان):</label>
                        <div class="col-sm-10">
                            <input type="text" name="user_price" class="form-control" id="inputPrice" value="{{number_format($project->user_price)}}"
                                   placeholder="قیمت (تومان)">
                        </div>
                    </div>
                    {{--<div class="form-group row">--}}
                        {{--<label for="inputDescription" class="col-sm-2 col-form-label">فوری:</label>--}}
                        {{--<div class="col-sm-10">--}}
                            {{--<div class="form-check">--}}
                                {{--<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>--}}
                                {{--<label class="form-check-label" for="gridRadios1">--}}
                                    {{--فوری باشد--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="form-check">--}}
                                {{--<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">--}}
                                {{--<label class="form-check-label" for="gridRadios2">--}}
                                    {{--فوری نباشد--}}
                                {{--</label>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{csrf_field()}}
                    <input type="hidden" name="id"  value="{{$project->id}}">


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