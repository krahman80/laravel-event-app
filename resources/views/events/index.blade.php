@extends('layouts.default')

@section('content')

<h2>Event Index</h2>
{{-- <p>{{ $article }}</p> --}}
<div class="row">
    <div class="col-8">
        <div class="card-columns">
            @forelse ($datas as $key => $data)
                {{-- <li>{{ $data->name }}</li>    --}}
                <div class="card" style="width: 18rem;">
          
          <div class="card-body">
            <h5 class="card-title">{{ $data->name }}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
            @empty
                {{-- <li>No events found!</li> --}}
                <div class="card" style="width: 18rem;">
                    
                    <div class="card-body">
                      <h5 class="card-title">No events found!</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            @endforelse
                </div>
    </div>
    <div class="col-4">
      2 of 2
    </div>
</div>
{!! $datas->links() !!}
{{-- {!! $events->links('vendor.pagination.simple-bootstrap-4') !!} --}}
@endsection