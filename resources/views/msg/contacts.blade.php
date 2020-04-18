@foreach($descs as $desc)
    <li class="contact" id="liStItem">
        <div class="d-flex align-items-center wrap">
            <div class="contact_icon">
                @if ($desc->user_id == $contact_id)
                    <span id="spaAn" class="contact-status @if ($desc->adWithDeleted->user->isOnline()) online @endif"></span>
                @else
                    <span id="spaAn" class="contact-status @if ($desc->user->isOnline()) online @endif"></span>
                @endif

                @if ($desc->user_id == $contact_id)
                    <img class="cmf" src="{{ asset('/files/avatar/' . $desc->adWithDeleted->user->user_avatar) }}">
                @else
                    <img class="cmf" src="{{ asset('/files/avatar/' . $desc->user->user_avatar) }}">
                @endif
            </div>
            <div class="meta">
                <p class="name">{{ $desc->disc_titre }}</p>
                @if ($desc->latestmsg->user_id == $contact_id)
                    <p class="preview"><span id="spaAn"><i class="fa fa-reply" id="iIconID"></i></span>{{ $desc->latestmsg->msg_contenu }}</p>
                @else
                    <p class="preview">{{ $desc->latestmsg->msg_contenu }}</p>
                @endif
            </div>
        </div>
        <input type="hidden" id="disc_id" value="{{ $desc->disc_id }}">
    </li>
@endforeach
