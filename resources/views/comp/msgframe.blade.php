<link rel="stylesheet" href="{{ asset('css/msgframe.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<div class="col-12 col-lg-8 p-0 mr-0 mb-3" id="colMsgframe">
    <div class="d-flex align-items-center" id="msgframe">
        <div id="sidepanel" @if (isset($msgs)) style="display: none;" @endif>
            <div id="search">
                <label for=""><i class="fa fa-search" aria-hidden="true"></i></label>
                <input type="text" id="contactSearch" placeholder="Search contacts...">
            </div>
            <div id="contacts">
                <ul id="contacts_list">
                    @include('msg.contacts')
                </ul>
            </div>
        </div>
        <div class="content" @if (!isset($msgs)) style="display: none;" @endif>
            <div class="contact-profile">
                <a id="BackToContacts" type="button"><i class="fa fa-arrow-left"></i></a>
                <img class="active" id="contacter_img" src="{{ asset('img/avatar.svg') }}">
                <p id="contacter_title">@if (isset($msgs)){{ $msgs->disc_titre  }}@endif</p>
                <input type="hidden" id="contacter_disc" value="@if (isset($msgs)){{ $msgs->disc_id  }}@endif">
            </div>
            <div class="messages">
                <ul>
                    @include('msg.messages')
                </ul>
            </div>
            <div class="message-input">
                <div class="wrap">
                    <input type="text" placeholder="Write your message.." style="height: 50px;">
                    <button class="btn shadow-none submit" style="border-radius: 0px;height: 50px;"><i class="fa fa-paper-plane" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>