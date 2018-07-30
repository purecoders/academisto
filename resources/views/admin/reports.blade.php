@extends('layouts.admin')
@section('content')
    <div class="container rtl bg-light p-4">
        <div class="row">
            <div class="col-md-6">
                <h4>کل گزارش های سایت:</h4>
                <table class="table table-sm table-striped table-dark">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">پروژه یا آگهی</th>
                        <th scope="col">مشاهده</th>
                        <th scope="col">حذف</th>

                    </tr>
                    </thead>
                    <tbody>
                    @php($i=0)
                    @foreach($reportsFullInfo as $item)
                        @php($i++)

                        <tr>
                            <th scope="row">{{$i}}</th>

                            <td>{{$item['reportable_name']}}</td>
                            @if($item['report']['reportable_type'] == 'App\Ad')
                                <td>
                                <form class="btn btn-outline-info" method="post" action="{{route('admin-user-ads')}}">
                                    {{csrf_field()}}
                                    <input  type="hidden" name="user_id" value="{{$item['report']['user_id_to']}}">
                                    <input class="btn btn-outline-info" type="submit" value="مشاهده">
                                </form>
                                </td>

                                {{--<td><a href="" class="btn btn-outline-info"></a></td>--}}



                            @elseif($item['report']['reportable_type'] == 'App\Project')
                                <td>
                                <form class="btn btn-outline-info" method="post" action="{{route('admin-user-orders')}}">
                                    {{csrf_field()}}
                                    <input  type="hidden" name="user_id" value="{{$item['report']['user_id_to']}}">
                                    <input class="btn btn-outline-info" type="submit" value="مشاهده">
                                </form>
                                </td>

                                {{--<td><a href="" class="btn btn-outline-info"></a></td>--}}
                            @endif





                            @if($item['report']['reportable_type'] == 'App\Ad')
                                <td>
                                <form class="btn btn-outline-danger" method="post" action="{{route('admin-remove-user-ad-from-reports')}}">
                                    {{csrf_field()}}
                                    <input  type="hidden" name="ad_id" value="{{$item['report']['reportable_id']}}">
                                    <input  type="hidden" name="user_id" value="{{$item['report']['user_id_to']}}">
                                    <input class="btn btn-outline-danger" type="submit" value="حذف این پروژه یا آگهی">
                                </form>
                                </td>

                                {{--<td><a href="" class="btn btn-outline-danger">حذف</a></td>--}}

                            @elseif($item['report']['reportable_type'] == 'App\Project')
                                <td>
                                <form class="btn btn-outline-danger" method="post" action="{{route('admin-remove-user-project-from-reports')}}">
                                    {{csrf_field()}}
                                    <input  type="hidden" name="project_id" value="{{$item['report']['reportable_id']}}">
                                    <input  type="hidden" name="user_id" value="{{$item['report']['user_id_to']}}">
                                    <input class="btn btn-outline-danger" type="submit" value="حذف این پروژه یا آگهی">
                                </form>
                                </td>

                            @endif

                                {{--<td><a href="" class="btn btn-outline-danger">حذف</a></td>--}}
                            {{--@endif--}}

                        </tr>

                    @endforeach



                    </tbody>
                </table>

            </div>



        </div>
    </div>
@endsection