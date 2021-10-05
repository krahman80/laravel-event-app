@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-md-7 my-2">    
                <h4>Attende Event</h4>
            </div>
            <div class="col col-md-2 col-ofset-3 my-2">
                @foreach ($users as $item)
                    <p>{{ $item->name }}</p>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 blog-main col-lg-9 blog-main col-sm-9 blogmain">
                @include('partials._messages')
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