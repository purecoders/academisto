@extends('user.user_panel')
@section('user_info')
    {{--User Project Order List--}}
    <section>
        <div class="row">
            <div class="col-md-6">
                <h5>آخرین پروژه هایی که سفارش داده اید:</h5>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-between">
                    <item><i class="fa fa-circle text-primary"></i> منتشر شده</item>
                    <item><i class="fa fa-circle text-warning"></i> در حال انجام</item>
                    <item><i class="fa fa-circle text-success"></i> تمام شده</item>
                </div>
            </div>

        </div>

        <div class="swiper-container" dir="rtl">
            <div class="swiper-wrapper">
                @foreach($projects as $project)
                    <div class="swiper-slide">
                        <div id="project_card"
                             @if($project->is_finished == 1 && $project->is_started == 1)
                                class="card rtl border-success"
                             @elseif($project->is_started == 1 && $project->is_finished == 0)
                                class="card rtl border-warning"
                             @elseif($project->is_started == 0)
                                class="card rtl border-primary"
                                     @endif>
                            <div class="card-body">
                                <h5 class="card-title">{{$project->title}}</h5>
                                <div id="summary">
                                    <p class="card-text collapse" id="sum1{{$project->id}}">
                                        {{$project->description}}
                                    </p>
                                    <a class="collapsed" data-toggle="collapse" href="#sum1{{$project->id}}" aria-expanded="false"
                                       aria-controls="collapseSummary"></a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between p-0">
                                <a href="{{route('user-order-detail',$project->id)}}" class="py-1 m-1 btn btn-outline-secondary">مشاهده جزئیات</a>
                                @if($project->is_immediate == 1)

                                  <alert class="alert alert-danger p-1 m-1">فوری</alert>
                                @endif
                            </div>
                            <div class="card-footer d-flex justify-content-between p-1">
                                <a href="{{route('user-order-edit',1)}}" class="btn btn-primary">ویرایش پروژه</a>


                                {{--<a href="#" class="btn btn-danger">حذف پروژه</a>--}}

                                <form class="form-group mr-auto d-inline-block" method="post" action="{{route('project.destroy', $project->id)}}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input class="form-control btn btn-danger" type="submit" value="حذف پروژه">
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach





            </div>
            <!-- Add Pagination -->
            <!-- Add Navigation -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>
    <hr>
    {{--User Order New Project Form --}}
    <section>
        <div class="row">
            <div class="col-md-6">

                <form class="rtl" action="{{route('project.store')}}">
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
                            <textarea name="description" class="form-control" id="inputDescription" rows="4"
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

                    {{csrf_field()}}

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success">ارسال و پرداخت</button>

                            goto payment page
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">

            </div>
        </div>
    </section>
@endsection