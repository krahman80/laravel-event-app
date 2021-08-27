@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-8">
      <h2>Find events and partisipate.</h2>
        @if ($errors->any())
        <div class="alert alert-danger py-3">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
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
        
            @forelse ($datas as $key => $data)
            <div class="card my-2">
              <div class="card-body">
                <div class="row">
                <div class="col-9">
                  <h5 class="card-title">{{ $data->name }}</h5>
              <p class="card-text">
                Event date : <span class="text-primary">{{ $data->start_time->format('M d, Y') }} </span><br/>
                Event time : <span class="text-primary">{{ $data->start_time->format('H:m') }} </span><br/>
                Event Description : {{ $data->short_desc }}
                </p>
                {!! link_to_route('events.show', 'See more >>', ['data' => $data->id], array('class' => 'card-link')) !!}
                </div>
                <div class="col">
                {!! link_to_route('home.partisipate','[ partisipate ]',array('data' => $data->id), array('class' => 'card-link')) !!}
                </div>
              </div>
            </div>
          </div>
            @empty
              <div class="card border-dark" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">No events found!</h5>
                    <p class="card-text"></p>
                </div>
                </div>
            @endforelse
          
    </div>
    <div class="col-md-4">
      <div class="card mb-3">
        <div class="card-header">Ads</div>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <div class="card-header">Ads 2</div>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
</div>
<div>
{!! $datas->links() !!}
</div>
{{-- {!! $events->links('vendor.pagination.simple-bootstrap-4') !!} --}}
@endsection