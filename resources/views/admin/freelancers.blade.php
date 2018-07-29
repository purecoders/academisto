@extends('layouts.admin')
@section('content')
    <div class="container rtl bg-light p-4 ">
        <div class="d-flex mb-4">
            <h4 class="pt-2"> فریلنسرهای سایت:</h4>
            <div class="mr-4"></div>
            <form action="">
                <div class="d-flex justify-content-around  ">

                    <input type="text" class="form-control w-50 mr-3" placeholder="جستجو">
                    <button type="submit" class=" btn btn-outline-success ">جستجو</button>
                </div>
            </form>
            <div class="d-flex align-self-start ml-4">
                <div>
                    <itm>تعداد کل فریلنسرها:</itm>
                    <itm>6504</itm>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h5 class="alert alert-success d-inline-block p-1">فریلنسر های تایید شده:</h5>
                <table class="table table-dark table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">نام</th>
                        <th scope="col">ایمیل</th>
                        <th scope="col">امتیاز</th>
                        <th scope="col">پروفایل</th>
                        <th scope="col">حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">2</th>
                        <td>Mark</td>
                        <td>Mark@yahoo.com</td>
                        <td>4.8</td>
                        <td><a href="{{route('admin-user-profile')}}" class="btn btn-outline-light">مشاهده پروفایل</a></td>
                        <td><a href="" class="btn btn-outline-danger">حذف</a></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Mark</td>
                        <td>Mark@yahoo.com</td>
                        <td>4.5</td>
                        <td><a href="" class="btn btn-outline-light">مشاهده پروفایل</a></td>
                        <td><a href="" class="btn btn-outline-danger">حذف</a></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Mark</td>
                        <td>Mark@yahoo.com</td>
                        <td>3.2</td>
                        <td><a href="" class="btn btn-outline-light">مشاهده پروفایل</a></td>
                        <td><a href="" class="btn btn-outline-danger">حذف</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Mark@yahoo.com</td>
                        <td>5.1</td>
                        <td><a href="" class="btn btn-outline-light">مشاهده پروفایل</a></td>
                        <td><a href="" class="btn btn-outline-danger">حذف</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <h5 class="alert alert-danger d-inline-block p-1">فریلنسر های تایید نشده:</h5>
                <table class="table table-dark table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">نام</th>
                        <th scope="col">ایمیل</th>
                        <th scope="col">امتیاز</th>
                        <th scope="col">پروفایل</th>
                        <th scope="col">حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">2</th>
                        <td>Mark</td>
                        <td>Mark@yahoo.com</td>
                        <td>4.8</td>
                        <td><a href="{{route('admin-user-profile')}}" class="btn btn-outline-light">مشاهده پروفایل</a></td>
                        <td><a href="" class="btn btn-outline-danger">حذف</a></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Mark</td>
                        <td>Mark@yahoo.com</td>
                        <td>4.5</td>
                        <td><a href="" class="btn btn-outline-light">مشاهده پروفایل</a></td>
                        <td><a href="" class="btn btn-outline-danger">حذف</a></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Mark</td>
                        <td>Mark@yahoo.com</td>
                        <td>3.2</td>
                        <td><a href="" class="btn btn-outline-light">مشاهده پروفایل</a></td>
                        <td><a href="" class="btn btn-outline-danger">حذف</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Mark@yahoo.com</td>
                        <td>5.1</td>
                        <td><a href="" class="btn btn-outline-light">مشاهده پروفایل</a></td>
                        <td><a href="" class="btn btn-outline-danger">حذف</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection