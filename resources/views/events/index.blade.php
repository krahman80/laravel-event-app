@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9 blog-main col-lg-9 blog-main col-sm-9 blogmain">
                @forelse ($events as $event)
                    <div class="card mb-2">
                    <div class="card-body">
                        <div class="row">
                        <div class="col-9">
                        <h5 class="card-title">{{ $event->name }}</h5>
                    <p class="card-text">
                        Event Description : {{ $event->description }}
                        </p>
                        {!! link_to_route('event.show', '[See more]', ['data' => $event->id], array('class' => 'card-link')) !!}
                        </div>
                        <div class="col">
                        {{-- {!! link_to_route('home.partisipate','[ partisipate ]',array('data' => $data->id), array('class' => 'card-link')) !!} --}}
                        </div>
                    </div>
                    </div>
                    </div>
                        @empty
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">No events found!</h5>
                                <p class="card-text"></p>
                            </div>
                            </div>
                        @endforelse                   
            
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Welcome, {{ Auth::user()->name }}</div>
                    @include('partials._admin')
                    
                </div>
            </div>
            {!! $events->links() !!}
        </div>
    </div>
</div>
@endsection