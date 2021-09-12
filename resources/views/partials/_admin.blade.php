<div class="card-body">
    @if (Auth::check())
        @if (Auth::user()->is_admin == true)
            <ul class="nav flex-column">
             <li class="nav-item">{!! link_to_route('event.index', 'event list', [], ['class'=>'nav-link']) !!}</li>
             <li class="nav-item">{!! link_to_route('event.create', 'add event', [], ['class'=>'nav-link']) !!}</li>
            </ul>
        @else
            is member
        @endif
    @endif

     
 </div>