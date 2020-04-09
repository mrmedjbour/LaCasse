<link rel="stylesheet" href="{{ asset('css/msgframe.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">


<div class="col-12 col-lg-8 p-0 mr-0 mb-3" id="colMsgframe">
    <div class="d-flex align-items-center" id="msgframe">
        <div id="sidepanel">
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
        <div class="content" style="display: none;">
            <div class="contact-profile"><a id="BackToContacts" href="#"><i class="fa fa-arrow-left"></i></a>
                <img class="active" src="{{ asset('img/avatar.svg') }}" alt="">
                <p>Louis Litt</p>
            </div>
            <div class="messages">
                <ul>
                    <li class="replies">
                        <img src="{{ asset('img/avatar.svg') }}" alt="">
                        <p data-date="01/03/2020 13:51">
                            <a href="#" class="msg_preview"> <span>Radiator Peugeot 307 - 2011</span>
                            </a>Excuses don't win championships.</p>
                    </li>
                    <li class="sent">
                        <p data-date="01/03/2020 13:52">Oh yeah, did Michael Jordan tell you that?</p>
                    </li>
                    <li class="replies">
                        <img src="{{ asset('img/avatar.svg') }}" alt="">
                        <p data-date="01/03/2020 13:29">No, I told him that.</p>
                    </li>
                    <li class="sent">
                        <p data-date="01/03/2020 13:42">What are your choices when someone puts a gun to your head?</p>
                    </li>
                    <li class="replies">
                        <img src="{{ asset('img/avatar.svg') }}" alt="">
                        <p data-date="01/03/2020 13:29">What are you talking about? You do what they say or they shoot you.</p>
                    </li>
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