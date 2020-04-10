@if (isset($msgs))
    @foreach($msgs->msg as $msg)
        @if($msg->user_id == $contact_id)
            <li class="sent">
                <p data-date="{{ ($msg->msg_stamp)->format('d/m/y H:i')  }}"> @if ($loop->first)<a class="msg_preview"><span>{{ $msgs->disc_titre }}</span></a>@endif {{ $msg->msg_contenu }}</p>
            </li>
        @else
            <li class="replies">
                @if ($msgs->ad->user->user_id ==  $contact_id)
                    <img class="cmf" src="{{ asset('/files/avatar/' . $msgs->user->user_avatar) }}">
                @else
                    <img class="cmf" src="{{ asset('/files/avatar/' . $msgs->ad->user->user_avatar) }}">
                @endif
                <p data-date="{{ ($msg->msg_stamp)->format('d/m/y H:i')  }}"> @if ($loop->first)<a class="msg_preview"><span>{{ $msgs->disc_titre }}</span></a>@endif {{ $msg->msg_contenu }}</p>
            </li>
        @endif
    @endforeach
@endif
