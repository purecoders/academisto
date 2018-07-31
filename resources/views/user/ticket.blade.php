@extends('user.user_panel')
@section('user_info')
    <div class="card rtl">
        <div class="card-header text-center">
            <h5>تیکت ها</h5>
        </div>
        <div class="card-body">
            <div id="chat">
                @foreach($tickets as $ticket)
                    @if($ticket->is_user_send == 1)
                        <div class="chat-view d-flex w-50">
                            <div class="d-flex flex-column  m-1">
                                <i class="fa fa-user img-chat-view"></i>
                                <b><span>{{$user->name}}</span></b>
                            </div>
                            <p class="ml-1">
                                {{$ticket->text}}
                            </p>
                        </div>
                    @else
                        <div class="chat-view d-flex w-50 bg-info ml-auto">
                            <p class=" mr-auto" >
                                {{$ticket->text}}
                            </p>
                            <div class="d-flex flex-column">
                                <i class="fa fa-user img-chat-view m-1"></i>
                                <b><span>ادمین</span></b>
                            </div>
                        </div>
                    @endif
                @endforeach







            </div>
        </div>
            <form action="{{route('user-send-ticket')}}" method="post">
                <div class="card-footer d-flex">
                    <textarea id="chat-text" type="text" name="text" class="form-control mr-5" rows="3" placeholder="متن..."></textarea>
                    {{csrf_field()}}
                    <input class="btn btn-primary align-self-center " type="submit" value="ارسال"  )/>
                    {{--<button class="btn btn-primary align-self-center " type="submit"  )> ارسال</button>--}}
                </div>
            </form>
    </div>
@endsection