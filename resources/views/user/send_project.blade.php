@extends('layouts.app')
@section('content')
    <div class="container rtl">

        <a href="{{route('user-orders')}}" class="btn btn-secondary mb-1 ">بازگشت به قسمت پروژه ها</a>
        <div class="row mx-auto">
            <div class="col-md-6 m-auto bg-light pt-3">
                <h5 class="mb-3">ارسال پروژه:</h5>
                <form class="rtl" action="{{route('user-send-project-answer')}}" enctype="multipart/form-data" method="post">

                    <div class="form-group row">
                        <label for="inputDescription" class="col-sm-2 col-form-label">توضیحات:</label>
                        <div class="col-sm-10">
                            <textarea name="description" class="form-control" id="inputDescription" rows="6"
                                      placeholder="توضیحات پروژه"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputDescription" class="col-sm-2 col-form-label">فایل پروژه:</label>
                        <div class="col-sm-10">
                            <input accept=".zip" type="file" name="file"  id="adfile">
                        </div>
                    </div>
                    <input type="hidden" name="project_id" value="{{$project->id}}">
                    <input type="hidden" name="user_id" value="{{$user['id']}}">
                    <div class="form-group row">
                        <div class="col-sm-10">
                            {{csrf_field()}}

                            <button type="submit" class="btn btn-success">ارسال پروژه به کارفرما</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection