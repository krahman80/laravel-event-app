@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col col-md-7 my-2">    
            <h4>Manage Event</h4>
        </div>
        <div class="col col-md-2 col-ofset-3 my-2">
            {!! Html::decode(link_to_route('event.create', '<i class="fa fa-plus"></i> add event', array(), array('class' => ' nav-link ml-4 h5')) ) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-9 blog-main col-lg-9 blog-main col-sm-9 blogmain">
                @forelse ($events as $event)
                    <div class="card mb-2">
                    <div class="card-body">
                        <div class="row">
                        <div class="col-10">
                        <h5 class="card-title">{{ $event->name }}</h5>
                    <p class="card-text">
                        Event Description : {{ $event->description }}
                        </p>
                        </div>
                        <div class="col">
                            <div class="row my-1">{!! Html::decode(link_to_route('event.show', '<i class="fa fa-eye"></i> view', ['data' => $event->id], array('class' => 'badge badge-pill badge-light px-3 py-2')) ) !!}</div>
                            <div class="row my-1">{!! Html::decode(link_to_route('event.edit', '<i class="fa fa-edit"></i> edit', ['data' => $event->id], ['class' => 'badge badge-pill badge-light px-3 py-2'])) !!}</div>
                            <div class="row my-1">{!! Html::decode(link_to_route('event.destroy', '<i class="fa fa-trash"></i> delete', ['data' => $event->id], array('class' => 'badge badge-pill badge-light px-3 py-2')) ) !!} </div>

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
            <div class="col">
                @include('partials._member')
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
</div>
@endsection