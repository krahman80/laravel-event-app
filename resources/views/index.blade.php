@extends('layouts.app')

@section('content')

<div class="container">
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                   

                    
                </div>
            </div>
        </div>
    </div> --}}
    <div class="row">
        <div class="col col-md-12">
            <h1 class="h3 my-3">Event list</h1>
            <p>Find an event that interests you.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9 blog-main col-lg-9 blog-main col-sm-9 blogmain">
            {{-- {{
                link_to_route('event.partisipate', 'partisipate', ['id'=>'32'], ['class'=>'btn btn-link'])
            }} --}}
            
            @forelse ($events as $event)
                <div class='card mb-2'>
                   <div class='card-body'>
                    <div class='row'>
                        <div class='col-9'>
                            <h2 class='h5 card-title'>{{ $event->name }}</h2>
                            <p class='card-text'>Description : <br/>{{ $event->description }}</p>
                            
                        </div>
                        <div class='col'>

                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class='card mb-2'>
                <div class='card-body'>
                 <div class='row'>
                     <div class='col-9'>
                         <h2 class=' h5 card-title'>No event found</h2>
                         <p class='card-text'></p>
                     </div>
                     <div class='col'>

                     </div>
                 </div>
             </div>
         </div>
            @endforelse
        </div>
        <div class="col">
                
                <div class='card mb-2'>
                    <div class="card-body">
                        @if (Auth::check())
                        <h2 class="h5 card-title">Member Menu</h2>
                        <ul class="nav flex-column">
                            <li class="nav-item"><a href="#">joined event</a></li>
                        </ul>
                        
                        <hr/>
                        @endif    
                        <h2 class='h5 card-title'>Ads</h2>
                        <p class='card-text'>
                            Nam corporis eligendi animi corrupti consectetur. Possimus autem autem occaecati quia est. Omnis ut eum dolores officiis ut eligendi. Accusamus velit molestiae debitis quis. Sed distinctio quae quia
                        </p>
                    </div>
                </div> 
                {{-- 
                <h5 class='card-title'>Ads</h5>
                    <ul class="nav">
                        <li><a href="#">Cras justo odio</a></li>
                        <li class="nav-item">Dapibus ac facilisis in</li>
                        <li class="nav-item">Morbi leo risus</li>
                        <li class="nav-item">Porta ac consectetur ac</li>
                        <li class="nav-item">Vestibulum at eros</li>
                    </ul>
                 --}}
        </div>
    </div>
    <div class="row">
        <div class="col col-md-9">
            <div class="d-flex justify-content-center">
            {!! $events->links() !!}
            </div>
        </div>
    </div>    
</div>

@endsection
