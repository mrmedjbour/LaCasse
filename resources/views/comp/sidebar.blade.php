<div class="col sidebar">
    <div class="mini-submenu"><span>{{__('Menu')}}</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </div>
    <div class="list-group">
        <span class="list-group-item menu-titre">Menu<span class="pull-right" id="slide-submenu"><i class="fa fa-eye-slash"></i></span></span>
        <a href="{{route('home')}}" class="list-group-item"> <i class="fa fa-tachometer"></i> {{__('Dashboard')}}</a>
        @if (Auth::user()->role_id == 5)
            <a href="{{route('annonce.create')}}" class="list-group-item"> <i class="fa fa-plus"></i> {{__('Add ad')}}</a>
            <a href="{{route('messages')}}" class="list-group-item"> <i class="fa fa-comments"></i> {{__('Mailbox')}} @if($unreadMsgCount) <span class="badge">{{ $unreadMsgCount ?? '' }}</span> @endif</a>
            <a href="{{route('annonce.index')}}" class="list-group-item"> <i class="fa fa-folder-open-o"></i> {{__('My Ads')}} @if($totalAdsCount) <span class="badge">{{ $totalAdsCount ?? '' }}</span> @endif</a>
            <a href="{{route('user.account')}}" class="list-group-item"> <i class="fa fa-user"></i> {{__('Account information')}}</a>
            <a href="{{route('pro.index')}}" class="list-group-item"> <i class="fas fa-user-tie"></i> {{__('Switch to professional account')}}</a>
        @elseif(Auth::user()->role_id == 1)
            <a href="{{route('messages')}}" class="list-group-item"> <i class="fa fa-comments"></i> {{__('Mailbox')}} @if($unreadMsgCount) <span class="badge">{{ $unreadMsgCount ?? '' }}</span> @endif</a>
            <a href="{{route('annonce.index')}}" class="list-group-item"> <i class="fa fa-folder-open-o"></i> {{__('Ads')}} @if($totalAdsCount) <span class="badge">{{ $totalAdsCount ?? '' }}</span> @endif</a>
            <a href="{{route('pro.index')}}" class="list-group-item"> <i class="fas fa-tasks"></i> {{__('Professional Account Requests')}}</a>
            <a href="{{route('users.index')}}" class="list-group-item"> <i class="fa fa-users" aria-hidden="true"></i> {{__('Manage users')}}</a>
            <a href="{{route('model.index')}}" class="list-group-item"> <i class="fa fa-car" aria-hidden="true"></i> {{__('Manage vehicle models')}}</a>
            <a href="{{route('user.account')}}" class="list-group-item"> <i class="fa fa-user"></i> {{__('Account information')}}</a>
        @elseif(Auth::user()->role_id == 2)
            <a href="{{route('annonce.create')}}" class="list-group-item"> <i class="fa fa-plus"></i> {{__('Add ad')}}</a>
            <a href="{{route('messages')}}" class="list-group-item"> <i class="fa fa-comments"></i> {{__('Mailbox')}} @if($unreadMsgCount) <span class="badge">{{ $unreadMsgCount ?? '' }}</span> @endif</a>
            <a href="{{route('annonce.index')}}" class="list-group-item"> <i class="fa fa-folder-open-o"></i> {{__('My Ads')}} @if($totalAdsCount) <span class="badge">{{ $totalAdsCount ?? '' }}</span> @endif</a>
            <a href="{{route('role.index')}}" class="list-group-item"> <i class="fas fa-users-cog"></i> {{__('Manage roles')}}</a>
            <a href="{{route('user.account')}}" class="list-group-item"> <i class="fa fa-user"></i> {{__('Account information')}}</a>
        @elseif(Auth::user()->role_id == 3)
            <a href="{{route('messages')}}" class="list-group-item"> <i class="fa fa-comments"></i> {{__('Mailbox')}} @if($unreadMsgCount) <span class="badge">{{ $unreadMsgCount ?? '' }}</span> @endif</a>
            <a href="{{route('annonce.index')}}" class="list-group-item"> <i class="fa fa-folder-open-o"></i> {{__('Ads')}} @if($totalAdsCount) <span class="badge">{{ $totalAdsCount ?? '' }}</span> @endif</a>
            <a href="{{route('user.account')}}" class="list-group-item"> <i class="fa fa-user"></i> {{__('Account information')}}</a>
        @elseif(Auth::user()->role_id == 4)
            <a href="{{route('annonce.create')}}" class="list-group-item"> <i class="fa fa-plus"></i> {{__('Add ad')}}</a>
            <a href="{{route('messages')}}" class="list-group-item"> <i class="fa fa-comments"></i> {{__('Mailbox')}} @if($unreadMsgCount) <span class="badge">{{ $unreadMsgCount ?? '' }}</span> @endif</a>
            <a href="{{route('annonce.index')}}" class="list-group-item"> <i class="fa fa-folder-open-o"></i> {{__('Ads')}} @if($totalAdsCount) <span class="badge">{{ $totalAdsCount ?? '' }}</span> @endif</a>
            <a href="{{route('user.account')}}" class="list-group-item"> <i class="fa fa-user"></i> {{__('Account information')}}</a>
        @endif
    </div>
</div>