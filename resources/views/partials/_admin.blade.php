
    @if (Auth::check())
        @if (Auth::user()->is_admin == true)
        <div class="card">
            <div class="card-body">
            <h2 class="h4 card-title">Manage Event</h2>
                <ul class="nav flex-column">
                <li class="nav-item">{!! link_to_route('event.index', 'event list', [], []) !!}</li>
                <li class="nav-item">{!! link_to_route('event.create', 'add event', [], []) !!}</li>
                </ul>
            </div>
        </div>
        @else
        <div class="card">
            <div class="card-body">
                <h2 class="h4 card-title">Hello, Member</h2>
            </div>
        </div>
        @endif
        <br/>
    @endif    