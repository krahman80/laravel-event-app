
    @if (Auth::check())
        @if (Auth::user()->is_admin == true)
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">Manage Event</h5>
                <ul class="nav flex-column">
                <li class="nav-item">{!! link_to_route('event.index', 'event list', [], []) !!}</li>
                <li class="nav-item">{!! link_to_route('event.create', 'add event', [], []) !!}</li>
                </ul>
            </div>
        </div>
        @else
        <div class="card">
            <div class="card-body">
            hello member!
            </div>
        </div>
        @endif
        <br/>
    @endif    