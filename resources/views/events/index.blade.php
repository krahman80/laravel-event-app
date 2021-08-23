@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-8">
        <div class="py-3">
        {!! Form::open(['url' => 'search']) !!}
         <div class="input-group">
           {!! Form::text('keyword', null, ['class'=>'form-control mr-2' , 'placeholder'=>'Search Event']); !!} 
                  <button type="submit" class="btn btn-primary">
                      Search
                  </button>
              </span>
          </div>
          {!! Form::close() !!}
        </div>
        <div class="card-columns">
            @forelse ($datas as $key => $data)
            <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">{{ $data->name }}</h5>
              <p class="card-text" style="min-height: 90px;">
                Event date : <span class="text-primary">{{ $data->start_time->format('M d, Y') }} </span><br/>
                Event Description : {{ $data->short_desc }}
                </p>
                {!! link_to_route('events.show', 'See Detail >>', ['data' => $data->id], array('class' => 'card-link')) !!}
            </div>
        </div>
            @empty
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">No events found!</h5>
                    <p class="card-text"></p>
                    <a href="#" class="card-link">Go somewhere</a>
                </div>
                </div>
            @endforelse
          </div>
    </div>
    <div class="col-md-4">
      2 of 2
    </div>
</div>
{!! $datas->links() !!}
{{-- {!! $events->links('vendor.pagination.simple-bootstrap-4') !!} --}}
@endsection