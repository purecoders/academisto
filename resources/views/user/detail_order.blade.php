@extends('layouts.app')
@section('content')
    <div class="container rtl">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">پروژه سیستم سما</h5>
                        <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                            طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای
                            شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                            کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا
                            با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو
                            در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه
                            راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و
                            جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 bg-light">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">کاربری که درخواست داده است</th>
                        <th scope="col">توضیحات</th>
                        <th scope="col">پذیرفتن</th>
                        <th scope="col">رد</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td></td>
                        <td><button class="btn btn-success">پذیرفتن</button></td>
                        <td><button class="btn btn-danger">رد</button></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Mark</td>
                        <td></td>

                        <td><button class="btn btn-success">پذیرفتن</button></td>
                        <td><button class="btn btn-danger">در</button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Mark</td>
                        <td></td>

                        <td><button class="btn btn-success">پذیرفتن</button></td>
                        <td><button class="btn btn-danger">در</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection