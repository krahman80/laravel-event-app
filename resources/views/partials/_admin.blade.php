
    @if (Auth::check())
        @if (Auth::user()->is_admin == true)
        <div class="card">
            <div class="card-body">
            <h2 class="h4 card-title">Manage Event</h2>
                <ul class="nav flex-column">
                <li class="nav-item">{!! Html::decode(link_to_route('event.index', '<i class="fa fa-fw fa-bar-chart mr-1"></i> event list', array(), array('class'=>'nav-link h5 p-0 m-0'))) !!}</li>
                {{-- <li class="nav-item">{!! Html::decode(link_to_route('logout', '<i class="bi bi-list"></i> Log Out', array(), ['class' => 'small button'])) !!}</li> --}}
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