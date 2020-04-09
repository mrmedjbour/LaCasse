@foreach($descs as $desc)
    <li class="contact">
        <div class="d-flex align-items-center wrap">
            <div class="contact_icon">
                @if ($desc->user_id == $contact_id)
                    <span class="contact-status @if ($desc->ad->user->isOnline()) online @endif"></span>
                @else
                    <span class="contact-status @if ($desc->user->isOnline()) online @endif"></span>
                @endif

                @if ($desc->user_id == $contact_id)
                    <img src="{{ asset('/files/avatar/' . $desc->ad->user->user_avatar) }}">
                @else
                    <img src="{{ asset('/files/avatar/' . $desc->user->user_avatar) }}">
                @endif
            </div>
            <div class="meta">
                <p class="name">{{ $desc->disc_titre }}</p>
                @if ($desc->latestmsg->user_id == $contact_id)
                    <p class="preview"><span><i class="fa fa-reply"></i></span>{{ $desc->latestmsg->msg_contenu }}</p>
                @else
                    <p class="preview">{{ $desc->latestmsg->msg_contenu }}</p>
                @endif
            </div>
        </div>
        <input type="hidden" id="disc_id" value="{{ $desc->disc_id }}">
    </li>
@endforeach




{{--<li class="contact">--}}
{{--    <div class="d-flex align-items-center wrap">--}}
{{--        <div class="contact_icon"><span class="contact-status"></span>--}}
{{--            <img src="{{ asset('img/avatar.svg') }}" alt="">--}}
{{--        </div>--}}
{{--        <div class="meta">--}}
{{--            <p class="name">sdqs dsq</p>--}}
{{--            <p class="preview"><span><i class="fa fa-reply"></i></span>Hi</p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <input type="hidden" id="disc_id" value="1">--}}
{{--</li>--}}

{{--<li class="contact">--}}
{{--    <div class="d-flex align-items-center wrap">--}}
{{--        <div class="contact_icon"><span class="contact-status online"></span>--}}
{{--            <img src="{{ asset('img/avatar.svg') }}" alt="">--}}
{{--        </div>--}}
{{--        <div class="meta">--}}
{{--            <p class="name">Louis Litt</p>--}}
{{--            <p class="preview">What are you talking about? You do what they say or they shoot you</p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <input type="hidden" id="user_id" value="2">--}}
{{--</li>--}}