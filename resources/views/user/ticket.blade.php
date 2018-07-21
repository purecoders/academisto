@extends('user.user_panel')
@section('user_info')
    <div class="card rtl">
        <div class="card-header text-center">
            <h5>تیکت ها</h5>
        </div>
        <div class="card-body">
            <div id="chat">
                <div class="chat-view d-flex">
                    <div class="d-flex flex-column  m-1">
                        <i class="fa fa-user img-chat-view"></i>
                        <span>کاربر</span>
                    </div>
                    <p class="ml-1">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و
                    </p>
                </div>
                <div class="chat-view d-flex  bg-info">
                    <p class=" mr-auto" >لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                    <div class="d-flex flex-column">
                        <i class="fa fa-user img-chat-view m-1"></i>
                        <span>ادمین</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer d-flex">
            <textarea id="chat-text" type="text" class="form-control mr-5" rows="3" placeholder="متن..."></textarea>
            <button class="btn btn-primary align-self-center " onclick="send(this)"> ارسال</button>
        </div>
    </div>
@endsection
