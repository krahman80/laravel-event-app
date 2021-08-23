<nav class="navbar navbar-dark bg-dark navbar-expand-sm">
    <a class="navbar-brand" href="{{ url('/') }}">
      {{ config('app.name', 'Event Pool') }}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-2" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar-list-2">
      <ul class="navbar-nav">
        <li class="nav-item active">
          {{-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> --}}
          {{-- {!! link_to_route('welcome', 'home', array(), array('class' => 'nav-link')) !!} --}}
        </li>
        <li class="nav-item">
          {{-- <a class="nav-link" href="#">Events</a> --}}
          {!! link_to_route('events.index', 'events', array(), array('class' => 'nav-link')) !!}
        </li>
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
      </ul>
    </div>
</nav>