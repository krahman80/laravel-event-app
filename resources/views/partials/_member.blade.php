
    @if (Auth::check())
        <div class="card">
            <div class="card-body">
            <h2 class="h4 card-title">Manage Event</h2>
                <ul class="nav flex-column">
                <li class="nav-item">{!! Html::decode(link_to_route('dashboard.my-event', '<i class="fa fa-fw fa-bar-chart mr-1"></i> my event', array(), array('class'=>'nav-link h5 p-0 m-0'))) !!}</li> 
                <li class="nav-item">{!! Html::decode(link_to_route('dashboard.attended-event', '<i class="fa fa-fw fa-book mr-1"></i> attended event', array(), array('class'=>'nav-link h5 p-0 m-0'))) !!}</li> 
               </ul>
            </div>
        </div>
        @else
        <div class="card">
            <div class="card-body">
                <h2 class='h5 card-title'>Ads</h2>
                    <p class='card-text'>
                        Nam corporis eligendi animi corrupti consectetur. Possimus autem autem occaecati quia est. Omnis ut eum dolores officiis ut eligendi. Accusamus velit molestiae debitis quis. Sed distinctio quae quia
                    </p>
            </div>
        </div>
        <br/>
    @endif    