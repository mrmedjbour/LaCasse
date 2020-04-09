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