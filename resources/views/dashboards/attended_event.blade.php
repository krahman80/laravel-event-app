@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-md-7 my-2">    
                <h4 class="h4">Attended Event</h4>
            </div>
            <div class="col col-md-2 col-ofset-3 my-2">
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 blog-main col-lg-9 blog-main col-sm-9 blogmain">
                @include('partials._messages')
                {{-- {{ dd($users->attendedEvent) }} --}}
                @foreach ($users->attendedEvent as $event)
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5 class="h5">{{ $event->name }}</h5>
                                <p class="card-text">
                                    Event Description : {{ $event->description }}
                                </p>
                                <p>
                                    {!! Html::decode(link_to_route('event.show', '<i class="fa fa-eye"></i> view', ['data' => $event->id], array('class' => 'badge badge-pill badge-light px-3 py-2')) ) !!}
                                </p>
                            </div>
                            <div class="col">
                                <h5 class="small">status :</h5>
                                @if ($event->user_pivot->is_confirmed == '0')
                                <span class="badge badge-pill badge-warning px-3 py-2">waiting confirmation</span>
                                @else
                                <span class="badge badge-pill badge-success px-3 py-2">confirmed by event host</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="col">
                @include('partials._member')
            </div>
        </div>
        <div class="row">
            <div class="col col-md-9">
                <div class="d-flex justify-content-center">
                {{-- {!! $events->links() !!} --}}
                </div>
            </div>
        </div>
    </div>
@endsection